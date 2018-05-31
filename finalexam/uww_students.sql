

CREATE TABLE IF NOT EXISTS `uww_students` (
`student_id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uww_students`
--

INSERT INTO `uww_students` (`student_id`, `first_name`, `last_name`, `email`, `username`, `pwd`) VALUES
(1, 'John', 'Kennedy', 'kennedy@whitehouse.gov', 'user1', '24c9e15e52afc47c225b757e7bee1f9d'),
(2, 'Lyndon', 'Johnson', 'johnsonl@whitehouse.com', 'user2', '7e58d63b60197ceb55a1c487989a3720'),
(3, 'Richard', 'Nixon', 'nixonr@whitehouse.gov', 'user3', '92877af70a45fd6a2ed7fe81e1236b78'),
(4, 'Gerald', 'Ford', 'fordg@whitehouse.gov', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6'),
(5, 'Jimmy', 'Carter', 'carterj@whitehouse.gov', 'user5', '0a791842f52a0acfbb3a783378c066b8'),
(6, 'Ronald', 'Reagan', 'reagan@whitehouse.gov', 'user6', 'affec3b64cf90492377a8114c86fc093'),
(7, 'George', 'Bush', 'bushg@whitehouse.gov', 'user7', '3e0469fb134991f8f75a2760e409c6ed'),
(8, 'Bill', 'Clinton', 'clintonb@whitehouse.gov', 'user8', '7668f673d5669995175ef91b5d171945'),
(9, 'Barack', 'Obama', 'obamab@whitehouse.gov', 'user9', '8808a13b854c2563da1a5f6cb2130868'),
(10, 'Abrahm', 'Lincoln', 'lincolna@whitehouse.gov', 'user10', '990d67a9f94696b1abe2dccf06900322');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uww_students`
--
ALTER TABLE `uww_students`
 ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uww_students`
--
ALTER TABLE `uww_students`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
