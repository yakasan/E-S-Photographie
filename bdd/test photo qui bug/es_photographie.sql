-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Décembre 2014 à 10:43
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `es_photographie`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
`id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `administrator`
--

INSERT INTO `administrator` (`id`, `login`, `password`) VALUES
(1, 'Sylvain', 'Sylvain'),
(2, 'Mehdi', 'Mehdi'),
(3, 'Alexis', 'Alexis'),
(4, 'Patrice', 'Patrice'),
(5, 'Jerome', 'Jerome'),
(6, 'patrice', '7edeafe34b5b605589cdbb494218a998');

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_present` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `img_present`) VALUES
(1, 'Noir et blanc', 'Galeries photos en noir et blanc ', ''),
(2, 'test', 'gdfd', ''),
(3, 'wdcvc', 'xgdfgd', ''),
(7, 'SUPER', '							', ''),
(8, 'Hello', '							', '');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(11) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `sender_email`, `title`, `text`, `seen`, `deleted`) VALUES
(1, 'ceciestun@test.fr', 'lolololol', 'Est-ce que ça marche?', 0, 0),
(2, 'ceciestencoreun@test.fr', 'hello', 'T''es sûr que ça marche?', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `type`) VALUES
(2, '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `exif` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=192 ;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `id_gallery`, `title`, `description`, `exif`, `url`) VALUES
(188, 7, 'Emilie', '', 'a:5:{s:4:"FILE";a:6:{s:8:"FileName";s:11:"php5AE9.tmp";s:12:"FileDateTime";i:1417911783;s:8:"FileSize";i:1259983;s:8:"FileType";i:2;s:8:"MimeType";s:10:"image/jpeg";s:13:"SectionsFound";s:30:"ANY_TAG, IFD0, THUMBNAIL, EXIF";}s:8:"COMPUTED";a:8:{s:4:"html";s:26:"width="5184" height="3456"";s:6:"Height";i:3456;s:5:"Width";i:5184;s:7:"IsColor";i:1;s:17:"ByteOrderMotorola";i:0;s:8:"CCDWidth";s:4:"22mm";s:18:"Thumbnail.FileType";i:2;s:18:"Thumbnail.MimeType";s:10:"image/jpeg";}s:4:"IFD0";a:9:{s:4:"Make";s:5:"Canon";s:5:"Model";s:14:"Canon EOS 600D";s:11:"Orientation";i:1;s:11:"XResolution";s:13:"2400000/10000";s:11:"YResolution";s:13:"2400000/10000";s:14:"ResolutionUnit";i:2;s:8:"Software";s:27:"Adobe Photoshop CS3 Windows";s:8:"DateTime";s:19:"2014:09:24 20:58:21";s:16:"Exif_IFD_Pointer";i:208;}s:9:"THUMBNAIL";a:6:{s:11:"Compression";i:6;s:11:"XResolution";s:4:"72/1";s:11:"YResolution";s:4:"72/1";s:14:"ResolutionUnit";i:2;s:21:"JPEGInterchangeFormat";i:746;s:27:"JPEGInterchangeFormatLength";i:5573;}s:4:"EXIF";a:27:{s:12:"ExposureTime";s:6:"1/1600";s:15:"ExposureProgram";i:1;s:15:"ISOSpeedRatings";i:100;s:19:"UndefinedTag:0x8830";i:2;s:19:"UndefinedTag:0x8832";i:100;s:11:"ExifVersion";s:4:"0230";s:16:"DateTimeOriginal";s:19:"2014:08:04 18:11:32";s:17:"DateTimeDigitized";s:19:"2014:08:04 18:11:32";s:17:"ShutterSpeedValue";s:16:"10643856/1000000";s:17:"ExposureBiasValue";s:3:"0/1";s:12:"MeteringMode";i:5;s:5:"Flash";i:16;s:11:"FocalLength";s:4:"50/1";s:18:"SubSecTimeOriginal";s:2:"00";s:19:"SubSecTimeDigitized";s:2:"00";s:10:"ColorSpace";i:1;s:14:"ExifImageWidth";i:5184;s:15:"ExifImageLength";i:3456;s:21:"FocalPlaneXResolution";s:11:"5184000/905";s:21:"FocalPlaneYResolution";s:11:"3456000/595";s:24:"FocalPlaneResolutionUnit";i:2;s:14:"CustomRendered";i:0;s:12:"ExposureMode";i:1;s:12:"WhiteBalance";i:0;s:16:"SceneCaptureType";i:0;s:19:"UndefinedTag:0xA431";s:12:"253076090707";s:19:"UndefinedTag:0xA435";s:10:"0000000000";}}', 'Emilie.jpeg'),
(189, 7, 'Sylvain', '', 'a:5:{s:4:"FILE";a:6:{s:8:"FileName";s:10:"phpAD5.tmp";s:12:"FileDateTime";i:1417988753;s:8:"FileSize";i:1304193;s:8:"FileType";i:2;s:8:"MimeType";s:10:"image/jpeg";s:13:"SectionsFound";s:30:"ANY_TAG, IFD0, THUMBNAIL, EXIF";}s:8:"COMPUTED";a:9:{s:4:"html";s:26:"width="2040" height="3119"";s:6:"Height";i:3119;s:5:"Width";i:2040;s:7:"IsColor";i:1;s:17:"ByteOrderMotorola";i:0;s:8:"CCDWidth";s:3:"9mm";s:15:"ApertureFNumber";s:6:"f/16.0";s:18:"Thumbnail.FileType";i:2;s:18:"Thumbnail.MimeType";s:10:"image/jpeg";}s:4:"IFD0";a:9:{s:4:"Make";s:5:"Canon";s:5:"Model";s:14:"Canon EOS 600D";s:11:"Orientation";i:1;s:11:"XResolution";s:13:"2400000/10000";s:11:"YResolution";s:13:"2400000/10000";s:14:"ResolutionUnit";i:2;s:8:"Software";s:27:"Adobe Photoshop CS3 Windows";s:8:"DateTime";s:19:"2014:11:06 14:43:49";s:16:"Exif_IFD_Pointer";i:208;}s:9:"THUMBNAIL";a:6:{s:11:"Compression";i:6;s:11:"XResolution";s:4:"72/1";s:11:"YResolution";s:4:"72/1";s:14:"ResolutionUnit";i:2;s:21:"JPEGInterchangeFormat";i:870;s:27:"JPEGInterchangeFormatLength";i:2034;}s:4:"EXIF";a:32:{s:12:"ExposureTime";s:5:"1/160";s:7:"FNumber";s:4:"16/1";s:15:"ExposureProgram";i:1;s:15:"ISOSpeedRatings";i:100;s:19:"UndefinedTag:0x8830";i:2;s:19:"UndefinedTag:0x8832";i:100;s:11:"ExifVersion";s:4:"0230";s:16:"DateTimeOriginal";s:19:"2014:11:06 14:30:51";s:17:"DateTimeDigitized";s:19:"2014:11:06 14:30:51";s:17:"ShutterSpeedValue";s:15:"7321928/1000000";s:13:"ApertureValue";s:3:"8/1";s:17:"ExposureBiasValue";s:3:"0/1";s:16:"MaxApertureValue";s:3:"3/1";s:12:"MeteringMode";i:5;s:5:"Flash";i:16;s:11:"FocalLength";s:4:"17/1";s:18:"SubSecTimeOriginal";s:2:"51";s:19:"SubSecTimeDigitized";s:2:"51";s:10:"ColorSpace";i:1;s:14:"ExifImageWidth";i:2040;s:15:"ExifImageLength";i:3119;s:21:"FocalPlaneXResolution";s:11:"5184000/905";s:21:"FocalPlaneYResolution";s:11:"3456000/595";s:24:"FocalPlaneResolutionUnit";i:2;s:14:"CustomRendered";i:0;s:12:"ExposureMode";i:1;s:12:"WhiteBalance";i:1;s:16:"SceneCaptureType";i:0;s:19:"UndefinedTag:0xA431";s:12:"253076090707";s:19:"UndefinedTag:0xA432";a:4:{i:0;s:4:"17/1";i:1;s:4:"50/1";i:2;s:3:"0/0";i:3;s:3:"0/0";}s:19:"UndefinedTag:0xA434";s:7:"17-50mm";s:19:"UndefinedTag:0xA435";s:10:"0000000000";}}', 'Sylvain.jpeg'),
(190, 7, 'Test', '', 'a:5:{s:4:"FILE";a:6:{s:8:"FileName";s:11:"php1AF0.tmp";s:12:"FileDateTime";i:1418289894;s:8:"FileSize";i:1304193;s:8:"FileType";i:2;s:8:"MimeType";s:10:"image/jpeg";s:13:"SectionsFound";s:30:"ANY_TAG, IFD0, THUMBNAIL, EXIF";}s:8:"COMPUTED";a:9:{s:4:"html";s:26:"width="2040" height="3119"";s:6:"Height";i:3119;s:5:"Width";i:2040;s:7:"IsColor";i:1;s:17:"ByteOrderMotorola";i:0;s:8:"CCDWidth";s:3:"9mm";s:15:"ApertureFNumber";s:6:"f/16.0";s:18:"Thumbnail.FileType";i:2;s:18:"Thumbnail.MimeType";s:10:"image/jpeg";}s:4:"IFD0";a:9:{s:4:"Make";s:5:"Canon";s:5:"Model";s:14:"Canon EOS 600D";s:11:"Orientation";i:1;s:11:"XResolution";s:13:"2400000/10000";s:11:"YResolution";s:13:"2400000/10000";s:14:"ResolutionUnit";i:2;s:8:"Software";s:27:"Adobe Photoshop CS3 Windows";s:8:"DateTime";s:19:"2014:11:06 14:43:49";s:16:"Exif_IFD_Pointer";i:208;}s:9:"THUMBNAIL";a:6:{s:11:"Compression";i:6;s:11:"XResolution";s:4:"72/1";s:11:"YResolution";s:4:"72/1";s:14:"ResolutionUnit";i:2;s:21:"JPEGInterchangeFormat";i:870;s:27:"JPEGInterchangeFormatLength";i:2034;}s:4:"EXIF";a:32:{s:12:"ExposureTime";s:5:"1/160";s:7:"FNumber";s:4:"16/1";s:15:"ExposureProgram";i:1;s:15:"ISOSpeedRatings";i:100;s:19:"UndefinedTag:0x8830";i:2;s:19:"UndefinedTag:0x8832";i:100;s:11:"ExifVersion";s:4:"0230";s:16:"DateTimeOriginal";s:19:"2014:11:06 14:30:51";s:17:"DateTimeDigitized";s:19:"2014:11:06 14:30:51";s:17:"ShutterSpeedValue";s:15:"7321928/1000000";s:13:"ApertureValue";s:3:"8/1";s:17:"ExposureBiasValue";s:3:"0/1";s:16:"MaxApertureValue";s:3:"3/1";s:12:"MeteringMode";i:5;s:5:"Flash";i:16;s:11:"FocalLength";s:4:"17/1";s:18:"SubSecTimeOriginal";s:2:"51";s:19:"SubSecTimeDigitized";s:2:"51";s:10:"ColorSpace";i:1;s:14:"ExifImageWidth";i:2040;s:15:"ExifImageLength";i:3119;s:21:"FocalPlaneXResolution";s:11:"5184000/905";s:21:"FocalPlaneYResolution";s:11:"3456000/595";s:24:"FocalPlaneResolutionUnit";i:2;s:14:"CustomRendered";i:0;s:12:"ExposureMode";i:1;s:12:"WhiteBalance";i:1;s:16:"SceneCaptureType";i:0;s:19:"UndefinedTag:0xA431";s:12:"253076090707";s:19:"UndefinedTag:0xA432";a:4:{i:0;s:4:"17/1";i:1;s:4:"50/1";i:2;s:3:"0/0";i:3;s:3:"0/0";}s:19:"UndefinedTag:0xA434";s:7:"17-50mm";s:19:"UndefinedTag:0xA435";s:10:"0000000000";}}', 'Test.jpeg'),
(191, 8, 'Sylvain', '', 'a:5:{s:4:"FILE";a:6:{s:8:"FileName";s:11:"php1BDB.tmp";s:12:"FileDateTime";i:1418290287;s:8:"FileSize";i:1304193;s:8:"FileType";i:2;s:8:"MimeType";s:10:"image/jpeg";s:13:"SectionsFound";s:30:"ANY_TAG, IFD0, THUMBNAIL, EXIF";}s:8:"COMPUTED";a:9:{s:4:"html";s:26:"width="2040" height="3119"";s:6:"Height";i:3119;s:5:"Width";i:2040;s:7:"IsColor";i:1;s:17:"ByteOrderMotorola";i:0;s:8:"CCDWidth";s:3:"9mm";s:15:"ApertureFNumber";s:6:"f/16.0";s:18:"Thumbnail.FileType";i:2;s:18:"Thumbnail.MimeType";s:10:"image/jpeg";}s:4:"IFD0";a:9:{s:4:"Make";s:5:"Canon";s:5:"Model";s:14:"Canon EOS 600D";s:11:"Orientation";i:1;s:11:"XResolution";s:13:"2400000/10000";s:11:"YResolution";s:13:"2400000/10000";s:14:"ResolutionUnit";i:2;s:8:"Software";s:27:"Adobe Photoshop CS3 Windows";s:8:"DateTime";s:19:"2014:11:06 14:43:49";s:16:"Exif_IFD_Pointer";i:208;}s:9:"THUMBNAIL";a:6:{s:11:"Compression";i:6;s:11:"XResolution";s:4:"72/1";s:11:"YResolution";s:4:"72/1";s:14:"ResolutionUnit";i:2;s:21:"JPEGInterchangeFormat";i:870;s:27:"JPEGInterchangeFormatLength";i:2034;}s:4:"EXIF";a:32:{s:12:"ExposureTime";s:5:"1/160";s:7:"FNumber";s:4:"16/1";s:15:"ExposureProgram";i:1;s:15:"ISOSpeedRatings";i:100;s:19:"UndefinedTag:0x8830";i:2;s:19:"UndefinedTag:0x8832";i:100;s:11:"ExifVersion";s:4:"0230";s:16:"DateTimeOriginal";s:19:"2014:11:06 14:30:51";s:17:"DateTimeDigitized";s:19:"2014:11:06 14:30:51";s:17:"ShutterSpeedValue";s:15:"7321928/1000000";s:13:"ApertureValue";s:3:"8/1";s:17:"ExposureBiasValue";s:3:"0/1";s:16:"MaxApertureValue";s:3:"3/1";s:12:"MeteringMode";i:5;s:5:"Flash";i:16;s:11:"FocalLength";s:4:"17/1";s:18:"SubSecTimeOriginal";s:2:"51";s:19:"SubSecTimeDigitized";s:2:"51";s:10:"ColorSpace";i:1;s:14:"ExifImageWidth";i:2040;s:15:"ExifImageLength";i:3119;s:21:"FocalPlaneXResolution";s:11:"5184000/905";s:21:"FocalPlaneYResolution";s:11:"3456000/595";s:24:"FocalPlaneResolutionUnit";i:2;s:14:"CustomRendered";i:0;s:12:"ExposureMode";i:1;s:12:"WhiteBalance";i:1;s:16:"SceneCaptureType";i:0;s:19:"UndefinedTag:0xA431";s:12:"253076090707";s:19:"UndefinedTag:0xA432";a:4:{i:0;s:4:"17/1";i:1;s:4:"50/1";i:2;s:3:"0/0";i:3;s:3:"0/0";}s:19:"UndefinedTag:0xA434";s:7:"17-50mm";s:19:"UndefinedTag:0xA435";s:10:"0000000000";}}', 'Sylvain.jpeg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrator`
--
ALTER TABLE `administrator`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galleries`
--
ALTER TABLE `galleries`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrator`
--
ALTER TABLE `administrator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `galleries`
--
ALTER TABLE `galleries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=192;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
