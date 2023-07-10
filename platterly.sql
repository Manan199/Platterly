-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 16, 2023 at 10:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platterly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `user_pass`) VALUES
(1, 'S01@admin.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `bill_det`
--

CREATE TABLE `bill_det` (
  `S_No.` int(100) NOT NULL,
  `Invoice_No` int(100) NOT NULL,
  `C_user` varchar(255) NOT NULL,
  `C_ip` varchar(255) NOT NULL,
  `V_name` varchar(255) NOT NULL,
  `S_choice` varchar(255) NOT NULL,
  `Qty` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Tax` float NOT NULL,
  `Packing` int(11) NOT NULL,
  `G_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bill_det`
--

INSERT INTO `bill_det` (`S_No.`, `Invoice_No`, `C_user`, `C_ip`, `V_name`, `S_choice`, `Qty`, `Price`, `Tax`, `Packing`, `G_total`) VALUES
(16, 1465376175, 'rosh13', '::1', 'Anna Tiffin', 'Spicy', 'Half', 2860, 514.8, 300, 3674.8),
(17, 1710076467, 'rosh13', '::1', 'Shreeji Tiffin', 'Spicy', 'Half', 2860, 514.8, 300, 3674.8),
(18, 1577766510, 'rosh13', '::1', 'Padmavati Tiffin', 'Spicy', 'Half', 2860, 514.8, 300, 3674.8);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_Id` int(100) NOT NULL,
  `C_Ip` varchar(255) NOT NULL,
  `C_Name` text NOT NULL,
  `C_user` varchar(100) NOT NULL,
  `C_Image` text NOT NULL,
  `C_email` varchar(100) NOT NULL,
  `C_pass` varchar(100) NOT NULL,
  `C_address` varchar(200) NOT NULL,
  `C_district` text NOT NULL,
  `C_contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_Id`, `C_Ip`, `C_Name`, `C_user`, `C_Image`, `C_email`, `C_pass`, `C_address`, `C_district`, `C_contact`) VALUES
(2, '::1', 'Roshni', 'rosh13', 'avtar4.jpeg', 'roshni12@gmail.com', '123', '1314 Ramesh Nagar, New Delhi', 'West Delhi', 9987256413),
(4, '::1', 'Drake', 'drake12', 'avtar1.jpeg', 'drake@gmail.com', 'drake12', '23 Sector-7 Rohini, New Delhi', 'North West Delhi', 9811653241);

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `M_type` varchar(30) NOT NULL,
  `V_id` int(100) NOT NULL,
  `M_item` varchar(255) NOT NULL,
  `M_day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`M_type`, `V_id`, `M_item`, `M_day`) VALUES
('Breakfast', 1, 'Chole Bhature', 'Friday'),
('Breakfast', 1, 'Aaloo Puri', 'Monday'),
('Breakfast', 1, 'Paneer Toast', 'Saturday'),
('Breakfast', 1, 'Paneer Prantha', 'Thursday'),
('Breakfast', 1, 'Aaloo Prantha', 'Tuesday'),
('Breakfast', 1, 'Oatmeal(Wed)	', 'Wednesday'),
('Breakfast', 2, 'Chicken Sandwich', 'Friday'),
('Breakfast', 2, 'Bread Omelette', 'Monday'),
('Breakfast', 2, 'Paneer Toast(Sat)', 'Saturday'),
('Breakfast', 2, 'Boiled Eggs', 'Thursday'),
('Breakfast', 2, 'Veg Cheese Sandwich', 'Tuesday'),
('Breakfast', 2, 'Oatmeal', 'Wednesday'),
('Breakfast', 3, 'Gobi Parantha, Curd,Pickle', 'Friday'),
('Breakfast', 3, 'Aloo Parantha, Curd,Pickle', 'Monday'),
('Breakfast', 3, 'Paneer Toast(Sat)', 'Saturday'),
('Breakfast', 3, 'Onion Parantha, Curd,Pickle', 'Thursday'),
('Breakfast', 3, 'Meethi Parantha, Curd,Pickle', 'Tuesday'),
('Breakfast', 3, 'Oatmeal', 'Wednesday'),
('Breakfast', 4, 'Fried Idli, Tomato Ketchup', 'Friday'),
('Breakfast', 4, 'Upma, Chilli Chutney ', 'Monday'),
('Breakfast', 4, 'Medu Vada, Coconut Chutney', 'Saturday'),
('Breakfast', 4, 'Vada, Green Chutney ', 'Thursday'),
('Breakfast', 4, 'Sambar Dosa, Coconut Chutney ', 'Tuesday'),
('Breakfast', 4, 'Idli, Rasam', 'Wednesday'),
('Breakfast', 5, 'Poha, Sweet lassi', 'Friday'),
('Breakfast', 5, 'Onion Uttapam', 'Monday'),
('Breakfast', 5, 'Medu Vada, Coconut Chutney', 'Saturday'),
('Breakfast', 5, 'Oats Upma', 'Thursday'),
('Breakfast', 5, 'Rava Khichadi ', 'Tuesday'),
('Breakfast', 5, 'Dahi Vada', 'Wednesday'),
('Breakfast', 6, 'Vegetable Khichdi', 'Friday'),
('Breakfast', 6, 'Methi Bajara Puri And Aloo Subzi', 'Monday'),
('Breakfast', 6, 'Mawa Kachori', 'Saturday'),
('Breakfast', 6, 'Meethi Parantha, Curd,Pickle', 'Thursday'),
('Breakfast', 6, 'Bikaneri Chana Dal Paratha', 'Tuesday'),
('Breakfast', 6, 'Pyaaz Kachori', 'Wednesday'),
('Breakfast', 7, 'Vegetable Khichdi', 'Friday'),
('Breakfast', 7, 'Methi ka Thepla', 'Monday'),
('Breakfast', 7, 'Jalebi Fafda', 'Saturday'),
('Breakfast', 7, 'Gujrati Pudla', 'Thursday'),
('Breakfast', 7, 'Moong Dal Dhokhla', 'Tuesday'),
('Breakfast', 7, 'Meethi Khakra, Dahi, Pickle', 'Wednesday'),
('Breakfast', 8, 'Halwa Poori', 'Friday'),
('Breakfast', 8, 'Lemon Poha', 'Monday'),
('Breakfast', 8, 'Sabudani Khichdi', 'Saturday'),
('Breakfast', 8, 'Sev Prantha, Dahi', 'Thursday'),
('Breakfast', 8, 'Dal Bafle', 'Tuesday'),
('Breakfast', 8, 'Malpua, Jalebi', 'Wednesday'),
('Breakfast', 9, 'Podi Masala', 'Friday'),
('Breakfast', 9, 'Upma, Chilli Chutney', 'Monday'),
('Breakfast', 9, 'Medu Vada, Coconut Chutney', 'Saturday'),
('Breakfast', 9, 'Vada, Green Chutney', 'Thursday'),
('Breakfast', 9, 'Rava Idli Vegetable Sandwich', 'Tuesday'),
('Breakfast', 9, 'Idli, Rasam', 'Wednesday'),
('Dinner', 1, 'Dal Tadka, Missi Roti, Salad', 'Friday'),
('Dinner', 1, 'Mix veg Sabzi, Roti, Salad', 'Monday'),
('Dinner', 1, 'Chana Masala, Missi Roti, Salad', 'Saturday'),
('Dinner', 1, 'Dum Aaloo, Roti, Salad', 'Thursday'),
('Dinner', 1, 'Masala Rice, Salad, Raita', 'Tuesday'),
('Dinner', 1, 'Paneer Makhani, Butter Roti, Salad', 'Wednesday'),
('Dinner', 2, 'Dal Tadka, Missi Roti, Salad', 'Friday'),
('Dinner', 2, 'Mix veg Sabzi, Roti, Salad', 'Monday'),
('Dinner', 2, 'Chana Masala, Missi Roti, Salad', 'Saturday'),
('Dinner', 2, 'Dum Biryani, Raita, Salad', 'Thursday'),
('Dinner', 2, 'Masala Rice, Salad, Raita', 'Tuesday'),
('Dinner', 2, 'Tawa Chicken, Butter Roti, Salad', 'Wednesday'),
('Dinner', 3, 'Aalo Meethi, Missi Roti, Salad', 'Friday'),
('Dinner', 3, 'Mix veg Sabzi, Roti, Salad', 'Monday'),
('Dinner', 3, 'Chana Masala, Missi Roti, Salad', 'Saturday'),
('Dinner', 3, 'Soyabeen, Roti, Salad', 'Thursday'),
('Dinner', 3, 'Dal Fry , Roti, Salad', 'Tuesday'),
('Dinner', 3, 'Massor Dal, Butter Roti, Salad', 'Wednesday'),
('Dinner', 4, 'Dahi Vada', 'Friday'),
('Dinner', 4, 'Onion Uttapam', 'Monday'),
('Dinner', 4, 'Rava Dosa, Sambar', 'Saturday'),
('Dinner', 4, 'Rava Khichadi', 'Thursday'),
('Dinner', 4, 'Rava Uttapam', 'Tuesday'),
('Dinner', 4, 'Dosa, Sambar', 'Wednesday'),
('Dinner', 5, 'Vada, Green Chutney', 'Friday'),
('Dinner', 5, 'Upma, Chilli Chutney', 'Monday'),
('Dinner', 5, 'Rava Dosa, Sambar', 'Saturday'),
('Dinner', 5, 'Idli Upma', 'Thursday'),
('Dinner', 5, 'Rava Uttapam', 'Tuesday'),
('Dinner', 5, 'Dosa, Sambar', 'Wednesday'),
('Dinner', 6, 'Dal Batti Churma', 'Friday'),
('Dinner', 6, 'Dal Batti Churma', 'Monday'),
('Dinner', 6, 'Dahi Chana Masala, Missi Roti, Salad', 'Saturday'),
('Dinner', 6, 'Bharwa Loki, Roti, Salad', 'Thursday'),
('Dinner', 6, 'Dal Fry , Roti, Ghewar', 'Tuesday'),
('Dinner', 6, 'Panchmel ki Dal, Bajra Roti, Salad', 'Wednesday'),
('Dinner', 7, 'Lasooni Palak, Rotli, Fafda', 'Friday'),
('Dinner', 7, 'Dal Dhokli Churma', 'Monday'),
('Dinner', 7, 'Lauki Chana Dal, Rotli, Pickle', 'Saturday'),
('Dinner', 7, 'Dal Dhokli, Roti, Salad', 'Thursday'),
('Dinner', 7, 'Dal Fry , Roti, Papad', 'Tuesday'),
('Dinner', 7, 'Panchmel ki Dal, Rotli, Salad', 'Wednesday'),
('Dinner', 8, 'Meethi Aalo, Roti, jalebi', 'Friday'),
('Dinner', 8, 'Kadhi Pakoda, Roti, Rice, Pickel', 'Monday'),
('Dinner', 8, 'Pulav , Raita, Salad', 'Saturday'),
('Dinner', 8, 'Dal Dhokli, Roti, Salad', 'Thursday'),
('Dinner', 8, 'Dal Fry , Roti, Papad', 'Tuesday'),
('Dinner', 8, 'Bhindi Fry, Roti, Salad', 'Wednesday'),
('Dinner', 9, 'Dal Vada', 'Friday'),
('Dinner', 9, 'Onion Uttapam', 'Monday'),
('Dinner', 9, 'Rava Dosa, Sambar', 'Saturday'),
('Dinner', 9, 'Rava Khichadi', 'Thursday'),
('Dinner', 9, 'Rava Uttapam', 'Tuesday'),
('Dinner', 9, 'Dosa, Sambar', 'Wednesday'),
('Lunch', 1, 'Dal Makhni, Roti, Salad', 'Friday'),
('Lunch', 1, 'Amritsari Chole,Roti,Rice', 'Monday'),
('Lunch', 1, 'Rajma Chawl, Salad, Rice', 'Saturday'),
('Lunch', 1, 'Mushroom Masala, Roti, Raita', 'Thursday'),
('Lunch', 1, 'Malai Kofta, Butter Roti,Raita', 'Tuesday'),
('Lunch', 1, 'Kadhai Paneer, Roti, Raita', 'Wednesday'),
('Lunch', 2, 'Dal Makhni, Roti, Salad', 'Friday'),
('Lunch', 2, 'Kadhai Chicken, Roti, Salad', 'Monday'),
('Lunch', 2, 'Rajma sabzi , Roti, Salad', 'Saturday'),
('Lunch', 2, 'Mushroom Masala, Roti, Salad', 'Thursday'),
('Lunch', 2, 'Malai Kofta, Butter Roti, Salad', 'Tuesday'),
('Lunch', 2, 'Butter Chicken, Roti, Salad', 'Wednesday'),
('Lunch', 3, 'Shahi Paneer, Roti, Salad', 'Friday'),
('Lunch', 3, 'Mix Veg Sabzi, Roti, Salad, Rice', 'Monday'),
('Lunch', 3, 'Rajma sabzi , Roti, Salad, Rice (Sat)', 'Saturday'),
('Lunch', 3, 'Mushroom Masala, Roti, Salad', 'Thursday'),
('Lunch', 3, 'Aloo jeera, Butter Roti, Salad, Rice', 'Tuesday'),
('Lunch', 3, 'Daal Makhni, Roti, Salad, Rice', 'Wednesday'),
('Lunch', 4, 'Sambar, Vada', 'Friday'),
('Lunch', 4, 'Rava Uttapam', 'Monday'),
('Lunch', 4, 'Medu Vada, Red Chilli Chutney', 'Saturday'),
('Lunch', 4, 'Mix Veg Uttapam', 'Thursday'),
('Lunch', 4, 'Oats Upma', 'Tuesday'),
('Lunch', 4, 'Dosa, Sambar', 'Wednesday'),
('Lunch', 5, 'Vada, Idli, Rasam', 'Friday'),
('Lunch', 5, 'Rava uttapam', 'Monday'),
('Lunch', 5, 'Medu Vada, Red Chilli Chutney', 'Saturday'),
('Lunch', 5, 'Poha ,Sweet Lassi', 'Thursday'),
('Lunch', 5, 'Sambar Dosa, Coconut Chutney', 'Tuesday'),
('Lunch', 5, 'Dosa, Sambar', 'Wednesday'),
('Lunch', 6, 'Shahi Paneer, Bajra Roti, Salad', 'Friday'),
('Lunch', 6, 'Pakoda Kadhi,Bajra Roti, Salad, Rice', 'Monday'),
('Lunch', 6, 'Besan Bhari Mirch , Roti, Salad, Rice', 'Saturday'),
('Lunch', 6, 'Ker Sangri Beans, Roti, Salad', 'Thursday'),
('Lunch', 6, 'Dal Batti Churma', 'Tuesday'),
('Lunch', 6, 'Besan ke Gatte, Roti, Salad, Rice', 'Wednesday'),
('Lunch', 7, 'Kadhi, Rotli, Salad', 'Friday'),
('Lunch', 7, 'Gujrati Dal, Rotli,Papad, Rice', 'Monday'),
('Lunch', 7, 'Besan Bhari Mirch , Rotli, Salad, Rice', 'Saturday'),
('Lunch', 7, 'Thepla, Aalo bhaji,Dahi, Pickel', 'Thursday'),
('Lunch', 7, 'Dal Batti Churma', 'Tuesday'),
('Lunch', 7, 'Besan ke Gatte, Rotli, Salad, Rice', 'Wednesday'),
('Lunch', 8, 'Kadhi, Roti, Salad', 'Friday'),
('Lunch', 8, 'Indori Dal, Roti,Salad, Rice', 'Monday'),
('Lunch', 8, 'Palak Paneer, Roti, Salad, Rice', 'Saturday'),
('Lunch', 8, 'Thepla, Aalo bhaji,Dahi, Pickel', 'Thursday'),
('Lunch', 8, 'Sev Tamatar, Rice , Salad', 'Tuesday'),
('Lunch', 8, 'Sambar Dal, Roti, Salad, Rice', 'Wednesday'),
('Lunch', 9, 'Dahi Vada', 'Friday'),
('Lunch', 9, 'Rava Dosa', 'Monday'),
('Lunch', 9, 'Medu Vada, Red Chilli Chutney', 'Saturday'),
('Lunch', 9, 'Stuffed Potato Idli', 'Thursday'),
('Lunch', 9, 'Oats Upma', 'Tuesday'),
('Lunch', 9, 'Dosa, Sambar', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `newjoin`
--

CREATE TABLE `newjoin` (
  `V_id` int(100) NOT NULL DEFAULT 0,
  `V_name` varchar(255) NOT NULL,
  `M_type` varchar(30) NOT NULL,
  `M_item` varchar(255) NOT NULL,
  `M_day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newjoin`
--

INSERT INTO `newjoin` (`V_id`, `V_name`, `M_type`, `M_item`, `M_day`) VALUES
(6, 'Padmavati Tiffin', 'Breakfast', 'Mawa Kachori', 'Saturday'),
(6, 'Padmavati Tiffin', 'Lunch', 'Pakoda Kadhi,Bajra Roti, Salad, Rice', 'Monday'),
(6, 'Padmavati Tiffin', 'Lunch', 'Shahi Paneer, Bajra Roti, Salad', 'Friday'),
(6, 'Padmavati Tiffin', 'Breakfast', 'Pyaaz Kachori', 'Wednesday'),
(6, 'Padmavati Tiffin', 'Breakfast', 'Bikaneri Chana Dal Paratha', 'Tuesday'),
(6, 'Padmavati Tiffin', 'Breakfast', 'Vegetable Khichdi', 'Friday'),
(6, 'Padmavati Tiffin', 'Breakfast', 'Meethi Parantha, Curd,Pickle', 'Thursday'),
(6, 'Padmavati Tiffin', 'Breakfast', 'Methi Bajara Puri And Aloo Subzi', 'Monday'),
(6, 'Padmavati Tiffin', 'Lunch', 'Besan Bhari Mirch , Roti, Salad, Rice', 'Saturday'),
(6, 'Padmavati Tiffin', 'Lunch', 'Ker Sangri Beans, Roti, Salad', 'Thursday'),
(6, 'Padmavati Tiffin', 'Dinner', 'Dal Batti Churma', 'Friday'),
(6, 'Padmavati Tiffin', 'Dinner', 'Dal Batti Churma', 'Monday'),
(6, 'Padmavati Tiffin', 'Dinner', 'Dahi Chana Masala, Missi Roti, Salad', 'Saturday'),
(6, 'Padmavati Tiffin', 'Dinner', 'Bharwa Loki, Roti, Salad', 'Thursday'),
(6, 'Padmavati Tiffin', 'Dinner', 'Dal Fry , Roti, Ghewar', 'Tuesday'),
(6, 'Padmavati Tiffin', 'Dinner', 'Panchmel ki Dal, Bajra Roti, Salad', 'Wednesday'),
(6, 'Padmavati Tiffin', 'Lunch', 'Dal Batti Churma', 'Tuesday'),
(6, 'Padmavati Tiffin', 'Lunch', 'Besan ke Gatte, Roti, Salad, Rice', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `newrates`
--

CREATE TABLE `newrates` (
  `Half` int(11) NOT NULL,
  `Full` int(11) NOT NULL,
  `V_id` int(100) NOT NULL,
  `M_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newrates`
--

INSERT INTO `newrates` (`Half`, `Full`, `V_id`, `M_type`) VALUES
(30, 40, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(30, 40, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(30, 40, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(30, 40, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(30, 40, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(30, 40, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 1, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(40, 50, 2, 'Breakfast'),
(30, 40, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(30, 40, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(30, 40, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(30, 40, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(30, 40, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(30, 40, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(40, 50, 3, 'Breakfast'),
(30, 40, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(30, 40, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(30, 40, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(30, 40, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(30, 40, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(30, 40, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(40, 50, 4, 'Breakfast'),
(30, 40, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(30, 40, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(30, 40, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(30, 40, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(30, 40, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(30, 40, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(40, 50, 5, 'Breakfast'),
(30, 40, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(30, 40, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(30, 40, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(30, 40, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(30, 40, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(30, 40, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(40, 50, 6, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 7, 'Breakfast'),
(30, 40, 7, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(40, 50, 8, 'Breakfast'),
(30, 40, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(30, 40, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(30, 40, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(30, 40, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(30, 40, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(30, 40, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(40, 50, 9, 'Breakfast'),
(30, 40, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(30, 40, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(30, 40, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(30, 40, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(30, 40, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(30, 40, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 1, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(40, 50, 2, 'Dinner'),
(30, 40, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(30, 40, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(30, 40, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(30, 40, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(30, 40, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(30, 40, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(40, 50, 3, 'Dinner'),
(30, 40, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(30, 40, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(30, 40, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(30, 40, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(30, 40, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(30, 40, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(40, 50, 4, 'Dinner'),
(30, 40, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(30, 40, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(30, 40, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(30, 40, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(30, 40, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(30, 40, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(40, 50, 5, 'Dinner'),
(30, 40, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(30, 40, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(30, 40, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(30, 40, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(30, 40, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(30, 40, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(40, 50, 6, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 7, 'Dinner'),
(30, 40, 7, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(40, 50, 8, 'Dinner'),
(30, 40, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(30, 40, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(30, 40, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(30, 40, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(30, 40, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(30, 40, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(40, 50, 9, 'Dinner'),
(30, 40, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(30, 40, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(30, 40, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(30, 40, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(30, 40, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(30, 40, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 1, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(40, 50, 2, 'Lunch'),
(30, 40, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(30, 40, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(30, 40, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(30, 40, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(30, 40, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(30, 40, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(40, 50, 3, 'Lunch'),
(30, 40, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(30, 40, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(30, 40, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(30, 40, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(30, 40, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(30, 40, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(40, 50, 4, 'Lunch'),
(30, 40, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(30, 40, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(30, 40, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(30, 40, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(30, 40, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(30, 40, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(40, 50, 5, 'Lunch'),
(30, 40, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(30, 40, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(30, 40, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(30, 40, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(30, 40, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(30, 40, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(40, 50, 6, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 7, 'Lunch'),
(30, 40, 7, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(40, 50, 8, 'Lunch'),
(30, 40, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(30, 40, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(30, 40, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(30, 40, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(30, 40, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(30, 40, 9, 'Lunch'),
(40, 50, 9, 'Lunch'),
(40, 50, 9, 'Lunch');

-- --------------------------------------------------------

--
-- Table structure for table `payment_det`
--

CREATE TABLE `payment_det` (
  `Payment_id` int(100) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Card_no` bigint(20) NOT NULL,
  `Year` int(11) NOT NULL,
  `Payment_date` date NOT NULL,
  `Payment_Status` text NOT NULL DEFAULT 'Confirmed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_det`
--

INSERT INTO `payment_det` (`Payment_id`, `User_Name`, `Email`, `Address`, `District`, `Card_no`, `Year`, `Payment_date`, `Payment_Status`) VALUES
(4, 'rosh13', 'roshni12@gmail.com', '1314 Ramesh Nagar, New Delhi', 'West Delhi', 587456542501, 2027, '2023-02-16', 'Confirmed'),
(5, 'rosh13', 'roshni12@gmail.com', '1314 Ramesh Nagar, New Delhi', 'West Delhi', 245368898761, 2025, '2023-02-17', 'Confirmed'),
(6, 'rosh13', 'roshni12@gmail.com', '1314 Ramesh Nagar, New Delhi', 'West Delhi', 273680187645, 2028, '2023-02-17', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `V_id` int(100) NOT NULL,
  `M_type` varchar(30) NOT NULL,
  `Half` int(11) NOT NULL,
  `Full` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`V_id`, `M_type`, `Half`, `Full`) VALUES
(1, 'Breakfast', 30, 40),
(1, 'Dinner', 40, 50),
(1, 'Lunch', 40, 50),
(2, 'Breakfast', 40, 50),
(2, 'Dinner', 40, 50),
(2, 'Lunch', 40, 50),
(3, 'Breakfast', 30, 40),
(3, 'Dinner', 40, 50),
(3, 'Lunch', 40, 50),
(4, 'Breakfast', 30, 40),
(4, 'Dinner', 40, 50),
(4, 'Lunch', 40, 50),
(5, 'Breakfast', 30, 40),
(5, 'Dinner', 40, 50),
(5, 'Lunch', 40, 50),
(6, 'Breakfast', 30, 40),
(6, 'Dinner', 40, 50),
(6, 'Lunch', 40, 50),
(7, 'Breakfast', 30, 40),
(7, 'Dinner', 40, 50),
(7, 'Lunch', 30, 40),
(8, 'Breakfast', 40, 50),
(8, 'Dinner', 40, 50),
(8, 'Lunch', 40, 50),
(9, 'Breakfast', 30, 40),
(9, 'Dinner', 40, 50),
(9, 'Lunch', 40, 50);

-- --------------------------------------------------------

--
-- Table structure for table `regional`
--

CREATE TABLE `regional` (
  `S_No.` int(11) NOT NULL,
  `Regional_Tiffins` text NOT NULL,
  `Image` text NOT NULL,
  `View` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `regional`
--

INSERT INTO `regional` (`S_No.`, `Regional_Tiffins`, `Image`, `View`) VALUES
(1, 'North India Tiffins', '1.jpg', 'northvendors.php'),
(2, 'South India Tiffins', '2.jpg', 'southvendors.php'),
(3, 'West India Tiffins', '3.jpg', 'westvendors.php'),
(4, 'East India Tiffins', '4.jpg', 'eastvendors.php');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `V_id` int(100) NOT NULL,
  `V_ip` varchar(255) NOT NULL,
  `V_name` varchar(255) NOT NULL,
  `V_logo` text NOT NULL,
  `V_regional` text NOT NULL,
  `V_email` varchar(100) NOT NULL,
  `V_pass` varchar(100) NOT NULL,
  `V_addrs` varchar(200) NOT NULL,
  `V_distrt` text NOT NULL,
  `V_contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`V_id`, `V_ip`, `V_name`, `V_logo`, `V_regional`, `V_email`, `V_pass`, `V_addrs`, `V_distrt`, `V_contact`) VALUES
(1, '::1', 'Shankar Tiffin', 'ST-west.png', 'North Indian', 'shankartiffin@gmail.com', 'st@1234', 'Sector-13 Rohini, New Delhi', 'North West Delhi', 9644985531),
(2, '::1', 'Kapoor Tiffin', 'PT.png', 'North Indian', 'kapoortiffin@gmail.com', 'kt@1234', 'Kapoor Tiffin, Model Town, New Delhi', 'North Delhi', 9711472211),
(3, '::1', 'Jain Tiffin', 'ST-west.png', 'North Indian', 'jaintiffin@gmail.com', 'jt@1234', 'Jain Tiffin, Saket, New Delhi', 'South Delhi', 8874652214),
(4, '::1', 'Anna Tiffin', 'PT.png', 'South Indian', 'annatiffin@gmail.com', 'at@1234', 'Kapashera, New Delhi', 'South West Delhi', 8864591547),
(5, '::1', 'Jayashree Tiffin', 'PT.png', 'South Indian', 'jayashreetiffin@gmail.com', 'jst@1234', 'Jayashree Tiffin, Punjabi Bagh, New Delhi', 'West Delhi', 9632557171),
(6, '::1', 'Padmavati Tiffin', 'PT.png', 'West Indian', 'padmavatitiffin@gmail.com', 'pt@1234', 'Padmavati Tiffin, Yamuna Vihar, New Delhi', 'North East Delhi', 9595643223),
(7, '::1', 'Shreeji Tiffin', 'ST-west.png', 'West Indian', 'shreejitiffin@gmail.com', 'st@1234', 'Shreeji Tiffin, Sarita Vihar, New Delhi', 'South East Delhi', 9536445797),
(8, '::1', 'Mele Babu Ne Thana Thaya Tiffin', 'MB.png', 'West Indian', 'melebabu@gmail.com', 'mb@1234', 'Karol Bagh, New Delhi', 'Central Delhi', 8997334650),
(9, '::1', 'Etikala Tiffin', 'MB.png', 'South Indian', 'etikalatiffin@gmail.com', 'et@1234', 'Etikala Tiffin, Mayur Vihar, New Delhi', 'East Delhi', 8287489733);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill_det`
--
ALTER TABLE `bill_det`
  ADD PRIMARY KEY (`S_No.`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`M_type`,`V_id`,`M_day`);

--
-- Indexes for table `payment_det`
--
ALTER TABLE `payment_det`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`V_id`,`M_type`) USING BTREE;

--
-- Indexes for table `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`S_No.`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill_det`
--
ALTER TABLE `bill_det`
  MODIFY `S_No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `C_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_det`
--
ALTER TABLE `payment_det`
  MODIFY `Payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regional`
--
ALTER TABLE `regional`
  MODIFY `S_No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `V_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
