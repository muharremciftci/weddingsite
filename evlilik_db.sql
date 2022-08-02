-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Ağu 2022, 19:26:25
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `evlilik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `firma_adi` varchar(256) NOT NULL,
  `firma_resmi_adi` varchar(255) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `keywords` varchar(256) NOT NULL,
  `google_analytics` varchar(255) NOT NULL,
  `yandex_metrica` varchar(255) NOT NULL,
  `google_web_master` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `yandex_web_master` varchar(255) NOT NULL,
  `bing_web_master` varchar(255) DEFAULT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `telefon2` varchar(50) DEFAULT NULL,
  `faks` varchar(50) NOT NULL,
  `adres` longtext NOT NULL,
  `ticari_sicil_no` varchar(50) DEFAULT NULL,
  `vergi_no` varchar(30) DEFAULT NULL,
  `vergi_dairesi` varchar(50) DEFAULT NULL,
  `maps` longtext DEFAULT NULL,
  `web_sitesi` varchar(100) NOT NULL,
  `web_sitesi_sade` varchar(100) NOT NULL DEFAULT '',
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `whatsapp` varchar(150) DEFAULT NULL,
  `whatsapp_buton_gosterim` int(1) DEFAULT 0,
  `whatsapp_buton_gosterim_konum` int(1) DEFAULT 1,
  `bayi_firma_adi` varchar(100) NOT NULL,
  `bayi_web_sitesi` varchar(100) NOT NULL,
  `bayi_web_sitesi_sade` varchar(100) NOT NULL,
  `bayi_telefon` varchar(50) NOT NULL,
  `bayi_ticari_sicil_no` varchar(30) NOT NULL,
  `bayi_vergi_no` varchar(30) NOT NULL,
  `bayi_vergi_dairesi` varchar(50) NOT NULL,
  `bayi_logo` varchar(255) NOT NULL,
  `bayi_giris_ekrani_foto` varchar(255) NOT NULL,
  `mail_sunucu_adresi` varchar(50) DEFAULT NULL,
  `mail_isim` varchar(50) DEFAULT NULL,
  `mail_adresi` varchar(50) DEFAULT NULL,
  `mail_sifresi` varchar(50) DEFAULT NULL,
  `mail_secure` varchar(50) DEFAULT NULL,
  `mail_port` varchar(10) DEFAULT NULL,
  `bilgi_mail_adresi` varchar(50) DEFAULT NULL,
  `ust_slogan` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `modalbanner` varchar(255) DEFAULT NULL,
  `admin_goruntuleme` varchar(255) DEFAULT NULL,
  `en_title` varchar(255) DEFAULT '',
  `en_ust_slogan` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `firma_adi`, `firma_resmi_adi`, `title`, `description`, `keywords`, `google_analytics`, `yandex_metrica`, `google_web_master`, `yandex_web_master`, `bing_web_master`, `ad`, `soyad`, `eposta`, `telefon`, `telefon2`, `faks`, `adres`, `ticari_sicil_no`, `vergi_no`, `vergi_dairesi`, `maps`, `web_sitesi`, `web_sitesi_sade`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `whatsapp`, `whatsapp_buton_gosterim`, `whatsapp_buton_gosterim_konum`, `bayi_firma_adi`, `bayi_web_sitesi`, `bayi_web_sitesi_sade`, `bayi_telefon`, `bayi_ticari_sicil_no`, `bayi_vergi_no`, `bayi_vergi_dairesi`, `bayi_logo`, `bayi_giris_ekrani_foto`, `mail_sunucu_adresi`, `mail_isim`, `mail_adresi`, `mail_sifresi`, `mail_secure`, `mail_port`, `bilgi_mail_adresi`, `ust_slogan`, `favicon`, `modalbanner`, `admin_goruntuleme`, `en_title`, `en_ust_slogan`) VALUES
(1, 'Sümeyra ve Çağrı', 'Sümeyra ve Çağrı', 'Sümeyra ve Çağrı | Biz Evlenmeye Karar Verdik', 'Bu mutlu günümüzde sizleri de aramızda görmek isteriz. Pandemi süreci bizleri ayırmaya çalışsada sizler için bir web sitesi hazırladık. Yanımızda olduğunuzu biliyoruz. Şimdiden teşekkürler :)', '', '', '', '', '', '', 'Çağrı', 'Günay', 'bilgi@sumeyravecagri.com', '', '', '', '', '', '', '', '', 'https://www.sumeyravecagri.com', 'www.sumeyravecagri.com', 'facebook', 'twitter', 'youtube', 'instagram', 'linkedin', '0 554 392 5200', 1, 0, 'Fiberçözüm Yazılım Teknolojileri', 'https://www.fibercozum.com', 'www.fibercozum.com', '0 850 303 38 00', '', '', '', 'fiberlogo.png', 'backgroundfiber.jpg', 'mail.sumeyravecagri.com', 'Sümeyra ve Çağrı', 'bilgi@sumeyravecagri.com', '8u$kn06NPz-j', 'ssl', '465', 'sumeyra3krky@gmail.com', '', 'b5f9431e019c.jpg', 'c5d0e54b909e.jpg', '001,002,003,004,005,006,007,008,009,010,011,012,013,014,015,016,017,019,018', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `baslik_dil_ayarlari`
--

CREATE TABLE `baslik_dil_ayarlari` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `default_deger` varchar(255) DEFAULT NULL,
  `en_baslik` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `baslik_dil_ayarlari`
--

INSERT INTO `baslik_dil_ayarlari` (`id`, `baslik`, `default_deger`, `en_baslik`) VALUES
(1, 'Anasayfa', 'Anasayfa', 'Homepage'),
(2, 'Haberler', 'Haberler', 'News'),
(3, 'Blog', 'Blog', 'Blog'),
(4, 'Referanslar', 'Referanslar', 'References'),
(5, 'Fotoğraf Galerisi', 'Fotoğraf Galerisi', 'Photo Gallery'),
(6, 'Video Galeri', 'Video Galeri', 'Video Gallery'),
(7, 'İletişim', 'İletişim', 'Contact'),
(8, 'İnsan Kaynakları', 'İnsan Kaynakları', 'Human Resources'),
(9, 'Sıkcaç Sorulan Sorular', 'Sıkcaç Sorulan Sorular', 'Frequently Asked Questions'),
(10, 'Talep Formu', 'Talep Formu', 'Request Form'),
(11, 'Detay', 'Detay', 'Detail'),
(12, 'Kapat', 'Kapat', 'Close'),
(13, 'Telefon', 'Telefon', 'Phone'),
(14, 'Faks', 'Faks', 'Fax'),
(15, 'E-Posta', 'E-Posta', 'E-Mail'),
(16, 'Adres', 'Adres', 'Address'),
(17, '<p>Mesaj : $mesaj</p>', 'Ad / Soyad', 'Name / Surname'),
(18, 'Mesajınız', 'Mesajınız', 'Message'),
(19, 'Mesajınız başarıyla ulaştı.', 'Mesajınız başarıyla ulaştı.', 'Your contact message has been successfully received.'),
(20, 'Formda eksik alan bıraktınız !', 'Formda eksik alan bıraktınız !', 'You left missing space in the form!'),
(21, 'Her hakkı saklıdır.', 'Her hakkı saklıdır.', 'All rights reserved.'),
(22, 'Halaya katılmak için adınızı ve soyadınızı yazmalısınız.', 'Halaya katılmak için adınızı ve soyadınızı yazmalısınız.', 'Halaya katılmak için adınızı ve soyadınızı yazmalısınız.'),
(23, 'Halaya katıldınız. Haydi bakalım...', 'Halaya katıldınız. Haydi bakalım...', 'Halaya katıldınız. Haydi bakalım...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `kisa_aciklama` longtext DEFAULT NULL,
  `aciklama` longtext DEFAULT NULL,
  `populer` int(1) DEFAULT 0,
  `durum` int(1) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` longtext DEFAULT NULL,
  `seo_aciklama` longtext DEFAULT NULL,
  `kategori` int(1) DEFAULT 1,
  `en_baslik` varchar(255) DEFAULT '',
  `en_kisa_aciklama` longtext DEFAULT NULL,
  `en_aciklama` longtext DEFAULT NULL,
  `en_seo_title` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `baslik`, `kisa_aciklama`, `aciklama`, `populer`, `durum`, `seo_title`, `seo_keywords`, `seo_aciklama`, `kategori`, `en_baslik`, `en_kisa_aciklama`, `en_aciklama`, `en_seo_title`) VALUES
(1, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /><br />Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 1, 1, '', '', '', 1, '', NULL, NULL, ''),
(2, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /><br />Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n', 1, 1, NULL, NULL, NULL, 1, '', NULL, NULL, ''),
(3, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /><br />Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n', 1, 1, NULL, NULL, NULL, 1, '', NULL, NULL, ''),
(4, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /><br />Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n', 1, 1, NULL, NULL, NULL, 1, '', NULL, NULL, ''),
(5, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&lt;br /&gt;&lt;br /&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 1, 1, '', '', '', 2, '', NULL, NULL, ''),
(6, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&lt;br /&gt;&lt;br /&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n', 1, 1, NULL, NULL, NULL, 2, '', NULL, NULL, ''),
(7, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&lt;br /&gt;&lt;br /&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n', 1, 1, NULL, NULL, NULL, 2, '', NULL, NULL, ''),
(8, 'Lorem Ipsum Dolor Sit Amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&lt;br /&gt;&lt;br /&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n', 1, 1, NULL, NULL, NULL, 2, '', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dil_ayarlari`
--

CREATE TABLE `dil_ayarlari` (
  `id` int(11) NOT NULL,
  `dil_secenegi` int(1) DEFAULT 0,
  `dil_1_durum` int(1) DEFAULT 0,
  `dil_1_adi` varchar(255) DEFAULT NULL,
  `dil_1_on_eki` varchar(255) DEFAULT NULL,
  `dil_2_durum` int(1) DEFAULT 0,
  `dil_2_adi` varchar(255) DEFAULT NULL,
  `dil_2_on_eki` varchar(255) DEFAULT NULL,
  `dil_3_durum` int(1) DEFAULT 0,
  `dil_3_adi` varchar(255) DEFAULT NULL,
  `dil_3_on_eki` varchar(255) DEFAULT NULL,
  `dil_4_durum` int(1) DEFAULT 0,
  `dil_4_adi` varchar(255) DEFAULT NULL,
  `dil_4_on_eki` varchar(255) DEFAULT NULL,
  `dil_5_durum` int(1) DEFAULT 0,
  `dil_5_adi` varchar(255) DEFAULT NULL,
  `dil_5_on_eki` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `dil_ayarlari`
--

INSERT INTO `dil_ayarlari` (`id`, `dil_secenegi`, `dil_1_durum`, `dil_1_adi`, `dil_1_on_eki`, `dil_2_durum`, `dil_2_adi`, `dil_2_on_eki`, `dil_3_durum`, `dil_3_adi`, `dil_3_on_eki`, `dil_4_durum`, `dil_4_adi`, `dil_4_on_eki`, `dil_5_durum`, `dil_5_adi`, `dil_5_on_eki`) VALUES
(1, 1, 1, 'İngilizce', 'en', 0, '', '', 0, '', '', 0, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `aciklama` longtext DEFAULT NULL,
  `durum` int(1) DEFAULT NULL,
  `sira` int(3) DEFAULT NULL,
  `en_baslik` varchar(255) DEFAULT '',
  `en_aciklama` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `baslik`, `aciklama`, `durum`, `sira`, `en_baslik`, `en_aciklama`) VALUES
(1, 'Fotoğraf Galerisi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri_resimler`
--

CREATE TABLE `galeri_resimler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `galeri_id` int(11) DEFAULT NULL,
  `secili` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `galeri_resimler`
--

INSERT INTO `galeri_resimler` (`id`, `baslik`, `galeri_id`, `secili`) VALUES
(1, '800x600.png', 1, 0),
(2, '800x600.png', 1, 0),
(3, '800x600.png', 1, 0),
(4, '800x600.png', 1, 0),
(5, '800x600.png', 1, 0),
(6, '800x600.png', 1, 0),
(7, '800x600.png', 1, 0),
(8, '800x600.png', 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `halay`
--

CREATE TABLE `halay` (
  `id` int(11) NOT NULL,
  `ad` longtext NOT NULL,
  `soyad` longtext NOT NULL,
  `ikon` int(1) NOT NULL DEFAULT 0,
  `tarih` varchar(30) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `durum` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icon_tasarimi`
--

CREATE TABLE `icon_tasarimi` (
  `id` int(11) NOT NULL,
  `icon_adi` varchar(255) DEFAULT NULL,
  `aciklama` longtext DEFAULT NULL,
  `icon_url` varchar(255) DEFAULT NULL,
  `durum` int(1) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `en_icon_adi` varchar(255) DEFAULT '',
  `en_aciklama` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `icon_tasarimi`
--

INSERT INTO `icon_tasarimi` (`id`, `icon_adi`, `aciklama`, `icon_url`, `durum`, `foto`, `en_icon_adi`, `en_aciklama`) VALUES
(1, 'Lorem Ipsum 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.fibercozum.com', 1, '800x600.png', '', NULL),
(2, 'Lorem Ipsum 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'https://www.fibercozum.com', 1, '800x600.png', '', NULL),
(3, 'Lorem Ipsum 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 'https://www.fibercozum.com', 1, '800x600.png', '', NULL),
(4, 'Lorem Ipsum 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://www.fibercozum.com', 1, '800x600.png', '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` longtext NOT NULL,
  `eposta` longtext NOT NULL,
  `soyad` longtext NOT NULL,
  `mesaj` longtext NOT NULL,
  `tarih` varchar(30) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `kategori` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `kisa_aciklama` longtext DEFAULT NULL,
  `aciklama` longtext DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `ust_kategori` int(11) DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `populer` int(1) DEFAULT NULL,
  `durum` int(1) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` longtext DEFAULT NULL,
  `seo_aciklama` longtext DEFAULT NULL,
  `en_baslik` varchar(255) DEFAULT '',
  `en_kisa_aciklama` longtext DEFAULT NULL,
  `en_aciklama` longtext DEFAULT NULL,
  `en_seo_title` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `baslik`, `kisa_aciklama`, `aciklama`, `foto1`, `ust_kategori`, `sira`, `populer`, `durum`, `seo_title`, `seo_keywords`, `seo_aciklama`, `en_baslik`, `en_kisa_aciklama`, `en_aciklama`, `en_seo_title`) VALUES
(1, 'Ana Kategori', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '800x600.png', 0, 1, 1, 1, '', '', '', 'Home Category', NULL, NULL, ''),
(2, 'Alt Kategori 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '800x600.png', 1, 1, 0, 1, '', '', '', 'Sub Category 1', NULL, NULL, ''),
(3, 'Alt Kategori 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '800x600.png', 1, 2, 0, 1, NULL, NULL, NULL, 'Sub Category 2', NULL, NULL, ''),
(4, 'Alt Kategori 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', '800x600.png', 1, 3, 0, 1, '', '', '', 'Sub Category 3', NULL, NULL, ''),
(5, 'Alt Kategori 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', '800x600.png', 1, 4, 0, 1, '', '', '', 'Sub Category 4', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `hesap_adi` varchar(100) NOT NULL,
  `kullanici_adi` varchar(100) DEFAULT NULL,
  `sifre` varchar(100) DEFAULT NULL,
  `sayfa_goruntuleme` varchar(255) NOT NULL,
  `durum` int(1) NOT NULL,
  `yonetim` int(1) DEFAULT 0,
  `bayi` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `hesap_adi`, `kullanici_adi`, `sifre`, `sayfa_goruntuleme`, `durum`, `yonetim`, `bayi`) VALUES
(9, 'SuperAdmin', 'kocaelibilisim', 'a845448782d54b61973fedbb7ca1fe9a', '001,002,003,004,005,006,007,008,009,010,011,012,013,014,015,016,017,018,019', 1, 1, 1),
(14, 'Çağrı Günay', 'cgrgunay', '25f9e794323b453885f5181f1b624d0b', '001,002,003,004,005,006,007,008,009,010,011,012,013,014,015,016,017,018', 1, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozellikler`
--

CREATE TABLE `ozellikler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `sira` int(11) DEFAULT 0,
  `notlar` varchar(255) DEFAULT NULL,
  `en_baslik` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `ozellikler`
--

INSERT INTO `ozellikler` (`id`, `baslik`, `sira`, `notlar`, `en_baslik`) VALUES
(4, 'Özellik 1', 1, 'Not 1', ''),
(5, 'Özellik 2', 2, 'Not 2', ''),
(6, 'Özellik 3', 3, 'Not 3', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozellik_degerleri`
--

CREATE TABLE `ozellik_degerleri` (
  `id` int(11) NOT NULL,
  `deger` varchar(255) DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `ozellik_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `ozellik_degerleri`
--

INSERT INTO `ozellik_degerleri` (`id`, `deger`, `sira`, `ozellik_id`) VALUES
(6, 'Değer 1.1', 1, 4),
(7, 'Değer 1.2', 2, 4),
(8, 'Değer 1.3', 3, 4),
(9, 'Değer 1.4', 4, 4),
(10, 'Değer 2.1', 1, 5),
(11, 'Değer 2.2', 2, 5),
(12, 'Değer 2.3', 3, 5),
(13, 'Değer 3.1', 1, 6),
(14, 'Değer 3.2', 2, 6),
(15, 'Değer 3.3', 3, 6),
(16, 'Değer 3.4', 4, 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `para_birimi`
--

CREATE TABLE `para_birimi` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `para_birimi`
--

INSERT INTO `para_birimi` (`id`, `baslik`) VALUES
(1, 'USD'),
(2, 'EUR'),
(3, 'TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `aciklama` varchar(256) NOT NULL DEFAULT '',
  `foto` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `sira` int(11) NOT NULL,
  `durum` int(1) NOT NULL,
  `en_baslik` varchar(255) DEFAULT '',
  `en_aciklama` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `baslik`, `aciklama`, `foto`, `url`, `sira`, `durum`, `en_baslik`, `en_aciklama`) VALUES
(1, 'Referans 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', '800x600.png', 'https://www.fibercozum.com', 1, 1, '', NULL),
(2, 'Referans 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', '800x600.png', 'https://www.fibercozum.com', 2, 1, '', NULL),
(3, 'Referans 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', '800x600.png', 'https://www.fibercozum.com', 3, 1, '', NULL),
(4, 'Referans 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', '800x600.png', 'https://www.fibercozum.com', 4, 1, '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `secili` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `baslik`, `urun_id`, `secili`) VALUES
(1, '800x600.png', 1, 1),
(2, '800x600.png', 2, 1),
(3, '800x600.png', 3, 1),
(4, '800x600.png', 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler_blog`
--

CREATE TABLE `resimler_blog` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `sayfa_id` int(11) DEFAULT NULL,
  `secili` varchar(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `resimler_blog`
--

INSERT INTO `resimler_blog` (`id`, `baslik`, `sayfa_id`, `secili`) VALUES
(1, '800x600.png', 1, '0'),
(2, '800x600.png', 2, '0'),
(3, '800x600.png', 3, '0'),
(4, '800x600.png', 4, '0'),
(5, '800x600.png', 5, '0'),
(6, '800x600.png', 6, '0'),
(7, '800x600.png', 7, '0'),
(8, '800x600.png', 8, '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler_sayfalar`
--

CREATE TABLE `resimler_sayfalar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `sayfa_id` int(11) DEFAULT NULL,
  `secili` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `resimler_sayfalar`
--

INSERT INTO `resimler_sayfalar` (`id`, `baslik`, `sayfa_id`, `secili`) VALUES
(1, '800x600.png', 2, 1),
(2, '800x600.png', 2, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `aciklama` longtext DEFAULT NULL,
  `silme` int(1) DEFAULT NULL,
  `durum` int(1) DEFAULT NULL,
  `populer` int(1) DEFAULT NULL,
  `url_yonlendirme` varchar(255) DEFAULT NULL,
  `ust_kategori` int(11) DEFAULT 0,
  `sira` int(3) DEFAULT NULL,
  `ilk_resim_konum` int(1) DEFAULT 0,
  `background` varchar(255) DEFAULT '',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` longtext DEFAULT NULL,
  `seo_aciklama` longtext DEFAULT NULL,
  `en_baslik` varchar(255) DEFAULT '',
  `en_aciklama` longtext DEFAULT NULL,
  `en_seo_title` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `baslik`, `aciklama`, `silme`, `durum`, `populer`, `url_yonlendirme`, `ust_kategori`, `sira`, `ilk_resim_konum`, `background`, `seo_title`, `seo_keywords`, `seo_aciklama`, `en_baslik`, `en_aciklama`, `en_seo_title`) VALUES
(1, 'Kurumsal', '', 0, 1, 1, '', 0, 1, 0, '1920x300.png', '', '', '', 'Corporate', NULL, ''),
(2, 'Hakkımızda', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?<br /><br />But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 1, 1, 0, '', 1, 1, 0, '1920x300.png', '', '', '', 'About Us', NULL, ''),
(3, 'Vizyon ve Misyon', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?<br /><br />But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\n', 1, 1, 0, '', 1, 0, 0, '1920x300.png', '', '', '', 'Vision and Mission', NULL, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `slogan1` varchar(256) NOT NULL,
  `slogan2` varchar(256) NOT NULL,
  `slogan3` varchar(256) NOT NULL,
  `slogan4` varchar(256) NOT NULL,
  `slogan5` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `sira` int(11) NOT NULL,
  `durum` int(1) NOT NULL,
  `kategori` int(1) DEFAULT NULL,
  `mobile_zoom` int(1) DEFAULT NULL,
  `en_baslik` varchar(255) DEFAULT '',
  `en_slogan1` varchar(255) DEFAULT '',
  `en_slogan2` varchar(255) DEFAULT '',
  `en_slogan3` varchar(255) DEFAULT '',
  `en_slogan4` varchar(255) DEFAULT '',
  `en_slogan5` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `baslik`, `slogan1`, `slogan2`, `slogan3`, `slogan4`, `slogan5`, `foto`, `url`, `sira`, `durum`, `kategori`, `mobile_zoom`, `en_baslik`, `en_slogan1`, `en_slogan2`, `en_slogan3`, `en_slogan4`, `en_slogan5`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Consectetur adipiscing elit', 'Sed do eiusmod tempor incididunt', 'Labore et dolore magna aliqua', 'Aliquip ex ea commodo consequat', 'Duis aute irure dolor in reprehenderit', '1920x700.png', 'https://www.fibercozum.com', 1, 1, 1, 0, '', '', '', '', '', ''),
(2, 'Lorem ipsum dolor sit amet', 'Consectetur adipiscing elit', 'Sed do eiusmod tempor incididunt', 'Labore et dolore magna aliqua', 'Aliquip ex ea commodo consequat', 'Duis aute irure dolor in reprehenderit', '1920x700.png', 'https://www.fibercozum.com', 2, 1, 1, 0, '', '', '', '', '', ''),
(3, 'Lorem ipsum dolor sit amet', 'Consectetur adipiscing elit', 'Sed do eiusmod tempor incididunt', 'Labore et dolore magna aliqua', 'Aliquip ex ea commodo consequat', 'Duis aute irure dolor in reprehenderit', '1920x700.png', 'https://www.fibercozum.com', 3, 2, 1, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(11) NOT NULL,
  `soru` varchar(255) DEFAULT NULL,
  `cevap` longtext DEFAULT NULL,
  `sira` int(11) DEFAULT NULL,
  `durum` int(1) DEFAULT NULL,
  `en_soru` varchar(255) DEFAULT '',
  `en_cevap` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `soru`, `cevap`, `sira`, `durum`, `en_soru`, `en_cevap`) VALUES
(1, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, '', NULL),
(2, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 2, 1, '', NULL),
(3, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 3, 1, '', NULL),
(4, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', 4, 1, '', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `urun_adi` varchar(255) DEFAULT NULL,
  `kisa_aciklama` varchar(255) DEFAULT NULL,
  `urun_aciklama` longtext DEFAULT NULL,
  `video` longtext DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `stok_kodu` varchar(75) NOT NULL DEFAULT '',
  `urun_tarihi` varchar(20) DEFAULT NULL,
  `satis_fiyati` float(10,2) DEFAULT 0.00,
  `para_birimi` varchar(10) DEFAULT NULL,
  `durum` int(1) DEFAULT 1,
  `vitrin` int(1) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` longtext DEFAULT NULL,
  `seo_aciklama` longtext DEFAULT NULL,
  `sira` int(11) NOT NULL DEFAULT 0,
  `dokuman` varchar(255) DEFAULT NULL,
  `en_urun_adi` varchar(255) DEFAULT '',
  `en_kisa_aciklama` varchar(255) DEFAULT '',
  `en_urun_aciklama` longtext DEFAULT NULL,
  `en_seo_title` varchar(255) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urun_adi`, `kisa_aciklama`, `urun_aciklama`, `video`, `kategori`, `stok_kodu`, `urun_tarihi`, `satis_fiyati`, `para_birimi`, `durum`, `vitrin`, `seo_title`, `seo_keywords`, `seo_aciklama`, `sira`, `dokuman`, `en_urun_adi`, `en_kisa_aciklama`, `en_urun_aciklama`, `en_seo_title`) VALUES
(1, 'Ürün 01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmURCFLIWpQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, 'A001', '17.01.2020 00:24:16', 5000.00, 'TL', 1, 1, '', '', '', 1, '', '', '', NULL, ''),
(2, 'Ürün 02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmURCFLIWpQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n', 2, 'A002', '17.01.2020 00:24:16', 5000.00, 'TL', 1, 1, NULL, NULL, NULL, 1, NULL, '', '', NULL, ''),
(3, 'Ürün 03', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmURCFLIWpQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n', 2, 'A003', '17.01.2020 00:24:16', 5000.00, 'TL', 1, 1, NULL, NULL, NULL, 1, NULL, '', '', NULL, ''),
(4, 'Ürün 04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmURCFLIWpQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n', 2, 'A004', '17.01.2020 00:24:16', 5000.00, 'TL', 1, 1, '', '', '', 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_ozellikleri`
--

CREATE TABLE `urun_ozellikleri` (
  `id` int(11) NOT NULL,
  `ozellik_id` int(11) DEFAULT NULL,
  `deger_id` int(11) DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `urun_ozellikleri`
--

INSERT INTO `urun_ozellikleri` (`id`, `ozellik_id`, `deger_id`, `urun_id`) VALUES
(1, 4, 6, 1),
(2, 5, 11, 1),
(3, 6, 15, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videolar`
--

CREATE TABLE `videolar` (
  `id` int(11) NOT NULL,
  `baslik` longtext DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `videolar`
--

INSERT INTO `videolar` (`id`, `baslik`, `urun_id`) VALUES
(64, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ng50kdKzk70\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 559);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video_galeri`
--

CREATE TABLE `video_galeri` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `iframe` longtext DEFAULT NULL,
  `sira` int(11) DEFAULT 0,
  `en_baslik` varchar(255) DEFAULT '',
  `en_iframe` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `video_galeri`
--

INSERT INTO `video_galeri` (`id`, `baslik`, `foto`, `iframe`, `sira`, `en_baslik`, `en_iframe`) VALUES
(1, 'Video 1', '800x600.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmURCFLIWpQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, '', NULL),
(2, 'Video 2', '800x600.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/O8-fgaY1a-I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, '', NULL),
(3, 'Video 3', '800x600.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-eY8XEmNw3I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, '', NULL),
(4, 'Video 4', '800x600.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZmURCFLIWpQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n', 4, '', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `baslik_dil_ayarlari`
--
ALTER TABLE `baslik_dil_ayarlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dil_ayarlari`
--
ALTER TABLE `dil_ayarlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri_resimler`
--
ALTER TABLE `galeri_resimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `halay`
--
ALTER TABLE `halay`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icon_tasarimi`
--
ALTER TABLE `icon_tasarimi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `ozellikler`
--
ALTER TABLE `ozellikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ozellik_degerleri`
--
ALTER TABLE `ozellik_degerleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `para_birimi`
--
ALTER TABLE `para_birimi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler_blog`
--
ALTER TABLE `resimler_blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler_sayfalar`
--
ALTER TABLE `resimler_sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_ozellikleri`
--
ALTER TABLE `urun_ozellikleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `videolar`
--
ALTER TABLE `videolar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `video_galeri`
--
ALTER TABLE `video_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `baslik_dil_ayarlari`
--
ALTER TABLE `baslik_dil_ayarlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `dil_ayarlari`
--
ALTER TABLE `dil_ayarlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `galeri_resimler`
--
ALTER TABLE `galeri_resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `halay`
--
ALTER TABLE `halay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- Tablo için AUTO_INCREMENT değeri `icon_tasarimi`
--
ALTER TABLE `icon_tasarimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `ozellikler`
--
ALTER TABLE `ozellikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `ozellik_degerleri`
--
ALTER TABLE `ozellik_degerleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `para_birimi`
--
ALTER TABLE `para_birimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `resimler_blog`
--
ALTER TABLE `resimler_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `resimler_sayfalar`
--
ALTER TABLE `resimler_sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urun_ozellikleri`
--
ALTER TABLE `urun_ozellikleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `videolar`
--
ALTER TABLE `videolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Tablo için AUTO_INCREMENT değeri `video_galeri`
--
ALTER TABLE `video_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
