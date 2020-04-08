--Database: `test`



CREATE TABLE IF NOT EXISTS `registeration` (
  `usernamecheck` mediumtext NOT NULL,
  `passcheck` mediumtext NOT NULL,
  `emailcheck` mediumtext NOT NULL,
  `birthdaydaycheck` mediumtext NOT NULL,
  `birthdaymonthcheck` mediumtext NOT NULL
  `birthdayyearcheck` mediumtext NOT NULL
  `educationcheck` mediumtext NOT NULL
  `nameoftheinstitutionhcheck` mediumtext NOT NULL
  `resumecheck` mediumtext NOT NULL
  `gendercheck` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`usercheck`, `passcheck`, `emailcheck`, `birthdaydaycheck`, `birthdaymonthcheck`,`birthdayyearcheck`,`educationcheck`,`nameoftheinstitutioncheck`,`resumecheck`,`gendercheck`) VALUES
('shabana', 'shabana123*', 'shabanabanu656@gmail.com', '12','september','2000', 'cs','msn','x.txt','female')
('afsana', 'afsana987*', 'afsana6@gmail.com', '21','march','2000', 'cs','msn','x.txt','female');




CREATE TABLE IF NOT EXISTS 'admin'(
   'username' mediumtext NOT NULL,
   'password' mediumtext NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
--Dumping data for table 'admin'
--

INSERT INTO 'admin' ('username','password') VALUES
('admin123','admin');