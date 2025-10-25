up: perm
	@echo "Turning docker network up..."
	@docker compose up -d

down:
	@echo "Turning docker network down..."
	@docker compose down

perm:
	@echo "Tuning the permissions..."
	sudo chown -R 33:33 ./prestashop
	sudo chmod -R +755 ./prestashop

dump:
	@echo "Dumping config into ./new_dump.sql"
	docker exec prestashop-db mysqldump prestashop --user=root -proot -x > "new_dump.sql"
