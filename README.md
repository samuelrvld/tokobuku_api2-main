NAMA:SAMUEL RIVALDO SARAGIH
NIM:362358302156
KELAS: 2B TRPL


1. Instalasi Laravel 11:
   Pastikan sudah terinstal PHP, Composer, dan MySQL.
   Instal Laravel:
   ![Gambar](image.png)

   ![Gambar](image-1.png)

   ![Gambar](image-2.png)

2. Konfigurasi Database:
   Buat database MySQL baru bernama 'tokobuku_db'.
   Sesuaikan file .env dengan informasi berikut:

   ![Gambar](image-3.png)

3. Migrasi Awal:
   Jalankan perintah berikut untuk membuat tabel default:

   ![Gambar](image-4.png)

4. Membuat Migration dan Model
   Buat migration dan model untuk Kategori dan Buku:

   ![Gambar](image-5.png)

    Edit file migration `create_kategoris_table.php`:

   ![Gambar](image-6.png)

    Edit file migration `create_bukus_table.php`
   ![Gambar](image-7.png)

 5. Membuat Controller API untuk Kategori dan Buku
  Buat controller untuk Kategori dan Buku:
  ![gambar](image-8.png)

  Isi file `KategoriController.php`:
  ![Gambar](image-9.png)

  Testing API dengan Postman
  Jalankan server Laravel:
  ![Gambar](image-10.png)

  Testing endpoint menggunakan Postman:
  GET
  ![Gambar](image-11.png)
  POST
  ![Gambar](image-12.png)

POST Tambah Buku Baru
![Gambar](image-13.png)
GET Buku Berdasarkan ID
![Gambar](image-14.png)
PUT Update Data Buku
![Gambar](image-15.png)
DELETE Hapus Buku
![Gambar](image-16.png)


Tugas Mahasiswa
1.	Tambahkan Validasi:
o	Nama buku tidak boleh kosong.
o	Harga minimal Rp 1.000.

2.	Rancang Endpoint Baru:
Buatlah satu endpoint tambahan untuk sistem toko buku, misalnya, endpoint untuk mencari buku berdasarkan kategori atau judul. Tantangan: Apa pertimbangan yang harus Anda buat saat merancang endpoint ini? Pertimbangkan aspek performa, skalabilitas, dan pengalaman pengguna.

3.	Uji API Secara Publik:
o	Gunakan ngrok atau sejenisnya untuk membuka API ke internet.

Jawaban:
Ditambahkan validasi dan endpoint ununtk pencarian buku


