Dokumen Persyaratan Bisnis (BRD)
Proyek: Pengelolaan Data Barang
Versi: 1.0 (BETA)
Tanggal: 14 November 2024

1. Tujuan Proyek
Objektif
Aplikasi ini dirancang untuk mempermudah pengelolaan data barang dalam perusahaan, mencatat pemasukan dan pengeluaran barang, serta memperbarui stok dengan efisien. Aplikasi ini bertujuan untuk mendukung pengelolaan inventaris, memastikan akurasi data barang, dan memfasilitasi pembuatan laporan terkait stok dan transaksi.

Latar Belakang
Pengelolaan data barang secara manual telah menyebabkan masalah dalam hal kesalahan pencatatan, keterlambatan pembaruan stok, serta kesulitan dalam pembuatan laporan. Dengan aplikasi pengelolaan data barang ini, perusahaan dapat mempercepat proses pencatatan barang masuk dan keluar, meningkatkan akurasi data, serta membuat pelaporan lebih efisien.

2. Fitur Utama
Untuk Admin (Pengguna Utama)
    a. Pengelolaan Data Barang

Menambah, mengubah, atau menghapus data barang dengan informasi seperti:
-Nama barang
-Kode barang
-Harga
-Stok yang tersedia
-Deskripsi barang
#Data barang disimpan dalam basis data dan dapat diperbarui secara real-time.

    b. Pencatatan Transaksi

-Admin dapat mencatat transaksi barang masuk (penerimaan barang) dan barang keluar (penjualan atau distribusi).
Informasi yang dicatat meliputi:
-Nama barang yang diterima atau dikeluarkan
-Jumlah barang yang diproses
-Total nilai transaksi (harga x jumlah)
-Waktu transaksi dilakukan

    c. Pelaporan Stok

-Admin dapat menghasilkan laporan stok barang secara real-time yang menunjukkan jumlah stok yang tersedia dan barang yang terjual.

    d. Pembaruan Stok

-Sistem secara otomatis memperbarui stok barang setelah transaksi dicatat.
-Admin dapat memeriksa laporan transaksi dan stok untuk memastikan data selalu terupdate.

>Untuk Pengguna (Staff Gudang)
1. Pengelolaan Penerimaan Barang

- Staff gudang dapat menerima dan mencatat barang yang datang sesuai dengan dokumen pengiriman dan nomor barang.
- Setelah barang diterima, stok akan diperbarui.

2. Memantau Stok

- Staff dapat melihat jumlah stok barang yang tersedia, baik barang yang baru diterima maupun barang yang sedang diproses untuk keluar.

> Persyaratan Fungsional
<Sistem Login>
- Akses Berdasarkan Peran:
    a. Admin: Dapat mengelola produk, memproses transaksi, dan membuat laporan.
    b. Staff Gudang: Hanya dapat mengelola penerimaan barang dan memperbarui stok.

<Pengaturan & Tampilan Produk dan Transaksi>
- Admin:
    - Dapat mengatur data barang, mencatat transaksi, dan menghasilkan laporan secara otomatis.
- Staff Gudang:
    - Dapat mencatat barang yang diterima dan memantau stok barang yang ada di gudang.

<Persyaratan Non-Fungsional>
 1. Kegunaan
    - Antarmuka aplikasi harus mudah digunakan oleh admin dan staff     gudang, dengan minimal pelatihan.
    - Proses pencatatan barang masuk dan keluar harus cepat dan intuitif.
 2. Keamanan
    - Akses harus dibatasi berdasarkan peran pengguna (admin dan staff gudang).
    - Semua data transaksi dan informasi barang harus dienkripsi untuk menjaga kerahasiaan.
 3. Kinerja
    - Aplikasi harus dapat memproses transaksi dan pembaruan stok secara cepat, bahkan ketika volume transaksi tinggi.

<Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan>
a. Model Data
    -Barang (Products)
        Menyimpan informasi barang yang ada di perusahaan, seperti kode, nama, harga, stok, dan deskripsi barang.
b. Transaksi (Transactions)
        Menyimpan data transaksi yang mencatat pemasukan atau pengeluaran barang, termasuk tanggal transaksi dan metode pembayaran (jika relevan).
c. Stok (Stock)
        Menyimpan data jumlah stok yang tersedia untuk setiap barang.

<Struktur Tabel>
 - Tabel Produk (Products Table)
    >id: bigint UNSIGNED (Primary Key)
    >name: varchar(255) - Nama barang
    >code: varchar(50) - Kode barang
    >price: decimal(10,2) - Harga barang
    >stock: int(11) - Jumlah stok yang tersedia
    >description: text - Deskripsi barang
    >created_at: timestamp
    >updated_at: timestamp

<Tabel Transaksi (Transactions Table)>
    >id: bigint UNSIGNED (Primary Key)
    >product_id: bigint UNSIGNED - ID produk yang terlibat dalam transaksi
    >quantity: int(11) - Jumlah barang yang terlibat dalam transaksi
    >total_price: decimal(10,2) - Total harga transaksi
    >transaction_date: timestamp - Tanggal transaksi dilakukan
    >created_at: timestamp
    >updated_at: timestamp

<Tabel Stok (Stock Table)>
    >id: bigint UNSIGNED (Primary Key)
    >product_id: bigint UNSIGNED - ID produk
    >stock_quantity: int(11) - Jumlah stok yang ada
    >last_updated: timestamp - Tanggal pembaruan stok terakhir
    >created_at: timestamp
    >updated_at: timestamp  