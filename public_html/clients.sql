-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2014 at 11:59 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plate_number` varchar(255) NOT NULL,
  `motor_number` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `url_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `plate_number`, `motor_number`, `firstname`, `lastname`, `url_photo`) VALUES
(1, 'JAE426ZUB', 'BET92BOJ4CN', 'Clarke', 'Keller', '75122.jpg'),
(2, 'NPO503EMR', 'NMN57RKK8CS', 'Brenna', 'Wilkerson', '28313.jpg'),
(3, 'GKH846BZL', 'VNA46ROQ7NN', 'Nash', 'Espinoza', '64002.jpg'),
(4, 'ZVH986BFD', 'LZJ70TCC2VH', 'Buckminster', 'Glover', '67616.jpg'),
(5, 'BYN903HJZ', 'ZKU30AWQ4PS', 'Hope', 'Perry', '52239.jpg'),
(6, 'MEK633UIN', 'COO66EDP4AO', 'Jenette', 'Santana', '03055.jpg'),
(7, 'WVL561NHD', 'FCP25UPY3AM', 'Hanae', 'Fox', '41315.jpg'),
(8, 'XKV456DAO', 'NQE19DKY8FZ', 'Gisela', 'Moss', '85668.jpg'),
(9, 'EXW658WUY', 'LAA02SQS2AY', 'Wesley', 'Burton', '77384.jpg'),
(10, 'JDB042CGL', 'LWS47MFN9NV', 'Judith', 'Mason', '28048.jpg'),
(11, 'JIA260STE', 'BLW53MFF8YN', 'Evan', 'Mckay', '59254.jpg'),
(12, 'YFG599RIH', 'TPF37MZV3RC', 'Laurel', 'Peters', '48242.jpg'),
(13, 'ORM628YPG', 'TJR16BSW5KY', 'Patrick', 'Rowland', '91885.jpg'),
(14, 'DNQ528TQY', 'RCX68XWD6UL', 'Gail', 'Mcfarland', '91797.jpg'),
(15, 'FBQ336OGN', 'LQL91BNN7YR', 'Naida', 'Stephenson', '42569.jpg'),
(16, 'DTR192HUL', 'ZIR06JDK6NM', 'Ciaran', 'Mills', '42839.jpg'),
(17, 'HIH512CHT', 'WNY72IVG1QH', 'Georgia', 'Silva', '58917.jpg'),
(18, 'IJO822CJD', 'INC52PLF2GD', 'Hadassah', 'Henderson', '49465.jpg'),
(19, 'UPA629QAR', 'RFE07BHR7FV', 'Christopher', 'Benjamin', '46194.jpg'),
(20, 'SDW685RTI', 'CRY00UWL7JW', 'Todd', 'Pennington', '82680.jpg'),
(21, 'GIT654VPP', 'SHK88XQS5KQ', 'Lois', 'Shaw', '55122.jpg'),
(22, 'NRV208CRL', 'OET20RTJ5QN', 'Bert', 'Savage', '83789.jpg'),
(23, 'ZHZ062BOG', 'CYT02SCT0VQ', 'Martin', 'Burris', '99071.jpg'),
(24, 'LOB917FZP', 'HHO48TPJ6MF', 'Timon', 'Wells', '53760.jpg'),
(25, 'WRT105FBK', 'LHC02SDM3BB', 'Lionel', 'Holmes', '47450.jpg'),
(26, 'QOS361PLR', 'NCL53DAZ9KF', 'Gary', 'Maddox', '61625.jpg'),
(27, 'GUO063SLN', 'RTL83CQD3GR', 'Charissa', 'Talley', '43163.jpg'),
(28, 'EXU636KGT', 'HUN30YLJ4SR', 'Drew', 'Mcknight', '74533.jpg'),
(29, 'RBL370XFV', 'HQO59YTZ4UM', 'Ebony', 'Fry', '00881.jpg'),
(30, 'EFD587SUZ', 'POY98AEN7QJ', 'Serina', 'Atkinson', '51402.jpg'),
(31, 'CRB388OKH', 'GEV84POB9OQ', 'Amethyst', 'Perry', '11889.jpg'),
(32, 'GQC693UZO', 'RJO35DME9KM', 'Brody', 'Taylor', '22377.jpg'),
(33, 'ZOO634PQX', 'KFH86IIR3KF', 'Quin', 'Fowler', '74513.jpg'),
(34, 'OVV185DQT', 'AXU95XTN6SF', 'Shafira', 'Franco', '91396.jpg'),
(35, 'NYO107GKC', 'KCB33SGO2ET', 'Eve', 'Summers', '89649.jpg'),
(36, 'DOM951ABJ', 'PTN77LWR3JI', 'Melyssa', 'Richard', '78653.jpg'),
(37, 'RKG344KAC', 'YFW97FCE8BV', 'September', 'Fleming', '78969.jpg'),
(38, 'VUP036ZOV', 'PSX58WNE7IM', 'Clayton', 'Nieves', '24972.jpg'),
(39, 'CEI243GNT', 'DRK69VWT5NK', 'Risa', 'Frank', '57501.jpg'),
(40, 'TMR183WCJ', 'WJT31XDY6YT', 'Freya', 'Rosario', '03311.jpg'),
(41, 'WVH207YKU', 'STJ64MGZ8RH', 'Bo', 'Simon', '89161.jpg'),
(42, 'ZWA928MAU', 'VCS24DZZ5TI', 'Felix', 'Cook', '14643.jpg'),
(43, 'NWN279GTO', 'AQZ10IAL8FX', 'Lynn', 'Sanchez', '09679.jpg'),
(44, 'QLH119SHY', 'QRL16WAY9KZ', 'Chloe', 'Morrison', '06835.jpg'),
(45, 'SIY880PVY', 'MXA21NPQ0HB', 'Lionel', 'Chambers', '11460.jpg'),
(46, 'GPQ922LAF', 'BVD98GIQ8EM', 'Hakeem', 'Montoya', '61013.jpg'),
(47, 'XVD801MNC', 'GFX44DYK0SB', 'Ifeoma', 'Bender', '72094.jpg'),
(48, 'VZW773ZQZ', 'XQV78FCH5NF', 'Quamar', 'Franks', '21466.jpg'),
(49, 'EPZ062PFI', 'OOY54ZKB4TL', 'Matthew', 'Blake', '89082.jpg'),
(50, 'JTJ962THQ', 'TOV54WGV4UM', 'Leslie', 'Hernandez', '79603.jpg'),
(51, 'EMJ549QNO', 'XUP44EKJ4ZQ', 'Ivor', 'Sparks', '95786.jpg'),
(52, 'CDS261BIC', 'WBI51AAF4WF', 'Jenette', 'Griffith', '60301.jpg'),
(53, 'WQK601WGG', 'HAH59COB4UY', 'Caleb', 'Walton', '86588.jpg'),
(54, 'RIS933DBK', 'MRO64VYE6HW', 'Lyle', 'Chang', '15495.jpg'),
(55, 'JAB078OSV', 'GIY57HNX4PG', 'Omar', 'Hogan', '58389.jpg'),
(56, 'CJF741NHE', 'NGY99SBI1LX', 'Leslie', 'Kirby', '97944.jpg'),
(57, 'FQO979SRI', 'TWY23GID9RF', 'Deirdre', 'Dean', '80522.jpg'),
(58, 'PTP361FUV', 'NIF62AMQ7AU', 'Colt', 'Clay', '65930.jpg'),
(59, 'RVS691NBX', 'OXH92KQS9JX', 'Evangeline', 'Henson', '06376.jpg'),
(60, 'CZT239VYP', 'VVR36FVL5MY', 'Yoshi', 'Guthrie', '76952.jpg'),
(61, 'FAX968QLG', 'GVV78XRF8QB', 'Mercedes', 'Thornton', '12575.jpg'),
(62, 'IXM605IKK', 'SMY46MLC2WD', 'Chiquita', 'Mcfarland', '30190.jpg'),
(63, 'ORN734CKG', 'PAJ65SRP9QP', 'Malachi', 'Mccormick', '52263.jpg'),
(64, 'TZV237BHO', 'FDB97PAE4VV', 'Nicholas', 'Snider', '13811.jpg'),
(65, 'DTG561PTQ', 'ZSW32MPK0IF', 'Joel', 'Kramer', '77660.jpg'),
(66, 'TSB609XTI', 'AVA88QTJ4LN', 'Brady', 'Oneill', '79392.jpg'),
(67, 'XAZ867LNF', 'TON48HGU4XZ', 'Oliver', 'Carson', '16959.jpg'),
(68, 'UJD953LYF', 'FXO84MJS4PB', 'Kylan', 'Alexander', '67654.jpg'),
(69, 'IZM617SWW', 'FUS31YTF2AR', 'Caleb', 'Day', '72317.jpg'),
(70, 'KAI795QUY', 'CNQ51QVS9XD', 'Whilemina', 'Donaldson', '79050.jpg'),
(71, 'ZJI366LJK', 'TMG38ZQV1WO', 'Kathleen', 'Cain', '76700.jpg'),
(72, 'ZGI881NBP', 'ERI11UTU3ZC', 'Dillon', 'Schwartz', '17909.jpg'),
(73, 'NVH197CKP', 'APM22MJP6II', 'Rudyard', 'Rogers', '74956.jpg'),
(74, 'IRO292JII', 'GTV69UEJ4ZZ', 'Cooper', 'Booker', '16902.jpg'),
(75, 'PUL082LRB', 'GOY41HUC8UP', 'Felicia', 'Hobbs', '56035.jpg'),
(76, 'NMR405XDN', 'NFR13IHL0GM', 'Delilah', 'Oliver', '35125.jpg'),
(77, 'WBD794JXG', 'SMO77ELI1JQ', 'Ferdinand', 'Shaw', '95849.jpg'),
(78, 'EFB641CPQ', 'FYH94DFF8PR', 'Bertha', 'Potts', '86179.jpg'),
(79, 'DUJ125QVS', 'GCJ44EIP2LJ', 'Whilemina', 'Floyd', '53383.jpg'),
(80, 'EWF467SWY', 'LEP02FMT8SJ', 'Eugenia', 'Quinn', '27342.jpg'),
(81, 'DVU841XYC', 'TVH23VTJ8JX', 'Wylie', 'Lamb', '43622.jpg'),
(82, 'JJI752XOL', 'NEB67PEV6IY', 'Rinah', 'Maxwell', '78071.jpg'),
(83, 'SUG224FCX', 'RUF02SQQ1AK', 'Palmer', 'Cox', '84821.jpg'),
(84, 'JHK957IEF', 'SNO33CLX7TY', 'Xantha', 'Melton', '39561.jpg'),
(85, 'NOO707ALG', 'JPT86TUM4WT', 'Camden', 'Harper', '52449.jpg'),
(86, 'JPK924XLR', 'ITY82IGA6XZ', 'Tobias', 'Carroll', '84854.jpg'),
(87, 'THX903KQB', 'AJP57FFM1CZ', 'Shelly', 'Charles', '10325.jpg'),
(88, 'UVW690XNO', 'FAF12FVG7HJ', 'Diana', 'Robertson', '82942.jpg'),
(89, 'KDU481EDM', 'JRA51NQU0XS', 'Rogan', 'Casey', '00656.jpg'),
(90, 'TTF327CVK', 'AVE02KGB2DA', 'Brianna', 'Hardin', '41590.jpg'),
(91, 'EVN356OST', 'CQH75ARK3LQ', 'Justina', 'Morris', '82617.jpg'),
(92, 'JEG486WOV', 'XJZ48ITW7GN', 'Leigh', 'Solis', '98492.jpg'),
(93, 'DAB091HQV', 'FEB35IWD6LN', 'Caldwell', 'Rosales', '65843.jpg'),
(94, 'XJV307EAP', 'GUA27UVZ8YB', 'Eve', 'Carlson', '70402.jpg'),
(95, 'ENP827ATP', 'ZLJ51KRL1GH', 'Alec', 'Fitzpatrick', '10904.jpg'),
(96, 'PBB412MYV', 'ICI45OXA6DX', 'Rhona', 'Mcdonald', '92952.jpg'),
(97, 'WEN803QWB', 'YEF94LYE0SY', 'Destiny', 'Quinn', '20536.jpg'),
(98, 'KJF799UEG', 'RUM48IND6PM', 'Isabelle', 'Riggs', '68828.jpg'),
(99, 'ZGN342XNI', 'YHS72LAF7BS', 'Pamela', 'Robinson', '15799.jpg'),
(100, 'GDK029IDW', 'YQJ44HNE3PX', 'Cassidy', 'Dotson', '36320.jpg');
