from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
import utils.config as cfg
import os


class Tester:
    def __init__(self, url=cfg.URL):
        HOME = os.path.expanduser("~")
        BINARY_PATH = os.path.join(HOME, "chrome", "chrome-linux64", "chrome")
        WEBDRIVER_PATH = os.path.join(
            HOME, "chrome", "chromedriver-linux64", "chromedriver"
        )

        downloads_path = os.path.join(HOME, "chrome", "downloads")
        os.makedirs(downloads_path, exist_ok=True)

        chrome_options = Options()
        prefs = {"download.default_directory": downloads_path}
        chrome_options.add_argument(
            "user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64)"
        )
        chrome_options.add_argument("--headless=new")
        chrome_options.add_argument("--no-sandbox")
        chrome_options.add_argument("--disable-dev-shm-usage")
        chrome_options.add_argument("--start-maximized")
        chrome_options.add_argument("--allow-insecure-localhost")
        chrome_options.add_experimental_option("prefs", prefs)
        chrome_options.binary_location = BINARY_PATH

        service = Service(executable_path=WEBDRIVER_PATH)
        self.driver = webdriver.Chrome(service=service, options=chrome_options)
        self.driver.get(url)

    def add_to_cart(self):
        pass

    def test1(self):
        # Dodanie do koszyka 10 produktów (w różnych ilościach) z dwóch różnych kategorii
        print("Page title:", self.driver.title)

        number_div = self.driver.find_element(by=By.ID, value="_desktop_contact_link")
        span_element = number_div.find_element(By.TAG_NAME, "span")

        span_text = span_element.text
        print(span_text)
        pass

    def test2(self):
        # Wyszukanie produktu po nazwie i dodanie do koszyka losowego produktu spośród znalezionych
        pass

    def test3(self):
        # Usunięcie z koszyka 3 produktów

        pass

    def test4(self):
        # Rejestracja nowego konta
        pass

    def test5(self):
        """
        Wykonanie zamówienia zawartości koszyka,
        Wybór metody płatności: przy odbiorze,
        Wybór jednego z dwóch przewoźników,
        Zatwierdzenie zamówienia
        """
        pass

    def test6(self):
        # Sprawdzenie statusu zamówienia.
        pass

    def test7(self):
        # Pobranie faktury VAT.
        pass

    def run_all(self):
        print("=== TEST 1 ===")
        self.test1()

        print("=== TEST 2 ===")
        self.test2()

        print("=== TEST 3 ===")
        self.test3()

        print("=== TEST 4 ===")
        self.test4()
        
        print("=== TEST 5 ===")
        self.test5()

        print("=== TEST 6 ===")
        self.test6()

        print("=== TEST 7 ===")
        self.test7()

    def quit(self):
        self.driver.quit()
