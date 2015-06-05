-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: mark-mtpanel2
-- ------------------------------------------------------
-- Server version	5.6.23-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `članarina`
--

DROP TABLE IF EXISTS `članarina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `članarina` (
  `ID_cl` varchar(25) NOT NULL,
  `opis_cl` text NOT NULL,
  `cijena_cl` decimal(5,0) NOT NULL,
  PRIMARY KEY (`ID_cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `članarina`
--

LOCK TABLES `članarina` WRITE;
/*!40000 ALTER TABLE `članarina` DISABLE KEYS */;
INSERT INTO `članarina` VALUES ('osnovna_članarina','Pogodnosti: međusobno razmjenjivanje datoteka preko ftp servera u obliku mrežnog diska.',200);
/*!40000 ALTER TABLE `članarina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `čvor`
--

DROP TABLE IF EXISTS `čvor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `čvor` (
  `ID_čvor` varchar(25) NOT NULL,
  `brSpojenikKorisnika` int(11) NOT NULL DEFAULT '0',
  `maxBrojPodrzanihKorisnika` int(11) NOT NULL,
  PRIMARY KEY (`ID_čvor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `čvor`
--

LOCK TABLES `čvor` WRITE;
/*!40000 ALTER TABLE `čvor` DISABLE KEYS */;
INSERT INTO `čvor` VALUES ('Pleškovec_Node',0,10),('Vučetine_Node',0,15);
/*!40000 ALTER TABLE `čvor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boraviu`
--

DROP TABLE IF EXISTS `boraviu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boraviu` (
  `ID_us` varchar(20) NOT NULL,
  `nazivMjesto` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  KEY `ID_us` (`ID_us`),
  KEY `boraviu_ibfk_2_idx` (`nazivMjesto`),
  CONSTRAINT `boraviu_ibfk_1` FOREIGN KEY (`ID_us`) REFERENCES `user` (`ID_us`),
  CONSTRAINT `boraviu_ibfk_2` FOREIGN KEY (`nazivMjesto`) REFERENCES `mjesto` (`nazivMjesto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boraviu`
--

LOCK TABLES `boraviu` WRITE;
/*!40000 ALTER TABLE `boraviu` DISABLE KEYS */;
INSERT INTO `boraviu` VALUES ('24568744123','Vučetinec','Vučetinec 25b'),('56456489789','Čakovec','Čakovec 217'),('45667894564','Babino Polje','fsdf'),('4566764','Babino Polje','fsdf');
/*!40000 ALTER TABLE `boraviu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ima_profil`
--

DROP TABLE IF EXISTS `ima_profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ima_profil` (
  `ID_us` varchar(20) NOT NULL,
  `naziv_pro` varchar(25) NOT NULL,
  `statusProfila` varchar(15) NOT NULL DEFAULT 'aktivan',
  `vrsta_pro` varchar(10) NOT NULL,
  KEY `ima_profil_ibfk_1_idx` (`ID_us`),
  KEY `ima_profil_ibfk_2_idx` (`naziv_pro`),
  CONSTRAINT `ima_profil_ibfk_1` FOREIGN KEY (`ID_us`) REFERENCES `user` (`ID_us`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ima_profil_ibfk_2` FOREIGN KEY (`naziv_pro`) REFERENCES `profile` (`naziv_pro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ima_profil`
--

LOCK TABLES `ima_profil` WRITE;
/*!40000 ALTER TABLE `ima_profil` DISABLE KEYS */;
INSERT INTO `ima_profil` VALUES ('24568744123','mmarcec007','aktivan','User'),('56456489789','filip11','aktivan','User'),('45667894564','ccigo','aktivan','User'),('4566764','ccigo2','aktivan','User');
/*!40000 ALTER TABLE `ima_profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `je_naručio`
--

DROP TABLE IF EXISTS `je_naručio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `je_naručio` (
  `ID_us` varchar(20) NOT NULL,
  `ID_pa` varchar(15) NOT NULL,
  `datum_aktiviranja_pa` date NOT NULL,
  KEY `ID_us` (`ID_us`),
  KEY `je_naručio_ibfk_2_idx` (`ID_pa`),
  CONSTRAINT `je_naručio_ibfk_1` FOREIGN KEY (`ID_us`) REFERENCES `user` (`ID_us`),
  CONSTRAINT `je_naručio_ibfk_2` FOREIGN KEY (`ID_pa`) REFERENCES `paket` (`ID_pa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `je_naručio`
--

LOCK TABLES `je_naručio` WRITE;
/*!40000 ALTER TABLE `je_naručio` DISABLE KEYS */;
INSERT INTO `je_naručio` VALUES ('24568744123','VPN-multi','2015-05-13'),('56456489789','VPN-multi','2015-05-14'),('45667894564','VPN-multi','2015-05-14'),('4566764','VPN-multi','2015-05-14');
/*!40000 ALTER TABLE `je_naručio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `je_platio`
--

DROP TABLE IF EXISTS `je_platio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `je_platio` (
  `ID_us` varchar(20) NOT NULL,
  `ID_pa` varchar(15) NOT NULL,
  `ID_cl` varchar(45) NOT NULL,
  `rok_uplate` date NOT NULL,
  `status_uplate` varchar(15) NOT NULL DEFAULT 'nije plačeno',
  KEY `ID_us` (`ID_us`),
  KEY `je_platio_ibfk_2_idx` (`ID_pa`),
  KEY `je_platio_ibfk_3_idx` (`ID_cl`),
  CONSTRAINT `je_platio_ibfk_1` FOREIGN KEY (`ID_us`) REFERENCES `user` (`ID_us`),
  CONSTRAINT `je_platio_ibfk_2` FOREIGN KEY (`ID_pa`) REFERENCES `paket` (`ID_pa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `je_platio_ibfk_3` FOREIGN KEY (`ID_cl`) REFERENCES `članarina` (`ID_cl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `je_platio`
--

LOCK TABLES `je_platio` WRITE;
/*!40000 ALTER TABLE `je_platio` DISABLE KEYS */;
INSERT INTO `je_platio` VALUES ('24568744123','VPN-multi','osnovna_članarina','2015-08-11','nije plačeno'),('56456489789','VPN-multi','osnovna_članarina','2015-08-12','nije plačeno'),('45667894564','VPN-multi','osnovna_članarina','2015-08-12','nije plačeno'),('4566764','VPN-multi','osnovna_članarina','2015-08-12','nije plačeno');
/*!40000 ALTER TABLE `je_platio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jepostavljen`
--

DROP TABLE IF EXISTS `jepostavljen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jepostavljen` (
  `ID_čvor` varchar(20) NOT NULL,
  `nazivMjesto` varchar(45) NOT NULL,
  KEY `ID_čvor` (`ID_čvor`),
  KEY `jepostavljen_ibfk_2_idx` (`nazivMjesto`),
  CONSTRAINT `jepostavljen_ibfk_1` FOREIGN KEY (`ID_čvor`) REFERENCES `čvor` (`ID_čvor`),
  CONSTRAINT `jepostavljen_ibfk_2` FOREIGN KEY (`nazivMjesto`) REFERENCES `mjesto` (`nazivMjesto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jepostavljen`
--

LOCK TABLES `jepostavljen` WRITE;
/*!40000 ALTER TABLE `jepostavljen` DISABLE KEYS */;
INSERT INTO `jepostavljen` VALUES ('Vučetine_Node','Vučetinec'),('Pleškovec_Node','Pleškovec');
/*!40000 ALTER TABLE `jepostavljen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jespojen`
--

DROP TABLE IF EXISTS `jespojen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jespojen` (
  `ID_us` varchar(20) NOT NULL,
  `ID_čvor` varchar(25) NOT NULL,
  `nazivKonekcije` varchar(45) NOT NULL,
  KEY `ID_us` (`ID_us`),
  KEY `jespojen_ibfk_2_idx` (`ID_čvor`),
  CONSTRAINT `jespojen_ibfk_1` FOREIGN KEY (`ID_us`) REFERENCES `user` (`ID_us`),
  CONSTRAINT `jespojen_ibfk_2` FOREIGN KEY (`ID_čvor`) REFERENCES `čvor` (`ID_čvor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jespojen`
--

LOCK TABLES `jespojen` WRITE;
/*!40000 ALTER TABLE `jespojen` DISABLE KEYS */;
INSERT INTO `jespojen` VALUES ('24568744123','Pleškovec_Node','Mark_doma'),('56456489789','Pleškovec_Node','Filio_doma'),('45667894564','Pleškovec_Node','cigo_doma'),('4566764','Vučetine_Node','cigo_doma');
/*!40000 ALTER TABLE `jespojen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mjesto`
--

DROP TABLE IF EXISTS `mjesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mjesto` (
  `pbrMjesto` int(11) NOT NULL,
  `nazivMjesto` varchar(45) NOT NULL,
  `sifZupanija` int(11) DEFAULT NULL,
  PRIMARY KEY (`nazivMjesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mjesto`
--

LOCK TABLES `mjesto` WRITE;
/*!40000 ALTER TABLE `mjesto` DISABLE KEYS */;
INSERT INTO `mjesto` VALUES (31205,'Aljmaš',14),(20225,'Babino Polje',19),(52445,'Baderna',18),(32235,'Bapska',16),(21320,'Baška Voda',17),(51555,'Belej',8),(31300,'Beli Manastir',14),(23420,'Benkovac',13),(23205,'Bibinje',13),(23210,'Biograd na moru',13),(43000,'Bjelovar',7),(32225,'Bobota',16),(21420,'Bol',17),(47251,'Bosiljevo',4),(32275,'Bošnjaci',16),(31301,'Branjin Vrh',14),(23285,'Brbinj',13),(31225,'Breznica Našička',14),(42225,'Breznički Hum',5),(53260,'Brinje',9),(52460,'Buje (Buie)',18),(53235,'Bunić',9),(52420,'Buzet',18),(34350,'Čaglin',11),(40000,'Čakovec',20),(20210,'Cavtat',19),(43240,'Čazma',7),(31325,'Čeminac',14),(51260,'Crikvenica',8),(43500,'Daruvar',7),(35425,'Davor',12),(51300,'Delnice',8),(21232,'Dicmo',17),(44435,'Divuša',3),(44205,'Donja Bačuga',3),(49240,'Donja Stubica',2),(42255,'Donja Višnjica',5),(42245,'Donja Voća',5),(21205,'Donji Dolac',17),(40320,'Donji Kraljevec',20),(53250,'Donji Lapac',9),(31540,'Donji Miholjac',14),(47201,'Draganići',4),(21275,'Dragljane',17),(51265,'Dramalj',8),(40325,'Draškovec',20),(31305,'Draž',14),(22320,'Drniš',15),(21225,'Drvenik Veliki',17),(20000,'Dubrovnik',19),(47250,'Duga Resa',4),(21315,'Dugi Rat',17),(10370,'Dugo Selo',1),(44440,'Dvor',3),(31215,'Ernestinovo',14),(43280,'Garešnica',7),(44400,'Glina',3),(44425,'Gornja Bučica',3),(49245,'Gornja Stubica',2),(43245,'Gornji Draganec',7),(10255,'Gornji Stupnik',1),(53000,'Gospić',9),(23440,'Gračac',13),(21330,'Gradac',17),(10345,'Gradec',1),(21430,'Grohote',17),(43290,'Grubišno Polje',7),(20215,'Gruda',19),(32260,'Gunja',16),(44410,'Gvozd',3),(44450,'Hrvatska Dubica',3),(44430,'Hrvatska Kostajnica',3),(21450,'Hvar',17),(21260,'Imotski',17),(42240,'Ivanec',5),(10310,'Ivanić-Grad',1),(32280,'Jarmina',16),(10450,'Jastrebarsko',1),(21465,'Jelsa',17),(22235,'Kaprije',15),(31315,'Karanac',14),(47000,'Karlovac',4),(51215,'Kastav',8),(21215,'Kaštel Lukšić',17),(22310,'Kijevo',15),(22305,'Kistanje',15),(49290,'Klanjec',2),(22300,'Knin',15),(21485,'Komiža',17),(43505,'Končanica',7),(48000,'Koprivnica',6),(20260,'Korčula',19),(53230,'Korenica',9),(10455,'Kostanjevac',1),(49000,'Krapina',2),(44325,'Krapje',3),(48260,'Križevci',6),(51500,'Krk',8),(49295,'Kumrovec',2),(10295,'Kupljenovo',1),(44320,'Kutina',3),(34340,'Kutjevo',11),(52220,'Labin',18),(20290,'Lastovo',19),(51251,'Ledenice',8),(42250,'Lepoglava',5),(44271,'Letovanić',3),(47305,'Lička Jesenica',4),(40311,'Lopatinec',20),(51415,'Lovran',8),(10250,'Lučko',1),(42230,'Ludbreg',5),(53285,'Lukovo',9),(21300,'Makarska',17),(44405,'Mali Gradac',3),(51550,'Mali Lošinj',8),(31555,'Marijanci',14),(51211,'Matulji',8),(53205,'Medak',9),(20350,'Metković',19),(21405,'Milna',17),(32240,'Mirkovci',16),(51325,'Moravice',8),(51315,'Mrkopalj',8),(40315,'Mursko Središče',20),(31500,'Našice',14),(40305,'Nedelišče',20),(32245,'Nijemci',16),(35400,'Nova Gradiška',12),(49255,'Novi Golubovec',2),(42220,'Novi Marof',5),(51250,'Novi Vinodolski',8),(48325,'Novigrad Podravski',6),(10415,'Novo Čiče',1),(48355,'Novo Virje',6),(10315,'Novoselec',1),(44330,'Novska',3),(23450,'Obrovac',13),(47300,'Ogulin',4),(35430,'Okučani',12),(21310,'Omiš',17),(51410,'Opatija',8),(20355,'Opuzen',19),(33515,'Orahovica',10),(20250,'Orebić',19),(35250,'Oriovac',12),(34320,'Orljavac',11),(31000,'Osijek',14),(20242,'Oskorušno',19),(47302,'Oštarije',4),(21235,'Otišić',17),(53220,'Otočac',9),(47280,'Ozalj',4),(23250,'Pag',13),(34550,'Pakrac',11),(52000,'Pazin',18),(22205,'Perković',15),(44250,'Petrinja',3),(33405,'Pitomača',10),(40311,'Pleškovec',20),(34310,'Pleternica',11),(20340,'Ploče',19),(21335,'Podaca',17),(31530,'Podravska Moslavina',14),(52440,'Poreč',18),(21410,'Postira',17),(34000,'Požega',11),(51225,'Praputnjak',8),(52100,'Pula',18),(51280,'Rab',8),(47285,'Radatovići',4),(47245,'Rakovica',4),(34315,'Ratkovica',11),(48265,'Raven',6),(48305,'Reka',6),(51000,'Rijeka',8),(52425,'Roč',18),(52210,'Rovinj (Rovigno)',18),(10430,'Samobor',1),(52475,'Savudrija (Salvore)',18),(21425,'Selca',17),(31415,'Selci Đakovački',14),(53270,'Senj',9),(21250,'Šestanovac',17),(10360,'Sesvete',1),(22000,'Šibenik',15),(22010,'Šibenik-Brodarica',15),(22020,'Šibenik-Ražine',15),(22030,'Šibenik-Zablaće',15),(23295,'Silba',13),(51515,'Šilo',8),(21230,'Sinj',17),(44000,'Sisak',3),(44010,'Sisak-Caprag',3),(33520,'Slatina',10),(35000,'Slavonski Brod',12),(35255,'Slavonski Kobaš',12),(35220,'Slavonski Šamac',12),(47240,'Slunj',4),(21210,'Solin',17),(32255,'Soljani',16),(33525,'Sopje',10),(21000,'Split',17),(23445,'Srb',13),(35435,'Stara Gradiška',12),(21460,'Stari Grad',17),(35420,'Staro Petrovo Selo',12),(20345,'Staševica',19),(20230,'Ston',19),(31410,'Strizivojna',14),(21265,'Studenci',17),(33410,'Suhopolje',10),(44210,'Sunja',3),(21400,'Supetar',17),(10380,'Sveti Ivan Zelina',21),(10435,'Sveti Martin pod Okićem',1),(53225,'Švica',9),(35215,'Svilaj',12),(52465,'Tar',18),(21245,'Tijarica',17),(22240,'Tisno',15),(20205,'Topolo',19),(44415,'Topusko',3),(23245,'Tribanj',13),(21240,'Trilj',17),(21220,'Trogir',17),(20240,'Trpanj',19),(51305,'Tršće',8),(20245,'Trstenik',19),(21325,'Tučepi',17),(49215,'Tuhelj',2),(23275,'Ugljan',13),(52470,'Umag (Umago)',18),(31550,'Valpovo',14),(42000,'Varaždin',5),(20270,'Vela Luka',19),(34330,'Velika',11),(10410,'Velika Gorica',1),(43271,'Velika Pisanica',7),(43285,'Velika Trnovitica',7),(43531,'Veliki Bastaji',7),(43270,'Veliki Grđevac',7),(34335,'Vetovo',11),(42205,'Vidovec',5),(31531,'Viljevo',14),(32100,'Vinkovci',16),(33000,'Virovitica',10),(21480,'Vis',17),(31220,'Višnjevac',14),(52215,'Vodnjan (Dignano)',18),(47220,'Vojnić',4),(10340,'Vrbovec',1),(35210,'Vrpolje',12),(52450,'Vrsar',18),(23235,'Vrsi',13),(40311,'Vučetinec',20),(47205,'Vukmanić',4),(32000,'Vukovar',16),(49210,'Zabok',2),(23000,'Zadar',13),(21255,'Zadvarje',17),(10000,'Zagreb',21),(10040,'Zagreb-Dubrava',21),(10020,'Zagreb-Novi Zagreb',21),(10010,'Zagreb-Sloboština',21),(10090,'Zagreb-Susedgrad',21),(21270,'Zagvozd',17),(10290,'Zaprešić',1),(22215,'Zaton',15),(20235,'Zaton Veliki',19),(49250,'Zlatar',2),(20275,'Žrnovo',19),(32270,'Županja',16),(31400,'Đakovo',14),(49225,'Đurmanec',2),(48350,'Đurđevac',6);
/*!40000 ALTER TABLE `mjesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paket`
--

DROP TABLE IF EXISTS `paket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paket` (
  `ID_pa` varchar(15) NOT NULL,
  `cijena_pa` decimal(5,0) NOT NULL,
  `oprema_pa` text NOT NULL,
  UNIQUE KEY `ID_pa_UNIQUE` (`ID_pa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paket`
--

LOCK TABLES `paket` WRITE;
/*!40000 ALTER TABLE `paket` DISABLE KEYS */;
INSERT INTO `paket` VALUES ('VPN-admin',0,'Oprema uz paket: WiFi router, bežični AP te odašiljač'),('VPN-multi',50,'Oprema uz paket: WiFi router, bežični AP,,,'),('VPN-normal',50,'Oprema uz paket: router, bežečni prijamnik.....&nbsp;');
/*!40000 ALTER TABLE `paket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `naziv_pro` varchar(25) NOT NULL,
  `PW_pro` varchar(20) NOT NULL,
  PRIMARY KEY (`naziv_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Profil korisnika, admin ili normalni korisnici';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES ('ccigo','cjbdwfi'),('ccigo2','cjbdwfi'),('filip11','medomedo'),('mmarcec007','cobrax01');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_login_attempt`
--

DROP TABLE IF EXISTS `reg_login_attempt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_login_attempt` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` int(11) unsigned NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_login_attempt`
--

LOCK TABLES `reg_login_attempt` WRITE;
/*!40000 ALTER TABLE `reg_login_attempt` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_login_attempt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID_us` varchar(20) NOT NULL,
  `ime_us` varchar(20) NOT NULL,
  `prezime_us` varchar(45) NOT NULL,
  UNIQUE KEY `ID_us_UNIQUE` (`ID_us`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('24568744123','Mark','Marčec'),('4566764','Crni','Cigo'),('45667894564','Crni','Cigo'),('56456489789','Filip','Patafta');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_stranica`
--

DROP TABLE IF EXISTS `web_stranica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_stranica` (
  `URL_webS` varchar(50) NOT NULL,
  `naziv_webS` varchar(45) NOT NULL,
  PRIMARY KEY (`URL_webS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_stranica`
--

LOCK TABLES `web_stranica` WRITE;
/*!40000 ALTER TABLE `web_stranica` DISABLE KEYS */;
INSERT INTO `web_stranica` VALUES ('https://www.facebook.com/','FACEBOOK');
/*!40000 ALTER TABLE `web_stranica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zupanija`
--

DROP TABLE IF EXISTS `zupanija`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zupanija` (
  `sifZupanija` int(11) NOT NULL,
  `nazivZupanija` varchar(45) NOT NULL,
  PRIMARY KEY (`sifZupanija`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zupanija`
--

LOCK TABLES `zupanija` WRITE;
/*!40000 ALTER TABLE `zupanija` DISABLE KEYS */;
INSERT INTO `zupanija` VALUES (0,'Nepoznata županija'),(1,'Zagrebačka'),(2,'Krapinsko-zagorska'),(3,'Sisačko-moslavačka'),(4,'Karlovačka'),(5,'Varaždinska'),(6,'Koprivničko-križevačka'),(7,'Bjelovarsko-bilogorska'),(8,'Primorsko-goranska'),(9,'Ličko-senjska'),(10,'Virovitičko-podravska'),(11,'Požeško-slavonska'),(12,'Brodsko-posavska'),(13,'Zadarska'),(14,'Osječko-baranjska'),(15,'Šibensko-kninska'),(16,'Vukovarsko-srijemska'),(17,'Splitsko-dalmatinska'),(18,'Istarska'),(19,'Dubrovačko-neretvanska'),(20,'Međimurska'),(21,'Grad Zagreb');
/*!40000 ALTER TABLE `zupanija` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-05 17:31:28
