# BiznesElektroniczny

## General information
This project is an assignment for Electronic Business course at Gdansk University of Technology. The task is to make a duplicate of chosen website. The website we chose is flyhouse.pl.

## Tech stack
Technologies used during the project:
* Prestashop v1.7.8
* MySQL DB v5.7
* Selenium
* Docker

## Set up and management
* To properly run the project categories, products and images need to be scraped and uploaded to the database. Moreover tax policy needs to be applied. See [Utils](Utils/README.md) for more information.
* Each time the containers are run, the database is restored from  `dump.sql` file. State of the database can be saved, while being in `src` directory, type:
```bash
make dump
``` 

## Run
* To run the project, while being in `src` directory, type:
```bash
make run
```
* Then you can access the website on https://localhost:8443.
* To stop and remove all the containers type:
```bash
make down
```

## Authors
* Oskar Wiśniewski 198058
* Mikołaj Wiszniewski 197925
* Michał Wojciechowski 198251
* Franciszek Fabiński 197797
