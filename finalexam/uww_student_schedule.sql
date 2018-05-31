

CREATE TABLE IF NOT EXISTS `uww_student_schedule` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uww_student_schedule`
--

INSERT INTO `uww_student_schedule` (`id`, `student_id`, `schedule_id`) VALUES
(1, 1, 15),
(2, 1, 18),
(3, 1, 140),
(4, 1, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uww_student_schedule`
--
ALTER TABLE `uww_student_schedule`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uww_student_schedule`
--
ALTER TABLE `uww_student_schedule`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;

