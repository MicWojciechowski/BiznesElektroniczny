to run scraper use python3 ./scraper {command}

the possible commands are as follows:
    - categories ( to scrape categories, it creates the categories.csv )
    - products   ( to scrape products, it creates the products.csv file 
                   it is dependent on the categories.csv file to know in which
                   categories to scrape)
    - images     ( downloads the images from parsing results to your machine)
    - upload     (  uploads data and images from categories and products to the store using the
                    webAPI)

remember to create the .env file with 
PRESTASHOP_API_KEY=
PRESTASHOP_URL=