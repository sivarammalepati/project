-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 06:55 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelliroju`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pwd`, `user_role`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin'),
(2, 'admin1@gmail.com', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `actor` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `marriageday` date NOT NULL,
  `bridefblink` varchar(255) NOT NULL,
  `bridetwitterlink` varchar(255) NOT NULL,
  `brideinstagramlink` varchar(255) NOT NULL,
  `groomfblink` varchar(255) NOT NULL,
  `groomtwitterlink` varchar(255) NOT NULL,
  `groominstagramlink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`, `actor`, `spouse`, `marriageday`, `bridefblink`, `bridetwitterlink`, `brideinstagramlink`, `groomfblink`, `groomtwitterlink`, `groominstagramlink`) VALUES
(25, 'anil-kumble-twitter_806x605_71514305860.jpg', 'uploads/anil-kumble-twitter_806x605_71514305860.jpg', 'Anil Kumble', 'Chethana Ramatheertha', '1999-07-01', 'https://www.facebook.com/anilkumble1074/', 'https://twitter.com/anilkumble1074', 'https://www.instagram.com/anil.kumble/', 'https://www.facebook.com/search/top/?q=Chethana%20Ramatheertha', 'https://twitter.com/search?q=Chethana%20Ramatheertha&src=typd', 'https://www.instagram.com/explore/tags/chethanaramatheertha/'),
(26, 'images.jpg', 'uploads/images.jpg', 'MS Dhoni', 'sakshi', '2010-07-04', 'https://www.facebook.com/MSDhoni/', 'https://twitter.com/msdhoni', 'https://www.instagram.com/ms.mahi7781/', 'https://www.facebook.com/sakshiSrawath/', 'https://twitter.com/SaakshiSRawat', 'https://www.instagram.com/sakshisingh_r/'),
(29, 'simran-husband.jpg', 'uploads/simran-husband.jpg', 'Simran', 'Deepak Bagga', '2003-12-02', '', '', '', '', '', ''),
(30, 'hqdefault.jpg', 'uploads/hqdefault.jpg', 'Suresh Raina', 'Priyanka Chaudhary', '2015-04-03', '', '', '', '', '', ''),
(31, 'download.jpg', 'uploads/download.jpg', 'Amitabh Bachchan', 'jaya bhaduri', '1973-06-03', '', '', '', '', '', ''),
(32, 'rahul-dravid-poses-with-wife-vijeeta-pendharkar-during-their-wedding-201609-1474455225.jpg', 'uploads/rahul-dravid-poses-with-wife-vijeeta-pendharkar-during-their-wedding-201609-1474455225.jpg', 'Rahul Dravid', 'Vijeta Pendhakar', '2003-05-04', '', '', '', '', '', ''),
(33, 'download (1).jpg', 'uploads/download (1).jpg', 'Allu Arjun', 'sneha reddy', '2011-03-06', '', '', '', '', '', ''),
(34, 'mommootty.jpg', 'uploads/mommootty.jpg', 'Mamootty', 'Sulfath Kutty', '1979-05-06', '', '', '', '', '', ''),
(35, 'samantha-ruth-prabhu-naga-twitter_650x400_71507349988.jpg', 'uploads/samantha-ruth-prabhu-naga-twitter_650x400_71507349988.jpg', 'Samantha', 'naga chaitanya', '2017-10-07', '', '', '', '', '', ''),
(36, '26c5647de9032ed936ca05a59d5e3872.jpg', 'uploads/26c5647de9032ed936ca05a59d5e3872.jpg', 'Rambha', 'Indhran Pathmanathan', '2010-04-08', '', '', '', '', '', ''),
(37, 'article-l-2016123466110422264000.jpg', 'uploads/article-l-2016123466110422264000.jpg', 'Ishant Sharma', 'Pratima Singh', '2016-12-10', '', '', '', '', '', ''),
(38, 'Mahesh-Babu.jpg', 'uploads/Mahesh-Babu.jpg', 'Mahesh Babu', 'Namrata Shirodkar', '2010-02-10', '', '', '', '', '', ''),
(40, 'download (2).jpg', 'uploads/download (2).jpg', 'Nagarjuna', 'amala', '1992-06-11', '', '', '', '', '', ''),
(41, 'download (3).jpg', 'uploads/download (3).jpg', 'Sneha', 'prasanna', '2012-05-11', '', '', '', '', '', ''),
(42, 'download (4).jpg', 'uploads/download (4).jpg', 'Suriya', 'Jyothika', '2006-09-17', '', '', '', '', '', ''),
(43, 'download (5).jpg', 'uploads/download (5).jpg', 'Meena', 'vidya sagar', '2009-07-12', '', '', '', '', '', ''),
(44, 'ramya-6.jpg', 'uploads/ramya-6.jpg', 'Ramya Krishna', 'Krishna Vamsi', '2012-06-12', '', '', '', '', '', ''),
(45, 'A-R-Rahman-Wife-saira-banu-Images-2-700x467.jpg', 'uploads/A-R-Rahman-Wife-saira-banu-Images-2-700x467.jpg', 'AR Rahman', 'Saira Banu', '1995-03-12', '', '', '', '', '', ''),
(46, '198.jpg', 'uploads/198.jpg', 'Sonali Bendre', 'Goldie Behl', '2002-11-12', '', '', '', '', '', ''),
(47, 'rohittwitterfb-story_647_121415031220.jpg', 'uploads/rohittwitterfb-story_647_121415031220.jpg', 'Rohit Sharma', 'Ritika Sajdeh', '2015-12-13', '', '', '', '', '', ''),
(48, 'download (6).jpg', 'uploads/download (6).jpg', 'Cheteshwar Pujara', 'Puja Pabari', '2013-12-13', '', '', '', '', '', ''),
(49, 'images.jpg', 'uploads/images.jpg', 'Ravichandran Ashwin', 'Prithi Narayanan', '2011-11-13', '', '', '', '', '', ''),
(50, 'vidyawedding5_121512024052.jpg', 'uploads/vidyawedding5_121512024052.jpg', 'Vidhya Balan', 'Siddharth Roy Kapur', '2012-12-14', '', '', '', '', '', ''),
(51, 'download (7).jpg', 'uploads/download (7).jpg', 'Ram Charan', 'Upasana Kamineni', '2012-06-14', '', '', '', '', '', ''),
(52, 'download (8).jpg', 'uploads/download (8).jpg', 'VVS Laxman', 'GR  Sailaja', '2004-02-16', '', '', '', '', '', ''),
(53, 'article-l-2017410212370445424000.jpg', 'uploads/article-l-2017410212370445424000.jpg', 'Ravindra Jadeja', 'riva solanki', '2017-04-16', '', '', '', '', '', ''),
(54, '548d7b650f0cf45973bd02f6f6c59939.jpg', 'uploads/548d7b650f0cf45973bd02f6f6c59939.jpg', 'Akshay Kumar', 'Twinkle Khanna', '2001-01-17', '', '', '', '', '', ''),
(55, 'Dhanush-and-Aishwaryas-Marriage.jpg', 'uploads/Dhanush-and-Aishwaryas-Marriage.jpg', 'Dhanush', 'Aishwarya', '2004-11-18', '', '', '', '', '', ''),
(56, 'article-l-201612115532057200000.jpg', 'uploads/article-l-201612115532057200000.jpg', 'Asin', 'rahul sharma', '2016-01-19', '', '', '', '', '', ''),
(57, 'shriya-saran-andrei-koscheev-ndtv_650x400_71521701715.jpg', 'uploads/shriya-saran-andrei-koscheev-ndtv_650x400_71521701715.jpg', 'Shriya Saran', 'Andrei Koscheev', '2018-03-19', '', '', '', '', '', ''),
(58, 'anilkapoor.jpg', 'uploads/anilkapoor.jpg', 'Anil Kapoor', 'sunita kapoor', '1984-05-19', '', '', '', '', '', ''),
(59, 'abhishek.jpg', 'uploads/abhishek.jpg', 'Abhishek Bachchan', 'Aishwarya Rai', '2007-04-20', '', '', '', '', '', ''),
(60, 'cheranjeevi.jpg', 'uploads/cheranjeevi.jpg', 'Chiranjeevi', 'Surekha Konidala', '1980-02-20', '', '', '', '', '', ''),
(61, 'ganguly_fbsport_647_120816031829.jpg', 'uploads/ganguly_fbsport_647_120816031829.jpg', 'Sourav Ganguly', 'dona roy', '1997-02-20', 'www.fb.com', '', '', '', '', ''),
(62, 'sehwag.jpg', 'uploads/sehwag.jpg', 'Virendra Sehwag', 'Aarti Ahlawat', '2004-04-22', '', '', '', '', '', ''),
(63, 'shilpa shetty.jpg', 'uploads/shilpa shetty.jpg', 'Shilpa Shetty', 'Raj Kundra', '2009-11-22', 'google.com', 'google.com', 'google.com', 'google.com', 'google.com', 'google.com'),
(64, 'bhuvi.jpg', 'uploads/bhuvi.jpg', 'Bhuvaneshwar Kumar', 'Nupur Nagar', '2017-11-23', 'google.com', '', '', 'google.com', '', ''),
(65, 'ajith.jpg', 'uploads/ajith.jpg', 'Ajith Kumar', 'Shalini', '2000-04-21', '', '', '', '', '', ''),
(66, 'ajay.jpg', 'uploads/ajay.jpg', 'Ajay Devgan', 'kajol', '1999-02-24', '', '', '', '', '', ''),
(67, 'Sachin and Anjali at their wedding reception in May 1995..jpg', 'uploads/Sachin and Anjali at their wedding reception in May 1995..jpg', 'Sachin Tendulkar', 'Anjali', '1995-05-24', '', '', '', '', '', ''),
(68, 'vijay.jpg', 'uploads/vijay.jpg', 'Vijay', 'Sangeeta Sornalingam', '1999-08-25', '', '', '', '', '', ''),
(69, 'shahrukh.jpg', 'uploads/shahrukh.jpg', 'Shahrukh Khan', 'Gauri', '1991-10-25', '', '', '', '', '', ''),
(70, 'Rajinikanth-marriage.jpg', 'uploads/Rajinikanth-marriage.jpg', 'Rajinikanth', 'latha', '1981-02-26', '', '', '', '', '', ''),
(71, 'rahane.jpg', 'uploads/rahane.jpg', 'Ajinkya Rahane', 'Radhika Dhopavkar', '2014-09-26', '', '', '', '', '', ''),
(72, 'nani.jpg', 'uploads/nani.jpg', 'Nani', 'Anjana Yelavarthy', '2012-10-27', '', '', '', '', '', ''),
(73, 'mohan lal.jpg', 'uploads/mohan lal.jpg', 'Mohan Lal', 'suchitra', '1988-04-28', '', '', '', '', '', ''),
(75, 'Umesh_Yadav_Wedding_3_Small.jpg', 'uploads/Umesh_Yadav_Wedding_3_Small.jpg', 'Umesh Yadav', 'Tanya Wadhwa', '2013-05-29', '', '', '', '', '', ''),
(76, 'harbahjan.jpg', 'uploads/harbahjan.jpg', 'Harbhajan Singh', 'geet basra', '2015-10-29', '', '', '', '', '', ''),
(77, 'yuvi.jpg', 'uploads/yuvi.jpg', 'Yuvraj Singh', 'hazel keech', '2016-11-30', '', '', '', '', '', ''),
(78, 'dhawan.jpg', 'uploads/dhawan.jpg', 'Shikhar Dhawan', 'Ayesha Mukherjee', '2012-10-30', '', '', '', '', '', ''),
(79, 'pawan.jpg', 'uploads/pawan.jpg', 'pawan kalyan', 'Anna Lezhneva', '2013-09-30', '', '', '', '', '', ''),
(80, 'jr ntr.jpg', 'uploads/jr ntr.jpg', 'Junior NTR', 'pranitha', '2011-05-05', '', '', '', '', '', ''),
(81, 'Ravi-Teja-with-his-wife.jpg', 'uploads/Ravi-Teja-with-his-wife.jpg', 'Ravi Teja', 'kalyani teja', '2002-05-26', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
