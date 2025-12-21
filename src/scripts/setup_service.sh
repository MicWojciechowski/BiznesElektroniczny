#!/bin/bash

PREFIX="BE_197797"
DB_NAME="BE_197797"
DB_USER="root"
DB_PASS="student"
DB_HOST="admin-mysql_db"
PORT="19779"
DUMP_FILE="dump.sql"
COMPOSE_FILE="docker-compose.yml"

echo "Checking for database container..."
DB_CONTAINER=$(docker ps -q -f name=admin-mysql_db)

if [ -z "$DB_CONTAINER" ]; then
    echo "Database container 'admin-mysql_db' not found"
    exit 1
fi
echo "Database container found: $DB_CONTAINER"

echo "Configuring database privileges for $DB_NAME..."
docker exec -i $DB_CONTAINER mysql -u$DB_USER -p$DB_PASS <<EOF
CREATE DATABASE IF NOT EXISTS $DB_NAME CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS';
FLUSH PRIVILEGES;
EOF
echo "Database and privileges configured."

echo "Removing existing stack: $PREFIX..."
docker stack rm $PREFIX
echo "Waiting 10 seconds for network cleanup..."
sleep 10

echo "Deploying new stack: $PREFIX..."
docker stack deploy -c $COMPOSE_FILE $PREFIX --with-registry-auth

echo "Waiting for PrestaShop container to start..."
PS_CONTAINER=""
while [ -z "$PS_CONTAINER" ]; do
    PS_CONTAINER=$(docker ps -q -f name=${PREFIX}_prestashop)
    [ -z "$PS_CONTAINER" ] && sleep 2
done
echo "PrestaShop container is up: $PS_CONTAINER"

if [ -f "$DUMP_FILE" ]; then
    echo "Importing database dump from $DUMP_FILE..."
    cat $DUMP_FILE | docker exec -i $DB_CONTAINER mysql -u$DB_USER -p$DB_PASS $DB_NAME
    echo "Database import completed."
else
    echo "$DUMP_FILE not found. Skipping import."
fi

echo "Running internal container configuration..."
docker exec -u 0 -i $PS_CONTAINER bash <<EOF
echo "Setting up directories and permissions..."
mkdir -p /var/www/html/var/logs /var/www/html/var/cache
chown -R www-data:www-data /var/www/html/var
chmod -R 775 /var/www/html/var

FILE="/var/www/html/app/config/parameters.php"
if [ -f "\$FILE" ]; then
    echo "Updating database parameters in parameters.php..."
    sed -i "s/'database_host' => '.*'/'database_host' => '$DB_HOST'/" \$FILE
    sed -i "s/'database_name' => '.*'/'database_name' => '$DB_NAME'/" \$FILE
    sed -i "s/'database_user' => '.*'/'database_user' => '$DB_USER'/" \$FILE
    sed -i "s/'database_password' => '.*'/'database_password' => '$DB_PASS'/" \$FILE
else
    echo "parameters.php not found"
fi

echo "Updating shop URLs to localhost:$PORT..."
mysql -h $DB_HOST -u$DB_USER -p$DB_PASS $DB_NAME -e "UPDATE ps_configuration SET value='localhost:$PORT' WHERE name IN ('PS_SHOP_DOMAIN', 'PS_SHOP_DOMAIN_SSL'); UPDATE ps_shop_url SET domain='localhost:$PORT', domain_ssl='localhost:$PORT';"

echo "Clearing PrestaShop cache..."
rm -rf /var/www/html/var/cache/*
EOF

echo "Deployment process finished successfully"
echo "Access the shop at https://localhost:$PORT"
