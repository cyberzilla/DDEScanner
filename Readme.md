DDEScanner 1.7.4
================

SN for Demo  : DEMO-DEMO-DEMO-DEMO-DEMO<br>
SN for Trial : TEST-TEST-TEST-TEST-TEST (for 14 days trial period)

Cara Aktivasi Versi DEMO/TRIAL (Bisa Offline):
1. Untuk Serial Number Demo/Trial, Maka Url Path akan diisi secara manual.
2. Masukkan Serial Demo pada Tab Activate.
3. Tekan Tombol Check Hingga Name dan Organization terisi menjadi DEMO/TRIAL
4. Masukkan URL Upload (Url Api untuk mengirim hasil Scan)
5. Tombol Check Akan menjadi Tombol "Activate"
6. Tekan Tombol Activate
7. Akan Muncul Alert untuk memastikan path data yang dimasukkan benar
8. Proses ini akan menghentikan google chrome, pastikan data di browser anda tersimpan, dan Tekan OK
9. Selesai

How To Activate DEMO/TRIAL Version:
1. Run Register.exe as administrator
2. Insert DEMO/TRIAL serial Number in Activate Tab
3. Press Check Button and wait until Name & Org become "DEMO/TRIAL"
4. Insert "URL Upload" to Send scanner result
5. Now, Press Check Button untill Become "Activate" Button
6. Press Activate Button and Accept If URL Path is correct
7. This Process will terminate Google Chrome
8. Done

Cara Register Online
1. Masukkan Informasi yang dibutuhkan dalam form pendaftaran seperti Nama, Organisasi, dan URL path, dan pilih jenis lisensi yang anda butuhkan
2. Tekan Tombol Register
3. Silahkan Kontak ke WA 085242703687 untuk informasi lebih lanjut

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
4. index 3 & 4 berisi ukuran DPI, semakin tinggi maka ukuran file akan semakin besar 

base64 blocks contain parameters which is separate by "|"
1. index 0 contain "special param" which will add to "URL path" such as "?filename=your_filename" or "?token=your_token" or anything you want
2. index 1 contain "upload mode", only 3 mode: direct,manual,hide
3. index 2 contain "scan mode", default (0), color (1), grayscale (2), text black white (3)
4. index 3 & 4 contain "DPI Scale"

Contoh parameter base64 sebelum di encode / Parameter before encode with base64:
<pre>?name=FileName.jpg&token=12345|manual|1|160|160</pre>

Command lengkap yang dipasang di web dari parameter diatas / full command after encode base64:
<pre>ddescanner:P25hbWU9TmFtYUZpbGUuanBnJnRva2VuPTEyMzQ1fG1hbnVhbHwxfDE2MHwxNjA=</pre>

Contoh Url pemanggilan saat mengakses via browser / How To call command from browser:
<br><code>`<a href="ddescanner:P25hbWU9TmFtYUZpbGUuanBnJnRva2VuPTEyMzQ1fG1hbnVhbHwxfDE2MHwxNjA=">Direct Scanner</a>`</code>

Hasil Scan akan dikirim dengan bentuk BASE64 / Scanner Result send by BASE64 encode

For example please look saveimage.php to get base64 from app / script php untuk menerima request dari aplikasi telah disediakan di dalam file saveimage.php
