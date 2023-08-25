-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tsanyazzura
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aspirasi`
--

DROP TABLE IF EXISTS `aspirasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspirasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_prodi` bigint(20) unsigned NOT NULL,
  `jenis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `lingkup_aspirasi` varchar(255) NOT NULL,
  `sasaran_aspirasi` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balasan` text DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspirasi`
--

LOCK TABLES `aspirasi` WRITE;
/*!40000 ALTER TABLE `aspirasi` DISABLE KEYS */;
INSERT INTO `aspirasi` VALUES (8,1,0,'Cici Anike','215030100111092','cicistari12@gmail.com','2021','0','8','Parkiran sempit',NULL,'2023-06-05 02:11:40','2023-06-05 08:20:27','Halo Mafia ! Terima kasih atas aspirasinya, Parkiran sempit juga menjadi isu prioritas di fakultas kita, sehingga memerlukan percepatan akan hal pembangunan pelebaran parkiran.','Administrasi Publik'),(9,1,0,'Muhammad Alfi Salsabil','215030207111050','muhalfisalsabil@student.ub.ac.id','2021','1','6','Kepada yth. bapak/ibu panitia MMD 2023, akomodasi 2 juta untuk 6 minggu itu sangatlah kecil. Ditambah kami para mahasiswa tidak diperbolehkan membawa KENDARAAN PRIBADI. Jikalau ada hal yang DARURAT terjadi mau meminta bantuan kepada siapa?',NULL,'2023-06-07 00:29:42','2023-06-07 00:29:42',NULL,'FIA'),(10,1,0,'Figo Rama Dewangga','215030100111021','figodewangga@student.ub.ac.id','2021','10','6','Mohon diperbolehkan membawa kendaraan pribadi hehe, agar menunjang kemudahan menjalankan proker juga.',NULL,'2023-06-07 00:30:27','2023-06-07 00:30:27',NULL,'FIA'),(12,1,0,'Muhammad Syahrul Affandi','215030900111003','sahrulaffandi54@student.ub.ac.id','2021','10','6','Kami hanya ingin agar dana bantuan ditambah karena dengan 2 juta kita disuruh untuk mensukseskan program UB ya tidak bisa dan juga untuk aturan2 yang dinilai cukup memberatkan saya ingin agar diambil jalan tengah',NULL,'2023-06-07 00:37:33','2023-06-07 00:37:33',NULL,'FIA'),(13,1,0,'Azka Zahirah Putri','215030400111085','azka.zahirah@student.ub.ac.id','2021','10','6','Mohon dikaji ulang mengenai kejelasan program. Alasan tidak boleh membawa kendaraan. Minimnya dana yang diberikan. Apabila tidak bisa menambah dana maka bisa dipertimbangkan untuk durasi waktu dipersingkat menjadi hanya 3 minggu.',NULL,'2023-06-07 00:39:37','2023-06-07 00:39:37',NULL,'FIA'),(14,1,0,'Salsabila Azizah','215030207111130','salsabilabel20@student.ub.ac.id','2021','10','6','saya keberatan dengan kebijakan \"TIDAK DIPERBOLEHKAN MEMBAWA KENDARAAN PRIBADI (MOTOR) KE LOKASI\" dimana hal itu akan menyulitkan kami untuk mobilisasi dari tempat satu ke tempat lain, dan jika rental kendaraan akan memakan dana yang lebih besar.',NULL,'2023-06-07 00:40:23','2023-06-07 00:40:23',NULL,'FIA'),(15,1,0,'Dellia SPA','215030100111092','dellia.spa23@gmail.con','2021','1','4','Mohon ditinjau ulang terkait besaran pendanaan untuk kegiatan MMD. Mengingat biaya yang harus ditanggung terkait tempat tinggal dan konsumsi juga relatif besar dan akan memberatkan beberapa pihak tentunya.',NULL,'2023-06-07 00:40:39','2023-06-07 00:40:39',NULL,'FIA'),(16,1,0,'Iman','NIM','email@email.com','2022','0','0','Pesan',NULL,'2023-06-07 00:58:01','2023-06-07 00:58:01',NULL,'TI'),(17,1,0,'Wiwiwk Tester','0857','wk@gmail.com','2023','0','0','Pesan',NULL,'2023-06-07 00:59:23','2023-06-07 00:59:23',NULL,'Sistem Informasi'),(18,1,0,'Hehshsb','272771','tsanyazzura@icloud.com','Jahshsh','10','6','Bsnsbs',NULL,'2023-06-07 01:00:01','2023-06-07 01:00:01',NULL,'Hahsbsb'),(19,1,0,'Nama','456','email@gmail.com','2022','0','0','Pesan',NULL,'2023-06-07 01:04:10','2023-06-07 01:04:10',NULL,'Prodi'),(20,1,0,'Zzzz aaaaaa','123456','ccxx@gmail.com','2018','2','4','KTM nya beda sama yang lain. Yg angkatan 2021 tipis gada brizzinya lagi. Sungguh mengecewakan',NULL,'2023-06-07 01:07:11','2023-06-07 01:07:11',NULL,'Fia'),(21,1,0,'Xxxxz gggg','12345','bbbb@gmail.com','2021','2','9','Sekarang jalannya terlalu banyak polisi tidur. Kalaupun ada juga gapapa tapi kalau malam bikin was was karena sekitar polisi tidur tidak ada penerangan. Sehingga ditakutkan dapat membuat terjatuh pengendara motor',NULL,'2023-06-07 01:09:46','2023-06-07 01:09:46',NULL,'Fia'),(22,1,0,'Devi Permatasari','576888','devipermatasari@gmail.com','2030','1','2','Melihat dari kejadian yang ada alangkah baiknya untuk program MMD dipikirkan dengan demikian . Banyak hal yang harus diperhatikan dalam melaksanakan program tersebut terutama dari kondisi biaya yang diberikan pihak kampus kepada setiap kelompok MMD yang ada ,  Secara logika tidak semua orang mampu mengikuti kegitan ini dengan baik karena apa setiap orang memiliki kondisi ekonomi yang berbeda-beda apalagi untuk hal nya mengeluarkan biaya yang cukup banyak nantinya dalam kegiatan tersebut. Kalo untuk mencari nama diluaran saja untuk apa? Lebih baik melakukan kebaikan yang lebih bermanfaat buat pihak eksternal maupun internal jangan halnya memikirkan pihak eksternal saja.',NULL,'2023-06-07 01:10:44','2023-06-07 01:10:44',NULL,'Fia'),(23,1,0,'Refinda Ayu Nur Azizah','215030401111003','refindaazizah@student.ub.ac.id','2021','10','6','Menurut saya pribadi jujur saja saya lebih memilih untuk mengikuti magang daripada harus mengikuti program ini, mengapa saya tidak mengundurkan diri saja? Jujur saja jika program ini tidak wajib dan tidak berpengaruh kepada nilai saya maka saya tidak akan mengikutinya dan saya lebih memilih untuk magang saja, mengundurkan diri bukan jadi solusi jika tahun depan tetap saja harus begini lagi. Setidaknya untuk program ini mohon penyediaan sarana dan prasaranannya lebih diperhatikan kembali karena jika diperhatikan sekarang ini sarana dan prasarana yang diberikan sangat kurang dan panitia hanya membuat pengunduran diri sebagai solusi.',NULL,'2023-06-07 01:11:14','2023-06-07 01:11:14',NULL,'FIA'),(24,1,0,'Esti Ika wijayanti','855788','estiikawijayanti06@gmail.com','2021','1','2','Mohon dipertimbangkan kembali terkait aturan tentang larangan membawa kendaraan pribadi karena kendaraan merupakan hal yang sangat dibutuhkan dalam kegiatan sehari-hari untuk ruang gerak mahasiswa dalam beraktivitas. Karena menyewa kendaraan juga akan menambah beban biaya kepada mahasiswa karena kami sudah terbebani untuk dana sewa tempat tinggal dan makan sehari-hari.',NULL,'2023-06-07 01:11:31','2023-06-07 01:11:31',NULL,'Fia'),(25,1,0,'Andrean Nathaniel','215030400111082','andrean03@student.ub.ac.id','2021','10','6','Kegiatan MMD ini menurut saya sangat memberatkan mahasiswa baik dari segi waktu tenaga dan biaya. Dari segi waktu tentu mahasiswa yang mayoritas semester 4 dan 6 sebagai peserta menjadi kekurangan waktu untuk belajar dan berorganisasi, karena harus membagi fokus dengan MMD yang cukup banyak juga tugas dan kegiatannya. Kedua, dengan adanya MMD cukup merepotkan kegiatan Ormawa, dimana setiap lembaga seakan akan pincang akibat pengurus nya harus melaksanakan mmd sementara proker Ormawa masih tetap harus berjalan. Selain itu dari segi biaya juga pasti mahasiswa mengeluarkan dana baik untuk tinggal dan berkehidupan apalagi dana yang diberikan universitas hanya sebesar 2 juta untuk satu kelompok tentu itu sangat jauh dari kata cukup untuk menjalani kegiatan MMD yang waktunya selama satu bulan. Menurut saya MMD ini seharusnya dijadikan opsional saja bukan disamakan dengan 4 SKS, karena kembali lagi mahasiswa pun memiliki waktu dan finansial yang terbatas.',NULL,'2023-06-07 01:11:45','2023-06-07 01:11:45',NULL,'FIA'),(26,1,0,'Herwindra niken','628823y','herwindraniken@gmail.com','2021','1','2','Program MMD terkesan mendadak karena baru ramai diperbincangkan akhir tahun 2022. Selain itu tugas dan proker yg diharapkan selama program MMD terlalu ribet dan banyak tuntutan. Budget per kelompok jg kurang jika hanya 2 juta apalagi tidak semua mahasiswa memiliki kondisi yg mampu secara finansial. Kegiatan survey desa sebelum MMD jg tidak dijelaskan mekanismenya seperti apa, sehingga membuat bingung mahasiswa yg mendapat desa sangat jauh dari Malang seperti Banyuwangi dan Madura. Belum lagi uang transport yg dikeluarkan secara mandiri dan apakah akses transportasi yg mudah menuju ke desa tersebut.',NULL,'2023-06-07 01:12:26','2023-06-07 01:12:26',NULL,'Adpub'),(27,1,0,'Jabir Najibulloh Krisnanto','215030807111033','abilkrisna2@student.ub.ac.id','2021','10','6','sebenernya kurang setuju dengan adanya mmd ini karena sempat membaca berita bahwa kkn di tiadakan tetapi ini istilahnya namanya saja yang di ubah menjadi mmd, dan jika di gabung semua fakultas di ub kurang bisa fokus sebaiknya digabung per fakultas saja agar dapat lebih mengerucut lagi dan satu tujuan pemikiran terima kasih.',NULL,'2023-06-07 01:13:05','2023-06-07 01:13:05',NULL,'FIA'),(28,1,0,'Sherly Novita','568773828','sherlynoo@gmail.com','2020','1','2','\"Assalamu\'alaikum Wr.Wb. Selamat pagi dan salam hormat kepada Bapak/Ibu Dosen/Panitia KKN MMD UB serta jajarannya. \r\n\r\nSebelumnya terima kasih kepada Bapak/Ibu Dosen/Panitia KKN MMD UB/Mahasiswa yang sedang membaca pesan ini. Kemudian terima kasih juga kepada perwakilan mahasiswa/i yang telah memberikan ruang bagi mahasiswa lainnya untuk menyampaikan aspirasinya, semoga aspirasi kami tidak hanya didengar namun juga menghasilkan tanggapan yang setidaknya dapat memberikan kepuasan dan keadilan bagi kami yang telah menyampaikan aspirasinya. \r\n\r\nSebelumnya saya ingin menyampaikan bahwa POIN KOMENTAR SAYA UNTUK KKN MMD BUKAN TERFOKUS PADA PERMASALAHAN DANA. Namun poin permasalahan saya disini terfokus pada syarat yang mewajibkan kami untuk ikut serta dalam kegiatan MMD dimana kami diberikan opsi untuk mengundurkan diri namun syarat-syarat pengunduran diri yang disampaikan pada pembekalan-1 bersifat mengikat kami untuk ikut dalam program KKN MMD. Ditambah lagi, kami sebagai mahasiswa semester 6 yang baru saja diizinkan oleh kebijakan fakultas untuk mengikuti program KKN apabila telah menyelesaikan perkuliahan semester 6. Hal ini tentu sangat berat bagi kami, karena sebagai mahasiswa yang tergolong mahasiswa akhir kami diwajibkan untuk mengikuti program KKN yang pelaksanaannya tidak hanya 1 bulan namun sampai ±1,5 bulan. Ditambah lagi dengan timelime MMD yang cukup panjang. Dalam konteks kegiatannya sudah dimulai sejak saat ini, dimana dipertengahan kesibukan kuliah kami harus menyusun proposal karena dalam buku pedoman MMD UB tertulis bahwa \"\"Pelaksanaan ujian proposal maksimal 1 bulan sebelum keberangkatan\"\". Dimana tanggal keberangkatan MMD adalah 26 Juni sedangkan pada bulan Juni tersebut kami ada kegiatan UAS yang dimulai sejak 12 - 23 Juni. Tak hanya itu, pelaksanaan kegiatan MMD yang dimulai sejak saat ini pun sudah cukup menganggu perkuliahan karena ditengah pelaksanaan UTS kami harus mengikuti pembekalan yang durasinya cukup lama, tugas-tugasnya yang deadlinennya sangat cepat, penentuan tema yang belum diketahui secara pasti kapan deadlinenya tapi sudah harus mulai menentukan tema dari sekarang ketika kami sedang melaksanakan UTS dan belum mengetahui potensi desanya karena tidak semua desa ter-ekspos di internet. LALU KAPAN KAMI DAPAT MEMPERSIAPKAN PROPOSAL DAN PROGRAM KERJA KAMI DENGAN MATANG? Kemudian timelime MMD ini juga cukup panjang karena kegiatannya berlangsung sampai bulan September dimana bulan September itu ada ujian akhir mahasiswa KKN dan seminar internasional. \r\n\r\n?BAGAIMANA NASIB KAMI SEBAGAI MAHASISWA SEMESTER 6?\r\n1. Disaat mahasiswa semester 6 lainnya telah mulai menyusun sempro atau melaksanakan magang mandiri/merdeka ketika semester 6, kami belum dapat kesempatan untuk melakukan hal itu karena adanya KKN MMD ini.\r\n--> Bukankah saat ini lulus tepat waktu merupakan urgensi bagi fakultas/kampus? karena mendapat penilaian dari AQAS bahwa UB perlu mempercepat kelulusan mahasiswanya.\r\n--> Bukankah saat ini pengalaman kerja yang diperoleh melalui magang merupakan urgensi bagi mahasiswa agar dapat memperoleh pekerjaan yang layak dalam waktu yang relatif cepat?. Padahal apabila magang merupakan suatu program yang wajib seperti hal nya MMD, maka magang memiliki nilai yang esensial dibanding KKN MMD. Karena pengalaman kerja dan softskill serta pengetahuan sesuai bidangnya masing masing juga dapat menjadikan UB sebagai kampus yang terkenal karena lulusannya berkualitas (misal: lulus tepat waktu, prospek kerja lulusan menjanjikan, lulusan diterima di big company) bukan hanya terkenal karena besarnya kuantitas.\r\n\r\nSolusi\r\n---------\r\nSebagai mahasiswa semester 6, saya mohon izin menyampaikan solusi yang mungkin dapat menjadi pertimbangan untuk di implementasikan:\r\n1. Bagi mahasiswa yang belum mengikuti Program Pengabdian Masyarakat (PKM/KKN) dapat tetap mengikuti program KKN MMD namun durasinya mohon lebih dipersingkat (<1 bulan) seperti halnya durasi KKN Fakultas sebelumnya. \r\n2. Dengan adanya percepatan durasi KKN, pelaksanaan kegiatan-kegiatan seperti ujian akhir KKN dan seminar internasional dapat lebih dipercepat, yaitu sebelum perkuliahan semester ganjil dimulai. Sehingga mahasiswa yang ingin mengikuti program kampus merdeka, perkuliahan semester ganjil serta penyusunan sempro tidak terganggu dengan kegiatan atau urusan-urusan yang berkaitan dengan KKN MMD.\r\n\r\nSekian tanggapan dan aspirasi dari saya, mohon maaf apabila terdapat kata/kalimat yang kurang berkenan. Semoga kami dapat mendapatkan tanggapan yang solutif bagi seluruh mahasiswa atas permasalahan ini. Terima kasih kepada semua pihak atau panitia yang terlibat dalam proses penyampaian aspirasi. Salam sehat dan salam sukses.\"',NULL,'2023-06-07 01:13:35','2023-06-07 01:13:35',NULL,'Fia'),(29,1,0,'Albertus Christian Himawan','215030200111134','albertushimawan@student.ub.ac.id','2021','10','6','Saya sangat keberatan dengan dana hanya 2 juta Rupiah kemudian tuntutan untuk menjalankan proker pribadi yang dimana tentu dana 2 juta ini tidak akan cukup untuk menutupi baik proker pribadi maupun proker besar (kelompok). Saya juga menanyakan ke para kating yang pernah melakukan KKN sebelumnya dan memang mereka berpendapat bahwa dana 2 juta sangat jauh dari kata cukup, belum lagi mahasiswa harus membayar kebutuhan individu (tempat tinggal, makan, dsb.) Berdasarkan informasi para kating saya, mereka rata-rata mengeluarkan uang pribadi sebesar 700 ribu - 1 juta Rupiah untuk kebutuhan pribadi dan proker tambahan karena desa tujuan mereka meminta sesuatu di luar proker yang dijalankan. Hal ini tentu memberatkan baik bagi mahasiswa dan orang tua karena tidak semua orang tua mahasiswa tentu berkecukupan untuk membantu keuangan anaknya, ditambah lagi tuntutan untuk MMD yang akan mengeluarkan biaya sangat besar. Maksud Universitas sangat baik karena ingin menyejahterakan desa, akan tetapi tidak diimbangi dengan dukungan kepada mahasiswanya sehingga terkesan para mahasiswa seperti budak bagi universitas untuk menjalankan kegiatan kampus itu sendiri. Seharusnya selama ini dengan UKT yang nominalnya jauh dari kata kecil, universitas mampu membiayai mahasiswa dengan modal lebih untuk melakukan MMD, bukannya diberi dana kecil dengan harapan mendapatkan pengakuan besar dari masyarakat.',NULL,'2023-06-07 01:13:59','2023-06-07 01:13:59',NULL,'FIA'),(30,1,0,'Desi Riscyana','6282726','desi@gmail.com','2020','1','6','Saya merasa program MMD terlalu memaksakan untuk mahasiswa. Saya merasa terberatkan secara finansial dan waktu karena program MMD berlangsung 6 minggu (belum termasuk seminar dan lainnya yang diperkirakan sampai akhir tahun atau terbilang semester 7) saya termasuk angkatan 2020 dimana di semester 6 ini seharusnya sudah fokus untuk menyiapkan segala hal berkaitan dengan penyusunan skripsi namun harus terbebani oleh program yang memaksakan ini. Seharusnya kampus juga memberikan solusi berupa opsi atau kegiatan lain sebagai pengganti kegiatan MMD. Kampus merdeka seharusnya dioptimalkan, mahasiswa dapat memilih pilihan mengikuti kegiatan MMD ini atau tidak sehingga tidak memberatkan mahasiswa.',NULL,'2023-06-07 01:15:07','2023-06-07 01:15:07',NULL,'Admnistrasi publik'),(31,1,0,'Citra Audriani','215030100111020','audrianic@student.ub.ac.id','2021','0','0','Kepada panitia penyelenggara MMD Universitas Brawijaya yang terhormat, saya disini akan menyampaikan sedikit aspirasi yang saya harapkan dapat didengar juga direspon dengan baik oleh pihak panitia. Dengan segala pembaharuan sistem KKN ini saya pribadi merasa pelaksanaan dari MMD ini sendiri terkesan mendadak dan buru-buru. Selain itu, saya berharap agar pihak panitia menimbang kembali waktu pelaksanaan MMD menjadi selayaknya KKN biasanya yaitu sekitar 3 minggu saja. Atau mengenai sistem tidak boleh menyelesaikan kegiatan MMD walaupun proker sudah selesai sebelum 6 minggu, agar timeline mengikuti  selesainya proker oleh kelompok masing masing desa saja, menurut saya sendiri hal tersebut tidak mengubah efektifitas atau efisiensi dan menurut saya sistem tersebut cukup adil. Untuk dana sekitar 2 juta saya berharap pihak MMD tidak memberatkan mahasiswa dengan pengadaan proker individu+kelompok yang begitu banyak karena menurut saya pribadi pelaksanaan MMD ini seharusnya bersifat VOLUNTEER bukan terpaku pada kuantitas dengan pencapaian sempurna pada hasil. Saya pribadi merasa jika panitia memang menginginkan pelaksanaan proker yang begitu banyaknya, hendaknya untuk dana mohon ditambahkan juga. Terakhir semoga panitia juga memberikan dana kepada kelompok yang harus survei ke desa luar Malang yang tentunya membutuhkan dana transportasi, terima kasih:)',NULL,'2023-06-07 01:15:17','2023-06-07 01:15:17',NULL,'FIA'),(32,1,0,'Citra Audriani','215030100111020','audrianic@student.ub.ac.id','2021','10','6','Kepada panitia penyelenggara MMD Universitas Brawijaya yang terhormat, saya disini akan menyampaikan sedikit aspirasi yang saya harapkan dapat didengar juga direspon dengan baik oleh pihak panitia. Dengan segala pembaharuan sistem KKN ini saya pribadi merasa pelaksanaan dari MMD ini sendiri terkesan mendadak dan buru-buru. Selain itu, saya berharap agar pihak panitia menimbang kembali waktu pelaksanaan MMD menjadi selayaknya KKN biasanya yaitu sekitar 3 minggu saja. Atau mengenai sistem tidak boleh menyelesaikan kegiatan MMD walaupun proker sudah selesai sebelum 6 minggu, agar timeline mengikuti  selesainya proker oleh kelompok masing masing desa saja, menurut saya sendiri hal tersebut tidak mengubah efektifitas atau efisiensi dan menurut saya sistem tersebut cukup adil. Untuk dana sekitar 2 juta saya berharap pihak MMD tidak memberatkan mahasiswa dengan pengadaan proker individu+kelompok yang begitu banyak karena menurut saya pribadi pelaksanaan MMD ini seharusnya bersifat VOLUNTEER bukan terpaku pada kuantitas dengan pencapaian sempurna pada hasil. Saya pribadi merasa jika panitia memang menginginkan pelaksanaan proker yang begitu banyaknya, hendaknya untuk dana mohon ditambahkan juga. Terakhir semoga panitia juga memberikan dana kepada kelompok yang harus survei ke desa luar Malang yang tentunya membutuhkan dana transportasi, terima kasih:)',NULL,'2023-06-07 01:16:07','2023-06-07 01:16:07',NULL,'FIA'),(33,1,0,'Niko Dwi Prayogi','6288236','nikodwip@gmail.com','2020','1','6','Mungkin kebijakan tentang kendaraan yang tidak boleh dibawa bisa di hapus dikarenakan didesa kamipun butuh tranportasi pak bu',NULL,'2023-06-07 01:16:24','2023-06-07 01:16:24',NULL,'FIA'),(34,1,0,'Alma dhea','57272727','alma@gmail.com','2021','1','6','Kepada panitia penyelenggara MMD yang terhormat, izinkan saya memberikan aspirasi saya terhadap program MMD tahun ini. Dari yang kita lihat, banyak sekali mahasiswa mahasiswi yang menyuarakan protes terhadap program MMD karena beberapa faktor. Faktor pertama terkait pendanaan yang diberikan sebesar 2 juta rupiah. Menurut saya sendiri, nominal 2 juta sudah terbilang besar tetapi, jika dipergunakan untuk program kerja yang lebih dari satu maka nominal tersebut akan terbilang kecil. Apalagi setiap kelompok beranggotakan 14 orang, bagaimana jika setiap orang diminta untuk membuat proker masing masing? apakah dana itu akan cukup? belum lagi dengan makanan dan tempat tinggal yang diminta memakai dana sendiri. Apakah setiap orang sanggup untuk mengeluarkan dana lebih jika dana yang diberikan universitas tidak menutup? Faktor kedua yaitu perihal kendaraan. Kami semua paham, panitia penyelenggara ingin menjaga keselamatan kami tetapi, ada solusi lain yang bisa dipakai agar kami tetap memiliki kendaraan tanpa mengeluarkan dana lagi dan tetap selamat sampai desa yang kami tuju. Para mahasiswa bisa mengirim kendaraan yang akan mereka pakai di desa nanti tanpa harus mengendarainya sendiri. Faktor ketiga yaitu perihal tidak diperbolehkannya menyelesaikan MMD walaupun proker yang dilaksanakan sudah selesai kurang dari 6 minggu. Menurut saya, hal tersebut tidak akan merubah efektivitas dan efisiensi program MMD. Saya berharap agar panitia penyelenggara membaca aspirasi kami semua dan memikirkan kembali terkait dengan sistem MMD 1000 desa ini. MMD seharusnya bersifat volunteer, bukan hanya memikirkan kuantitas dengan pencapaian sempurna pada hasil. Terimakasih.',NULL,'2023-06-07 01:17:21','2023-06-07 01:17:21',NULL,'Publik'),(35,1,0,'Khofifatun nabila','53828289','khofi@gmail.com','2021','1','6','tolong pak kalau memang dana mepet jangan dituntut buat bikin output yang aneh aneh, kita semua ga memiliki kemampuan finansial yang sama. biaya hidup disana pasti juga besar, apalagi kita tidak diperbolehkan membawa kendaraan. jika memang dana 2jt ya sudah semua langsung dibagi rata 2jt jangan max 2jt, jadi pupus harapan kami pak. bukannya mmd ini harusnya memberi manfaat mahasiswa ya pak bukan untuk memeras mahasiswa ? terima kasih',NULL,'2023-06-07 01:18:20','2023-06-07 01:18:20',NULL,'FIA'),(36,1,0,'kadek','215030107111010','rayhantsany02@gmail.com','2021','0','3','Jas almamater lama didistribusikan bagi angkatan 2021 yang belum sempat mendapatkan harus menunggu bebarengan dengan 2022',NULL,'2023-06-11 01:17:34','2023-06-11 01:17:34',NULL,'FIA'),(37,1,0,'Refinda Ayu Nur Azizah','215030107111006','rayhantsany02@gmail.com','2021','0','3','kualitas jas almamater semakin lama semakin menurun',NULL,'2023-06-11 01:18:14','2023-06-11 01:18:14',NULL,'FIA'),(38,1,0,'Andrean Nathaniel','21312321','rayhantsany02@gmail.com','2021','0','3','KTM nya kok lama banget dibagikan bagi angkatan 2021 harus nunggu 4 semester dulu',NULL,'2023-06-11 01:19:02','2023-06-11 01:19:02',NULL,'FIA'),(39,1,0,'ojak jaka nisa','21312321','rayhantsany02@gmail.com','2021','0','3','udah dapat KTM tapi ga ada e-money kaya fakultas sebelah, kualitas semakin menurun',NULL,'2023-06-11 01:20:02','2023-06-11 01:20:02',NULL,'FIA'),(40,1,0,'Andrean Nathaniel','213213','rayhantsany02@gmail.com','2021','0','8','KTM cuman buat identitas aja, saran:  dikasihe-money agar lebih berfungsi, jadi iri ke fakultas lainya',NULL,'2023-06-11 01:21:19','2023-06-11 01:21:19',NULL,'FIA'),(41,1,0,'Refinda Ayu Nur Azizah','215030400111072','rayhantsany02@gmail.com','2022','0','3','angkatan 2022 belum mendapatkan almet sampai bulan april',NULL,'2023-06-11 01:22:19','2023-06-11 01:22:19',NULL,'FIA'),(42,1,0,'muhamad raihan hana','21312321','rayhantsany02@gmail.com','2022','0','0','almamater 2022 kualitas turun, dari plastik, sablon,',NULL,'2023-06-11 01:23:11','2023-06-11 01:23:11',NULL,'FIA'),(43,1,0,'hana hini hono','21312321','rayhantsany02@gmail.com','2022','0','3','jatah ukuran almamater saya \'M\' tapi waktu saya ambil sudah habis ukuran nya',NULL,'2023-06-11 01:24:02','2023-06-11 01:24:02',NULL,'FIA'),(44,1,0,'rayhan tsany','21312321','rayhantsany02@gmail.com','2022','0','3','almet ukuran M habiss',NULL,'2023-06-11 01:24:24','2023-06-11 01:24:24',NULL,'FIA'),(45,1,0,'Andrean Nathaniel','21312321','rayhantsany02@gmail.com','2022','0','0','ATM di kantin CL dihilangkan',NULL,'2023-06-11 01:25:10','2023-06-11 01:25:10',NULL,'FIA'),(46,1,0,'Andrean Nathaniel','21312321','rayhantsany02@gmail.com','2021','0','3','KTM angkatan 2022 belum di bagikan sama sekali',NULL,'2023-06-11 01:25:33','2023-06-11 01:25:33',NULL,'FIA'),(47,1,0,'rizky kur','215030400111072','rayhantsany02@gmail.com','2020','0','8','permasalahan parkiran deadlock antara mahasiswa dan dekanat untuk permasalahan penambahan parkir',NULL,'2023-06-11 01:29:23','2023-06-11 01:29:23',NULL,'FIA'),(48,1,0,'dewan perwakilan mahasiswa fia','21312321','rayhantsany02@gmail.com','2021','0','8','regulasi tentang parkir melalui pertor diadakan',NULL,'2023-06-11 01:30:35','2023-06-11 01:30:35',NULL,'FIA'),(49,1,0,'DPM FIA UB','21312321','rayhantsany02@gmail.com','2021','2','8','efektivitas pengadaaan stiker parkir, tolong regulasi di pertegas',NULL,'2023-06-11 01:31:29','2023-06-11 01:31:29',NULL,'FIA'),(50,1,0,'DPM FIA UB','215030400111072','rayhantsany02@gmail.com','2021','2','8','regulasi stiker per fakultas diadakan',NULL,'2023-06-11 01:32:10','2023-06-11 01:32:10',NULL,'FIA'),(51,1,0,'BEM FIA UB','21312321','rayhantsany02@gmail.com','2020','0','6','regulasinya dan terapan Green Campus transportasi',NULL,'2023-06-11 01:33:07','2023-06-11 01:33:07',NULL,'fia'),(52,1,0,'BEM FIA UB','21312321','rayhantsany02@gmail.com','2020','0','6','kejelasan green campus tentang bebas asap rokok',NULL,'2023-06-11 01:33:45','2023-06-11 01:33:45',NULL,'FIA'),(53,1,0,'BEM FIA UB','21312321','rayhantsany02@gmail.com','2020','0','6','Green campus tentang saluran biopori',NULL,'2023-06-11 01:34:11','2023-06-11 01:34:11',NULL,'FIA'),(54,1,0,'BEM FIA UB','215030107111006','rayhantsany02@gmail.com','2020','2','6','pengadaan fasilitas air minum gratis di fakultas di upgrade kalau bisa di seluruh fakultas',NULL,'2023-06-11 01:34:50','2023-06-11 01:34:50',NULL,'FIA'),(55,1,0,'humanistik fia ub','21312321','rayhantsany02@gmail.com','2020','2','8','ALMET TIMELINE TIDAK JELAS\r\nKTM',NULL,'2023-06-11 01:35:35','2023-06-11 01:35:35',NULL,'FIA'),(56,1,0,'humanistik fia ub','21312321','rayhantsany02@gmail.com','2020','0','2','TIMELINE DAN SKEMA PMW TAHUN 2023 BAGAIMANA?',NULL,'2023-06-11 01:36:09','2023-06-11 01:36:09',NULL,'FIA'),(57,1,0,'humanistik fia ub','21312321','rayhantsany02@gmail.com','2020','2','9','PEMINJAMAN FASILITAS GEDUNG DI TINGKAT UNIVERSITAS KOK  BERBAYAR',NULL,'2023-06-11 01:37:02','2023-06-11 01:37:02',NULL,'FIA'),(58,1,0,'humanistik fia ub','21312321','rayhantsany02@gmail.com','2020','1','8','IKU FAKULTAS SISTEM NYA BAGAIMANA? MENURUT PERTOR APAKAH ADA IKU ORGANISASI?',NULL,'2023-06-11 01:37:39','2023-06-11 01:37:39',NULL,'FIA'),(59,1,0,'rayhan tsany','21312321','rayhantsany02@gmail.com','2020','0','9','PEMINJAMAN GEDUNG DI UNIV',NULL,'2023-06-11 01:38:10','2023-06-11 01:38:10',NULL,'FIA'),(60,1,0,'rayhan tsany','21312321','rayhantsany02@gmail.com','2020','2','9','PEMINJAMAN BUS UNIVERSITAS KOK BAYAR',NULL,'2023-06-11 01:38:40','2023-06-11 01:38:40',NULL,'FIA'),(61,1,0,'dewan perwakilan mahasiswa fia','21312321','rayhantsany02@gmail.com','2021','10','8','KRS DI FIA APAKAH BISA DI PISAH DENGAN SKEMA PER PRODI DAN PER ANGKATAN',NULL,'2023-06-11 01:39:21','2023-06-11 01:39:21',NULL,'FIA'),(62,1,0,'HIMADIKA FIA UB','21312321','rayhantsany02@gmail.com','2020','0','9','GERBANG DI UB DI TUTUP TIDAK SAMPAI. MALAM, APAKAH BISA DI AJUKAN DI BUKA SAMPAI JAM MALAM',NULL,'2023-06-11 01:40:16','2023-06-11 01:40:16',NULL,'FIA'),(63,1,0,'HIMADIKA FIA UB','21312321','rayhantsany02@gmail.com','2020','0','9','JAM MALAM DI FIA SAMPAI JAM 9 SUDAH DI USIR, DI FAKULTAS LAIN TIDAK.. APAKAH ADA PERTOR TENTANG JAM MALAM DI BRAWIJAYA?',NULL,'2023-06-11 01:40:55','2023-06-11 01:40:55',NULL,'FIA');
/*!40000 ALTER TABLE `aspirasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (1,'RESES 1.O','ㅤ','HSlG4Uj6e3APOSTER.png','2023-06-03 04:27:39','2023-06-03 04:37:14'),(2,'Launching Struktural DPM UB 2023','ㅤ','Shu3lsUb9a5IMG_3759 2.jpg','2023-06-03 04:36:25','2023-06-03 04:37:21'),(3,'INFORMASI GRUP MMD','https://t.me/+XW0Gjsl14-A3NzJl?fbclid=PAAaan3_dNAKjmLZOb-3FLGx_phJKCk8WK_cxktj8uBicNxSSNRD2A_I0CrFc','hQM1tdqY7yGIMG_3761 2.jpg','2023-06-03 04:39:24','2023-06-03 04:39:24'),(4,'TINDAK LANJUT ASPIRASI TERKAIT JAS ALMAMATER','ㅤ','cW7ozatHooZIMG_3762 2.jpg','2023-06-03 04:41:55','2023-06-03 04:41:55'),(5,'TINDAK LANJUT ASPIRASI MMD','ㅤ','sIucRucuiLTIMG_3763 2.jpg','2023-06-03 04:43:22','2023-06-03 04:43:22'),(6,'TINDAK LANJUT ASPIRASI MMD MELALUI LINGKAR LEGISLATIF SE-BRAWIJAYA','ㅤ','gLLYMTPeGqQIMG_3764 2.jpg','2023-06-03 04:44:12','2023-06-03 04:44:12'),(7,'INFORMASI PEMBAGIAN JAS ALMAMATER 2021','https://ub.ac.id/id/pengambilan-jas-almamater-bagi-mahasiswa-angkatan-tahun-2020-2021-dan-2021-2022/?fbclid=PAAaZa3MjLcuPzrn2-sO_ECsy-lG9nmO-xJhu00ksw8V5i5_VpuUNxGWru9mo','dkfPR2KhwQeIMG_3765 2.jpg','2023-06-03 04:47:22','2023-06-03 04:47:22'),(8,'INFORMASI PENGAMBILAN JAS ALMAMATER 2022','https://ub.ac.id/id/indonesia-pengumuman-pengambilan-jas-almamater-bagi-mahasiswa-angkatan-tahun-2022-jenjang-d3-d4-dan-s1/','qiYN5DaBMaAIMG_3768.jpg','2023-06-03 04:49:10','2023-06-03 04:49:10'),(9,'STUDY COMPARATIVE KOMISI 1 DPM UB X BPM FISIP UNPAD X BPM UNPAD','ㅤ','DmAMXbIaRcRIMG_3766 2.jpg','2023-06-03 04:50:23','2023-06-03 04:50:23'),(10,'TINDAK LANJUT KLARIFIKASI ASPIRASI RAJA BRAWIJAYA','ㅤ','72S9snab8gDIMG_3767 2.jpg','2023-06-03 05:15:34','2023-06-03 05:15:34'),(11,'LAPORAN HASIL KEGIATAN RESES DPM UB DAPIL FIA 2023','bit.ly/LaporanHasilReses1DapilFIA','pFyf6XCkYR0IMG_4534.jpg','2023-06-13 22:09:14','2023-06-13 22:09:14'),(12,'LAPORAN KINERJA ANGGOTA DPM UB DAPIL FIA','bit.ly/LaporanKinerjaTsany','b7T1uBYMTRFIMG_4535.jpg','2023-06-13 22:10:37','2023-06-13 22:10:37');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_product`
--

DROP TABLE IF EXISTS `image_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `image` text NOT NULL,
  `is_main` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_product`
--

LOCK TABLES `image_product` WRITE;
/*!40000 ALTER TABLE `image_product` DISABLE KEYS */;
INSERT INTO `image_product` VALUES (1,2,'4IElSDUW5N6WhatsApp Image 2023-05-03 at 19.25.35.jpeg',1,'2023-06-02 04:17:53','2023-06-02 04:17:53'),(2,3,'AJ69Nq1glrjWhatsApp Image 2023-01-20 at 3.59.56 PM.jpeg',1,'2023-06-03 07:31:10','2023-06-03 07:31:10'),(3,4,'nTNmBzE3Na7WhatsApp Image 2023-01-20 at 3.59.55 PM.jpeg',1,'2023-06-03 07:34:23','2023-06-03 07:34:23'),(4,5,'FIYS40X2XhcWhatsApp Image 2023-01-20 at 3.59.55 PM.jpeg',1,'2023-06-03 07:35:37','2023-06-03 07:35:37'),(5,6,'09xQpYLk02tCC539D58-5F15-40F2-ACEF-6101F209AAB2.png',1,'2023-06-03 07:58:31','2023-06-03 07:58:31'),(6,7,'E2PSiyjfQ0jScreenshot_3.png',1,'2023-06-04 17:45:04','2023-06-04 17:45:04'),(7,8,'m3f4oacD3WSIMG-20230613-WA0011.jpg',1,'2023-06-13 01:17:14','2023-06-13 01:17:14'),(8,8,'rFOeeQUv0n4IMG_8652.HEIC.heif',0,'2023-06-13 01:17:14','2023-06-13 01:17:14');
/*!40000 ALTER TABLE `image_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_01_07_024930_create_category_table',1),(6,'2022_02_24_015859_create_product_table',1),(7,'2022_02_24_020300_create_banner_table',1),(8,'2022_02_24_020500_create_image_product_table',1),(9,'2022_03_05_015019_create_settings_table',1),(10,'2022_03_07_025715_create_f_a_q_table',1),(11,'2023_05_29_014539_create_prodi_table',1),(12,'2023_05_29_014604_create_visi_misi_table',1),(13,'2023_05_29_014636_create_program_kerja_table',1),(14,'2023_05_29_014653_create_tim_table',1),(15,'2023_05_29_014705_create_galeri_table',1),(16,'2023_05_29_014808_create_aspirasi_table',1),(17,'2023_06_02_014044_add_column_to_tim_table',1),(18,'2023_06_02_122740_add_columns_to_aspirasi_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodi`
--

LOCK TABLES `prodi` WRITE;
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` VALUES (1,'Teknik Informatika','2023-06-02 03:58:24','2023-06-02 03:58:24');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `whatsapp` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `on_click` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (2,1,1,'Seblak','Deksipri',85702202129,1,0,0,'2023-06-02 04:17:53','2023-06-05 08:21:12','',''),(6,1,1,'Seblak','Bshahahah',811155111,1,0,0,'2023-06-03 07:58:31','2023-06-04 08:49:26','261677','Hana'),(7,1,1,'sebal','Deskripsi',857,100,0,0,'2023-06-04 17:45:04','2023-06-05 08:21:09','10000','Namafawfwa'),(8,1,1,'CHIMELT ( Chicken Melted )','Ayam Crispy dengan cita rasa yang khaa dengan dilumuri aneka saus favorit (teriyaki, black pepper,gochujang, barbeques, spicy dsb) serta tambahan keju mozzarella bakar diatasnya',85646320604,100,1,0,'2023-06-13 01:17:14','2023-06-13 01:22:37','215030200111116','Hana Zulva Firyatulloh');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program_kerja`
--

DROP TABLE IF EXISTS `program_kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program_kerja` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_kerja`
--

LOCK TABLES `program_kerja` WRITE;
/*!40000 ALTER TABLE `program_kerja` DISABLE KEYS */;
INSERT INTO `program_kerja` VALUES (1,'Proleg Askara (Program Priority Legislasi Askara)','2023-06-04 08:47:59','2023-06-04 08:47:59'),(2,'Jalur AskaraJaya (Menjaring dan Menyalurkan aspirasi Mahasiswa Brawijaya)','2023-06-04 08:48:12','2023-06-04 08:48:12'),(3,'Jalur Askaratio (Menjaring dan Menyalurkan aspirasi Mahasiswa Administratio)','2023-06-04 08:48:18','2023-06-04 08:48:18'),(4,'Askara Atency (Askara Integrated Information & Advocacy)','2023-06-04 08:48:26','2023-06-04 08:48:26'),(5,'Evaduting Askara (Evaluasi, Audit, Monitoring)','2023-06-04 08:48:35','2023-06-04 08:48:35'),(6,'Askara Legislativa Mandala','2023-06-04 08:48:41','2023-06-04 08:48:41');
/*!40000 ALTER TABLE `program_kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'title','Title','Tsany Azzura','text',NULL,NULL),(2,'facebook','Link Facebook','https://www.facebook.com/Tsany.Ez/','text',NULL,'2023-06-02 21:40:27'),(3,'instagram','Link Instagram','https://www.instagram.com/tsanyazzura/','text',NULL,'2023-06-02 21:40:27'),(4,'linkedin','Link Linkedin','https://www.linkedin.com/in/tsany-azzura-340988217/','text',NULL,'2023-06-02 21:40:27'),(5,'whatsapp','No WhatsApp','087776656112','text',NULL,'2023-06-02 21:40:27'),(6,'foto_utama','Foto Utama','NVx7E2J65Wx04_06_23_16_50_18BANNER 3x2 meter.png','file',NULL,'2023-06-04 08:50:18'),(7,'deskripsi','Deskripsi','<p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 14px;\">Halo Brawijaya !&nbsp;</span><span style=\"font-family: var(--bs-font-sans-serif); font-size: 0.875rem;\">Selamat Datang di Website Tsany !!</span></p><p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 0.875rem;\">Saya pribadi merasa senang sekali ketika Brawijayans sudah sampai di halaman ini, artinya Brawijayans sudah mengikuti perkembangan dan peduli akan hak serta kepentingan mahasiswa. Oleh karena itu, Saya haturkan Terima kasih.\r\n Dengan kerendahan hati yang paling dalam , perkenalkan saya Muhamad Raihan \'Tsany\' Azurra, Saat ini saya di beri amanah sebagai Dewan Perwakilan Mahasiswa Universitas Brawijaya (DPM UB) mewakili dapil Fakultas Ilmu Administrasi (FIA) . sekaligus saya diberikan amanah menjadi Ketua Komisi 1 DPM UB 2023. \r\n\r\nWebsite ini adalah Jawaban dari Janji Politik dan manifestasi komitmen saya ketika kampanye yang menginisiasi adanya  \"ASKARA ATENCY\" ( Askara Integrated Information &amp; Advokacy ) oleh karena itu, saya mengajak kepada seluruh civitas akademika Universitas Brawijaya terlebih Mahasiswa Fakultas Ilmu Administrasi untuk ikut serta berpartisipasi untuk peduli dan memperjuangkan hak mahasiswa dengan mengisi aspirasi sebagai bentuk advokasi. Informasi yang berkaitan dengan Kemahasiswaan insha allah akan saya optimalkan di platform ini.</span><br></p><p>\r\n\r\nPagi - pagi makan ayam geprek,\r\njangan lupa isi aspirasi ya rek!</p><p><span style=\"font-size: 14px;\">Hidup Mahasiswa !</span><br></p><p><span style=\"font-family: var(--bs-font-sans-serif); font-size: 0.875rem;\">Matur nuwun !&nbsp;</span></p>','textarea',NULL,'2023-06-04 17:35:56'),(8,'logo','Logo','6Khu4Idtt4B04_06_23_16_44_15B67FDCB4-3F05-4029-B35E-9F36737E1B12_4_5005_c-removebg-preview.png','file',NULL,'2023-06-04 08:44:15'),(9,'about','Tentang','<div class=\"page\" title=\"Page 1\">\r\n			<div class=\"section\">\r\n				<div class=\"layoutArea\">\r\n					<div class=\"column\">\r\n						<p>\r\n		\r\n	\r\n	\r\n		</p><div class=\"page\" title=\"Page 1\">\r\n			<div class=\"section\">\r\n				<div class=\"layoutArea\">\r\n					<div class=\"column\">\r\n						<p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'; font-weight: 700\">EDUCATION</span></p>\r\n		\r\n	\r\n	\r\n		<p><span style=\"font-family: Georgia; font-size: 10pt;\">SDI Kardina Massa -&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">2009 - 2015</span></p><div class=\"page\" title=\"Page 1\">\r\n			<div class=\"section\" style=\"\">\r\n				<div class=\"layoutArea\" style=\"\">\r\n					<div class=\"column\" style=\"\">\r\n						<p style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size: 10.000000pt; font-family: \'Georgia\'\">SMPN 1 KOTA BLITAR -&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">2015 - 2018</span></p><p style=\"background-color: rgb(255, 255, 255);\">\r\n		\r\n	\r\n	\r\n		</p><div class=\"page\" title=\"Page 1\" style=\"\">\r\n			<div class=\"section\" style=\"\">\r\n				<div class=\"layoutArea\" style=\"\">\r\n					<div class=\"column\" style=\"\">\r\n						<p style=\"background-color: rgb(255, 255, 255);\"><span style=\"font-size: 10.000000pt; font-family: \'Georgia\'\">SMAN 1 KOTA BLITAR -&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">2018 - 2021</span></p><div class=\"page\" title=\"Page 1\" style=\"\">\r\n			<div class=\"section\" style=\"\">\r\n				<div class=\"layoutArea\" style=\"\">\r\n					<div class=\"column\" style=\"\">\r\n						<p style=\"\"><span style=\"font-size: 10pt; font-family: Georgia; background-color: rgb(255, 255, 0);\"><font color=\"#000000\" style=\"\">UNIVERSITAS BRAWIJAYA / FACULTY OF ADMINISTRATION - 2021 - Current</font></span></p><p style=\"\">\r\n		\r\n	\r\n	\r\n		</p><div class=\"page\" title=\"Page 1\" style=\"\">\r\n			<div class=\"section\" style=\"\">\r\n				<div class=\"layoutArea\" style=\"\">\r\n					<div class=\"column\" style=\"\">\r\n						<p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\"><span style=\"font-size: 10.000000pt; font-family: \'Georgia\'\">UNIVERSITAS TERBUKA / FACULTY OF LAW AND SOCIAL POLITICAL SCIENCE - 2021 - Current&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt; font-weight: 700;\">&nbsp;</span></font></p></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>\r\n		\r\n	\r\n	\r\n		\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div><p><span style=\"font-size: 13.000000pt; font-family: \'Georgia\'; font-weight: 700\">ACHIEVEMENTS :</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">1.Best Policy Brief Pembangunan Jawa Timur\r\nKanal Mafia 2.0 |&nbsp;</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">2.Runner Up 1 Putera Kampus Jawa Timur 2022 |&nbsp;</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">3. Semi Finalis Duta Batik Jawa Timur 2022 |</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">4. Semi Finalis Duta Pariwisata Jawa Timur 2022 |&nbsp;</span></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">5. Putra Brawijaya 2021 |</span></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">6.Gus Duta Wisata Kab. Blitar 2021 |</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">7.&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">Finalis Duta Pemuda Keren Kota Blitar 2021 |</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">8. Paskibraka Kota Blitar 2019 |&nbsp;</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">9. Juara 1 Lomba Vlog Smartfren 2019 |</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">10.&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">Juara 3 kesmalita Futsal Cup 2019 |</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">11.&nbsp;&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">Juara 1 Trofeo &amp; Segitiga 2019&nbsp;</span></p><p>\r\n		\r\n	\r\n	\r\n		</p><div class=\"page\" title=\"Page 1\">\r\n			<div class=\"section\">\r\n				<div class=\"layoutArea\">\r\n					<div class=\"column\">\r\n						<p><span style=\"font-size: 13.000000pt; font-family: \'Georgia\'; font-weight: 700\">ORGANIZATIONS</span></p><p><b><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Ketua komisi 1&nbsp; DPM UB - DPM UB 2023</font></b></p></div><div class=\"column\"><div class=\"page\" title=\"Page 1\"><div class=\"section\"><div class=\"layoutArea\"><div class=\"column\"><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">1. Staff Tetap Kajian Strategis - BEM FIA UB 2022</span></font></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">2. Staff Tetap Edukasi Mahasiswa - HUMANISTIK FIA UB 2022</span></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">3. Staff - UKM Putra Putri Brawijaya 2021</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">4.</span></font><span style=\"font-family: Georgia; font-size: 14.6667px;\">Staff Muda Edukasi Mahasiswa - HUMANISTIK FIA UB 2021</span><br style=\"font-family: Georgia; font-size: 14.6667px;\"></p><p>5.&nbsp;Staff Muda Diplomasi Internal- Eksekutif Mahasiswa UB 2021</p><p>6.&nbsp;<span style=\"font-family: Georgia; font-size: 14.6667px;\">Ketua Divisi Pengabdian Masyarakat Ekonomi Kreatif - Gus Jeng Kab. Blitar 2021 </span></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">7. Anggota - Purna Paskibraka 2019</span></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">8. Ketua Umum - Paskibra SMA Negeri 1 Blitar</span></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">9.&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">Ketua Osis - OSIS SMP Negeri 1 Blitar</span></p><div><br></div><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">&nbsp;</span><span style=\"font-family: Georgia; font-size: 13pt; font-weight: 700;\">EXPERIENCES</span></p><div class=\"page\" title=\"Page 1\"><div class=\"section\"><div class=\"layoutArea\"><div class=\"column\">\r\n						<p><span style=\"font-family: Georgia; font-size: 14.6667px;\">RAJA Brawijaya 2022 - Wakil Ketua Pelaksana</span><br style=\"font-family: Georgia; font-size: 14.6667px;\"></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">KANAL MAFIA 2.0 - Ketua Pelaksana</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Pemilihan Putra Putri Brawijaya 2022 - Ketua Pelaksana</span></font></p><p><span style=\"font-size: 14.6667px; font-family: Georgia;\">Pemilihan Gus Jeng Kab. Blitar 2023 - Acara</span></p><p><span style=\"font-size: 14.6667px; font-family: Georgia;\">Administrator in Action 2022 - CO Humas</span><br></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Pengbdian Lapak Gus Jeng 2022 - Ketua Pelaksana</span></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Famtrip Ekonomi Kreatif Gus Jeng Kab. Blitar 2022 - Ketua Pelaksana</span></font><br></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">School of Delegation 1.0 - Ketua Pelaksana</span></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Public Discussion Forum 1.0 - Staff PDD</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Public Discussion Forum 2.0 - Staff Acara</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Public Women Class - Staff Acara</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">School of Delegation 2.0 - Staff PDD</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">School of Delegation 3.0 - Staff Acara</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Happening 2022 - Staff Acara Humanistik</span><br><br>Open Class 2022- Sekretaris</font></p><p><font face=\"Georgia\">Sunset ramadhan PPB - Staff Perlengkapan<br></font></p><p><font face=\"Georgia\">Mubeng Blitar Bareng Gus Jeng 2022 - CO Acara<br></font></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nOpen Class 2022- Sekretaris</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Gerakan Peduli Pantai Kita - Transkoper\r\n</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Gus Jeng Saba Sekolah - Transkoper</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">\r\nGus Jeng One Day Living - Staff</span><br></p><div class=\"page\" title=\"Page 2\"><div class=\"section\"><div class=\"layoutArea\"><div class=\"column\"><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nGus Jeng Jumpa - Transportasi\r\n</span></p>\r\n					</div>\r\n				</div>\r\n				<div class=\"layoutArea\">\r\n					<div class=\"column\">\r\n						<p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">Refleksi dan Resolusi Bupati Kab. Blitar - Panitia</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">ARAH HUMANISTIK 2021 - Ketua Pelaksana</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nJelajah Fakultas Brawijaya - EM 2021</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nAdministrator in Action HUMANISTIK FIA UB 2021 -</span><span style=\"font-family: Georgia; font-size: 11pt;\">Staff </span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Acara\r\nKampung Budaya Brawijaya 2021 - Staff Acara</span></p>\r\n						<p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">Humanistik Electio Organizer 2021 - Panitia Pengawas\r\n</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">Smasa Championship 2019 - Sie Expo</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nLKBB Proklamator 2019 - Sie Acara</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nDiesnatalis SMA Ft. Ello - Sie Expo\r\n</span></p>\r\n						<p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">Year Book School - Ketua Pelaksana</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nDiesnatalis SMP Ft. Vierratalle - Anggota</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nAmazing Blitar in December 2021 - Ketua Pelaksana\r\nPameran Fotografi Blitar 2021 - Ketua Pelaksana</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Fashion Show Ekonomi Kreatif Kab. Blitar 2021 – Ketua</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\"><br></span></p>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div><p>\r\n		\r\n	\r\n	\r\n		\r\n		\r\n	\r\n	\r\n		</p><div class=\"page\" title=\"Page 2\">\r\n			<div class=\"section\">\r\n				<div class=\"layoutArea\">\r\n					<div class=\"column\">\r\n						<p><span style=\"font-size: 13.000000pt; font-family: \'Georgia\'; font-weight: 700\">OTHER EXPERIENCES / SPEAKER</span></p>\r\n		\r\n	\r\n	\r\n		<div class=\"page\" title=\"Page 2\">\r\n			<div class=\"section\">\r\n				<div class=\"layoutArea\">\r\n					<div class=\"column\">\r\n						<p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Speaker - Talkshow Pre-Event KITA INDONESIA&nbsp; 2022</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Speaker - LKMM Pra TD PKKMB FIA UB 2022</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Speaker - AM2T UB 2023</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Speaker -Upgrading Advokasi lingkar Advo FIA U 2023</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Speaker - Mission RSC FIA UB 2023</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Master Of Ceremony -Peksiminas XVI UB</span></font></p><p><font face=\"Georgia\"><span style=\"font-size: 14.6667px;\">Master Of Ceremony - Euphorians 2022</span></font></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">Master Of Ceremony - ZPEE BEM FMIPA UB 2022</span></p><p><span style=\"font-family: Georgia; font-size: 14.6667px;\">Master Of Ceremony - Inauguration PKKMB FIA UB 2022</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Speaker Radio Persada Blitar tentang Ekonomi Kreatif Kab. Blitar</span><span style=\"font-family: Georgia; font-size: 14.6667px;\"><br></span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nMaster of Ceremony - Upgrading Raja Brawijaya 2022</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nMaster of Ceremony - Pelatihan Digitalisasi Profil Produk Kemasan Ekonomi Kreatif 2022</span></p><p><span style=\"font-family: Georgia; font-size: 11pt;\">Moderator Kajian Analisis Isu pembangunan Duta Wisata Se-Jawa Timur.</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nMaster Of Ceremony - The 3 in 1 FIA Publik 2022</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nPengawalan ADWI Kemenparekraf Desa Wisata Semen Kab. Blitar 2022</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nMaster of Ceremony - Pelatihan Tata Rias Kab. Blitar</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nPembaca Nominasi - Awarding Brawijaya 2021</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nMaster of Ceremony - Hearing ATTRACTION 2021</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nMaster of Ceremony - Webinar HEROES 2021</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nKetua Rombongan Hearing DPRD Jawa Timur isu pembangunan KANAL MAFIA 2.0</span></p><p><span style=\"font-size: 11.000000pt; font-family: \'Georgia\'\">\r\nPemantik&nbsp;</span><span style=\"font-family: Georgia; font-size: 11pt;\">Diskusi Panel - KANAL MAFIA 2.0</span></p>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div><p><span style=\"font-family: Georgia; font-size: 11pt;\">Pengawalan ADWI Kemenparekraf Desa Wisata Serang Kab. Blitar 2021</span><span style=\"font-size: 13.000000pt; font-family: \'Georgia\'; font-weight: 700\">&nbsp;</span></p>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div></div></div><div class=\"layoutArea\"><div class=\"column\">\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>','textarea',NULL,'2023-06-07 01:21:06'),(10,'background','Background','#F8F8FF','text',NULL,'2023-06-05 18:29:22');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tim`
--

DROP TABLE IF EXISTS `tim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tim` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_utama` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tim`
--

LOCK TABLES `tim` WRITE;
/*!40000 ALTER TABLE `tim` DISABLE KEYS */;
INSERT INTO `tim` VALUES (2,'CICI ANIKE','Staff Khusus DPM UB Dapil FIA','hYICRh5zJxUIMG_20230423_105927-removebg-preview.png','2023-06-03 05:17:45','2023-06-03 05:17:45',0),(3,'REZA AULIA','Staff Khusus DPM UB Dapil FIA','eOopAU9I08EReza_Aulia_R.P_coklat-removebg-preview.png','2023-06-03 05:21:15','2023-06-03 05:21:15',0);
/*!40000 ALTER TABLE `tim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Superadmin','superadmin@gmail.com',NULL,1,'$2y$10$e/isprqOZ9xxy7l8dueuCObz0qFlfSz9iWhuKxAWlJmQc5LoUhU26',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visi_misi`
--

DROP TABLE IF EXISTS `visi_misi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visi_misi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visi_misi`
--

LOCK TABLES `visi_misi` WRITE;
/*!40000 ALTER TABLE `visi_misi` DISABLE KEYS */;
INSERT INTO `visi_misi` VALUES (11,'Mengakselerasi program kerja DPM agar dapat membawa kebermanfaatan bagi civitas akademika UB','2023-06-05 08:14:53','2023-06-05 08:14:53',0),(12,'Menjadikan DPM UB Sebagai Lembaga yang mampu bersinergi dengan seluruh Civitas Akademika UB.','2023-06-05 08:15:04','2023-06-05 08:15:04',0),(14,'Menjaring segala bentuk aspirasi yang menjadi keresahan seluruh Mahasiswa Universitas Brawijaya untuk dapat disalurkan kepada pemangku kepentingan yang berwenang secara tuntas.','2023-06-05 08:15:37','2023-06-05 08:15:37',0),(15,'Mengakomodir pembuatan produk hukum yang mengedepankan aspirasi mahasiswa Universitas Brawijaya','2023-06-05 08:15:52','2023-06-05 08:15:52',0),(16,'Mengoptimalisasi fungsi pengawasan yang kredibel terhadap EM UB untuk dapat menjadi organisasi yang dinamis, inovatif, dan profesional.','2023-06-05 08:17:25','2023-06-05 08:17:25',0),(17,'\"ASKARA Cetta, Aksara Brawijaya\"  Akseleratif   Sinergis   Kredibel   Adaptif   Responsif   Aspiratif','2023-06-05 08:17:55','2023-06-05 08:17:55',1);
/*!40000 ALTER TABLE `visi_misi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-25 15:27:52
