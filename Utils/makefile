upload:
	python ./scraper.py upload

tax:
	docker exec -i prestashop-db mysql -u root -proot prestashop -e \
	"UPDATE ps_product SET id_tax_rules_group = 1; UPDATE ps_product_shop SET id_tax_rules_group = 1;"

