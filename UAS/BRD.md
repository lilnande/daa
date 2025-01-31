# Rancangan Kebutuhan Bisnis pada Platform Komunitas Olahraga Billiard





> Pendahuluan :

Biliar adalah olahraga yang membutuhkan keterampilan teknik, akurasi dan strategi tinggi. Dalam beberapa tahun terakhir, olahraga biliar semakin populer di berbagai kalangan, terutama dalam komunitas olahraga. Oleh karena itu, saya ingin membangun sebuah komunitas untuk meningkatkan prestasi atlet dan memperkenalkan lebih luas olahraga ini ke masyarakat sekitar.

Tujuan dari proyek ini adalah untuk membuat perancangan sebuah platform atau sistem yang dapat mendukung pengelolaan komunitas olahraga biliar, yang meliputi perekrutan pemain, pelatihan, turnamen, dan pengembangan keterampilan atlet, bahkan private lesson.

> Tujuan :

1. Membuat platform digital sederhana untuk memfasilitasi interaksi antar anggota komunitas biliar.
2. Merancang dashboard untuk pengelolaan data atlet, jadwal pelatihan, dan laporan keuangan.
3. Membantu pelatihan dan pembinaan atlet biliar dengan lebih efisien.
4. Menyediakan akses informasi terkait turnamen, jadwal pertandingan, dan hasil pertandingan.
5. Menyediakan ruang untuk komunitas berbagi pengetahuan, tips, dan pengalaman terkait biliar.
6. Memfasilitasi perekrutan dan seleksi bibit atlet biliar di berbagai usia dan tingkat keterampilan.
7. Menyediakan kelas privat untuk bibit atlet yg akan didampingi oleh pelatih profesional (Berbayar)

> Ruang Lingkup :

1. Komunitas dan Forum Diskusi:
   -Forum bagi anggota untuk berdiskusi tentang teknik, strategi, dan perkembangan dunia  biliar.
   -Platform untuk berbagi video atau artikel tentang latihan atau tips bermain.
2. Pendaftaran dan Rekrutmen Atlet:
   -Sistem untuk mendaftarkan atlet baru dan mengelola profil mereka.
   -Proses seleksi atlet untuk ikut pelatihan dan turnamen.
3. Pelatihan dan Pembinaan Atlet:
   -Fitur untuk merancang porsi latihan harian, mingguan, dan bulanan.
   -Modul untuk melacak perkembangan keterampilan atlet.
4. Turnamen dan Jadwal Pertandingan:
   -Fitur untuk mengatur dan mengelola jadwal turnamen lokal, nasional, atau internasional.
   -Sistem pendaftaran untuk atlet yang ingin berpartisipasi dalam turnamen.
5. Pengukuran dan Penilaian Performa Atlet:
   -Sistem penilaian untuk mengukur kemajuan atlet berdasarkan hasil latihan dan pertandingan.
   -Fitur untuk mengklasifikasikan atlet dalam berbagai tingkat kemampuan.

> Pemangku Kepentingan :

1. Internal:

- Manajemen dan pelatih olahraga biliar. //nanti nya akan memiliki akses untuk melihat progress pemain
- Pengembang dan administrator sistem. // melakukan pengembangan pada sistem agar lebih baik
- Anggota komunitas (atlet, pelatih, dan penggemar biliar).
- Orang Tua (mengawasi perkembangan anak)

2. Eksternal:

- Pemerintah daerah dan pusat yang mendukung olahraga. //dukungan pemerintah juga bakal sangat penting
- Sponsor atau mitra yang tertarik dalam mendukung komunitas atau turnamen.
- Media yang akan mempublikasikan turnamen atau kegiatan komunitas.
- Pak dosen Jefry Sunupurwa sebagai alasan saya membuat rancangan platform ini.

> Fitur Utama :

1. Komunitas dan Forum Diskusi:
   - Forum berbasis kategori seperti teknik dasar, pertandingan, dan perkembangan terbaru.
   - Sistem pencarian dan filter untuk memudahkan anggota menemukan topik yang diinginkan.
2. Pendaftaran dan Rekrutmen Atlet:
   - Formulir pendaftaran atlet baru dengan data pribadi, pengalaman, dan pencapaian.
   - Sistem untuk melihat riwayat prestasi dan perkembangan keterampilan atlet.
3. Pelatihan dan Pembinaan:
   - Kalender latihan untuk masing-masing atlet dengan detil materi latihan.
   - Evaluasi secara manual oleh pelatih untuk setiap latihan yang dilakukan oleh atlet.
   - Modul pelatihan berbasis video atau tutorial.
4. Turnamen dan Jadwal Pertandingan:
   - Sistem kalender untuk melihat jadwal pertandingan dan turnamen mendatang. //bgi atlet yg telah memenuhi porsi latihan
   - Pengingat otomatis untuk atlet yang terdaftar di turnamen. // Notifikasi pada homepage
   - Statistik dan hasil pertandingan yang dapat diakses oleh anggota komunitas.
5. Pengukuran dan Penilaian Atlet:
   - Sistem penilaian secara manual oleh pelatih berdasarkan kriteria seperti teknik, strategi, dan mental.
   - Fitur untuk mengkalkulasikan perkembangan atlet dari waktu ke waktu.
6. Media Sosial dan Promosi:
   - Fasilitas untuk membagikan prestasi, video latihan, dan informasi lainnya melalui media sosial. //untuk menarik minat
   - Halaman untuk mempromosikan kegiatan komunitas dan turnamen biliar. //membuat webpage khusus untuk mempromosikan Komunitas

> Teknis Implementasi :

- Platform: Sistem ini nantinya akan berbasis web yg dapat diakses oleh anggota komunitas.
- Framework: Laravel untuk pengembangan backend dengan Filament sebagai antarmuka pengguna (UI).
- Deployment: Docker untuk kontainerisasi dan penyebaran sistem yang konsisten.

> Risiko :

1. Partisipasi Komunitas:
   - Komunitas mungkin kesulitan untuk berkembang pada tahap awal.
   - Mitigasi: Promosi yang intensif dan ajakan langsung kepada atlet dan penggemar biliar.
2. Keterbatasan Fasilitas Latihan:
   - Tidak semua anggota memiliki akses ke fasilitas latihan yang memadai. //solusi sederhana yaitu mengadakan Training Session secara rutin menggunakan uang kas Komunitas untuk menyewa tempat meja billiard, atau menggunakan jasa Vendor/Sponsor. contoh : Onyx Billiar.
   - Mitigasi: Menyediakan tutorial video atau simulasi latihan di platform.
3. Keamanan Data:
   - Potensi kebocoran data pribadi anggota.
   - Mitigasi: Enkripsi data dan sistem otentikasi yang kuat.

> Metode Analisis (5W1H)

1. What (Apa)

- Apa yang ingin dicapai? Membangun sistem manajemen pelatihan atlet biliar berbasis teknologi untuk meningkatkan efektivitas operasional.
- Apa masalah utama? Pengelolaan data atlet, kehadiran, jadwal, evaluasi, dan laporan keuangan masih dilakukan secara manual dan tidak terintegrasi.

2. Why (Mengapa)

- Mengapa sistem ini diperlukan? Untuk meningkatkan efisiensi dalam pengelolaan pelatihan, transparansi dalam laporan keuangan, dan pemantauan kemajuan atlet.
- Mengapa menggunakan Laravel, Docker, dan MySQL? ***Laravel***: Memudahkan pengembangan aplikasi web dengan fitur-fitur yang built-in. ***Docker :*** Menyediakan lingkungan yang konsisten dan mudah di-deploy.
- ***MySQL***: Menyediakan database yang terstruktur untuk manajemen data atlet.

3. Who (Siapa)

- Siapa yang terlibat?
  - Manajemen Pelatihan: Mengelola data atlet, instruktur, jadwal pelatihan, dan keuangan.
  - Pelatih: Memantau kehadiran, perkembangan, dan memberikan evaluasi terhadap atlet.
    Atlet: Mengikuti pelatihan dan melihat hasil evaluasi mereka.
  - Orang Tua: Memantau perkembangan atlet, terutama bagi atlet yang masih muda.

4. When (Kapan)

- Kapan sistem diimplementasikan? Setelah 6 bulan pengembangan dan pengujian.
  -Kapan evaluasi dilakukan? Setiap akhir sesi pelatihan dan dalam laporan bulanan.

5. Where (Di Mana)

- Di mana sistem digunakan? Di pusat pelatihan biliar dan dapat diakses secara daring melalui web.
- Di mana data disimpan? Data disimpan di server cloud menggunakan MySQL sebagai basis data.

6. How (Bagaimana)

- Bagaimana sistem dibangun? Laravel untuk frontend dan backend, Docker untuk containerisasi, MySQL untuk basis data.
- Bagaimana cara kerja sistem?
  - Atlet mendaftar melalui sistem.
  - Admin mengatur jadwal pelatihan dan instruktur.
  - Pelatih mencatat kehadiran dan perkembangan atlet.
  - Sistem menghasilkan laporan keuangan dan evaluasi atlet.

> Perancangan Sistem

1. Entity Relationship Diagram (ERD)
   Entitas utama:

- Atlet (ID_Atlet, Nama, Kontak, Program_Pelatihan)
- Pelatih (ID_Pelatihan, Nama, Keahlian)
- Pelatihan (ID_Pelatihan, Nama_Pelatihan, Jadwal, ID_Instruktur)
- Kehadiran (ID_Kehadiran, ID_Atlet, ID_Pelatihan, Status)
- Evaluasi (ID_Evaluasi, ID_Atlet, Nilai, Feedback)
- Keuangan (ID_Keuangan, ID_Atlet, Jumlah, Status_Pembayaran)

2. Flowchart Sistem

- Pendaftaran Atlet → Input Data → Verifikasi → Database.
- Penjadwalan Pelatihan → Input Jadwal → Notifikasi Atlet → Pelaksanaan.
- Pemantauan Kehadiran → Input Kehadiran → Update Data.
- Evaluasi → Input Hasil Tes → Generate Laporan → Feedback.
- Pelaporan Keuangan → Input Pembayaran → Generate Laporan. (Uang Kas)
