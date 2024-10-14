<<<<<<< HEAD
---
=======
>>>>>>> 97c9acf8af5053e096328cb367bbdd7ef5c33c5d

# **Dokumentasi Aplikasi CRUD Sederhana menggunakan Laravel dan Laragon**

## **1. Persiapan Lingkungan Kerja**

### **1.1. Instalasi Laragon**
<<<<<<< HEAD

-   Unduh Laragon dari [situs resmi Laragon](https://laragon.org/download/).
-   Ekstrak file dan jalankan `Laragon.exe`.
-   Laragon secara otomatis mengatur Apache dan MySQL untuk Anda.

### **1.2. Instalasi Composer**

-   Composer biasanya sudah terintegrasi dengan Laragon.
-   Untuk memeriksa, buka terminal (Command Prompt) di Laragon, dan jalankan:
    ```bash
    composer --version
    ```

## **2. Membuat Proyek Laravel**

### **2.1. Membuat Proyek Baru**

-   Buka Laragon.
-   Klik pada ikon **"Menu"** di sudut kiri atas, pilih **"Quick app" > "Laravel"**.
-   Masukkan nama proyek (misalnya `crud-app`), lalu tekan **Enter**.
-   Laragon akan otomatis mengunduh dan menginstal Laravel untuk Anda.

### **2.2. Menjalankan Proyek**

-   Setelah selesai, buka terminal di Laragon (klik kanan di proyek Anda > **"Terminal"**).
-   Jalankan perintah berikut untuk menjalankan server Laravel:
    ```bash
    php artisan serve
    ```
-   Akses aplikasi Anda melalui browser di:
    ```
    http://localhost:8000
    ```

## **3. Mengatur Database**

### **3.1. Membuat Database di phpMyAdmin**

-   Buka phpMyAdmin melalui browser:
    ```
    http://localhost/phpmyadmin
    ```
-   Klik **"Databases"** di menu atas.
-   Masukkan nama database baru (misalnya, `crud_db`) dan klik **"Create"**.

### **3.2. Konfigurasi Koneksi Database**

-   Buka file `.env` yang ada di root proyek Laravel Anda.
-   Temukan bagian berikut dan sesuaikan dengan informasi database Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## **4. Membuat Tabel dan Migration**

### **4.1. Membuat Migration**

-   Di terminal, jalankan perintah untuk membuat migration dan model:
    ```bash
    php artisan make:model Contact -m
    ```
-   Buka file migration yang dibuat di `database/migrations/xxxx_xx_xx_create_contacts_table.php` dan sesuaikan dengan kolom yang Anda butuhkan:
    ```php
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
        });
    }
    ```

### **4.2. Menjalankan Migration**

-   Jalankan migration untuk membuat tabel di database:
    ```bash
    php artisan migrate
    ```

## **5. Mengelola CRUD di Aplikasi**

### **5.1. Menambahkan Fitur CRUD**

-   Buat controller untuk mengelola data:
    ```bash
    php artisan make:controller ContactController
    ```
-   Tambahkan metode untuk **create**, **read**, **update**, dan **delete** di dalam controller.

### **5.2. Routing**

-   Buka file `routes/web.php` dan definisikan rute untuk mengarah ke controller Anda.

### **5.3. Membuat Tampilan**

-   Buat tampilan di dalam folder `resources/views` menggunakan Blade template.

## **6. Validasi Input**

-   Tambahkan validasi input di controller untuk memastikan data yang dimasukkan sesuai.

## **7. Testing dan Debugging**

-   Gunakan Laravel tools seperti `dd()` untuk debugging jika ada error yang muncul.

## **8. Menjalankan Aplikasi**

-   Setelah semua langkah di atas selesai, jalankan aplikasi dengan:
    ```bash
    php artisan serve
    ```
-   Akses aplikasi melalui browser:
    ```
    http://localhost:8000
    ```
=======
- Unduh Laragon dari [situs resmi Laragon](https://laragon.org/download/).
- Ekstrak file dan jalankan `Laragon.exe`.
- Laragon secara otomatis mengatur Apache dan MySQL untuk Anda.

### **1.2. Instalasi Composer**
- Composer biasanya sudah terintegrasi dengan Laragon.
- Untuk memeriksa, buka terminal (Command Prompt) di Laragon, dan jalankan:
  ```bash
  composer --version
  ```

## **2. Membuat Proyek Laravel**

### **2.1. Membuat Proyek Baru**
- Buka Laragon.
- Klik pada ikon **"Menu"** di sudut kiri atas, pilih **"Quick app" > "Laravel"**.
- Masukkan nama proyek (misalnya `crud-app`), lalu tekan **Enter**.
- Laragon akan otomatis mengunduh dan menginstal Laravel untuk Anda.

### **2.2. Menjalankan Proyek**
- Setelah selesai, buka terminal di Laragon (klik kanan di proyek Anda > **"Terminal"**).
- Jalankan perintah berikut untuk menjalankan server Laravel:
  ```bash
  php artisan serve
  ```
- Akses aplikasi Anda melalui browser di:
  ```
  http://localhost:8000
  ```

## **3. Mengatur Database**

### **3.1. Membuat Database di phpMyAdmin**
- Buka phpMyAdmin melalui browser:
  ```
  http://localhost/phpmyadmin
  ```
- Klik **"Databases"** di menu atas.
- Masukkan nama database baru (misalnya, `crud_db`) dan klik **"Create"**.

### **3.2. Konfigurasi Koneksi Database**
- Buka file `.env` yang ada di root proyek Laravel Anda.
- Temukan bagian berikut dan sesuaikan dengan informasi database Anda:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=crud_db
  DB_USERNAME=root
  DB_PASSWORD=
  ```

## **4. Membuat Tabel dan Migration**

### **4.1. Membuat Migration**
- Di terminal, jalankan perintah untuk membuat migration dan model:
  ```bash
  php artisan make:model Contact -m
  ```
- Buka file migration yang dibuat di `database/migrations/xxxx_xx_xx_create_contacts_table.php` dan sesuaikan dengan kolom yang Anda butuhkan:
  ```php
  public function up()
  {
      Schema::create('contacts', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('email')->unique();
          $table->string('phone');
          $table->timestamps();
      });
  }
  ```

### **4.2. Menjalankan Migration**
- Jalankan migration untuk membuat tabel di database:
  ```bash
  php artisan migrate
  ```

## **5. Mengelola CRUD di Aplikasi**

### **5.1. Menambahkan Fitur CRUD**
- Buat controller untuk mengelola data:
  ```bash
  php artisan make:controller ContactController
  ```
- Tambahkan metode untuk **create**, **read**, **update**, dan **delete** di dalam controller.

### **5.2. Routing**
- Buka file `routes/web.php` dan definisikan rute untuk mengarah ke controller Anda.

### **5.3. Membuat Tampilan**
- Buat tampilan di dalam folder `resources/views` menggunakan Blade template.

## **6. Validasi Input**
- Tambahkan validasi input di controller untuk memastikan data yang dimasukkan sesuai.

## **7. Testing dan Debugging**
- Gunakan Laravel tools seperti `dd()` untuk debugging jika ada error yang muncul.

## **8. Menjalankan Aplikasi**
- Setelah semua langkah di atas selesai, jalankan aplikasi dengan:
  ```bash
  php artisan serve
  ```
- Akses aplikasi melalui browser:
  ```
  http://localhost:8000
  ```
>>>>>>> 97c9acf8af5053e096328cb367bbdd7ef5c33c5d
