create database madingdb;
use madingdb;
-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Okt 2017 pada 05.12
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madingdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbinformasi_kampus`
--

CREATE TABLE IF NOT EXISTS `tbinformasi_kampus` (
  `idinfo` int(3) NOT NULL,
  `tglinfo` date NOT NULL,
  `poster` varchar(50) NOT NULL,
  `judulinfo` text NOT NULL,
  `isi_informasi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbinformasi_kampus`
--

INSERT INTO `tbinformasi_kampus` (`idinfo`, `tglinfo`, `poster`, `judulinfo`, `isi_informasi`) VALUES
(6, '2017-10-04', '6.gif', 'WISUDA 2017', '<h2><span style="font-family: " source="" sans="" pro","helvetica="" neue",helvetica,arial,sans-serif;"="">WISUDA DISELENGGARAKAN PADA TANGGAL 15 NOVEMBER 2017</span><br></h2>'),
(11, '2017-10-13', '8.png', 'Gadget and Technology Expo', '<p>Gadget and Technology Expo</p><p>CP:</p><p>GRIS 0812 2082 501 / Instagram @akatsindo<br></p>'),
(12, '2017-10-13', '12.png', 'ITB Ultra Marathon 2017', '<p>ITB Ultra Marathon 2017<br><br>Tanggal: 13-15 Oktober 2017<br><br>Tempat: <br><br>Start : FX Mall/Plaza Semanggi Jakarta (TBC)<br>Finish : Lapangan Bola Basket, Kampus ITB, Bandung<br>Info dan kontak:<br><br>Telp: 081280799656 (Lexi)<br>Website: itbultramarathon.race.id<br><br><br></p>'),
(13, '2017-10-13', '13.png', 'Pameran INDOBUILDTECH BANDUNG 2017', '<p>INDOBUILDTECH BANDUNG 2017<br><br>Tanggal: 11-15 Oktober 2017<br><br>Tempat: Graha Manggala Siliwangi, Bandung<br><br>Harga tiket masuk: GRATIS!<br>Info dan kontak:<br><br>www.indobuildtech / office +6221-8379<br></p>'),
(14, '2017-10-13', '14.png', 'AKREDITASI BAN-PT FIKI', '<p>Pada tanggal 25 â€“ 27 Agustus 2017 telah dilaksanakan visitasi terhadap Prodi Teknik Informatika Fakultas Ilmu Komputer dan Informatika (FIKI). Dua orang Tim yang dikirim oleh BAN-PT ke Unnur yaitu Bpk. Amil Ahmad Ilham, Dr. M.IT., S.T. dari Universitas Hasanuddin Makasar dan Bpk. Suyoto, Prof. Ir., Ph.D. dari Universitas Atmajaya, Yogyakarta.<br><br>Selain melakukan tanya jawab di ruangan terhadap civitas akademika FIKI, juga dilakukan peninjauan ke fasilitas pendidikan yang mendukung kegiatan proses belajar mengajar FIKI.&nbsp;&nbsp; Semoga dengan adanya visitasi ini, ke depan FIKI memperoleh akreditasi minimal â€œBâ€ seperti Prodi-prodi lainnya yang dimiliki oleh Unnur.<br></p>'),
(15, '2017-10-13', '15.png', 'AKREDITASI BAN-PT FIKI', '<p><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjdwlmatkulharian`
--

CREATE TABLE IF NOT EXISTS `tbjdwlmatkulharian` (
  `idjdwlharian` int(3) NOT NULL,
  `idjdwltetap` int(3) NOT NULL,
  `status_dosen` enum('Hadir','Tidak Hadir') NOT NULL,
  `berita` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbjdwlmatkulharian`
--

INSERT INTO `tbjdwlmatkulharian` (`idjdwlharian`, `idjdwltetap`, `status_dosen`, `berita`) VALUES
(8, 39, 'Hadir', '<p><br></p>'),
(9, 16, 'Tidak Hadir', '<p>Pak Sahala, ST tidak dapat menghadiri perkuliahan metode numerik pada tanggal 9/10/2017 pukul 19.00 , untuk penggantian jam perkuliahan akan ada pemberitahuan selanjutnya.<br></p>'),
(10, 28, 'Hadir', '<p><br></p>'),
(11, 8, 'Hadir', '<p><br></p>'),
(13, 10, 'Hadir', '<p><br></p>'),
(14, 11, 'Hadir', '<p><br></p>'),
(16, 29, 'Hadir', '<p><br></p>'),
(17, 30, 'Hadir', '<p><br></p>'),
(18, 32, 'Hadir', '<p><br></p>'),
(19, 31, 'Hadir', '<p><br></p>'),
(20, 13, 'Hadir', '<p><br></p>'),
(21, 14, 'Hadir', '<p><br></p>'),
(24, 17, 'Hadir', '<p><br></p>'),
(25, 18, 'Hadir', '<p><br></p>'),
(26, 19, 'Hadir', '<p><br></p>'),
(27, 37, 'Hadir', '<p><br></p>'),
(28, 21, 'Hadir', '<p><br></p>'),
(29, 24, 'Hadir', '<p><br></p>'),
(30, 24, 'Hadir', '<p><br></p>'),
(31, 33, 'Hadir', '<p><br></p>'),
(32, 40, 'Hadir', '<p><br></p>'),
(33, 35, 'Hadir', '<br>'),
(34, 36, 'Hadir', '<p><br></p>'),
(35, 20, 'Hadir', '<p><br></p>'),
(36, 38, 'Hadir', '<p><br></p>'),
(37, 9, 'Hadir', '<p><br></p>'),
(38, 34, 'Hadir', '<p><br></p>'),
(39, 41, 'Hadir', '<p><br></p>'),
(40, 42, 'Hadir', '<br>'),
(41, 43, 'Hadir', '<p><br></p>'),
(42, 44, 'Hadir', '<p><br></p>'),
(43, 45, 'Hadir', '<br>'),
(44, 46, 'Hadir', '<p><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjdwlmatkultetap`
--

CREATE TABLE IF NOT EXISTS `tbjdwlmatkultetap` (
  `idjdwltetap` int(3) NOT NULL,
  `kodematkul` varchar(8) NOT NULL,
  `idkelas` int(2) NOT NULL,
  `idruangan` int(2) NOT NULL,
  `idpegawai` varchar(12) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbjdwlmatkultetap`
--

INSERT INTO `tbjdwlmatkultetap` (`idjdwltetap`, `kodematkul`, `idkelas`, `idruangan`, `idpegawai`, `hari`, `jam`) VALUES
(8, '3020206', 4, 3, '0402047204', 'Senin', '09.00 sd 11.00'),
(9, '3330515', 1, 3, '0101010104', 'Senin', '11.00 sd 13.00'),
(10, '3020302', 4, 6, '0101010106', 'Senin', '13.00 sd 15.00'),
(11, '3020713', 5, 3, '0402047204', 'Senin', '17.00 sd 19.00'),
(13, '3320517', 6, 6, '0403118103', 'Senin', '17.00 sd 19.00'),
(14, '3220517', 5, 3, '0403118103', 'Senin', '19.00 sd 21.00'),
(15, '3220517', 5, 4, '29703408', 'Senin', '19.00 sd 21.00'),
(16, '3020309', 2, 1, '0101010107', 'Senin', '19.00 sd 21.00'),
(17, '3020302', 6, 6, '0101010106', 'Senin', '19.00 sd 21.00'),
(18, '3030020', 4, 1, '0402017301', 'Selasa', '09.00 sd 11.00'),
(19, '3040402', 3, 3, '0402047204', 'Selasa', '09.00 sd 11.00'),
(20, '3020203', 4, 3, '0101010104', 'Selasa', '11.00 sd 13.00'),
(21, '3130511', 1, 2, '0415086803', 'Selasa', '11.00 sd 13.00'),
(22, '3120621', 5, 3, '0403118103', 'Selasa', '17.00 sd 19.00'),
(23, '3120621', 5, 4, '29703408', 'Selasa', '17.00 sd 19.00'),
(24, '3120621', 2, 5, '0101010109', 'Selasa', '17.00 sd 19.00'),
(25, '3010204', 6, 6, '0101010108', 'Selasa', '17.00 sd 19.00'),
(26, '3040704', 5, 3, '0403118103', 'Selasa', '19.00 sd 21.00'),
(27, '3040704', 5, 4, '29703408', 'Selasa', '19.00 sd 21.00'),
(28, '3020309', 3, 1, '0101010107', 'Senin', '13.00 sd 15.00'),
(29, '3020713', 1, 3, '0403118103', 'Senin', '13.00 sd 15.00'),
(30, '3010204', 4, 4, '0101010108', 'Senin', '13.00 sd 15.00'),
(31, '3010403', 3, 4, '0101010108', 'Senin', '11.00 sd 13.00'),
(32, '3010403', 2, 4, '0101010108', 'Senin', '17.00 sd 19.00'),
(33, '3030408', 3, 1, '0402017301', 'Rabu', '09.00 sd 11.00'),
(34, '3230512', 3, 1, '0402017301', 'Rabu', '11.00 sd 13.00'),
(35, '3040704', 1, 3, '0402047204', 'Rabu', '13.00 sd 15.00'),
(36, '3330612', 1, 4, '0101010103', 'Rabu', '13.00 sd 15.00'),
(37, '3020203', 6, 3, '0101010104', 'Rabu', '17.00 sd 19.00'),
(38, '3130510', 5, 1, '0402017301', 'Rabu', '17.00 sd 19.00'),
(39, '3330515', 5, 3, '0101010104', 'Rabu', '19.00 sd 21.00'),
(40, '3230512', 2, 1, '0402017301', 'Rabu', '19.00 sd 21.00'),
(41, '3020206', 6, 4, '0101010101', 'Rabu', '19.00 sd 21.00'),
(42, '3010204', 1, 1, '0101010101', 'Kamis', '09.00 sd 11.00'),
(43, '9349329', 7, 3, '0403118103', 'Jumat', '13.00 sd 15.00'),
(44, '3767411', 2, 3, '0403118103', 'Jumat', '17.00 sd 19.00'),
(45, '3543131', 5, 1, '0101010102', 'Jumat', '17.00 sd 19.00'),
(46, '3974983', 5, 4, '0402047204', 'Jumat', '17.00 sd 19.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkelas`
--

CREATE TABLE IF NOT EXISTS `tbkelas` (
  `idkelas` int(2) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkelas`
--

INSERT INTO `tbkelas` (`idkelas`, `kelas`, `tahun_ajaran`) VALUES
(1, 'A1/14', '2014-2015'),
(2, 'B1&B2/15', '2015-2016'),
(3, 'A1/15', '2015-2016'),
(4, 'A1/16', '2016-2017'),
(5, 'B1&B2/14', '2014-2015'),
(6, 'B1&B2/16', '2016-2017'),
(7, 'A1/17', '2017-2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmatkul`
--

CREATE TABLE IF NOT EXISTS `tbmatkul` (
  `kodematkul` varchar(7) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sks` varchar(5) NOT NULL,
  `kurikulum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbmatkul`
--

INSERT INTO `tbmatkul` (`kodematkul`, `nama_matkul`, `semester`, `sks`, `kurikulum`) VALUES
('3010204', 'Bahasa Indonesia', '6', '2', '2013'),
('3010403', 'Anti Korupsi', '4', '2', '2013'),
('3020203', 'Organisasi dan Arsitektur Komp', '6', '2', '2013'),
('3020206', 'Algoritma dan Struktur Data', '2', '3', '2013'),
('3020208', 'Sistem Operasi', '6', '3', '2013'),
('3020302', 'Bahasa Inggris II', '2', '2', '2013'),
('3020309', 'Metode Numerik', '4', '3', '2013'),
('3020713', 'Riset Teknologi Informasi', '6', '2', '2013'),
('3030020', 'Bahasa Pemrograman II', '6', '3', '2013'),
('3030407', 'Komunikasi Data dan Jaringan K', '4', '3', '2013'),
('3030408', 'Desain Grafis dan Animasi Dasa', '4', '3', '2013'),
('3040402', 'Ilmu Alamiah Dasar', '4', '2', '2013'),
('3040403', 'Metodologi Penelitian', '4', '2', '2013'),
('3040704', 'Kerja Praktek', '6', '3', '2013'),
('3120516', 'Sistem Operasi Lanjut', '6', '3', '2013'),
('3120621', 'Grafika Komputer', '6', '2', '2013'),
('3130510', 'Bahasa Pemrograman III', '6', '3', '2013'),
('3130511', 'Pemodelan dan Simulasi', '6', '2', '2013'),
('3130517', 'Mobile Programming', '6', '3', '2013'),
('3220517', 'Komputer dan Masyarakat', '3', '2', '2013'),
('3230512', 'Pemrograman Jaringan', '4', '3', '2013'),
('3320517', 'Statistika dan Probabilistik', '2', '3', '2013'),
('3320526', 'Tata Kelola IT', '6', '3', '2013'),
('3320621', 'Enterprise Resource Planning', '6', '3', '2013'),
('3320731', 'Sistem Pendukung Keputusan', '6', '2', '2013'),
('3330515', 'Manajemen Resiko ', '4', '2', '2013'),
('3330612', 'Analisa Kelayakan SI', '6', '3', '2013'),
('3543131', 'Mobile Programming II', 'RPL', '3', '2017'),
('3767411', 'Sistem Keamanan Informasi', '5', '3', '2017'),
('3974983', 'IT Service Management', 'SI', '3', '2017'),
('9349329', 'Matematika Dasar', '1', '3', '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpegawai`
--

CREATE TABLE IF NOT EXISTS `tbpegawai` (
  `idpegawai` varchar(12) NOT NULL,
  `namapegawai` varchar(100) NOT NULL,
  `kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `notelepon` varchar(20) NOT NULL,
  `jabatan` enum('Admin','Prodi','Dosen') NOT NULL,
  `status` enum('Dosen Tetap','Dosen Luar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpegawai`
--

INSERT INTO `tbpegawai` (`idpegawai`, `namapegawai`, `kelamin`, `alamat`, `notelepon`, `jabatan`, `status`) VALUES
('0101010101', 'Zen Munawar, M.Kom', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010102', 'Anna Heryana, ST., MT', 'Perempuan', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010103', 'Immanuel, ST., MT', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010104', 'Bambang Utomo, ST., MT', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010105', 'Edah Zubaedah, SE., M.Si', 'Perempuan', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010106', 'Juhridin, M.Ag', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010107', 'Sahala, ST', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010108', 'Dra. Emmy Erawati', 'Perempuan', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0101010109', 'Abdul Azis', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Luar'),
('0402017301', 'Suharjanto, S.Si., MT', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Tetap'),
('0402047204', 'Sardjono, ST.,MT', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Tetap'),
('0403118103', 'Nopi Ramsari, S.Si., MT', 'Perempuan', 'Bandung', '0813', 'Dosen', 'Dosen Tetap'),
('0415086803', 'Iswanto, ST., MT', 'Laki-laki', 'Bandung', '0813', 'Dosen', 'Dosen Tetap'),
('29703408', 'Welly Hegar', 'Laki-laki', 'Bandung', '0812', 'Dosen', 'Dosen Tetap'),
('admin', 'admin', 'Laki-laki', 'admin', 'admin', 'Admin', 'Dosen Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbruangan`
--

CREATE TABLE IF NOT EXISTS `tbruangan` (
  `idruangan` int(2) NOT NULL,
  `nama_ruangan` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbruangan`
--

INSERT INTO `tbruangan` (`idruangan`, `nama_ruangan`) VALUES
(1, 'lab.116'),
(2, 'lab.117'),
(3, '115'),
(4, '118'),
(5, '103'),
(6, '104');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `iduser` int(2) NOT NULL,
  `idpegawai` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `level` enum('Admin','Prodi') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `idpegawai`, `password`, `salt`, `level`) VALUES
(15, 'admin', '729dcb90229c60081fb6e750b3a3a0b09a82c6b1aca04b9ff09b884694901065', '70ab12597a92d11ffa6069915ef5d0eac7d75ff279be6bd3e1bafe4ddd75f51e', 'Admin'),
(16, '0101010101', 'ece70d4f925d85c002bab8a3448716074b6296d55f2bee51f736789b4d84b184', 'cc0abfe7eacf68af347173cf4dbbf7b499e095ca935458085123809835f13c51', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbinformasi_kampus`
--
ALTER TABLE `tbinformasi_kampus`
  ADD PRIMARY KEY (`idinfo`);

--
-- Indexes for table `tbjdwlmatkulharian`
--
ALTER TABLE `tbjdwlmatkulharian`
  ADD PRIMARY KEY (`idjdwlharian`),
  ADD KEY `idjdwltetap` (`idjdwltetap`);

--
-- Indexes for table `tbjdwlmatkultetap`
--
ALTER TABLE `tbjdwlmatkultetap`
  ADD PRIMARY KEY (`idjdwltetap`),
  ADD KEY `kodematkul` (`kodematkul`),
  ADD KEY `idkelas` (`idkelas`),
  ADD KEY `idruangan` (`idruangan`),
  ADD KEY `idpegawai` (`idpegawai`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `tbmatkul`
--
ALTER TABLE `tbmatkul`
  ADD PRIMARY KEY (`kodematkul`);

--
-- Indexes for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`idpegawai`),
  ADD UNIQUE KEY `idpegawai` (`idpegawai`);

--
-- Indexes for table `tbruangan`
--
ALTER TABLE `tbruangan`
  ADD PRIMARY KEY (`idruangan`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idpegawai` (`idpegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbinformasi_kampus`
--
ALTER TABLE `tbinformasi_kampus`
  MODIFY `idinfo` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbjdwlmatkulharian`
--
ALTER TABLE `tbjdwlmatkulharian`
  MODIFY `idjdwlharian` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tbjdwlmatkultetap`
--
ALTER TABLE `tbjdwlmatkultetap`
  MODIFY `idjdwltetap` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `idkelas` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbruangan`
--
ALTER TABLE `tbruangan`
  MODIFY `idruangan` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbjdwlmatkulharian`
--
ALTER TABLE `tbjdwlmatkulharian`
  ADD CONSTRAINT `tbjdwlmatkulharian_ibfk_1` FOREIGN KEY (`idjdwltetap`) REFERENCES `tbjdwlmatkultetap` (`idjdwltetap`);

--
-- Ketidakleluasaan untuk tabel `tbjdwlmatkultetap`
--
ALTER TABLE `tbjdwlmatkultetap`
  ADD CONSTRAINT `tbjdwlmatkultetap_ibfk_1` FOREIGN KEY (`kodematkul`) REFERENCES `tbmatkul` (`kodematkul`),
  ADD CONSTRAINT `tbjdwlmatkultetap_ibfk_2` FOREIGN KEY (`idkelas`) REFERENCES `tbkelas` (`idkelas`),
  ADD CONSTRAINT `tbjdwlmatkultetap_ibfk_3` FOREIGN KEY (`idruangan`) REFERENCES `tbruangan` (`idruangan`),
  ADD CONSTRAINT `tbjdwlmatkultetap_ibfk_4` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`);

--
-- Ketidakleluasaan untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD CONSTRAINT `tbuser_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
