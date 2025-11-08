from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
import os


def main():
    HOME = os.path.expanduser("~")
    BINARY_PATH = os.path.join(HOME, "chrome", "chrome-linux64", "chrome")
    WEBDRIVER_PATH = os.path.join(
        HOME, "chrome", "chromedriver-linux64", "chromedriver"
    )

    downloads_path = os.path.join(HOME, "chrome", "downloads")
    os.makedirs(downloads_path, exist_ok=True)

    chrome_options = Options()
    prefs = {"download.default_directory": downloads_path}
    chrome_options.add_argument("user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64)")
    chrome_options.add_argument("--headless=new")
    chrome_options.add_argument("--no-sandbox")
    chrome_options.add_argument("--disable-dev-shm-usage")
    chrome_options.add_argument("--start-maximized")
    chrome_options.add_argument("--allow-insecure-localhost")
    chrome_options.add_experimental_option("prefs", prefs)
    chrome_options.binary_location = BINARY_PATH

    service = Service(executable_path=WEBDRIVER_PATH)
    driver = webdriver.Chrome(service=service, options=chrome_options)

    try:
        driver.get("https://localhost:8443")
        print("Page title:", driver.title)

        number_div = driver.find_element(by=By.ID, value="_desktop_contact_link")
        span_element = number_div.find_element(By.TAG_NAME, "span")

        span_text = span_element.text
        print(span_text)

    finally:
        driver.quit()


if __name__ == "__main__":
    main()
