# HOW TO ENABLE HTTPS
1. Execute generate-ssl-cert.sh:
```bash
chmod +x generate-ssl-cert.sh
./generate-ssl-cert.sh
```

2. In Prestashop, go to admin's panel. Then:
```
Konfiguruj -> Preferencje -> Ruch -> Ustaw URL sklepu -> Domena sklepu = localhost:8443, 
Domena SSL = localhost:8443
Konfiguruj -> Preferencje -> Ogólny -> Włącz SSL -> Tak -> Zapisz
Konfiguruj -> Preferencje -> Ogólny -> Włącz protokół SSL na wszystkich stronach -> Tak -> Zapisz
```
