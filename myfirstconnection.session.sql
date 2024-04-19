use construction;

use construction;

INSERT INTO housemeasurements (id, region, square_ft, num_rooms, cost)
VALUES
(1 ,'Nairobi', '100-500ft', 2, 276000),
(2 ,'Nairobi', '100-500ft', 3, 356000),
(3 ,'Nairobi', '100-500ft', 4, 436000),
(4 ,'Nairobi', '100-500ft', 5, 496000),
(5 ,'Nairobi', '600-1000Ift', 2, 576000),
(6 ,'Nairobi', '600-1000ft', 3, 634000),
(7 ,'Nairobi', '600-1000ft', 4, 712000),
(8 ,'Nairobi', '600-1000ft', 5, 770000),
(9 ,'Nairobi', '1100-1500ft', 2, 848000),
(10, 'Nairobi', '1100-1500ft', 3, 906000),
(11, 'Nairobi', '1100-1500ft', 4, 1004000),
(12, 'Nairobi', '1100-1500ft', 5, 1062000),
(13, 'Nairobi', '1600-2000ft', 2, 1120000),
(14, 'Nairobi', '1600-2000ft', 3, 1178000),
(15, 'Nairobi', '1600-2000ft', 4, 1236000),
(16, 'Nairobi', '1600-2000ft', 5, 1314000),
(17, 'Nairobi', '2100-2500ft', 2, 1372000),
(18, 'Nairobi', '2100-2500ft', 3, 1430000),
(19, 'Nairobi', '2100-2500ft', 4, 1488000),
(20, 'Nairobi', '2100-2500ft', 5, 1546000),
(21, 'Nairobi', '2600-3000ft', 2, 1604000),
(22, 'Nairobi', '2600-3000ft', 3, 1662000),
(23, 'Nairobi', '2600-3000ft', 4, 1720000),
(24, 'Nairobi', '2600-3000ft', 5, 1778000),
(25, 'Muranga', '100-500ft', 2, 315000),
(26, 'Muranga', '100-500ft', 3, 408000),
(27, 'Muranga', '100-500ft', 4, 501000),
(28, 'Muranga', '100-500ft', 5, 594000),
(29, 'Muranga', '600-1000ft', 2, 687000),
(30, 'Muranga', '600-1000ft', 3, 780000),
(31, 'Muranga', '600-1000ft', 4, 873000),
(32, 'Muranga', '600-1000ft', 5, 966000),
(33, 'Muranga', '1100-1500ft', 2, 1100000),
(34, 'Muranga', '1100-1500ft', 3, 1214000),
(35, 'Muranga', '1100-1500ft', 4, 1308000),
(36, 'Muranga', '1100-1500ft', 5, 1402000),
(37, 'Muranga', '1600-2000ft', 2, 1515000),
(38, 'Muranga', '1600-2000ft', 3, 1628000),
(39, 'Muranga', '1600-2000ft', 4, 1721000),
(40, 'Muranga', '1600-2000ft', 5, 1814000),
(41, 'Muranga', '2100-2500ft', 2, 1907000),
(42, 'Muranga', '2100-2500ft', 3, 2000000),
(43, 'Muranga', '2100-2500ft', 4, 2093000),
(44, 'Muranga', '2100-2500ft', 5, 2186000),
(45, 'Muranga', '2600-3000ft', 2, 2320000),
(46, 'Muranga', '2600-3000ft', 3, 2414000),
(47, 'Muranga', '2600-3000ft', 4, 2507000),
(48, 'Muranga', '2600-3000ft', 5, 2600000),
(49, 'kisumu', '100-500ft', 2, 510000),
(50, 'kisumu', '100-500ft', 3, 629000),
(51, 'kisumu', '100-500ft', 4, 748000),
(52, 'kisumu', '100-500ft', 5, 862000),
(53, 'kisumu', '600-1000ft', 2, 976000),
(54, 'kisumu', '600-1000ft', 3, 1090000),
(55, 'kisumu', '600-1000ft', 4, 1204000),
(56, 'kisumu', '600-1000ft', 5, 1318000),
(57, 'kisumu', '1100-1500ft', 2, 1432000),
(58, 'kisumu', '1100-1500ft', 3, 1546000),
(59, 'kisumu', '1100-1500ft', 4, 1660000),
(60, 'kisumu', '1100-1500ft', 5, 1774000),
(61, 'kisumu', '1600-2000ft', 2, 1953000),
(62, 'kisumu', '1600-2000ft', 3, 2067000),
(63, 'kisumu', '1600-2000ft', 4, 2196000),
(64, 'kisumu', '1600-2000ft', 5, 2310000),
(65, 'kisumu', '2100-2500ft', 2, 2424000),
(66, 'kisumu', '2100-2500ft', 3, 2538000),
(67, 'kisumu', '2100-2500ft', 4, 2652000),
(68, 'kisumu', '2100-2500ft', 5, 2856000),
(69, 'kisumu', '2600-3000ft', 2, 2970000),
(70, 'kisumu', '2600-3000ft', 3, 3174000),
(71, 'kisumu', '2600-3000ft', 4, 3288000),
(72, 'kisumu', '2600-3000ft', 5, 3402000),
(73, 'Nyeri', '100-500ft', 2, 701000),
(74, 'Nyeri', '100-500ft', 3, 790000),
(75, 'Nyeri', '100-500ft', 4, 879000),
(76, 'Nyeri', '100-500ft', 5, 968000),
(77, 'Nyeri', '600-1000ft', 2, 1583000),
(78, 'Nyeri', '600-1000ft', 3, 1757000),
(79, 'Nyeri', '600-1000ft', 4, 1963000),
(80, 'Nyeri', '600-1000ft', 5, 2137000),
(81, 'Nyeri', '1100-1500ft', 2, 2593000),
(82, 'Nyeri', '1100-1500ft', 3, 2766000),
(83, 'Nyeri', '1100-1500ft', 4, 2939000),
(84, 'Nyeri', '1100-1500ft', 5, 3112000),
(85, 'Nyeri', '1600-2000ft', 2, 3379000),
(86, 'Nyeri', '1600-2000ft', 3, 3613000),
(87, 'Nyeri', '1600-2000ft', 4, 3847000),
(88, 'Nyeri', '1600-2000ft', 5, 4081000),
(89, 'Nyeri', '2100-2500ft', 2, 4350000),
(90, 'Nyeri', '2100-2500ft', 3, 4584000),
(91, 'Nyeri', '2100-2500ft', 4, 4818000),
(92, 'Nyeri', '2100-2500ft', 5, 5052000),
(93, 'Nyeri', '2600-3000ft', 2, 5381000),
(94, 'Nyeri', '2600-3000ft', 3, 5615000),
(95, 'Nyeri', '2600-3000ft', 4, 5849000),
(96, 'Nyeri', '2600-3000ft', 5, 6143000),
(97, 'kiambu', '100-500ft', 2, 3375150),
(98, 'kiambu', '100-500ft', 3, 4299160),
(99, 'kiambu', '100-500ft', 4, 7293510),
(100, 'kiambu', '100-500ft', 5, 6319850),
(101, 'kiambu', '600-1000ft', 2, 2498170),
(102, 'kiambu', '600-1000ft', 3, 2853610),
(103, 'kiambu', '600-1000ft', 4, 3867460),
(104, 'kiambu', '600-1000ft', 5, 2917040),
(105, 'kiambu', '1100-1500ft', 2, 2725756),
(106, 'kiambu', '1100-1500ft', 3, 3235058),
(107, 'kiambu', '1100-1500ft', 4, 3378890),
(108, 'kiambu', '1100-1500ft', 5, 2587775),
(109, 'kiambu', '1600-2000ft', 2, 7815440),
(110, 'kiambu', '1600-2000ft', 3, 7698300),
(111, 'kiambu', '1600-2000ft', 4, 8088778),
(112, 'kiambu', '1600-2000ft', 5, 7217433),
(113, 'kiambu', '2100-2500ft', 2, 8010932),
(114, 'kiambu', '2100-2500ft', 3, 8013075),
(115, 'kiambu', '2100-2500ft', 4, 7474418),
(116, 'kiambu', '2100-2500ft', 5, 7593058),
(117, 'kiambu', '2600-3000ft', 2, 7749688),
(118, 'kiambu', '2600-3000ft', 3, 8061416),
(119, 'kiambu', '2600-3000ft', 4, 7723623),
(120, 'kiambu', '2600-3000ft', 5, 1979350);
, 
INSERT INTO buildingmaterials (
               id,
               num_rooms,
               bags_of_cement,
               bags_of_sand,
               lorries_of_stones,
               roofing_cost,
               Labor_cost
)
VALUES 
(1, 2, 2, 800,120, 34000, 30000),
(2, 3, 4, 800,140, 37000, 31000),
(3, 4, 6, 800,160, 40000, 32000),
(4, 5, 7, 800,180, 43000, 33000),
(5, 2, 9, 800,200, 46000, 34000),
(6, 3, 10, 800, 220, 47000, 35000),
(7, 4, 12, 800, 240, 48000, 36000),
(8, 5, 13, 800, 260, 49000, 37000),
(9, 2, 15, 800, 280, 50000, 38000),
(10, 3, 16, 800, 300, 51000, 39000),
(11, 4, 19, 800, 320, 52000, 40000),
(12, 5, 20, 800, 340, 53000, 41000),
(13, 2, 21, 800, 360, 54000, 42000),
(14, 3, 22, 800, 380, 55000, 43000),
(15, 4, 23, 800, 400, 56000, 44000),
(16, 5, 25, 800, 420, 57000, 45000),
(17, 2, 26, 800, 440, 58000, 46000),
(18, 3, 27, 800, 460, 59000, 47000),
(19, 4, 28, 800, 480, 60000, 48000),
(20, 5, 29, 800, 500, 61000, 49000),
(21, 2, 30, 800, 520, 62000, 50000),
(22, 3, 31, 800, 540, 63000, 51000),
(23, 4, 32, 800, 560, 64000, 52000),
(24, 5, 32, 800, 580, 65000, 53000),
(25, 2, 23, 800,120, 30000, 25000),
(26, 3, 43, 800,140, 32000, 26000),
(27, 4, 62, 800,160, 34000, 27000),
(28, 5, 84, 800,180, 36000, 28000),
(29, 2, 10, 800, 200, 38000, 29000),
(30, 3, 12, 800, 220, 40000, 30000),
(31, 4, 14, 800, 240, 42000, 31000),
(32, 5, 16, 800, 260, 44000, 32000),
(33, 2, 18, 800, 280, 46000, 34000),
(34, 3, 20, 800, 300, 48000, 36000),
(35, 4, 22, 800, 320, 50000, 38000),
(36, 5, 24, 800, 340, 52000, 40000),
(37, 2, 26, 800, 360, 54000, 41000),
(38, 3, 28, 800, 380, 56000, 42000),
(39, 4, 30, 800, 400, 58000, 43000),
(40, 5, 32, 800, 420, 60000, 44000),
(41, 2, 34, 800, 440, 62000, 45000),
(42, 3, 36, 800, 460, 64000, 46000),
(43, 4, 38, 800, 480, 66000, 47000),
(44, 5, 40, 800, 500, 68000, 48000),
(45, 2, 42, 800, 520, 70000, 50000),
(46, 3, 44, 800, 540, 72000, 52000),
(47, 4, 46, 800, 560, 74000, 53000),
(48, 5, 48, 800, 580, 76000, 54000),
(49, 2, 4, 800,100, 10000, 25000),
(50, 3, 5, 800,110, 12000, 27000),
(51, 4, 6, 800,120, 14000, 29000),
(52, 5, 7, 800,125, 16000, 31000),
(53, 2, 8, 800,130, 18000, 33000),
(54, 3, 9, 800,135, 20000, 35000),
(55, 4, 10,800, 140, 22000, 37000),
(56, 5, 11,800, 145, 24000, 39000),
(57, 2, 12,800, 150, 26000, 41000),
(58, 3, 13,800, 155, 28000, 43000),
(59, 4, 14,800, 160, 30000, 45000),
(60, 5, 15,800, 165, 32000, 47000),
(61, 2, 20,800, 175, 34000, 49000),
(62, 3, 21,800, 180, 36000, 51000),
(63, 4, 23,800, 185, 38000, 53000),
(64, 5, 24,800, 190, 40000, 55000),
(65, 2, 25,800, 195, 42000, 57000),
(66, 3, 26,800, 200, 44000, 59000),
(67, 4, 27,800, 205, 46000, 61000),
(68, 5, 28,800, 300, 48000, 63000),
(69, 2, 29,800, 305, 50000, 65000),
(70, 3, 30,800, 400, 52000, 67000),
(71, 4, 31,800, 405, 54000, 69000),
(72, 5, 32,800, 410, 56000, 71000),
(73, 3, 5,800,100, 29000, 35000),
(74, 2, 4,800,110, 32000, 37000),
(75, 3, 5,800,120, 35000, 39000),
(76, 4, 6,800,130, 38000, 41000),
(77, 5, 7,800,140, 41000, 43000),
(78, 2, 12,800, 190, 49000, 50000),
(79, 3, 14,800, 210, 53000, 52000),
(80, 4, 18,800, 230, 57000, 54000),
(81, 5, 20,800, 250, 61000, 56000),
(82, 2, 23,800, 300, 65000, 60000),
(83, 3, 25,800, 320, 67000, 63000),
(84, 4, 27,800, 340, 69000, 66000),
(85, 5, 29,800, 360, 71000, 69000),
(86, 2, 32,800, 400, 75000, 72000),
(87, 3, 34,800, 420, 78000, 75000),
(88, 4, 36,800, 440, 81000, 78000),
(89, 5, 38,800, 460, 84000, 81000),
(90, 2, 41,800, 500, 89000, 85000),
(91, 3, 43,800, 520, 92000, 88000),
(92, 4, 45,800, 540, 95000, 91000),
(93, 5, 47,800, 560, 98000, 94000),
(94, 2, 50,800, 600, 102000, 99000),
(95, 3, 52,800, 620, 105000, 102000),
(96, 4, 54,800, 640, 108000, 105000),
(97, 5, 56,800, 660, 111000, 108000),
(98, 2, 47,800, 560, 120650, 107000),
(99, 3, 52,800, 580, 172500, 103500),
(100, 4, 56,800, 450, 165200, 102510),
(101, 5, 49,800, 600, 152800, 103550),
(102, 2, 55,800, 580, 195200, 1025480),
(103, 3, 45,800, 650, 135260, 1025480),
(104, 4, 85,800, 600, 145600, 1051280),
(105, 5, 42,800, 650, 125630, 1096350),
(106, 2, 42,800, 620, 126600, 1085360),
(107, 3, 71,800, 570, 125100, 1045230),
(108, 4, 55,800, 560, 135260, 1058200),
(109, 5, 50,800, 520, 126375, 1058200),
(110, 3, 58,800, 560, 122360, 1087120),
(111, 4, 75,800, 570, 127580, 1085210),
(112, 5, 57,800, 540, 127898, 1056980),
(113, 2, 69,800, 530, 128652, 1045960),
(114, 3, 63,800, 510, 124875, 1026350),
(115, 4, 45,800, 560, 123852, 1046308),
(116, 5, 58,800, 5982, 129932, 1065280),
(117, 2, 58,800, 520, 125820, 1096328),
(118, 3, 52,800, 588, 124560, 1069320),
(119, 4, 75,800, 578, 128960, 1047560),
(120, 5, 70,800, 540, 124890, 1056869);

INSERT INTO costestimation (house_id, material_id)
VALUES 
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83),
(84, 84),
(85, 85),
(86, 86),
(87, 87),
(88, 88),
(89, 89),
(90, 90),
(91, 91),
(92, 92),
(93, 93),
(94, 94),
(95, 95),
(96, 96),
(97, 97),
(98, 98),
(99, 99),
(100, 100),
(101, 101),
(102, 102),
(103, 103),
(104, 104),
(105, 105),
(106, 106),
(107, 107),
(108, 108),
(109, 109),
(110, 110),
(111, 111),
(112, 112),
(113, 113),
(114, 114),
(115, 115),
(116, 116),
(117, 117),
(118, 118),
(119, 119),
(120, 120);   
        