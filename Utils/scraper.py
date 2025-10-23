import requests
from bs4 import BeautifulSoup
from urllib.parse import urljoin
from urllib.parse import urlparse
import sys


BASE_URL = "https://flyhouse.pl/"


class Product:
    _id_counter = 2


    def __init__(self, name, url=None, parent=None):
        self.id = Category._id_counter    
        Category._id_counter += 1  
        self.name = name
        self.url = url
        self.category = None
        self.imageUrls = ""
        self.description = ""
        self.price = None
        self.stock = None
        self.manufacturer = None
        
        
    def get_last_path_segment(self):
        parsed = urlparse(self.url)
        path = parsed.path   
        segments = path.strip("/").split("/")  
        if segments:
            return segments[-1]
        return None

   
    def __repr__(self):
        return (
            f"{self.id};"
            f"{self.name};"
            f"{self.url or ''};"
            f"{self.category or ''};"
            f"{self.imageUrls};"
            f"{self.description};"
            f"{self.price if self.price is not None else ''};"
            f"{self.stock if self.stock is not None else ''};"
            f"{self.manufacturer or ''};1;1;1;1;10;0;0;0;"
        )


class Category:
    _id_counter = 10


    def __init__(self, name, url=None, parent=None):
        self.id = Category._id_counter    
        Category._id_counter += 1  
        self.name = name
        self.url = url
        self.parent = parent
        self.subcategories = []
        self.imageUrl = ""
        self.description = ""
        
    def get_last_path_segment(self):
        parsed = urlparse(self.url)
        path = parsed.path   
        segments = path.strip("/").split("/")  
        if segments:
            return segments[-1]
        return None


    def set_url(self, url):
        
        self.url = url

    def __repr__(self):
        return f"{self.id};1;{self.name};{2 if self.parent == None else self.parent.id};0;{self.description};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.imageUrl};;{self.url};"


categories = []
products = []

def lookForSubCategories(url,parent):
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    categoriesLi = soup.find_all("li","clearfix")
    for categorySoup in categoriesLi:
        newCategory = Category(categorySoup.find_next('a')["title"].replace("'",""))
        newCategory.set_url(categorySoup.find_next('a')["href"])
        newCategory.imageUrl = categorySoup.find_next('img')["src"]
        newCategory.parent = parent
        categories.append(newCategory)
        lookForSubCategories(newCategory.url,newCategory) 

def scrapeMainCategories(url):
    """Scrape all categories and subcategories recursively."""
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    
    
    categoriesLi = soup.find_all("li","li_0")
    for categorySoup in categoriesLi:
    
        newCategory = Category(categorySoup.find_next('a')["title"].replace("'",""))
        print(newCategory.name)
        newCategory.set_url(categorySoup.find_next('a')["href"])
        categories.append(newCategory)
        lookForSubCategories(newCategory.url,newCategory)

    print(categories)

def createCsv(filename,Objects):
    with open("./"+ filename + ".csv", "w") as f:
        for object_ in Objects:
           f.write(repr(object_) + "\n") 

def appendCsv(filename,Objects):

    with open("./"+ filename + ".csv", "a") as f:
        for object_ in Objects:
           f.write(repr(object_) + "\n") 

def scrapeFromProductPage(url,newProduct):
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    #print(soup)
    pricePoint = soup.find("div", class_="product-prices")
    
    newProduct.price = pricePoint.find("div", class_="current-price").find("span", itemprop="price").contents[0].replace("\xa0","").replace("zł","").replace(",",".")

    allDescriptionP = soup.find("div", class_="product-description").find_all("p")
    for description in allDescriptionP:
        newProduct.description += description.string + " " if description.string != None else ""
    newProduct.description = newProduct.description.replace(";","")
    images = soup.find_all("img", class_="pro_gallery_item", limit=2)
    for image in images:
        newProduct.imageUrls += image["src"] + ","


def scrapeProducts(url,categoryId):
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    productListItems = soup.find_all("div","product_list_item")
    newProducts = []
    for productSoup in productListItems:
        productLinkSoup =productSoup.find_next('a') 
        newProduct = Product(productLinkSoup["title"].replace("'",""))
        newProduct.category = categoryId
        newProduct.url = productLinkSoup["href"] 
        print(newProduct.name , newProduct.url )
        scrapeFromProductPage(newProduct.url,newProduct)
        products.append(newProduct)
        newProducts.append(newProduct) 

    appendCsv("products",newProducts)
def productScraperLauncher(categories , limit):
    for category in categories:
        print(category.url)
        scrapeProducts(category.url,category.id) 



def load_categories_from_file(path: str) -> list[categories]:
 
    categories: List[Category] = []
    id_map: Dict[int, Category] = {}

    # First pass: create all categories
    with open(path, "r", encoding="utf-8") as f:
        for line in f:
            line = line.strip()
            if not line:
                continue

            parts = line.split(";")
            if len(parts) < 11:
                continue  

            cat_id = int(parts[0])
            name = parts[2].strip()
            parent_id = int(parts[3])
            description = parts[5].strip() if len(parts) > 5 else ""
            last_segment = parts[6].strip() if len(parts) > 6 else ""
            image_url = parts[10].strip() if len(parts) > 10 else ""
            url = parts[12].strip() if len(parts) > 10 else ""

            cat = Category(name)
            cat.id = cat_id
            cat.url = url
            cat.description = description
            cat.imageUrl = image_url
            if parent_id == 2:
                parent_id = None
            else:
                cat.parent = parent_id
            id_map[cat_id] = cat
            categories.append(cat)

    if id_map:
        Category._id_counter = max(id_map.keys()) + 1

    for cat in categories:
        parent_id = cat.parent
        if parent_id != 2 and parent_id in id_map:
            cat.parent = id_map[parent_id]
            id_map[parent_id].subcategories.append(cat)

    return categories


if __name__ == "__main__":


    if len(sys.argv) > 1:
        arg1 = sys.argv[1]
    
    if(arg1 == "categories"):
        categoriess = scrapeMainCategories(BASE_URL)
        createCsv("categories", categories)
        
    if(arg1 == "products"):
        categories = load_categories_from_file("./categories.csv")
        productScraperLauncher(categories,0)
        createCsv("products", products)


    