# FP-IDS
Final Project Intrusi Deteksi Sistem

## Antibot clientside
  IDS yang saya terapkan adalah IDS untuk mendeteksi penggunaan bot yang fungsinya spam isi formulir pada website. Cara kerjanya adalah sebagai berikut: Menggunakan botbattler ( https://github.com/RikdeBoer/BotBattler-JS/tree/1.0 ) akan membuat satu field tambahan pada setiap form di website yang hanya bisa diisi oleh bot/script botbattler. jika field tersebut diisi dan valuenya tidak sesuai dengan yang akan diisi oleh botbattler maka akan dianggap bot oleh botbattler.
### Modifikasi pada implementasi
  Karena botbattler adalah clientside script, maka diperlukan sebuah cara untuk mengirim data ke server. Saya menggunakan metode redirect ke sebuah halaman ( dalam kasus ini adalah halaman detectedasabot.php ) yang isinya adalah mencatat informasi mengenai user yang mengakses halaman tersebut dan waktu aksesnya dan nantinya akan dikirim ke server di log.

## Integrasi dengan Bot Discord
  Discord bot akan membaca isi dari file log yang dibuat oleh website, lalu jika ada log yang baru masuk maka akan ditampilkan ke channel message di discord. User harus mengetikkan command !logids terlebih dahulu agar discord mulai membaca file log tersebut.
  
  Apa saja yang digunakan dalam penugasan ini:
  - Website dari FP Pweb
  - Botbattler.js
  - Discord.js untuk discord bot
 
