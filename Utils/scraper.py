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
        self.category = []
        self.imageUrls = []
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
        return f"{self.id};1;{self.name!r};{2 if self.parent == None else self.parent.id};0;{self.description};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.imageUrl};;"






class Category:
    _id_counter = 10


    def __init__(self, name, url=None, parent=None):
        self.id = Category._id_counter    
        Category._id_counter += 1  
        self.name = name
        self.url = url
        self.parent = parent
        self.subcategories = []
        self.imageUrl = None
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
        return f"{self.id};1;{self.name!r};{2 if self.parent == None else self.parent.id};0;{self.description};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.get_last_path_segment()};{self.imageUrl};;"


categories = []


def lookForSubCategories(url,parent):
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    categoriesLi = soup.find_all("li","clearfix")
    for categorySoup in categoriesLi:
        newCategory = Category(categorySoup.find_next('a')["title"]).replace("'","")
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
        newCategory = Category(categorySoup.find_next('a')["title"]).replace("'","")
        newCategory.set_url(categorySoup.find_next('a')["href"])
        categories.append(newCategory)
        lookForSubCategories(newCategory.url,newCategory)

    print(categories)

    # print(categoriesLi)


def createCategoriesCsv():
    with open("./categories.csv", "w") as f:
        for category in categories:
           f.write(repr(category) + "\n") 



def scrapeFromProductPage(url,newProduct):
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    #print(soup)
    pricePoint = soup.find("div", class_="product-prices")
    
    print(pricePoint.find("div", class_="current-price").find("span", itemprop="price").contents[0].replace(" ","").replace("zł",""))
    # print(soup.find_next("span","price ").contents.replace(" zł",""))
    








def scrapeProducts(url):
    """Scrape all categories and subcategories recursively."""
    response = requests.get(url)
    soup = BeautifulSoup(response.text, "html.parser")
    productListItems = soup.find_all("div","product_list")

    for productSoup in productListItems:
        productLinkSoup =productSoup.find_next('a') 
        newProduct = Product(productLinkSoup["title"].replace("'",""))
        newProduct.url = productLinkSoup["href"] 
        print(newProduct.name , newProduct.url )
        scrapeFromProductPage(newProduct.url,newProduct)
        

    


if __name__ == "__main__":

    if len(sys.argv) > 1:
        arg1 = sys.argv[1]
    
    if(arg1 == "categories"):
        categoriess = scrapeMainCategories(BASE_URL)
        createCategoriesCsv()
        
    if(arg1 == "products"):
        scrapeProducts("https://flyhouse.pl/pl/wedki-muchowe/wedki-muchowe-orvis/")

    