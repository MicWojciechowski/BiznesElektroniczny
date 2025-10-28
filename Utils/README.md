# How to Run the Scraper

To run the scraper, use:

```bash
python3 ./scraper {command}
```

### Available Commands

| Command | Description |
|----------|-------------|
| **categories** | Scrapes product categories and creates a `categories.csv` file. |
| **products** | Scrapes product data and creates a `products.csv` file.<br>⚠️ Depends on `categories.csv` to determine which categories to scrape. |
| **images** | Downloads product images from the parsed results to your machine. |
| **upload** | Uploads data and images from `categories.csv` and `products.csv` to the store using the PrestaShop WebAPI. |

---

### Environment Configuration

Before running any commands, create a `.env` file in the project root with the following content:

```bash
PRESTASHOP_API_KEY=
PRESTASHOP_URL=
```
### Tax policy:
After uploading products, you can automate setting tax policy by running 
```bash
make tax
```
