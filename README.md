# Angela Caroline Budiman (2409116008) Sistem Informasi A'2024

# Portfolio Website 

Website portofolio pribadi berbasis HTML, CSS, Bootstrap 5, dan Vue JS.  
Project ini dibuat sebagai tugas Mini Project PBW.

# Deskripsi Singkat
Website ini merupakan website portofolio pribadi milik Angie yang dibuat menggunakan HTML, CSS, Bootstrap 5, dan Vue JS. Website ini menampilkan informasi profil, deskripsi diri, keterampilan dalam bentuk progress bar, serta daftar sertifikat dalam layout grid yang responsif. Tampilan dirancang sederhana, modern, dan dapat menyesuaikan berbagai ukuran layar sehingga nyaman diakses melalui desktop maupun perangkat mobile.

## 📂 Struktur Project

<img width="247" height="318" alt="image" src="https://github.com/user-attachments/assets/feb2e1b8-e020-4f90-b39f-debc6fc11cfa" />

Struktur folder MINPRO_PBW terdiri dari file utama index.html dan style.css, serta satu folder pendukung bernama assets. File index.html berfungsi sebagai halaman utama website yang berisi struktur dan isi tampilan, sedangkan style.css digunakan untuk mengatur desain dan tampilan visual seperti warna, layout, dan responsive. Folder assets digunakan untuk menyimpan seluruh gambar yang dipakai di website, seperti foto profil dan gambar sertifikat. Struktur ini sudah rapi dan sesuai standar website statis sederhana.

# Tampilan Website (Section)

## 1️⃣ Hero Section

<img width="1919" height="968" alt="image" src="https://github.com/user-attachments/assets/135285d9-5bf4-47ae-b909-3dd142b7b64e" />

Hero Section merupakan bagian utama yang pertama kali ditampilkan saat website dibuka. Section ini berfungsi sebagai perkenalan singkat mengenai pemilik website, menampilkan identitas, bidang yang ditekuni, serta elemen visual berupa foto profil. Tombol Contact dan Download CV ditambahkan untuk memberikan kesan interaktif, sedangkan daftar skill ditampilkan untuk menunjukkan kemampuan yang dimiliki.

<img width="960" height="764" alt="image" src="https://github.com/user-attachments/assets/e331dacc-c8f3-469e-83c6-904f42cc7b59" />

<img width="966" height="502" alt="image" src="https://github.com/user-attachments/assets/3fd0500b-d418-47a1-84dd-b580c1f6a8c7" />

Struktur layout menggunakan Bootstrap Grid (row, col-lg-6) untuk membagi konten menjadi dua bagian. Nama dan role ditampilkan secara dinamis menggunakan Vue JS interpolation {{ name }} dan {{ role }}. Daftar skill ditampilkan menggunakan v-for, sedangkan gambar profil diambil dari folder assets dengan class img-fluid agar responsif. Styling tambahan seperti hero-bg-card, profile-circle, dan profile-label diatur pada file style.css.

### Penjelasan CSS

<img width="453" height="529" alt="image" src="https://github.com/user-attachments/assets/f29d4e51-74c5-48c9-a89b-a5c9cf67bd0e" />

Kode CSS tersebut mengatur tampilan Hero Section. .hero-section membuat konten memenuhi 90% tinggi layar dan berada di tengah menggunakan flexbox. .hero-bg-wrapper memusatkan kartu secara horizontal, sedangkan .hero-bg-card mengatur desain kartu profil seperti warna latar, sudut membulat, padding, dan border agar terlihat rapi dan modern.

## 2️⃣ About Me Section

<img width="1919" height="452" alt="image" src="https://github.com/user-attachments/assets/4b41497d-b204-4535-83bc-c25730e645ad" />

About Me Section merupakan bagian yang menampilkan informasi lebih lengkap mengenai pemilik website setelah Hero Section. Section ini berfungsi untuk memperkenalkan latar belakang, minat, dan fokus bidang yang ditekuni secara lebih detail. Selain itu, terdapat tampilan skills dalam bentuk progress bar untuk memperlihatkan tingkat kemampuan pada beberapa bidang secara visual. Penyajian ini membantu pengunjung memahami profil dan kompetensi yang dimiliki dengan lebih jelas dan terstruktur.

<img width="1060" height="769" alt="image" src="https://github.com/user-attachments/assets/e7a361c0-88f0-4f51-a258-6f69fc8a21df" />

Kode menggunakan Bootstrap Grid (row, col-lg-6) untuk membagi layout menjadi dua kolom. Teks deskripsi ditampilkan menggunakan Vue interpolation {{ bioFull }}, sedangkan daftar skills ditampilkan secara dinamis dengan v-for="skill in skills". Progress bar menggunakan komponen Bootstrap dengan lebar dan warna yang diatur melalui binding :style berdasarkan nilai skill.level dan skill.color

### Code Css

<img width="240" height="85" alt="image" src="https://github.com/user-attachments/assets/d0ac0ac6-a3c9-4289-b8d0-7379123bfdf6" />

Digunakan untuk memberi jarak atas pada section About (dan section lain juga).

<img width="298" height="230" alt="image" src="https://github.com/user-attachments/assets/c54064d1-f2b4-41d7-af63-2678b8e3e447" />

Bagian About Me pada CSS diatur melalui class .skill-card dan .progress. Class .skill-card digunakan untuk mengatur tampilan card pada bagian Skills dengan sudut membulat dan tanpa border agar terlihat lebih rapi. Sementara itu, .progress digunakan untuk mengatur warna latar belakang progress bar sehingga tampilan tingkat kemampuan pada section About Me terlihat lebih jelas dan terstruktur.

## 3️⃣ Certificates Section

<img width="1919" height="845" alt="image" src="https://github.com/user-attachments/assets/61fd6859-6810-4fd8-9995-4caf41d39003" />

Certificates Section merupakan bagian yang menampilkan daftar sertifikat atau pencapaian dalam bentuk card yang tersusun rapi. Section ini berfungsi untuk menunjukkan pengalaman dan kompetensi yang dimiliki sehingga dapat memperkuat profil profesional pemilik website.

<img width="980" height="792" alt="image" src="https://github.com/user-attachments/assets/7d194fd4-8d75-486c-a76a-e730694f6e4e" />

Certificates Section berfungsi untuk menampilkan daftar sertifikat yang telah diperoleh dalam bentuk card agar tersusun rapi dan mudah dibaca. Setiap card menampilkan gambar sertifikat, judul, dan penerbit. Layout menggunakan Bootstrap Grid (col-md-6 col-lg-4) sehingga tampilan tetap responsif di berbagai ukuran layar. Data ditampilkan secara dinamis menggunakan Vue JS v-for, dengan binding :src dan interpolation {{ }} untuk menampilkan isi data dari Vue instance.

### Penjelasan CSS

<img width="402" height="459" alt="image" src="https://github.com/user-attachments/assets/32f1e055-ee81-430a-a91b-b837d9abb3cd" />

Kode CSS tersebut mengatur tampilan bagian Certificates. Class .certificate-card memberi latar putih, sudut membulat, dan efek transisi, sedangkan efek hover translateY(-10px) membuat kartu terlihat terangkat saat disentuh kursor. Class .cert-img mengatur ukuran gambar agar proporsional serta menambahkan background, padding, dan garis bawah agar tampilannya lebih rapi.

## 4️⃣ Footer

<img width="1919" height="128" alt="image" src="https://github.com/user-attachments/assets/00dfa066-e983-441f-817e-d025e0045d97" />

Footer berisi copyright dan teknologi yang digunakan.

<img width="657" height="146" alt="image" src="https://github.com/user-attachments/assets/8106cdc6-44aa-4cfb-88cb-9fb8ec299329" />

Kode tersebut merupakan bagian footer yang berfungsi sebagai penutup halaman website. Elemen semantik <footer> digunakan untuk menandai bagian akhir halaman, sedangkan utility class Bootstrap seperti py-5, mt-5, border-top, dan text-center digunakan untuk mengatur jarak dan perataan teks. Nama ditampilkan secara dinamis menggunakan Vue JS interpolation {{ name }} yang terhubung dengan data pada Vue instance.

## Tambahan Penjelasan Code

<img width="1155" height="574" alt="image" src="https://github.com/user-attachments/assets/9c4dc719-b306-4d6c-8eda-4d6d09c84d46" />

Kode tersebut merupakan bagian awal struktur HTML yang berisi konfigurasi dasar halaman. Di dalam <head> terdapat meta charset dan viewport untuk mendukung tampilan responsif, serta pemanggilan Bootstrap dan Google Fonts melalui CDN untuk styling dan tipografi. File style.css digunakan untuk custom CSS, sedangkan Vue JS dimuat melalui <script> agar fitur dinamis seperti interpolation dan v-for dapat digunakan di dalam halaman.

<img width="1717" height="772" alt="image" src="https://github.com/user-attachments/assets/d1882593-95c2-4f3d-812b-c662df146ddf" />

Kode tersebut merupakan bagian awal struktur HTML yang berisi konfigurasi dasar halaman. Di dalam <head> terdapat meta charset dan viewport untuk mendukung tampilan responsif, serta pemanggilan Bootstrap dan Google Fonts melalui CDN untuk styling dan tipografi. File style.css digunakan untuk custom CSS, sedangkan Vue JS dimuat melalui <script> agar fitur dinamis seperti interpolation dan v-for dapat digunakan di dalam halaman.


# Platform dan Tools yang Digunakan (Teknologi yang digunakan)
- HTML
- CSS
- Bootstrap 
- Vue JS 
- Google Fonts 
- Visual Studio Code

# Fitur Utama
✔ Responsive Design  
✔ Navbar  
✔ Hero Section  
✔ About Me Section  
✔ Skills Progress Bar  
✔ Certificates Grid Layout  
✔ Vue JS Interpolation & Looping  
✔ Bootstrap Grid System  

## Penggunaan Bootstrap

Bootstrap digunakan dalam project ini untuk mengatur layout, komponen, serta styling tampilan website agar terlihat rapi, modern, dan responsif di berbagai ukuran layar.

### 1️⃣ Grid System (Layout)

Bootstrap Grid digunakan untuk membagi struktur halaman menjadi beberapa kolom agar konten tersusun dengan baik dan adaptif terhadap ukuran layar. Class yang digunakan antara lain:

- `container`
- `row`
- `col-lg-6`
- `col-md-6 col-lg-4`

Grid ini diterapkan pada Hero Section, About Section, dan Certificates Section untuk memastikan tampilan tetap terstruktur pada desktop maupun perangkat mobile.

### 2️⃣ Komponen Bootstrap

Beberapa komponen bawaan Bootstrap yang digunakan dalam website ini meliputi:

- `navbar` → digunakan sebagai navigasi utama di bagian atas halaman  
- `card` → digunakan untuk menampilkan daftar sertifikat  
- `progress` dan `progress-bar` → digunakan untuk menampilkan tingkat kemampuan pada bagian skills  
- `btn` → digunakan untuk tombol Contact dan Download CV  

Penggunaan komponen ini membantu mempercepat proses pengembangan tanpa harus membuat desain dari awal.

### 3️⃣ Utility Classes

Bootstrap juga digunakan melalui utility classes untuk mengatur styling secara cepat dan efisien, seperti:

- `py-5`, `mt-5` → mengatur jarak (padding dan margin)  
- `text-center`, `text-muted` → mengatur perataan dan warna teks  
- `fw-bold` → mengatur ketebalan font  
- `shadow-sm`, `shadow-lg` → menambahkan efek bayangan  

Utility classes ini membantu menjaga konsistensi desain serta membuat kode lebih ringkas dan terstruktur.'

## Penggunaan Vue JS

Vue JS digunakan untuk mengelola data dan menampilkan konten secara dinamis pada website. Dengan Vue, data yang disimpan dalam `data()` dapat langsung ditampilkan ke halaman tanpa perlu menulis ulang HTML secara manual.

### 1️⃣ Interpolation

Vue menggunakan interpolation dengan tanda `{{ }}` untuk menampilkan data ke dalam HTML. Contoh yang digunakan dalam project ini:

- `{{ name }}`
- `{{ role }}`
- `{{ bioFull }}`
- `{{ cert.title }}`
- `{{ cert.issuer }}`

Interpolation ini membuat data yang ada di Vue instance dapat ditampilkan secara dinamis di dalam halaman.

### 2️⃣ Directive v-for (Looping Data)

Directive `v-for` digunakan untuk menampilkan data berbentuk array secara otomatis, seperti:

- `v-for="tag in tags"` → menampilkan daftar skill pada Hero Section  
- `v-for="skill in skills"` → menampilkan daftar skills pada About Section  
- `v-for="cert in certificates"` → menampilkan daftar sertifikat  

Dengan `v-for`, setiap item dalam array akan dirender menjadi elemen HTML secara otomatis.

### 3️⃣ Binding (Dynamic Attribute)

Vue juga digunakan untuk mengatur atribut secara dinamis menggunakan binding `:` seperti:

- `:src="'assets/' + cert.image"` → menampilkan gambar sertifikat  
- `:style="{ width: skill.level + '%', backgroundColor: skill.color }"` → mengatur lebar dan warna progress bar  

Binding ini memungkinkan tampilan menyesuaikan nilai data secara otomatis.

Vue JS berperan dalam menghubungkan data dengan tampilan (data binding) sehingga konten seperti nama, skill, dan sertifikat dapat ditampilkan secara dinamis. Hal ini membuat website lebih terstruktur, efisien, dan mudah dikembangkan.


