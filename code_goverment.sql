-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Korisnik`;
CREATE TABLE `Korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDKorisnik` int(11) NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `Ime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Prezime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `KorisnickoIme` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Telefon` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `StatusKorisnika` bit(1) NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IDKorisnik`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_Korisnik_MKR` (`JMBG`),
  CONSTRAINT `FK_Korisnik_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Korisnik` (`id`, `IDKorisnik`, `JMBG`, `Ime`, `Prezime`, `KorisnickoIme`, `Email`, `Telefon`, `password`, `StatusKorisnika`, `remember_token`) VALUES
(1,	4,	'2302967888888',	'Милован',	'Милић',	'milovan.milic',	NULL,	NULL,	'$2y$10$DR7Yr/F2lJuC0P8.vq7vhuk58WjKShsy59RFaIOlV/G8s8CGJvee2',	CONV('1', 2, 10) + 0,	'0bbpw3nPUd1ZlfIHA1LsS9pACpIcXW7zZH4oNG1BrheSx4f4i47lHazz0j9Q'),
(2,	13,	'0606995111111',	'Катарина',	'Миловановић',	'katarina.milovanovic',	NULL,	NULL,	'$2y$10$DR7Yr/F2lJuC0P8.vq7vhuk58WjKShsy59RFaIOlV/G8s8CGJvee2',	CONV('0', 2, 10) + 0,	NULL),
(3,	19,	'0505963000000',	'Софија',	'Савић',	'sofija.savic',	NULL,	NULL,	'$2y$10$DR7Yr/F2lJuC0P8.vq7vhuk58WjKShsy59RFaIOlV/G8s8CGJvee2',	CONV('1', 2, 10) + 0,	'kXbK5hzwz1luU5gM7VIjytZTlz65vxH72XFUA5fyF2Wl1EwC8zIMVN5rnPMF'),
(4,	20,	'1009953222222',	'Данијела',	'Вранић',	'danijela.vranic',	NULL,	NULL,	'$2y$10$DR7Yr/F2lJuC0P8.vq7vhuk58WjKShsy59RFaIOlV/G8s8CGJvee2',	CONV('1', 2, 10) + 0,	'ErNQ5O4SZ78TXcn2kiPo4ZpLzCGq1YmcShxtuWHUnQfCNGnJm5UlnlMRmdmZ'),
(5,	21,	'1110983333333',	'Предраг',	'Николић',	'predrag.nikolic',	NULL,	NULL,	'$2y$10$DR7Yr/F2lJuC0P8.vq7vhuk58WjKShsy59RFaIOlV/G8s8CGJvee2',	CONV('0', 2, 10) + 0,	NULL),
(6,	22,	'1203978444444',	'Славиша',	'Петровић',	'slavisa.petrovic',	'slavisa.petrovic@gmail.com',	'0640474403',	'$2y$10$DR7Yr/F2lJuC0P8.vq7vhuk58WjKShsy59RFaIOlV/G8s8CGJvee2',	CONV('1', 2, 10) + 0,	'5ZfyVzoNjEeIM2bGjwMAQ6U1VPWDvNXcnowdvKoSPSNAA3DKymunYYIOXdLa'),
(7,	23,	'1308959555555',	'Урош',	'Јањић',	'uros.janjic',	NULL,	NULL,	'9hjLvAH3',	CONV('1', 2, 10) + 0,	NULL),
(8,	24,	'1504999666666',	'Милош',	'Јовановић',	'milos.jovanovic',	NULL,	NULL,	'RUxbfk8v',	CONV('1', 2, 10) + 0,	NULL),
(9,	25,	'2012948777777',	'Славица',	'Гавриловић',	'slavica.gavrilovic',	NULL,	NULL,	'22TShPLS',	CONV('1', 2, 10) + 0,	NULL),
(10,	26,	'2804975999999',	'Магдалена',	'Обрадовић',	'magdalena.obradovic',	NULL,	NULL,	'S23f4GTm',	CONV('0', 2, 10) + 0,	NULL);

DROP TABLE IF EXISTS `LicnaKarta`;
CREATE TABLE `LicnaKarta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDLicnaKarta` int(11) NOT NULL,
  `BrLicneKarte` varchar(9) CHARACTER SET utf8 NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `DokumentIzdaje` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DatumIzdavanja` date NOT NULL,
  `VaziDo` date NOT NULL,
  PRIMARY KEY (`IDLicnaKarta`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_LicnaKarta_MKR` (`JMBG`),
  CONSTRAINT `FK_LicnaKarta_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `LicnaKarta` (`id`, `IDLicnaKarta`, `BrLicneKarte`, `JMBG`, `DokumentIzdaje`, `DatumIzdavanja`, `VaziDo`) VALUES
(1,	1,	'001259455',	'0505963000000',	'ПС Медијана',	'2009-03-10',	'2019-03-10'),
(2,	2,	'009892526',	'0606995111111',	'ПС Зрењанин',	'2016-05-31',	'2026-05-31'),
(3,	3,	'003371846',	'1009953222222',	'ПС Нови Сад',	'2013-12-10',	'2023-12-10'),
(4,	4,	'006562891',	'1110983333333',	'ПС Нови Београд',	'2011-06-23',	'2021-06-23'),
(5,	5,	'003892525',	'1203978444444',	'ПС Савски венац',	'2008-05-20',	'2018-05-20'),
(6,	6,	'009671238',	'1308959555555',	'ПС Врање',	'2007-10-09',	'2017-10-09'),
(7,	7,	'003895656',	'1504999666666',	'ПС Петроварадин',	'2012-02-28',	'2022-02-28'),
(8,	8,	'004545128',	'2012948777777',	'ПС Алексинац',	'2015-11-05',	'2025-11-05'),
(9,	9,	'006337791',	'2302967888888',	'ПС Крушевац',	'2009-01-26',	'2019-01-26'),
(10,	10,	'007282564',	'2804975999999',	'ПС Медијана',	'2008-06-01',	'2018-06-01');

DROP TABLE IF EXISTS `MKR`;
CREATE TABLE `MKR` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `Ime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Prezime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DatumRodjenja` date NOT NULL,
  `Pol` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Drzavljanstvo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ImeOca` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ImeMajke` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MestoRodjenja` varchar(50) CHARACTER SET utf8 NOT NULL,
  `OpstinaRodjenja` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`JMBG`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `MKR` (`id`, `JMBG`, `Ime`, `Prezime`, `DatumRodjenja`, `Pol`, `Drzavljanstvo`, `ImeOca`, `ImeMajke`, `MestoRodjenja`, `OpstinaRodjenja`) VALUES
(1,	'0505963000000',	'Софија',	'Савић',	'1963-05-05',	'Ж',	'Република Србија',	'Никола',	'Сања',	'Ниш',	'Медијана'),
(2,	'0606995111111',	'Катарина',	'Миловановић',	'1995-06-06',	'Ж',	'Република Србија',	'Зоран',	'Душица',	'Зрењанин',	'Зрењанин'),
(3,	'1009953222222',	'Данијела',	'Вранић',	'1953-09-10',	'Ж',	'Република Србија',	'Бранислав',	'Милица',	'Нови Сад',	'Нови Сад'),
(4,	'1110983333333',	'Предраг',	'Николић',	'1983-10-11',	'М',	'Република Србија',	'Марко',	'Јована',	'Београд',	'Нови Београд'),
(5,	'1203978444444',	'Славиша',	'Петровић',	'1978-03-12',	'М',	'Република Србија',	'Милан',	'Тамара',	'Београд',	'Савски венац'),
(6,	'1308959555555',	'Урош',	'Јањић',	'1959-08-13',	'М',	'Република Србија',	'Милан',	'Ана',	'Врање',	'Врање'),
(7,	'1504999666666',	'Милош',	'Јовановић',	'1999-04-15',	'М',	'Република Србија',	'Радован',	'Ана',	'Нови Сад',	'Петроварадин'),
(8,	'2012948777777',	'Славица',	'Гавриловић',	'1948-12-20',	'Ж',	'Република Србија',	'Игор',	'Марија',	'Алексинац',	'Алексинац'),
(9,	'2302967888888',	'Милован',	'Милић',	'1967-02-23',	'М',	'Република Србија',	'Зоран',	'Јелена',	'Крушевац',	'Крушевац'),
(10,	'2804975999999',	'Магдалена',	'Обрадовић',	'1975-04-28',	'Ж',	'Република Србија',	'Радомир',	'Вера',	'Ниш',	'Медијана');

DROP TABLE IF EXISTS `MKV`;
CREATE TABLE `MKV` (
  `IDMKV` int(11) NOT NULL,
  `ZenikJMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `NevestaJMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `Opstina` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MaticnoPodrucje` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TekuciBroj` int(11) NOT NULL,
  `GodUpisa` int(11) NOT NULL,
  `MestoZakljucenjaBraka` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DatZakljucenjaBraka` date NOT NULL,
  `ZenikOdabranoPrezime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NevestaOdabranoPrezime` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`IDMKV`),
  KEY `FK_MKV_MKR` (`ZenikJMBG`),
  KEY `FK_MKV_MKR1` (`NevestaJMBG`),
  CONSTRAINT `FK_MKV_MKR` FOREIGN KEY (`ZenikJMBG`) REFERENCES `MKR` (`JMBG`),
  CONSTRAINT `FK_MKV_MKR1` FOREIGN KEY (`NevestaJMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `MKV` (`IDMKV`, `ZenikJMBG`, `NevestaJMBG`, `Opstina`, `MaticnoPodrucje`, `TekuciBroj`, `GodUpisa`, `MestoZakljucenjaBraka`, `DatZakljucenjaBraka`, `ZenikOdabranoPrezime`, `NevestaOdabranoPrezime`) VALUES
(3,	'1308959555555',	'0505963000000',	'Врање',	'Врање',	156,	1985,	'Врање',	'1985-10-10',	'Јањић',	'Јањић'),
(4,	'2302967888888',	'2804975999999',	'Крушевац',	'Крушевац',	201,	2000,	'Крушевац',	'2000-09-05',	'Милић',	'Обрадовић-Милић'),
(5,	'1110983333333',	'0606995111111',	'Зрењанин',	'Зрењанин',	452,	2018,	'Зрењанин',	'2017-12-28',	'Николић',	'Николић');

DROP TABLE IF EXISTS `NSZ`;
CREATE TABLE `NSZ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDNSZ` int(11) NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `Status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DatumStatusa` date NOT NULL,
  `VremeStatusa` time NOT NULL,
  `DatumPrijave` date NOT NULL,
  `OJEvidencije` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ObrazovniProfil` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `NovcanaNaknada` bit(1) NOT NULL,
  `IznosNovcaneNaknade` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`IDNSZ`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_NSZ_MKR` (`JMBG`),
  CONSTRAINT `FK_NSZ_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `NSZ` (`id`, `IDNSZ`, `JMBG`, `Status`, `DatumStatusa`, `VremeStatusa`, `DatumPrijave`, `OJEvidencije`, `ObrazovniProfil`, `NovcanaNaknada`, `IznosNovcaneNaknade`) VALUES
(1,	1,	'0505963000000',	'незапослен',	'2018-01-10',	'10:05:00',	'2017-06-09',	'Филијала Београд',	'Медицинска сестра - техничар',	CONV('1', 2, 10) + 0,	20000.00),
(2,	2,	'0606995111111',	'запослен',	'2018-01-15',	'13:18:56',	'2016-09-16',	'Филијала Зрењанин',	'Транспортни комерцијалиста',	CONV('0', 2, 10) + 0,	NULL),
(3,	3,	'1110983333333',	'незапослен',	'2018-02-01',	'11:13:23',	'2017-11-14',	'Филијала Београд',	'Грађевински техничар нискоградње',	CONV('1', 2, 10) + 0,	15000.00),
(4,	4,	'1203978444444',	'незапослен',	'2018-02-05',	'10:25:20',	'2018-01-14',	'Филијала Београд',	'Дипломирани инжењер машинства',	CONV('1', 2, 10) + 0,	17000.00),
(5,	5,	'1504999666666',	'незапослен',	'2018-02-19',	'13:18:56',	'2018-02-01',	'Филијала Нови Сад',	'Електротехничар телекомуникација',	CONV('0', 2, 10) + 0,	NULL),
(6,	6,	'2302967888888',	'запослен',	'2018-02-22',	'11:24:23',	'2017-01-17',	'Филијала Крушевац',	'Фармацеутски техничар',	CONV('0', 2, 10) + 0,	NULL),
(7,	7,	'2804975999999',	'незапослен',	'2018-03-11',	'11:54:23',	'2015-08-26',	'Филијала Ниш',	'Металобрусач',	CONV('1', 2, 10) + 0,	16000.00);

DROP TABLE IF EXISTS `Pasos`;
CREATE TABLE `Pasos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDPasos` int(11) NOT NULL,
  `BrojPasosa` varchar(9) CHARACTER SET utf8 NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `DokumentIzdaje` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DatumIzdavanja` date NOT NULL,
  `VaziDo` date NOT NULL,
  PRIMARY KEY (`IDPasos`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_Pasos_MKR` (`JMBG`),
  CONSTRAINT `FK_Pasos_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Pasos` (`id`, `IDPasos`, `BrojPasosa`, `JMBG`, `DokumentIzdaje`, `DatumIzdavanja`, `VaziDo`) VALUES
(1,	5,	'009985611',	'0505963000000',	'MUP R SRBIJE, PU U NIŠU',	'2007-05-17',	'2017-05-17'),
(2,	6,	'007815624',	'0606995111111',	'MUP R SRBIJE, PU U ZRENJANINU',	'2015-10-29',	'2025-10-29'),
(3,	7,	'004695223',	'1009953222222',	'MUP R SRBIJE, PU U NOVOM SADU',	'2013-07-11',	'2023-07-11'),
(4,	8,	'001644231',	'1110983333333',	'MUP R SRBIJE, PU U BEOGRADU',	'2008-05-15',	'2018-05-15'),
(5,	9,	'007911265',	'1203978444444',	'MUP R SRBIJE, PU U BEOGRADU',	'2010-11-08',	'2020-11-08'),
(6,	10,	'001159389',	'1308959555555',	'MUP R SRBIJE, PU U VRANJU',	'2003-01-24',	'2013-01-24'),
(7,	11,	'009664358',	'1504999666666',	'MUP R SRBIJE, PU U NOVOM SADU',	'2008-04-15',	'2018-04-15');

DROP TABLE IF EXISTS `PIO`;
CREATE TABLE `PIO` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDPenzija` int(11) NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `PenzioniBroj` int(11) NOT NULL,
  `Vrsta` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DatPocetkaIsplate` date NOT NULL,
  `Filijala` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`IDPenzija`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_PIO_MKR` (`JMBG`),
  CONSTRAINT `FK_PIO_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `PIO` (`id`, `IDPenzija`, `JMBG`, `PenzioniBroj`, `Vrsta`, `DatPocetkaIsplate`, `Filijala`) VALUES
(1,	1,	'1009953222222',	1968,	'Старосна',	'2013-09-10',	'Нови Сад'),
(2,	2,	'2012948777777',	2946,	'Старосна',	'2017-08-13',	'Алексинац'),
(3,	3,	'1308959555555',	3499,	'инвалидска',	'2005-03-18',	'Врање');

DROP TABLE IF EXISTS `Prebivaliste`;
CREATE TABLE `Prebivaliste` (
  `IDprebivaliste` int(11) NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `Opstina` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Mesto` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ulica` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Broj` int(11) NOT NULL,
  `DatumPrijave` date NOT NULL,
  `DatimOdjave` date DEFAULT NULL,
  PRIMARY KEY (`IDprebivaliste`),
  KEY `FK_Prebivaliste_MKR` (`JMBG`),
  CONSTRAINT `FK_Prebivaliste_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `Prebivaliste` (`IDprebivaliste`, `JMBG`, `Opstina`, `Mesto`, `Ulica`, `Broj`, `DatumPrijave`, `DatimOdjave`) VALUES
(1,	'0505963000000',	'Ниш',	'Ниш',	'Николе Пашића',	20,	'1998-07-06',	'2017-12-07'),
(4,	'0505963000000',	'Савски венац',	'Београд',	'Хумска',	12,	'2017-12-07',	NULL),
(5,	'0606995111111',	'Зрењанин',	'Зрењанин',	'Трг Слободе',	9,	'1957-07-07',	NULL),
(6,	'1009953222222',	'Нови Сад',	'Нови Сад',	'Карађорђева',	116,	'2000-09-03',	NULL),
(7,	'1110983333333',	'Нови Београд',	'Београд',	'Булевар Уметности',	56,	'1983-10-15',	NULL),
(9,	'1203978444444',	'Савски венац',	'Београд',	'Сарајевска',	5,	'1986-01-23',	'2010-11-02'),
(10,	'1203978444444',	'Врачар',	'Београд',	'Крунска',	80,	'2010-11-02',	NULL),
(11,	'1308959555555',	'Врање',	'Врање',	'Боре Станковића',	63,	'2007-05-04',	NULL),
(12,	'1504999666666',	'Петроварадин',	'Нови Сад',	'Савска',	213,	'1999-04-21',	NULL),
(13,	'2012948777777',	'Алексинац',	'Алексинац',	'Никола Тесла',	103,	'1963-02-19',	NULL),
(14,	'2302967888888',	'Крушевац',	'Крушевац',	'Колубарске битке',	72,	'1970-02-06',	'1991-03-03'),
(15,	'2804975999999',	'Медијана',	'Ниш',	'Трг Краља Милана',	26,	'2001-09-09',	NULL);

DROP TABLE IF EXISTS `request_address`;
CREATE TABLE `request_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `num` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `request_address_ibfk_2` FOREIGN KEY (`id`) REFERENCES `Korisnik` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `request_address` (`id`, `street`, `num`, `place`, `city`, `user_id`, `status`, `created_at`) VALUES
(4,	'Porodice Radojcic',	'7',	'Cukarica',	'Beograd',	6,	NULL,	'2018-05-26 00:00:00');

DROP TABLE IF EXISTS `SocijalnoOsiguranje`;
CREATE TABLE `SocijalnoOsiguranje` (
  `IDSocijalno` int(11) NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `ZanimanjeStecenoSkolovanjem` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `OpstinaOsiguranika` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `OsnovOsiguranja` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `OsnovPrestankaOsiguranja` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `DatPocetkaOsiguranja` date DEFAULT NULL,
  `DatDejstvaPromene` date DEFAULT NULL,
  `DatPrestankaOsiguranja` date DEFAULT NULL,
  `ZanimanjePremaRadnomMestu` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `StepenStrucneSpreme` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `RadnoVreme` int(11) DEFAULT NULL,
  `VrstaZaposlenja` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `RadKodVisePoslodavaca` bit(1) DEFAULT NULL,
  `NazivObveznika` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `PIBObveznika` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `MBObveznika` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `Delatnost` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `OpstinaSedista` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MestoSedista` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `UlicaSedista` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `KucniBrSedista` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `OpstinaPoslovneJedinice` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MestoPoslovneJedinice` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `UlicaPoslovneJedinice` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `KucniBrojPoslovneJedinice` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDSocijalno`),
  KEY `FK_SocijalnoOsiguranje_MKR` (`JMBG`),
  CONSTRAINT `FK_SocijalnoOsiguranje_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `SocijalnoOsiguranje` (`IDSocijalno`, `JMBG`, `ZanimanjeStecenoSkolovanjem`, `OpstinaOsiguranika`, `OsnovOsiguranja`, `OsnovPrestankaOsiguranja`, `DatPocetkaOsiguranja`, `DatDejstvaPromene`, `DatPrestankaOsiguranja`, `ZanimanjePremaRadnomMestu`, `StepenStrucneSpreme`, `RadnoVreme`, `VrstaZaposlenja`, `RadKodVisePoslodavaca`, `NazivObveznika`, `PIBObveznika`, `MBObveznika`, `Delatnost`, `OpstinaSedista`, `MestoSedista`, `UlicaSedista`, `KucniBrSedista`, `OpstinaPoslovneJedinice`, `MestoPoslovneJedinice`, `UlicaPoslovneJedinice`, `KucniBrojPoslovneJedinice`) VALUES
(1,	'0606995111111',	'Транспортни комерцијалиста',	'Зрењанин',	'Запослени у привредном друштву, другом правном лицу, код предузетника, цивилна лица на служби у војсци',	NULL,	'2016-09-16',	NULL,	NULL,	'Манипулант у производњи биља',	'Лице са завршеним I степеном стручне спреме',	40,	'одређено',	CONV('0', 2, 10) + 0,	'Фирма 1',	'101824653',	'298946',	'Издавање часописа и периодичних издања',	'Зрењанин',	'Зрењанин',	'др Зорана Каменковића',	'15',	'Зрењанин',	'Зрењанин',	'Иве Лоле Рибара',	40),
(5,	'2302967888888',	'Фармацеутски техничар',	'Крушевац',	'Запослени у привредном друштву',	NULL,	'2017-01-17',	NULL,	NULL,	'Фармацеутски техничар',	'Четврти степен средње стручне спреме',	40,	'неодређено',	CONV('0', 2, 10) + 0,	'Апотекарска установа СС',	'105764875',	'324529',	'Продаја лекова',	'Крушевац',	'Крушевац',	'Улица палих бораца',	'45',	'Крушевац',	'Крушевац',	'Његошева',	12);

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `selected_ios` tinyint(4) DEFAULT '0',
  `selected_phone` tinyint(4) DEFAULT '0',
  `selected_email` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `subscribe` (`id`, `user_id`, `selected_ios`, `selected_phone`, `selected_email`) VALUES
(11,	1,	0,	0,	0),
(12,	2,	0,	0,	0),
(13,	3,	0,	0,	0),
(14,	4,	0,	0,	0),
(15,	5,	0,	0,	0),
(16,	6,	0,	0,	1),
(17,	7,	0,	0,	0),
(18,	8,	0,	0,	0),
(19,	9,	0,	0,	0),
(20,	10,	0,	0,	0);

DROP TABLE IF EXISTS `VozackaDozvola`;
CREATE TABLE `VozackaDozvola` (
  `IDVozackeDozvole` int(11) NOT NULL,
  `BrVozackeDozvole` varchar(9) CHARACTER SET utf8 NOT NULL,
  `JMBG` varchar(13) CHARACTER SET utf8 NOT NULL,
  `DatumIzdavanja` date NOT NULL,
  `DatumIsteka` date NOT NULL,
  PRIMARY KEY (`IDVozackeDozvole`),
  KEY `FK_VozackaDozvola_MKR` (`JMBG`),
  CONSTRAINT `FK_VozackaDozvola_MKR` FOREIGN KEY (`JMBG`) REFERENCES `MKR` (`JMBG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `VozackaDozvola` (`IDVozackeDozvole`, `BrVozackeDozvole`, `JMBG`, `DatumIzdavanja`, `DatumIsteka`) VALUES
(1,	'000089232',	'0505963000000',	'2008-03-12',	'2018-03-12'),
(2,	'000078751',	'0606995111111',	'2015-06-26',	'2020-06-26'),
(3,	'000064559',	'1009953222222',	'2015-09-21',	'2025-09-21'),
(4,	'000035279',	'1110983333333',	'2008-05-27',	'2018-05-27'),
(5,	'000098838',	'1203978444444',	'2001-02-22',	'2011-02-22'),
(6,	'000015367',	'1308959555555',	'2017-07-08',	'2027-07-08');

-- 2018-05-26 18:54:48
