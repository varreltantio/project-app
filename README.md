# Project APP

## Instalasi

Silakan periksa panduan instalasi laravel resmi untuk mengetahui persyaratan server sebelum Anda mulai. [Official Documentation](https://laravel.com/docs/8.x/installation)

Clone repositori

    git clone git@github.com:varreltantio/project-app.git

Beralih ke folder repo

    cd project-app

Instal semua dependensi menggunakan composer

    composer install

Salin contoh berkas env dan buat perubahan konfigurasi yang diperlukan dalam berkas .env

    cp .env.example .env

Buat application key baru

    php artisan key:generate

Import database yang ada di [database/project-app.sql](https://github.com/varreltantio/project-app/blob/main/database/project-app.sql) ke DBMS

Mulai local development server

    php artisan serve

Akses aplikasi di http://localhost:8000

## Daftar Akun

### Akun User

email = varreldtantio@gmail.com

password = varrel12345

### Akun Gardener

email = dwihadi123@gmail.com

password = dwi12345

### Akun Designer

email = ilhampandu@gmail.com

password = ilham12345

## Tampilan

### Halaman Register

<img width="801" alt="Project App Halaman Register - Leravio" src="https://user-images.githubusercontent.com/49724190/225338196-5fa61af7-33a0-4d53-b28c-dc9615597645.png">

### Halaman Login

<img width="923" alt="Project App Halaman Login - Leravio" src="https://user-images.githubusercontent.com/49724190/225338100-e754da4b-db1e-4338-8a23-07676adb7b5e.png">

### Halaman Daftar Project

<img width="909" alt="Project App Daftar Project - Leravio" src="https://user-images.githubusercontent.com/49724190/225338787-d37f6bb3-0859-4d10-b875-fe34ecc94457.png">

### Halaman Tambah Project

<img width="911" alt="Project App Tambah Project - Leravio" src="https://user-images.githubusercontent.com/49724190/225339184-5d0d0461-106c-4248-ae47-64c155f0ef4a.png">

### Halaman Detail Project

<img width="878" alt="Project App Detail Project - Leravio" src="https://user-images.githubusercontent.com/49724190/225339420-96b2e4cc-f3f4-498d-8055-d449973c520e.png">

### Halaman Ubah Project

<img width="905" alt="Project App Ubah Project - Leravio" src="https://user-images.githubusercontent.com/49724190/225339695-bfa2df28-0392-43f6-8b00-c2a34d88ff49.png">
