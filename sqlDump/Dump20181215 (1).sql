-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: aca_db
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `advice`
--

DROP TABLE IF EXISTS `advice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advice` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(60) NOT NULL,
  `input_manager_name` varchar(20) NOT NULL,
  `contents` text NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advice`
--

LOCK TABLES `advice` WRITE;
/*!40000 ALTER TABLE `advice` DISABLE KEYS */;
INSERT INTO `advice` VALUES (1,'aaaa1111','임중섭','1','2018-10-28 17:51:29'),(2,'aaaa1118','임중섭','J 지난밤 꿈속에 J 만났던 모습은 내 가슴속 깊이 여울져 남아 있네','2018-10-28 17:53:18'),(3,'aaaa1111','엄홍인','2','2018-10-28 17:54:12'),(4,'aaaa1118','엄홍인','니가 있는 곳이 어디든 난 따라가 그 길을 비춰줄께','2018-10-28 17:54:59'),(14,'aaaa1111','임중섭','3','2018-10-30 15:58:44'),(19,'aaaa1111','임중섭','4','2018-11-01 17:11:23'),(23,'aaaa1111','임중섭','55555','2018-11-04 16:29:31');
/*!40000 ALTER TABLE `advice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer_image`
--

DROP TABLE IF EXISTS `answer_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer_image` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `book_num` int(11) NOT NULL,
  `type_index_num` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `type1` int(11) NOT NULL,
  `type2` int(11) NOT NULL,
  `type3` int(11) NOT NULL,
  `type4` int(11) NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`,`image`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer_image`
--

LOCK TABLES `answer_image` WRITE;
/*!40000 ALTER TABLE `answer_image` DISABLE KEYS */;
INSERT INTO `answer_image` VALUES (3,'ANSER_1_2_4_5_28_157.png',1,2,4,5,28,157,5,0,1,0,0,'2018-12-15 00:36:36'),(4,'ANSER_1_2_4_5_28_162.png',1,2,4,5,28,162,5,0,1,0,0,'2018-12-15 00:36:36'),(5,'ANSER_1_2_4_5_29_164.png',1,2,4,5,29,164,5,0,1,0,0,'2018-12-15 00:36:36'),(6,'ANSER_1_2_4_5_29_168.png',1,2,4,5,29,168,5,0,1,0,0,'2018-12-15 00:36:36'),(7,'ANSER_1_2_4_5_29_169.png',1,2,4,5,29,169,5,0,1,0,0,'2018-12-15 00:36:36'),(8,'ANSER_1_2_4_5_30_172.png',1,2,4,5,30,172,5,0,1,0,0,'2018-12-15 00:36:36'),(9,'ANSER_1_2_4_5_30_174.png',1,2,4,5,30,174,5,0,1,0,0,'2018-12-15 00:36:36'),(10,'ANSER_1_2_4_5_31_178.png',1,2,4,5,31,178,5,0,1,0,0,'2018-12-15 00:36:36'),(11,'ANSER_1_2_4_5_31_183.png',1,2,4,5,31,183,5,0,1,0,0,'2018-12-15 00:36:36'),(12,'ANSER_1_2_4_5_32_186.png',1,2,4,5,32,186,5,0,1,0,0,'2018-12-15 00:36:36'),(13,'ANSER_1_2_3_5_33_194.png',1,2,3,5,33,194,5,0,1,0,0,'2018-12-15 00:36:36'),(14,'ANSER_1_2_3_5_33_197.png',1,2,3,5,33,197,5,0,1,0,0,'2018-12-15 00:36:36'),(15,'ANSER_1_2_3_5_34_205.png',1,2,3,5,34,205,5,0,1,0,0,'2018-12-15 00:36:36'),(16,'ANSER_1_2_3_5_35_208.png',1,2,3,5,35,208,5,0,1,0,0,'2018-12-15 00:36:36'),(17,'ANSER_1_2_3_5_35_214.png',1,2,3,5,35,214,5,0,1,0,0,'2018-12-15 00:36:36'),(18,'ANSER_1_2_3_5_38_237.png',1,2,3,5,38,237,5,0,1,0,0,'2018-12-15 00:36:36'),(19,'ANSER_1_2_3_5_39_240.png',1,2,3,5,39,240,5,0,1,0,0,'2018-12-15 00:36:36'),(20,'ANSER_1_2_3_5_39_245.png',1,2,3,5,39,245,5,0,1,0,0,'2018-12-15 00:36:36'),(21,'ANSER_1_2_3_5_40_249.png',1,2,3,5,40,249,5,0,1,0,0,'2018-12-15 00:36:36'),(22,'ANSER_1_2_3_5_40_250.png',1,2,3,5,40,250,5,0,1,0,0,'2018-12-15 00:36:36'),(23,'ANSER_1_2_3_5_41_252.png',1,2,3,5,41,252,5,0,1,0,0,'2018-12-15 00:36:36'),(24,'ANSER_1_2_3_5_42_259.png',1,2,3,5,42,259,5,0,1,0,0,'2018-12-15 00:36:36'),(25,'ANSER_1_2_3_5_42_260.png',1,2,3,5,42,260,5,0,1,0,0,'2018-12-15 00:36:36'),(26,'ANSER_1_2_3_5_42_262.png',1,2,3,5,42,262,5,0,1,0,0,'2018-12-15 00:36:36'),(27,'ANSER_1_2_3_5_42_265.png',1,2,3,5,42,265,5,0,1,0,0,'2018-12-15 00:36:36'),(28,'ANSWER_1_2_3_5_11111_11111.png',1,2,3,5,11111,11111,5,0,1,0,0,'2018-12-15 01:20:15');
/*!40000 ALTER TABLE `answer_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correct_math`
--

DROP TABLE IF EXISTS `correct_math`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correct_math` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `지수함수` int(11) DEFAULT NULL,
  `다항식연산` int(11) DEFAULT NULL,
  `삼각함수` int(11) DEFAULT NULL,
  `도함수` int(11) DEFAULT NULL,
  `로그함수` int(11) DEFAULT NULL,
  `등차수열` int(11) DEFAULT NULL,
  `등비수열` int(11) DEFAULT NULL,
  `수열의극한` int(11) DEFAULT NULL,
  `함수의 극한` int(11) DEFAULT NULL,
  `함수의 연속` int(11) DEFAULT NULL,
  `지수함수와 로그함수의 극한` int(11) DEFAULT NULL,
  `삼각함수의 극한` int(11) DEFAULT NULL,
  `도함수의 활용` int(11) DEFAULT NULL,
  `순열과 조합` int(11) DEFAULT NULL,
  `확률` int(11) DEFAULT NULL,
  `확룰분포와 통계` int(11) DEFAULT NULL,
  `행렬` int(11) DEFAULT NULL,
  `2` int(11) DEFAULT NULL COMMENT '선택하지 않았을때 넣는 공간',
  `3` int(11) DEFAULT NULL COMMENT '선택하지 않았을때 넣는 공간',
  `4` int(11) DEFAULT NULL COMMENT '선택하지 않았을때 넣는 공간',
  `total` int(11) DEFAULT NULL,
  `id` varchar(45) NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correct_math`
--

LOCK TABLES `correct_math` WRITE;
/*!40000 ALTER TABLE `correct_math` DISABLE KEYS */;
INSERT INTO `correct_math` VALUES (1,2,NULL,3,NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,10,'aaaa1111','2018-11-29 14:25:21'),(2,1,NULL,10,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,20,'aaaa1111','2018-11-29 14:26:14'),(3,12,NULL,9,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,30,'aaaa1111','2018-11-29 14:28:34'),(4,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,15,'aaaa1111','2018-12-03 14:31:38'),(5,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:45:01'),(6,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:46:12'),(7,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:47:16'),(8,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:49:36'),(9,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:50:28'),(10,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,15,'aaaa1111','2018-12-03 14:50:42'),(11,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-04 02:47:33'),(12,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,8,'aaaa1111','2018-12-04 14:05:05'),(13,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,10,'aaaa1111','2018-12-04 14:09:40'),(14,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,13,'aaaa1111','2018-12-04 14:16:44'),(15,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-12 16:50:50'),(16,NULL,NULL,NULL,NULL,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,10,'aaaa1111','2018-12-15 01:29:15');
/*!40000 ALTER TABLE `correct_math` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(60) NOT NULL,
  `pw_hash` varchar(300) NOT NULL,
  `pw_salt` varchar(200) NOT NULL,
  `school_name` varchar(20) NOT NULL,
  `school_level` varchar(10) NOT NULL,
  `grade` int(11) NOT NULL,
  `univ` varchar(45) NOT NULL,
  `score` varchar(45) NOT NULL,
  `stu_tea` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_num` varchar(30) NOT NULL,
  `parents_phone_num` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `affiliation` varchar(20) NOT NULL COMMENT '계열',
  `manager_name` varchar(20) NOT NULL,
  `team_leader` varchar(20) NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'aaaa1111','16c495abc2dff161626fd919b6de490d7f00a001ab7af2be12e0a27068cce5cb','loGiRWasqRJGAi62jZVRk626OpTZr9gGY82sqMzY3GeqVgxwNZ864ND6i6cO4','성서','고',3,'서울대','상중',1,'우왁굳','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(2,'aaaa1112','bc9affce6c29bd71db877f00a59699d1bf5e9fdcd8ae6fcd88942a112d4b42bd','ZxmL9KTkVtR13lMpL78irsaG2QwniFBUUBUvTNoY01NcBMeV9FgkMaEEXvNhG5CYG','성산','고',1,'서울대','상중',1,'노돌리','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(3,'aaaa1113','b339a656e8fa1e2b20698a769deb3b97159d8b9f4f1c555ac23ad6d902db872b','Sox7szAAbT1xODXkgJJjLmyfFA9OZdCq99JtR88di494NZZE2DpfBbWv575AfgoD','원화여','고',2,'서울대','상중',1,'탬탬버린','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(4,'aaaa1114','1f7c8af3f7ffdf932800079d08ec751a892e10a1485a5ba9b5be203d5747e75c','cyy40UjHcTANNJ01oc7ROgCbusGVsiS94MViUFYhCXrcWkamds0dmZbmdqgW8zhBv','경화여','고',3,'서울대','상중',1,'새봄추','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(5,'aaaa1115','ac41a74e8265d44988fde280585618fb88ce882beb865867645548d5a5debee0','xh3MIfeL29vANSpGFi3P7XRKxvuYZ5IPq03tJ6QEy2ZyRtGnqDAWleDw5JRF1gnGG','달성','고',3,'서울대','상중',1,'깝도이','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(6,'aaaa1116','fa05067cfb7b413118486f130d3c277f9e55fe645befc87ec0b47823b46c4706','9TslIF4S60VDBSoTajOkJMZRxNwMmsGzv83sYmCQFjkFbAQFvW2jhiixkHfL256ZD','경원','고',3,'서울대','상중',1,'최고기','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(7,'aaaa1117','dc59941689bdb11e355b285301f96c87f680ffbf2520879474f3d0f94df582d1','IoeuA8NbjrQ4qyDVp5AlJQ3JkXTanuwdJUmLdcbjGvf7YjSAEUxRqGLSIOmoKIDJ','성서','고',1,'서울대','상중',1,'보겸','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(8,'aaaa1118','cfbbdfc601713c2d07c9c59ebb2323bdfae9453486be1b0ede8890f04d75ba26','T8fjhem4jCZhWEFQB2dATxMX7YaZxvZMxDGC6Uk1Yxd4tkqPvSrDUTOXl3yBMZDPt','성산','고',2,'서울대','상중',1,'로이조','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(9,'aaaa1119','1af6ae7e5cb9bed47aa6aacb962a357981493a69e4922312e57588497a4c82d4','cR6cidmf696cJ0UfNceXefKTlsOksshaEk9pXBd4CiIJrQJkTDoCYnNXzNFXJMwe2','원화여','고',1,'서울대','상중',1,'외질혜','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(10,'aaaa1120','75b3c85a70b12f21a72a886c2b0b610f7c11cfd53593c766e561c6544e19cde8','b3fT02uRgQuTifr3zwOv3jW27QlTBBNQ3V1NSUTOyA7JyDu59HZCY0zjveJCTez7','경화여','고',2,'서울대','상중',1,'김영희','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(11,'aaaa1121','aa52821d755df207534064c9a6d097a4b731038e1b16336aa3b8b85b69b350f4','sePrKlpdTpBiwVuZayAjw5lmtEjAZW24dIgI7g992dCugtyLyNP3mE9YhJ9Px4nlC','달성','고',3,'서울대','중',1,'홍길동','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(12,'aaaa1122','79ed9aa80dd5fe910345a1ae78dd7623d338a4eb81e0c263465d68f9d9c0127e','88xkXirFdXq82IU8Hy2pfohMtQ1RxRIDBWjnjzx4m3ffIJGOWl5xJSI831iWfVDj','경원','고',2,'서울대','중',1,'조매력','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(13,'aaaa1123','91e40a59a1942cf728678b1cebf6cd06d8198ca524617ce9c6125ae834d6db05','zHF41rq4NrfBTN8yQCGhUcxi1uTeiQg7XooLbB7MraVBtSIGnmyYknMexYYjJUOws','성서','고',3,'서울대','중',1,'박민수','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(14,'aaaa1124','6e363fbf523ad2b0fad4491cb65da44e12c5384fc36e21d0c296adfa6893431c','DQCKLAUb4tpPLVGooNiR7yG2qtjPM5Kevl1jzmsndiPyAUVWjFGCW6l9H30gMyTV','성산','고',3,'서울대','중',1,'해물파전','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(15,'aaaa1125','d454a932f7543b282e829ade84c7a817c2380725e0b7ca495c701d00db7c2fa4','xvAf6UaBCNIMT9vq3lHyUw8XclhSTKAzX3UE6CyN0418mhPJQrxTOWaB9Z7sVbOvy','원화여','고',2,'서울대','중',1,'초승달','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(16,'aaaa1126','a22e7e3bac146cc8d9a199977580019e432501923036f1a444d266c54184ce05','ptsNQGto4KDEerdBBioZ1Nl7ezSQoERQr9WtJFh3ja1rw1bLa7qTPgF3jjKBNKgwd','경화여','고',3,'고려대','중',1,'견자희','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(17,'aaaa1127','d4bb1bab88eccaa8c7ccc6f1c813a2e14bc015ba90a87e243a93120c2ea1259a','AT60YkMYaxN2k6EmncTd1E5IMGOOAGsExbvw8ed1RoLmoMunNHWMui76yK1byhHyd','달성','고',1,'고려대','중',1,'케인','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(18,'aaaa1128','274d7b17d4fdec2d603ac290ba4fc9b305ca96a4d6e2d2a743140df124d75551','LLOTlmwJRecXsokkGQPLgysX0hUlgumu29nDYyGkW0CyI3clpGFQs0dwwoAVURmZ','경원','고',2,'고려대','중',1,'공혁준','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(19,'aaaa1129','026258ef977a887d7206002538e1aa3feb9e440109bfc606d6c2d630c47be7f8','QdhdyQVs0gnbZI05HTnX5Taz86XWlG9jd7x7MXpgHXV1jUvvT1S4k01hyILwVCsQF','성서','고',1,'고려대','중하',1,'백작추','0','0','ok','문과','임중섭','이광진','2018-11-16 01:29:10'),(20,'aaaa1130','65c8c506e27063fb2985cdb29a19f4b16e185efbdf7d765a12ac316827cd55ae','l775B11FjjfLkR8rpVN9ZtnCIVtTk0BMFC0CIQKkoXhLN1rBPKWSjuYa0famhYF','성산','고',1,'고려대','중하',1,'짬타수아','0','0','ok','이과','엄홍인','이광진','2018-11-16 01:29:10'),(21,'quhb2455','b597f7e4051050f465ba7e6bf0ba894715a176e8e6e286fd834cd102870346e9','iDehQmuFcfboPRS03H7INjKsXP1heLTubsapQ05nm1Yyd82MqnWGMyKlOLllruIo','0','0',0,'0','0',0,'임중섭','0','0','ok','매니저','매니저','이광진','2018-11-16 01:29:10'),(22,'bbbb0000','d7769ede84b8b73516e08be7e1a11f1b0d380d929efd046c8e093ba241d8a2d1','1234','1','0',0,'0','0',0,'엄홍인','0','0','ok','매니저','매니저','이광진','2018-11-16 01:29:10'),(23,'bbbb0001','9a38ee34543c217e9bfb7f823f00d17606cff41beedfa159e1b0b3c0d375c9da','1234','2','0',0,'0','0',0,'이광진','0','0','ok','매니저','매니저','이광진','2018-11-16 01:29:10'),(24,'bbbb0002','a309ee5a4f6c63328fc0b0d3fc724fc5e01f914772f95bf01acf436002f24679','1234','3','0',0,'0','0',0,'선생1','0','0','ok','매니저','매니저','이광진','2018-11-16 01:29:10'),(25,'bbbb0003','601eb1c045bb7d8a024ab84e21830448c7260232846079045591f12f5660d47d','1234','4','0',0,'0','0',0,'선생2','0','0','ok','매니저','매니저','이광진','2018-11-16 01:29:10'),(26,'bbbb0004','634f9b2896d61d57a7bd974c358704d6b5ba985413f5fb36d7bf22de66717193','1234','5','0',0,'0','0',0,'선생3','0','0','ok','매니저','매니저','이광진','2018-11-16 01:29:10'),(40,'zzzz1234','700142c245d88bbd6a6628e87c18cad35d4ac7267535976f3b345e0506709ce4','8WEoEZudMh5u2Jjsit1vOhbN9vvQgpUzw9BVIrvevvoUOxZSm1aGeQoJuj8Jg3Cw','6','0',0,'0','0',0,'짱짱중소비','1','0','ok','매니저','짱짱중소비','이광진','2018-11-16 01:29:10'),(41,'zzzz12345','feeb77c236aff7e159032a130bd367c71839fc1642c05a766848dc7bd491e77a','k6ym6EpkdVXZfjh6KbaphvgZFGflVnpaWfZh5ILG8H2AZoCnZubefWXNweoK2zx','7','0',0,'0','0',0,'짱짱중소비','1','0','ok','매니저','짱짱중소비','이광진','2018-11-16 01:29:10'),(42,'aaaa1131','ee5fa2d5844b8e8a6aa18008c52bed9c40223481efd362aca063f944e8471ac3','2iK1jLVgkavdzLVYUjeSKvze7KqNzsjUJOSm6RsuNCEGWWGaslqJJCGGkaQdnfx','경원','고',3,'','상상상',1,'깝도이','01091112444','01095552445','대구광역시 달서구 용산동 롯데캐슬 ','이과','임중섭','','2018-11-16 01:52:08'),(43,'aaaa1132','4f426a3cfc53bd89779a5897d161fdf3b60b1e35d34fc5e88a5165ee29b611fe','OF1BB3eNR2jbEDxqEpxtsAvgCWAPOkOw9snASyl53UnApsaxuecUIOeB5P48AHvQ','와룡','고',4,'','상중중',1,'산적','1024453817','1025811605','대구광역시 달서구 용산동 홈플러스','이과','임중섭','','2018-11-16 01:56:15'),(44,'aaaa1132','432d561fa00008f07a0f317e90cd14a4c29a9285aab1ef5dde709c46c59cc162','47zOQPKDwJTbWbaagdvcUM4OJ7dTm0QHowyZgpaYdmZZzQsgDlMHLtv70LdlstqFj','경북','고',3,'','하하하',1,'산적','01024453817','01025811605','대구광역시 달서구 용산동 홈플러스2','이과','임중섭','','2018-11-16 01:58:03'),(45,'qqqq1234','40341af91c5ffe5bb1a58f378418e63bf34ddd916305d110128b0f928688f433','SlejadwkcehnOC1IacYQxja4sH3ZGtVaT1CIPZ5GabOfv0nH43kwLkmb4gGFxUp','성서','고',3,'','상중중',1,'우왁굳','0106644895','01025811605','오단자','이과','나와너','','2018-11-29 16:44:26');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `print_math`
--

DROP TABLE IF EXISTS `print_math`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `print_math` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `지수함수` int(11) DEFAULT NULL,
  `다항식연산` int(11) DEFAULT NULL,
  `삼각함수` int(11) DEFAULT NULL,
  `도함수` int(11) DEFAULT NULL,
  `로그함수` int(11) DEFAULT NULL,
  `등차수열` int(11) DEFAULT NULL,
  `등비수열` int(11) DEFAULT NULL,
  `수열의극한` int(11) DEFAULT NULL,
  `함수의 극한` int(11) DEFAULT NULL,
  `함수의 연속` int(11) DEFAULT NULL,
  `지수함수와 로그함수의 극한` int(11) DEFAULT NULL,
  `삼각함수의 극한` int(11) DEFAULT NULL,
  `도함수의 활용` int(11) DEFAULT NULL,
  `순열과 조합` int(11) DEFAULT NULL,
  `확률` int(11) DEFAULT NULL,
  `확률분포와 통계` int(11) DEFAULT NULL,
  `행렬` int(11) DEFAULT NULL,
  `2` int(11) DEFAULT NULL COMMENT '선택하지 않았을때 넣는 공간',
  `3` int(11) DEFAULT NULL COMMENT '선택하지 않았을때 넣는 공간',
  `4` int(11) DEFAULT NULL COMMENT '선택하지 않았을때 넣는 공간',
  `total` int(11) DEFAULT NULL,
  `id` varchar(45) NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `print_math`
--

LOCK TABLES `print_math` WRITE;
/*!40000 ALTER TABLE `print_math` DISABLE KEYS */;
INSERT INTO `print_math` VALUES (1,2,NULL,3,NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,10,'aaaa1111','2018-11-29 14:25:21'),(2,1,NULL,10,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,20,'aaaa1111','2018-11-29 14:26:14'),(3,12,NULL,9,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,30,'aaaa1111','2018-11-29 14:28:34'),(4,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,15,'aaaa1111','2018-12-03 14:31:38'),(5,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:45:01'),(6,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:46:12'),(7,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:47:16'),(8,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:49:36'),(9,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-03 14:50:28'),(10,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,15,'aaaa1111','2018-12-03 14:50:42'),(11,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-04 02:47:33'),(12,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,8,'aaaa1111','2018-12-04 14:05:05'),(13,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,10,'aaaa1111','2018-12-04 14:09:40'),(14,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,15,'aaaa1111','2018-12-04 14:16:44'),(15,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,19,'aaaa1111','2018-12-12 16:50:50'),(16,NULL,NULL,NULL,NULL,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,10,'aaaa1111','2018-12-15 01:29:15');
/*!40000 ALTER TABLE `print_math` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_book_name`
--

DROP TABLE IF EXISTS `question_book_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_book_name` (
  `book_num` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(30) DEFAULT NULL,
  `hide` int(10) NOT NULL COMMENT '0 = 출력x //// 1 = 출력o',
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`book_num`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_book_name`
--

LOCK TABLES `question_book_name` WRITE;
/*!40000 ALTER TABLE `question_book_name` DISABLE KEYS */;
INSERT INTO `question_book_name` VALUES (1,'수능특강',1,'2018-11-16 02:48:09'),(2,'수능완성',1,'2018-11-16 02:48:09'),(3,'쎈',1,'2018-11-16 02:48:09'),(4,'수학의정석',1,'2018-11-16 02:48:09'),(5,'숨마쿰라우데',1,'2018-11-16 02:48:09'),(6,'풍산자',1,'2018-11-16 02:48:09'),(7,'자이스토리',1,'2018-11-16 02:48:09'),(8,'미래로',1,'2018-11-16 02:48:09'),(9,'abcdefg',1,'2018-11-16 03:03:37');
/*!40000 ALTER TABLE `question_book_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_image`
--

DROP TABLE IF EXISTS `question_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_image` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `book_num` int(11) NOT NULL,
  `type_index_num` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `type1` int(11) NOT NULL COMMENT '사고력',
  `type2` int(11) NOT NULL COMMENT '이해력',
  `type3` int(11) NOT NULL COMMENT '문제해결력',
  `type4` int(11) NOT NULL COMMENT '창의력',
  `wrong_student` text,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`,`image`),
  KEY `tp_index_num` (`type_index_num`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_image`
--

LOCK TABLES `question_image` WRITE;
/*!40000 ALTER TABLE `question_image` DISABLE KEYS */;
INSERT INTO `question_image` VALUES (3,'1_2_4_5_28_157.png',1,2,4,5,28,157,5,0,1,0,0,'0','2018-09-13 02:17:38'),(4,'1_2_4_5_28_162.png',1,2,4,5,28,162,5,0,1,0,0,'0','2018-09-13 02:18:29'),(5,'1_2_4_5_29_164.png',1,2,4,5,29,164,5,0,1,0,0,'0','2018-09-13 02:18:48'),(6,'1_2_4_5_29_168.png',1,2,4,5,29,168,5,0,1,0,0,'0','2018-09-13 02:19:11'),(7,'1_2_4_5_29_169.png',1,2,4,5,29,169,5,0,1,0,0,'0','2018-09-13 02:19:33'),(8,'1_2_4_5_30_172.png',1,2,4,5,30,172,5,0,1,0,0,'0','2018-09-13 02:20:18'),(9,'1_2_4_5_30_174.png',1,2,4,5,30,174,5,0,1,0,0,'0','2018-09-13 02:20:41'),(10,'1_2_4_5_31_178.png',1,2,4,5,31,178,5,0,1,0,0,'0','2018-09-13 02:21:13'),(11,'1_2_4_5_31_183.png',1,2,4,5,31,183,5,0,1,0,0,'0','2018-09-13 02:21:31'),(12,'1_2_4_5_32_186.png',1,2,4,5,32,186,5,0,1,0,0,'0','2018-09-13 02:21:52'),(13,'1_2_3_5_33_194.png',1,2,3,5,33,194,5,0,1,0,0,'0','2018-09-13 02:22:15'),(14,'1_2_3_5_33_197.png',1,2,3,5,33,197,5,0,1,0,0,'0','2018-09-13 02:22:33'),(15,'1_2_3_5_34_205.png',1,2,3,5,34,205,5,0,1,0,0,'0','2018-09-13 02:23:02'),(16,'1_2_3_5_35_208.png',1,2,3,5,35,208,5,0,1,0,0,'0','2018-09-13 02:23:18'),(17,'1_2_3_5_35_214.png',1,2,3,5,35,214,5,0,1,0,0,'0','2018-09-13 02:23:34'),(18,'1_2_3_5_38_237.png',1,2,3,5,38,237,5,0,1,0,0,'0','2018-09-13 02:23:53'),(19,'1_2_3_5_39_240.png',1,2,3,5,39,240,5,0,1,0,0,'0','2018-09-13 02:25:55'),(20,'1_2_3_5_39_245.png',1,2,3,5,39,245,5,0,1,0,0,'0','2018-09-13 02:26:11'),(21,'1_2_3_5_40_249.png',1,2,3,5,40,249,5,0,1,0,0,'0','2018-09-13 02:26:27'),(22,'1_2_3_5_40_250.png',1,2,3,5,40,250,5,0,1,0,0,'0','2018-09-13 02:26:49'),(23,'1_2_3_5_41_254.png',1,2,3,5,41,254,5,0,1,0,0,'0|aaaa1111','2018-09-13 02:32:13'),(24,'1_2_3_5_42_259.png',1,2,3,5,42,259,5,0,1,0,0,'0','2018-09-13 02:32:35'),(25,'1_2_3_5_42_260.png',1,2,3,5,42,260,5,0,1,0,0,'0','2018-09-13 02:32:58'),(26,'1_2_3_5_42_262.png',1,2,3,5,42,262,5,0,1,0,0,'0','2018-09-13 02:33:20'),(27,'1_2_3_5_42_265.png',1,2,3,5,42,265,5,0,1,0,0,'0','2018-09-13 02:33:40'),(28,'1_2_5_1_11_23.png',1,2,5,1,11,23,5,0,1,0,0,'0','2018-09-13 01:38:03'),(29,'1_2_5_1_12_34.png',1,2,5,1,12,34,5,0,1,0,0,'0','2018-09-13 01:45:55'),(30,'1_2_5_1_12_35.png',1,2,5,1,12,35,5,0,1,0,0,'0','2018-09-13 01:38:21'),(31,'1_2_5_1_12_38.png',1,2,5,1,12,38,5,0,1,0,0,'0','2018-09-13 01:38:45'),(32,'1_2_5_1_13_46.png',1,2,5,1,13,46,5,0,1,0,0,'0','2018-09-13 01:39:06'),(33,'1_2_5_1_13_47.png',1,2,5,1,13,47,5,0,1,0,0,'0','2018-09-13 01:39:26'),(34,'1_2_5_1_14_49.png',1,2,5,1,14,49,5,0,1,0,0,'0','2018-09-13 01:39:43'),(35,'1_2_5_1_14_51.png',1,2,5,1,14,51,5,0,1,0,0,'0','2018-09-13 01:40:02'),(36,'1_2_3_1_14_52.png',1,2,3,1,14,52,5,0,1,0,0,'0','2018-09-13 01:40:54'),(37,'1_2_3_1_14_53.png',1,2,3,1,14,53,5,0,1,0,0,'0','2018-09-13 01:41:10'),(38,'1_2_3_1_15_57.png',1,2,3,1,15,57,5,0,1,0,0,'0','2018-09-13 01:41:37'),(39,'1_2_3_1_15_61.png',1,2,3,1,15,61,5,0,1,0,0,'0','2018-09-13 01:41:52'),(40,'1_2_3_1_18_81.png',1,2,3,1,18,81,5,0,1,0,0,'0|aaaa1111','2018-09-13 01:42:09'),(41,'1_2_3_1_18_84.png',1,2,3,1,18,84,5,0,1,0,0,'0','2018-09-13 01:42:27'),(42,'1_2_3_1_19_91.png',1,2,3,1,19,91,5,0,1,0,0,'0','2018-09-13 01:42:48'),(43,'1_2_3_1_20_101.png',1,2,3,1,20,101,5,0,1,0,0,'0|aaaa1111','2018-09-13 01:43:07'),(44,'1_2_3_1_21_104.png',1,2,3,1,21,104,5,0,1,0,0,'0','2018-09-13 01:43:23'),(45,'1_2_3_1_21_105.png',1,2,3,1,21,105,5,0,1,0,0,'0','2018-09-13 01:44:18'),(46,'1_2_3_1_21_107.png',1,2,3,1,21,107,5,0,1,0,0,'0','2018-09-13 01:44:37'),(47,'1_2_3_1_22_108.png',1,2,3,1,22,108,5,0,1,0,0,'0','2018-09-13 01:44:55'),(48,'1_2_3_1_22_110.png',1,2,3,1,22,110,5,0,1,0,0,'0','2018-09-13 01:45:16'),(49,'1_2_3_1_23_119.png',1,2,3,1,23,119,5,0,1,0,0,'0|aaaa1111','2018-09-13 01:45:32'),(50,'1_2_3_1_9_1.png',1,2,3,1,9,1,5,0,1,0,0,'0','2018-09-13 01:35:51'),(51,'1_2_3_1_9_3.png',1,2,3,1,9,3,5,0,1,0,0,'0|aaaa1111','2018-09-13 01:36:32'),(52,'1_2_3_1_9_4.png',1,2,3,1,9,4,5,0,1,0,0,'0','2018-09-13 01:37:04'),(56,'중섭고_3_수 행 평 가 문 제_2.png',3,2,0,1,0,0,0,0,1,0,0,'0','2018-09-19 00:56:44'),(57,'중섭고_3_수 행 평 가 문 제_4.png',3,2,0,1,0,0,0,0,1,0,0,'0','2018-09-18 02:32:03'),(58,'중섭고_3_수 행 평 가 문 제_5.png',3,2,0,1,0,0,0,0,1,0,0,'0','2018-09-19 00:59:28'),(59,'1_2_3_1_11_11.png',1,2,3,1,11,11,5,0,1,0,0,'0','2018-11-11 01:44:05'),(60,'1_2_3_1_111_111.png',1,2,3,1,111,111,5,0,1,0,0,'0','2018-11-11 02:02:53'),(61,'1_2_7_3_61_387.png',1,2,7,3,61,387,5,0,1,0,0,'0','2018-11-17 11:13:08'),(62,'1_2_7_3_61_393.png',1,2,7,3,61,393,5,0,1,0,0,'0','2018-11-17 11:14:34'),(63,'1_2_7_3_63_405.png',1,2,7,3,63,405,5,0,1,0,0,'0','2018-11-17 11:14:54'),(64,'1_2_7_3_63_407.png',1,2,7,3,63,407,5,0,1,0,0,'0','2018-11-17 11:15:20'),(65,'1_2_7_3_63_408.png',1,2,7,3,63,408,5,0,1,0,0,'0','2018-11-17 11:15:56'),(66,'1_2_7_3_63_409.png',1,2,7,3,63,409,5,0,1,0,0,'0','2018-11-17 11:16:33'),(67,'1_2_7_3_64_415.png',1,2,7,3,64,415,5,0,1,0,0,'0','2018-11-17 11:17:09'),(68,'1_2_7_3_65_417.png',1,2,7,3,65,417,5,0,1,0,0,'0','2018-11-17 11:18:15'),(69,'1_2_7_3_65_423.png',1,2,7,3,65,423,5,0,1,0,0,'0','2018-11-17 11:18:51'),(70,'1_2_7_3_65_424.png',1,2,7,3,65,424,5,0,1,0,0,'0','2018-11-17 11:19:17'),(71,'1_2_3_3_66_430.png',1,2,3,3,66,430,5,0,1,0,0,'0','2018-11-17 11:19:45'),(72,'1_2_3_3_67_432.png',1,2,3,3,67,432,5,0,1,0,0,'0','2018-11-17 11:20:48'),(73,'1_2_3_3_68_442.png',1,2,3,3,68,442,5,0,1,0,0,'0','2018-11-17 11:21:09'),(74,'1_2_3_3_70_451.png',1,2,3,3,70,451,5,0,1,0,0,'0','2018-11-17 11:21:27'),(75,'1_2_3_3_71_463.png',1,2,3,3,71,463,5,0,1,0,0,'0|aaaa1111','2018-11-17 11:21:51'),(76,'1_2_3_3_72_469.png',1,2,3,3,72,469,5,0,1,0,0,'0','2018-11-17 11:22:16'),(77,'1_2_3_3_73_472.png',1,2,3,3,73,472,5,0,1,0,0,'0','2018-11-17 11:22:35'),(78,'1_2_3_3_79_516.png',1,2,3,3,79,516,5,0,1,0,0,'0','2018-11-17 11:22:54'),(79,'1_2_3_3_80_524.png',1,2,3,3,80,524,5,0,1,0,0,'0','2018-11-17 11:23:22'),(80,'1_2_3_3_82_537.png',1,2,3,3,82,537,5,0,1,0,0,'0|aaaa1111','2018-11-17 11:23:42'),(81,'1_2_3_3_82_539.png',1,2,3,3,82,539,5,0,1,0,0,'0','2018-11-17 11:24:00'),(82,'1_2_3_3_83_545.png',1,2,3,3,83,545,5,0,1,0,0,'0','2018-11-17 11:24:22'),(83,'1_2_3_3_84_549.png',1,2,3,3,84,549,5,0,1,0,0,'0','2018-11-17 14:01:54'),(84,'1_2_4_3_84_552.png',1,2,4,3,84,552,5,0,1,0,0,'0','2018-11-17 14:02:16'),(85,'1_2_3_3_85_555.png',1,2,3,3,85,555,5,0,1,0,0,'0','2018-11-17 14:02:44'),(86,'1_2_3_3_87_573.png',1,2,3,3,87,573,5,0,1,0,0,'0','2018-11-17 14:03:01'),(87,'1_2_3_3_91_598.png',1,2,3,3,91,598,5,0,1,0,0,'0','2018-11-17 14:03:22'),(88,'1_2_3_3_91_599.png',1,2,3,3,91,599,5,0,1,0,0,'0','2018-11-17 14:03:52'),(89,'1_2_3_3_92_604.png',1,2,3,3,92,604,5,0,1,0,0,'0','2018-11-17 14:04:07'),(90,'1_2_3_3_93_614.png',1,2,3,3,93,614,5,0,1,0,0,'0','2018-11-17 14:04:27'),(91,'1_2_3_3_99_668.png',1,2,3,3,99,668,6,0,1,0,0,'0','2018-11-17 14:58:44'),(98,'1_2_3_5_11111_11111.png',1,2,3,5,11111,11111,5,0,1,0,0,'0','2018-12-15 01:20:15');
/*!40000 ALTER TABLE `question_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_list`
--

DROP TABLE IF EXISTS `question_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_list` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `question_num` text NOT NULL,
  `teacher_id` varchar(45) NOT NULL,
  `student_id` varchar(45) NOT NULL,
  `checked` int(11) NOT NULL COMMENT '0 = 채점x //// 1 = 채점 o',
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_list`
--

LOCK TABLES `question_list` WRITE;
/*!40000 ALTER TABLE `question_list` DISABLE KEYS */;
INSERT INTO `question_list` VALUES (1,'헤헤되나연555','|75|47|27|17|81|16|50|15|71|14','quhb2455','aaaa1111',0,'2018-11-29 14:25:21'),(2,'헤헤되나연555','|64|14|61|89|65|37|78|77|16|24|79|9|19|71|13|84|18|20|85|11','quhb2455','aaaa1111',0,'2018-11-29 14:26:14'),(3,'헤헤되나연555','|74|19|44|22|37|88|60|42|23|52|46|14|48|13|49|15|39|72|38|51|78|27|86|89|21|36|87|26|79|90','quhb2455','aaaa1111',0,'2018-11-29 14:28:34'),(4,'임중섭','|60|51|48|43|59|40|39|49|44|36|37|38|47|42|45','quhb2455','aaaa1111',0,'2018-12-03 14:31:38'),(5,'임중섭','|41|37|43|51|52|46|39|50|47|48|49|59|36|40|44|42|60|38|45','quhb2455','aaaa1111',0,'2018-12-03 14:45:01'),(6,'임중섭','|52|37|51|50|44|47|36|48|43|42|60|49|39|40|41|38|45|59|46','quhb2455','aaaa1111',0,'2018-12-03 14:46:12'),(7,'임중섭','|39|50|59|36|43|47|45|49|42|51|38|60|44|41|48|37|40|52|46','quhb2455','aaaa1111',0,'2018-12-03 14:47:16'),(8,'임중섭','|40|44|47|49|48|41|46|37|36|59|52|45|60|42|51|50|38|43|39','quhb2455','aaaa1111',0,'2018-12-03 14:49:36'),(9,'임중섭','|49|38|51|46|50|60|39|48|40|36|52|42|37|44|45|47|59|43|41','quhb2455','aaaa1111',0,'2018-12-03 14:50:28'),(10,'임중섭','|39|43|59|36|44|50|45|48|42|47|38|60|40|37|49','quhb2455','aaaa1111',0,'2018-12-03 14:50:42'),(11,'임중섭','|50|51|40|45|48|60|38|47|37|52|49|46|39|59|42|36|43|41|44','quhb2455','aaaa1111',0,'2018-12-04 02:47:33'),(12,'임중섭','|42|36|37|40|43|48|51|60','quhb2455','aaaa1111',0,'2018-12-04 14:05:05'),(13,'임중섭','|40|51|47|44|52|48|46|60|49|43','quhb2455','aaaa1111',0,'2018-12-04 14:09:40'),(14,'임중섭','|49|48|47|41|52|46|37|44|42|43|60|39|45|59|38','quhb2455','aaaa1111',1,'2018-12-04 14:16:44'),(15,'gggg','|40|51|49|43|45|59|44|52|48|41|60|50|37|47|36|39|46|38|42','quhb2455','aaaa1111',0,'2018-12-12 16:50:50'),(16,'헤헤되나연','|22|21|3|6|7|12|14|98|10|9','quhb2455','aaaa1111',0,'2018-12-15 01:29:15');
/*!40000 ALTER TABLE `question_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_type_math`
--

DROP TABLE IF EXISTS `question_type_math`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_type_math` (
  `type_num` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`type_num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_type_math`
--

LOCK TABLES `question_type_math` WRITE;
/*!40000 ALTER TABLE `question_type_math` DISABLE KEYS */;
INSERT INTO `question_type_math` VALUES (1,'수1'),(2,'수2'),(3,'미적'),(4,'확통');
/*!40000 ALTER TABLE `question_type_math` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_type_math_index`
--

DROP TABLE IF EXISTS `question_type_math_index`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_type_math_index` (
  `type_index_num` int(11) NOT NULL AUTO_INCREMENT,
  `type_index_name` varchar(30) NOT NULL,
  `hide` int(10) NOT NULL COMMENT '0 = 출력x //// 1 = 출력o',
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`type_index_num`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_type_math_index`
--

LOCK TABLES `question_type_math_index` WRITE;
/*!40000 ALTER TABLE `question_type_math_index` DISABLE KEYS */;
INSERT INTO `question_type_math_index` VALUES (1,'지수함수',1,'2018-11-16 02:48:05'),(2,'다항식연산',1,'2018-11-16 02:48:05'),(3,'삼각함수',1,'2018-11-16 02:48:05'),(4,'도함수',1,'2018-11-16 02:48:05'),(5,'로그함수',1,'2018-11-16 02:48:05'),(6,'등차수열',1,'2018-11-16 02:48:05'),(7,'등비수열',1,'2018-11-16 02:48:05'),(8,'수열의극한',1,'2018-11-16 02:48:05'),(9,'함수의 극한',1,'2018-11-16 02:48:05'),(10,'함수의 연속',1,'2018-11-16 02:48:05'),(11,'지수함수와 로그함수의 극한',1,'2018-11-16 02:48:05'),(12,'삼각함수의 극한',1,'2018-11-16 02:48:05'),(13,'도함수의 활용',1,'2018-11-16 02:48:05'),(14,'순열과 조합',1,'2018-11-16 02:48:05'),(15,'확률',1,'2018-11-16 02:48:05'),(16,'확률분포와 통계',1,'2018-11-16 02:48:05'),(17,'행렬',1,'2018-11-16 02:48:05');
/*!40000 ALTER TABLE `question_type_math_index` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_events`
--

DROP TABLE IF EXISTS `test_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_events`
--

LOCK TABLES `test_events` WRITE;
/*!40000 ALTER TABLE `test_events` DISABLE KEYS */;
INSERT INTO `test_events` VALUES (2,'ㅋㅋㅋㅋ','2018-10-12 00:00:00','2018-10-13 00:00:00','2018-10-10 03:29:57'),(3,'ㅁㄴㅇ','2018-10-10 08:30:00','2018-10-10 09:00:00','2018-10-10 23:11:15'),(4,'ㅁㄴㅇ','2018-10-10 07:30:00','2018-10-10 12:30:00','2018-10-13 23:38:05'),(5,'ㅋㅌㅊㅁㄴㅇ','2018-10-11 10:00:00','2018-10-11 11:30:00','2018-10-13 23:38:23'),(6,'ㅁㄴㅇㅋㅊㅌ','2018-10-12 09:30:00','2018-10-12 14:00:00','2018-10-13 23:38:28'),(7,'ㅁㄴㅇㅁㄴㅇ','2018-10-12 14:30:00','2018-10-12 18:00:00','2018-10-13 23:38:36'),(8,'두번째 시도','2018-10-22 02:00:00','2018-10-22 05:30:00','2018-10-21 00:20:43'),(10,'zxc','2018-10-22 02:30:00','2018-10-22 04:30:00','2018-10-21 00:33:42'),(12,'3','2018-10-25 03:00:00','2018-10-25 05:30:00','2018-10-25 03:08:55'),(13,'4','2018-10-24 02:30:00','2018-10-24 04:30:00','2018-10-25 03:16:46'),(14,'5','2018-10-23 02:00:00','2018-10-23 04:00:00','2018-10-25 03:17:08'),(15,'6','2018-10-26 03:00:00','2018-10-26 04:30:00','2018-10-25 03:17:27'),(16,'ㅈㄷ','2018-10-22 01:30:00','2018-10-22 06:30:00','2018-10-25 12:10:10'),(17,'ㅈㄷㅇㅈㄷ','2018-10-22 01:00:00','2018-10-22 02:30:00','2018-10-25 12:10:15'),(18,'ㅈㄷㅈㄷ','2018-10-22 04:00:00','2018-10-22 06:00:00','2018-10-25 12:10:21'),(19,'잗ㅈ닫ㅈ','2018-10-22 03:00:00','2018-10-22 05:30:00','2018-10-25 12:10:28'),(20,'ㄷㄱㅈㄷㄱ','2018-10-22 02:00:00','2018-10-22 03:30:00','2018-10-25 12:10:39'),(21,'1234','2018-10-23 04:00:00','2018-10-23 05:30:00','2018-10-30 00:23:46'),(22,'12345','2018-10-23 05:30:00','2018-10-23 07:00:00','2018-10-30 00:26:06');
/*!40000 ALTER TABLE `test_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `token` (
  `no` int(5) NOT NULL,
  `token` varchar(200) NOT NULL,
  `registerdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `token`
--

LOCK TABLES `token` WRITE;
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
/*!40000 ALTER TABLE `token` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-15  2:25:57
