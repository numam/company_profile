# Company Profile Premium Meat Shop

Premium Meat Shop adalah proyek pengelolaan dan penjualan daging premium yang dikembangkan untuk memudahkan pengecer dan konsumen dalam memilih dan membeli produk daging berkualitas tinggi. Proyek ini bertujuan untuk menyediakan platform yang user-friendly dengan fitur-fitur seperti katalog produk, sistem pemesanan, dan manajemen stok. Daging yang dijual berasal dari pemasok terpercaya, menjamin kualitas dan kesegaran. Pengguna dapat menjelajahi berbagai pilihan potongan daging, mendapatkan informasi detail tentang produk, serta melakukan pembelian dengan mudah. Proyek ini dirancang dengan teknologi web modern dan bertujuan untuk memberikan pengalaman berbelanja yang memuaskan bagi pelanggan Premium Meat Shop.




## Tech Stack

**Client:** Vue, Laravel, Inertia, TailwindCSS

**Server:** Node


## Run Locally

Clone the project

```bash
  git clone https://github.com/numam/company_profile.git
```

Go to the project directory

```bash
  cd company_profile
```

switch to develop branch

```bash
  git checkout develop
```

Install dependencies

```bash
  composer install
  npm install
```

Migrate database

```bash
  php artisan migrate
```

Start the server

```bash
  npm run dev
  php artisan serve
```


## Spesifikasi Projek

    1. Landing Page
       - Menampilkan produk unggulan (daging premium) yang dapat dipilih oleh pengguna
       - Navigasi yang jelas untuk memudahkan akses ke halaman produk, artikel, dan checkout.

    2. CRUD Produk
       - Tambah Produk: Admin dapat menambah produk baru (daging premium) dengan informasi seperti nama, kategori, harga, deskripsi, gambar.
       - Edit Produk: Admin dapat mengubah informasi produk yang sudah ada.
       - Hapus Produk: Admin dapat menghapus produk yang tidak lagi tersedia atau tidak relevan.
       - Tampilkan Produk: Pengguna dapat melihat daftar produk yang tersedia.
       - Detail Produk: Setiap produk memiliki halaman detail dengan informasi lengkap dan gambar.

    3. CRUD Artikel
       - Tambah Artikel: Admin dapat menambahkan artikel terkait daging premium, resep, tips masakan, atau berita lainnya.
       - Edit Artikel: Admin dapat mengedit artikel yang sudah dipublikasikan.
       - Hapus Artikel: Admin dapat menghapus artikel yang sudah tidak relevan atau usang.
       - Tampilkan Artikel: Pengguna dapat membaca artikel-artikel yang dipublikasikan di website.

    4. Registrasi dan Login
       - Form Registrasi: Pengguna baru dapat mendaftar dengan memasukkan nama, email, password, dan informasi terkait lainnya.
       - Form Login: Pengguna yang sudah terdaftar dapat login dengan menggunakan email dan password.
       - Autentikasi Pengguna: Menggunakan sistem autentikasi yang aman untuk login dan logout.

