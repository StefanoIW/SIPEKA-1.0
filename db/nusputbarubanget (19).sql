-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 07:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusputbarubanget`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jabatan`
--

CREATE TABLE `tabel_jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` enum('pendidikan','kepsek','sdm','guru','admin') DEFAULT NULL,
  `jenjang` varchar(10) NOT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `Kode_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_jabatan`
--

INSERT INTO `tabel_jabatan` (`id`, `nama`, `tgl_lahir`, `username`, `password`, `jabatan`, `jenjang`, `angkatan`, `Kode_id`) VALUES
(1, 'admin', '2024-02-14', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 2004, 609),
(2, 'Pendidikan', '2000-10-20', 'pendidikan', '41cde09309583cd048d69d6e2deb95f8', 'pendidikan', 'pendidikan', 2000, NULL),
(3, 'SDM', '2000-10-20', 'sdm', '6d662f965d1e85bb367efaa03594c5a1', 'sdm', 'sdm', 2000, NULL),
(4, 'Retno Nur Astuti,S.Pd', '1985-09-10', 'Retno Nur', '487a79ec85092061742fd1f5d6ce387d', 'guru', 'PG/TK', 2014, NULL),
(5, 'Florentina Wira Hastari,S.Pd', '1984-02-23', 'Florentina Wira', 'dfc0348a4eba72bd942939c5d25be669', 'guru', 'PG/TK', 2012, NULL),
(6, 'Yuliana Poniyati,S.Pd ', '1969-03-15', 'Yuliana Poniyati', '8d1e8302e35f6ae090b2727ea8964abf', 'guru', 'PG/TK', 2018, NULL),
(7, 'Linda Apriliana,SS', '1987-04-10', 'Linda Apriliana', 'ffb84c0bf9f702b76ef788f6ce695ad1', 'guru', 'PG/TK', 2022, NULL),
(8, 'Ni Putu Maya,SS', '1999-05-30', 'Ni Putu Maya', '2ce15e1a264d46cdec2c802109f806ea', 'guru', 'PG/TK', 2023, NULL),
(9, 'Antonius Suraji,S.Pd', '1969-03-30', 'Antonius Suraji', 'd73c556f3f25866e7957566be9dd51c5', 'guru', 'SD', 2005, NULL),
(10, 'Dewi Rizqi Maharani, S. Pd', '1988-08-12', 'Dewi Rizqi', '4ec5772799b5b6d7132edb60c5550d0a', 'guru', 'SD', 2011, NULL),
(11, 'Drs. Mustofa', '1965-08-16', 'Mustofa', '7c7636e0bb1df5efd698a9af1d217bd8', 'guru', 'SD', 2005, NULL),
(12, 'Frida Dwi Siswari, S. Pd', '1979-02-16', 'Frida Dwi', 'b7d72b11efdb8a9851305e2efcc1ad0b', 'guru', 'SD', 2003, NULL),
(13, 'Han Ning Rum, S.Pd', '1980-03-30', 'Ning Rum', '285d185557d67fef555f9d574d71fe7f', 'guru', 'SD', 2006, NULL),
(14, 'Elizabeth Puji Rahayu, S.Th', '1977-10-01', 'Puji Rahayu', 'a4c258573318154a4a1c0126b6ba7493', 'guru', 'SD', 2012, NULL),
(15, 'Galih Mahendra, S.Kom', '1980-07-01', 'Galih Mahendra', '88cfce9d224fe11303f19aa051f9172f', 'guru', 'SD', 2013, NULL),
(16, 'Fransisca Romana Diharti,S.Pd', '1964-04-29', 'Fransisca Romana', '694d1b4836adf93ef14cc81a0ed53a77', 'guru', 'SD', 1985, NULL),
(17, 'Prima Widyatmoko,S. Pd, M. Pd', '1989-06-01', 'Prima Widyatmoko', '709dd5ead2f5fff478c390a5594cbb75', 'guru', 'SD', 2018, NULL),
(18, 'Hasan Basri, S.Pd', '1993-08-09', 'Hasan Basri', '7b41febe4c12d60f28455c3ca9661368', 'guru', 'SD', 2020, NULL),
(20, 'Natalia Fanny Berlianti,S.Pd', '1999-12-24', 'Natalia Fanny', '947c3638c5adefaf0fde37258e0b8380', 'guru', 'SD', 2022, NULL),
(21, 'Auring Heranu P.,S.Pd', '1994-07-06', 'Auring Heranu', '787beac4755ca2679a0832cb3fd7f7d9', 'guru', 'SD', 2023, NULL),
(22, 'Florentia Ivony,S.Pd', '2001-11-24', 'Florentia Ivony', '213b1fca3676bd00403ff6c0d0f24123', 'guru', 'SD', 2024, NULL),
(23, 'Eko Budi Hendiko, S. Si', '1976-06-18', 'Eko Budi', 'bfee69ff1f6e20a833c43836cc3ddafe', 'guru', 'SMP', 2005, NULL),
(24, 'Tentrem Al Trima, S. Pd', '1968-06-19', 'Al Trima', 'd41d8cd98f00b204e9800998ecf8427e', 'guru', 'SMP', 1997, NULL),
(25, 'Partiwi, S. Pd', '1970-05-13', 'Partiwi', '31d42692043d70e0a891ed07a6c1a01a', 'guru', 'SMP', 1994, NULL),
(26, 'Umi Kasiyati, S. Pd', '1981-08-06', 'Umi Kasiyati', '7edef19eb84a022a47597f8854a4cb2f', 'guru', 'SMP', 2006, NULL),
(27, 'Dwi Yunianto,S.Pd', '1991-06-04', 'Dwi Yunianto', '2de96f52294f191f8a3b1facfe41f407', 'guru', 'SMP', 2014, NULL),
(28, 'Theofilus Riyanto, S.Th', '1967-05-16', 'Theofilus Riyanto', 'b92c4ffd24b18bc67c188fc50da7b1f6', 'guru', 'SMP', 2019, NULL),
(29, 'Yoga Huda Nada,S.Pd', '1993-09-10', 'Yoga Huda', 'e7d965f5f4d1d4e99e943251dd1c878c', 'guru', 'SMP', 2020, NULL),
(30, 'Romanus Ajun Sigit P.,S.Sos.,S.Ag', '1966-12-13', 'Romanus Ajun', '4868b563f9953d463e6158ebf3c34933', 'guru', 'SMP', 2020, NULL),
(31, 'Karina,S.Pd', '1999-02-27', 'Karina', 'b0e8a3d7b0f5004fcb918eafbdaeb741', 'guru', 'SMP', 2024, NULL),
(32, 'Yuliana Widyaningtyas, S. Pd', '1970-07-28', 'Yuliana Widyaningtyas', 'f797ebcb77fe45663aa7310cc043c4eb', 'guru', 'SMA', 2003, NULL),
(33, 'Yuniarti, S.S', '1981-06-20', 'Yuniarti', '4a845fa3f81408a5c2e72b13d317c57f', 'guru', 'SMA', 2006, NULL),
(34, 'Zaldy Chandra, S. Si', '1983-12-01', 'Zaldy Chandra', 'bb56627e8a6cf49877a20cb0562f5a07', 'guru', 'SMA', 2007, NULL),
(35, 'Diah Setyawati,S.Pd', '1991-12-22', 'Diah Setyawati', '056c25f49d2277fc87980d3fa98f226d', 'guru', 'SMA', 2015, NULL),
(36, 'Levi Yunitasari,S.Pd', '1993-02-25', 'Levi Yunitasari', 'dcdfac3b6678853895828492eaf97f3e', 'guru', 'SMA', 2016, NULL),
(37, 'Rico Yuliar Wicaksono,S.Pd', '1992-06-19', 'Rico Yuliar', '6e84a6537768991f86f1651b031759be', 'guru', 'SMA', 2016, NULL),
(38, 'Bambang Setiawan,S.Pd', '1997-11-26', 'Bambang Setiawan', '78fc95399735912974bd4e45d093c835', 'guru', 'SMA', 2022, NULL),
(39, 'FX.Aris Wahyu P.,M.Ed', '1979-09-28', 'Aris Wahyu', 'e7357e4b5b239d9653832aeed8b74e77', 'guru', 'SMA', 2022, NULL),
(40, 'Emanuel Suryajaya,S.Kom', '1999-07-25', 'Emanuel Suryajaya', '8549bc731172982dca5021041b08bbc1', 'guru', 'SMA', 2022, NULL),
(41, 'Evelyn Ruth C.,SS', '1998-03-14', 'Evelyn Ruth', '54c910dd4816594bb17d00f2e6e81194', 'guru', 'SMA', 2023, NULL),
(42, 'Adinda Putri B.T.,S.Pd', '1990-09-14', 'Adinda Putri', 'c811d6d9a4689cef681621cdbbe48aa1', 'guru', 'SMA', 2023, NULL),
(43, 'Ignatius Harris c.,S.Pd', '1992-05-20', 'Ignatius Harris', 'd3ee0e647fa31f6d7032d5f9d4fe586a', 'guru', 'SMA', 2023, NULL),
(44, 'Drs. Ariawan Sudagijono,M. Kom ', '1969-10-30', 'Ariawan Sudagijono', 'fc3ee881886e08e5551a0e5b7b5bdddc', 'guru', 'SMK1', 2006, NULL),
(45, 'Joko Riyanto, S.Kom', '1984-04-06', 'Joko Riyanto', '7adc7b995491e01733dc9c69afafaae7', 'guru', 'SMK1', 2008, NULL),
(46, 'Timmy Gondo Atmodjo, ST,M.Kom', '1981-06-27', 'Timmy Gondo', 'ec5102e55d6c0f24c54d061baf97d7ef', 'guru', 'SMK1', 2010, NULL),
(47, 'Nining Tri Palupi,S. Pd, M. Pd', '1976-10-22', 'Nining Tri', '8d53bdfe4207f71d23878fcda632ca93', 'guru', 'SMK1', 1995, NULL),
(48, 'Syaiful Anas, M.Pd', '1988-06-26', 'Syaiful Anas', '1570b833d66ce0b2a01d04513490628f', 'guru', 'SMK1', 2019, NULL),
(49, 'Tripitoyo, S.Pd', '1994-08-15', 'Tripitoyo', 'b06eeb86608bbf3c4b37843a7f946e9a', 'guru', 'SMK1', 2020, NULL),
(50, 'Maria Rosa Chrysanti,S.Ds', '1996-12-18', 'Maria Rosa', '05cd569a84a552b736d6a5f77420b211', 'guru', 'SMK1', 2021, NULL),
(51, 'Michael Satrio Prayogo,S.Kom', '1995-07-02', 'Michael Satrio ', '8b7c3aff1b748037afdbe9adea86278d', 'guru', 'SMK1', 2022, NULL),
(52, 'Firida Sania Nur Azmi,S.Sos', '1996-03-11', 'Firida Sania', '182d72fe103cde21b56b0337b15f4d23', 'guru', 'SMK1', 2022, NULL),
(53, 'Melinda Safitri,S.Kom', '1994-05-11', 'Melinda Safitri', '7eb6c8907bff9013b734d36bfd22dda1', 'guru', 'SMK1', 2022, NULL),
(54, 'Dionesia Eva Dwi K.,S.Pd', '2000-02-21', 'Dionesia Eva', 'b62c614b646cc44f59f5079c20aa40c8', 'guru', 'SMK1', 2023, NULL),
(55, 'Ester TryLestari S.,S.Pd', '1985-06-15', 'Ester TryLestari', '2ffc910a5b4482596153fc9e0a96e649', 'guru', 'SMK1', 2023, NULL),
(56, 'Chrisma Purwa Mahendra,S.Ds', '1994-12-25', 'Chrisma Purwa', 'c539b09f54794a799b7f6c0a6b453df7', 'guru', 'SMK1', 2023, NULL),
(57, 'Asinik Soedjono, SE', '1975-09-06', 'Asinik Soedjono', '0840dc844a89ccf5d8e6263889477e46', 'guru', 'SMK2', 2007, NULL),
(58, 'Dian Listriana Yogista Dewi, S.Si, Apt', '1983-04-14', 'Dian Listriana', 'a3f183669b62413fa4117d78d21f4768', 'guru', 'SMK2', 2007, NULL),
(59, 'Drs. Darmaji', '1964-02-19', 'Darmaji', '7ec715e7a0ddcff088262dd662e0831b', 'guru', 'SMK2', 1992, NULL),
(60, 'Drs. Fery Norhendy, Apt', '1968-02-05', 'Fery Norhendy', '12f94c9eaef7d6f8abe433e2c51f7e05', 'guru', 'SMK2', 2000, NULL),
(61, 'Drs. Herno Agus Purwanto, Apt.', '1968-08-13', 'Herno Agus', '9cc914d08790a260d5de85c50275ddeb', 'guru', 'SMK2', 1996, NULL),
(62, 'Ika Susilowati, S. Pd', '1984-12-27', 'Ika Susilowati', 'c5282ccc9af56e8a40928b1c24ea2356', 'guru', 'SMK2', 2008, NULL),
(63, 'Imamulatifah, S. Si, Apt', '1978-05-21', 'Imamulatifah', '72d7623d212771f2066fc4c3c7d4fbd8', 'guru', 'SMK2', 2003, NULL),
(64, 'Novita Dwi Rahayu, S. Pd', '1978-11-02', 'Novita Dwi', 'afa5aa127de3b249b290d989c16d23cf', 'guru', 'SMK2', 2004, NULL),
(65, 'Peni Indaryanti, ST', '1976-09-23', 'Peni Indaryanti', 'ca0ce7bcad17df6896fb8ea5e7b344dc', 'guru', 'SMK2', 1994, NULL),
(66, 'Sophia Saraswati Habsari, S.Farm, Apt', '1983-11-23', 'Sophia Saraswati', '23e982ab31567a9ccbc046f69a9c72cd', 'guru', 'SMK2', 2012, NULL),
(67, 'Cucu Tri Eka Y., S. Kom', '1994-07-31', 'Cucu Tri ', 'bad2f8bfac397f8e60674e0a7ecda04f', 'guru', 'SMK2', 2014, NULL),
(68, 'Maya Ary Wardhani, S.Farm, Apt', '1987-06-11', 'Maya Ary', '394c6547f842ae476a945b46f8be89dd', 'guru', 'SMK2', 2012, NULL),
(69, 'Novi Istiani, S.Pd', '1991-03-11', 'Novi Istiani', 'd50a24d5bd9cc982b560d46c2859009f', 'guru', 'SMK2', 2013, NULL),
(70, 'Margareta Nini Moeljati, S.KM., M.Par., M.Si', '1973-02-17', 'Margareta Nini', '83aa6445d2081fa2a72db35dca81c314', 'guru', 'SMK2', 2019, NULL),
(71, 'Warih Sekar Pawestri,S.M', '1998-07-13', 'Warih Sekar', '22f979ec6171c75906621e29903a5a43', 'guru', 'SMK2', 2021, NULL),
(72, 'Bayu Candra Wijaya, S.Pd', '1985-08-01', 'Bayu Candra ', '8dd2bf8820209dd6279e70d14248ec1d', 'guru', 'SMK2', 2021, NULL),
(73, 'Selvanika Fergi Purba M.,S.Pd.,Kons', '1992-11-12', 'Selvanika Fergi', '035889be28c73e26af8b954e58d302ba', 'guru', 'SMK2', 2022, NULL),
(74, 'Muhamad Syafiq Naim,S.Pd', '1993-02-16', 'Muhamad Syafiq', 'b2746991d66ebfd267750f7243784e4c', 'guru', 'SMK2', 2022, NULL),
(75, 'Dicky Adi Kurniawan,S.Pd ', '1998-05-16', 'Dicky Adi', 'ef0e983bcaa958e4b83577b83536ad67', 'guru', 'SMK2', 2022, NULL),
(76, 'Aji Nugroho, SS,  M.Pd', '1982-05-15', 'Aji Nugroho', '49c7e8db0eaf7f21d5c231fc4e3a3491', 'guru', 'SMK2', 2009, NULL),
(77, 'Wamelinda Dwi W.,S.Farm', '1998-03-29', 'Wamelinda Dwi', '7b17f3a511e781de70bfde9393a664f0', 'guru', 'SMK2', 2023, NULL),
(78, 'Rini Roslianti,Sos', '1971-05-10', 'Rini Roslianti', '51785874d563db80b2df2283fcdadf9b', 'guru', 'SMK2', 2024, NULL),
(81, 'Kepsek', '2004-10-20', 'Kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'kepsek', 'PG/TK', 2004, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id` int(200) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `mata_pelajaran` varchar(144) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `angkatan` int(155) DEFAULT NULL,
  `jenjang` varchar(10) NOT NULL,
  `foto_profil` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id`, `nama`, `mata_pelajaran`, `jabatan`, `angkatan`, `jenjang`, `foto_profil`) VALUES
(4, 'Retno Nur Astuti,S.Pd', '', 'guru', 2014, 'PG/TK', ''),
(5, 'Florentina Wira Hastari,S.Pd', '', 'guru', 2012, 'PG/TK', 0x706e67747265652d776f6d616e2d73696c686f75657474652d6d6174657269616c2d333130303033332d706e672d696d6167655f313732353336342e6a7067),
(6, 'Yuliana Poniyati,S.Pd ', '', 'guru', 2018, 'PG/TK', ''),
(7, 'Linda Apriliana,SS', '', 'guru', 2022, 'PG/TK', ''),
(8, 'Ni Putu Maya,SS', '', 'guru', 2023, 'PG/TK', ''),
(9, 'Antonius Suraji,S.Pd', '', 'guru', 2005, 'SD', ''),
(10, 'Dewi Rizqi Maharani, S. Pd', '', 'guru', 2011, 'SD', ''),
(11, 'Drs. Mustofa', '', 'guru', 2005, 'SD', ''),
(12, 'Frida Dwi Siswari, S. Pd', '', 'guru', 2003, 'SD', ''),
(13, 'Han Ning Rum, S.Pd', '', 'guru', 2006, 'SD', ''),
(14, 'Elizabeth Puji Rahayu, S.Th', '', 'guru', 2012, 'SD', ''),
(15, 'Galih Mahendra, S.Kom', '', 'guru', 2013, 'SD', ''),
(16, 'Fransisca Romana Diharti,S.Pd', '', 'guru', 1985, 'SD', ''),
(17, 'Prima Widyatmoko,S. Pd, M. Pd', '', 'guru', 2018, 'SD', ''),
(18, 'Hasan Basri, S.Pd', '', 'guru', 2020, 'SD', ''),
(20, 'Natalia Fanny Berlianti,S.Pd', '', 'guru', 2022, 'SD', ''),
(21, 'Auring Heranu P.,S.Pd', '', 'guru', 2023, 'SD', ''),
(22, 'Florentia Ivony,S.Pd', '', 'guru', 2024, 'SD', ''),
(23, 'Eko Budi Hendiko, S. Si', '', 'guru', 2005, 'SMP', ''),
(24, 'Tentrem Al Trima, S. Pd', '', 'guru', 1997, 'SMP', ''),
(25, 'Partiwi, S. Pd', '', 'guru', 1994, 'SMP', ''),
(26, 'Umi Kasiyati, S. Pd', '', 'guru', 2006, 'SMP', ''),
(27, 'Dwi Yunianto,S.Pd', '', 'guru', 2014, 'SMP', ''),
(28, 'Theofilus Riyanto, S.Th', '', 'guru', 2019, 'SMP', ''),
(29, 'Yoga Huda Nada,S.Pd', '', 'guru', 2020, 'SMP', ''),
(30, 'Romanus Ajun Sigit P.,S.Sos.,S.Ag', '', 'guru', 2020, 'SMP', ''),
(31, 'Karina,S.Pd', '', 'guru', 2024, 'SMP', ''),
(32, 'Yuliana Widyaningtyas, S. Pd', '', 'guru', 2003, 'SMA', ''),
(33, 'Yuniarti, S.S', '', 'guru', 2006, 'SMA', ''),
(34, 'Zaldy Chandra, S. Si', '', 'guru', 2007, 'SMA', ''),
(35, 'Diah Setyawati,S.Pd', '', 'guru', 2015, 'SMA', ''),
(36, 'Levi Yunitasari,S.Pd', '', 'guru', 2016, 'SMA', ''),
(37, 'Rico Yuliar Wicaksono,S.Pd', '', 'guru', 2016, 'SMA', ''),
(38, 'Bambang Setiawan,S.Pd', '', 'guru', 2022, 'SMA', ''),
(39, 'FX.Aris Wahyu P.,M.Ed', '', 'guru', 2022, 'SMA', ''),
(40, 'Emanuel Suryajaya,S.Kom', '', 'guru', 2022, 'SMA', ''),
(41, 'Evelyn Ruth C.,SS', '', 'guru', 2023, 'SMA', ''),
(42, 'Adinda Putri B.T.,S.Pd', '', 'guru', 2023, 'SMA', ''),
(43, 'Ignatius Harris c.,S.Pd', '', 'guru', 2023, 'SMA', ''),
(44, 'Drs. Ariawan Sudagijono,M. Kom ', '', 'guru', 2006, 'SMK1', ''),
(45, 'Joko Riyanto, S.Kom', '', 'guru', 2008, 'SMK1', ''),
(46, 'Timmy Gondo Atmodjo, ST,M.Kom', '', 'guru', 2010, 'SMK1', ''),
(47, 'Nining Tri Palupi,S. Pd, M. Pd', '', 'guru', 1995, 'SMK1', ''),
(48, 'Syaiful Anas, M.Pd', '', 'guru', 2019, 'SMK1', ''),
(49, 'Tripitoyo, S.Pd', '', 'guru', 2020, 'SMK1', ''),
(50, 'Maria Rosa Chrysanti,S.Ds', '', 'guru', 2021, 'SMK1', ''),
(51, 'Michael Satrio Prayogo,S.Kom', '', 'guru', 2022, 'SMK1', ''),
(52, 'Firida Sania Nur Azmi,S.Sos', '', 'guru', 2022, 'SMK1', ''),
(53, 'Melinda Safitri,S.Kom', '', 'guru', 2022, 'SMK1', ''),
(54, 'Dionesia Eva Dwi K.,S.Pd', '', 'guru', 2023, 'SMK1', ''),
(55, 'Ester TryLestari S.,S.Pd', '', 'guru', 2023, 'SMK1', ''),
(56, 'Chrisma Purwa Mahendra,S.Ds', '', 'guru', 2023, 'SMK1', ''),
(57, 'Asinik Soedjono, SE', '', 'guru', 2007, 'SMK2', ''),
(58, 'Dian Listriana Yogista Dewi, S.Si, Apt', '', 'guru', 2007, 'SMK2', ''),
(59, 'Drs. Darmaji', '', 'guru', 1992, 'SMK2', ''),
(60, 'Drs. Fery Norhendy, Apt', '', 'guru', 2000, 'SMK2', ''),
(61, 'Drs. Herno Agus Purwanto, Apt.', '', 'guru', 1996, 'SMK2', ''),
(62, 'Ika Susilowati, S. Pd', '', 'guru', 2008, 'SMK2', ''),
(63, 'Imamulatifah, S. Si, Apt', '', 'guru', 2003, 'SMK2', ''),
(64, 'Novita Dwi Rahayu, S. Pd', '', 'guru', 2004, 'SMK2', ''),
(65, 'Peni Indaryanti, ST', '', 'guru', 1994, 'SMK2', ''),
(66, 'Sophia Saraswati Habsari, S.Farm, Apt', '', 'guru', 2012, 'SMK2', ''),
(67, 'Cucu Tri Eka Y., S. Kom', '', 'guru', 2014, 'SMK2', ''),
(68, 'Maya Ary Wardhani, S.Farm, Apt', '', 'guru', 2012, 'SMK2', ''),
(69, 'Novi Istiani, S.Pd', '', 'guru', 2013, 'SMK2', ''),
(70, 'Margareta Nini Moeljati, S.KM., M.Par., M.Si', '', 'guru', 2019, 'SMK2', ''),
(71, 'Warih Sekar Pawestri,S.M', '', 'guru', 2021, 'SMK2', ''),
(72, 'Bayu Candra Wijaya, S.Pd', '', 'guru', 2021, 'SMK2', ''),
(73, 'Selvanika Fergi Purba M.,S.Pd.,Kons', '', 'guru', 2022, 'SMK2', ''),
(74, 'Muhamad Syafiq Naim,S.Pd', '', 'guru', 2022, 'SMK2', ''),
(75, 'Dicky Adi Kurniawan,S.Pd ', '', 'guru', 2022, 'SMK2', ''),
(76, 'Aji Nugroho, SS,  M.Pd', '', 'guru', 2009, 'SMK2', ''),
(77, 'Wamelinda Dwi W.,S.Farm', '', 'guru', 2023, 'SMK2', ''),
(78, 'Rini Roslianti,Sos', '', 'guru', 2024, 'SMK2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_keterangan_karyawan`
--

CREATE TABLE `tabel_keterangan_karyawan` (
  `id_keterangan` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `total_nilai` float DEFAULT NULL,
  `tahun_penilaian` varchar(10) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_poinguru`
--

CREATE TABLE `tabel_poinguru` (
  `id_penilaian` int(11) NOT NULL,
  `poinia1` int(11) DEFAULT NULL,
  `poinia2` int(11) DEFAULT NULL,
  `poinib1` int(11) DEFAULT NULL,
  `poinib2` int(11) DEFAULT NULL,
  `poinib3` int(11) DEFAULT NULL,
  `poinib4` int(11) DEFAULT NULL,
  `poinib5` int(11) DEFAULT NULL,
  `poiniia1` int(11) DEFAULT NULL,
  `poiniia2` int(11) DEFAULT NULL,
  `poiniib1` int(11) DEFAULT NULL,
  `poiniib2` int(11) DEFAULT NULL,
  `poiniib3` int(11) DEFAULT NULL,
  `poiniib4` int(11) DEFAULT NULL,
  `poiniiia1` int(11) DEFAULT NULL,
  `poiniiib1` int(11) DEFAULT NULL,
  `poiniiic1` int(11) DEFAULT NULL,
  `iva1` int(11) DEFAULT NULL,
  `ivb1` int(11) DEFAULT NULL,
  `ivc1` int(11) DEFAULT NULL,
  `ivd1` int(11) DEFAULT NULL,
  `ive1` int(11) DEFAULT NULL,
  `ive2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_p_kepsek`
--

CREATE TABLE `tabel_p_kepsek` (
  `id_penilaian` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `total_penilaian_kepsek` int(100) DEFAULT NULL,
  `catatan_kepsek` varchar(255) DEFAULT NULL,
  `tahun_penilaian` varchar(255) DEFAULT NULL,
  `ka1` varchar(255) DEFAULT NULL,
  `poinka1` int(11) DEFAULT NULL,
  `ka2` varchar(255) DEFAULT NULL,
  `poinka2` int(11) DEFAULT NULL,
  `ka3` varchar(255) DEFAULT NULL,
  `poinka3` int(11) DEFAULT NULL,
  `ka4` varchar(255) DEFAULT NULL,
  `poinka4` int(11) DEFAULT NULL,
  `ka5` varchar(255) DEFAULT NULL,
  `poinka5` int(11) DEFAULT NULL,
  `ka6` varchar(255) DEFAULT NULL,
  `poinka6` int(11) DEFAULT NULL,
  `totalka` int(11) DEFAULT NULL,
  `kb1` text DEFAULT NULL,
  `poinkb1` int(11) DEFAULT NULL,
  `kb2` text DEFAULT NULL,
  `poinkb2` int(11) DEFAULT NULL,
  `kb3` text DEFAULT NULL,
  `poinkb3` int(11) DEFAULT NULL,
  `kb4` varchar(255) DEFAULT NULL,
  `poinkb4` int(11) DEFAULT NULL,
  `kb5` varchar(255) DEFAULT NULL,
  `poinkb5` int(11) DEFAULT NULL,
  `kb6` varchar(255) DEFAULT NULL,
  `poinkb6` int(11) DEFAULT NULL,
  `kb7` varchar(255) DEFAULT NULL,
  `poinkb7` int(11) DEFAULT NULL,
  `kb8` varchar(255) DEFAULT NULL,
  `poinkb8` int(11) DEFAULT NULL,
  `kb9` varchar(255) DEFAULT NULL,
  `poinkb9` int(11) DEFAULT NULL,
  `kb10` varchar(255) DEFAULT NULL,
  `poinkb10` int(11) DEFAULT NULL,
  `kb11` text DEFAULT NULL,
  `poinkb11` int(11) DEFAULT NULL,
  `kb12` varchar(255) DEFAULT NULL,
  `poinkb12` int(1) DEFAULT NULL,
  `kb13` varchar(255) DEFAULT NULL,
  `poinkb13` int(11) DEFAULT NULL,
  `kb14` varchar(255) DEFAULT NULL,
  `poinkb14` int(11) DEFAULT NULL,
  `kb15` varchar(255) DEFAULT NULL,
  `poinkb15` int(11) DEFAULT NULL,
  `kb16` varchar(255) DEFAULT NULL,
  `poinkb16` int(11) DEFAULT NULL,
  `kb17` varchar(255) DEFAULT NULL,
  `poinkb17` int(11) DEFAULT NULL,
  `kb18` varchar(255) DEFAULT NULL,
  `poinkb18` int(11) DEFAULT NULL,
  `kb19` varchar(255) DEFAULT NULL,
  `poinkb19` int(11) DEFAULT NULL,
  `kb20` varchar(255) DEFAULT NULL,
  `poinkb20` int(11) DEFAULT NULL,
  `kb21` varchar(255) DEFAULT NULL,
  `poinkb21` int(11) DEFAULT NULL,
  `kb22` varchar(255) DEFAULT NULL,
  `poinkb22` int(11) DEFAULT NULL,
  `kb23` varchar(255) DEFAULT NULL,
  `poinkb23` int(11) DEFAULT NULL,
  `totalkb` int(11) DEFAULT NULL,
  `kc1` varchar(255) DEFAULT NULL,
  `poinkc1` int(11) DEFAULT NULL,
  `kc2` varchar(255) DEFAULT NULL,
  `poinkc2` int(11) DEFAULT NULL,
  `kc3` varchar(255) DEFAULT NULL,
  `poinkc3` int(11) DEFAULT NULL,
  `kc4` varchar(255) DEFAULT NULL,
  `poinkc4` int(11) DEFAULT NULL,
  `kc5` varchar(255) DEFAULT NULL,
  `poinkc5` int(11) DEFAULT NULL,
  `kc6` varchar(255) DEFAULT NULL,
  `poinkc6` int(11) DEFAULT NULL,
  `kc7` varchar(255) DEFAULT NULL,
  `poinkc7` int(11) DEFAULT NULL,
  `kc8` varchar(255) DEFAULT NULL,
  `poinkc8` int(11) DEFAULT NULL,
  `kc9` varchar(255) DEFAULT NULL,
  `poinkc9` int(11) DEFAULT NULL,
  `totalkc` int(11) DEFAULT NULL,
  `kd1` varchar(255) DEFAULT NULL,
  `poinkd1` int(11) DEFAULT NULL,
  `kd2` varchar(255) DEFAULT NULL,
  `poinkd2` int(11) DEFAULT NULL,
  `kd3` varchar(255) DEFAULT NULL,
  `poinkd3` int(11) DEFAULT NULL,
  `kd4` varchar(255) DEFAULT NULL,
  `poinkd4` int(11) DEFAULT NULL,
  `kd5` varchar(255) DEFAULT NULL,
  `poinkd5` int(11) DEFAULT NULL,
  `totalkd` int(11) DEFAULT NULL,
  `ke1` varchar(255) DEFAULT NULL,
  `poinke1` int(11) DEFAULT NULL,
  `ke2` varchar(255) DEFAULT NULL,
  `poinke2` int(11) DEFAULT NULL,
  `ke3` varchar(255) DEFAULT NULL,
  `poinke3` int(11) DEFAULT NULL,
  `ke4` varchar(255) DEFAULT NULL,
  `poinke4` int(11) DEFAULT NULL,
  `ke5` varchar(255) DEFAULT NULL,
  `poinke5` int(11) DEFAULT NULL,
  `totalke` int(11) DEFAULT NULL,
  `kf1` varchar(255) DEFAULT NULL,
  `poinkf1` int(11) DEFAULT NULL,
  `kf2` varchar(255) DEFAULT NULL,
  `poinkf2` int(11) DEFAULT NULL,
  `kf3` varchar(255) DEFAULT NULL,
  `poinkf3` int(11) DEFAULT NULL,
  `kf4` varchar(255) DEFAULT NULL,
  `poinkf4` int(11) DEFAULT NULL,
  `kf5` varchar(255) DEFAULT NULL,
  `poinkf5` int(11) DEFAULT NULL,
  `totalkf` int(11) DEFAULT NULL,
  `kg1` varchar(255) DEFAULT NULL,
  `poinkg1` int(11) DEFAULT NULL,
  `kg2` varchar(255) DEFAULT NULL,
  `poinkg2` int(11) DEFAULT NULL,
  `kg3` varchar(255) DEFAULT NULL,
  `poinkg3` int(11) DEFAULT NULL,
  `totalkg` int(11) DEFAULT NULL,
  `kh1` varchar(255) DEFAULT NULL,
  `poinkh1` int(11) DEFAULT NULL,
  `kh2` varchar(255) DEFAULT NULL,
  `poinkh2` int(11) DEFAULT NULL,
  `totalkh` int(11) DEFAULT NULL,
  `ki1` varchar(255) DEFAULT NULL,
  `poinki1` int(11) DEFAULT NULL,
  `ki2` varchar(255) DEFAULT NULL,
  `poinki2` int(11) DEFAULT NULL,
  `ki3` varchar(255) DEFAULT NULL,
  `poinki3` int(11) DEFAULT NULL,
  `ki4` text DEFAULT NULL,
  `poinki4` int(11) DEFAULT NULL,
  `ki5` text DEFAULT NULL,
  `poinki5` int(11) DEFAULT NULL,
  `ki6` text DEFAULT NULL,
  `poinki6` int(11) DEFAULT NULL,
  `ki7` text DEFAULT NULL,
  `poinki7` int(11) DEFAULT NULL,
  `totalki` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_p_kepsek`
--

INSERT INTO `tabel_p_kepsek` (`id_penilaian`, `id`, `Nama`, `total_penilaian_kepsek`, `catatan_kepsek`, `tahun_penilaian`, `ka1`, `poinka1`, `ka2`, `poinka2`, `ka3`, `poinka3`, `ka4`, `poinka4`, `ka5`, `poinka5`, `ka6`, `poinka6`, `totalka`, `kb1`, `poinkb1`, `kb2`, `poinkb2`, `kb3`, `poinkb3`, `kb4`, `poinkb4`, `kb5`, `poinkb5`, `kb6`, `poinkb6`, `kb7`, `poinkb7`, `kb8`, `poinkb8`, `kb9`, `poinkb9`, `kb10`, `poinkb10`, `kb11`, `poinkb11`, `kb12`, `poinkb12`, `kb13`, `poinkb13`, `kb14`, `poinkb14`, `kb15`, `poinkb15`, `kb16`, `poinkb16`, `kb17`, `poinkb17`, `kb18`, `poinkb18`, `kb19`, `poinkb19`, `kb20`, `poinkb20`, `kb21`, `poinkb21`, `kb22`, `poinkb22`, `kb23`, `poinkb23`, `totalkb`, `kc1`, `poinkc1`, `kc2`, `poinkc2`, `kc3`, `poinkc3`, `kc4`, `poinkc4`, `kc5`, `poinkc5`, `kc6`, `poinkc6`, `kc7`, `poinkc7`, `kc8`, `poinkc8`, `kc9`, `poinkc9`, `totalkc`, `kd1`, `poinkd1`, `kd2`, `poinkd2`, `kd3`, `poinkd3`, `kd4`, `poinkd4`, `kd5`, `poinkd5`, `totalkd`, `ke1`, `poinke1`, `ke2`, `poinke2`, `ke3`, `poinke3`, `ke4`, `poinke4`, `ke5`, `poinke5`, `totalke`, `kf1`, `poinkf1`, `kf2`, `poinkf2`, `kf3`, `poinkf3`, `kf4`, `poinkf4`, `kf5`, `poinkf5`, `totalkf`, `kg1`, `poinkg1`, `kg2`, `poinkg2`, `kg3`, `poinkg3`, `totalkg`, `kh1`, `poinkh1`, `kh2`, `poinkh2`, `totalkh`, `ki1`, `poinki1`, `ki2`, `poinki2`, `ki3`, `poinki3`, `ki4`, `poinki4`, `ki5`, `poinki5`, `ki6`, `poinki6`, `ki7`, `poinki7`, `totalki`) VALUES
(159, 4, 'Retno Nur Astuti,S.Pd', 1, '', '2025', 'Terpenuhi sebagian (<=85%)', 1, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 1, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 'Tidak ada bukti/Tidak Terpenuhi', 0, 0),
(160, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 7, 'Linda Apriliana,SS', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 9, 'Antonius Suraji,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 7, 'Linda Apriliana,SS', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 5, 'Florentina Wira Hastari,S.Pd', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 0, '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 0, '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 0, '', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 0, '', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 9, 'Antonius Suraji,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 4, 'Retno Nur Astuti,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 9, 'Antonius Suraji,S.Pd', 0, '', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_p_pendidikan2`
--

CREATE TABLE `tabel_p_pendidikan2` (
  `id_penilaian` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ia1` varchar(255) DEFAULT NULL,
  `poinia1` int(11) DEFAULT NULL,
  `apoinia1` int(11) NOT NULL,
  `berkasia1` longblob DEFAULT NULL,
  `berkasia11` longblob DEFAULT NULL,
  `berkasia111` longblob DEFAULT NULL,
  `iab1` varchar(255) DEFAULT NULL,
  `poiniab1` int(11) DEFAULT NULL,
  `apoiniab1` int(11) DEFAULT NULL,
  `berkasiab1` longblob DEFAULT NULL,
  `berkasiab11` longblob DEFAULT NULL,
  `berkasiab111` longblob DEFAULT NULL,
  `iac1` varchar(255) DEFAULT NULL,
  `poiniac1` int(11) DEFAULT NULL,
  `apoiniac1` int(11) DEFAULT NULL,
  `berkasiac1` longblob DEFAULT NULL,
  `berkasiac11` longblob DEFAULT NULL,
  `berkasiac111` longblob DEFAULT NULL,
  `ia2` varchar(255) DEFAULT NULL,
  `poinia2` int(11) DEFAULT NULL,
  `apoinia2` int(11) DEFAULT NULL,
  `berkasia2` longblob DEFAULT NULL,
  `berkasia22` longblob DEFAULT NULL,
  `berkasia222` longblob DEFAULT NULL,
  `ib1` varchar(255) DEFAULT NULL,
  `poinib1` int(11) DEFAULT NULL,
  `apoinib1` int(11) DEFAULT NULL,
  `berkasib1` longblob DEFAULT NULL,
  `berkasib11` longblob DEFAULT NULL,
  `berkasib111` longblob DEFAULT NULL,
  `ib2` varchar(255) DEFAULT NULL,
  `poinib2` int(11) DEFAULT NULL,
  `apoinib2` int(11) DEFAULT NULL,
  `berkasib2` longblob DEFAULT NULL,
  `berkasib22` longblob DEFAULT NULL,
  `berkasib222` longblob DEFAULT NULL,
  `ib3` varchar(255) DEFAULT NULL,
  `poinib3` int(11) DEFAULT NULL,
  `apoinib3` int(11) DEFAULT NULL,
  `berkasib3` longblob DEFAULT NULL,
  `berkasib33` longblob DEFAULT NULL,
  `berkasib333` longblob DEFAULT NULL,
  `ib4` varchar(255) DEFAULT NULL,
  `poinib4` int(11) DEFAULT NULL,
  `apoinib4` int(11) DEFAULT NULL,
  `berkasib4` longblob DEFAULT NULL,
  `berkasib44` longblob DEFAULT NULL,
  `berkasib444` longblob DEFAULT NULL,
  `ib5` varchar(255) DEFAULT NULL,
  `poinib5` int(11) DEFAULT NULL,
  `apoinib5` int(11) DEFAULT NULL,
  `berkasib5` longblob DEFAULT NULL,
  `berkasib55` longblob DEFAULT NULL,
  `berkasib555` longblob DEFAULT NULL,
  `ib6` varchar(255) DEFAULT NULL,
  `poinib6` int(11) DEFAULT NULL,
  `apoinib6` int(11) DEFAULT NULL,
  `berkasib6` longblob DEFAULT NULL,
  `berkasib66` longblob DEFAULT NULL,
  `berkasib666` longblob DEFAULT NULL,
  `ic1` varchar(255) DEFAULT NULL,
  `poinic1` int(11) DEFAULT NULL,
  `apoinic1` int(11) DEFAULT NULL,
  `berkasic1` longblob DEFAULT NULL,
  `berkasic11` longblob DEFAULT NULL,
  `berkasic111` longblob DEFAULT NULL,
  `berkasic1111` longblob DEFAULT NULL,
  `berkasic11111` longblob DEFAULT NULL,
  `ic2` varchar(255) DEFAULT NULL,
  `poinic2` int(11) DEFAULT NULL,
  `apoinic2` longblob DEFAULT NULL,
  `berkasic2` longblob DEFAULT NULL,
  `icb2` varchar(255) DEFAULT NULL,
  `poinicb2` int(11) DEFAULT NULL,
  `apoinicb2` int(11) DEFAULT NULL,
  `berkasicb2` longblob DEFAULT NULL,
  `icc2` varchar(255) DEFAULT NULL,
  `poinicc2` int(11) DEFAULT NULL,
  `apoinicc2` int(11) DEFAULT NULL,
  `berkasicc2` longblob DEFAULT NULL,
  `icd2` varchar(255) DEFAULT NULL,
  `poinicd2` int(11) DEFAULT NULL,
  `apoinicd2` int(11) DEFAULT NULL,
  `berkasicd2` longblob DEFAULT NULL,
  `id1` varchar(255) DEFAULT NULL,
  `poinid1` int(11) DEFAULT NULL,
  `apoinid1` int(11) DEFAULT NULL,
  `berkasid1` longblob DEFAULT NULL,
  `berkasid11` longblob DEFAULT NULL,
  `berkasid111` longblob NOT NULL,
  `ie1` varchar(255) DEFAULT NULL,
  `poinie1` int(11) DEFAULT NULL,
  `apoinie1` int(11) DEFAULT NULL,
  `berkasie1` longblob DEFAULT NULL,
  `berkasie11` longblob DEFAULT NULL,
  `berkasie111` longblob DEFAULT NULL,
  `ie2` varchar(255) DEFAULT NULL,
  `poinie2` int(11) DEFAULT NULL,
  `apoinie2` int(11) DEFAULT NULL,
  `berkasie2` longblob DEFAULT NULL,
  `berkasie22` longblob DEFAULT NULL,
  `iia1` varchar(255) DEFAULT NULL,
  `poiniia1` int(11) DEFAULT NULL,
  `apoiniia1` int(11) DEFAULT NULL,
  `berkasiia1` longblob DEFAULT NULL,
  `berkasiia11` longblob DEFAULT NULL,
  `berkasiia111` longblob DEFAULT NULL,
  `iia2` varchar(255) DEFAULT NULL,
  `poiniia2` int(11) DEFAULT NULL,
  `apoiniia2` int(11) DEFAULT NULL,
  `berkasiia2` longblob DEFAULT NULL,
  `berkasiia22` longblob DEFAULT NULL,
  `berkasiia222` longblob DEFAULT NULL,
  `iiab2` varchar(255) DEFAULT NULL,
  `poiniiab2` int(11) DEFAULT NULL,
  `apoiniiab2` int(11) DEFAULT NULL,
  `berkasiiab2` longblob DEFAULT NULL,
  `berkasiiab22` longblob DEFAULT NULL,
  `berkasiiab222` longblob DEFAULT NULL,
  `berkasiiab2222` longblob DEFAULT NULL,
  `iib1` varchar(255) DEFAULT NULL,
  `poiniib1` int(11) DEFAULT NULL,
  `apoiniib1` int(11) DEFAULT NULL,
  `berkasiib1` longblob DEFAULT NULL,
  `berkasiib11` longblob DEFAULT NULL,
  `berkasiib111` longblob DEFAULT NULL,
  `iib2` varchar(255) DEFAULT NULL,
  `poiniib2` int(11) DEFAULT NULL,
  `apoiniib2` int(11) DEFAULT NULL,
  `berkasiib2` longblob DEFAULT NULL,
  `berkasiib22` longblob DEFAULT NULL,
  `berkasiib222` longblob DEFAULT NULL,
  `iib3` varchar(255) DEFAULT NULL,
  `poiniib3` int(11) DEFAULT NULL,
  `apoiniib3` int(11) DEFAULT NULL,
  `berkasiib3` longblob DEFAULT NULL,
  `berkasiib33` longblob DEFAULT NULL,
  `berkasiib333` longblob DEFAULT NULL,
  `iiba3` varchar(255) DEFAULT NULL,
  `poiniiba3` int(11) DEFAULT NULL,
  `apoiniiba3` int(11) DEFAULT NULL,
  `berkasiiba3` longblob DEFAULT NULL,
  `berkasiiba33` longblob DEFAULT NULL,
  `berkasiiba333` longblob DEFAULT NULL,
  `berkasiiba3333` longblob DEFAULT NULL,
  `iib4` varchar(255) DEFAULT NULL,
  `poiniib4` int(11) DEFAULT NULL,
  `apoiniib4` int(11) DEFAULT NULL,
  `berkasiib4` longblob DEFAULT NULL,
  `berkasiib44` longblob DEFAULT NULL,
  `berkasiib444` longblob DEFAULT NULL,
  `iibb4` varchar(255) DEFAULT NULL,
  `poiniibb4` int(11) DEFAULT NULL,
  `apoiniibb4` int(11) DEFAULT NULL,
  `berkasiibb4` longblob DEFAULT NULL,
  `berkasiibb44` longblob DEFAULT NULL,
  `berkasiibb444` longblob DEFAULT NULL,
  `iibc4` varchar(255) DEFAULT NULL,
  `poiniibc4` int(11) DEFAULT NULL,
  `apoiniibc4` int(11) DEFAULT NULL,
  `berkasiibc4` longblob DEFAULT NULL,
  `berkasiibc44` longblob DEFAULT NULL,
  `berkasiibc444` longblob DEFAULT NULL,
  `iiia1` varchar(255) DEFAULT NULL,
  `poiniiia1` int(11) DEFAULT NULL,
  `apoiniiia1` int(11) DEFAULT NULL,
  `berkasiiia1` longblob DEFAULT NULL,
  `berkasiiia11` longblob DEFAULT NULL,
  `berkasiiia111` longblob DEFAULT NULL,
  `iiib1` varchar(255) DEFAULT NULL,
  `poiniiib1` int(11) DEFAULT NULL,
  `apoiniiib1` int(11) DEFAULT NULL,
  `berkasiiib1` longblob DEFAULT NULL,
  `berkasiiib11` longblob DEFAULT NULL,
  `berkasiiib111` longblob DEFAULT NULL,
  `berkasiiib1111` longblob DEFAULT NULL,
  `berkasiiib11111` longblob DEFAULT NULL,
  `iiic1` varchar(255) DEFAULT NULL,
  `poiniiic1` int(11) DEFAULT NULL,
  `apoiniiic1` int(11) DEFAULT NULL,
  `berkasiiic1` longblob DEFAULT NULL,
  `berkasiiic11` longblob DEFAULT NULL,
  `berkasiiic111` longblob DEFAULT NULL,
  `berkasiiic1111` longblob DEFAULT NULL,
  `berkasiiic11111` longblob DEFAULT NULL,
  `iva1` varchar(255) DEFAULT NULL,
  `poiniva1` int(11) DEFAULT NULL,
  `apoiniva1` int(11) DEFAULT NULL,
  `berkasiva1` longblob DEFAULT NULL,
  `berkasiva11` longblob DEFAULT NULL,
  `berkasiva111` longblob DEFAULT NULL,
  `ivb1` varchar(255) DEFAULT NULL,
  `poinivb1` int(11) DEFAULT NULL,
  `apoinivb1` int(11) DEFAULT NULL,
  `berkasivb1` longblob DEFAULT NULL,
  `berkasivb11` longblob DEFAULT NULL,
  `berkasivb111` longblob DEFAULT NULL,
  `ivc1` varchar(255) DEFAULT NULL,
  `poinivc1` int(11) DEFAULT NULL,
  `apoinivc1` int(11) DEFAULT NULL,
  `berkasivc1` longblob DEFAULT NULL,
  `berkasivc11` longblob DEFAULT NULL,
  `berkasivc111` longblob DEFAULT NULL,
  `ivd1` varchar(255) DEFAULT NULL,
  `poinivd1` int(11) DEFAULT NULL,
  `apoinivd1` int(11) DEFAULT NULL,
  `berkasivd1` longblob DEFAULT NULL,
  `berkasivd11` longblob DEFAULT NULL,
  `berkasivd111` longblob DEFAULT NULL,
  `ive1` varchar(255) DEFAULT NULL,
  `poinive1` int(11) DEFAULT NULL,
  `apoinive1` int(11) DEFAULT NULL,
  `berkasive1` longblob DEFAULT NULL,
  `berkasive11` longblob DEFAULT NULL,
  `berkasive111` longblob DEFAULT NULL,
  `ivea1` varchar(255) DEFAULT NULL,
  `poinivea1` int(11) DEFAULT NULL,
  `apoinivea1` int(11) DEFAULT NULL,
  `berkasivea1` longblob DEFAULT NULL,
  `ive2` varchar(255) DEFAULT NULL,
  `poinive2` int(11) DEFAULT NULL,
  `apoinive2` int(11) DEFAULT NULL,
  `berkasive2` longblob DEFAULT NULL,
  `berkasive22` longblob DEFAULT NULL,
  `berkasive222` longblob DEFAULT NULL,
  `tahun_penilaian` varchar(4) DEFAULT NULL,
  `nilai` int(10) DEFAULT NULL,
  `nilaivalidasi` int(15) NOT NULL,
  `validasi` varchar(20) DEFAULT NULL,
  `Aktivasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_p_pendidikan2`
--

INSERT INTO `tabel_p_pendidikan2` (`id_penilaian`, `id`, `nama`, `ia1`, `poinia1`, `apoinia1`, `berkasia1`, `berkasia11`, `berkasia111`, `iab1`, `poiniab1`, `apoiniab1`, `berkasiab1`, `berkasiab11`, `berkasiab111`, `iac1`, `poiniac1`, `apoiniac1`, `berkasiac1`, `berkasiac11`, `berkasiac111`, `ia2`, `poinia2`, `apoinia2`, `berkasia2`, `berkasia22`, `berkasia222`, `ib1`, `poinib1`, `apoinib1`, `berkasib1`, `berkasib11`, `berkasib111`, `ib2`, `poinib2`, `apoinib2`, `berkasib2`, `berkasib22`, `berkasib222`, `ib3`, `poinib3`, `apoinib3`, `berkasib3`, `berkasib33`, `berkasib333`, `ib4`, `poinib4`, `apoinib4`, `berkasib4`, `berkasib44`, `berkasib444`, `ib5`, `poinib5`, `apoinib5`, `berkasib5`, `berkasib55`, `berkasib555`, `ib6`, `poinib6`, `apoinib6`, `berkasib6`, `berkasib66`, `berkasib666`, `ic1`, `poinic1`, `apoinic1`, `berkasic1`, `berkasic11`, `berkasic111`, `berkasic1111`, `berkasic11111`, `ic2`, `poinic2`, `apoinic2`, `berkasic2`, `icb2`, `poinicb2`, `apoinicb2`, `berkasicb2`, `icc2`, `poinicc2`, `apoinicc2`, `berkasicc2`, `icd2`, `poinicd2`, `apoinicd2`, `berkasicd2`, `id1`, `poinid1`, `apoinid1`, `berkasid1`, `berkasid11`, `berkasid111`, `ie1`, `poinie1`, `apoinie1`, `berkasie1`, `berkasie11`, `berkasie111`, `ie2`, `poinie2`, `apoinie2`, `berkasie2`, `berkasie22`, `iia1`, `poiniia1`, `apoiniia1`, `berkasiia1`, `berkasiia11`, `berkasiia111`, `iia2`, `poiniia2`, `apoiniia2`, `berkasiia2`, `berkasiia22`, `berkasiia222`, `iiab2`, `poiniiab2`, `apoiniiab2`, `berkasiiab2`, `berkasiiab22`, `berkasiiab222`, `berkasiiab2222`, `iib1`, `poiniib1`, `apoiniib1`, `berkasiib1`, `berkasiib11`, `berkasiib111`, `iib2`, `poiniib2`, `apoiniib2`, `berkasiib2`, `berkasiib22`, `berkasiib222`, `iib3`, `poiniib3`, `apoiniib3`, `berkasiib3`, `berkasiib33`, `berkasiib333`, `iiba3`, `poiniiba3`, `apoiniiba3`, `berkasiiba3`, `berkasiiba33`, `berkasiiba333`, `berkasiiba3333`, `iib4`, `poiniib4`, `apoiniib4`, `berkasiib4`, `berkasiib44`, `berkasiib444`, `iibb4`, `poiniibb4`, `apoiniibb4`, `berkasiibb4`, `berkasiibb44`, `berkasiibb444`, `iibc4`, `poiniibc4`, `apoiniibc4`, `berkasiibc4`, `berkasiibc44`, `berkasiibc444`, `iiia1`, `poiniiia1`, `apoiniiia1`, `berkasiiia1`, `berkasiiia11`, `berkasiiia111`, `iiib1`, `poiniiib1`, `apoiniiib1`, `berkasiiib1`, `berkasiiib11`, `berkasiiib111`, `berkasiiib1111`, `berkasiiib11111`, `iiic1`, `poiniiic1`, `apoiniiic1`, `berkasiiic1`, `berkasiiic11`, `berkasiiic111`, `berkasiiic1111`, `berkasiiic11111`, `iva1`, `poiniva1`, `apoiniva1`, `berkasiva1`, `berkasiva11`, `berkasiva111`, `ivb1`, `poinivb1`, `apoinivb1`, `berkasivb1`, `berkasivb11`, `berkasivb111`, `ivc1`, `poinivc1`, `apoinivc1`, `berkasivc1`, `berkasivc11`, `berkasivc111`, `ivd1`, `poinivd1`, `apoinivd1`, `berkasivd1`, `berkasivd11`, `berkasivd111`, `ive1`, `poinive1`, `apoinive1`, `berkasive1`, `berkasive11`, `berkasive111`, `ivea1`, `poinivea1`, `apoinivea1`, `berkasivea1`, `ive2`, `poinive2`, `apoinive2`, `berkasive2`, `berkasive22`, `berkasive222`, `tahun_penilaian`, `nilai`, `nilaivalidasi`, `validasi`, `Aktivasi`) VALUES
(1, 1, 'rtete', '12reraeefeafas', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, NULL, NULL, NULL, '', 53, 60, '✅', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_p_sdm`
--

CREATE TABLE `tabel_p_sdm` (
  `id_penilaian` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `total_penilaian_sdm` int(100) DEFAULT NULL,
  `tahun_penilaian` varchar(10) DEFAULT NULL,
  `sa1` int(11) DEFAULT NULL,
  `sa2` int(11) DEFAULT NULL,
  `sa3` int(11) DEFAULT NULL,
  `sa4` int(11) DEFAULT NULL,
  `sb1` int(11) DEFAULT NULL,
  `sb2` int(11) DEFAULT NULL,
  `sb3` int(11) DEFAULT NULL,
  `sb4` int(11) DEFAULT NULL,
  `sc1` int(11) DEFAULT NULL,
  `sc2` int(11) DEFAULT NULL,
  `sc3` int(11) DEFAULT NULL,
  `sc4` int(11) DEFAULT NULL,
  `sd1` int(11) DEFAULT NULL,
  `sd2` int(11) DEFAULT NULL,
  `sd3` int(11) DEFAULT NULL,
  `sd4` int(11) DEFAULT NULL,
  `se1` int(11) DEFAULT NULL,
  `se2` int(11) DEFAULT NULL,
  `se3` int(11) DEFAULT NULL,
  `se4` int(11) DEFAULT NULL,
  `sf1` int(11) DEFAULT NULL,
  `sf2` int(11) DEFAULT NULL,
  `sf3` int(11) DEFAULT NULL,
  `sf4` int(11) DEFAULT NULL,
  `sg1` int(11) DEFAULT NULL,
  `sg2` int(11) DEFAULT NULL,
  `sg3` int(11) DEFAULT NULL,
  `sg4` int(11) DEFAULT NULL,
  `sh1` int(11) DEFAULT NULL,
  `sh2` int(11) DEFAULT NULL,
  `sh3` int(11) DEFAULT NULL,
  `sh4` int(11) DEFAULT NULL,
  `si1` int(11) DEFAULT NULL,
  `si2` int(11) DEFAULT NULL,
  `si3` int(11) DEFAULT NULL,
  `si4` int(11) DEFAULT NULL,
  `sj1` int(11) DEFAULT NULL,
  `sj2` int(11) DEFAULT NULL,
  `sj3` int(11) DEFAULT NULL,
  `sj4` int(11) DEFAULT NULL,
  `sk1` int(11) DEFAULT NULL,
  `sk2` int(11) DEFAULT NULL,
  `sk3` int(11) DEFAULT NULL,
  `sk4` int(11) DEFAULT NULL,
  `sl1` int(11) DEFAULT NULL,
  `sl2` int(11) DEFAULT NULL,
  `sl3` int(11) DEFAULT NULL,
  `sl4` int(11) DEFAULT NULL,
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_p_sdm`
--

INSERT INTO `tabel_p_sdm` (`id_penilaian`, `id`, `nama`, `total_penilaian_sdm`, `tahun_penilaian`, `sa1`, `sa2`, `sa3`, `sa4`, `sb1`, `sb2`, `sb3`, `sb4`, `sc1`, `sc2`, `sc3`, `sc4`, `sd1`, `sd2`, `sd3`, `sd4`, `se1`, `se2`, `se3`, `se4`, `sf1`, `sf2`, `sf3`, `sf4`, `sg1`, `sg2`, `sg3`, `sg4`, `sh1`, `sh2`, `sh3`, `sh4`, `si1`, `si2`, `si3`, `si4`, `sj1`, `sj2`, `sj3`, `sj4`, `sk1`, `sk2`, `sk3`, `sk4`, `sl1`, `sl2`, `sl3`, `sl4`, `s1`, `s2`, `s3`, `s4`) VALUES
(160, 4, 'Retno Nur Astuti,S.Pd', 1, '2025', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(161, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 7, 'Linda Apriliana,SS', 0, '2024', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(163, 9, 'Antonius Suraji,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 7, 'Linda Apriliana,SS', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 5, 'Florentina Wira Hastari,S.Pd', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(166, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 0, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 0, '', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 0, '', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 0, '', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 4, 'Retno Nur Astuti,S.Pd', 0, '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 9, 'Antonius Suraji,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 4, 'Retno Nur Astuti,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 4, 'Retno Nur Astuti,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 4, 'Retno Nur Astuti,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 4, 'Retno Nur Astuti,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 4, 'Retno Nur Astuti,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 4, 'Retno Nur Astuti,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 9, 'Antonius Suraji,S.Pd', 0, '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_jabatan`
--
ALTER TABLE `tabel_jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tabel_keterangan_karyawan`
--
ALTER TABLE `tabel_keterangan_karyawan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `tabel_poinguru`
--
ALTER TABLE `tabel_poinguru`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tabel_p_kepsek`
--
ALTER TABLE `tabel_p_kepsek`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tabel_p_pendidikan2`
--
ALTER TABLE `tabel_p_pendidikan2`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tabel_p_sdm`
--
ALTER TABLE `tabel_p_sdm`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_jabatan`
--
ALTER TABLE `tabel_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tabel_keterangan_karyawan`
--
ALTER TABLE `tabel_keterangan_karyawan`
  MODIFY `id_keterangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tabel_poinguru`
--
ALTER TABLE `tabel_poinguru`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_p_kepsek`
--
ALTER TABLE `tabel_p_kepsek`
  MODIFY `id_penilaian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `tabel_p_pendidikan2`
--
ALTER TABLE `tabel_p_pendidikan2`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `tabel_p_sdm`
--
ALTER TABLE `tabel_p_sdm`
  MODIFY `id_penilaian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
