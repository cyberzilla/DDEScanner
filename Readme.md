DDEScanner 2.0.6
================

How DDEScanner works?
=====================
DDEScanner runs only on Windows systems, it utilizes shell manipulation on the registry from Windows, how it works as if you access "mailto: youremail@mail.com" on the link, it will run a mail client application such as MS Outlook or other email client applications or also like the magnet link on the torrent, when the magnet link is accessed, the torrent application will open automatically.

What are the advantages of DDEScanner?
======================================
DDEscanner can shorten your workflow that originally uploaded the document manually after being scanned, the results of a scan that has many pages will certainly bother you to put together the entire scan results and gather them into one file like a pdf file. DDEscanner supports ADF Scanner which allows the scanning process with many pages and immediately combines the results of the scan into a single pdf file, then it will be uploaded automatically without you need to touch it again. Also DDEScanner supports Duplex scan which allows you to scan both sides of a document. DDEScanner also supports OCR Processing, but the engine used is separate from DDEScanner, the engine that supports ORC is TOCR from Transym, which you can get the trial version on the official website http://www.transym.com

DDEScanner Trial vs Licensed
============================
DDEScanner trial version will be valid for 14 days for testing and evaluation. During the trial period you can use DDEScanner with all its features, after the trial period has expired, you can still use DDEScanner but with scan results that have low quality. if interested in continuing to use it, you can purchase a "Personal Use" license for personal use or a "Business Use" license for office and company use.

How to install DDEScanner?
==========================
1. Run Setup File "DDEScanner_v2.0.1.exe" as administrator.
2. Before pressing the "Next" button, you have to close all browsers that are running, even if you press the "Next" button it will automatically detect the browser that is running, especially Google Chrome then it will close
3. After Next button pressed, It Will Show Installation Path and URL upload (for send scanned results), default path is where you run Setup File
4. After filling the "Installation Path" and "Url Upload", press the "Next" button, and will display the Resume before the installation process, then press the "Install" button
5. If setup process complete, it will extract 5 File into "Installation Path"
	- DDEScanner.exe (Main Program)
	- DDECommand.exe (Command Helper of DDEScanner)
	- Demo.html (Will Help you to run DDEScanner)
	- upload.php (This file is just an example of how the scanner results are passed from DDEScanner.exe and received on the server, so the "Url Upload" that you access on the server has at least the code as in the upload.php file to receive the scanner results)
	- Readme.md (This is what you are reading now, hehe)


How To Register?
================
1. Open DDEScanner.exe and press Registration Button in "About" tab
2. Fill the form registration info:
	LicenseType	: Personal Use/ Business Use
	PC Clients	: 1 - 10 / Unlimited
	Name		: Your Name
	Email		: Your Email
	Url Upload	: Your Api URL (for sending scanner result)
3. Press "Submit" Button (This is require Internet Connection)
4. After press "Submit" Button, DDEScanner will generated Two File
	- InstallationID.ins (This is your Installation ID), you can keep this if some times you will reinstall or Update DDEScanner
	- HowToPay.txt (This is intruction how to buy a DDEScanner License)
5. Complete Payment, Please confirm before.
6. After Payment is complete, Our team will send your "Activation Code"
7. Please keep Installation ID and Activation Code


Available Command
=================
<pre>ddescanner:[blok_base64] -> without brackets
ddescanner:changescanner
ddescanner:activate
ddescanner:update
</pre>

BASE64 blocks contain parameters which is separate by "|"
=========================================================
1. index 0 contain "special param" which will add to "URL path" such as "?filename=your_filename" or "?token=your_token" or anything you want
2. index 1 contain "scan mode", ADFDuplex,ADFDuplexOCR,ADFSimplex,FLATDuplex,FLATSimplex,ANYSimplexJPG,ANYSimplexPNG
3. index 2 contain "scan type", Color,Blackwhite,Grayscale
4. index 3 contain "DPI Scale:Image Quality" or only "DPI Scale"
5. index 4 contain "Paper Size", Auto,Letter,Legal,A4,A5,F4

The Parameters before encode with base64
========================================
<pre>?name=FileName&token=12345|ADFDuplex|Color|300:70|Auto</pre>

Full command after encode base64
================================
<pre>ddescanner:P25hbWU9RmlsZU5hbWUmdG9rZW49MTIzNDV8QURGRHVwbGV4fENvbG9yfDMwMDo3MHxBdXRv</pre>

How To call command from browser
================================
<br><code>`<a href="ddescanner:P25hbWU9RmlsZU5hbWUmdG9rZW49MTIzNDV8QURGRHVwbGV4fENvbG9yfDMwMDo3MHxBdXRv">ADF Scanner (Duplex)</a>`</code>


The scan results will be PDF and sent with BASE64 code

Please see Demo.html to do more testing

Cheers.
