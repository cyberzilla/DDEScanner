DDEScanner 1.7.5
================

SN DEMO     : DEMO-DEMO-DEMO-DEMO-DEMO <br>
SN TRIAL    : TEST-TEST-TEST-TEST-TEST (for 14 days trial period)

Cara Register Versi DEMO (Bisa Offline):
1. Untuk Serial Number Demo, Maka Url Path akan diisi secara manual.
2. Masukkan Serial Demo pada Tab Activate.
3. Tekan Tombol Check Hingga Name dan Organization terisi menjadi DEMO
4. Masukkan URL Path (Url Api untuk mengirim hasil Scan)
5. Tombol Check Akan menjadi Tombol "Activate"
6. Tekan Tombol Activate
7. Muncul Alert untuk memastikan path data yang dimasukkan benar
8. Proses ini akan menghentikan google chrome, pastikan data di browser anda tersimpan, dan Tekan OK
9. Selesai

How To Register DEMO Version:
1. Run Register.exe as administrator
2. Insert DEMO serial Number in Activate Tab
3. Press Check Button and wait until Name & Org become "DEMO"
4. Insert "URL Path" to Send scanner result
5. Now, Check Button Become "Activate" Button
6. Press Activate Button and Accept If URL Path is correct
7. This Process will terminate Google Chrome
8. Done

Cara Register Online
1. Masukkan Informasi yang dibutuhkan dalam form pendaftaran seperti Nama, Organisasi, dan URL path, dan pilih jenis lisensi yang anda butuhkan
2. Silahkan konfirmasi pada Kontak yang tersedia via WA ke 085242703687
3. Untuk aktivasi, Caranya sama seperti di atas namun URL path akan terisi otomatis sesuai dengan url path yang didaftarkan (membutuhkan koneksi internet)

How To Register Online
1. Just fill the form registration info:
   Name: Your Name
   Org: Your Org
   Url Path: Your Api URL (for sending scanner result)
   Your licences you want
2. Press Register Button
3. Complete Payment, please confirm before
4. This Method require internet connection to register

Command yang tersedia / Available Command:
<pre>ddescanner:[blok_base64] -> tanpa kurung siku / without brackets
ddescanner:about
ddescanner:update
ddescanner:expire
ddescanner:chromepath
</pre>

decode blok_base64 terdiri dari parameter yang dipisahkan tanda "|"
1. index 0 berisi Special Param dan akan ditambahkan pada akhir urlPath yang didaftarkan sebelumnya, ini bisa diisi dengan nama file, akses token dan menggunakan metode $_GET saat berkomunikasi dengan PHP server
2. index 1 berisi Mode Upload, terdapat 3 mode yaitu direct,manual,hide . Direct akan melakukan scan dan upload otomatis sedangkan manual akan memunculkan konfig dan scan manual, sedangkan hide akan melakukan scan dan menguploadnya langsung tanpa ada notifikasi
3. index 2 berisi Mode Scan, terdapat 4 mode yaitu Default By System (0), Color (1), Grayscale (2), Black White (3)
4. index 3 berisi ukuran DPI, semakin tinggi maka ukuran file akan semakin besar
5. index 4 berisi ukuran kertas, terdapat 4 ukuran kertas yang tersedia yaitu legal, letter, f4, dan a4 (default) 

base64 blocks contain parameters which is separate by "|"
1. index 0 contain "special param" which will add to "URL path" such as "?filename=your_filename" or "?token=your_token" or anything you want
2. index 1 contain "upload mode", only 3 mode: direct,manual,hide
3. index 2 contain "scan mode", default (0), color (1), grayscale (2), text black white (3)
4. index 3 contain "DPI Scale"
5. index 4 contain "Paper Size", legal, letter, f4 and a4 (default)

Contoh parameter base64 sebelum di encode / Parameter before encode with base64:
<pre>?name=FileName.jpg&token=12345|manual|1|160|letter</pre>

Command lengkap yang dipasang di web dari parameter diatas / full command after encode base64:
<pre>ddescanner:P25hbWU9RmlsZU5hbWUuanBnJnRva2VuPTEyMzQ1fG1hbnVhbHwxfDE2MHxsZXR0ZXI=</pre>

Contoh Url pemanggilan saat mengakses via browser / How To call command from browser:
<br><code>`<a href="ddescanner:P25hbWU9RmlsZU5hbWUuanBnJnRva2VuPTEyMzQ1fG1hbnVhbHwxfDE2MHxsZXR0ZXI=">Direct Scanner</a>`</code>

Hasil Scan akan dikirim dengan bentuk BASE64 / Scanner Result send by BASE64 encode

For example please look saveimage.php to get base64 from app / script php untuk menerima request dari aplikasi telah disediakan di dalam file saveimage.php

DEMO
=
Please see the **demo.html** or Visit https://ddescanner.dzakiyyah.com/1.7.5
