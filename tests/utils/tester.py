from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.common.keys import Keys
import random
import os
import uuid
import time
import utils.config as cfg
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from selenium import webdriver


class Tester:
    def __init__(self, url=cfg.URL):
        HOME = os.path.expanduser("~")
        BINARY_PATH = os.path.join(HOME, "chrome", "chrome-linux64", "chrome")
        #BINARY_PATH = os.path.join(HOME, ".nix-profile", "bin", "google-chrome-stable")

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
        # chrome_options.add_argument("--headless=new")
        chrome_options.add_argument("--window-size=2560,1440")
        chrome_options.add_argument("--no-sandbox")
        chrome_options.add_argument("--disable-dev-shm-usage")
        chrome_options.add_argument("--start-maximized")
        chrome_options.add_argument("--allow-insecure-localhost")
        chrome_options.add_experimental_option("prefs", prefs)
        chrome_options.binary_location = BINARY_PATH

        service = Service(executable_path=WEBDRIVER_PATH)
        self.driver = webdriver.Chrome(service=service, options=chrome_options)
        self.driver.get(url)

    def _admin_change_latest_order_status(self):
        """
        Helper: Opens a new tab, logs into Admin Panel,
        changes the latest order status to 'Delivered' (ID 5) DIRECTLY from the list,
        closes tab and returns to main window.
        """
        print("--- [ADMIN] Changing Order Status to Delivered ---")
        wait = WebDriverWait(self.driver, 10)

        self.driver.execute_script("window.open('about:blank', 'admin_tab');")
        self.driver.switch_to.window("admin_tab")

        self.driver.get("https://localhost:8443/admin473fxgo0y/")

        try:
            # Check if we need to log in
            email_input = wait.until(EC.visibility_of_element_located((By.ID, "email")))
            email_input.send_keys("s198251@student.pg.edu.pl")

            pass_input = self.driver.find_element(By.ID, "passwd")
            pass_input.send_keys("12345678")

            submit_btn = self.driver.find_element(By.NAME, "submitLogin")
            submit_btn.click()
        except:
            pass

        parent_orders = wait.until(EC.element_to_be_clickable((By.ID, "subtab-AdminParentOrders")))
        parent_orders.click()

        try:
            sub_orders = wait.until(EC.element_to_be_clickable((By.ID, "subtab-AdminOrders")))
            sub_orders.click()
        except:
            pass

        wait.until(EC.visibility_of_element_located((By.CSS_SELECTOR, "table.grid-table")))

        print("Locating status dropdown...")

        dropdown_btn = wait.until(EC.element_to_be_clickable(
            (By.CSS_SELECTOR, "table tbody tr:first-child button.dropdown-toggle")
        ))

        self.driver.execute_script("arguments[0].scrollIntoView({block: 'center'});", dropdown_btn)
        time.sleep(0.5)  # Stability wait
        dropdown_btn.click()

        delivered_option = wait.until(EC.element_to_be_clickable(
            (By.CSS_SELECTOR, "table tbody tr:first-child button.dropdown-item[data-value='5']")
        ))
        delivered_option.click()

        time.sleep(2)
        print("--- [ADMIN] Status updated to 'Delivered' ---")

        self.driver.close()
        self.driver.switch_to.window(self.driver.window_handles[0])

    def _process_product(self, product_index, quantity):
        """
        Helper: Otwiera produkt z listy (np. po wyszukaniu czy wybraniu kategorii)
        po indeksie, ustawia ilość, dodaje do koszyka i wraca do listy
        """
        wait = WebDriverWait(self.driver, 30)
        products = wait.until(EC.presence_of_all_elements_located((By.CLASS_NAME, "product-miniature")))

        products[product_index].find_element(By.TAG_NAME, "a").click()

        qty_input = wait.until(EC.visibility_of_element_located((By.ID, "quantity_wanted")))

        qty_input.send_keys(Keys.CONTROL + "a")
        qty_input.send_keys(Keys.DELETE)
        qty_input.send_keys(str(quantity))

        add_btn = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, "add-to-cart")))
        add_btn.click()

        time.sleep(5)
        continue_btn = wait.until(EC.element_to_be_clickable(
            (By.XPATH, "//button[contains(text(), 'Kontynuuj zakupy')]")
        ))
        continue_btn.click()

        self.driver.back()
        self.driver.back()

    def add_to_cart(self):
        pass

    def test1(self):
        """
        Dodanie do koszyka 10 produktów (w różnych ilościach) z dwóch różnych kategorii
        """

        wait = WebDriverWait(self.driver, 10)
        counter = 0
        cat_link_1 = wait.until(EC.presence_of_element_located((By.PARTIAL_LINK_TEXT, "Torby")))
        self.driver.execute_script("arguments[0].click();", cat_link_1)

        wait.until(EC.element_to_be_clickable((By.PARTIAL_LINK_TEXT, "PLECAKI"))).click()

        print("Second category: Torby/PLECAKI")
        print(f"current url: {self.driver.current_url}")
        for i in range(5):
            print(f"current url: {self.driver.current_url}")
            rand = random.randint(1, 3)
            counter += rand
            print(f"i: {i}, rand: {rand}")
            self._process_product(product_index=i, quantity=rand)

        cat_link_1 = wait.until(EC.presence_of_element_located((By.PARTIAL_LINK_TEXT, "Linki muchowe")))
        self.driver.execute_script("arguments[0].click();", cat_link_1)
        wait.until(EC.element_to_be_clickable((By.PARTIAL_LINK_TEXT, "LINKI PŁYWAJĄCE"))).click()

        print(f"current url: {self.driver.current_url}")
        for i in range(5):
            print(f"current url: {self.driver.current_url}")
            rand = random.randint(1, 3)
            counter += rand
            self._process_product(product_index=i, quantity=rand)

        wait.until(EC.element_to_be_clickable((By.ID, "_desktop_logo"))).click()

        print(f"Test 1 Completed: Added {counter} items total.")

    def test2(self):
        """
        Wyszukanie produktu po nazwie i dodanie
        do koszyka losowego produktu spośród znalezionych
        """
        search_input = self.driver.find_element(By.NAME, "s")
        search_input.clear()
        search_input.send_keys("Linka")
        search_input.send_keys(Keys.ENTER)
        wait = WebDriverWait(self.driver, 10)

        products = wait.until(
            EC.presence_of_all_elements_located((By.CLASS_NAME, "product-miniature"))
        )

        print(f"Found {len(products)} products.")

        random_product = random.choice(products)
        product_link = random_product.find_element(By.TAG_NAME, "a")
        product_link.click()

        add_to_cart_button = wait.until(
            EC.element_to_be_clickable((By.CLASS_NAME, "add-to-cart"))
        )
        add_to_cart_button.click()

        wait.until(
            EC.visibility_of_element_located((By.ID, "blockcart-modal"))
        )
        print("Product successfully added to cart!")

        continue_btn = self.driver.find_element(By.XPATH, "//button[contains(text(), 'Kontynuuj zakupy')]")
        continue_btn.click()

        wait.until(EC.element_to_be_clickable((By.ID, "_desktop_logo"))).click()
        print("Back to home page")
        pass

    def test3(self):
        """
        Usunięcie z koszyka 3 produktów
        """
        wait = WebDriverWait(self.driver, 10)
        cart_icon = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, "shopping-cart")))
        cart_icon.click()
        for i in range(3):
            try:
                delete_buttons = wait.until(EC.presence_of_all_elements_located(
                    (By.CLASS_NAME, "remove-from-cart")
                ))
            except Exception as e:
                print(f"No delete buttons found (Cart might be empty); {e}")
                break

            print(f"Removing item {i + 1}...")

            delete_buttons[0].click()
            time.sleep(1)

        try:
            final_items = self.driver.find_elements(By.CLASS_NAME, "cart-item")
            print(f"Test 3 Completed. Items remaining in cart: {len(final_items)}")
        except Exception as e:
            print(f"Test 3 Completed; {e}")
        finally:
            wait.until(EC.element_to_be_clickable((By.ID, "_desktop_logo"))).click()
            print("Back to home page")
        pass

    def test4(self):
        """
        Rejestracja nowego konta
        Na potrzeby testow uzytkownik bedzie uzywal losowego adresu email
        """
        login_icon = self.driver.find_element(By.XPATH, "//a[@title='Zaloguj się do swojego konta klienta']")
        login_icon.click()

        time.sleep(0.5)
        register_link = self.driver.find_element(By.XPATH, "//a[contains(text(), 'Nie masz konta?')]")
        register_link.click()

        self.driver.find_element(By.ID, "field-firstname").send_keys("Test")
        self.driver.find_element(By.ID, "field-lastname").send_keys("User")

        random_str = uuid.uuid4().hex[:8]
        email = f"user_{random_str}@test.com"
        print(f"registering with email: {email}")
        self.driver.find_element(By.ID, "field-email").send_keys(email)
        self.driver.find_element(By.ID, "field-password").send_keys("Mikformatyka2025")

        time.sleep(1)
        checkboxes = self.driver.find_elements(By.NAME, "psgdpr")
        if checkboxes:
            checkboxes[0].click()

        submit_btn = self.driver.find_element(By.CSS_SELECTOR, "button[data-link-action='save-customer']")
        submit_btn.click()

        pass

    def test5(self):
        """
        Wykonanie zamówienia zawartości koszyka,
        Wybór metody płatności: przy odbiorze,
        Wybór jednego z dwóch przewoźników,
        Zatwierdzenie zamówienia
        """
        wait = WebDriverWait(self.driver, 10)
        cart_icon = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, "shopping-cart")))
        cart_icon.click()

        order_link = self.driver.find_element(By.XPATH, "//a[contains(text(), 'Przejdź do realizacji zamówienia')]")
        order_link.click()

        info = {
            "firstname": "Test",
            "lastname": "User",
            "company": "Test System Inc.",
            "vat_number": "1234567890",
            "address1": "Wyspiańskiego 5a",
            "address2": "208b",
            "postcode": "00-001",
            "city": "Gdańsk",
            "phone": "501043892",
        }

        for k, v in info.items():
            field = self.driver.find_element(By.ID, f"field-{k}")
            field.send_keys(Keys.CONTROL + "a")
            field.send_keys(Keys.DELETE)
            field.send_keys(v)

        wait.until(EC.element_to_be_clickable((By.NAME, "confirm-addresses"))).click()
        time.sleep(1)
        self.driver.find_element(By.ID, "delivery_option_12").click()
        self.driver.find_elements(By.NAME, "confirmDeliveryOption")[0].click()
        time.sleep(1)
        opts = wait.until(EC.presence_of_element_located(
            (By.CSS_SELECTOR, "input[data-module-name='ps_cashondelivery']")
        ))
        opts.click()
        self.driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]").click()
        self.driver.find_element(By.XPATH, "//button[contains(text(), 'Złóż zamówienie')]").click()

        wait.until(EC.element_to_be_clickable((By.ID, "_desktop_logo"))).click()
        pass

    def test6(self):
        """
        Sprawdzenie statusu zamówienia.
        """
        wait = WebDriverWait(self.driver, 10)
        account_icon = self.driver.find_element(By.XPATH, "//a[@title='Wyświetl moje konto klienta']")
        account_icon.click()

        self.driver.find_element(By.ID, "history-link").click()

        wait.until(EC.visibility_of_element_located((By.TAG_NAME, "table")))

        try:
            # Try to find the specific styled label (Best for PrestaShop 1.7)
            status_element = self.driver.find_element(By.CSS_SELECTOR, "table tbody tr:first-child .label-pill")
        except:
            # Fallback: If no pill class, assume it's the 5th column (Standard PrestaShop layout)
            status_element = self.driver.find_element(By.XPATH, "//table/tbody/tr[1]/td[5]")

        order_status = status_element.text.strip()
        print(f"Latest Order Status: {order_status}")

        # wait.until(EC.element_to_be_clickable((By.ID, "_desktop_logo"))).click()
        pass

    def test7(self):
        """
        Pobranie faktury VAT.
        """

        wait = WebDriverWait(self.driver, 10)

        # input("Kontynuuj tylko po zatwierdzeniu zamówienia w admin panelu")
        self._admin_change_latest_order_status()
        self.driver.get(self.driver.current_url)
        invoice_link = wait.until(EC.element_to_be_clickable(
            (By.XPATH, "//table/tbody/tr[1]//a[contains(@href, 'pdf-invoice')]")
        ))
        invoice_link.click()
        time.sleep(2)
        wait.until(EC.element_to_be_clickable((By.ID, "_desktop_logo"))).click()

        pass

    def run_all(self):
        print("=== TEST 1 ===")
        self.test1()
        # print("skipped")

        print("=== TEST 2 ===")
        self.test2()
        # print("skipped")

        print("=== TEST 3 ===")
        # Needs test1 for it to work (No items in shopping cart by default)
        self.test3()
        # print("skipped")

        print("=== TEST 4 ===")
        self.test4()
        # print("skipped")

        print("=== TEST 5 ===")
        self.test5()
        # print("skipped")

        # Między testem 6 a 7 nie wychodzi ze statusów zamówień
        print("=== TEST 6 ===")
        self.test6()
        # print("skipped")

        print("=== TEST 7 ===")
        self.test7()
        # print("skipped")

    def quit(self):
        self.driver.quit()
