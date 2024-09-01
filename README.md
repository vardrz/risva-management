# Risva Management

Berikut ini dokumentasi untuk menjalankan di local :

## Syarat

-   XAMPP terbaru dengan PHP 8.2
-   Composer, jika belum ada download di : https://getcomposer.org/Composer-Setup.exe
-   Git, jika belum ada download di : https://git-scm.com/downloads

## Prerequisite
1 - Buka XAMPP dan jalankan apache & mysql

2 - Buka phpmyadmin di browser, localhost/phpymyadmin

3 - Buat Database dengan nama risva-management

## Cara Install
Buka Terminal / CMD, lalu arahkan ke folder tujuan

1 - Clone project ini

```bash
git clone https://github.com/vardrz/risva-management.git
```

2 - Masuk ke folder project

```bash
cd risva-management
```

3 - Install dependensi project

```bash
composer install
```

4 - Jalankan migration

```bash
php spark migrate
```

5 - Isi database

```bash
php spark db:seed RunSeeder
```

6 - Jalankan local server

```bash
php spark serve
```

7 - Selesai, buka di browser http://localhost:8080
