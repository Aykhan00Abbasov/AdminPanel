-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 May 2023, 12:39:30
-- Sunucu sürümü: 5.7.39-log
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uni_base`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `koika`
--

CREATE TABLE `koika` (
  `id` int(11) NOT NULL,
  `Ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Soyad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ata_adı` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SVSN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cins` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TN` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TF` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FA` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IA` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QebulTarixi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Panel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `koika`
--

INSERT INTO `koika` (`id`, `Ad`, `Soyad`, `Ata_adı`, `SVSN`, `Telefon`, `Cins`, `TN`, `TF`, `FA`, `IA`, `QebulTarixi`, `Login`, `Mail`, `Password`, `Panel`) VALUES
(1, 'Aykhan', 'Abbasov', 'Sahib', '1234567', '0000000000', 'Kişi', 'Ödənişli', 'Əyani', '', 'Kompüter elmləri', '2020-09-15', '202020', 'ayxanabbasov.83@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Müəllim/Müəllimə'),
(2, 'Mira', 'Miracles', 'Mr', '1234567', '0000000000', 'Qadın', 'Ödənişli', 'Əyani', '', 'Nəqliyyat mühəndisliyi', '2020-09-15', '2020020', 'ayxan.abbasov.2003@list.ru', '202cb962ac59075b964b07152d234b70', 'Müəllim/Müəllimə'),
(3, 'Tural', 'Məmmədov', 'Nemət', '1234567', '0000000000', 'Kişi', 'Ödənişli', 'Əyani', '', 'Kompüter elmləri', '2020-09-15', '202023', 'example@mail.ru', '202cb962ac59075b964b07152d234b70', 'Tələbə');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `koika`
--
ALTER TABLE `koika`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `koika`
--
ALTER TABLE `koika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
