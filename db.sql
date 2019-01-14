-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 14, 2019 at 07:11 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Izbori`
--

-- --------------------------------------------------------

--
-- Table structure for table `Candidate`
--

CREATE TABLE `Candidate` (
  `Candidate_ID` int(11) NOT NULL,
  `C_Fname` varchar(255) DEFAULT NULL,
  `C_Lname` varchar(255) DEFAULT NULL,
  `C_Nationality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Candidate`
--

INSERT INTO `Candidate` (`Candidate_ID`, `C_Fname`, `C_Lname`, `C_Nationality`) VALUES
(1, 'Šefik', 'Džaferović', 'Bošnjak'),
(2, 'Denis', 'Bećirović', 'Bošnjak'),
(3, 'Fahrudin', 'Radoncčić', 'Bošnjak'),
(4, 'Mirsad', 'Hadžikadić', 'Bošnjak'),
(5, 'Željko', 'Komšić', 'Hrvat'),
(6, 'Dragan', 'Čović', 'Hrvat'),
(7, 'Dijana', 'Zelenika', 'Hrvat'),
(8, 'Boriša', 'Falatar', 'Hrvat'),
(9, 'Milorad', 'Dodik', 'Srbin'),
(10, 'Mladen', 'Ivanić', 'Srbin'),
(11, 'Denis', 'Zvizdić', 'Bošnjak'),
(12, 'Šemsudin', 'Mehmedović', 'Bošnjak'),
(13, 'Safet', 'Softić', 'Bošnjak'),
(14, 'Šemsudin', 'Mehmedović', 'Bošnjak'),
(15, 'Nermin', 'Pivić', 'Bošnjak'),
(16, 'Šemsudin', 'Dedić', 'Bošnjak'),
(17, 'Emir', 'Hadžihafizbegović', 'Bošnjak'),
(18, 'Predrag', 'Kožul', 'Hrvat'),
(19, 'Bariša', 'Čolak', 'Hrvat'),
(20, 'Nikola', 'Lovrinović', 'Hrvat'),
(21, 'Marina', 'Pendeš', 'Hrvat'),
(22, 'Mijo', 'Matanović', 'Hrvat'),
(23, 'Zukan', 'Helez', 'Bošnjak'),
(24, 'Enver', 'Bijedić', 'Bošnjak'),
(25, 'Mustafa', 'Šakić', 'Bošnjak'),
(28, 'Nermin', 'Nikšić', 'Bošnjak'),
(29, 'Zlatan', 'Begić', 'Bošnjak'),
(30, 'Vlatko', 'Glavaš', 'Hrvat'),
(31, 'Dženan', 'Džonlagić', 'Bošnjak'),
(32, 'Ismir', 'Jusko', 'Bošnjak'),
(33, 'Damir', 'Arnaut', 'Bošnjak'),
(34, 'Edita', 'Dapo', 'Bošnjak'),
(35, 'Predrag', 'Kojović', 'Hrvat'),
(36, 'Amra', 'Zulfikarpašić', 'Bošnjak'),
(37, 'Ilija', 'Cvitanović', 'Hrvat'),
(38, 'Nebojša', 'Radmanović', 'Srbin'),
(39, 'Staša', 'Košarac', 'Srbin'),
(40, 'Vojin', 'Mitrović', 'Srbin'),
(41, 'Nenad', 'Stevanović', 'Srbin'),
(42, 'Dragan', 'Bogdanić', 'Srbin'),
(43, 'Snježana', 'Novaković', 'Srbin'),
(44, 'Obren', 'Petrović', 'Srbin'),
(45, 'Dragan', 'Mektić', 'Srbin'),
(46, 'Mirko', 'Šarović', 'Srbin'),
(47, 'Branislav', 'Borenović', 'Srbin'),
(48, 'Mira', 'Pekić', 'Srbin'),
(49, 'Šefik', 'Džaferović', 'Bošnjak'),
(50, 'Husein', 'Rošić', 'Bošnjak'),
(51, 'Asim', 'Kamber', 'Bošnjak'),
(52, 'Rahim', 'Gadžić', 'Bošnjak'),
(53, 'Ibrahim', 'Zukić', 'Bošnjak'),
(54, 'Samira', 'Begić', 'Bošnjak'),
(55, 'Denijal', 'Tulumović', 'Bošnjak'),
(56, 'Miralem', 'Galijašević', 'Bošnjak'),
(57, 'Suad', 'Kanjko', 'Bošnjak'),
(58, 'Belma', 'Pojskić', 'Bošnjak'),
(59, 'Miraad', 'Zaimović', 'Bošnjak'),
(60, 'Mirza', 'Ganić', 'Bošnjak'),
(61, 'Sebija', 'Izetbegović', 'Bošnjak'),
(62, 'Asim', 'Sarajlić', 'Bošnjak'),
(63, 'Kenela', 'Zuko', 'Bošnjak'),
(64, 'Melika', 'Mahmutbegović', 'Bošnjak'),
(65, 'Mirsad', 'Peco', 'Bošnjak'),
(66, 'Senad', 'Mašetić', 'Bošnjak'),
(67, 'Eldar', 'Čomor', 'Bošnjak'),
(68, 'Adnan', 'Efendić', 'Bošnjak'),
(71, 'Albin', 'Muslić', 'Bošnjak'),
(72, 'Nermina', 'Ćemalović', 'Bošnjak'),
(73, 'Amer', 'Pivčić', 'Bošnjak'),
(74, 'Ivan', 'Boban', 'Hrvat'),
(75, 'Lana', 'Prlić', 'Hrvat'),
(76, 'Nijaz', 'Helez', 'Bošnjak'),
(77, 'Ivan', 'Sabelja', 'Hrvat'),
(78, 'Mira', 'Grgić', 'Hrvat'),
(79, 'Damir', 'Mašić', 'Bošnjak'),
(80, 'Samir', 'Avdić', 'Bošnjak'),
(81, 'Irfan', 'Čengić', 'Bošnjak'),
(82, 'Vlastimir', 'Miljović', 'Srbin'),
(83, 'Jasmina', 'Zubić', 'Bošnjak'),
(84, 'Senaid', 'Begić', 'Bošnjak'),
(85, 'Elvir', 'Karabajić', 'Bošnjak'),
(88, 'Hasan', 'Muratović', 'Bošnjak'),
(89, 'Zlatko', 'Ercegović', 'Bošnjak'),
(90, 'Meliha', 'Bijedić', 'Bošnjak'),
(91, 'Mujo', 'Hasić', 'Bošnjak'),
(92, 'Nedžad', 'Šečić', 'Bošnjak'),
(93, 'Dario', 'Knezović', 'Hrvat'),
(94, 'Marinko', 'Čavara', 'Hrvat'),
(95, 'Stanko', 'Musa', 'Hrvat'),
(96, 'Lidija', 'Bradara', 'Hrvat'),
(97, 'Ivica', 'Pavković', 'Hrvat'),
(98, 'Jelka', 'Milićević', 'Hrvat'),
(99, 'Marijan', 'Klaić', 'Hrvat'),
(100, 'Žana', 'Primorac', 'Hrvat'),
(101, 'Mario', 'Mikulić', 'Hrvat'),
(102, 'Mladen', 'Bosšković', 'Hrvat'),
(103, 'Petar', 'Galić', 'Hrvat'),
(104, 'Ivona', 'Raguž', 'Hrvat'),
(105, 'Josip', 'Martić', 'Hrvat'),
(106, 'Boris', 'Marjanović', 'Hrvat'),
(107, 'Marin', 'Novaković', 'Hrvat'),
(108, 'Erina', 'Lasić', 'Hrvat'),
(109, 'Oliver', 'Soldo', 'Hrvat'),
(110, 'Marin', 'Barbić', 'Hrvat'),
(111, 'Franka', 'Zorić', 'Hrvat'),
(112, 'Oliver', 'Radoš', 'Hrvat'),
(113, 'Ante', 'Baković', 'Hrvat'),
(114, 'Samer', 'Rešidat', 'Bošnjak'),
(115, 'Nihad', 'Čolpa', 'Bošnjak'),
(116, 'Ahmed', 'Džubur', 'Bošnjak'),
(117, 'Alma', 'Kratina', 'Bošnjak'),
(118, 'Bahrudin', 'Šarić', 'Bošnjak'),
(119, 'Zeid', 'Mujić', 'Bošnjak'),
(120, 'Hajrudin', 'Zilić', 'Bošnjak'),
(121, 'Amra', 'Kunovac', 'Bošnjak'),
(122, 'Dževad', 'Adžem', 'Bošnjak'),
(123, 'Mustafa', 'Hrvić', 'Bošnjak'),
(124, 'Mara', 'Dukić', 'Bošnjak'),
(125, 'Mirsad', 'Kacila', 'Bošnjak'),
(126, 'Zlatko', 'Kravić', 'Bošnjak'),
(127, 'Anel', 'Kljako', 'Bošnjak'),
(128, 'Sanela', 'Prašović-Gadžo', 'Bošnjak'),
(129, 'Adis', 'Arapović', 'Bošnjak'),
(130, 'Azra', 'Hadžić', 'Bošnjak'),
(131, 'Zana', 'Marjanović', 'Bošnjak'),
(132, 'Jasmin', 'Hodžić', 'Bošnjak'),
(133, 'Faika', 'Mujanović', 'Bošnjak'),
(134, 'Adin', 'Huremović', 'Bošnjak'),
(135, 'Fuad', 'Hadžimehmedović', 'Bošnjak'),
(136, 'Šemsudin', 'Kavazović', 'Bošnjak'),
(137, 'Senad', 'Pešto', 'Bošnjak'),
(138, 'Enver', 'Merdić', 'Bošnjak'),
(139, 'Željka', 'Cvijanović', 'Srbin'),
(140, 'Vukota', 'Govedarica', 'Srbin'),
(141, 'Ramiz', 'Salkić', 'Bošnjak'),
(142, 'Josip', 'Jerković', 'Hrvat'),
(143, 'Vlado', 'Dajić', 'Srbin'),
(144, 'Luka', 'Petrović', 'Srbin'),
(145, 'Zoran', 'Stevanović', 'Srbin'),
(146, 'Nikola', 'Špirić', 'Srbin'),
(147, 'Nedeljko', 'Ćorić', 'Srbin'),
(148, 'Obren', 'Marković', 'Srbin'),
(149, 'Zoran', 'Tegeltija', 'Srbin'),
(150, 'Dušica', 'Šolaja', 'Srbin'),
(151, 'Ilija', 'Tamindžija', 'Srbin'),
(152, 'Darko', 'Tomaš', 'Srbin'),
(153, 'Momčilo', 'Antolić', 'Srbin'),
(154, 'Milica', 'Lovrić', 'Srbin'),
(155, 'Milutin', 'Tasovac', 'Srbin'),
(156, 'Radenko', 'Bubić', 'Srbin'),
(157, 'Dražen', 'Vrhovac', 'Srbin'),
(158, 'Radovan', 'Visković', 'Srbin'),
(159, 'Gordana', 'Tešanović', 'Srbin'),
(160, 'Ognjen', 'Žmirić', 'Srbin'),
(161, 'Aleksandar', 'Subotić', 'Srbin'),
(162, 'Saša', 'Popović', 'Srbin'),
(163, 'Pero', 'Petrović', 'Srbin'),
(164, 'Ognjen', 'Žmirić', 'Srbin'),
(165, 'Darko', 'Mitrović', 'Srbin'),
(166, 'Dejan', 'Starčević', 'Srbin'),
(167, 'Darko', 'Babaj', 'Srbin'),
(168, 'Daliborka', 'Lukić', 'Srbin'),
(169, 'Nebojša', 'Perović', 'Srbin'),
(170, 'Danijel', 'Jošić', 'Srbin'),
(171, 'Tomica', 'Stojanović', 'Srbin'),
(172, 'Duško', 'Ivić', 'Srbin'),
(173, 'Milan', 'Radović', 'Srbin'),
(174, 'Mirko', 'Sovilj', 'Srbin'),
(175, 'Duško', 'Miletić', 'Srbin'),
(176, 'Slavica', 'Popović', 'Srbin'),
(177, 'Milan', 'Dakić', 'Srbin'),
(178, 'Elmedin', 'Konaković', 'Bošnjak'),
(179, 'Arijana', 'Memić', 'Bošnjak'),
(180, 'Elvedin', 'Okerić', 'Bošnjak'),
(181, 'Semir', 'Efendić', 'Bošnjak'),
(182, 'Sabahudin', 'Delalić', 'Bošnjak'),
(183, 'Aljoša', 'Čampara', 'Bošnjak'),
(184, 'Damir', 'Marjanović', 'Bošnjak'),
(185, 'Edin', 'Forto', 'Bošnjak'),
(186, 'Vildana', 'Bešlija', 'Bošnjak');

-- --------------------------------------------------------

--
-- Table structure for table `ElectionUnit`
--

CREATE TABLE `ElectionUnit` (
  `Unit_ID` int(11) NOT NULL,
  `Unit_Name` varchar(255) DEFAULT NULL,
  `Parent_ID` int(200) NOT NULL,
  `NumOfVoters` int(255) NOT NULL,
  `BrojMjesta` int(255) NOT NULL,
  `Obradjeno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ElectionUnit`
--

INSERT INTO `ElectionUnit` (`Unit_ID`, `Unit_Name`, `Parent_ID`, `NumOfVoters`, `BrojMjesta`, `Obradjeno`) VALUES
(1, 'Izborna Jedinica 1', 9, 0, 0, 0),
(2, 'Izborna Jedinica 2', 9, 0, 0, 0),
(3, 'Izborna Jedinica 3', 9, 0, 0, 0),
(4, 'Izborna Jedinica 4', 9, 0, 0, 0),
(5, 'Izborna Jedinica 5', 9, 0, 0, 0),
(6, 'Izborna Jedinica 1', 10, 0, 0, 0),
(7, 'Izborna Jedinica 2', 10, 0, 0, 0),
(8, 'Izborna Jedinica 3', 10, 0, 0, 0),
(9, 'Federacija', 9, 0, 0, 0),
(10, 'RS', 10, 0, 0, 0),
(182, 'Trebinje', 10, 29031, 45, 45),
(201, 'Kanton 1', 9, 0, 0, 0),
(202, 'Kanton 2', 9, 0, 0, 0),
(203, 'Kanton 3', 9, 0, 0, 0),
(204, 'Kanton 4', 9, 0, 0, 0),
(205, 'Kanton 5', 9, 0, 0, 0),
(206, 'Kanton 6', 9, 0, 0, 0),
(207, 'Kanton 7', 9, 0, 0, 0),
(208, 'Kanton 8', 9, 0, 0, 0),
(209, 'Kanton 9', 9, 0, 0, 0),
(210, 'Kanton 10', 9, 0, 0, 0),
(301, 'Izborna Jedinica 1', 10, 0, 0, 0),
(302, 'Izborna Jedinica 2', 10, 0, 0, 0),
(303, 'Izborna Jedinica 3', 10, 0, 0, 0),
(304, 'Izborna Jedinica 4', 10, 0, 0, 0),
(305, 'Izborna Jedinica 5', 10, 0, 0, 0),
(306, 'Izborna Jedinica 6', 10, 0, 0, 0),
(307, 'Izborna Jedinica 7', 10, 0, 0, 0),
(308, 'Izborna Jedinica 8', 10, 0, 0, 0),
(309, 'Izborna Jedinica 9', 10, 0, 0, 0),
(401, 'Izborna Jedinica 1', 9, 0, 0, 0),
(402, 'Izborna Jedinica 2', 9, 0, 0, 0),
(403, 'Izborna Jedinica 3', 9, 0, 0, 0),
(404, 'Izborna Jedinica 4', 9, 0, 0, 0),
(405, 'Izborna Jedinica 5', 9, 0, 0, 0),
(406, 'Izborna Jedinica 6', 9, 0, 0, 0),
(407, 'Izborna Jedinica 7', 9, 0, 0, 0),
(408, 'Izborna Jedinica 8', 9, 0, 0, 0),
(409, 'Izborna Jedinica 9', 9, 0, 0, 0),
(410, 'Izborna Jedinica 10', 9, 0, 0, 0),
(411, 'Izborna Jedinica 11', 9, 0, 0, 0),
(412, 'Izborna Jedinica 12', 9, 0, 0, 0),
(1001, 'Velika Kladuša', 1, 42032, 65, 65),
(1002, 'Cazin', 1, 52951, 79, 79),
(1003, 'Bihać', 1, 56981, 90, 90),
(1004, 'Široki Brijeg', 2, 23110, 38, 38),
(1005, 'Jablanica', 2, 8784, 20, 20),
(1006, 'Mostar', 2, 98723, 147, 147),
(1007, 'Stari Grad Sarajevo', 3, 36570, 46, 46),
(1008, 'Novi Grad Sarajevo', 3, 43120, 53, 53),
(1009, 'Ilidža', 3, 63210, 95, 95),
(1010, 'Doboj', 4, 22570, 26, 26),
(1011, 'Zenica', 4, 45120, 93, 93),
(1012, 'Travnik', 4, 21224, 35, 35),
(1013, 'Tuzla', 5, 32570, 76, 76),
(1014, 'Banoviči', 5, 15120, 43, 43),
(1015, 'Kalesija', 5, 21224, 15, 15),
(1016, 'Laktaši', 6, 32570, 56, 56),
(1017, 'Srbac', 6, 15120, 23, 23),
(1018, 'Banja Luka', 6, 71224, 115, 115),
(1019, 'Bijeljina', 7, 32460, 56, 56),
(1020, 'Doboj', 7, 12030, 23, 23),
(1021, 'Teslić', 7, 8234, 115, 115),
(1022, 'Zvornik', 8, 22460, 56, 56),
(1023, 'Trebinje', 8, 14030, 23, 23),
(1024, 'Vlasenica', 8, 10234, 115, 115),
(1025, 'Velika Kladuša', 201, 42032, 65, 65),
(1026, 'Cazin', 201, 52951, 79, 79),
(1027, 'Bihać', 201, 56981, 90, 90),
(1028, 'Odžak', 202, 15467, 32, 32),
(1029, 'Orašje', 202, 6951, 19, 19),
(1030, 'Domaljevac-Šamac', 202, 6981, 20, 20),
(1031, 'Tuzla', 203, 32570, 76, 76),
(1032, 'Banoviči', 203, 15120, 43, 43),
(1033, 'Kalesija', 203, 21224, 15, 15),
(1034, 'Doboj', 204, 22570, 26, 26),
(1035, 'Zenica', 204, 45120, 93, 93),
(1036, 'Visoko', 204, 21224, 35, 35),
(1037, 'Pale', 205, 9570, 26, 26),
(1038, 'Foča', 205, 15120, 93, 93),
(1039, 'Goražde', 205, 12224, 35, 35),
(1040, 'Travnik', 206, 29570, 26, 26),
(1041, 'Jajce', 206, 15120, 93, 93),
(1042, 'Bugojno', 206, 15200, 35, 35),
(1043, 'Konjic', 207, 13110, 38, 38),
(1044, 'Jablanica', 207, 8784, 20, 20),
(1045, 'Mostar', 207, 98723, 147, 147),
(1046, 'Široki Brijeg', 208, 9110, 38, 38),
(1047, 'Ljubuški', 208, 8784, 20, 20),
(1048, 'Posušje', 208, 8723, 147, 147),
(1049, 'Stari Grad Sarajevo', 209, 36570, 46, 46),
(1050, 'Novi Grad Sarajevo', 209, 43120, 53, 53),
(1051, 'Ilidža', 209, 63210, 95, 95),
(1052, 'Stari Grad Sarajevo', 210, 36570, 46, 46),
(1053, 'Novi Grad Sarajevo', 210, 43120, 53, 53),
(1054, 'Ilidža', 210, 63210, 95, 95),
(1055, 'Krupa na Uni', 301, 9110, 38, 38),
(1056, 'Prijedor', 301, 18784, 20, 20),
(1057, 'Novi Grad', 301, 8723, 147, 147),
(1058, 'Laktaši', 302, 7110, 38, 38),
(1059, 'Srbac', 302, 5784, 20, 20),
(1060, 'Prnjavor', 302, 6723, 147, 147),
(1061, 'Banja Luka', 303, 47110, 138, 138),
(1062, 'Šipovo', 303, 3784, 20, 20),
(1063, 'Petrovac', 303, 4723, 147, 147),
(1064, 'Velika Kladuša', 401, 42032, 65, 65),
(1065, 'Cazin', 401, 52951, 79, 79),
(1066, 'Bihać', 401, 56981, 90, 90),
(1067, 'Odžak', 402, 15467, 32, 32),
(1068, 'Orašje', 402, 6951, 19, 19),
(1069, 'Domaljevac-Šamac', 402, 6981, 20, 20),
(1070, 'Tuzla', 403, 25467, 32, 32),
(1071, 'Srebrenik', 403, 6951, 19, 19),
(1072, 'Lukavac', 403, 6981, 20, 20),
(1073, 'Banovići', 404, 5467, 15, 15),
(1074, 'Živinice', 404, 3951, 12, 12),
(1075, 'Kalesija', 404, 2981, 10, 10),
(1076, 'Doboj', 405, 22570, 26, 26),
(1077, 'Zenica', 405, 45120, 93, 93),
(1078, 'Maglaj', 405, 21224, 35, 35),
(1079, 'Kakanj', 406, 22570, 26, 26),
(1080, 'Vareš', 406, 45120, 93, 93),
(1081, 'Olovo', 406, 21224, 35, 35),
(1082, 'Hadžići', 407, 16570, 46, 46),
(1083, 'Novi Grad Sarajevo', 407, 43120, 53, 53),
(1084, 'Ilidža', 407, 63210, 95, 95),
(1085, 'Travnik', 408, 29570, 26, 26),
(1086, 'Jajce', 408, 15120, 93, 93),
(1087, 'Bugojno', 408, 15200, 35, 35),
(1088, 'Konjic', 409, 13110, 38, 38),
(1089, 'Jablanica', 409, 8784, 20, 20),
(1090, 'Mostar', 409, 98723, 147, 147),
(1091, 'Široki Brijeg', 410, 23110, 38, 38),
(1092, 'Posušje', 410, 18784, 20, 20),
(1093, 'Ljubuški', 410, 11723, 147, 147),
(1094, 'Stari Grad Sarajevo', 411, 36570, 46, 46),
(1095, 'Centar Sarajevo', 411, 43120, 53, 53),
(1096, 'Ilijaš', 411, 63210, 95, 95),
(1097, 'Kupres', 412, 36570, 46, 46),
(1098, 'Livno', 412, 43120, 53, 53),
(1099, 'Tomislavgrad', 412, 63210, 95, 95),
(1100, 'Banja Luka', 303, 187632, 268, 268),
(1101, 'Kupres', 303, 2348, 35, 35),
(1102, 'Petrovac', 303, 3257, 55, 55),
(1200, 'Stari Grad Sarajevo', 209, 36856, 46, 46),
(1201, 'Novi Grad Sarajevo', 209, 112493, 115, 115),
(1202, 'Centar Sarajevo', 209, 53282, 85, 85);

-- --------------------------------------------------------

--
-- Table structure for table `Level`
--

CREATE TABLE `Level` (
  `Level_ID` int(11) NOT NULL,
  `Level_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Level`
--

INSERT INTO `Level` (`Level_ID`, `Level_Name`) VALUES
(1, 'Drzavni'),
(2, 'FBiH'),
(3, 'RS');

-- --------------------------------------------------------

--
-- Table structure for table `Party`
--

CREATE TABLE `Party` (
  `Party_ID` int(255) NOT NULL,
  `Party_Name` varchar(100) NOT NULL,
  `Party_Abr` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Party`
--

INSERT INTO `Party` (`Party_ID`, `Party_Name`, `Party_Abr`) VALUES
(1, 'Stranka Demokratskih Akcija', 'SDA'),
(2, 'Socijaldemokratska Partija', 'SDP'),
(3, 'Naša Stranka', 'NS'),
(4, 'Narod i Pravda', 'NiP'),
(5, 'Demokratska Fronta', 'DF'),
(6, 'Savez za bolju budućnost', 'SBB'),
(7, 'Savez Nezavisnih Socijal Demokrata', 'SNSD'),
(8, 'Savez za Pobjedu', 'SZP'),
(9, 'Nezavisni Blok', 'NB'),
(10, 'Hrvatska Demokratska Zajednica', 'HDZ'),
(11, 'Hrvatska Demokratska Zajednica 1990', 'HDZ 1990'),
(12, 'Platforma za Progres', 'PZP'),
(13, 'Srpska demokratska stranka', 'SDS'),
(14, 'Partija demokratskog progresa', 'PDP'),
(15, 'Zajedno za BiH', 'ZBiH'),
(16, ' Demokratski narodni savez ', 'dns');

-- --------------------------------------------------------

--
-- Table structure for table `Position`
--

CREATE TABLE `Position` (
  `Position_ID` int(11) NOT NULL,
  `Position_Name` varchar(255) DEFAULT NULL,
  `Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Position`
--

INSERT INTO `Position` (`Position_ID`, `Position_Name`, `Level`) VALUES
(1, 'Predsjednistvo', 1),
(2, 'Parlament', 1),
(3, 'Parlament', 2),
(4, 'Predsjednik', 3),
(5, 'Narodna Skupstina', 3),
(6, 'Skupstina', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$9jLI3BFgOb49omLWshBiOuvolQZbEK1elEXlxs7gk0gM4qWrAPMQa'),
(2, 'admin', '$2y$10$9jLI3BFgOb49omLWshBiOuvolQZbEK1elEXlxs7gk0gM4qWrAPMQa');

-- --------------------------------------------------------

--
-- Table structure for table `Votes`
--

CREATE TABLE `Votes` (
  `Voting_ID` int(11) NOT NULL,
  `Position` int(11) NOT NULL,
  `NumOfVotes` int(255) DEFAULT NULL,
  `Candidate` int(11) NOT NULL,
  `Party` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Votes`
--

INSERT INTO `Votes` (`Voting_ID`, `Position`, `NumOfVotes`, `Candidate`, `Party`) VALUES
(1, 1, 1254, 8, 3),
(2, 1, 1236, 8, 3),
(3, 1, 3370, 8, 3),
(4, 1, 2034, 8, 3),
(5, 1, 3264, 8, 3),
(6, 1, 4324, 8, 3),
(7, 1, 3546, 1, 1),
(8, 1, 5467, 1, 1),
(9, 1, 8642, 1, 1),
(10, 1, 3458, 1, 1),
(11, 1, 4323, 5, 5),
(12, 1, 3452, 5, 5),
(13, 1, 2446, 5, 5),
(14, 1, 1245, 3, 6),
(15, 1, 2321, 3, 6),
(16, 1, 765, 3, 6),
(17, 1, 2432, 2, 2),
(18, 1, 3247, 2, 2),
(19, 1, 1879, 2, 2),
(20, 1, 7652, 4, 12),
(21, 1, 19282, 4, 12),
(22, 1, 1284, 4, 12),
(23, 1, 231, 6, 10),
(24, 1, 1200, 6, 10),
(25, 1, 2631, 6, 10),
(26, 1, 124, 7, 11),
(27, 1, 1009, 7, 11),
(28, 1, 2493, 9, 7),
(29, 1, 2123, 9, 7),
(30, 1, 1987, 9, 7),
(31, 1, 1200, 10, 8),
(32, 1, 1304, 10, 8),
(33, 1, 2013, 10, 8),
(34, 2, 1203, 11, 1),
(35, 2, 1745, 11, 1),
(36, 2, 1101, 12, 1),
(37, 2, 986, 12, 1),
(38, 2, 1002, 13, 1),
(39, 2, 764, 13, 1),
(40, 2, 921, 14, 1),
(41, 2, 721, 14, 1),
(42, 2, 821, 15, 1),
(43, 2, 621, 15, 1),
(45, 2, 921, 16, 1),
(46, 2, 1421, 16, 1),
(47, 2, 1239, 17, 1),
(48, 2, 1439, 17, 1),
(49, 2, 1879, 18, 10),
(50, 2, 1679, 19, 10),
(51, 2, 1792, 20, 10),
(52, 2, 1521, 21, 10),
(53, 2, 1792, 22, 10),
(54, 2, 3102, 23, 2),
(55, 2, 1792, 24, 2),
(56, 2, 1102, 25, 2),
(59, 2, 2102, 28, 5),
(60, 2, 1792, 29, 5),
(61, 2, 1102, 30, 5),
(62, 2, 1792, 31, 6),
(63, 2, 864, 32, 6),
(64, 2, 1203, 33, 6),
(65, 2, 1792, 34, 3),
(66, 2, 864, 35, 3),
(67, 2, 1203, 36, 3),
(68, 2, 2392, 37, 7),
(69, 2, 1922, 38, 7),
(70, 2, 1702, 39, 7),
(71, 2, 1392, 40, 7),
(72, 2, 984, 41, 7),
(73, 2, 1032, 42, 7),
(74, 2, 1792, 43, 13),
(75, 2, 864, 44, 13),
(76, 2, 1132, 45, 13),
(77, 2, 1021, 46, 14),
(78, 2, 923, 47, 14),
(79, 3, 1021, 50, 1),
(80, 3, 1423, 51, 1),
(81, 3, 2213, 52, 1),
(82, 3, 2423, 53, 1),
(83, 3, 2011, 54, 1),
(84, 3, 1892, 55, 1),
(85, 3, 2131, 56, 1),
(86, 3, 1331, 57, 1),
(87, 3, 1021, 58, 1),
(88, 3, 2340, 59, 1),
(89, 3, 2094, 60, 1),
(90, 3, 2313, 61, 1),
(91, 3, 1625, 62, 1),
(92, 3, 1392, 63, 1),
(93, 3, 2103, 64, 1),
(94, 3, 1934, 65, 1),
(95, 3, 1823, 66, 1),
(96, 3, 2111, 67, 1),
(97, 3, 2532, 68, 1),
(98, 3, 2187, 71, 2),
(99, 3, 1264, 72, 2),
(100, 3, 1422, 73, 2),
(101, 3, 2673, 74, 2),
(102, 3, 1564, 75, 2),
(103, 3, 1838, 76, 2),
(104, 3, 2001, 77, 2),
(105, 3, 2732, 78, 2),
(106, 3, 1378, 79, 2),
(107, 3, 2664, 80, 2),
(108, 3, 1289, 81, 2),
(109, 3, 1847, 82, 2),
(110, 3, 2143, 83, 2),
(111, 3, 2474, 84, 2),
(112, 3, 1645, 85, 2),
(113, 3, 1234, 88, 2),
(114, 3, 2342, 89, 2),
(115, 3, 2664, 90, 2),
(116, 3, 1552, 91, 2),
(117, 3, 1821, 92, 2),
(118, 3, 2553, 93, 10),
(119, 3, 2123, 94, 10),
(120, 3, 3843, 95, 10),
(121, 3, 2111, 96, 10),
(122, 3, 2475, 97, 10),
(123, 3, 1456, 98, 10),
(124, 3, 2123, 99, 10),
(125, 3, 1456, 100, 10),
(126, 3, 1834, 101, 10),
(127, 3, 2853, 102, 10),
(128, 3, 2428, 103, 10),
(129, 3, 1637, 104, 10),
(130, 3, 1124, 105, 10),
(131, 3, 2923, 106, 10),
(132, 3, 2645, 107, 10),
(133, 3, 1923, 108, 10),
(134, 3, 1236, 109, 10),
(135, 3, 2335, 110, 10),
(136, 3, 2112, 111, 10),
(137, 3, 1832, 112, 10),
(138, 3, 1184, 113, 10),
(139, 3, 1683, 114, 10),
(140, 3, 1632, 115, 10),
(141, 4, 13023, 139, 7),
(142, 4, 9283, 140, 8),
(143, 5, 8219, 143, 7),
(144, 5, 6721, 144, 7),
(145, 5, 8193, 145, 7),
(146, 5, 9112, 146, 7),
(147, 5, 7352, 153, 14),
(148, 5, 8356, 154, 14),
(149, 5, 9321, 155, 14),
(150, 5, 4551, 167, 13),
(151, 5, 8621, 168, 13),
(152, 5, 6223, 169, 13),
(153, 6, 35023, 178, 4),
(154, 6, 25421, 179, 4),
(155, 6, 18123, 180, 4),
(156, 6, 48321, 181, 1),
(157, 6, 23153, 182, 1),
(158, 6, 18356, 183, 1),
(159, 6, 39728, 184, 3),
(160, 6, 18753, 185, 3),
(161, 6, 28311, 186, 3);

-- --------------------------------------------------------

--
-- Table structure for table `VotesDetails`
--

CREATE TABLE `VotesDetails` (
  `VD_ID` int(11) NOT NULL,
  `EUnit` int(11) NOT NULL,
  `Votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `VotesDetails`
--

INSERT INTO `VotesDetails` (`VD_ID`, `EUnit`, `Votes`) VALUES
(1, 1007, 1),
(2, 1095, 2),
(3, 1027, 3),
(4, 1002, 4),
(5, 1042, 5),
(6, 1051, 6),
(7, 1002, 7),
(8, 1007, 8),
(9, 1027, 9),
(10, 1042, 10),
(11, 1095, 9),
(12, 1002, 11),
(13, 1007, 13),
(14, 1027, 11),
(15, 1042, 12),
(16, 1051, 11),
(17, 1095, 13),
(18, 1002, 14),
(19, 1007, 15),
(20, 1027, 16),
(21, 1042, 15),
(22, 1051, 14),
(23, 1095, 15),
(24, 1002, 17),
(25, 1007, 18),
(26, 1027, 19),
(27, 1042, 17),
(28, 1051, 18),
(29, 1095, 19),
(30, 1002, 20),
(31, 1007, 21),
(32, 1027, 22),
(33, 1042, 20),
(34, 1051, 21),
(35, 1095, 22),
(36, 1002, 23),
(37, 1007, 24),
(38, 1027, 25),
(39, 1042, 24),
(40, 1051, 23),
(41, 1095, 25),
(42, 1002, 26),
(43, 1007, 27),
(44, 1027, 26),
(45, 1042, 27),
(56, 1051, 26),
(57, 1095, 27),
(58, 1002, 28),
(59, 1007, 29),
(60, 1027, 30),
(61, 1042, 29),
(62, 1051, 30),
(63, 1095, 29),
(64, 1002, 31),
(65, 1007, 32),
(66, 1027, 33),
(67, 1042, 31),
(68, 1051, 32),
(69, 1095, 33),
(70, 1001, 45),
(71, 1002, 46),
(72, 1003, 45),
(73, 1001, 49),
(74, 1002, 49),
(75, 1001, 49),
(76, 1001, 54),
(77, 1002, 54),
(78, 1001, 54),
(79, 1001, 65),
(80, 1002, 65),
(81, 1001, 65),
(82, 1004, 35),
(83, 1005, 35),
(84, 1006, 35),
(85, 1004, 50),
(86, 1005, 50),
(87, 1006, 50),
(88, 1004, 66),
(89, 1005, 66),
(90, 1006, 66),
(91, 1007, 34),
(92, 1008, 34),
(93, 1009, 34),
(94, 1007, 63),
(95, 1008, 63),
(96, 1009, 63),
(97, 1007, 67),
(98, 1008, 67),
(99, 1009, 67),
(100, 1010, 40),
(101, 1011, 40),
(102, 1012, 41),
(103, 1010, 52),
(104, 1011, 52),
(105, 1012, 52),
(106, 1010, 64),
(107, 1011, 64),
(108, 1012, 64),
(109, 1016, 68),
(110, 1017, 68),
(111, 1018, 68),
(112, 1016, 74),
(113, 1017, 74),
(114, 1018, 74),
(115, 1016, 77),
(116, 1017, 77),
(117, 1018, 77),
(118, 1016, 69),
(119, 1017, 69),
(120, 1018, 69),
(121, 1016, 75),
(122, 1017, 75),
(123, 1018, 75),
(124, 1016, 78),
(125, 1017, 78),
(126, 1018, 78),
(127, 1064, 79),
(128, 1064, 80),
(129, 1064, 98),
(130, 1064, 118),
(131, 1065, 81),
(132, 1065, 99),
(133, 1065, 119),
(134, 1066, 82),
(135, 1066, 100),
(136, 1066, 120),
(137, 182, 141),
(138, 182, 142),
(139, 1100, 142),
(140, 1100, 143),
(141, 1100, 145),
(142, 1100, 146),
(143, 1101, 143),
(144, 1101, 147),
(145, 1101, 149),
(146, 1101, 152),
(147, 1102, 142),
(148, 1102, 144),
(149, 1102, 152),
(150, 1102, 150),
(151, 1102, 148),
(152, 1200, 153),
(153, 1201, 153),
(154, 1202, 153),
(155, 1200, 154),
(156, 1201, 154),
(157, 1202, 154),
(158, 1200, 155),
(159, 1201, 155),
(160, 1202, 155),
(161, 1200, 155),
(162, 1201, 155),
(163, 1202, 155),
(164, 1200, 156),
(165, 1201, 156),
(166, 1202, 156),
(167, 1200, 157),
(168, 1201, 157),
(169, 1202, 157),
(170, 1200, 158),
(171, 1201, 158),
(172, 1202, 158),
(173, 1200, 159),
(174, 1201, 159),
(175, 1202, 159),
(176, 1200, 160),
(177, 1201, 160),
(178, 1202, 160),
(179, 1200, 161),
(180, 1201, 161),
(181, 1202, 161);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Candidate`
--
ALTER TABLE `Candidate`
  ADD PRIMARY KEY (`Candidate_ID`);

--
-- Indexes for table `ElectionUnit`
--
ALTER TABLE `ElectionUnit`
  ADD PRIMARY KEY (`Unit_ID`),
  ADD KEY `fk_parent_eunit` (`Parent_ID`);

--
-- Indexes for table `Level`
--
ALTER TABLE `Level`
  ADD PRIMARY KEY (`Level_ID`);

--
-- Indexes for table `Party`
--
ALTER TABLE `Party`
  ADD PRIMARY KEY (`Party_ID`);

--
-- Indexes for table `Position`
--
ALTER TABLE `Position`
  ADD PRIMARY KEY (`Position_ID`),
  ADD KEY `fk_level_position` (`Level`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Votes`
--
ALTER TABLE `Votes`
  ADD PRIMARY KEY (`Voting_ID`),
  ADD KEY `fk_candidate_votes` (`Candidate`),
  ADD KEY `fk_party_votes` (`Party`),
  ADD KEY `fk_position_votes` (`Position`);

--
-- Indexes for table `VotesDetails`
--
ALTER TABLE `VotesDetails`
  ADD PRIMARY KEY (`VD_ID`),
  ADD KEY `fk_votes_vdetails` (`Votes`),
  ADD KEY `fk_eunit_vdetails` (`EUnit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ElectionUnit`
--
ALTER TABLE `ElectionUnit`
  ADD CONSTRAINT `fk_parent_eunit` FOREIGN KEY (`Parent_ID`) REFERENCES `ElectionUnit` (`Unit_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Position`
--
ALTER TABLE `Position`
  ADD CONSTRAINT `fk_level_position` FOREIGN KEY (`Level`) REFERENCES `Level` (`Level_ID`);

--
-- Constraints for table `Votes`
--
ALTER TABLE `Votes`
  ADD CONSTRAINT `fk_candidate_votes` FOREIGN KEY (`Candidate`) REFERENCES `Candidate` (`Candidate_ID`),
  ADD CONSTRAINT `fk_party_votes` FOREIGN KEY (`Party`) REFERENCES `Party` (`Party_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_position_votes` FOREIGN KEY (`Position`) REFERENCES `Position` (`Position_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `VotesDetails`
--
ALTER TABLE `VotesDetails`
  ADD CONSTRAINT `fk_eunit_vdetails` FOREIGN KEY (`EUnit`) REFERENCES `ElectionUnit` (`Unit_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_votes_vdetails` FOREIGN KEY (`Votes`) REFERENCES `Votes` (`Voting_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
