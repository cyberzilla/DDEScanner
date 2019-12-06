Scanner 1.5.6
=============

SERIAL NUMBER: DEMO-DEMO-DEMO-DEMO-DEMO

Cara Register Versi DEMO (Bisa Offline):
1. Untuk Serial Number Demo, Maka Url Path akan diisi secara manual.
2. Masukkan Serial Demo.
3. Tekan Tombol Check Hingga Name dan Organization terisi menjadi DEMO
4. Masukkan URL Path (Url Api untuk mengirim hasil Scan)
5. Tombol Check Akan menjadi Tombol "Register"
6. Tekan Tombol Register
7. Muncul Alert untuk memastikan path data yang dimasukkan benar
8. Proses ini akan menghentikan google chrome, pastikan data di browser anda tersimpan, dan Tekan OK
9. Selesai

Cara Register Online
1. Hubungi Kontak yang tersedia via demo atau WA ke 085242703687
2. Caranya sama seperti di atas namun URL path akan terisi otomatis sesuai dengan url path yang didaftarkan (membutuhkan koneksi internet)


Contoh Url pemanggilan saat mengakses via browser

Command yang tersedia:
<pre>ddescanner:[blok_base64] -> tanpa kurung siku
ddescanner:about
ddescanner:update</pre>

decode blok_base64 terdiri dari parameter yang dipisahkan tanda "|"
index 0 berisi Special Param dan akan ditambahkan pada akhir urlPath yang didaftarkan sebelumnya, ini bisa diisi dengan nama file, akses token dan menggunakan metode $_GET saat berkomunikasi dengan PHP server
index 1 berisi Mode Upload, terdapat 2 mode yaitu direct dan manual. Direct akan melakukan scan dan upload otomatis sedangkan manual akan memunculkan konfig dan scan manual
index 2 berisi Mode Scan, terdapat 4 mode yaitu Default By System (0), Color (1), Grayscale (2), Black White (3)
index 3 & 4 berisi ukuran DPI, semakin tinggi maka ukuran file akan semakin besar 

Contoh parameter base64 sebelum di encode:
<pre>?name=NamaFile.jpg&token=12345|manual|1|160|160</pre>

Command lengkap yang dipasang di web dari parameter diatas:
<pre>ddescanner:P25hbWU9TmFtYUZpbGUuanBnJnRva2VuPTEyMzQ1fG1hbnVhbHwxfDE2MHwxNjA=</pre>
  
script php untuk menerima request dari aplikasi telah disediakan di dalam file saveimage.php
