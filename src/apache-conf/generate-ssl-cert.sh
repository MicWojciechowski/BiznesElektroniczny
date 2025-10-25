#!/bin/bash
mkdir -p ssl
PASS="password"
openssl genrsa -aes256 -passout pass:$PASS -out ssl/server.pass.key 4096
openssl rsa -passin pass:$PASS -in ssl/server.pass.key -out ssl/server.key
rm ssl/server.pass.key
openssl req -new -key ssl/server.key -out ssl/server.csr -subj "/C=PL/ST=Pomerania/L=Gdansk/O=CWL/OU=CzteryWedkarskieLegendy/CN=localhost"
openssl x509 -req -sha256 -days 365 -in ssl/server.csr -signkey ssl/server.key -out ssl/server.crt

