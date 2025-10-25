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
