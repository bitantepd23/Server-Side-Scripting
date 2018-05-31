

CREATE TABLE IF NOT EXISTS `uww_courses` (
  `courseID` varchar(12) NOT NULL,
  `credits` int(1) DEFAULT NULL,
  `title` text,
  `description` text,
  `prereq` text,
  `unreq` text,
  `proficiency` char(1) DEFAULT NULL,
  `designation` varchar(6) DEFAULT NULL,
  `semester` char(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uww_courses`
--

INSERT INTO `uww_courses` (`courseID`, `credits`, `title`, `description`, `prereq`, `unreq`, `proficiency`, `designation`, `semester`) VALUES
('COMPSCI 162', 3, 'COMPUTER APPLICATIONS', 'A thorough introduction to using computers covering word processing, spreadsheets, data storage and retrieval, computer graphics and applications, uses of computers, e-mail and the Internet, hardware, history, and problems arising from the use of computers.', 'MATH 140 or MATH 141 or concurrent registration or waiver from the University Mathematics Proficiency Requirement.', '', 'n', 'GM', 'A'),
('COMPSCI 171', 3, 'INTRODUCTION TO PROGRAMMING ', 'An introduction to computer programming and its applications to science, business and education. Opportunity for extensive experience in designing and writing structured programs in the Visual Basic language. ', 'MATH 141 or waiver of MATH 141', '', 'n', 'GM', 'A'),
('COMPSCI 172', 3, 'INTRODUCTION TO OBJECT-ORIENTED PROGRAMMING IN JAVA ', 'This course will give students the essentials of object-oriented programming in Java. Students will learn to formulate algorithms, to solve problems and to implement those solutions with a Java program that employs objects and classes. The student will be introduced to object-oriented design, applications, and applets, class construction, methods and message passing, arrays, string-processing, file processing, and some event-handling and Graphical User Interface programming. This course is designed for students with some prior programming experience. \r\n\r\n', 'COMPSCI 171 and either MATH 152 or MATH 143 or Calculus placement or consent of instructor', '', 'n', 'GM', 'A'),
('COMPSCI 181', 3, 'INTRODUCTION TO DATABASE AND THE WEB', 'This course provides the student with a comprehensive working knowledge of a modern database package including the creation of a database, construction of a wide range of queries, use of forms, and report writing features. The course also gives an introduction to the creation of World Wide Web pages using the Extended Hypertext Markup Language (XHTML). ', 'MATH 141 OR WAIVER OF MATH 141', '', 'n', 'GM', 'A'),
('COMPSCI 271', 3, 'ASSEMBLY PROGRAMMING', 'A study of assembly language basic instructions, number systems, information move, integer arithmetic, subroutine linkage, memory allocation, bit manipulation, floating point arithmetic, macro definition and conditional assembly, the program status word, interrupt and I/O structure.\r\n\r\n', 'COMPSCI 172', '', 'n', '', 'A'),
('COMPSCI 322', 3, 'COMPUTER LANGUAGES AND COMPILERS', 'This course is an introduction to the theory of computer languages and the construction of assemblers and compilers. Students will write a small assembler and a small compiler and will compare features of many computer languages. \r\n', 'COMPSCI 271 and MCS 231 ', '', 'n', '', 'S'),
('COMPSCI 381', 3, 'JAVASCRIPT AND DHTML ', 'JavaScript is a computer language for adding flexibility and functionality to web pages. A powerful language in its own right, it also has the capability to interact with HTML forms, browsers, Java applets, and other objects found on a web page. Students in this course will gain a thorough understanding of JavaScript, and learn to harness its abilities to manage windows, forms, events, cookies, etc. ', 'COMPSCI 172 and COMPSCI 181 or equivalent preparation and consent of instructor.', '', 'n', '', 'A'),
('COMPSCI 382', 3, 'SERVER SIDE SCRIPTING', 'Server side scripting are key to processing web forms, as well as for automating a wide range of server tasks. Perl is optimized for scanning text files, extracting, information and generating reports/web pages based on the results. This course will provide a thorough introduction to the PHP language, with an emphasis on its use in processing web forms. Students will learn to manipulate data, generate dynamic web pages, control email and much more. ', 'COMPSCI 172 and COMPSCI 181 or equivalent preparation and consent of instructor.', '', 'n', '', 'A'),
('COMPSCI 412', 3, 'COMPUTER ORGANIZATION AND SYSTEM PROGRAMMING', 'A study of general computer system organization and architecture. Comparison of CPU and memory structure, instruction formats, addressing, flow of control and operating systems on different types of computer. Assembly language is used extensively to write system programs. ', 'COMPSCI 271 or consent of instructor.', '', 'n', '', 'A'),
('COMPSCI 424', 3, 'OPERATING SYSTEMS', 'This course covers problems encountered by computer operating systems including resource management, memory management, virtual memory, concurrent programming, and distributed systems. Algorithms are presented for deadlock, memory paging, job scheduling , memory allocation, and performance measurement. Operating systems such as WINDOWS, DOS, UNIX, VMS, and MVS are discussed. ', 'COMPSCI 271 and either COMPSCI 372 or MCS 231, or consent of instructor. ', '', 'n', '', 'S'),
('COMPSCI 433', 3, 'THEORY OF ALGORITHMS', 'This course is a survey of algorithms needed for searching, sorting, pattern matching, analyzing graphs, and a variety of other problems of discrete mathematics. Analysis of algorithm efficiency and space/time tradeoffs are discussed. \r\n', 'MCS 231 or both MATH 280 and COMPSCI 172.', '', 'n', '', 'A'),
('COMPSCI 434', 3, 'THEORY OF COMPUTATION', 'This course is an introduction to the theory of computation. It discusses finite automata and Turing machines as models of computation. It includes discussions of regular sets, recursive and partially recursive functions, context free grammars, the halting problem, undecidable problems, complexity, and Np-completeness. ', 'MATH 280', '', 'n', '', 'S'),
('COMPSCI 366', 3, 'DATABASE MANAGEMENT SYSTEMS', NULL, NULL, NULL, NULL, NULL, 'F'),
('COMPSCI 451', 3, 'TOPICS IN APPLIED COMPUTING', NULL, NULL, NULL, NULL, NULL, 'SO'),
('COMPSCI 460', 3, 'COMPUTER NETWORKING', NULL, NULL, NULL, NULL, NULL, 'SE'),
('COMPSCI 461', 3, 'MOBILE COMPUTING ARCHITECTURE', NULL, NULL, NULL, NULL, NULL, 'SO'),
('COMPSCI 462', 3, 'NETWORK SECURITY', NULL, NULL, NULL, NULL, NULL, 'F'),
('COMPSCI 485', 3, 'PROJECT', NULL, NULL, NULL, NULL, NULL, 'n'),
('COMPSCI 170', 3, 'Introduction to Python Programming', 'An introduction to computational thinking and computer programming using the Python language, with applications in science, business, education, and other areas. Students will develop structured programs based on simple algorithms that involve input, output, mathematical operations, decisions, and loops. No previous programming experience is needed.', 'MATH 141 OR WAIVER OF MATH 141', NULL, NULL, NULL, 'A'),
('COMPSCI 481', 3, 'WEB SERVER AND UNIX ADMINISTRATION', 'This course is intended to introduce students to Web Server software and UNIX and UNIX-like operating systems from the perspective of the System Administrator. Linux, the fastest growing operating system, will be studied in detail, together with the Apache web server. Web server configuration will be studied, including optimization, security issues and virtual server administration. Additional topics will include shell programming, system monitoring, file systems and the X Windows GUI. This course will focus on common system administration duties on the Linux platform. Students will acquire competency in using shell programming skills to automate the maintenance of server activity. Emphasis will be placed on using Linux as an Internet server. ', 'COMPSCI 381 and COMPSCI 382 or equivalent preparation and consent of instructor.', '', 'n', '', 'F'),
('COMPSCI 482', 3, 'WEB DATABASE DEVELOPMENT', 'This course will introduce students to MySOL databases and PHP3 scripting on a UNIX platform. Students will create and interact with databases via the web. Topics will include SQL; creating, accessing and updating server-side databases; a variety of database-to-web interface tools; and the PHP embedded scripting language. Transactions with other database products via PHP will also be considered. \r\n', 'COMPSCI 381 and COMPSCI 382 or equivalent preparation and consent of instructor. ', '', 'n', '', 'S'),
('COMPSCI 490', 1, 'WORKSHOP', '', 'Consent of instructor.', '', 'n', '', 'n'),
('COMPSCI 494', 2, 'SEMINAR', '', 'Consent of instructor', '', 'n', '', 'n'),
('COMPSCI 496', 1, 'SPECIAL STUDIES', '', 'Consent of instructor', '', 'n', '', 'n'),
('COMPSCI 498', 1, 'INDEPENDENT STUDY IN COMPUTER SCIENCE ', '', 'Consent of instructor', '', 'n', '', 'n'),
('COMPSCI 215', 3, ' DISCRETE STRUCTURES', NULL, NULL, NULL, NULL, NULL, 'A'),
('COMPSCI 320', 3, 'CONCEPTS OF PROGRAMMING LANGUAGES', NULL, NULL, NULL, NULL, NULL, 'F'),
('COMPSCI 476', 3, 'Software Engineering', NULL, NULL, NULL, NULL, NULL, 'A'),
('COMPSCI 220', 3, 'CONCEPTS OF PROGRAMMING', '', 'COMPSCI-172 and an overall g.p.a of 2.50.', '', 'n', '', 'A'),
('COMPSCI 174', 3, ' INTRODUCTION TO C++ ', '\r\n\r\nThis course teaches basic programming skills using the structured high-level language C++. Topics include basic input and output, declaration and use of variables, use of control statements, implementation of functions usig value and reference parameters, arrays, and structures. Students will write moderately complex applications using C++. ', 'COMPSCI 171 and either MATH 152 or MATH 143 or Calculus placement or consent of instructor.', '', '', ' GM', 'A'),
('COMPSCI 222', 3, 'INTERMEDIATE C++ ', 'This course will cover more advanced issues of C++, including memory management, pointers and user-defined data types. Topics will include reading and writing files, dynamic arrays, implementation of the principles of object oriented design including encapsulation, and inheritance, planning and testing. Students will write complex applications using C++. \r\n\r\n', 'COMPSCI 174', ' MCS 220', '', ' ', 'A'),
('COMPSCI 332', 3, 'INTRODUCTION TO ARTIFICIAL INTELLIGENCE', 'This course introduces basic artificial intelligence principles including simple\r\nrepresentation schemes, problem solving paradigms, constraint propagation,\r\nsearch strategies and learning approaches. Knowledge representation, natural\r\nlanguage processing, gaming, machine learning and user modeling will be\r\nexplored. Students should have written moderately complex computer programs\r\nin a high level language.', 'MCS 220', ' ', '', ' ', 'F'),
('COMPSCI 223', 3, 'ADVANCED C++', 'This course covers issues of data structures, professional software development methodologies including software patterns and advanced object oriented techniques. Topics include lists, queues, stacks and trees. Complex data structure and object-oriented design technique, including inheritance and polymorphism, are applied to develop and large projects. ', 'COMPSCI 222', ' ', '', ' ', 'A'),
('COMPSCI 347', 3, 'Scientific Computing', 'This course provides basic tools for numerical computation within a scientific context. It focuses on the development and implementation of numerical algorithms and visualization of complex data sets. Numerical methods include roots of nonlinear equations, linear systems, eigenvalue problems, numerical integration, initial value problems, and data fitting. MATLAB is used.\r\n\r\n', 'MATH 253 and MATH 254', ' ', '', ' ', 'SE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uww_courses`
--
ALTER TABLE `uww_courses`
 ADD PRIMARY KEY (`courseID`);
