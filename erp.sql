-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Tem 2019, 07:00:10
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `erp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_onay` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_token` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_kadi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_sifre` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_adsoyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_foto` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_onay`, `admin_token`, `admin_kadi`, `admin_sifre`, `admin_email`, `admin_adsoyad`, `admin_foto`) VALUES
(1, '1', 'BfivQ6Z0MOK', 'admin', '96e3fa2ea21b8af255a9ec10c216b00a', 'kader.gur@ogr.sakarya.edu.tr', 'Kader Gür', 'admin.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `finans`
--

CREATE TABLE `finans` (
  `finans_id` int(11) NOT NULL,
  `fatura_no` int(11) DEFAULT NULL,
  `fatura_miktar` int(255) DEFAULT NULL,
  `fatura_firma` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fatura_odemesi` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `finans`
--

INSERT INTO `finans` (`finans_id`, `fatura_no`, `fatura_miktar`, `fatura_firma`, `fatura_odemesi`) VALUES
(1, 15643, 17550, 'Deneme Lojistik San. Tic. A.Ş.', 1),
(2, 18963, 5000, 'Lastik Kauçuk A.Ş.', 2),
(3, 45600, 150200, 'Test Firması', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`) VALUES
(1, 'Hammadde'),
(2, 'Yarı Mamül'),
(3, 'Normal Stok'),
(4, 'Montaj'),
(5, 'Demirbaş'),
(6, 'Ekipman');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stoklar`
--

CREATE TABLE `stoklar` (
  `stok_id` int(11) NOT NULL,
  `stok_kategori_id` int(255) DEFAULT NULL,
  `stok_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `stok_miktari` int(255) DEFAULT NULL,
  `stok_degeri` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `stoklar`
--

INSERT INTO `stoklar` (`stok_id`, `stok_kategori_id`, `stok_adi`, `stok_miktari`, `stok_degeri`) VALUES
(2, 1, 'Klinker', 100, 1),
(3, 1, 'Tras', 50, 1),
(5, 2, 'Çivi', 2000, 2),
(6, 2, 'Vida', 950, 2),
(8, 2, 'Dübel', 500, 2),
(9, 3, 'Kalem', 20, 2),
(11, 1, 'Kalker', 550, 1),
(12, 6, 'çekiç', 5, 2),
(13, 5, 'dolap', 13, 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `finans`
--
ALTER TABLE `finans`
  ADD PRIMARY KEY (`finans_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `stoklar`
--
ALTER TABLE `stoklar`
  ADD PRIMARY KEY (`stok_id`) USING BTREE;

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `finans`
--
ALTER TABLE `finans`
  MODIFY `finans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `stoklar`
--
ALTER TABLE `stoklar`
  MODIFY `stok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
