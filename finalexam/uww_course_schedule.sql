

CREATE TABLE IF NOT EXISTS `uww_course_schedule` (
`schedule_id` int(11) NOT NULL,
  `subject` varchar(20) CHARACTER SET latin1 NOT NULL,
  `number` varchar(20) CHARACTER SET latin1 NOT NULL,
  `section` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `instructor` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `display_time` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uww_course_schedule`
--

INSERT INTO `uww_course_schedule` (`schedule_id`, `subject`, `number`, `section`, `instructor`, `display_time`, `location`) VALUES
(1, 'COMPSCI', '162', '01', 'Jiehui Ma', 'Mo 8:00AM - 9:15AM, We online', 'McGraw 0115'),
(2, 'COMPSCI', '162', '03', 'Jiehui Ma', 'We 8:00AM - 9:15AM, Mo online', 'McGraw 0115'),
(3, 'COMPSCI', '162', '02', 'Tina Cao', 'Mo 3:30PM - 4:45PM', 'Hyer 0210'),
(4, 'COMPSCI', '162', '04', 'Tina Cao', 'We 3:30PM - 4:45PM', 'Hyer 0210'),
(5, 'COMPSCI', '162', '05', 'Tina Cao', 'Fr 9:30AM - 10:45AM, Mo online', 'McGraw 0115'),
(6, 'COMPSCI', '171', '01', 'Jiehui Ma', 'TuTh 8:00AM - 9:15AM', 'Hyer 0210'),
(7, 'COMPSCI', '170', '01', 'Robert Kuzoff', 'Tu 9:30AM - 10:45AM', 'McGraw 0115'),
(8, 'COMPSCI', '172', '01', 'Jiehui Ma', 'TuTh 8:00AM - 9:15AM', 'Hyer 0210'),
(9, 'COMPSCI', '172', '02', 'Jiehui Ma', 'TuTh 5:00PM - 6:15PM', 'McGraw 0115'),
(10, 'COMPSCI', '174', '01', 'Tina Cao', 'MoWe 2:00PM - 3:15PM', 'Hyer 0210'),
(11, 'COMPSCI', '174', '02', 'Jiazhen Zhou', 'Tu 9:30AM - 10:45AM, Th online', 'McGraw 0115'),
(12, 'COMPSCI', '181', '01', 'Robert Siemann', 'TuTh 12:30PM - 1:45PM', 'McGraw 0117'),
(13, 'COMPSCI', '215', '01', 'Lopamudra Mukherjee', 'MoWe 11:00AM - 12:15PM', 'McGraw 0117'),
(14, 'COMPSCI', '220', '01', 'Cheng Thao', 'MoWe 3:30PM - 4:45PM', 'McGraw 0115'),
(15, 'COMPSCI', '222', '01', 'Jiazhen Zhou', 'MoWe 11:00AM - 12:15PM', 'McGraw 0115'),
(16, 'COMPSCI', '222', '02', 'Jiazhen Zhou', 'TuTh 12:30PM - 1:45PM', 'Hyer 0210'),
(17, 'COMPSCI', '223', '01', 'Hien Nguyen', 'MoWe 9:30AM - 10:45AM', 'Hyer 0210'),
(18, 'COMPSCI', '223', '02', 'Cheng Thao', 'TuTh 2:00PM - 3:15PM', 'McGraw 0115'),
(19, 'COMPSCI', '271', '01', 'Lopa Mukherjee', 'MoWe 2:00PM - 3:15PM', 'McGraw 0115'),
(20, 'COMPSCI', '271', '02', 'Lopa Mukherjee', 'TuTh 12:30PM - 1:45PM', 'McGraw 0115'),
(21, 'COMPSCI', '322', '01', 'Zachary Oster', 'MoWe 3:30PM - 4:45PM', 'McGraw 0117'),
(22, 'COMPSCI', '347', '01', 'Leon Arriola', 'TuTh 2:00PM - 3:15PM', 'Hyer 0210'),
(23, 'COMPSCI', '381', '01', 'Tina Cao', 'TuTh 9:30AM - 10:45AM', 'Hyer 0210'),
(24, 'COMPSCI', '382', '01', 'Sobitha Samaranayake', 'TuTh 3:30PM - 4:45PM', 'Hyer 0210'),
(25, 'COMPSCI', '412', '01', 'Athula Gunawardena', 'MoWe 11:00AM - 12:15PM', 'Hyer 0210'),
(26, 'COMPSCI', '424', '01', 'Zachary Oster', 'MoWe 2:00PM - 3:15PM', 'McGraw 0117'),
(27, 'COMPSCI', '433', '01', 'Lopamudra Mukherjee', 'TuTh 9:30AM - 10:45AM', 'McGraw 0117'),
(28, 'COMPSCI', '434', '01', 'Thomas Drucker', 'TuTh 11:00AM - 12:15PM', 'McGraw 0117'),
(29, 'COMPSCI', '461', '01', 'Jiazhen Zhou', 'MoWe 9:30AM - 10:45AM', 'McGraw 0117'),
(30, 'COMPSCI', '476', '01', 'Cheng Thao', 'TuTh 3:30PM - 4:45PM', 'McGraw 0115'),
(31, 'COMPSCI', '482', '01', 'Sobitha Samaranayake', 'TuTh 5:00PM - 6:15PM', 'Hyer 0210'),
(32, 'COMPSCI', '498', '01', 'Staff', 'TBA', ''),
(33, 'COMPSCI', '498R', '02', 'Staff', 'TBA', ''),
(34, 'MAGD', '150', '01', 'Nick Hwang', 'Mo 12:30PM - 1:45PM', 'McGraw 0127'),
(35, 'MAGD', '150', '02', 'Nick Hwang', 'Fr 12:30PM - 1:45PM', 'McGraw 0127'),
(36, 'MAGD', '150', '01C', 'Nick Hwang', 'We 12:30PM - 1:45PM', 'McGraw 0101'),
(37, 'MAGD', '220', '01', 'Bill Miller', 'TuTh 11:00AM - 1:45PM', 'Center of the Arts 2'),
(38, 'MAGD', '220', '02', 'Bill Miller', 'TuTh 2:00PM - 4:45PM', 'Center of the Arts 2'),
(39, 'MAGD', '270', '01', 'Fred Leighton', 'MoWe 11:00AM - 12:15PM', 'McGraw 0127'),
(40, 'MAGD', '270', '02', 'Fred Leighton', 'MoWe 2:00PM - 3:15PM', 'McGraw 0127'),
(41, 'MAGD', '271', '01', 'Fred Leighton', 'TuTh 9:30AM - 10:45AM', 'McGraw 0127'),
(42, 'MAGD', '271', '02', 'Fred Leighton', 'TuTh 11:00AM - 12:15PM', 'McGraw 0127'),
(43, 'MAGD', '487', '01', 'James Terkeurst', 'Mo 5:00PM - 7:30PM', 'McGraw 0127'),
(44, 'MAGD', '488', '01', 'James Terkeurst', 'Tu 5:00PM - 7:30PM', 'McGraw 0127'),
(45, 'MAGD', '488', '02', 'James Terkeurst', 'We 5:00PM - 7:30PM', 'McGraw 0127'),
(46, 'MAGD', '498', '01', 'Bill Miller', 'TBA', ''),
(47, 'MAGD', '498', '02', 'James Terkeurst', 'TBA', ''),
(48, 'MAGD', '498', '03', 'Xiaohong Zhang', 'TBA', ''),
(49, 'MATH', '041', '01', 'Charlotte Toboyek', 'MoTuWeTh 8:00AM - 8:50AM', 'McCutchan 0011A'),
(50, 'MATH', '041', '02', 'Charlotte Toboyek', 'MoTuWeTh 9:00AM - 9:50AM', 'McCutchan 0011A'),
(51, 'MATH', '041', '03P', 'Charlotte Toboyek', 'MoTuWeTh 11:00AM - 11:50AM', 'McCutchan 0011A'),
(52, 'MATH', '041', '04', 'Lori Grady', 'MoTuWeTh 1:00PM - 1:50PM', 'McCutchan 0011A'),
(53, 'MATH', '041', '05', 'Lori Grady', 'MoTuWeTh 2:00PM - 2:50PM', 'McCutchan 0011A'),
(54, 'MATH', '140', '01', 'Thomas Drucker', 'MoWeFr 11:00AM - 11:50AM', 'Heide 0117'),
(55, 'MATH', '141', '01', 'To Be Arranged', 'MoTuWeTh 8:00AM - 8:50AM', 'Hyland 1310'),
(56, 'MATH', '141', '02', 'Kelly Strait', 'MoTuWeTh 8:00AM - 8:50AM', 'Heide 0112'),
(57, 'MATH', '141', '04', 'John Reilly', 'MoTuWeTh 10:00AM - 10:50AM', 'Heide 0112'),
(58, 'MATH', '141', '05', 'Teri Alder', 'MoTuWeTh 11:00AM - 11:50AM', 'Heide 0112'),
(59, 'MATH', '141', '06P', 'Kelly Strait', 'MoTuWeTh 11:00AM - 11:50AM', 'Hyland 1310'),
(60, 'MATH', '141', '07P', 'John Reilly', 'MoTuWeTh 12:00PM - 12:50PM', 'Heide 0112'),
(61, 'MATH', '141', '08', 'Kelly Strait', 'MoTuWeTh 12:00PM - 12:50PM', 'Hyland 1310'),
(62, 'MATH', '141', '09', 'To Be Arranged', 'MoTuWeTh 1:00PM - 1:50PM', 'Heide 0215'),
(63, 'MATH', '141', '10', 'Geethamali Samaranayake', 'MoTuWeTh 1:00PM - 1:50PM', 'Heide 0112'),
(64, 'MATH', '141', '11', 'Huckleberry Rahr', 'MoTuWeTh 2:00PM - 2:50PM', 'Heide 0112'),
(65, 'MATH', '141', '12', 'Teri Alder', 'MoTuWeTh 4:00PM - 4:50PM', 'Heide 0112'),
(66, 'MATH', '141', '13', 'To Be Arranged', 'MoTuWeTh 4:00PM - 4:50PM', 'Hyland 1310'),
(67, 'MATH', '141', '14', 'Lori Grady', 'TuTh 5:00PM - 6:40PM', 'Hyland 1310'),
(68, 'MATH', '141', '15', 'Joan Stamm', 'MoTuWeTh 12:00AM - 12:00AM', 'WEB BASED'),
(69, 'MATH', '141', '16', 'Joan Stamm', 'MoTuWeTh 12:00AM - 12:00AM', 'WEB BASED'),
(70, 'MATH', '141', '03', 'John Reilly', 'MoTuWeTh 9:00AM - 9:50AM', 'Heide 0112'),
(71, 'MATH', '141', '08P', 'Kelly Strait', 'MoTuWeTh 12:00PM - 12:50PM', 'Hyland 1310'),
(72, 'MATH', '141', '11X', 'Huckleberry Rahr', 'MoTuWeTh 2:00PM - 2:50PM', 'Heide 0112'),
(73, 'MATH', '141', '16W', 'Joan Stamm', 'MoTuWeTh 12:00AM - 12:00AM', 'WEB BASED'),
(74, 'MATH', '143', '01', 'To Be Arranged', 'TuTh 8:00AM - 9:15AM', 'Upham 0144'),
(75, 'MATH', '143', '02', 'Khyam Paneru', 'MoWeFr 8:00AM - 8:50AM', 'McGraw 0125'),
(76, 'MATH', '143', '03', 'Leon Arriola', 'MoWe 12:30PM - 1:45PM', 'McGraw 0125'),
(77, 'MATH', '143', '04', 'To Be Arranged', 'MoWeFr 9:00AM - 9:50AM', 'Heide 0113'),
(78, 'MATH', '143', '05', 'Huckleberry Rahr', 'TuTh 9:30AM - 10:45AM', 'Heide 0215'),
(79, 'MATH', '143', '06', 'Ki-Bong Nam', 'MoWeFr 10:00AM - 10:50AM', 'Heide 0215'),
(80, 'MATH', '143', '07', 'Leon Arriola', 'MoWe 2:00PM - 3:15PM', 'McGraw 0117'),
(81, 'MATH', '143', '08', 'Khyam Paneru', 'MoWeFr 11:00AM - 11:50AM', 'Heide 0219'),
(82, 'MATH', '143', '09', 'Tamas Szabo', 'MoWe 11:00AM - 12:15PM', 'Upham 0144'),
(83, 'MATH', '143', '11', 'To Be Arranged', 'TuTh 11:00AM - 12:15PM', 'Heide 0219'),
(84, 'MATH', '143', '12', 'Balamurugan Pandiyan', 'TuTh 11:00AM - 12:15PM', 'McGraw 0125'),
(85, 'MATH', '143', '13', 'Huckleberry Rahr', 'TuTh 11:00AM - 12:15PM', 'Heide 0215'),
(86, 'MATH', '143', '14', 'William Mickelson', 'MoWeFr 12:00PM - 12:50PM', 'Heide 0117'),
(87, 'MATH', '143', '15', 'Fe Evangelista', 'MoWe 12:30PM - 1:45PM', 'McGraw 0117'),
(88, 'MATH', '143', '16', 'Huckleberry Rahr', 'MoWe 12:30PM - 1:45PM', 'Upham 0144'),
(89, 'MATH', '143', '18', 'Thomas Mcfarland', 'TuTh 12:30PM - 1:45PM', 'Heide 0100'),
(90, 'MATH', '143', '19', 'Pawel Felcyn', 'TuTh 12:30PM - 1:45PM', 'Heide 0219'),
(91, 'MATH', '143', '20', 'William Mickelson', 'MoWe 1:00PM - 1:50PM', 'Heide 0117'),
(92, 'MATH', '143', '21', 'Ki-Bong Nam', 'MoWeFr 2:00PM - 2:50PM', 'Heide 0219'),
(93, 'MATH', '143', '22', 'Balamurugan Pandiyan', 'MoWe 2:00PM - 3:15PM', 'Upham 0144'),
(94, 'MATH', '143', '23', 'Peter Lampe', 'TuTh 2:00PM - 3:15PM', 'Heide 0219'),
(95, 'MATH', '143', '24', 'To Be Arranged', 'TuTh 2:00PM - 3:15PM', 'McGraw 0117'),
(96, 'MATH', '143', '25', 'Robert Siemann', 'TuTh 2:00PM - 3:15PM', 'McGraw 0125'),
(97, 'MATH', '143', '26', 'Leon Arriola', 'TuTh 3:30PM - 4:45PM', 'McGraw 0117'),
(98, 'MATH', '143', '27', 'Xueqing Chen', 'We 5:00PM - 7:30PM', 'Hyland 2311'),
(99, 'MATH', '143', '28', 'Tamas Szabo', 'TBA', 'WEB BASED'),
(100, 'MATH', '143', '28W', 'Tamas Szabo', 'TBA', 'WEB BASED'),
(101, 'MATH', '148', '01', 'Rachel Chaphalkar', 'TuTh 8:00AM - 9:15AM', 'Hyer 0216'),
(102, 'MATH', '148', '02', 'Angela Harlan', 'MoWeFr 12:00PM - 12:50PM', 'Hyer 0216'),
(103, 'MATH', '148', '03', 'Angela Harlan', 'MoWeFr 1:00PM - 1:50PM', 'Hyer 0216'),
(104, 'MATH', '149', '01', 'Rachel Chaphalkar', 'MoWeFr 10:00AM - 10:50AM', 'Hyer 0216'),
(105, 'MATH', '149', '02', 'Rachel Chaphalkar', 'MoWeFr 11:00AM - 11:50AM', 'Hyer 0216'),
(106, 'MATH', '149', '03', 'Teri Alder', 'We 5:00PM - 7:30PM', 'Hyer 0216'),
(107, 'MATH', '152', '01', 'Peter Lampe', 'MoTuWeThFr 11:00AM - 11:50AM', 'Hyland 2311'),
(108, 'MATH', '152', '02', 'Julie Letellier', 'MoTuWeThFr 12:00PM - 12:50PM', 'Hyland 2311'),
(109, 'MATH', '152', '03', 'Corey Bruns', 'MoTuWeTh 1:00PM - 1:50PM', 'Hyland 1310'),
(110, 'MATH', '152', '03', 'Corey Bruns', 'Fr 12:00AM - 12:00AM', 'WEB BASED'),
(111, 'MATH', '152', '04', 'Corey Bruns', 'MoTuWeTh 2:00PM - 2:50PM', 'Hyland 1310'),
(112, 'MATH', '152', '04', 'Corey Bruns', 'Fr 12:00AM - 12:00AM', 'WEB BASED'),
(113, 'MATH', '152', '05', 'Balamurugan Pandiyan', 'MoTuWeTh 4:00PM - 4:50PM', 'Upham 0144'),
(114, 'MATH', '152', '05', 'Balamurugan Pandiyan', 'Fr 12:00AM - 12:00AM', 'WEB BASED'),
(115, 'MATH', '152', '02X', 'Julie Letellier', 'MoTuWeThFr 12:00PM - 12:50PM', 'Hyland 2311'),
(116, 'MATH', '177', '01', 'Thomas Mcfarland', 'Mo 5:00PM - 6:15PM', 'Heide 0101'),
(117, 'MATH', '230', '01', 'William Mickelson', 'MoWeFr 10:00AM - 10:50AM', 'Upham 0144'),
(118, 'MATH', '230', '02', 'William Mickelson', 'MoWeFr 2:00PM - 2:50PM', 'Heide 0117'),
(119, 'MATH', '243', '01', 'Mohammad Ahmadi', 'TuTh 8:00AM - 9:15AM', 'Heide 0219'),
(120, 'MATH', '243', '02', 'Ki-Bong Nam', 'MoWeFr 9:00AM - 9:50AM', 'Heide 0215'),
(121, 'MATH', '243', '03', 'Mohammad Ahmadi', 'TuTh 9:30AM - 10:45AM', 'Heide 0219'),
(122, 'MATH', '243', '04', 'Robert Siemann', 'MoWeFr 10:00AM - 10:50AM', 'McGraw 0125'),
(123, 'MATH', '243', '05', 'Robert Siemann', 'MoWeFr 2:00PM - 2:50PM', 'McGraw 0125'),
(124, 'MATH', '243', '06', 'Mohammad Ahmadi', 'We 5:00PM - 7:30PM', 'Heide 0219'),
(125, 'MATH', '250', '01', 'Thomas Drucker', 'MoTuWeThFr 1:00PM - 1:50PM', 'Hyland 2311'),
(126, 'MATH', '250', '02', 'Thomas Mcfarland', 'MoWe 2:00PM - 2:50PM', 'Heide 0100'),
(127, 'MATH', '250', '02', 'Thomas Mcfarland', 'TuTh 2:00PM - 3:15PM', 'Heide 0100'),
(128, 'MATH', '253', '01', 'Peter Lampe', 'MoTuWeThFr 9:00AM - 9:50AM', 'Hyland 1310'),
(129, 'MATH', '253', '02', 'Geethamali Samaranayake', 'MoTuWeTh 10:00AM - 10:50AM', 'Hyland 1310'),
(130, 'MATH', '253', '02', 'Geethamali Samaranayake', 'Fr 12:00AM - 12:00AM', ''),
(131, 'MATH', '253', '03', 'Pawel Felcyn', 'MoWe 2:00PM - 2:50PM', 'Heide 0215'),
(132, 'MATH', '253', '03', 'Pawel Felcyn', 'TuTh 2:00PM - 3:15PM', 'Heide 0215'),
(133, 'MATH', '254', '01', 'Julie Letellier', 'MoTuWeThFr 10:00AM - 10:50AM', 'Hyland 2311'),
(134, 'MATH', '254', '02', 'Xueqing Chen', 'MoWe 2:00PM - 2:50PM', 'Hyland 2311'),
(135, 'MATH', '254', '02', 'Xueqing Chen', 'TuTh 2:00PM - 3:15PM', 'Hyland 2311'),
(136, 'MATH', '255', '01', 'Geethamali Samaranayake', 'MoWe 11:00AM - 12:15PM', 'Hyland 1303'),
(137, 'MATH', '255', '02', 'Mohammad Ahmadi', 'TuTh 12:30PM - 1:45PM', 'Hyer 0216'),
(138, 'MATH', '280', '01', 'Corey Bruns', 'TuTh 9:30AM - 10:45AM', 'McGraw 0125'),
(139, 'MATH', '301', '01', 'Fe Evangelista', 'MoWe 8:00AM - 9:15AM', 'Hyland 2311'),
(140, 'MATH', '352/552', '01', 'Angela Harlan', 'MoWeFr 8:00AM - 8:50AM', 'Hyer 0216'),
(141, 'MATH', '353', '01', 'Tamas Szabo', 'MoWe 2:00PM - 2:50PM', 'Hyer 0216'),
(142, 'MATH', '353', '01', 'Tamas Szabo', 'TuTh 2:00PM - 3:15PM', 'Hyer 0216'),
(143, 'MATH', '355/555', '01', 'Sobitha Samaranayake', 'MoWeFr 10:00AM - 10:50AM', 'Upham 0144'),
(144, 'MATH', '359', '01', 'Rachel Chaphalkar', 'TuTh 11:00AM - 12:15PM', 'Hyer 0216'),
(145, 'MATH', '415/615', '01', 'Angela Harlan', 'MoWeFr 9:00AM - 9:50AM', 'Hyer 0216'),
(146, 'MATH', '421/621', '01', 'Tamas Szabo', 'TuTh 3:30PM - 4:45PM', 'Hyer 0216'),
(147, 'MATH', '442/642', '01', 'Julie Letellier', 'TuTh 3:30PM - 5:10PM', 'Hyland 2311'),
(148, 'MATH', '446', '01', 'Khyam Paneru', 'MoWeFr 9:00AM - 9:50AM', 'McGraw 0125'),
(149, 'MATH', '446', '01', 'Khyam Paneru', 'MoWeFr 9:00AM - 9:50AM', 'McGraw 0125'),
(150, 'MATH', '446', '01', 'Khyam Paneru', 'MoWeFr 9:00AM - 9:50AM', 'McGraw 0125'),
(151, 'MATH', '446', '01', 'Khyam Paneru', 'MoWeFr 9:00AM - 9:50AM', 'McGraw 0125'),
(152, 'MATH', '449', '01', 'To Be Arranged', 'TBA', ''),
(153, 'MATH', '452', '01', 'Xueqing Chen', 'TuTh 12:30PM - 1:45PM', 'Upham 0144'),
(154, 'MATH', '459/659', '01', 'Balamurugan Pandiyan', 'TuTh 2:00PM - 3:15PM', 'Upham 0144'),
(155, 'MATH', '464/664', '01', 'Pawel Felcyn', 'TuTh 9:30AM - 10:45AM', 'Hyer 0216'),
(156, 'COMPSCI', '180', '01', 'Robert Kuzoff', 'TuTh 11:00AM - 12:15PM', 'Hyer 0210'),
(157, 'COMPSCI', '448', '01', ' Robert Kuzoff', 'TuTh 2:00PM - 3:15PM', 'Upham 0238'),
(158, 'COMPSCI ', '381', '02', 'Sobitha Samaranayake', 'TBA', 'Web Based'),
(159, 'COMPSCI', '332', '01', 'Zachary Oster', 'MoWe 3:30PM - 4:45PM', 'McGraw 0117');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uww_course_schedule`
--
ALTER TABLE `uww_course_schedule`
 ADD PRIMARY KEY (`schedule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uww_course_schedule`
--
ALTER TABLE `uww_course_schedule`
MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=160;

