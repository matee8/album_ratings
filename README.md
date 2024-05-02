# Web 2 beadandó
## Feladat
Olyan PHP alapú weboldal készítése, mely szerver oldali programozással valósítja
meg a CRUD műveleteket, és az adatok tárolása fájlrendszerben történik.\
## Ötlet
Felhasználók regisztrálhatnak, bejelentkezhetnek, és tölthetnek fel albumokat 
címmel, előadóval, stb... Később, jogosultsági szintekkel csak az admin 
felhasználók tölthetnek fel új albumokat, a többiek pedig csak értékelhetik 
azokat.
## Felhasznált eszközök
- HTML 5
- CSS 3
- Bootstrap
- PHP
## Dokumentáció
A szerver mindent a `/public/index.php` fájlban kezel, logikáját pedig az ebbe
behívott forrásfájlok adják meg. A sablon fájlok a `/resources/views/` 
könyvtárban helyezkednek el, ezekhez tartozó szerveroldali forráskódok pedig a 
`/src/` könyvtárban.
