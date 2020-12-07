-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2020 at 08:47 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allshopc_cpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `allrounder`
--

CREATE TABLE `allrounder` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allrounder`
--

INSERT INTO `allrounder` (`id`, `name`, `points`) VALUES
(1, 'Andre Russell', 390),
(2, 'Mahmudullah Riyad', 0),
(3, 'Thisara Perera', 0),
(4, 'Ravi Bopara', 0),
(5, 'Mohammad Nabi', 0),
(6, 'Cameron Delport', 0),
(7, 'Mehidy Hasan Miraz', 12),
(8, 'Farhad Reza', 0),
(9, 'Afif Hossain', 28),
(10, 'Nasir Hossain', 0),
(11, 'Shuvagata Hom', 0),
(12, 'Ariful Haque', 0),
(13, 'Najibullah Zadran', 8),
(14, 'Dasun Shanaka', 0),
(15, 'Mosaddek Hossain', 0),
(16, 'Jeevan Mendis', 0),
(17, 'Alok Kapali', 0),
(18, 'Muktar Ali', 0),
(19, 'Nahidul Islam', 0),
(20, 'Enamul Haque Jr', 0),
(21, 'Monir Hossain', 0),
(22, 'Delwar Hossain', 0),
(23, 'Lewis Gregory', 0),
(29, 'Nazmul Islam Milon', 0),
(26, 'Robert Frylinck', 36),
(27, 'Rayad Emrit', 0),
(28, 'Ryan Burl', 0),
(32, 'Ziaur Rahman', 0),
(30, 'Shane Watson', 0),
(31, 'David Wise', 0);

-- --------------------------------------------------------

--
-- Table structure for table `batsman`
--

CREATE TABLE `batsman` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `batsman`
--

INSERT INTO `batsman` (`id`, `name`, `points`) VALUES
(1, 'Tamim Iqbal', 0),
(2, 'chris gayle', 0),
(3, 'Imrul Kayes', 0),
(4, 'Dawid Malan', 0),
(5, 'Sabbir Rahman', 0),
(6, 'Junaid Siddique', 0),
(7, 'Mominul Haque', 0),
(28, 'Lendl Simmons', 0),
(9, 'Soumya Sarkar', 0),
(10, 'Naim Sheikh', 0),
(11, 'Nazmul Hossain Shanto', 20),
(12, 'Saif Hassan', 0),
(13, 'Rony Talukdar', 0),
(14, 'Yasir Ali', 0),
(15, 'Fazle Mahmud', 0),
(16, 'Shamsur Rahman', 130),
(17, 'Raqibul Hasan', 0),
(18, 'Nadif Chowdhury', 0),
(19, 'Pinak Ghosh', 0),
(20, 'Hazratullah Zazai', 0),
(21, 'laurie Evans', 0),
(22, 'Rilee Rossouw', 47),
(23, 'Avishka Fernando', 0),
(24, 'Ruhel Miya', 0),
(25, 'Rahmanullah Gurbaz', 0),
(27, 'Evin Lewis', 0),
(32, 'Abdul Mazid', 0),
(31, 'Tom Abell', 0),
(37, 'Hashim Amla', 0),
(33, 'Upul Tharanga', 0),
(34, 'Bhanuka Rajapaksa', 0),
(35, 'Sadman Islam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bowler`
--

CREATE TABLE `bowler` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bowler`
--

INSERT INTO `bowler` (`id`, `name`, `points`) VALUES
(1, 'Mashrafe Bin Mortaza', 0),
(2, 'Rubel Hossain ', 0),
(3, 'Mustafizur Rahman  ', 0),
(4, 'Mujeeb Ur Rahman', 0),
(5, 'Abu Jayed Rahi', 20),
(7, 'Taijul Islam', 0),
(9, 'Arafat Sunny', 0),
(10, 'Taskin Ahmed ', 0),
(11, 'Shafiul Islam ', 21),
(12, 'Al Amin Hossain ', 0),
(13, 'Sanjamul Islam', 0),
(38, 'Oshane Thomas', 0),
(15, 'Abu Hider Rony', 0),
(16, 'Sumon Khan', 0),
(17, 'Nazmul Islam Apu ', 0),
(18, 'Nayeem Hasan', 0),
(19, 'Ebadat Hossain ', 0),
(20, 'Sheldon Cottrell', 0),
(21, 'Mahadi Hasan ', 0),
(22, 'Aliss Al Islam', 0),
(23, 'Shohag Gazi ', 0),
(24, 'Aminul Islam Biplob  ', 0),
(25, 'Krishmar Santokie', 0),
(14, 'Minhazul Abedin Afridi  ', 0),
(27, 'Rishad Ahmed ', 0),
(28, 'Sanjit Shaha', 0),
(29, 'Tanvir Islam ', 0),
(30, 'Shahidul Islam  ', 40),
(31, 'Hasan Mahmud ', 0),
(32, 'Nasum Ahmed ', 0),
(33, 'Jubair Hossain Likhon', 0),
(34, 'Naveen-ul-Haq', 0),
(35, 'Monir Hossain khan ', 0),
(36, 'Sherfane Rutherford', 0),
(37, 'Kesrick Williams ', 0),
(39, 'Mukidul Islam Mugdo', 0),
(40, 'Robiul Hasan Rakib', 0),
(41, 'Liam Plunkett', 0),
(42, 'Salahuddin  sakil', 0),
(43, 'Mehedi Hasan Rana', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `team_name` text NOT NULL,
  `points` int(11) NOT NULL,
  `bat1` text NOT NULL,
  `bat2` text NOT NULL,
  `bat3` text NOT NULL,
  `bat4` text NOT NULL,
  `wk` text NOT NULL,
  `all_rounder1` text NOT NULL,
  `all_rounder2` text NOT NULL,
  `all_rounder3` text NOT NULL,
  `bol1` text NOT NULL,
  `bol2` text NOT NULL,
  `bol3` text NOT NULL,
  `captain` text NOT NULL,
  `pup` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `team_name`, `points`, `bat1`, `bat2`, `bat3`, `bat4`, `wk`, `all_rounder1`, `all_rounder2`, `all_rounder3`, `bol1`, `bol2`, `bol3`, `captain`, `pup`) VALUES
(1, 'Abdul Motin Mohammad Atikullah  (N-13)', 'abdulmotin00020@gmail.com', 'Atikullah002', 'Deadly Nightmares ', 8504, 'Tamim Iqbal', 'Chris Gayle ', 'Nazmul Hossain Shanto', 'Rilee Rossouw', 'Mushfiqur Rahim ', 'Andre Russell ', 'Thisara Perera', 'Mahmudullah Riyad ', 'Rubel Hossain ', 'Mehedi Hasan Rana ', 'Sumon Khan', 'Mahmudullah Riyad  ', 1),
(2, 'Md Nobin(N-9)', 'Snnobinn@gmail.com', '2000769769', 'Nobin 11', 10969, 'Tamim Iqbal', 'Rilee Rossouw', 'Chris Gayle', 'Nazmul Hossain Shanto  ', 'Mushfiqur Rahim ', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain ', 'Mustafizur Rahman   ', 'Shafiul Islam', 'Shahidul Islam', 'Rilee Rossouw', 1),
(3, 'Abid Shuvo (as - 9)', 'abidshuvo9@gmail.com', '1012mahs', 'Master Cricket XI', 8013, 'Tamim Iqbal', 'Hazratullah Zazai', 'Naim Sheikh', 'Nazmul Hossain Shanto', 'Liton Das', 'Andre Russell', 'Mohammad Nabi', 'Cameron Delport', 'Minhazul Abedin Afridi', 'Taskin Ahmed', 'Abu Jayed Rahi', 'Andre Russell', 1),
(4, 'Mehrab Elahi (as 1)', 'mehrabelahi011@gmail.com', 'crickotine', 'Ravishing Willows ', 8995, 'Tamim Iqbal', 'Dawid Malan', 'RILEE ROSSOUW', 'Soumya Sarkar', 'Mushfiqur Rahim ', 'Afif Hossain', 'ANDRE RUSSELL', 'Mehidy Hasan Miraz', 'Rubel Hossain', 'Ebadat Hossain', 'MEHEDI HASAN RANA', 'Mushfiqur Rahim ', 1),
(5, 'à¦¸à¦¾à¦¹à¦¾à¦¬ à¦‰à¦¦à§à¦¦à¦¿à¦¨ à¦®à¦¾à¦¹à¦¿à¦¨  N22', '01850615496', 'sahabuddin', 'Shakib Al Hasan XI    ', 9470, 'Tamim iqbal', 'Chris gayle ', 'Soumya Sarkar  ', 'Sabbir Rahman ', 'Mushfiqur Rahim  ', 'Afif Hossain ', 'Mehidy hasan miraz', 'Andre Russell  ', 'Taskin Ahmed ', 'Liam Plunkett  ', 'Aminul Islam Biplob   ', 'Tamim iqbal', 1),
(6, 'Srabon Das N17', 'mithundas271991@gmail.com', 'cricketkhor', 'à¦¸à¦¿à¦²à§‡à¦Ÿ à¦°à§Ÿà§‡à¦²à¦¸', 8920, 'Nazmul Hossain Shanto', 'Soumya Sarkar', 'Rilee Rossouw', 'Chris Gayle', 'Liton Das', 'Andre Russell', 'Ravi Bopara', 'Afif Hossain', 'Aminul Islam Biplob', 'Mehedi Hasan Rana', 'Mahadi Hasan', 'Chris Gayle', 1),
(7, 'Sudipta Sarkar N24', 'sudiptasarkarsrty@gmail.com', 'shaanshreya', 'STRIKERS', 11246, 'Tamim Iqbal', 'Imrul Kayes', 'Rilee Rossouw', 'Nazmul Hossain Shanto ', 'Mushfiqur Rahim', 'Andre Russell', 'Ravi Bopara', 'Afif Hossain', 'Mahadi Hasan', 'Shafiul Islam', 'Shahidul Islam', 'Andre Russell', 1),
(9, 'Mahmudun Nabi Rana (as-10)', 'mahmudrana01826@gmail.com', 'Farhanat', 'à¦Ÿà¦¿à¦® à¦…à¦¦à¦®à§à¦¯', 9879, 'Tamim Iqbal ', 'Soumya Sarkar', 'Rilee Rossouw', 'Chris Gayle', 'Mushfiqur Rahim ', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain', 'Shahidul Islam', 'Taskin Ahmed ', 'Minhazul Abedin Afridi', 'Andre Russell', 1),
(10, 'Tafimul Kabir Mubin (N3)', 'tafimulkabir@gmail.com', 'mubin915', 'Mubin Thunder ', 11970, 'Tamim Iqbal ', 'Nazmul Hossain Shanto ', 'Rilee Rossouw', 'chris gayle', 'Liton Das ', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain', 'Mustafizur Rahman ', 'Shafiul Islam ', 'Mehedi Hasan Rana', 'Rilee Rossouw', 1),
(11, 'Fardin Islam Sagor (n31)', 'fardinislam2317@gmail.com ', 'sagortalukder', 'Win or Win', 9936, 'Nazmul Hossain Shanto', 'Rilee Rossouw', 'Imrul Kayes', 'Chris Gayle', 'Mushfiqur Rahim', 'Andre Russell', 'Robbie Frylinck', 'Afif Hossain', 'Shahidul Islam', 'Mustafizur Rahman', 'Shafiul Islam', 'Rilee Rossouw', 1),
(12, 'Maria Afrin as-20', 'mafrin756@gmail.com', 'mashrafibinmortaza', 'MM2', 7258, 'Tamim Iqbal', 'Evin Lewis', 'Naim sheikh', 'Sabbir Rahman', 'Liton Das', 'Andre Russell', 'Mahmudullah Riyad', 'Afif hossain', 'Mashrafe Bin Mortaza', 'Mahadi hasan', 'Mustafizur Rahman', 'Mashrafe Bin Mortaza', 1),
(13, 'Hasanul Banna AS-13', 'banna.pust@gmail.com', 'banna2020', 'à¦²à¦¿à¦œà§‡à¦¨à§à¦¡ à¦•à¦¾à¦²à§‡à¦•à¦¶à¦¨  ', 9521, 'Shamsur Rahman ', 'Naim Sheikh', 'Soumya Sarkar', 'Rilee Rossouw', 'Liton Das', 'Andre Russell', 'Afif Hossain ', 'Mehidy Hasan Miraj ', 'Shafiul Islam', 'Al Amin Hossain', 'Mehedi Rana', 'Andre Russell', 1),
(14, 'Shahriar Amir (N21)', 'shahariar2569@gmail.com', 'balerBPL', 'PopCorn XI', 8352, 'Tamim Iqbal', 'Nazmul Hossain Shanto', 'Laurie Evans ', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Mohammad Nabi', 'Andre Russell ', 'Mosaddek Hossain', 'Mashrafe Bin Mortaza', 'Taijul Islam', 'Sumon Khan', 'Andre Russell ', 1),
(15, 'Niloy Chowdhury N8', 'niloychy8627@gmail.com', 'aziafnilfai66', 'Pirates of Chottogram', 8178, 'Tamim Iqbal ', 'Soumya Sarkar', 'Rilee Rossouw', 'Lendl Simmons', 'Liton Das', 'Andre Russell', 'Mohammad Nabi ', 'Afif Hossain', 'Abu jayed Rahi', 'Abu Hider Rony', 'Mehedi Hasan Rana', 'Rilee Rossouw', 1),
(16, 'Kazi Sakib (N 11)', 'kazisakib00@gmail.com', 'Sakib@123', 'Team of Galaxy 11', 9537, 'Nazmul Hossain Shanto', 'Imrul Kayes', 'Chris Gayle', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Mahmudullah Riyad', 'Andre Russell ', 'Robert Frylinck', 'Shahidul Islam', 'Shafiul Islam', 'Mehedi Hasan Rana', 'Rilee Rossouw', 1),
(17, 'à¦¶à§‡à¦· à¦šà¦¿à¦°à¦•à§à¦Ÿ AS-12', 'mahbubeftu@gmail.com', 'mahbubhasansiblu', 'mhs xi', 10102, 'nazmul hossain shanto', 'lendl simmons', 'Rilee rossouw', 'imrul kayes', 'Mushfiqur rahim', 'Andre russell ', 'robert frylinck', 'Afif hossain', 'Rubel hossain', 'Mustafizur rahman', 'Mehedi Hasan rana', 'afif hossain', 1),
(18, 'Md Rafiqul Islam(as-2)', 'Mdrofikulislam335@gmail.Com', '10352535', 'King Eleven', 10274, 'Nazmul Hossain Shanto   ', 'Saif Hassan', 'Chris Gayle ', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Andre Russell', 'Robert frylinck', 'Afif Hossain', 'Mahadi hasan', 'Mustafizur Rahman', 'Mehedi Hasan Rana', 'Rilee Rossouw', 1),
(19, 'Nur Mohammad N-26', 'nurmohammad1326@gmail.com', 'nahid@133075', 'Brahmaputra Express  ', 10827, 'Tamim Iqbal ', 'Rilee Rossouw', 'Nazmul Hossain Shanto', 'Shamsur Rahman', 'Mushfiqur Rahim ', 'Andre Russell ', 'Ravi Bopara', 'Afif Hossain ', 'Mahadi Hasan', 'Mehedi Hasan Rana ', 'Shahidul Islam', 'Mushfiqur Rahim ', 1),
(20, 'muhammad miraj hossain(as-5)', 'miraj3298@gmail.com', '01704001947', 'cricdesh', 11175, 'Tamim Iqbal', 'Imrul kayes', 'chris gayle', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Robert frylinck', 'Andre Russell', 'Afif Hossain', 'Mehedi hasan rana', 'mahadi hasan', 'Shafiul Islam', 'Andre Russell', 1),
(21, 'Abdulla Al kafe AS-14', 'www.abdullakafe77@gmail.com', 'kafe@123', 'AK TEAM', 11203, 'Nazmul Hossain Shanto', 'Soumya Sarkar  ', 'Rilee rossouw', 'Chris Gayle', 'Mushfiqur Rahim  ', 'Andre Russell ', 'Afif Hossain ', 'Mehidy hasan Miraz', 'Mustafizur Rahman  ', 'Mehedi Hasan Rana', 'Mahadi hasan', 'Andre Russell ', 1),
(22, 'Mohammad Saiful islam(As 18)', 'shukhpakhi96@gmail.com', '12345678', 'à¦¬à§‹à¦¬à¦¾à¦•à¦¾à¦²à¦¾ à¦•à§à¦¦à§à¦¦à§à¦¸ à¦à¦•à¦¾à¦¡à§‡à¦®à¦¿', 10771, 'chris gayle', 'Rilee Rossouw', 'Tamim Iqbal', 'Nazmul Hossain Shanto', 'Mushfiqur Rahim', 'Andre Russell', 'Afif Hossain ', 'Mehidy hasan Miraz     ', 'Mustafizur Rahman  ', 'Mahadi Hasan', 'Shafiul Islam  ', 'Rilee Rossouw', 1),
(23, 'Marco asensio N-29', 'Shanto11885@gmail.com', 'shanto1234', 'Death express  ', 9466, 'Tamim Iqbal ', 'Soumya sarkar', 'Nazmul Hossain Shanto  ', 'Rilee rossouw', 'Liton das', 'Andre russell', 'Mohammad nabi  ', 'Dasun Shanaka ', 'Mustafizur Rahman  ', 'Abu jayed rahi', 'Abu hider rony', 'Andre Russell ', 1),
(24, 'Blooming Ashek AS-15', 'asheknoyon468@gmail.com', 'noyon468', 'Ashek Challengers', 11326, 'Tamim Iqbal', 'Chris Gayle', 'Imrul Kayes', 'Rilee Rossouw', 'Liton Das', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain', 'Mahadi Hasan', 'Shahidul Islam', 'Mehedi Hasan Rana', 'Andre Russell', 1),
(26, 'Marjan Ahmad (N57)', 'marjanahmad00@gmail.com', 'marjansadia', 'à¦¬à¦¿à§Ÿà¦¾à¦¨à§€à¦¬à¦¾à¦œà¦¾à¦° à¦à¦•à§à¦¸à¦ªà§à¦°à§‡à¦¸ ', 10386, 'Tamim Iqbal', 'Naim Sheikh', 'Rilee Rossouw', 'Imrul Kayes', 'Mushfiqur Rahim', 'Andre Russell', 'Shane Watson', 'Mahmudullah Riyad', 'Mujeeb ur Rahman', 'Mehedi Hasan Rana', 'Al Amin Hossain', 'Andre Russell', 1),
(28, 'Shams Ul Raju (as-6)', 'raju4521111@gmail.com', '01834521111', 'Crickbangla', 9631, 'imrul kayes', 'Dawid malan', 'naim sheikh', 'rilee rossouw', 'mushfiqur rahim', 'andre russell', 'mosaddek hossain', 'alok kapali', 'shafiul islam', 'mehedi hasan rana', 'mujeeb ur rahman', 'andre russell', 1),
(29, 'MH Sun Sarkar AS-4', 'sunbabu262@gmail.com', '26774716', 'Jamalpur Express  ', 11010, 'Rilee Rossouw', 'Tamim Iqbal ', 'Nazmul Hossain Shanto', 'Dawid Malan', 'Mushfiqur Rahim  ', 'Andre Russell', 'Mehidy Hasan Miraz', 'Afif Hossain ', 'Shahidul Islam   ', 'Mahadi hasan ', 'Al Amin Hossain  ', 'Rilee Rossouw', 1),
(30, 'Tanvir Ahmed AS-19', 'tanvirahmadabir@gmail.com', 'faysalnitu', 'Sapphire king', 6515, 'Tamim Iqbal', 'Hazratullah Zazai', 'Rilee Rossouw', 'Soumya Sarkar', 'Mohammad Shezad', 'Afif Hosssin', 'Andre Russell', 'Mahmudullah Riyad ', 'Al Amin Hossain', 'Aminul Islam Biplob', 'Taskin Ahmed', 'Tamim Iqbal', 1),
(31, 'Mahfuz Khan (N6)', 'humaunkhan125@gmail.com', 'khanhumaun', 'Khan New Star Club', 7057, 'Tamim Iqbal', 'Rony Talukdar', 'Sabbir Rahman', 'Lendil Simmons', 'Andre Fletcher', 'Mahmudullah Riyad', 'Andre Russell', 'Lewis Gregory', 'Abu Jayed Rahi', 'Taijul Islam', 'Shafiul Islam', 'Andre Russell', 1),
(32, 'Rahad Hasan Mim( N33)', 'mdrahad740@gmail.com', 'princerahad', 'Krishtopur Cricket Club ', 8611, 'Tamim Iqbal', 'Imrul Kayes', 'Rilee Rossouw ', 'Chris gayle', 'Mushfiqur Rahim', 'Andre Russell', 'Mahmudullah Riyad', 'Ravi Bopara', 'Mehedi Hasan Rana', 'Taskin Ahmed', 'Abu Hider Rony', 'Andre Russell', 1),
(33, 'JF Ovy (N37)', 'amibabu189@gmail.com', 'ovyvai@@', 'Sonargaon Royals ', 10911, 'Nazmul Hossain Shanto', 'Chris Gayle', 'Rilee Rossouw', 'Imrul Kayes', 'Liton Das', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain', 'Mehedi Hasan Rana', 'Shafiul Islam', 'Shahidul Islam', 'Imrul Kayes', 1),
(34, 'Shoeab ahmed (As-8)', 'ahmedshoeab41@gmail.com', 'Shoeab10', 'Shoeab thunder', 8191, 'Tamim Ipbal', 'Mominul Haque', 'Junaid Siddique', 'Shamsur Rahman', 'Mushfiqur Rahim ', 'Afif Hossain', 'Andre Russell', 'Mehidy Hasan Miraz ', 'Mustafizur Rahman  ', 'Nasum Ahmed', 'Rubel Hossain', 'Mehidy Hasan Miraz', 1),
(35, 'Sadman khan Fahim   (N4)', 'mdfahimkhan423@gmail.com', '01625414196', 'Mymensingh knight Riders   ', 10430, 'Tamim Iqbal  ', 'Imrul Kayes  ', 'Nazmul Hossain Shanto   ', 'Rilee Rossouw', 'Liton Das ', 'Andre Russell ', 'Mehidy hasan miraz', 'Afif Hossain ', 'Abu Jayed Rahi ', 'Shafiul Islam  ', 'Shahidul Islam ', 'Afif Hossain ', 1),
(36, 'Fahib Ahmik Rana (N12)', 'ranars012345678@gmail.com', 'RANARSRS', 'MANIKGANJ CRICKET XI   ', 11683, 'Nazmul Hossain Shanto ', 'Chris Gayle', 'Imrul Kayes ', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Afif Hossain', 'Thisara Perera', 'Andre Russell', 'Mahadi Hasan', 'Shafiul Islam', 'Mustafizur Rahman  ', 'Rilee Rossouw', 1),
(37, 'Hamim Shizda(as3)', 'hamim.shizda@gmail.com', 'hamim291', 'à¦¦à§à¦°à¦¨à§à¦¤ à¦¦à§à¦°à¦¬à¦¾à¦°', 10528, 'Nazmul Hossain Shanto   ', 'Rilee Rossouw', 'Imrul Kayes', 'Chris Gayle  ', 'Mushfiqur Rahim  ', 'Andre Russell ', 'Afif Hossain ', 'Robert frylinck', 'Mustafizur Rahman  ', 'Mehedi Hasan Rana', 'Mahadi Hasan', 'Andre Russell', 1),
(38, 'Jahid Hasan N-1', 'jahidbr123@gmail.com', 'bristy@123', 'Super 11', 9226, 'Tamim Iqbal', 'Sabbir Rahman', 'Hazratullah Zazai', 'Naim Sheikh ', 'Mushfiqur Rahim ', 'Andre Russell', 'Afif Hossain ', 'Mohammad Nabi ', 'Taskin Ahmed', 'Mustafizur Rahman  ', 'Mujeeb Ur Rahman', 'Tamim Iqbal', 1),
(39, 'Sojol munda sojol AS-17', 'Sojolmunda8@gmail.com', '12112383', 'Sopno kuri', 9700, 'Liton Das', 'Rilee Rossouw ', 'laurie Evans ', 'Tamim Iqbal ', 'Mushfiqur Rahim  ', 'Andre Russell ', 'Afif Hossain ', 'Mahmudullah Riyad ', 'Mujeeb Ur Rahman ', 'Mehedi Hasan Rana ', 'Rubel Hossain ', 'Mahmudullah Riyad', 1),
(40, 'Noyon Ahmik Shanto (N18)', 'noyonahmik@gmail.com', 'janealam', 'Manikganj Sixers ', 11285, 'Tamim Iqbal', 'Chris Gayle', 'Imrul Kayes', 'Rilee Rossouw', 'Liton Das', 'Afif Hossain', 'Mehidy Hasan Miraz', 'Andre Russell', 'Abu Hider Rony', 'Shafiul Islam', 'Mustafizur Rahman  ', 'Rilee Rossouw', 1),
(41, 'Md ShohelTanvir (N10)  ', 'Shoheltanvir0501179531@gmail.com', 'rs%%ns1234', 'à¦¨à¦°à¦¸à¦¿à¦‚à¦¦à§€à¦°à¦¾à¦‡à¦«à§‡à¦²à¦¸à§à¦à¦•à¦¾à¦¦à¦¶   ', 8197, 'Imrul Kayes', 'Tamim Iqbal', 'Nazmul Hossain Shanto', 'Naim Sheikh', 'Liton Das', 'Mehidy Hasan Miraz', 'Afif Hossain', 'Robert Frylinck ', 'Mujeeb Ur Rahman ', 'Mahadi Hasan ', 'Aminul Islam Biplob ', 'Tamim Iqbal ', 1),
(42, 'à¦†à¦®à¦¿à¦¨à§à¦² à¦†à¦®à¦¿à¦¨à§à¦² (N36)', 'alaminalamin8342 @gmail', '78203730', 'à¦«à¦¾à¦‡à¦Ÿà¦¾à¦° à§§à§§ ', 8784, 'Chris Gayle', 'Tamim Iqbal', 'Rilee Rossouw', 'Nazmul Hossain Shanto', 'Liton Das ', 'Andre Russell ', 'Mehidy Hasan Miraz ', 'Afif Hossain ', 'Abu Jayed Rahi ', 'Shafiul Islam', 'Mehedi Hasan rana  ', 'Liton Das', 1),
(43, 'Mugdha Saha (as-11)', 'tigermugdha@gmail.com', 'bangla118221', 'à¦ªà¦¥à¦¶à¦¿à¦¶à§ à¦à¦•à¦¾à¦¦à¦¶', 8735, 'Tamim Iqbal', 'Imrul Kayes', 'Soumya Sarkar', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Andre Russell', 'Afif Hossain', 'Mehidy Hasan Miraz', 'Mahadi Hasan', 'Rubel Hossain', 'Mehedi Hasan Rana', 'Mushfiqur Rahim', 1),
(44, 'Alamgir Hossain Babu N-2', 'alamgirhossainar311296@gmail.com ', '58417366', 'Naogaon Tigers', 9912, 'Tamim Iqbal', 'Soumya Sarkar', 'Imrul Kayes  ', 'Rilee Rossouw', 'Mushfiqur Rahim', 'Andre Russell', 'Mahmudullah Riyad', 'Ravi bopara', 'Mujeeb Ur Rahman', 'Al Amin Hossain', 'Mehedi Hasan rana  ', 'Andre Russell', 1),
(45, 'Asibul Islam Asif (N16)', 'asibulislamasib01@gmail.com', 'mostasif', 'Western warriors   ', 8673, 'Tamim Iqbal', 'Imrul Kayes', 'Rilee Rossouw', 'Lendl Simmons', 'Musfiqur Rahim ', 'Andre Russell', 'Mehidy Hasan Miraz', 'Afif Hossain', 'Rubel Hossain', 'Shahidul Islam', 'Mahadi Hasan', 'Rilee Rossouw', 1),
(46, 'Mohammad Tushar Hossain(N15)', 'tusharh918@gmail.com', 'borntoroar', 'Born To Roar', 10201, 'Tamim Iqbal', 'Rilee Rossouw', 'Chris Gayle', 'Imrul Kayes', 'Mushfiqur Rahim', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain', 'Rubel Hossain', 'Shafiul Islam', 'Mehedi Hasan Rana', 'Rilee Rossouw', 1),
(47, 'Shoaib Akther (as-16)', 'akthershoaib80@gmail.com', 'ilovebangladesh', 'Duronto Tigers ', 9230, 'Tamim Iqbal ', 'Rilee Rossouw', 'Naim Sheikh', 'Sabbir Rahman ', 'Liton Das', 'Mehidy Hasan Miraz', 'Andre Russell', 'Afif Hossain', 'Mashrafe Bin Mortaza', 'Aminul Islam Biplob ', 'Mahadi Hasan', 'Andre Russell', 1),
(48, 'Porag Adnan (N34) ', 'poragadnan9317@gmail.com', 'porag@420', 'Kushtia Titans', 10778, 'Tamim Iqbal', 'Rilee Rossouw', 'chris gayle', 'Nazmul Hossain Shanto   ', 'Mushfiqur Rahim', 'Afif Hossain', 'Andre Russell', 'Robert Frylinck', 'Shafiul Islam ', 'Shahidul Islam', 'Al Amin Hossain ', 'Rilee Rossouw', 1),
(50, 'Anamul Haque Sohel (N32)', 'anamulhaquesohel0201@gmail.com', 'xyzxyz', 'NJR10 Eleven', 9395, 'Tamim Iqbal', 'Lendl Simmons', 'Naim Sheikh ', 'Rilee Rossouw', 'Chadwik Walton', 'Mehidy Hasan Miraz', 'Andre Russell', 'Afif Hossain', 'Rubel Hossain', 'Shafiul Islam', 'Mahadi Hasan', 'Afif Hossain', 1),
(51, 'Mehedi Hasan rumman N-35', 'mehedi437178@gmail.com', 'backbencher', 'Back bencher', 9938, 'Tamim Iqbal  ', 'Imrul kayes', 'Rilee Rossouw', 'Chris Gayle  ', 'Mushfiqur Rahim  ', 'Andre Russell', 'Ravi Bopara', 'Afif Hossain', 'Rubel Hossain ', 'Al Amin Hossain', 'Shafiul Islam', 'Chris Gayle  ', 1),
(52, 'Chanchal Islam (N 25)', 'arvinchanchal225@gmail.com', '56377812', 'Chanchal kings', 9970, 'Tamim Iqbal', 'Rilee Rossouw', 'Nazmul Hossain Shanto', 'Chirs Gayle', 'Mushfiqur Rahim', 'Andre Russell', 'Robert Frylinck', 'Afif Hossain', 'Shahidul Islam', 'Al Amin Hossain ', 'Shafiul Islam', 'Mushfiqur Rahim', 1),
(54, 'Nazim Khandaker Emon(N14) ', 'emon78669@gmail.com', 'emon9942', 'Team Bangla', 11062, 'Tamim Iqbal', 'Imrul Kayes', 'Rilee Rossouw', 'Nazmul Hossain Shanto', 'Mushfiqur Rahim', 'Andre Russell', 'Mahmudullah Riyad', 'Afif Hossain ', 'Shahidul Islam', 'Mahadi Hasan', 'Mehedi Hasan Rana', 'Mushfiqur Rahim', 1),
(55, 'Omar Faruk Sagor N-7', 'shagorf47@gmail.com', '12345678', 'Sonali Cricket Kids', 8789, 'Rilee Rossouw', 'Tamim Iqbal', 'Imrul Kayes', 'Soumya Sarkar', 'Mushfiqur Rahim', 'Andre Russell', 'Mahmudullah Riyad', 'Thisara Perera', 'Hasan Mahmud', 'Mehedi Hasan Rana', 'Shafiul Islam', 'Rilee Rossouw', 1),
(56, 'Rihad khan N-43', 'rihadkhan134@gamil.com', '01846412927', 'Rihad-N43 ', 9592, 'Lendl Simmons', 'Imrul Kayes ', 'Soumya Sarkar  ', 'Tamim Iqbal  ', 'Mushfiqur Rahim  ', 'Andre Russell ', 'Mohammad Nabi ', 'Shane Watson  ', 'Mustafizur Rahman  ', 'Al Amin Hossain', 'Mehedi Hasan Rana   ', 'Andre Russell', 1),
(57, 'Koushik Deb (N38)', 'kdkoushik692@gmail.com', 'lovefordina', 'Black Eye', 9158, 'Tamim Iqbal ', 'Rilee Rossouw', 'Yasir Ali', 'Soumya Sarkar', 'Mushfiqur Rahim ', 'Andre Russell', 'Thisara Perera', 'Mohammad Nabi ', 'Abu Jayed Rahi', 'Taskin Ahmed ', 'Shafiul Islam ', 'Andre Russell', 1),
(58, 'Mohammad Masud pervej AS-17', 'Masudperbej011@gmail.com', '***###143', 'à¦¸à§à¦¬à¦¹à¦¾à¦¨à¦¾à¦²à§à¦²à¦¾à¦¹ ', 10036, 'Nazmul Hossain Shanto   ', 'Imrul kayes', 'Chris gayle ', 'Rilee Rossouw', 'Mushfiqur Rahim  ', 'Andre Russell', 'Mehidy Hasan Miraz  ', 'Afif Hossain ', 'Mustafizur Rahman ', 'Al Amin Hossain ', 'Shafiul Islam', 'Rilee Rossouw', 1),
(59, 'Faisal Mahmud(N28)', 'faisalmahmud287160@gmail.com', '#yycurr8', 'FabXI', 11234, 'Tamim Iqbal', 'Imrul Kayes', 'Rilee Rossouw', 'Chris Gayle', 'Mushfiqur Rahim', 'Andre Russell ', 'Robert Frylinck', 'Afif Hossain', 'Mahadi Hasan', 'Rubel Hossain', 'Shafiul Islam', 'Andre Russell', 1),
(60, 'Akm Kawsar(N19)', 'crickotine@gmail.com', 'Crickotine@11???/', 'Crickotine Addicted', 8234, 'Tamim Iqbal', 'Lendl Simmons ', 'Rilee Rossouw', 'Soumya Sarkar', 'Liton das', 'Afif Hossain ', 'Mohammad Nabi', 'Mosaddek Hossain ', 'Mahadi Hasan', 'Al amin Hossain ', 'Mujeeb Ur Rahman', 'Rilee Rossouw', 1),
(61, 'Akash Paul(N39)', 'akashpaul.aiub.edu@gmail.com', 'CHANDRA 600016911', 'THE EXTREME DEVIL', 10735, 'Tamim Iqbal', 'Rilee Rossouw', 'Soumya Sarkar', 'Naim Sheikh', 'Mushfiqur Rahim', 'Andre Russell', 'Afif Hossain', 'Mohammad Nabi', 'Mujeeb Ur Rahman', 'Shafiul Islam', 'Taskin Ahmed', 'Andre Russell', 1),
(62, 'Selim Mustafa N-41', 'selim.mustafa@gmail.com', 'fantasy27', 'Aniket Prantor', 10270, 'Tamim iqbal', 'chris gayle', 'Lendl Simmons', 'Rilee rossouw', 'Mushfiqur rahim', 'Andre russell', 'Afif Hossain', 'mahmudullah riyad', 'Rubel Hossain', 'Abu jayed rahi', 'Shahidul Islam', 'Rilee Rossouw', 1),
(63, 'Saiful Sohel (N27)', 'saifulislam.unimed@gmail.com', 'saiful321', 'SaifulS CTG', 9296, 'Tamim Iqbal', 'Rilee Rossouw', 'Imrul Kayes', 'Naim Sheikh', 'Mushfiqur Rahim ', 'Andre Russell', 'Afif Hossain ', 'Mehidy Hasan Miraz ', 'Mahadi Hasan ', 'Mehedi Hasan Rana', 'Al Amin Hossain ', 'Andre Russell', 1),
(64, 'Mahbub Elahi N-40', 'Mahbubdaclassic@gmail.com', '01722568453', 'Pirates of companigonj', 10512, 'Tamim Iqbal', 'Nazmul Hossain Shanto', 'Imrul Kayes', 'Rilee Rossouw', 'Liton das', 'Andre Russell', 'Robi Frylink', 'Afif Hossain ', 'Mehedi Hasan Rana ', 'Mahadi Hasan', 'Shahidul Islam', 'Rilee Rossouw', 1),
(65, 'Musa Aman N44', 'hmriasatali8350@gmail.com', 'masumaali2000', 'Rupsa Warriors', 9364, 'Rilee Rossouw', 'Imrul Kayes  ', 'Tamim Iqbal  ', 'Nazmul Hossain Shanto', 'Mushfiqur Rahim', 'Andre Russell ', 'Afif Hossain', 'Robert Frylinck', 'Shafiul Islam', 'Mahadi Hasan', 'Hasan Mahmud ', 'Mushfiqur Rahim', 1),
(66, 'Md Rayhan Rashid Rahi N42', 'Mohammadrayhan.rr@gmail.com', 'rahi0987654321', 'Silent Smashers', 8526, 'Tamim Iqbal', 'Rilee Rossouw', 'Soumya Sarkar', 'Naim Sheikh', 'Andre Fletcher', 'Andre Russell', 'Mahmudullah Riyad', 'Mohammad Nabi', 'Ebadat Hossain', 'Aminul Islam Biplob', 'Minhazul Abedin Afridi', 'Andre Russell', 1),
(67, 'Firoz Mahmud N-30', 'firozmahmud720@gmail.com', 'Gunsnroses', 'Eleven Bullets ', 9616, 'Imrul Kayes', 'Tamim Iqbal ', 'Rilee Rossouw', 'chris gayle', 'Liton Das', 'Robert Frylinck', 'Andre Russell', 'Afif Hossain', 'Mehedi Hasan Rana', 'Mahadi Hasan', 'Al Amin Hossain', 'chris gayle', 1),
(70, 'Mohammad Ridwanur Rashid N23', 'mohridwaan7@gmail.com', 'riDDIP@NNita', 'Ridwan\'s X11', 9427, 'Tamim Iqbal', 'Imrul Kayes', 'Rilee Rossouw', 'Chris Gayle', 'Anamul hoque Bijoy', 'Afif Hossain', 'Mehidy Hasan Miraz', 'Ravi Bopara', 'Liam Plunkett', 'Shafiul Islam', 'Al Amin Hossain', 'Chris Gayle ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `w_keeper`
--

CREATE TABLE `w_keeper` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `w_keeper`
--

INSERT INTO `w_keeper` (`id`, `name`, `points`) VALUES
(1, 'Liton Das', 45),
(2, 'Shai Hope', 0),
(3, 'Mushfiqur Rahim', 35),
(4, 'kusal Perera', 0),
(5, 'Anamul Hoque Bijoy', 0),
(6, 'Jakir Hasan', 0),
(7, 'Chadwik Walton', 0),
(8, 'Andre Fletcher', 0),
(9, 'Nurul Islam Sohan', 0),
(10, 'Irfan Shukkur', 138),
(11, 'Mahidul Ankon', 0),
(12, 'Fardin Hasan', 0),
(13, 'Jaker Ali Anik', 0),
(14, 'Mohammad Mithun  ', 0),
(15, 'Mohammad Shezad', 0),
(16, 'Jahurul Islam', 0),
(17, 'Shafiqullah Safaq ', 0),
(18, 'Johnson Charles', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zz`
--

CREATE TABLE `zz` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zz`
--

INSERT INTO `zz` (`id`, `name`) VALUES
(1, 'Andre Russell'),
(2, 'Thisara Perera'),
(3, 'Ravi Bopara'),
(4, 'Mohammad Nabi'),
(5, 'Cameron Delport'),
(6, 'Najibullah Zadran'),
(7, 'Dasun Shanaka'),
(8, 'Jeevan Mendis'),
(9, 'Lewis Gregory'),
(10, 'Robert Frylinck'),
(11, 'Rayad Emrit'),
(12, 'Ryan Burl'),
(13, 'Shane Watson'),
(14, 'David Wise'),
(15, 'chris gayle'),
(16, 'Dawid Malan'),
(17, 'Lendl Simmons'),
(18, 'Hazratullah Zazai'),
(19, 'laurie Evans'),
(20, 'Rilee Rossouw'),
(21, 'Avishka Fernando'),
(22, 'Rahmanullah Gurbaz'),
(23, 'Evin Lewis'),
(24, 'Tom Abell'),
(25, 'Hashim Amla'),
(26, 'Upul Tharanga'),
(27, 'Bhanuka Rajapaksa'),
(28, 'Mujeeb Ur Rahman'),
(29, 'Kesrick Williams'),
(30, 'Oshane Thomas'),
(31, 'Sheldon Cottrell'),
(32, 'Shai Hope'),
(33, 'kusal Perera'),
(34, 'Chadwik Walton'),
(35, 'Johnson Charles'),
(36, 'Mohammad Shezad'),
(37, 'Liam Plunkett'),
(38, 'Sherfane Rutherford'),
(39, 'Naveen-ul-Haq'),
(40, 'Shafiqullah Safaq'),
(41, 'Andre Fletcher'),
(42, 'Krishmar Santokie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allrounder`
--
ALTER TABLE `allrounder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batsman`
--
ALTER TABLE `batsman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bowler`
--
ALTER TABLE `bowler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_keeper`
--
ALTER TABLE `w_keeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zz`
--
ALTER TABLE `zz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allrounder`
--
ALTER TABLE `allrounder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `batsman`
--
ALTER TABLE `batsman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `bowler`
--
ALTER TABLE `bowler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `w_keeper`
--
ALTER TABLE `w_keeper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `zz`
--
ALTER TABLE `zz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
