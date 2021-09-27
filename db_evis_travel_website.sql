-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2016 at 11:21 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evis_travel_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_level` tinyint(1) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT '0',
  `online_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_date_time`, `admin_level`, `admin_status`, `online_status`) VALUES
(1, 'Evis Admin', 'admin@evis.com', '111111', '2016-04-14 13:16:03', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(7) NOT NULL,
  `admin_id` int(2) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog` text NOT NULL,
  `blog_image` varchar(200) NOT NULL,
  `blog_status` tinyint(1) NOT NULL DEFAULT '0',
  `blog_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `admin_id`, `blog_title`, `blog`, `blog_image`, `blog_status`, `blog_time`) VALUES
(1, 1, 'History of Dhaka', '<p>\n Dhaka, formerly spelled as Dacca in English, is the capital and one of the oldest cities of Bangladesh. The history of Dhaka begins with the existence of urbanised settlements in the area that is now Dhaka dating from the 7th century CE. The city area was ruled by the Buddhist kingdom of Kamarupa before passing to the control of the Sena dynasty in the 9th century CE.[2] After the Sena dynasty, Dhaka was successively ruled by the Turkic and Afghan governors descending from the Delhi Sultanate before the arrival of the Mughals in 1608. After Mughals, British ruled the region for over 150 years until the independence of India. In 1947, Dhaka became the capital of the East Bengal province under the dominion of Pakistan. After the independence of Bangladesh in 1971, Dhaka became the capital of the new state.</p>\n', 'upload_images/blog_image/old-dhaka_thumb.gif', 1, '2016-04-15 09:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chat_id` int(10) NOT NULL,
  `user_id` int(5) NOT NULL,
  `user_message` text,
  `admin_message` char(200) DEFAULT NULL,
  `show_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(7) NOT NULL,
  `blog_id` int(7) NOT NULL,
  `user_id` int(5) NOT NULL,
  `comment_title` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `reply` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(7) NOT NULL,
  `gallery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery`) VALUES
(1, 'upload_images/gallery/Bandorban.jpg'),
(2, 'upload_images/gallery/Gallery_Image_-_12_Shiva_Temple.jpg'),
(3, 'upload_images/gallery/Galley_Image_-_Paharpur4.jpg'),
(4, 'upload_images/gallery/Lalakhal,_Bandorban.jpg'),
(5, 'upload_images/gallery/NAFAKUM.jpg'),
(6, 'upload_images/gallery/Nilachol2,_Bandorban.jpg'),
(7, 'upload_images/gallery/Paharpur_Terakota_(6).jpg'),
(8, 'upload_images/gallery/Puthia_Palace_Gallery.jpg'),
(9, 'upload_images/gallery/Shorno_Mondir2,Bandorban.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter_subscription`
--

CREATE TABLE `tbl_newsletter_subscription` (
  `subscription_id` int(10) NOT NULL,
  `subscription_email` varchar(100) NOT NULL,
  `subscription_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online`
--

CREATE TABLE `tbl_online` (
  `online_id` int(1) NOT NULL,
  `online_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_online`
--

INSERT INTO `tbl_online` (`online_id`, `online_status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour`
--

CREATE TABLE `tbl_tour` (
  `tour_id` int(3) NOT NULL,
  `tour_type` tinyint(1) NOT NULL,
  `tour_title` varchar(100) NOT NULL,
  `tour_summary` varchar(200) NOT NULL,
  `tour_price` varchar(200) NOT NULL,
  `tour_subtitle` varchar(200) NOT NULL,
  `tour_description` text NOT NULL,
  `tour_itinerary` text NOT NULL,
  `tour_additional_image_0` varchar(200) NOT NULL,
  `tour_additional_image_1` varchar(200) NOT NULL,
  `tour_additional_image_2` varchar(200) NOT NULL,
  `tour_additional_image_3` varchar(200) NOT NULL,
  `tour_additional_image_4` varchar(200) NOT NULL,
  `tour_additional_image_5` varchar(200) NOT NULL,
  `tour_additional_image_6` varchar(200) NOT NULL,
  `tour_pricing` text NOT NULL,
  `tour_remarks` text NOT NULL,
  `tour_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tour`
--

INSERT INTO `tbl_tour` (`tour_id`, `tour_type`, `tour_title`, `tour_summary`, `tour_price`, `tour_subtitle`, `tour_description`, `tour_itinerary`, `tour_additional_image_0`, `tour_additional_image_1`, `tour_additional_image_2`, `tour_additional_image_3`, `tour_additional_image_4`, `tour_additional_image_5`, `tour_additional_image_6`, `tour_pricing`, `tour_remarks`, `tour_status`) VALUES
(1, 1, 'OLD DHAKA TOUR', 'Life is so dynamic and authentic here. from the uniqueness of language to the historical importance, Old Dhaka is place where everyone rediscovers life.', 'Start from $55.', '53 allies of 52 Bazaars', '<p>\n <span>A very age old saying about old Dhaka (AKA PURAN DHAKA). Life is so dynamic and authentic here. from the uniqueness of language to the historical importance, Old Dhaka is place where everyone rediscovers life. </span><br />\n <br />\n <span>Arguably the 600 old Dhaka used be a Mughal capital and ruled by some famous and powerful Rules. Though the world order has changed, But old Dhaka never lost it&#39;s charm </span><br />\n <br />\n <span>Situated by the Old Ganges Old Dhaka has so many historical and cultural aspects. You will have more than a reason to pay a visit in old dhaka once in a life time. Oldest mosque in the Bangladesh, Palaces and forts form the Mughal period, structure from the greeks, fascinating church made by Armenians and horse carriages.</span></p>\n', '<ul>\n <li>\n  <span>08.00 – 08.00 AM: Our Travel Geek will pick you from the hotel you will be staying at</span></li>\n <li>\n  <span>08.30 – 08.45 AM: Visiting the spectacular architectural wonder of Luis I Kahn, The national parliament house of Bangladesh and the crescent Lake (You can also subscribe for Parliament house Trip Separately).</span></li>\n <li>\n  <span>09.15 – 10:15 AM: Walk around Dhaka university Campus. Visiting through the historical sculptures and department of fine arts and Memorial of Language Movement. Campus is full of Ancient structures like mosques and Domes, halls and statues. And also age old famous Dhakeswari temple. </span></li>\n <li>\n  <span>10.00 – 10.45 AM: Visiting LalBag Fort (Mughal Structure).</span></li>\n <li>\n  <span>10.45 – 12.15 PM: Visiting Star Mosque and Armenian Church.</span></li>\n <li>\n  <span>12.15 – 01.00 PM: Traditional Bengali Lunch at a historical ethnic Bengali restaurant.</span></li>\n <li>\n  <span>01.00 – 01.45 PM: Visit Ahsan Manzil The Pink Palace.</span></li>\n <li>\n  <span>02.00 – 02.15 PM: Walk to the main river port of the country Sadar Ghat.</span></li>\n <li>\n  <span>02.30 – 03.30 PM: Roam Around the Sadar Ghat Area and Visit to the ship breaking yard with short boat trip.</span></li>\n <li>\n  <span>03.45 – 04.00 PM: Roam Around the alley ways of Old Dhaka Hindu Street shakhari Bazaar and observing ancient life style. </span></li>\n <li>\n  <span>4:00 - 6:00PM: visiting some local exhibition galleries and public places to enjoy the street food.</span></li>\n <li>\n  <span>7:00 - 8:00: Dinner.</span></li>\n <li>\n  <span>8:00 PM: Drop at your Hotel.</span></li>\n</ul>\n<p>\n <br />\n <span>There are so many places to roam around other than these. Keeping them</span></p>\n', 'upload_images/tour_additional_image_0/Old_Dhaka.jpg', 'upload_images/tour_additional_image_1/35.jpg', 'upload_images/tour_additional_image_2/586b5b29450b4f7ce4e69e626e4550b8.jpg', 'upload_images/tour_additional_image_3/dhaka03.jpg', 'upload_images/tour_additional_image_4/The_old_capital_Sonargaon_dhaka_tourism.jpg', 'upload_images/tour_additional_image_5/old+dhaka+025_fhdr.jpg', 'upload_images/tour_additional_image_6/Khan_Mohammad_Mirdhas_Mosque_old-dhaka-640-480.jpg', '<ul>\n <li>\n  <span>1 Pax Tour: $110 Per person.</span></li>\n <li>\n  <span>2 Pax Group: $90 Per person.</span></li>\n <li>\n  <span>3 Pax Group: $80 Per person.</span></li>\n <li>\n  <span>4 Pax above Group: $55 Per person</span></li>\n</ul>\n', '<p>\n <h class="color-orange"> Includes:</h></p>\n<ul class="color-text">\n <li>\n  Air Conditioned car with all possible means of transport during the tour.</li>\n <li>\n  English speaking Travel Geek.</li>\n <li>\n  Entrance Tickets to all the Historical Attractions.</li>\n <li>\n  Mineral Water Bottle.</li>\n <li>\n  Lunch in a Traditional Ethnic Bengali Restaurant.</li>\n</ul>\n<p>\n  </p>\n<p>\n <h class="color-orange"> Excludes:</h></p>\n<p>\n <span class="color-text">* All our tours Do not includes snacks, drink, Tips, beverage, or any personal item <br />\n <br />\n Things to Remember:</span></p>\n<ul class="color-text">\n <li>\n  We discourage our guests to wear shorts during the visit to Religious structures like Mosques, temples and Shrines.</li>\n <li>\n  Bengali Food Are well known for being spicy. Food with less spice can be provided if our guests want.</li>\n <li>\n  All the places mentioned in itinerary are open on Saturdays, Tuesdays and Wednesdays. So we encourage our guests to plan the trip within these days.</li>\n <li>\n  Ahsan Manzil will be closed at Thursdays and opens after 03.00 pm in Fridays. Lalbagh Fort will be closed at Sundays, and opens after 02.00 pm at Mondays. Rest of the sites are open 07 days a week.</li>\n <li>\n  Everyone knows about Unbearable Dhaka Traffic. Sometimes It is best to walk around.</li>\n <li>\n  Tour Package does not cover any personal item, beverage, snacks and Tips</li>\n</ul>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `user_since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `user_image`, `email`, `password`, `user_status`, `user_since`) VALUES
(1, 'Admin', 'upload_images/user_image/admin_thumb.png', 'admin@evis.com', '111111', 1, '2016-04-15 09:48:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_newsletter_subscription`
--
ALTER TABLE `tbl_newsletter_subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `tbl_online`
--
ALTER TABLE `tbl_online`
  ADD PRIMARY KEY (`online_id`);

--
-- Indexes for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_newsletter_subscription`
--
ALTER TABLE `tbl_newsletter_subscription`
  MODIFY `subscription_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_online`
--
ALTER TABLE `tbl_online`
  MODIFY `online_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  MODIFY `tour_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
