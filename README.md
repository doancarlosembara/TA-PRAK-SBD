# Laravel 10 - Multi Tenant Application

## Screenshots

![preview img](/preview.png)

## Donwload

Clone Projek

```bash
  git clone https://github.com/doancarlosembara/TA-PRAK-SBD
```

Masuk ke folder dengan perintah

```bash
  cd nama_projek
```

-   Copy .env.example menjadi .env

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Login

-   email = admin@admin.com
-   password = 123
