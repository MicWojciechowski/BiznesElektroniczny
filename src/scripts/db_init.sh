#!/bin/bash

DB_NAME="BE_197797"
DB_USER="root"
DB_PASS="student"
DUMP_FILE="dump.sql"

echo "Locating MySQL container..."
DB_CONTAINER=$(docker ps -q -f name=admin-mysql_db)

if [ -z "$DB_CONTAINER" ]; then
    echo "admin-mysql_db not found on this node"
    exit 1
fi

echo "Initializing database and privileges..."
docker exec -i $DB_CONTAINER mysql -u$DB_USER -p$DB_PASS <<EOF
DROP DATABASE IF EXISTS $DB_NAME;
CREATE DATABASE IF NOT EXISTS $DB_NAME CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';
FLUSH PRIVILEGES;
EOF

if [ -f "$DUMP_FILE" ]; then
    echo "Importing $DUMP_FILE..."
    docker exec -i $DB_CONTAINER mysql -u$DB_USER -p$DB_PASS $DB_NAME < $DUMP_FILE
    echo "Import successful"
else
    echo "$DUMP_FILE not found"
fi
