import requests
import random as rand
from bs4 import BeautifulSoup
from urllib.parse import urljoin
from urllib.parse import urlparse
import sys
from lxml import etree
import os
import csv
from io import BytesIO



from dotenv import load_dotenv

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
        self.categoryObj = None
        self.imageId = None

    def get_last_path_segment(self):
        parsed = urlparse(self.url)
        path = parsed.path   
        segments = path.strip("/").split("/")  
        if segments:
            return segments[-1]
        return None

    
    def downloadImage(self):
 
        image_urls = [url.strip() for url in self.imageUrls.split(",") if url.strip()]
        os.makedirs("img/products", exist_ok=True)
        iterator = 0
        for image_url in image_urls:
                print(f"️Downloading image: {image_url}")
                response = requests.get(image_url, timeout=15)
                response.raise_for_status()

                if not response.headers.get("Content-Type", "").startswith("image/"):
                    print(f"Skipping {image_url}: not an image")
                    continue
                filename = os.path.basename( f"product_{product.id}_{iterator}.jpg")
                filepath = os.path.join("img/products", filename)

                with open(filepath, "wb") as f:
                    f.write(response.content)
                iterator +=1


    def uploadImagesToApi(self):
        load_dotenv()
        api_key = os.getenv("PRESTASHOP_API_KEY")
        base_URL = os.getenv("PRESTASHOP_URL")
        if not api_key or not base_URL:
            raise ValueError("Missing PRESTASHOP_API_KEY or PRESTASHOP_URL in .env")

        image_urls = [url.strip() for url in self.imageUrls.split(",") if url.strip()]
        iterator = 0
        for image_url in image_urls:
            try:
               
                filename = os.path.basename(f"product_{self.imageId}_{iterator}.jpg")
                filepath = os.path.join("./img/products", filename)
                if not os.path.exists(filepath):
                    print(f"Skipping missing file: {filepath}")
                    continue
                
                print(f"Uploading {filename} to PrestaShop...")
                upload_url = f"{base_URL}/api/images/products/{self.id}"

                with open(filepath, "rb") as f:
                    upload_response = requests.post(
                        upload_url,
                        auth=(api_key, ""),
                        files={"image": (filename, f, "image/jpeg")},
                        verify=False
                    )
                if upload_response.status_code in (200, 201):
                    print(f"Uploaded {filename} successfully!")
                else:
                    print(f"Failed to upload {filename}: {upload_response.status_code}")
                    print(upload_response.text)
                iterator += 1
            except requests.RequestException as e:
                print(f"Error processing {image_url}: {e}")
            
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
        self.imageId = None
        
    def get_last_path_segment(self):
        parsed = urlparse(self.url)
        path = parsed.path   
        segments = path.strip("/").split("/")  
        if segments:
            return segments[-1]
        return None

    def downloadImage(self):

        os.makedirs("img/categories", exist_ok=True)
        if (self.imageUrl == ""):
            return 0
        print(f"️Downloading image: {self.imageUrl}")
        response = requests.get(self.imageUrl, timeout=15)
        response.raise_for_status()

        if not response.headers.get("Content-Type", "").startswith("image/"):
            print(f"Skipping {self.imageUrl}: not an image")
            return None
        filename = os.path.basename( f"category_{self.id}.jpg")
        filepath = os.path.join("img/categories", filename)

        with open(filepath, "wb") as f:
            f.write(response.content)

        return None

    def set_url(self, url):
        
        self.url = url

    def uploadImagesToApi(self):
        load_dotenv()
        api_key = os.getenv("PRESTASHOP_API_KEY")
        base_URL = os.getenv("PRESTASHOP_URL")
        if not api_key or not base_URL:
            raise ValueError("Missing PRESTASHOP_API_KEY or PRESTASHOP_URL in .env")

        if self.imageUrl != None:
                filename = os.path.basename(f"category_{self.imageId}.jpg")
                filepath = os.path.join("./img/categories", filename)
                if not os.path.exists(filepath):
                    print(f"Skipping missing file: {filepath}")
                    return None 
                
                print(f"Uploading {filename} to PrestaShop...")
                upload_url = f"{base_URL}/api/images/categories/{self.id}"

                with open(filepath, "rb") as f:
                    upload_response = requests.post(
                        upload_url,
                        auth=(api_key, ""),
                        files={"image": (filename, f, "image/jpeg")},
                        verify=False
                    )
                if upload_response.status_code in (200, 201):
                    print(f"Uploaded {filename} successfully!")
                else:
                    print(f"Failed to upload {filename}: {upload_response.status_code}")
                    print(upload_response.text)
            
        return None
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
            cat.imageId = cat.id
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



def load_products_from_file(path: str) -> list[Product]:
    products: list[Product] = []

    with open(path, "r", encoding="utf-8") as f:
        reader = csv.reader(f, delimiter=';')

        for row in reader:
            if not row or len(row) < 9:
                continue 

            try:
                product = Product(
                    name=row[1].strip(),
                    url=row[2].strip() if row[2] else None
                )
                product.id = int(row[0])
                product.category = row[3].strip() if row[3] else None
                for category in categories:
                    if str(category.id) == str(product.category):
                        product.categoryObj = category
                        break
                product.imageUrls = row[4].strip()
                product.description = row[5].strip()
                product.price = float(row[6]) if row[6] else None
                product.stock = int(float(row[7])) if row[7] else None
                product.manufacturer = row[8].strip()
                product.imageId = product.id
                products.append(product)

            except Exception as e:
                print(f" Error parsing line: {row}\n{e}")

    if products:
        Product._id_counter = max(p.id for p in products) + 1

    return products

def scrapeFromProductPage(url, newProduct):
    try:
        response = requests.get(url, timeout=10)
        response.raise_for_status()
        soup = BeautifulSoup(response.text, "html.parser")

        # Price
        pricePoint = soup.find("div", class_="product-prices")
        if not pricePoint:
            raise ValueError("Price section not found")

        price_tag = pricePoint.find("div", class_="current-price").find("span", itemprop="price")
        if not price_tag or not price_tag.contents:
            raise ValueError("Price not found")
        
        newProduct.price = (
            price_tag.contents[0]
            .replace("\xa0", "")
            .replace("zł", "")
            .replace(",", ".")
            .strip()
        )

        # Description
        description_div = soup.find("div", class_="product-description")
        if description_div:
            allDescriptionP = description_div.find_all("p")
            for description in allDescriptionP:
                if description.string:
                    newProduct.description += description.string.strip() + " "
            newProduct.description = newProduct.description.replace(";", "").strip()

        # Images
        images = soup.find_all("img", class_="pro_gallery_item", limit=2)
        for image in images:
            if "src" in image.attrs:
                newProduct.imageUrls += image["src"] + ","

        return True
    except Exception as e:
        print(f"Error scraping product page {url}: {e}")
        return False


def scrapeProducts(url, categoryId):
    try:
        response = requests.get(url, timeout=10)
        response.raise_for_status()
        soup = BeautifulSoup(response.text, "html.parser")

        productListItems = soup.find_all("div", "product_list_item")
        if not productListItems:
            print(f"No products found on {url}")
            return

        newProducts = []
        for productSoup in productListItems:
            try:
                productLinkSoup = productSoup.find_next("a")
                if not productLinkSoup or "href" not in productLinkSoup.attrs:
                    print("Skipping product: missing link")
                    continue

                newProduct = Product(productLinkSoup["title"].replace("'", ""))
                newProduct.category = categoryId
                newProduct.url = productLinkSoup["href"]

                print(f"Scraping {newProduct.name} -> {newProduct.url}")

                if scrapeFromProductPage(newProduct.url, newProduct):
                    products.append(newProduct)
                    newProducts.append(newProduct)
                    
            except Exception as inner_e:
                print(f"Skipping product due to unexpected error: {inner_e}")
                continue

        if newProducts:
            appendCsv("products", newProducts)
            print(f"Saved {len(newProducts)} products to CSV")
        else:
            print("No products successfully scraped.")

    except Exception as e:
        print(f"Failed to load product list from {url}: {e}")

def categoriesUploader(category):
    # Load .env file
    load_dotenv()
    # Access environment variables
    api_key = os.getenv("PRESTASHOP_API_KEY")
    base_URL = os.getenv("PRESTASHOP_URL")
    if not api_key or not base_URL:
        raise ValueError("Missing PRESTASHOP_API_KEY or PRESTASHOP_URL in .env")



    prestashop = etree.Element("prestashop", nsmap={"xlink": "http://www.w3.org/1999/xlink"})

    targety = etree.SubElement(prestashop, "targety")

    fields = {
        # "id": category.id,
        "id_parent": category.parent.id if (category.parent != None) else 2,
        "active": 1,
        "is_root_category": 1 if (category.parent == None) else 0,
        "id_shop_default": 0,
        "is_root_category": 0,
    }

    multilang_values = {
        "name": { "1": category.name },
         "link_rewrite": { "1": "wedki-muchowe" },
        "description": { "1": category.description},
        "meta_title": { "1": category.name},
        # "meta_description": { "1": },
        # "meta_keywords": { "1": ""},
    }

    for name, value in fields.items():
        el = etree.SubElement(targety, name)
        el.text = etree.CDATA(str(value))

    for field_name, lang_dict in multilang_values.items():
        field_el = etree.SubElement(targety, field_name)
        for lang_id, text_value in lang_dict.items():
            lang_el = etree.SubElement(field_el, "language", id=str(lang_id))
            lang_el.text = etree.CDATA(text_value)

    # associations = etree.SubElement(targety, "associations")

    # subcategories = etree.SubElement(associations, "categories")
    # subcat = etree.SubElement(subcategories, "category")
    # subcat_id = etree.SubElement(subcat, "id")
    # subcat_id.text = etree.CDATA("")

    # products = etree.SubElement(associations, "products")
    # prod = etree.SubElement(products, "product")
    # prod_id = etree.SubElement(prod, "id")
    # prod_id.text = etree.CDATA("")

    xml_data = etree.tostring(prestashop, encoding="utf-8", xml_declaration=True, pretty_print=True)

    headers = {"Content-Type": "application/xml", "Accept": "application/xml"}
    response = requests.post(f"{base_URL}/api/categories", auth=(api_key, ""), headers=headers, data=xml_data, verify=False)

    if response.status_code in (200, 201):
        print("✅ Category "+ category.name +"created successfully!")
        category.id = response.text[response.text.find("<id>") + 13 :  response.text.find("</id>")-3 ]
        print(category.id)
    else:
        print(f"❌ Failed to create category. Status code: {response.status_code}")
        print(response.text)

def update_stock_quantity(product_id: int, new_quantity: int):

    load_dotenv()
    api_key = os.getenv("PRESTASHOP_API_KEY")
    base_URL = os.getenv("PRESTASHOP_URL")
    if not api_key or not base_URL:
        raise ValueError("Missing PRESTASHOP_API_KEY in .env")
    headers = {"Accept": "application/xml", "Content-Type": "application/xml"}
    params = {
        "filter[id_product]": f"[{product_id}]",
        "display": "full"
    }
    response = requests.get(f"{base_URL}/api/stock_availables", auth=(api_key, ""), headers=headers, params=params, verify=False)

    if response.status_code != 200:
        print(f"Failed to fetch stock_available for product {product_id}: {response.status_code}")
        print(response.text)
        return False

    root = etree.fromstring(response.content)
    stock_ids = root.xpath("//stock_available/id/text()")
    if not stock_ids:
        print(f"No stock_available record found for product {product_id}")
        return False

    stock_id = stock_ids[0]
    print(f"Found stock_available ID: {stock_id}")

    prestashop = etree.Element("prestashop", nsmap={"xlink": "http://www.w3.org/1999/xlink"})
    stock_available = etree.SubElement(prestashop, "stock_available")

    el_id = etree.SubElement(stock_available, "id")
    el_id.text = etree.CDATA(str(stock_id))

    el_qty = etree.SubElement(stock_available, "quantity")
    el_qty.text = etree.CDATA(str(new_quantity))
    
    el_pr = etree.SubElement(stock_available, "id_product")
    el_pr.text = etree.CDATA(str(product_id))
    el_pr = etree.SubElement(stock_available, "id_shop")
    el_pr.text = etree.CDATA(str(1))

    el_pr = etree.SubElement(stock_available, "id_product_attribute")
    el_pr.text = etree.CDATA(str(0))

    el_pr = etree.SubElement(stock_available, "depends_on_stock")
    el_pr.text = etree.CDATA(str(0))


    el_pr = etree.SubElement(stock_available, "out_of_stock")
    el_pr.text = etree.CDATA(str(2))
    
    xml_payload = etree.tostring(prestashop, encoding="utf-8", xml_declaration=True, pretty_print=True)

    patch_url = f"{base_URL}/api/stock_availables/{stock_id}"
    patch_response = requests.put(patch_url, auth=(api_key, ""), headers=headers, data=xml_payload, verify=False)

    if patch_response.status_code in (200, 201):
        print(f"Updated stock for product {product_id} to {new_quantity}")
        return True
    else:
        print(f"Failed to update stock: {patch_response.status_code}")
        print(patch_response.text)
        return False

def productsUploader(product: Product):
    load_dotenv()
    base_URL = os.getenv("PRESTASHOP_URL")
    api_key = os.getenv("PRESTASHOP_API_KEY")
    if not api_key or not base_URL:
        raise ValueError("Missing PRESTASHOP_API_KEY or PRESTASHOP_URL in .env")

    prestashop = etree.Element("prestashop", nsmap={"xlink": "http://www.w3.org/1999/xlink"})
    product_el = etree.SubElement(prestashop, "product")

    simple_fields = {
        "id_category_default": product.category,
        "price": product.price,
        "active": 1,
        "id_shop_default": 1,
        "on_sale": 1,
        "show_price":1,
        "state":1,
        "product_type":"standard",
        "type":1,
        "advanced_stock_management":1,

        
    }

    for tag, value in simple_fields.items():
        el = etree.SubElement(product_el, tag)
        el.text = etree.CDATA(str(value))

  
    multilang_fields = {
        "name": {"1": product.name},
        "description": {"1": product.description},
    }

    for field_name, lang_map in multilang_fields.items():
        field_el = etree.SubElement(product_el, field_name)
        for lang_id, text_val in lang_map.items():
            lang_el = etree.SubElement(field_el, "language", id=str(lang_id))
            lang_el.text = etree.CDATA(text_val)

    associations = etree.SubElement(product_el, "associations")
    cats_el = etree.SubElement(associations, "categories")
    cat_el = etree.SubElement(cats_el, "category")
    cat_id_el = etree.SubElement(cat_el, "id")
    print(product.categoryObj)
    cat_id_el.text = etree.CDATA(product.categoryObj.id)

    associations = etree.SubElement(product_el, "associations")
    cats_el = etree.SubElement(associations, "images")
    cat_el = etree.SubElement(cats_el, "image")
    cat_id_el = etree.SubElement(cat_el, "id")
    cat_id_el.text = etree.CDATA(product.imageUrls)
    xml_data = etree.tostring(prestashop, encoding="utf-8", xml_declaration=True, pretty_print=True)

    headers = {"Content-Type": "application/xml", "Accept": "application/xml"}
    response = requests.post(f"{base_URL}/api/products", auth=(api_key, ""), headers=headers, data=xml_data, verify=False)

    if response.status_code in (200, 201):
        print(f"✅ Product '{product.name}' created successfully!")
        print(response.text)
        tree = etree.fromstring(response.content)
        new_id = tree.findtext(".//id")
        if new_id:
            product.id = int(new_id)
            print(f" New Product ID: {product.id}")
        else:
            print(" Warning: Created but cannot parse new ID.")
    else:
        print(f"❌ Failed to create product '{product.name}'. Status code: {response.status_code}")
        print(response.text)
    update_stock_quantity(product.id,8)

def delete_all_categories():
    load_dotenv()
    api_key = os.getenv("PRESTASHOP_API_KEY")
    base_URL = os.getenv("PRESTASHOP_URL")
    if not api_key:
        raise ValueError("Missing PRESTASHOP_API_KEY or PRESTASHOP_URL in .env")

    print("Fetching product list...")
    response = requests.get(f"{base_URL}/api/categories", auth=(api_key, ""), headers={"Accept": "application/xml"},verify=False)

    if response.status_code != 200:
        print(f"Failed to fetch categoreis: {response.status_code}")
        return
    print(response.text)
    tree = etree.fromstring(response.content)
 
    category_id = tree.xpath("//category/@id")
    if not category_id:
        print("No categories found to delete.")
        return

    print(f"Found {len(category_id)} categories. Starting deletion...")

    for pid in category_id:
        if pid == "2" or pid == "1" : continue
        else:
            delete_url = f"{base_URL}/api/categories/{pid}"
            del_response = requests.delete(delete_url, auth=(api_key, ""),verify=False)
            if del_response.status_code in (200, 204):
                print(f"Deleted category ID {pid}")
            else:
                print(f"Failed to delete category ID {pid}: {del_response.status_code}")
                print(del_response.text)



def delete_all_products():
    load_dotenv()
    api_key = os.getenv("PRESTASHOP_API_KEY")
    base_URL = os.getenv("PRESTASHOP_URL")
    if not api_key:
        raise ValueError("Missing PRESTASHOP_API_KEY or PRESTASHOP_URL in .env")

    print("Fetching product list...")
    response = requests.get(f"{base_URL}/api/products", auth=(api_key, ""), headers={"Accept": "application/xml"},verify=False)

    if response.status_code != 200:
        print(f"Failed to fetch products: {response.status_code}")
        return

    tree = etree.fromstring(response.content)
 
    product_ids = tree.xpath("//product/@id")
    if not product_ids:
        print("No products found to delete.")
        return

    print(f"Found {len(product_ids)} products. Starting deletion...")

    for pid in product_ids:
        delete_url = f"{base_URL}/api/products/{pid}"
        del_response = requests.delete(delete_url, auth=(api_key, ""),verify=False)

        if del_response.status_code in (200, 204):
            print(f"Deleted product ID {pid}")
        else:
            print(f"Failed to delete product ID {pid}: {del_response.status_code}")
            print(del_response.text)



if __name__ == "__main__":


    if len(sys.argv) > 1:
        arg1 = sys.argv[1]
    
    if(arg1 == "upload"):
        delete_all_categories()
        delete_all_products()
        categories = load_categories_from_file("./categories.csv")
        products = load_products_from_file("./products.csv")
        load_dotenv()  
        for category in categories:
            categoriesUploader(category)
            category.uploadImagesToApi()
        for product in products:
            productsUploader(product)
            product.uploadImagesToApi()

    if(arg1 == "categories"):
        categoriess = scrapeMainCategories(BASE_URL)
        createCsv("categories", categories)
        
    if(arg1 == "products"):
        categories = load_categories_from_file("./categories.csv")
        productScraperLauncher(categories,0)
        createCsv("products", products)

    if(arg1 == "images"):
        categories = load_categories_from_file("./categories.csv")
        products = load_products_from_file("./products.csv")

        for category in categories:
            category.downloadImage()

        for product in products:
            product.downloadImage()
    