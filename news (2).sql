-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 May 2023, 07:20:33
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `news`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberbilgileri`
--

CREATE TABLE `haberbilgileri` (
  `id` int(11) NOT NULL,
  `haber_baslik` varchar(100) NOT NULL,
  `haber` varchar(250) NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `haberbilgileri`
--

INSERT INTO `haberbilgileri` (`id`, `haber_baslik`, `haber`, `eklenme_tarihi`) VALUES
(6, 'Seçim Sonuçları Açıklandı', 'Erdoğan yeniden cumhurbaşkanı oldu. ', '2023-05-14 19:04:47'),
(7, 'Adıyamanda Deprem!', 'Son Dakika! Adıyamanda 4.8 büyüklüğünde deprem meydana geldi!', '2023-05-15 11:52:10'),
(8, 'Kılıçdaroğlu intihar etti!', '12. Yenilgiyi kaldıramayan kılıçdaroğlu chp genel merkez binasından atladı', '2023-05-15 14:24:05'),
(9, 'Konyada gelişmeler başladı!', 'Konyada uçan arabaların ortaya çıkması şaşkınlık yarattı.', '2023-05-15 14:25:27'),
(10, 'Dolar 0.25 tl!', 'Dolar anlık bir düşüş yaşadı vatandaş şaşkın', '2023-05-15 14:27:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_data`
--

CREATE TABLE `user_data` (
  `id` int(16) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user_data`
--

INSERT INTO `user_data` (`id`, `user_name`, `user_password`) VALUES
(28, 'mamish__', '58Suvasli58');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberbilgileri`
--
ALTER TABLE `haberbilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberbilgileri`
--
ALTER TABLE `haberbilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
