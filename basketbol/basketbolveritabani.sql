-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Oca 2023, 02:54:06
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basketbolveritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

DROP TABLE IF EXISTS `haberler`;
CREATE TABLE IF NOT EXISTS `haberler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `konu` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `konu`) VALUES
(71, 'Kanye West bir tweet attı, ortalık fena karıştı!', 'Kim Kardashian ve Kanye West’in evliliği daha birkaç gün önce bitmiş, çift avukatları aracılığıyla yaptıkları anlaşmaya imza \r\natarak boşanma işlemlerini sonuçlandırmıştı. Herkes bu ayrılığın detaylarını ve çiftin boşanma anlaşmasında uzlaşmaya \r\nvardıkları maddeleri konuşurken bir anda yaşananlar ortalığı ayağa kaldırdı. Son zamanlardaki sivri çıkışlarıyla gündemde \r\nolan Kanye West öyle bir şey dedi ki…\r\n“ABD’li rap yıldızı Kanye West ile televizyon yıldızı Kim Kardashian’ın boşanma davasında anlaşmaya varıldı. Buna göre \r\nWest, 4 çocuğu için Kardashian’a ayda 200 bin dolar nafaka ödeyecek.”'),
(84, 'Sinan Güler basketbolculuk kariyerini noktaladı', 'Darüşşafaka\'da forma giyen milli basketbolcu Sinan Güler, kariyerini noktaladı. 39 yaşındaki tecrübeli oyuncu, Daçka\'nın \r\nHapoel Bank Yahav ile oynadığı maç öncesinde düzenlenen törenle basketbola veda etti.\r\nTürk basketbolunun yetiştirdiği önemli isimlerden biri olan ve kariyerinde birçok başarıya imza atan Sinan Güler, \r\nDarüşşafaka\'nın yanı sıra Beşiktaş, Anadolu Efes, Galatasaray ve Fenerbahçe formalarını giydi.'),
(85, 'Basketbolda haftanın programı', 'Basketbolda erkekler ve kadınlarda süper liglerin yanı sıra Misli.com Türkiye Basketbol Ligi\'ne 12. hafta maçlarıyla devam \r\nedilecek.\r\n\r\nTürkiye Basketbol Federasyonundan yapılan açıklamaya göre, Türkiye Sigorta Basketbol Süper Ligi, ING Kadınlar \r\nBasketbol Süper Ligi ve erkeklerde bir alt lig Misli.com Türkiye Basketbol Ligi\'nde haftanın programı şöyle:\r\n\r\nTürkiye Sigorta Basketbol Süper Ligi\r\n\r\nBugün:\r\n\r\n13.00 Beşiktaş Emlakjet-Darüşşafaka (BJK Emlakjet)\r\n\r\n15.30 Galatasaray Nef-Türk Telekom (Sinan Erdem)\r\n\r\n18.00 Pınar Karşıyaka-Frutti Extra Bursaspor (Mustafa Kemal Atatürk Karşıyaka)\r\n\r\n20.30 Gaziantep Basketbol-Yukatel Merkezefendi Belediyesi Basket (Karataş Şahinbey)\r\n\r\n25 Aralık Pazar:\r\n\r\n13.00 AYOS Konyaspor Basketbol-Onvo Büyükçekmece Basketbol (Selçuklu Belediyesi)\r\n\r\n15.30 Manisa Büyükşehir Belediyespor-Bahçeşehir Koleji (Muradiye)\r\n\r\n18.00 TOFAŞ-Aliağa Petkimspor (TOFAŞ)\r\n\r\n19.00 Fenerbahçe Beko-Anadolu Efes (Ülker Spor ve Etkinlik)\r\n\r\n ING Kadınlar Basketbol Süper Ligi\r\n\r\nBugün:\r\n\r\n13.00 BOTAŞ-Tufan Metalurji Hatay Büyükşehir Belediyespor (Ankara)\r\n\r\nYarın:\r\n\r\n14.00 Fenerbahçe Alagöz Holding-Rize Belediyespor (Fenerbahçe Metro Enerji)\r\n\r\n15.00 Bursa Uludağ Basketbol-Çankaya Üniversitesi (Naim Süleymanoğlu)\r\n\r\n16.00 Emlak Konut-Beşiktaş (Başakşehir Spor Kompleksi)\r\n\r\n25 Aralık Pazar:\r\n\r\n15.30 Nesibe Aydın-Antalya Toroslar Basketbol (TOBB ETÜ)\r\n\r\n16.00 Melikgazi Kayseri Basketbol-Galatasaray Çağdaş Faktoring (Kadir Has Kongre Merkezi)\r\n\r\n16.00 ÇBK Mersin Yenişehir Belediyesi-OGM Ormanspor (Servet Tazegül)\r\n\r\nMisli.com Türkiye Basketbol Ligi\r\n\r\nBugün:\r\n\r\n18.00 Ankaragücü Mamak Belediyesi-Bornova Belediyesi Karşıyaka (Mamak Belediyesi Hidayet Türkoğlu)\r\n\r\nYarın:\r\n\r\n14.00 Antalya Güneşi-Mersin Büyükşehir Belediyesi (Kepez Turgut Özal)\r\n\r\n14.00 Balıkesir Büyükşehir Belediyespor-Yılyak Samsunspor Basketbol (Kurtdereli)\r\n\r\n15.45 Kocaeli Büyükşehir Belediye Kağıtspor-Fenerbahçe Koleji DS Energy (Şehit Polis Recep Topaloğlu)\r\n\r\n17.30 Akran Gemlik Basketbol-Gölbaşı Belediyesi TED Ankara Kolejliler (Gemlik)\r\n\r\n25 Aralık Pazar:\r\n\r\n14.00 Sigortam.net-Finalspor (Akatlar Spor ve Kültür Kompleksi)\r\n\r\n15.45 OGM Ormanspor-Depomaxx Haremspor (M. Sait Zarifoğlu)\r\n\r\n26 Aralık Pazartesi:\r\n\r\n18.00 Çağdaş Bodrumspor-Semt77 Yalovaspor (Bodrum)'),
(86, 'Anadolu Efes, Basketbol Süper Ligi\'nde ilk yarıyı galibiyetle kapattı', 'Türkiye Sigorta Basketbol Süper Ligi 15. hafta maçında Anadolu Efes, Yukatel Merkezefendi Belediyesi Basket’i 96 - 77 \r\nmağlup etmeyi başardı.\r\n\r\nAnadolu Efes, Türkiye Sigorta Basketbol Süper Ligi 15’inci hafta karşılaşmasında Yukatel Merkezefendi Belediyesi Basket’i \r\nkendi sahasında 96-77 mağlup ederek 10’uncu galibiyetini aldı. Anadolu Efes’te Shane Larkin ve Amath M’Baye 17 sayıyla \r\noynarken, deplasman ekibinde Max Heidegger’in 22 sayısı galibiyet için yeterli olmadı.'),
(87, 'Alperen Şengünlü Houston Rockets\'tan üst üste 10. yenilgi', 'NBA\'de Alperen Şengün\'ün de formasını giydiği Houston Rockets, Los Angeles Clippers ile kozlarını paylaştı.\r\n\r\nMilli basketbolcu Alperen Şengün performansıyla dikkat çekse de Rockets, Clippers karşısında istediğini alamadı.\r\n\r\nSahadan 100-121\'lik galibiyetle ayrılan Los Angeles Clippers bu sezonki 23. galibiyetine ulaştı. Clippers üst üste gelen \r\nkötü sonuçların ardından toparlanma evresine geçti.\r\n\r\nAlperenli Houston Rockets ise kötü gidişatını bu maçta da sürdürdü. Sahadan yenilgiyle ayrılan Rockets üst üste 10. \r\nmağlubiyetini yaşadı.\r\n\r\nBatı Konferansı\'nın son sırasında bulunan Rockets şu ana kadar 10 galibiyet elde edebildi.'),
(88, 'Lillard yıldızlaştı: Portland yenilgi serisine son verdi', 'Amerikan Basketbol Ligi\'nde (NBA) Portland Trail Blazers, konuk ettiği Dallas Mavericks\'i 136-119 yenerek 5 maçlık \r\nmağlubiyet serisine son verdi.\r\n\r\nNBA\'e 7 maçla devam edildi. Damian Lillard\'ın 36 sayı ve 10 asistle oynadığı maçta Portland Trail Blazers, Dallas \r\nMavericks\'i 136-119 yenerek 5 maçlık mağlubiyet serisini sonlandırdı.\r\n\r\nEv sahibi ekipte Jusuf Nurkic, 22 sayı ve 11 ribauntla galibiyete katkı verdi.\r\n\r\nDallas Mavericks\'te ise Luka Doncic, maçı 15 sayıyla tamamlayarak kendi adına sezonun en düşük performanslarından \r\nbirini gösterdi.\r\n\r\nKonuk ekipte Spencer Dinwiddie 25, Reggie Bullock ise 24 sayıyla maçı tamamladı.\r\n\r\nMemphis Grizzlies\'dan 9 maçlık galibiyet serisi\r\nMemphis Grizzlies, deplasmanda Indiana Pacers\'ı 130-112 yenerek NBA\'in şu anki en uzun galibiyet serisini 9 maça \r\nçıkardı.\r\n\r\nGrizzlies\'da Desmond Bane 25 sayı kaydederken, Ja Morant ise 23 sayı ve 10 asistle \"double-double\" yaptı.\r\n\r\nIndiana Pacers\'ta Chris Duarte\'nin 25 sayısı mağlubiyeti engellemeye yetmedi.'),
(89, 'Sabonis triple double yaptı, Sacramento kazandı', 'NBA\'e 9 maçla devam edildi. Batı Konferansı lideri Nuggets, Clippers\'ı 12 sayı farkla geçerek bu sezon 29. galibiyetini elde \r\netti.\r\n\r\nNuggets\'ta Jamal Murray 24 sayı, 8 ribaunt, 4 asistle takımının en skorer ismi olurken, Michael Porter Jr. 22, Aaron Gordon \r\n17, Kentavious Caldwell-Pope 14 sayı kaydetti.'),
(90, 'Fenerbahçe Beko\'dan Nemanja Bjelica için sakatlık açıklaması', 'Fenerbahçe Beko, sakatlığı bulunan Nemanja Bjelica ile ilgili açıklama yayınladı.\r\n\r\nKulüpten yapılan açıklamada, Bjelica\'nın idman yaptığı esnada daha önce sakatlık yaşadığı bacağında hissettiği ağrı sonrası \r\nbaldır bölgesinde ödem tespit edildiği belirtildi.\r\n\r\nFenerbahçe Beko\'nun açıklaması şu şekilde:\r\n\r\n\"Bir süredir kendisi için belirlenen bireysel idman ve tedavi programını takip eden ve bu süreç kapsamında bu hafta takım \r\nidmanlarına dahil olması planlanan Nemanja Bjelica, yaptığı bireysel antrenman esnasında daha önce sakatlık yaşadığı \r\nbacağında ağrı hissetmiş ve yapılan kontroller sonucunda baldır bölgesinde ödem tespit edilmiştir.\r\n \r\nSporcumuz, bu bölgedeki ödemin geçmesine yönelik tedavi ve bireysel idman programını takip etmektedir.\r\n \r\nDurumu günlük olarak değerlendirilecek olan Nemanja Bjelica’nın önümüzdeki hafta içerisinde kademeli olarak takım \r\nidmanlarına başlaması planlanmaktadır.\"'),
(91, 'FIBA Şampiyonlar Ligi !', 'FIBA Şampiyonlar Ligi\'nin son 16 turuna yükselme mücadelesi play-in etabında Bahçeşehir Koleji, üçüncü maçta bugün \r\nBelçika\'nın Filou Oostende takımını ağırlayacak.\r\n\r\nÜlker Spor ve Etkinlik Salonu\'nda oynanacak karşılaşma saat 20.00\'de başlayacak. Karşılaşma NTV\'den yayımlanacak.'),
(92, 'LeBron James NBA tarihine geçti', 'LeBron James, Philadlephia karşısındaki performansıyla lig tarihinde 38 bin sayı barajını Kareem Abdul-Jabbar\'ın ardından \r\ngeçen ikinci oyuncu oldu.\r\n\r\nKaydettiği 35 sayıyla kariyerinde 38 bin 24 sayıya ulaşan James\'in Kareem Abdul-Jabbar\'ı geçebilmek için 364 sayıya \r\nihtiyacı var.\r\n\r\nOcak 2006\'da LeBron James, 5 bin sayı barajını geçerek NBA tarihinde bu başarıyı elde eden en genç oyuncu olmuştu. \r\nYıldız oyuncu 2008\'de 10 bin, 2013\'de 20 bin, 2018\'de ise 30 bin sayı barajını geride bırakmıştı.\r\n\r\nNBA kariyerini 1989 yılında tamamlayan Kareem Abdul-Jabbar, NBA\'de kaydettiği 38 bin 387 sayı ile tarihin en fazla sayı \r\natan oyuncu konumunda bulunuyor.'),
(93, 'Jokic\'in son saniye basketi galibiyeti getirdi', 'NBA\'de normal sezona 8 maçla devam edildi.\r\n\r\nBatı Konferansı takımlarından Denver Nuggets, konuk ettiği Orlando Magic\'i Nikola Jokic\'in son saniye basketiyle 119-116 \r\nmağlup ederek evinde üst üste 13. galibiyetini elde etti.\r\n\r\n\r\nDenver Nuggets\'ta Jokic, 17 sayı, 10 ribaunt, 14 asistle \"triple-double\" yaptı.\r\n\r\nÜst üste 6. maçından galibiyet çıkaran Nuggets\'ta Aaron Gordon, 26 sayıyla maçın en skorer oyuncusu oldu.\r\n Triple-double ve maç kazandıran son saniye step-back üçlüğü');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullanici`, `sifre`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oneriler`
--

DROP TABLE IF EXISTS `oneriler`;
CREATE TABLE IF NOT EXISTS `oneriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_turkish_ci NOT NULL,
  `message` text COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `oneriler`
--

INSERT INTO `oneriler` (`id`, `ad`, `email`, `message`) VALUES
(3, 'eray', 'erayyalman123@gmail.com', 'Buraya bakarlar...'),
(5, 'asko', 'dadad@fafda', 'seni seviyorum'),
(6, 'asko', 'dadad@fafda', 'seni seviyorum');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullaniciAdi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kullaniciAdi` (`kullaniciAdi`),
  UNIQUE KEY `kullaniciAdi_2` (`kullaniciAdi`),
  UNIQUE KEY `kullaniciAdi_3` (`kullaniciAdi`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `kullaniciAdi`, `sifre`) VALUES
(21, 'eray', 'yalman', 'eray', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
