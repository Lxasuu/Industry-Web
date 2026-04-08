# Website Teknik Industri - Politeknik META Industri Cikarang

Website ini merupakan prototipe portal informasi resmi untuk Program Studi Teknik Industri di Politeknik META Industri Cikarang. Dikembangkan menggunakan bahasa pemrograman PHP *native* dengan arsitektur *Multi-Page* yang rapi, serta dipadukan dengan **Vite** untuk optimalisasi kompilasi *styling* (SCSS ke CSS) dan komponen interaktif Javascript.

## Fitur Utama Proyek

- **Arsitektur Terstruktur (Multi-Page):** Memiliki struktur file terpisah (`program_studi.php`, `dosen.php`, `beasiswa.php`, dsb.) yang sangat memudahkan modifikasi dan Search Engine Optimization (SEO).
- **Sistem Partials:** Bagian *Header* dan *Footer* dibuat terpusat di folder `src/partials/`, sehingga cukup diubah 1 kali saja untuk memengaruhi seluruh halaman web.
- **Vite Build System:** Dilengkapi dengan konfigurasi Node.js (`vite.config.js`) untuk mem-bundle CSS berbasis SCSS sehingga performa dan penampilan web menjadi canggih.

## Prasyarat (Requirements)

- Server Lokal pengelola PHP, seperti **Laragon**, **XAMPP**, atau WAMP.
- **Node.js** dan NPM (Hanya jika Anda butuh mengedit/compile ulang sistem desain CSS).

## Panduan Pemasangan & Pengembangan Lokal

1. **Clone Repositori ini:**
   Pindahkan hasil clone ke folder utama local server Anda (Misal `C:\laragon\www\` atau `C:\xampp\htdocs\`).
   ```bash
   git clone <URL-Github-Anda-Disini>
   ```

2. **Akses ke Browser:**
   Anda bisa langsung melakukan peninjauan live-server jika Laragon/XAMPP Anda hidup dengan membuka:
   `http://localhost/namarepo-anda/src/index.php`

3. **Cara Merender Ulang Styling CSS (Build):**
   Jika kedepannya Anda ikut merubah file SCSS (`src/assets/scss/style.scss`), Anda wajib meng-compile perubahannya.
   Masuk ke root terminal proyek ini lalu jalankan:
   ```bash
   npm install
   npm run build
   ```
   *(Hal ini akan membuahkan hasil compile ke folder `/dist/` baru yang langsung dihubungkan otomatis ke `header.php`)*

## Kredit dan Lisensi

Website pendidikan ini dimodifikasi luas berdasarkan arsitektur templat antarmuka "LearnHub" gagasan [CodesCandy & ThemeWagon](https://themewagon.com/themes/learnhub/).

Didistribusikan dengan tetap menghormati ketentuan [MIT License](./LICENSE). Seluruh perizinan untuk modifikasi penuh dan publikasi kembali adalah sah asalkan pemberitahuan lisensi asli (MIT) dibawa di dalam proyek ini.
