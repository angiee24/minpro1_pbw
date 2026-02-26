# Angela Caroline Budiman (2409116008) Sistem Informasi A'2024

# Portfolio Website 

Website portofolio pribadi berbasis HTML, CSS, Bootstrap 5, dan Vue JS.  
Project ini dibuat sebagai tugas Mini Project PBW.

# Deskripsi Singkat
Website ini merupakan website portofolio pribadi milik Angie yang dibuat menggunakan HTML, CSS, Bootstrap 5, dan Vue JS. Website ini menampilkan informasi profil, deskripsi diri, keterampilan dalam bentuk progress bar, serta daftar sertifikat dalam layout grid yang responsif. Tampilan dirancang sederhana, modern, dan dapat menyesuaikan berbagai ukuran layar sehingga nyaman diakses melalui desktop maupun perangkat mobile.

## 📂 Struktur Project

<img width="247" height="318" alt="image" src="https://github.com/user-attachments/assets/feb2e1b8-e020-4f90-b39f-debc6fc11cfa" />

Struktur folder MINPRO_PBW terdiri dari file utama index.html dan style.css, serta satu folder pendukung bernama assets. File index.html berfungsi sebagai halaman utama website yang berisi struktur dan isi tampilan, sedangkan style.css digunakan untuk mengatur desain dan tampilan visual seperti warna, layout, dan responsive. Folder assets digunakan untuk menyimpan seluruh gambar yang dipakai di website, seperti foto profil dan gambar sertifikat. Struktur ini sudah rapi dan sesuai standar website statis sederhana.

# Tampilan Website

## 1️⃣ Home Section

<img width="1919" height="968" alt="image" src="https://github.com/user-attachments/assets/135285d9-5bf4-47ae-b909-3dd142b7b64e" />

### Penjelasan:
Section ini merupakan Hero Section yang berisi:
- Nama dan profesi
- Deskripsi singkat
- Button Contact & Download CV
- List skill (HTML, CSS, Bootstrap, Vue, JavaScript)
- Foto profil

### Penjelasan Code:
- Menggunakan Bootstrap Grid (`row`, `col-lg-6`)
- Vue JS interpolation `{{ name }}` dan `{{ role }}`
- `v-for` digunakan untuk menampilkan tag skill
- Styling tambahan dari `style.css`
  
Hero Section merupakan bagian utama yang pertama kali ditampilkan saat website dibuka. Section ini berfungsi sebagai perkenalan singkat mengenai pemilik website, menampilkan identitas, bidang yang ditekuni, serta elemen visual berupa foto profil. Tombol Contact dan Download CV ditambahkan untuk memberikan kesan interaktif, sedangkan daftar skill ditampilkan untuk menunjukkan kemampuan yang dimiliki.


## 2️⃣ About Me Section

<img width="1919" height="452" alt="image" src="https://github.com/user-attachments/assets/4b41497d-b204-4535-83bc-c25730e645ad" />

### Penjelasan:
Section ini berisi:
- Deskripsi lengkap tentang diri
- Skills dengan progress bar
### Penjelasan Code:
- Bootstrap Grid System untuk layout 2 kolom
- Vue JS `v-for` untuk menampilkan skills
- Progress bar menggunakan komponen Bootstrap
- Styling tambahan pada `.skill-card`

Section About Me berfungsi untuk memberikan informasi lebih detail mengenai latar belakang dan minat pemilik website. Pada bagian ini ditampilkan deskripsi diri secara lengkap untuk memperkenalkan profil secara lebih mendalam. Selain itu, terdapat daftar skills yang divisualisasikan dalam bentuk progress bar agar tingkat kemampuan dapat ditampilkan secara lebih menarik dan informatif.

## 3️⃣ Certificates Section

<img width="1919" height="845" alt="image" src="https://github.com/user-attachments/assets/61fd6859-6810-4fd8-9995-4caf41d39003" />

### Penjelasan:
Section ini menampilkan:
- Daftar sertifikat dalam bentuk card
- Gambar sertifikat
- Judul dan penerbit sertifikat
### Penjelasan Code:
- Bootstrap Grid (`col-md-6 col-lg-4`)
- Vue JS `v-for` untuk looping data certificates
- Card Bootstrap untuk layout
- Custom styling `.certificate-card` dan `.cert-img`

Section Certificates bertujuan untuk menampilkan pencapaian dan sertifikasi yang telah diperoleh. Setiap sertifikat ditampilkan dalam bentuk card agar tersusun rapi dan mudah dibaca. Informasi yang ditampilkan meliputi gambar sertifikat, judul pelatihan atau kegiatan, serta instansi penerbit. Layout grid digunakan agar tampilan tetap terstruktur dan responsif di berbagai ukuran layar.

## 4️⃣ Footer

<img width="1919" height="128" alt="image" src="https://github.com/user-attachments/assets/00dfa066-e983-441f-817e-d025e0045d97" />

Footer berisi copyright dan teknologi yang digunakan.

Penjelasan Code:
- Menggunakan elemen <footer> HTML
- Bootstrap utility class (py-5, mt-5, border-top, text-center, text-muted)
- Vue JS interpolation {{ name }}

Secara teknis, footer dibuat menggunakan elemen semantik <footer> pada HTML untuk menunjukkan bahwa bagian tersebut merupakan penutup halaman. Tampilan dan jarak diatur menggunakan utility class dari Bootstrap seperti py-5 untuk padding, mt-5 untuk margin atas, serta text-center untuk perataan teks. Nama ditampilkan secara dinamis menggunakan Vue JS interpolation {{ name }} sehingga data dapat terhubung langsung dengan Vue instance.

# Platform dan Tools yang Digunakan
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


