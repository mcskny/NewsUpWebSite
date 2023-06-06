-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Haz 2023, 08:25:34
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
  `haber_baslik` varchar(200) NOT NULL,
  `haber` longtext NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `topTick` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `haberbilgileri`
--

INSERT INTO `haberbilgileri` (`id`, `haber_baslik`, `haber`, `eklenme_tarihi`, `image`, `topTick`) VALUES
(38, 'Ukraine’s Zelensky caps frenetic week of diplomacy with plans to appear in person at Japan’s G7 summit', 'https://edition.cnn.com/2023/05/19/asia/zelensky-ukraine-travel-japan-g7-intl-hnk/index.html', '2023-05-24 20:02:34', 'https://media.cnn.com/api/v1/images/stellar/prod/230519000609-01-zelensky-051523-file.jpg?c=16x9&q=h_720,w_1280,c_fill/f_webp', 13),
(39, 'What happens when $2 trillion is sucked out of the global economy? It may not be pretty', 'https://edition.cnn.com/2023/05/19/economy/quantitative-tightening-global-impact/index.html', '2023-06-05 20:24:31', 'https://media.cnn.com/api/v1/images/stellar/prod/230131201609-economia-estados-unidos-techo-deuda.jpg?c=16x9&q=h_720,w_1280,c_fill', 4),
(40, 'Moscow bans ‘500 Americans’ from Russia including CNN journalists', 'https://edition.cnn.com/2023/05/19/europe/russia-bans-american-citizens-obama-intl/index.html', '2023-05-20 09:06:11', 'https://media.cnn.com/api/v1/images/stellar/prod/230519160328-burnett-colbert-obama-walsh-split.jpg?c=16x9&q=h_720,w_1280,c_fill', 2),
(41, 'Here’s why mosquitoes are attracted to some people more than others', 'https://edition.cnn.com/2022/10/22/world/mosquito-bite-attraction-smell-scn-trnd/index.html', '2023-05-23 17:17:40', 'https://media.cnn.com/api/v1/images/stellar/prod/230518160807-02-mosquito-human-body-odor-study-anopheles-gambiae-restricted.jpg?c=16x9&q=h_720,w_1280,c_fill', 4),
(42, 'UFC maintains links with Russian fighters and others connected to sanctioned Chechen warlord despite Ukraine invasion', 'https://edition.cnn.com/2023/05/17/sport/ufc-chechnya-ramzan-kadyrov-russia-spt-intl/index.html', '2023-05-20 09:06:09', 'https://media.cnn.com/api/v1/images/stellar/prod/230503181853-20230308-kadyrov-ufc-gfx.jpg?c=16x9&q=h_720,w_1280,c_fill', 2),
(43, 'GOP senator on White nationalists in the military: ‘I call them Americans’ – but later tries to clarify', 'https://edition.cnn.com/2023/05/11/politics/tommy-tuberville-white-nationalist-military-comments/index.html', '2023-05-20 09:06:08', 'https://media.cnn.com/api/v1/images/stellar/prod/230511152949-file-tommy-tuberville.jpg?c=16x9&q=h_720,w_1280,c_fill', 2),
(44, 'Nebraska legislature passes bill to restrict abortions at 12 weeks, gender-affirming care for those under 19', 'https://edition.cnn.com/2023/05/19/politics/nebraska-abortion-gender-affirming-care/index.html', '2023-05-19 20:56:40', 'https://media.cnn.com/api/v1/images/stellar/prod/220809135230-nebraska-capitol-file.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(45, 'Amazon is changing its deliveries behind the scenes to cut shipping times', 'https://edition.cnn.com/2023/05/15/business/amazon-delivery-packages/index.html', '2023-05-23 13:46:52', 'https://media.cnn.com/api/v1/images/stellar/prod/230515160048-amazon-delivery-station-1128-file.jpg?c=16x9&q=h_720,w_1280,c_fill', 16),
(46, 'Are these the most sustainable architectural projects in the world?', 'https://edition.cnn.com/style/article/sustainable-architecture-architectural-digest/index.html', '2023-05-20 09:01:10', 'https://media.cnn.com/api/v1/images/stellar/prod/230420105011-02-ad-sustainability-feature-yoruba-centre.jpg?c=16x9&q=h_720,w_1280,c_fill/f_webp', 2),
(47, '‘A problem in the political culture:’ Serbians call for more than disarmament to end violence after mass shootings', 'https://edition.cnn.com/2023/05/19/europe/serbia-mass-shootings-gun-violence-protests-intl/index.html', '2023-05-19 20:58:20', 'https://media.cnn.com/api/v1/images/stellar/prod/230519101314-06-serbia-mass-shootings-gun-violence-protest.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(48, 'Smoke from Canadian fires is pouring into the US and could linger for days', 'https://edition.cnn.com/2023/05/19/americas/canada-wildfires-us-smoke-air-quality/index.html', '2023-05-19 20:58:30', 'https://media.cnn.com/api/v1/images/stellar/prod/230519051223-01-canada-wildfire-051223.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(49, 'Bezos-founded Blue Origin lands major NASA moon lander project', 'https://edition.cnn.com/2023/05/19/world/nasa-lunar-lander-spacex-blue-origin-scn/index.html', '2023-05-19 20:58:47', 'https://media.cnn.com/api/v1/images/stellar/prod/230519110752-nasa-blue-origin-lunar-lander.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(50, 'Spanish police probe deadly explosion as ‘potential case of domestic violence’', 'https://edition.cnn.com/2023/05/16/europe/spain-explosion-domestic-violence-intl/index.html', '2023-05-19 20:59:00', 'https://media.cnn.com/api/v1/images/stellar/prod/230516153807-orio-spain-explosion-0516.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(51, 'Weird and wonderful planets beyond our solar system', 'https://edition.cnn.com/2015/12/04/world/gallery/exoplanets-gallery/index.html', '2023-05-19 21:00:05', 'https://media.cnn.com/api/v1/images/stellar/prod/230517130418-planet-lp-791-18-d.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(52, 'In pictures: Turkish President Recep Tayyip Erdogan', 'https://edition.cnn.com/2023/05/12/middleeast/gallery/recep-tayyip-erdogan/index.html', '2023-05-19 21:11:46', 'https://media.cnn.com/api/v1/images/stellar/prod/230512114033-01-recep-tayyip-erdogan-gallery.jpg?c=16x9&q=h_720,w_1280,c_fill', 2),
(53, 'Inside the Mars simulations preparing humans for life on the red planet', 'https://edition.cnn.com/2023/05/16/world/gallery/chapea-mars-analog-spc-scn-intl/index.html', '2023-05-22 08:45:45', 'https://media.cnn.com/api/v1/images/stellar/prod/230511141522-chapea-habitat-3.jpg?c=16x9&q=h_720,w_1280,c_fill', 5),
(54, 'Record-breaking heat scorches the western US and Canada as wildfires continue to rage', 'https://edition.cnn.com/2023/05/15/weather/pacific-northwest-canada-heat-wildfires-monday-wxn/index.html', '2023-05-20 09:07:15', 'https://media.cnn.com/api/v1/images/stellar/prod/230515083155-seattle-sun-set-file-051323.jpg?c=16x9&q=h_720,w_1280,c_fill', 2),
(55, 'Your iPhone will soon be able to replicate your voice after 15 minutes of training', 'https://edition.cnn.com/2023/05/16/tech/apple-accessibility-features/index.html', '2023-05-19 21:01:48', 'https://media.cnn.com/api/v1/images/stellar/prod/221025122959-iphone-0907.jpg?c=16x9&q=h_720,w_1280,c_fill', 1),
(56, 'Russia’s Wagner group claims to have captured Bakhmut but Ukraine says it still controls a part of it', 'https://edition.cnn.com/2023/05/20/europe/bakhmut-capture-wagner-ukraine-russia-intl/index.html', '2023-05-20 17:23:37', 'https://media.cnn.com/api/v1/images/stellar/prod/230517094642-01-bakhmut-051523.jpg?c=16x9&q=h_720,w_1280,c_fill', 2),
(57, 'How to protect yourself from iPhone thieves locking you out of your own device', 'https://edition.cnn.com/2023/04/23/tech/iphone-thief-recovery-key/index.html', '2023-05-22 08:56:43', 'https://media.cnn.com/api/v1/images/stellar/prod/230421161026-iphone-thieves-recovery-key-restricted.jpg?c=16x9&q=h_720,w_1280,c_fill', 4),
(58, 'Tesla cuts prices in the US and Europe. Shares fall', 'https://edition.cnn.com/2023/01/13/business/tesla-price-cuts/index.html', '2023-05-20 17:23:17', 'https://cdn.cnn.com/cnnnext/dam/assets/230113112446-tesla-london-030119-story-body.jpg?c=original&q=h_720,w_1280,c_fill', 2);

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
(28, 'mamish__', '58Suvasli58'),
(32, 'mamish__', '58Suvasli58'),
(33, 'mamish__', '58Suvasli58');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
