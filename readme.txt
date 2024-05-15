# Rental Buku

Rental Buku adalah aplikasi web yang dibangun menggunakan Laravel 9 yang memungkinkan pengguna untuk menyewa buku secara online. Aplikasi ini menyediakan fitur-fitur seperti pencarian buku, manajemen penyewaan, dan pengelolaan data buku.

## Fitur

- **Autentikasi Pengguna**: Register, login, dan logout.
- **Manajemen Buku**: Tambah, edit, hapus, dan lihat daftar buku.
- **Pencarian Buku**: Cari buku berdasarkan judul, penulis, atau kategori.
- **Manajemen Penyewaan**: Sewa buku, lihat status penyewaan, dan kembalikan buku.
- **Notifikasi**: Kirim notifikasi kepada pengguna terkait status penyewaan.

## Instalasi

### Prasyarat

- PHP >= 7.4
- Composer
- MySQL
- Node.js & NPM (untuk pengelolaan asset frontend)

### Langkah-langkah

1. Clone repositori ini:
    ```bash
    git clone https://github.com/username/rental-buku.git
    cd rental-buku
    ```

2. Instal dependensi PHP menggunakan Composer:
    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```

4. Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```

5. Migrasi dan seed database:
    ```bash
    php artisan migrate --seed
    ```

6. Instal dependensi frontend dan build asset:
    ```bash
    npm install
    npm run dev
    ```

7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

Akses aplikasi di `http://localhost:8000`.

## Penggunaan

### Manajemen Buku

1. **Tambah Buku**: Admin dapat menambahkan buku baru melalui halaman dashboard.
2. **Edit Buku**: Admin dapat mengedit informasi buku.
3. **Hapus Buku**: Admin dapat menghapus buku dari daftar.

### Manajemen Penyewaan

1. **Sewa Buku**: Pengguna dapat menyewa buku yang tersedia.
2. **Lihat Status Penyewaan**: Pengguna dapat melihat daftar buku yang mereka sewa dan status penyewaannya.
3. **Kembalikan Buku**: Pengguna dapat mengembalikan buku yang telah disewa.

## Kontribusi

Silakan membuat pull request untuk penambahan fitur atau perbaikan bug. Pastikan untuk mengikuti panduan kontribusi yang ada di repositori ini.

---

Dibuat dengan ❤️ oleh [NXRts](https://github.com/NXRts).
