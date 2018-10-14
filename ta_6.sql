-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 07:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_6`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `Nama` varchar(35) NOT NULL,
  `Jk` enum('L','P') NOT NULL,
  `Kelas` enum('41-01','41-02','41-03','41-04') NOT NULL,
  `Fakultas` enum('FIK','FEB','FKB','FIT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Jk`, `Kelas`, `Fakultas`) VALUES
('6701170104', 'Niah Jelek', 'P', '41-04', 'FIT'),
('6701171069', 'Fitria Riadatul Chusniah', 'P', '41-01', 'FEB');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `postingan` text NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `NIM`, `postingan`, `judul`, `tanggal`, `gambar`) VALUES
(5, '6701171069', 'Kucing Persia ditandai dengan wajah bulat, hidung pesek, kaki yang pendek dan memiliki bulu yang panjang. Kucing Persia dinilai sebagai jenis kucing nomor satu yang paling populer di dunia karena memiliki rasa kasih sayang dan setia. Salah satu kucing tertua di dunia ini berasal dari Persia (Iran). Kucing ini pertama kali di pelihara oleh peternak Inggris, kemudian peternak Amerika setelah perang dunia II. Meskipun kucing Persia mempunyai perawatan dengan biaya yang tinggi dan perlu perawatan setiap hari. Umumnya kucing jenis Persia terbagi menjadi berbagai jenis, seperti Persia Peaknose, Persia Flatnose, Persia Himalaya dan Persia Medium. Dan untuk makanan kucing Persia, mereka lebih cocok mengkonsumsi makanan kering dan basah yang umumnya di jual khusus di toko hewan.', 'Kucing Persia', '2018-10-12', 'th-7.jpg'),
(6, '6701170104', 'American Alsatian merupakan ras anjing dengan ukuran tubuh yang besar dan berasal dari Amerika Serikat. Menurut sejarah, ras anjing ini pertama kali dikembangbiakkan oleh Lois Elaine Denny pada tahun 1967.\r\n\r\nCiri-ciri fisik yang mudah dikenali dari American Alsatian adalah bulu halus di sekujur tubuhnya yang memiliki warna hitam dan corak kuning kecokelatan berbentuk oval di sekitar matanya. Selain itu, ras anjing ini juga memiliki kecerdasan di atas anjing rata-rata serta memiliki indera pendengaran yang sangat baik.', 'AMERICAN ALSATIAN', '2018-10-12', 'American-Alsatian-640x480.jpg'),
(7, '6701170104', 'Dari segi penampilan, Alaskan Malamut sangat mirip dengan Siberian Husky, bahkan sulit untuk dibedakan. Perbedaan baru dapat dilihat dengan ukuran tubuhnya yang lebih besar. Karena itulah, ras anjing yang berasal dari Alaska, Amerika Serikat ini seringkali dimanfaatkan tenaganya sebagai penarik kereta salju.\r\nAlaskan Malamut juga dikenal memiliki karakter yang sangat ramah terhadap manusia dan mudah beradaptasi dengan lingkungannya. Meskipun begitu, karena memiliki bulu yang tebal, ras anjing ini cukup sulit untuk hidup di wilayah beriklim tropis.', 'ALASKAN MALAMUT', '2018-10-12', 'Alaskan-Malamut-640x426.jpg'),
(8, '6701171069', 'Ini merupakan salah satu keturunan kucing oriental. Asal-usul berkembang biaknya tidak diketahui tetapi diyakini berasal dari Asia Tenggara. Kucing Siam mempunyai tubuh yang elegan, ramping, fleksibel dan tampak berotot. Kepala berbentuk segitiga dengan hidung yang tipis. Mata cenderung berbentuk almond. Rambut pendek, berkilau, halus, lembut, ketat dan melekat pada tubuh.\r\n\r\nKucing Siam selalu ingin menjadi pusat perhatian, mereka ingin dirawat. Kucing ini sangat komunikatif, mengeong dengan suara yang lembut hanya untuk mendapat perhatian. Mereka cenderung berisik dan bisa menangis jika anda mengabaikan mereka. Mereka memiliki tubuh yang ramping dan atletis dengan telinga yang besar. Mereka berbulu pendek dan sangat senang dibelai. Mereka sangat setia dan hanya dekat dengan satu orang yaitu majikannya. Hewan ini juga sangat cerdas dan penuh kasih kasih sayang.', 'Kucing Siam', '2018-10-13', 'Kucing_Siam-300x188.jpg'),
(9, '6701171069', 'Ini merupakan jenis kucing tertua di dunia, kucing jenis ini berasal dari Maine ( Amerika Serikat). Menurut sejarah, kelompok kucing ini memiliki keturunan dari kucing ras Anggora dan ras Norwegian Forest. Maine Coon dicatat dengan struktur tubuh yang besar, bentuknya tubuh persegi panjang. Berat tubuh jantan rata-rata mencapai 12-18 kilogram dan betina biasanya 10-14 kilogram. Mereka kuat tetapi lembut dan penuh kasih sayang. Mereka mempunyai bulu yang panjang tetapi tidak memerlukan perawatan sebanyak Persia. Kepribadian mereka cukup baik dan akan membuat anda sangat aman bila dekat anak-anak. Mereka juga sangat setia kepada keluarga majikan.', 'Kucing Maine Coon', '2018-10-12', 'maine-coon-300x174.jpg'),
(10, '6701171069', 'Ini merupakan salah satu kelompok kucing tertua di dunia. Banyak sumber mengatakan asal kucing ini berada di sekitaran Mesir dan sudah hidup di zaman kerajaan Mesir. Kelompok kucing jenis ini mempunyai kecerdasaan yang cukup tinggi. Abysinian sangat senang sekali berada di dekat manusia. Mereka selalu ingin tahu apa yang sedang dikerjakan majikannya. Selain itu ras kucing ini juga mudah di latih untuk melakukan segala sesuatu.\r\n\r\nAbyssinian adalah kucing yang berukuran tubuh sedang, langsing dan anggun dengan bulu pendeknya. Kaki Abyssinian panjang sehingga jika mereka berjalan terlihat sangat anggun. Kepala abyssinian memiliki bentuk kepala segitiga dengan sudut agak berbentuk bulat. Salah satu ciri khas kucing ini juga terdapat pada pola warna bulunya yang berbintik-bintik yang sering di sebut Ticket Agouti.', ' Kucing Abyssinian', '2018-10-12', 'abyssinia-210x300.jpg'),
(11, '6701171069', 'Ini adalah salah satu kucing peliharaan terbesar di dunia, kucing ini merupakan ras kucing Hibrida yang dihasilkan dari sebuah persilangan kucing liar serval (dari daratan Afrika) dengan kucing ras Siamese, Bengal dan juga Egyptian. Savannah juga mempunyai rekor di dunia karena telah dinobatkan sebagai ras kucing terpanjang oleh Guinness World Records dengan panjang 17,1 inci ( 44 CM ). Mereka salah satu kucing yang cerdas, sering belajar bagaimana membuka pintu lemari dan siapa saja yang memelihara Savannah mungkin akan perlu mengambil tindakan pengamanan khusus untuk mencegah kucing dari hal-hal yang tidak diinginkan. Savannah termasuk kucing yang tidak takut air karena mereka akan bermain atau bahkan membenamkan diri dalam air.', 'Kucing Savannah', '2018-10-12', 'savannah1-300x158.jpg'),
(12, '6701171069', 'Ini adalah salah satu kucing peliharaan dengan tubuh kuat dan memiliki kaki yang proposional. Mereka mempunyai ciri khas pinggul yang besar. Kucing jenis Ragdoll memiliki kepribadian yang cukup baik di antara kucing lain. Ragdoll memiliki suara yang lembut, bersahabat, manja, tidak suka mengganggu siapa saja dan suka bermain (aktif). Kucing jenis raggdol sangat mudah di latih untuk dijadikan teman bermain. Mereka tidak akan membela diri jika hewan lain menyerang mereka.', 'Kucing Ragdoll', '2018-10-12', 'kucing-ragdoll-2-300x213.jpg'),
(13, '6701170104', 'American Pit Bull Terrier merupakan salah satu ras anjing murni tertua yang pernah ditemukan. Ras anjing yang berasal dari Amerika Serikat ini juga memiliki keunggulan dalam segi daya tahan fisiknya yang sangat baik, memiliki sifat pantang menyerah, serta temperamen yang stabil.Karena keunggulan inilah, ras anjing ini banyak digunakan sebagai anjing petarung pada zaman dahulu.\r\n\r\nNamun mengingat pertarungan anjing saat ini merupakan hal yang ilegal, saat ini, ras anjing yang memiliki bulu pendek dan halus ini sering dimanfaatkan sebagai anjing penjaga.', 'AMERICAN PIT BULL TERRIER', '2018-10-12', 'American-Pit-Bull-Terrier-640x462.jpg'),
(14, '6701170104', 'German Shepherd, atau lebih dikenal di Indonesia sebagai Herder, merupakan ras anjing yang paling banyak diminati oleh para pecinta anjing di seluruh dunia. Pada awalnya, ras anjing ini sering dimanfaatkan sebagai anjing penggembala. Namun mengingat ras anjing ini memiliki kemampuan pelacakan yang baik, kuat, lincah, serta didukung dengan tubuh yang proporsional, German Shepherd saat ini lebih banyak digunakan sebagai anjing penjaga maupun anjing di kepolisian.', 'GERMAN SHEPHERD', '2018-10-12', 'German-Shepherd-640x480.jpg'),
(15, '6701170104', 'Siapa yang tidak mengenal dengan Golden Retriever. Penampilannya dan sifatnya yang lucu dan menggemaskan membuat banyak pecinta anjing menyukai ras anjing ini. Pada awalnya, anjing ini sering dimanfaatkan sebagai hewan pemburu, khususnya untuk memburu unggas air. Nama Golden sendiri diambil karena warna keemasan pada bulunya ketika terkena sinar matahari.\r\n\r\nSelain itu, Golden Retriever juga dikenal karena kecerdasan yang dimilikinya. Ras anjing ini sangat mudah untuk berbagai keperluan, seperti sebagai anjing penuntun, anjing penyelamat, dan bahkan membantu tugas kepolisian.', 'GOLDEN RETRIEVER', '2018-10-12', 'Golden-Retriever-640x480.jpg'),
(16, '6701170104', 'Memiliki penampilan yang hampir serupa dengan kerabat terdekatnya, Golden Retriever, Labrador Retriever memiliki variasi warna yang lebih beragam, seperti putih, hitam, maupun kuning kecokelatan. Ras anjing yang berasal dari Inggris ini biasanya dimanfaatkan sebagai anjing pemburu, meskipun memiliki sifat yang ramah dan dapat juga dipelihara sebagai teman di rumah.\r\n\r\nSayangnya, Labrador Retriever cukup rentan terhadap serangan penyakit. Sebut saja katarak, dysplasia, hingga masalah pada siku, pinggul, dan lutut.', 'LABRADOR RETRIEVER', '2018-10-12', 'Labrador-Retriever-640x426.jpg'),
(17, '6701171069', 'Siapa yang tidak mengenal dengan Golden Retriever. Penampilannya dan sifatnya yang lucu dan menggemaskan membuat banyak pecinta anjing menyukai ras anjing ini. Pada awalnya, anjing ini sering dimanfaatkan sebagai hewan pemburu, khususnya untuk memburu unggas air. Nama Golden sendiri diambil karena warna keemasan pada bulunya ketika terkena sinar matahari. Selain itu, Golden Retriever juga dikenal karena kecerdasan yang dimilikinya. Ras anjing ini sangat mudah untuk berbagai keperluan, seperti sebagai anjing penuntun, anjing penyelamat, dan bahkan membantu tugas kepolisian.', 'GOLDEN RETRIEVER', '2018-10-14', 'Golden-Retriever-640x480.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
