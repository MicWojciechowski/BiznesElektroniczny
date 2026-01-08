#!/bin/bash

PREFIX="BE_197797"
DB_NAME="BE_197797"
DB_USER="root"
DB_PASS="student"
DB_HOST="admin-mysql_db"
PORT="19779"
COMPOSE_FILE="docker-compose.yml"

echo "Removing old stack: $PREFIX..."
docker stack rm $PREFIX
echo "Waiting 20s for network cleanup..."
sleep 20

echo "Deploying stack $PREFIX..."
docker stack deploy -c $COMPOSE_FILE $PREFIX --with-registry-auth

echo "Waiting for Prestashop container to start locally..."
PS_CONTAINER=""
for i in {1..30}; do
    PS_CONTAINER=$(docker ps -q -f name=${PREFIX}_prestashop)
    [ ! -z "$PS_CONTAINER" ] && break
    echo "Retry $i/30..."
    sleep 5
done

if [ -z "$PS_CONTAINER" ]; then
    echo "Prestashop container failed to start"
    exit 1
fi

echo "Configuring Prestashop internals..."
docker exec -u 0 -i $PS_CONTAINER bash <<EOF
chown -R www-data:www-data /var/www/html/var
chmod -R 775 /var/www/html/var
FILE="/var/www/html/app/config/parameters.php"
if [ -f "\$FILE" ]; then
    sed -i "s/'database_host' => '.*'/'database_host' => '$DB_HOST'/" \$FILE
    sed -i "s/'database_name' => '.*'/'database_name' => '$DB_NAME'/" \$FILE
    sed -i "s/'database_user' => '.*'/'database_user' => '$DB_USER'/" \$FILE
    sed -i "s/'database_password' => '.*'/'database_password' => '$DB_PASS'/" \$FILE
fi
rm -rf /var/www/html/var/cache/*
EOF

echo "Updating shop URLs in the database..."
DB_CONTAINER=$(docker ps -q -f name=admin-mysql_db)
docker exec -i $DB_CONTAINER mysql -u$DB_USER -p$DB_PASS $DB_NAME <<EOF
UPDATE ps_configuration SET value='localhost:$PORT' WHERE name IN ('PS_SHOP_DOMAIN', 'PS_SHOP_DOMAIN_SSL');
UPDATE ps_shop_url SET domain='localhost:$PORT', domain_ssl='localhost:$PORT';
EOF

echo "Access the shop at https://localhost:$PORT"
