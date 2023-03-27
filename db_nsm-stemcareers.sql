-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2023 at 02:49 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nsm-stemcareers`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `career_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสอาชีพ',
  `category_career_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสหมวดหมู่อาชีพ',
  `career_name_th` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'อาชีพภาษาไทย',
  `career_name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'อาชีพภาษาอังกฤษ',
  `score_naturalistic` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนด้านธรรมชาติ',
  `score_intrapersonal` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนความเข้าใจตนเอง',
  `score_interpersonal` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนมนุษย์สัมพันธ์',
  `score_musical` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนดนตรี',
  `score_bodily_kinesthetic` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนร่างกายและการเคลื่อนไหว',
  `score_spatial` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนมิติสัมพันธ์',
  `score_logical_mathematical` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนตรรกะและคณิตศาสตร์',
  `score_linguistic` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'คะแนนภาษา',
  `career_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปภาพ',
  `career_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `career_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `career_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `career_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `career_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `career_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`career_id`, `category_career_id`, `career_name_th`, `career_name_en`, `score_naturalistic`, `score_intrapersonal`, `score_interpersonal`, `score_musical`, `score_bodily_kinesthetic`, `score_spatial`, `score_logical_mathematical`, `score_linguistic`, `career_picture`, `career_at`, `career_by`, `career_up_at`, `career_up_by`, `career_del_at`, `career_del_by`) VALUES
(1, 1, 'Machine learning engineer', 'Machine learning engineer', '0', '9', '0', '0', '0', '9', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(2, 1, 'นักการตลาดดิจิตอล', 'Digital Marketer', '0', '9', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(3, 1, 'นักพัฒนาซอฟต์แวร์', 'Software Developer', '0', '9', '0', '0', '0', '9', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(4, 1, 'นักวิทยาศาสตร์ข้อมูล', 'Data Scientist', '0', '9', '0', '0', '0', '9', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(5, 1, 'นักออกแบบเกม', 'Game Designer', '0', '9', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(6, 1, 'นักออกแบบและสร้างภาพเคลื่อนไหว', 'Animator', '0', '9', '0', '0', '0', '9', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(7, 1, 'วิศวกรระบบดาวเทียม', 'Satellite Engineer', '0', '9', '0', '0', '0', '9', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(8, 2, 'นักธรณีวิทยาปิโตรเลียม', 'Petroleum Geologist', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(9, 2, 'วิศวกรไฟฟ้า', 'Electrical Engineer', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(10, 2, 'วิศวกรปิโตรเลียม', 'Petroleum Engineer', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(11, 2, 'วิศวกรพลังงานและสิ่งแวดล้อม', 'Energy And Environmental Engineer', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(12, 2, 'วิศวกรสิ่งแวดล้อมและการลดก๊าซเรือนกระจก', 'Environmental And Emission Reduction Engineer', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(13, 3, 'เกษตรยุคใหม่', 'Smart Farmer', '12', '0', '0', '0', '0', '0', '9', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(14, 3, 'นักปรับปรุงพันธุ์พืช', 'Plant Geneticist', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(15, 3, 'นักพัฒนาระบบวิศวกรรมทางการเกษตร', 'Agricultural Engineering', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(16, 3, 'นักวิจัยด้านไบโอเทค', 'Biotechnology', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(17, 3, 'นักวิทยาศาสตร์อาหาร', 'Food Scientist', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(18, 3, 'ผู้จัดการขยะอาหาร', 'Food Waste Management', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(19, 4, 'นักเวชศาสตร์ชะลอวัยและฟื้นฟูสุขภาพ', 'Anti-Aging And Regenerative Medicine', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(20, 4, 'นักคิดค้นยา', 'Pharmaceutical Scientist', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(21, 4, 'นักคิดค้นวัคซีน', 'Vaccine Developer', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(22, 4, 'นักดูแลสมรรถภาพนักกีฬา', 'Strength And Conditioning Coach', '0', '0', '12', '0', '12', '0', '0', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(23, 4, 'นักวิทยาศาสตร์เครื่องสำอาง', 'Cosmetic Scientist', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(24, 4, 'ผู้ช่วยพยาบาล', 'Nursing Assistant', '0', '0', '12', '0', '9', '0', '0', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(25, 4, 'ผู้ดูแลผู้สูงอายุ', 'Elderly Wellness Specialis', '0', '0', '12', '0', '9', '0', '0', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(26, 4, 'วิศวกรชีวการแพทย์', 'Biomedical Engineer', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(27, 5, 'นักพัฒนายานยนต์ไฟฟ้า', 'Ev Engineer', '0', '0', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(28, 5, 'วิศวกรการบินและอวกาศ', 'Aerospace Engineer', '0', '0', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(29, 5, 'วิศวกรจราจร', 'Traffic Engineer', '0', '0', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(30, 5, 'วิศวกรระบบโลจิสติกส์', 'Logistic System Engineering', '0', '0', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(31, 5, 'วิศวกรระบบราง', 'Railway Systems Engineer', '0', '0', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(32, 5, 'วิศวกรหุ่นยนต์และระบบอัตโนมัติ', 'Robotic And Mechatronic Engineer', '0', '0', '0', '0', '0', '12', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(33, 6, 'นักวิจัยวัสดุนาโน', 'Nano Technology Researcher', '0', '0', '0', '0', '0', '12', '9', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(34, 6, 'นักสร้างสรรค์ผลิตภัณฑ์จากขยะ', 'Garbage Designer', '0', '0', '0', '0', '0', '12', '9', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(35, 6, 'นักออกแบบผลิตภัณฑ์', 'Product Designer', '0', '0', '0', '0', '0', '12', '9', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(36, 6, 'นักออกแบบอารยสถาปัตย์', 'Universal Design', '0', '0', '0', '0', '0', '12', '9', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(37, 7, 'นักจัดการภัยพิบัติ', 'Disaster Planner', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(38, 7, 'นักภูมิอากาศวิทยา', 'Climatologist', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(39, 7, 'นักวิเคราะห์สภาพภูมิอากาศ', 'Climate Analyst', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(40, 7, 'นักอนุกรมวิธาน', 'Taxonomist', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(41, 7, 'วิศวกรภูมิศาสตร์สารสนเทศ', 'Geomatics Engineer', '12', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(42, 8, 'นักนิติวิทยาศาสตร์', 'Forensic Scientist', '0', '9', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(43, 8, 'นักนิติวิศวกรรมศาสตร์', 'Forensic Engineer', '0', '9', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(44, 8, 'นักฟิสิกส์ดาราศาสตร์', 'Astrophysicist', '9', '0', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(45, 8, 'นักรังสรรค์อาหาร', 'Food Creator', '9', '9', '12', '0', '0', '0', '0', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(46, 8, 'นักวิเคราะห์การลงทุน', 'Investment Analyst', '9', '9', '0', '0', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(47, 8, 'นักสร้างคอนเทนต์', 'Content Creator', '0', '9', '12', '9', '0', '0', '0', '12', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(48, 8, 'บาริสต้า', 'Barista', '0', '9', '12', '0', '0', '0', '0', '9', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(49, 8, 'ผู้เชี่ยวชาญด้านสุขภาพสิ่งแวดล้อม และความปลอดภัย', 'Health Environmental And Safety Specialist', '9', '0', '0', '0', '9', '0', '9', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL),
(50, 8, 'วิศวกรเสียง', 'Sound Engineer', '0', '0', '0', '12', '0', '0', '12', '0', NULL, '2023-03-13 13:49:04', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers_detail_career_resemble`
--

DROP TABLE IF EXISTS `careers_detail_career_resemble`;
CREATE TABLE IF NOT EXISTS `careers_detail_career_resemble` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `career_detail_main_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสดีเทลหลัก',
  `career_detail_career_resemble` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สามารถทำอาชีพอะไรได้อีกบ้าง',
  `career_detail_career_resemble_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `career_detail_career_resemble_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `career_detail_career_resemble_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `career_detail_career_resemble_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `career_detail_career_resemble_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `career_detail_career_resemble_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_detail_career_resemble`
--

INSERT INTO `careers_detail_career_resemble` (`id`, `career_detail_main_id`, `career_detail_career_resemble`, `career_detail_career_resemble_at`, `career_detail_career_resemble_by`, `career_detail_career_resemble_up_at`, `career_detail_career_resemble_up_by`, `career_detail_career_resemble_del_at`, `career_detail_career_resemble_del_by`) VALUES
(1, 1, 'นักพัฒนาหุ่นยนต์และระบบอัตโนมัติ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(2, 1, 'นักพัฒนาเกม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(3, 1, 'นักพัฒนานวัตกรรมดิจิทัล (Digital Innovation Developer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(4, 1, 'นักวิเคราะห์ระบบนวัตกรรมดิจิทัลและซอฟต์แวร์ (Digital Innovation and Software System Analysis)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(5, 1, 'นักออกแบบนวัตกรรมดิจิทัลและซอฟต์แวร์ (Digital Innovation and Software Designer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(6, 1, 'นักวางแผนทางด้านนวัตกรรมดิจิทัล (Digital Innovation Strategist)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(7, 1, 'ผู้ประกอบการนวัตกรรมดิจิทัลและวิศวกรรมซอฟต์แวร์ (Digital Innovation and Software Engineering Entrepreneurship)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(8, 1, 'นักออกแบบส่วนประสานงานผู้ใช้ (User Interface Designer) | นักเขียนภาษาคอมพิวเตอร์บนแพลตฟอร์มต่าง ๆ (Multi-Platform Programmer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(9, 1, 'นักทดสอบนวัตกรรมดิจิทัลและซอฟต์แวร์ (Software Tester)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(10, 1, 'นักตรวจสอบด้านคุณภาพนวัตกรรมดิจิทัลและซอฟต์แวร์ (Digital Innovation and Software Quality Assessment)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(11, 1, 'นักวิชาการด้านนวัตกรรมดิจิทัลและซอฟต์แวร์ (Digital Innovation and Software Researcher)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(12, 1, 'นักบริหารโครงการนวัตกรรมดิจิทัลและซอฟต์แวร์ (Digital Innovation and Software Project Manager)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(13, 1, 'นักวิทยาศาสตร์ข้อมูล (Data Scientist)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(14, 2, 'นักวิจัยและพัฒนาผลิตภัณฑ์เกี่ยวกับยาและสารอื่น ๆ ที่มีคุณสมบัติคล้ายยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(15, 2, 'พนักงานประจำห้องปฏิบัติการสายงานด้านวิจัยและพัฒนาผลิตภัณฑ์เกี่ยวกับยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(16, 2, 'อาจารย์มหาวิทยาลัย ทำการวิจัยและพัฒนา ผลิตภัณฑ์เกี่ยวกับยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(17, 2, 'ธุรกิจส่วนตัว ด้านการผลิตและส่งออกผลิตภัณฑ์เกี่ยวกับยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(18, 3, 'นักธรณีวิทยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(19, 3, 'นักพัฒนาโปรแกรมที่ใช้วิเคราะห์ข้อมูลสารสนเทศ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(20, 3, 'นักวิเคราะห์และประเมินศักยภาพแหล่งแร่เศรษฐกิจ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(21, 3, 'นักบรรพชีวินวิทยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(22, 3, 'นักธรณีเคมี', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(23, 3, 'นักธรณีสัณฐาน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(24, 3, 'นักแร่วิทยา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(25, 4, 'นักวิชาการแรงงานด้านความปลอดภัย ในกรมสวัสดิการ และคุ้มครองแรงงาน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(26, 4, 'จ้าหน้าที่สิ่งแวดล้อมในหน่วยงานรัฐบาล เช่น กรมควบคุม- มลพิษ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(27, 4, 'กรมส่งเสริมคุณภาพสิ่งแวดล้อม กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(28, 4, 'เจ้าหน้าที่สิ่งแวดล้อม ในบริษัทที่ปรึกษาด้านสิ่งแวดล้อม หรือในอุตสาหกรรมต่าง ๆ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(29, 4, 'เจ้าหน้าที่ตรวจสอบระบบการจัดการสิ่งแวดล้อมตามมาตรฐานสิ่งแวดล้อม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(30, 4, 'ที่ปรึกษาในด้านอาชีวอนามัยและความปลอดภัย', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(31, 4, 'จ้าหน้าที่ความปลอดภัยในการทำงาน (จป.) ใน อุตสาหกรรมต่าง ๆ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(32, 4, 'นักวิชาการสาธารณสุข ในโรงพยาบาล', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(33, 5, 'นักพัฒนาระบบการเลี้ยงสัตว์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(34, 5, 'นักเพาะพันธุ์พืช', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(35, 5, 'นักปรับปรุงพันธุ์พืช', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(36, 5, 'นักวิชาการด้านเกษตร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(37, 5, 'วิทยากร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(38, 5, 'ปศุสัตว์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(39, 6, 'ให้บริการเกี่ยวกับวิศกรหุ่นยนต์ (Robot Service Engineer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(40, 6, 'วิศวกรอิเล็กทรอนิกส์ (Electronic Engineer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(41, 6, 'ตัวแทนจำหน่ายเฉพาะทาง (Sale Engineer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(42, 6, 'วิศวกรเครื่องกล (Machine Engineer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(43, 6, 'วิศวกรรมเมคคาทรอนิกส์ (Mechatronics Engineer )', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(44, 6, 'ศวกรรมไฟฟ้า (Electrical Engineer)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(45, 7, 'วิศวกรบำรุงรักษาในโรงงานอุตสาหกรรม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(46, 7, 'วิศวกรเทคนิค', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(47, 7, 'วิศวกรเครื่องกล', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(48, 7, 'นักวิจัย/ นักวิชาการ ด้านการขนส่งทางราง', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(49, 8, 'อาจารย์ในสถาบันอุดมศึกษา', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(50, 8, 'นักวัสดุศาสตร์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(51, 8, 'นักออกแบบผลิตภัณฑ์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(52, 9, 'นักออกแบบแผนที่', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(53, 9, 'นักวิเคราะห์ระบบสารสนเทศภูมิศาสตร์ ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(54, 9, 'เจ้าหน้าที่แผนที่ภาพถ่าย / ภาพถ่ายทางอากาศ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(55, 9, 'ที่ปรึกษาด้านภูมิสารสนเทศ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(56, 9, 'นักพัฒนาโปรแกรมสารสนเทศภูมิศาสตร์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(57, 9, 'เจ้าหน้าที่กรมที่ดิน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(58, 9, 'เจ้าหน้าที่กรมแผนที่ทหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(59, 9, 'เจ้าหน้าที่บริษัทสำรวจทรัพยากร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(60, 9, 'นักผังเมือง', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(61, 9, 'เจ้าหน้าที่ระบบสารสนเทศภูมิศาสตร์ (การปะปา / การไฟฟ้า)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(62, 9, 'เจ้าหน้าที่อุทยานแห่งชาติ / กรมชลประทาน / กรมโยธาฯ / กรมอุตุฯ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(63, 9, 'เจ้าหน้าที่ที่ดินจังหวัด', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(64, 9, 'เจ้าหน้าที่รังวัดและสำรวจ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(65, 9, 'เจ้าหน้าที่แผนที่และภาพถ่าย กรมสอบสวนคดีพิเศษ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(66, 9, 'เจ้าหน้าที่นำเข้าข้อมูลเชิงพื้นที่', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(67, 9, 'พนักงานภาพถ่ายทางอากาศ / ภาพถ่ายจากดาวเทียม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(68, 9, 'พนักงานบริษัทที่ปรึกษาด้านภูมิศาสตร์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(69, 10, 'วิศวกรนักออกแบบจัดการขยะ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(70, 10, 'นักออกแบบผลิตภัณฑ์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(71, 10, 'นักวิจัยด้านการออกแบบผลิตภัณฑ์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(72, 11, 'นักวิจัย', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(73, 11, 'เกษตรกร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(74, 11, 'เจ้าของธุรกิจขายต้นไม้', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(75, 11, 'นักวิชาการพฤกษศาสตร์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(76, 11, 'นักอนุรักษ์ด้านพืช/สัตว์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(77, 12, 'ผู้รับผิดชอบ/ผู้ช่วยผู้ตรวจสอบด้านพลังงาน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(78, 12, 'ที่ปรึกษาด้านพลังงาน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(79, 12, 'นักวิเคราะห์ระบบและตรวจสอบงานพลังงานในภาคอุตสาหกรรม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(80, 12, 'นักวิชาการ/นักวิทยาศาสตร์ ด้านพลังงานและการจัดการพลังงาน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(81, 12, 'นักเคมีสิ่งแวดล้อม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(82, 12, 'วิศวกรอุตสาหการ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(83, 12, 'วิศวกรควบคุมกระบวนการผลิต', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(84, 13, 'นักวางแผนกลยุทธ์ทางการตลาด', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(85, 13, 'content creator', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(86, 13, 'Admin', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(87, 13, 'SEO Specialist (Search Engine Optimization)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(88, 13, 'Account Executive (AE)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(89, 14, 'แม่บ้าน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(90, 14, 'ผู้ช่วยพยาบาล (สำหรับผู้ที่ผ่านหลังสูตรการดูแลผู้สูงอายุขั้นสูง)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(91, 15, 'เจ้าหน้าที่บริหารความยั่งยืน ผู้เชี่ยวชาญด้านการพัฒนาอย่างยั่งยืน', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(92, 15, 'วิศวกรสิ่งแวดล้อม', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(93, 15, 'ที่ปรึกษาด้านสิ่งแวดล้อม หรือการเกษตร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(94, 15, 'นักวิจัยด้านสิ่งแวดล้อมและพลังงาน (บริษัทเอกชน มหาวิทยาลัย หน่วยงาน/สถาบันการวิจัย)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(95, 15, 'ผู้จัดการด้านการจัดเลี้ยง (catering)', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(96, 15, 'เกษตรกร, ผู้ผลิตปุ๋ยอินทรีย์', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(97, 16, 'ผู้จัดการร้านอาหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(98, 16, 'นักโภชนาการ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(99, 16, 'นักวิทยาศาสตร์อาหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(100, 16, 'Food Stylist', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(101, 16, 'ที่ปรึกษาการเปิดร้านอาหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(102, 16, 'นักคิดค้นรสชาติอาหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(103, 16, 'นักวิจัยอาหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(104, 16, 'เจ้าของกิจการร้านอาหาร', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(105, 16, 'ที่ปรึกษาด้านอาหารบำบัดโรคสำหรับผู้ป่วยโรคต่าง ๆ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL),
(106, 16, 'ผู้ประกอบการด้านอาหาร การบริการ และผลิตภัณฑ์เพื่อสุขภาพ', '2023-03-23 11:25:51', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers_detail_education`
--

DROP TABLE IF EXISTS `careers_detail_education`;
CREATE TABLE IF NOT EXISTS `careers_detail_education` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `career_detail_main_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสดีเทลหลัก',
  `career_detail_education_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสการศึกษา 1 = เอก, 2 = โท, 3 = ตรี, 4 = อาชีวะ',
  `career_detail_education_faculty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'คณะ',
  `career_detail_education_major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สาขา',
  `career_detail_education_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `career_detail_education_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `career_detail_education_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `career_detail_education_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `career_detail_education_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `career_detail_education_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_detail_education`
--

INSERT INTO `careers_detail_education` (`id`, `career_detail_main_id`, `career_detail_education_id`, `career_detail_education_faculty`, `career_detail_education_major`, `career_detail_education_at`, `career_detail_education_by`, `career_detail_education_up_at`, `career_detail_education_up_by`, `career_detail_education_del_at`, `career_detail_education_del_by`) VALUES
(1, 1, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(2, 1, 3, 'คณะวิทยาการสารสนเทศ', 'ภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(3, 1, 3, 'คณะเทคโนโลยีสารสนเทศและการสื่อสาร', 'ภาค/ สาขาวิชา วิทยาการคอมพิวเตอร์\nภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(4, 1, 3, 'วิทยาลัยศิลปะ สื่อและเทคโนโลยี', 'ภาค/ สาขาวิชา วิศวกรรมซอฟต์แวร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(5, 1, 4, NULL, 'สาขาเทคโนโลยีคอมพิวเตอร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(6, 1, 4, NULL, 'สาขางานคอมพิวเตอร์ ฮาร์ดแวร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(7, 2, 3, 'คณะเภสัชศาสตร์', 'ภาค/ สาขาวิชา เภสัชศาสตร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(8, 2, 3, 'คณะวิทยาศาสตร์', 'ภาค/ สาขาวิชา เคมี \r\nภาค/ สาขาวิชา ชีวเคมี', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(9, 2, 3, 'คณะแพทยศาสตร์', NULL, '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(10, 2, 3, 'คณะแพทย์แผนไทยประยุกต์', NULL, '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(11, 3, 2, 'คณะวิทยาศาสตร์', 'ภาค/ สาขาวิชา ธรณีวิทยาปิโตรเลียม \r\nภาค/ สาขาวิชา วิทยาแร่ \r\nภาค/ สาขาวิชา ธรณีเคมี \r\nภาค/ สาขาวิชา ธรณีฟิสิกส์ \r\nภาค/ สาขาวิชา ธรณีวิทยาเหมืองแร่ \r\nภาค/ สาขาวิชา อุทกธรณีวิทยา \r\nภาค/ สาขาวิชา ธรณีเทคนิค', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(12, 3, 2, 'คณะวิศวกรรมศาสตร์ ', 'ภาค/ สาขาวิชา วิศวกรรมธรณี\r\nภาค/ สาขาวิชา วิศวกรรมเหมืองแร่', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(13, 3, 3, 'คณะวิทยาศาสตร์', 'ภาค/ สาขาวิชา ธรณีวิทยา \nภาค/ สาขาวิชา เทคโนโลยีธรณี \nภาค/ สาขาวิชา ธรณีศาสตร์ \nภาค/ สาขาวิชา วิทยาศาสตร์พื้นพิภพ \nภาค/ สาขาวิชา วิชาเทคโนโลยีธรณี', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(14, 3, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา เหมืองแร่และปิโตรเลียม\nภาค/ สาขาวิชา วิศวกรรมธรณี', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(15, 3, 4, NULL, 'ระดับ ปวส. แผนกช่างเทคโนโลยีปิโตรเลียม วิทยาลัยเทคนิคหาดใหญ่ จ.สงขลา', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(16, 3, 4, NULL, 'ระดับ ปวส. แผนกปิโตรเคมี วิทยาลัยเทคนิคระยอง จ.ระยอง ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(17, 3, 4, NULL, 'ระดับ ปวส. สาขางานปิโตรเคมี วิทยาลัยเทคนิคมาบตาพุด จ.ระยอง', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(18, 4, 2, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา วิศวกรรมสิ่งแวดล้อม\r\nภาค/ สาขาวิชา วิศวกรรมความปลอดภัย', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(19, 4, 3, 'คณะสาธารณสุขศาสตร์', 'ภาค/ สาขาวิชา อาชีวอนามัยและความปลอดภัย \r\nภาค/ สาขาวิชา สุขศาสตร์อุตสาหกรรมและความปลอดภัย', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(20, 4, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา วิศวกรรมสิ่งแวดล้อม', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(21, 4, 3, 'คณะวิทยาศาสตร์และเทคโนโลยี', 'ภาค/ สาขาวิชา วิทยาศาสตร์สิ่งแวดล้อม', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(22, 5, 2, 'คณะวิศวกรรมและอุตสาหกรรมการเกษตร ', 'ภาค/ สาขาวิชา วิทยาศาสตร์และเทคโนโลยีการอาหาร \r\nภาค/ สาขาวิชา วิศวกรรมเกษตร \r\nภาค/ สาขาวิชา วิศวกรรมอาหาร', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(23, 5, 3, 'คณะวิทยาศาสตร์', 'ภาค/ สาขาวิชา พฤกษศาสตร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(24, 5, 3, 'คณะเกษตรศาสตร์', 'ภาค/ สาขาวิชา พืชไร่ \r\nภาค/ สาขาวิชา พืชสวน \r\nภาค/ สาขาวิชา พืชผัก', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(25, 5, 3, 'คณะอุตสาหกรรรมการเกษตร', 'ภาค/ สาขาวิชา เทคโนโลยีชีวภาพ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(26, 5, 3, 'คณะวิศวกรรม', 'ภาค/ สาขาวิชา วิศวกรรมเกษตร\r\nภาค/ สาขาวิชา วิศวกรรมเกษตรอัจฉริยะ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(27, 5, 3, 'คณะวิศวกรรมและอุตสาหกรรมการเกษตร', 'ภาค/ สาขาวิชา วิศวกรรมเกษตร \r\nภาค/ สาขาวิชา วิทยาศาสตร์และเทคโนโลยีการอาหาร \r\nภาค/ สาขาวิชา เทคโนโลยีหลังการเก็บเกี่ยว', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(28, 6, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา วิศวกรรมหุ่นยนต์และระบบอัตโนมัติ \r\nภาค/ สาขาวิชา สาขาวิศวกรรมหุ่นยนต์ \r\nภาค/ สาขาวิชา วิศวกรรมเครื่องกล \r\nภาค/ สาขาวิชา วิศวกรรมไฟฟ้า \r\nภาค/ สาขาวิชา วิศวกรรมเมคคาทรอนิกส์ \r\nภาค/ สาขาวิชา วิศวกรรมอุตสาหการ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(29, 7, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา วิศวกรรมโยธา\r\nภาค/ สาขาวิชา วิศวกรรมเครื่องกล\r\nภาค/ สาขาวิชา วิศวกรรมไฟฟ้า\r\nภาค/ สาขาวิชา วิศวกรรมขนส่งทางราง \r\nภาค/ สาขาวิชา วิศวกรรมการจัดการธุรกิจเกี่ยวเนื่องกับระบบราง \r\nภาค/ สาขาวิชา เทคโนโลยีระบบราง', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(30, 7, 4, NULL, 'โรงเรียนวิศวกรรมรถไฟ สาขาวิชาช่างเครื่องกล ช่างอาณัติสัญญาณและโทรคมนาคม ช่างโยธาและการจัดการเดินรถ\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(31, 8, 3, 'คณะวิทยาศาสตร์\r\n', 'ภาค/สาขาวิชา ฟิสิกส์ \r\nภาค/สาขาวิชา วิชาเคมี \r\nภาค/สาขาวิชา วัสดุศาสตร์ \r\nภาค/สาขาวิชา นาโนเทคโนโลยี', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(32, 8, 3, 'คณะวิศวกรรมศาสตร์ ', 'ภาค/สาขาวิชา วิศวกรรมวัสดุ \r\nภาค/สาขาวิชา วิศวกรรมเคมี\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(33, 9, 3, 'คณะเกษตรศาสตร์ทรัพยากรธรรมชาติและสิ่งแวดล้อม', 'ภาค/สาขาวิชา ภูมิศาสตร์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(34, 9, 3, 'คณะมนุษยศาสตร์ ', 'ภาค/สาขาวิชา ภูมิสารสนเทศ\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(35, 9, 3, 'คณะมนุษยศาสตร์และสังคมศาสตร์ ', 'ภาค/สาขาวิชา ภูมิศาสตร์\r\nภาค/สาขาวิชา ภูมิสารสนเทศ \r\nภาค/สาขาวิชา ภูมิสารสนเทศเพื่อการพัฒนา \r\nภาค/สาขาวิชา ภูมิศาสตร์และภูมิสารสนเทศ \r\nภาค/สาขาวิชา ภูมิศาสตร์และประวัติศาสตร์เชิงท่องเที่ยว \r\nภาค/สาขาวิชา เทคโนโลยีภูมิศาสตร์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(36, 9, 3, 'คณะวิทยาการสารสนเทศ', 'ภาค/สาขาวิชา ภูมิสารสนเทศ\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(37, 9, 3, 'คณะวิทยาศาสตร์และเทคโนโลยี ', 'ภาค/สาขาวิชา ภูมิสารสนเทศ\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(38, 9, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/สาขาวิชา วิศวกรรมสำรวจและสารสนเทศภูมิศาสตร์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(39, 9, 3, 'คณะศึกษาศาสตร์ ', 'ภาค/สาขาวิชา ภูมิศาสตร์ \r\nภาค/สาขาวิชา แผนที่และระบบสารสนเทศภูมิศาสตร์ \r\nภาค/สาขาวิชา ภูมิศาสตร์กายภาพและสิ่งแวดล้อม \r\nภาค/สาขาวิชา ภูมิศาสตร์มนุษย์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(40, 9, 3, 'คณะอักษรศาสตร์ ', 'ภาค/สาขาวิชา ภูมิศาสตร์ \r\nภาค/สาขาวิชา ภูมิศาสตร์และภูมิสารสนเทศ  \r\nภาค/สาขาวิชา ภูมิศาสตร์อุตสาหกรรม\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(41, 9, 3, 'คณะเทคโนโลยีและสิ่งแวดล้อม', 'ภาค/สาขาวิชา ภูมิสารสนเทศสิ่งแวดล้อม\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(42, 9, 3, 'คณะเทคโนโลยีอุตสาหกรรม', 'ภาค/สาขาวิชา สำรวจและภูมิสารสนเทศ\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(43, 9, 3, 'คณะเทคโนโลยีสารสนเทศและการสื่อสาร', 'ภาค/สาขาวิชา ภูมิสารสนเทศศาสตร์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(44, 9, 3, 'คณะสังคมศาสตร์', 'ภาค/สาขาวิชา ภูมิศาสตร์\r\nภาค/สาขาวิชา สาขาภูมิศาสตร์และสาขาภูมิสารสนเทศศาสตร์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(45, 9, 3, 'สำนักวิชาวิทยาศาสตร์', 'ภาค/สาขาวิชา ภูมิสารสนเทศ\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(46, 9, 3, 'สำนักวิชาสังคมศาสตร์', 'ภาค/สาขาวิชา ระบบสารสนเทศภูมิศาสตร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(47, 9, 3, 'คณะศิลปศาสตร์', 'ภาค/สาขาวิชา ภูมิศาสตร์\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(48, 9, 3, 'คณะภูมิสารสนเทศศาสตร์', 'ภาค/สาขาวิชา ภูมิศาสตร์\r\nภาค/สาขาวิชา ภูมิสารสนเทศศาสตร์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(49, 10, 1, 'คณะอุตสาหกรรมเกษตร\r\n', 'ภาค/ สาขาวิชา พัฒนาผลิตภัณฑ์อุตสาหกรรมเกษตร', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(50, 10, 2, 'คณะอุตสาหกรรมเกษตร', 'ภาค/ สาขาวิชา พัฒนาผลิตภัณฑ์และนวัตกรรม', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(51, 10, 3, 'คณะวิทยาศาสตร์', 'ภาค/ สาขาวิชา วัสดุศาสตร์ \r\nภาค/ สาขาวิชา ฟิสิกส์และวัสดุศาสตร์ \r\nภาค/ สาขาวิชา วัสดุศาสตร์และนาโนเทคโนโลยี', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(52, 10, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/ สาขาวิชา วิศวกรรมเครื่องมือและวัสดุ \r\nภาค/ สาขาวิชา วิศวกรรมวัสดุ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(53, 10, 3, 'คณะอุตสาหกรรมเกษตร', 'ภาค/ สาขาวิชา เทคโนโลยีการบรรจุและวัสดุ \r\nภาค/ สาขาวิชา พัฒนาผลิตภัณฑ์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(54, 11, 2, 'คณะวิทยาศาสตร์\r\n\r\n', 'ภาค/สาขาวิชา ชีววิทยา \r\nภาค/สาขาวิชา พฤกษศาสตร์ \r\nภาค/สาขาวิชา สัตววิทยา', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(55, 11, 2, 'คณะเกษตร', 'ภาค/สาขาวิชา สัตวศาสตร์\r\nภาค/สาขาวิชา กีฏวิทยา', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(56, 11, 3, 'คณะวิทยาศาสตร์\r\n', 'ภาค/สาขาวิชา ชีววิทยา \r\nภาค/สาขาวิชา พฤกษศาสตร์ \r\nภาค/สาขาวิชา วิทยาศาสตร์การเกษตร \r\nภาค/สาขาวิชา สัตววิทยา', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(57, 11, 3, 'คณะเกษตร', 'ภาค/สาขาวิชา สัตวศาสตร์ ภาค/สาขาวิชา กีฏวิทยา', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(58, 11, 3, 'คณะวนศาสตร์ ', 'ภาค/สาขาวิชา การจัดการสัตว์ป่าและทุ่งหญ้า \r\nภาค/สาขาวิชา วิทยาศาสตร์ชีวภาพป่าไม้ \r\nภาค/สาขาวิชา การจัดการป่าไม้', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(59, 12, 2, 'คณะวิศวกรรมศาสตร์\r\n', 'ภาค/สาขาวิชา วิศวกรรมสิ่งแวดล้อม\r\nภาค/สาขาวิชา วิศวกรรมพลังงานและทรัพยากรเพื่อความยั่งยืน นวัตวิศวกรรมเพื่อความยั่งยืน\r\n', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(60, 12, 3, 'คณะวิทยาศาสตร์', 'ภาค/สาขาวิชา เทคโนโลยีพลังงานและการจัดการ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(61, 12, 3, 'คณะวิทยาศาสตร์เทคโนโลยี\r\n', '', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(62, 12, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/สาขาวิชา วิศวกรรมเครื่องกล  \r\nภาค/สาขาวิชา วิศวกรรมอุตสาหการ\r\nภาค/สาขาวิชา วิศวกรรมสิ่งแวดล้อม  \r\nภาค/สาขาวิชา วิศวกรรมพลังงาน  \r\nภาค/สาขาวิชา วิศวกรรมเมคคาทรอนิกส์', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(63, 13, 3, 'คณะบริหารธุรกิจ \r\nภาค/สาขาวิชา การตลาดดิจิทัล\r\nภาค/สาขาวิชา การตลาดดิจิทัล และนวัตกรรมค้าปลีก ', '', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(64, 13, 3, 'คณะการตลาดดิจิทัล', 'ภาค/สาขาวิชา การตลาด\r\nภาค/สาขาวิชา การตลาดดิจิทัล ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(65, 13, 3, 'คณะพาณิชยศาสตร์และการบัญชี\r\n', 'ภาค/สาขาวิชา การตลาด', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(66, 13, 3, 'คณะวิทยาการจัดการ ', 'ภาค/สาขาวิชา การตลาด', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(67, 13, 3, 'คณะะนิเทศศาสตร์ ', 'ภาค/สาขาวิชา สื่อสารการตลาด \r\nภาค/สาขาวิชา การประชาสัมพันธ์และสื่อสารการตลาด', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(68, 14, 2, NULL, 'หลักสูตรการดูแลผู้สูงอายุขั้นกลาง (CG) (70 ชั่วโมง)\r\nหลักสูตรการดูแลผู้สูงอายุขั้นสูง (CG) (420 ชั่วโมง)', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(69, 15, 3, 'คณะวิทยาศาสตร์/คณะวิทยาศาสตร์และเทคโนโลยี ', 'ภาค/สาขาวิชา วิทยาศาสตร์สิ่งแวดล้อม', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(70, 15, 3, 'คณะสิ่งแวดล้อม', 'ภาค/สาขาวิชา วิทยาศาสตร์สิ่งแวดล้อม', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(71, 15, 3, 'คณะวิศวกรรมศาสตร์', 'ภาค/สาขาวิชา วิศวกรรมสิ่งแวดล้อม', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(72, 16, 3, 'คณะคหกรรมศาสตร์', 'ภาค/ สาขาวิชา อาหารและโภชนาการ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(73, 16, 3, 'คณะเทคโนโลยีคหกรรมศาสตร์', 'ภาค/ สาขาวิชา อาหารและโภชนาการ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(74, 16, 3, 'คณะวิทยาศาสตร์', 'ภาค/ สาขาวิชา การกำหนดอาหารและโภชนบำบัด\r\nภาค/ สาขาวิชา วิทยาศาสตร์และเทคโนโลยีอาหาร', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(75, 16, 3, 'คณะวิทยาศาสตร์และเทคโนโลยี', 'ภาค/ สาขาวิชา เทคโนโลยีอาหาร  \r\nภาค/ สาขาวิชา โภชนศาสตร์และการกำหนดอาหาร  \r\nภาค/ สาขาวิชา เทคโนโลยีการประกอบอาหารและการบริการ', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(76, 16, 3, 'คณะเกษตร', 'ภาค/ สาขาวิชา อาหารและโภชนาการ\r\nภาค/ สาขาวิชา วิทยาศาสตร์และเทคโนโลยีอาหาร', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(77, 16, 3, 'คณะเทคโนโลยีการเกษตร', 'ภาค/ สาขาวิชา เทคโนโลยีการอาหาร', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL),
(78, 16, 3, 'คณะสหเวชศาสตร์', 'ภาค/ สาขาวิชา โภชนาการบำบัดและการกำหนดอาหาร', '2023-03-23 10:25:51', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers_detail_main`
--

DROP TABLE IF EXISTS `careers_detail_main`;
CREATE TABLE IF NOT EXISTS `careers_detail_main` (
  `career_detail_main_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสดีเทลหลัก',
  `category_career_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสหมวดหมู่อาชีพ',
  `career_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสอาชีพ',
  `career_detail_salary` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'เงินเดือน',
  `career_detail_job_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'ลักษณะงาน',
  `career_detail_tools` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'ทำงานเกี่ยวข้องกับเครื่องมืออะไรบ้าง',
  `career_detail_hard_skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Hard skills',
  `career_detail_soft_skills` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Soft skills',
  `career_detail_characteristic` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'คุณลักษณะนิสัยส่วนบุคคล',
  `career_detail_work_together` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'สาขาอาชีพอื่นๆ ที่ต้องทำงานร่วม',
  `career_detail_progress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'ความก้าวหน้าในสายงาน',
  `career_detail_vdo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'vdo',
  `career_detail_character` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Character',
  `career_detail_visual_note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Visual_Note',
  `career_detail_cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Cover',
  `career_detail_main_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `career_detail_main_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `career_detail_main_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `career_detail_main_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `career_detail_main_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `career_detail_main_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`career_detail_main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_detail_main`
--

INSERT INTO `careers_detail_main` (`career_detail_main_id`, `category_career_id`, `career_id`, `career_detail_salary`, `career_detail_job_description`, `career_detail_tools`, `career_detail_hard_skills`, `career_detail_soft_skills`, `career_detail_characteristic`, `career_detail_work_together`, `career_detail_progress`, `career_detail_vdo`, `career_detail_character`, `career_detail_visual_note`, `career_detail_cover`, `career_detail_main_at`, `career_detail_main_by`, `career_detail_main_up_at`, `career_detail_main_up_by`, `career_detail_main_del_at`, `career_detail_main_del_by`) VALUES
(1, 1, 3, 'เริ่มเดือนอยู่ระหว่าง 25,000 – 150,000 บาท ขึ้นอยู่กับประสบการณ์', 'เป็นผู้วิเคราะห์ วิจัย ออกแบบ ดูแลแก้ไขโปรแกรม เพื่อนำไปใช้ประโยชน์ในด้านต่างๆ และตอบสนองความต้องการของตลาด เนื่องจากทุกหน่วยงานจะต้องนำเทคโนโลยีใหม่ ๆ มาพัฒนาองค์กรให้มีความทันสมัย จึงจะสามารถแข่งขันกับผู้อื่นได้ รัฐบาลและหน่วยงานที่เกี่ยวข้องจึงได้ทำการส่งเสริมด้านต่าง ๆ เช่น ในด้านการศึกษา ซึ่งก่อให้เกิดหลักสูตรด้านซอฟต์แวร์เปิดทำการสอนในมหาวิทยาลัย และสถาบันต่าง ๆ และส่งเสริมผู้ประกอบการให้สามารถดำเนินการด้านอุตสาหกรรมซอฟต์แวร์นี้โดยได้รับสิทธิพิเศษทางภาษี เพื่อตอบสนอง ความต้องการของตลาด', 'คอมพิวเตอร์ | โปรแกรมสำหรับพัฒนาซอฟต์แวร์ต่าง ๆ เช่น ภาษา C, Phyton, JAVA', 'เชี่ยวชาญด้านวิศวกรรมคอมพิวเตอร์ |ชอบการคำนวณ คิดค้น วิเคราะห์ สังเคราะห์ สถิติ และตัวเลข (ตรรกะและคณิตศาสตร์ - การคิดคำนวณทางคณิตศาสตร์) | สนใจเทคโนโลยีใหม่ ๆ ทางด้านซอฟต์แวร์ | สามารถประยุกต์ใช้เทคโนโลยีกับองค์กร และสามารถทดสอบซอฟต์แวร์โดยกรรมวิธีมาตรฐานได้', 'ช่างสังเกต และชอบตั้งคำถาม | ชอบติดตามข่าวสาร และเทคโนโลยีใหม่ ๆ |ไม่เกี่ยงในการเลือกใช้เครื่องมือ | ไม่กลัวความผิดพลาด | ไม่ย่อท้อต่ออุปสรรค | สามารถแจกแจงรายละเอียดงาน จัดการกับระบบงานที่สลับซับซ้อนได้ | ขยัน อดทน และมีความพยายาม | มีความคิดริเริ่มสร้างสรรค์ ชอบดัดแปลง รักความก้าวหน้า และสนุกกับการทำงานที่ท้าทาย\r\n', 'ชอบการคำนวณ คิดค้น วิเคราะห์ สังเคราะห์ สถิติ และตัวเลข | สนใจเทคโนโลยีใหม่ๆ ทางด้านซอฟต์แวร์ เนื่องจากจะต้องนำเทคโนโลยีใหม่ๆ มาเพื่อพัฒนาออกแบบซอฟต์แวร์ให้ดีขึ้นเรื่อยๆ เพื่อนำมาใช้ในระบบการควบคุมการทำงานของคอมพิวเตอร์ และโปรแกรมปฏิบัติการต่างๆ | สามารถประยุกต์ใช้เทคโนโลยีกับองค์กรและสามารถทดสอบซอฟต์แวร์โดยกรรมวิธีมาตรฐานได้  | สามารถแจกแจงรายละเอียดงาน จัดการกับระบบงานที่สลับซับซ้อนได้ | ขยัน อดทน และมีความพยายาม | มีความคิดริเริ่มสร้างสรรค์ ชอบดัดแปลง รักความก้าวหน้า และสนุกกับการทำงานที่ ท้าทาย\r\n', 'นักพัฒนาหุ่นยนต์และระบบอัตโนมัติ | วิศวกรซอฟต์แวร์ | วิศวกรเครื่องกล | นักพัฒนาระบบ', 'สามารถพัฒนาความรู้ ทักษะ ความสามารถในการทำงานด้านพัฒนาซอฟต์แวร์ เพื่อก้าวสู่การเป็นหัวหน้าทีมในการพัฒนาซอฟต์แวร์ และจะได้รับเงินเดือนที่สูงขึ้น', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/01.นักพัฒนาซอฟต์แวร์.png', 'image/careerdetail/visual_note/01.นักพัฒนาซอฟต์แวร์.jpg', 'image/careerdetail/cover/01.นักพัฒนาซอฟต์แวร์.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(2, 4, 20, 'เดือนละ 28,000 - 35,000 บาท (บริษัทเอกชน) | เดือนละ 17,500 – 22,000 บาท (รัฐบาล)', 'ค้นคว้าพัฒนาสูตรยาตำหรับใหม่ ๆ โดยใช้แนวคิดและทฤษฎีด้านเภสัชศาสตร์และวิทยาศาสตร์เคมีมาประยุกต์ใช้ รวมถึงควบคุมการผลิตยาให้ได้คุณภาพตามขั้นตอนและมาตรฐานที่กำหนด', 'ไมโครปิเปต | เครื่องชั่ง |เครื่องอัดเม็ดยา | เครื่องผสมสาร', 'มีความรู้ในด้านสรรพคุณ และกระบวนการผลิตยา | มีความรู้ทางด้านเคมี หรือเคมีอินทรีย์ | มีความรู้ด้านกายวิภาค ภูมิคุ้มกันของร่างกาย | การใช้อุปกรณ์และเครื่องมือทางวิทยาศาสตร์', '(หมั่นหาความรู้รอบด้าน) การใฝ่ศึกษาหาข้อมูลเกี่ยวกับยาที่จะใช้รักษาผู้ป่วย | (คิดสร้างสรรค์) มีความคิดสร้างสรรค์ | (รับผิดชอบหน้าที่) มีความรับผิดชอบต่อหน้าที่ | ความเที่ยงตรงและจรรยาบรรณในอาชีพ | มีความเชื่อมั่นในตนเอง กล้าตัดสินใจ', 'ละเอียด | รอบคอบ | สนใจในวิชาวิทยาศาสตร์ เคมี ชีววิทยา | ชอบการค้นคว้าทดลอง', 'นักวิจัยและพัฒนา | อาจารย์มหาวิทยาลัย | เจ้าหน้าที่ห้องปฏิบัติการประจำแผนกห้องทดสอบยาหรือผลิตภัณฑ์เกี่ยวกับยาของบริษัทเอกชน', 'การเลื่อนลำดับขั้นในสายงานและเงินเดือน ขึ้นอยู่กับประสบการณ์การทำงาน หรือผลงานการวิจัย', 'https://www.youtube.com/embed/FPYw64zcIGM', 'image/careerdetail/character/02.นักคิดค้นยา.png', 'image/careerdetail/visual_note/02.นักคิดค้นยา.jpg', 'image/careerdetail/cover/02.นักคิดค้นยา.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(3, 2, 8, '15,000-50,000++ บาท/เดือน ขึ้นกับวุฒิการศึกษา และประสบการณ์การทำงานในสายอาชีพ', 'นักธรณีวิทยาปิโตรเลียม เป็นบุคลากรสำคัญในการสำรวจ ผลิตและพัฒนาแหล่งกักเก็บปิโตรเลียมใต้พื้นพิภพ ซึ่งเป็นทรัพยากรธรรมชาติที่มีความสำคัญอย่างมากต่อการพัฒนาประเทศ โดยอาศัยความรู้จากสาขาธรณีวิทยาที่มุ่งเน้นการศึกษาองค์ประกอบโครงสร้างและกระบวนการตามธรรมชาติของโลก โดยเฉพาะทรัพยากรธรณี อันได้แก่ หิน น้ำบาดาล และเชื้อเพลิงธรรมชาติ', 'แผนที่ | ค้อนธรณี | GPS | กล้องถ่ายภาพ | นาฬิกาจับเวลา | เข็มทิศมีลูกน้ำวัดระดับ บรรจุในก้านเจาะชนิดพิเศษที่ป้องกันสนามแม่เหล็ก (Nonmagnetic Drill Collar) | ท่อกันดิน (Conductor pipe) | ท่อกรุพื้นผิว (Surface Casing) | ท่อกรุชั้นกลาง (Intermediate Casing) | หัวเจาะแบบพิเศษ Hole Opener | เครื่องป้องกันการพลุ่ง (Blowout Preventer: BOP) | Downhole Mud Motor', 'สามารถแจกแจงและตรวจสอบชนิดของหินได้ | ศึกษาข้อมูลภาพถ่ายดาวเทียม ภาพถ่ายทางอากาศ | สำรวจและจัดทำแผนที่ธรณีวิทยา แผนที่ | โครงสร้างและแหล่งปิโตรเลียม | วิเคราะห์ข้อมูลที่เก็บได้จากการศึกษาค่าความไหวสะเทือน (Seismic) | ใช้เครื่องมือเพื่อตรวจวัดค่าควา,โน้มถ่วงของโลก และค่าความเข้มสนามแม่เหล็กได้', 'การคิดเชิงวิจารณ์ การคิดแบบมีหลักการเป็นเหตุเป็นผลเพื่อสามารถหาวิธีแก้ไขปัญหาได้อย่างดีที่สุด สามารถหาข้อสรุปของวิธีการแก้ปัญหาอย่างมีหลักที่ชัดเจน ถูกต้อง และชัดเจน สามารถเชื่อมโยงและเห็นถึงความเป็นจริงได้ได้ | ทักษะด้าน Technology: คือการนำเทคโนโลยีมาใช้ในองค์กร | ทักษะด้าน Digital Literacy : การเข้าใจเกี่ยวกับจริยธรรมในการใช้งานเทคโนโลยี และการนำข้อมูลมาวิเคราะห์ ทักษะความเข้าใจและการใช้เทคโนโลยีในยุคดิจิทัลที่มีอยู่ในปัจจุบัน | ทักษะด้าน Leadership : การมีภาวะผู้นำ มีความสามารถในการนำทีม สามารถแบกความรับผิดชอบของงานและลูกน้องในทีมได้ คอยชี้แนะให้คำแนะนำและสั่งการผู้อื่นได้ และในขณะเดียวกันก็สามารถสร้างแรงบันดาลใจและมอบพลังให้กับคนในทีมให้พร้อมที่จะมุ่งมั่นและทุ่มเทในการทำงาน | ทักษะด้าน Self-Management : การจัดการตนเองที่มีประสิทธิภาพ | ทักษะด้าน Interpersonal Skills : หนึ่งใน Soft skills ที่สำคัญมีความจำเป็นต่อการทำงานอีกอย่างหนึ่ง เป็นทักษะในการมีปฏิสัมพันธ์ ต่อเพื่อนร่วมงาน', 'ช่างสังเกต | ละเอียด | รอบคอบ | ช่างซักถาม | รอบรู้ | และมีทัศนะคติที่ดี', 'ธรณีฟิสิกส์ | นักธรณีวิทยา | นักวิศวกรรมปิโตรเลียม | นักเศรษฐศาสตร์ปิโตรเลียม', 'การเลื่อนลำดับขั้นในสายงานและเงินเดือน ขึ้นอยู่กับประสบการณ์การทำงาน', 'https://www.youtube.com/embed/tGBe2GRQPo4', 'image/careerdetail/character/03.นักธรณีวิทยาปิโตรเลียม.png', 'image/careerdetail/visual_note/03.นักธรณีวิทยาปิโตรเลียม.jpg', 'image/careerdetail/cover/03.นักธรณีวิทยาปิโตรเลียม.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(4, 8, 49, 'เริ่มต้น 15,000 - 30,000 ขึ้นอยู่กับความสามารถและประสบการณ์ และความเสี่ยงของหน้างาน', 'ผู้เชี่ยวชาญด้านสุขภาพ สิ่งแวดล้อม และความปลอดภัย ดูแลด้านอาชีวอนามัยและความปลอดภัยของผู้ปฏิบัติงาน เพื่อให้ผู้ปฏิบัติงานสามารถ ปฏิบัติงานได้อย่างมีประสิทธิผล เสนอแนะแนวทางการแก้ไขปัญหาอุปสรรคต่าง ๆ ที่เกิดขึ้นระหว่างการทำงาน เช่น สวมหน้ากากเพื่อป้องกันฝุ่นควัน ใส่ที่ครอบหูเพื่อลดเสียงหรือใส่ถุงมือป้องกันอันตรายจากการใช้เครื่องมือต่าง ๆ รวมไปถึงการบรรเทา ป้องกันและแก้ไขผลกระทบต่อสิ่งแวดล้อม เช่น ระบบบำบัดน้ำเสีย จัดการแหล่งกำเนิดฝุ่นละอองและกำจัดของเสียอันตราย เป็นต้น', 'เครื่องตรวจวัดน้ำ เช่น เครื่องกักเก็บน้ำ Grap เครื่องวัด pH เครื่องวัด DO | เครื่องตรวจวัดอากาศ เช่น ปั๊มดูดอากาศ Tube เก็บตัวอย่าง | อุปกรณ์วัดความดังเสียง เช่น เครื่องวัดความดังเสียง (Sound Level Meter) High volume air sampler | อุปกรณ์วัดจุดความร้อน เช่น เครื่องวัดความร้อน (Heat Stress Monitor WBGT) | เครื่องมือ หรืออุปกรณ์ป้องกันความปลอดภัย หมวกนิรภัย ชุดนิรภัยส่วนบุคคล', 'มีความรู้เกี่ยวกับวิชาการด้านสิ่งแวดล้อม และระบบมาตรฐานต่างๆ และกฎหมายที่เกี่ยวข้อง | มีความรู้ความสามารถในการใช้ภาษาอย่างเหมาะสมในการปฏิบัติหน้าที่ | มีความสามารถในการศึกษาข้อมูล วิเคราะห์ปัญหา และสรุปเหตุผล | มีความสามารถในการเป็นผู้นำและผู้เป็นผู้ตามที่ดี |  มีความรับผิดชอบ/มีความคล่องตัวในการทำงาน | มีความรอบครอบและมีความคาดการณ์ถึงผลกระทบต่าง ๆ ที่อาจจะเกิดขึ้น', '(มีวิจารณญาณ) มีเหตุผลในการแก้ไขปัญหาและรู้จักประนีประนอม | (รู้จักเข้าสังคม) มีมนุษยสัมพันธ์ดี | (มีความเป็นผู้นำ) การรับฟังและเข้าใจปัญหาของผู้ปฏิบัติงาน\r\n', 'ปรับตัวเข้ากับคนอื่นได้ง่าย | รับฟังความคิดเห็นของผู้อื่น | มีมนุษยสัมพันธ์ดี | เป็นคนมีเหตุผล | รู้จักการประนีประนอม | รักธรรมชาติ | สามารถแก้ไข และคาดคะเนผลกระทบที่มีต่อสิ่งแวดล้อมได้\r\n', 'พนักงานปฏิบัติงาน | เจ้าหน้าที่จากหน่วยงานภายนอกต่าง ๆ | นักอาชีวสุขศาสตร์ ทำหน้าที่สืบค้นตรวจประเมินเพื่อควบคุมสิ่งแวดล้อมการทำงาน | นักวิทยาศาสตร์อาชีวอนามัยและความปลอดภัย | วิศวกรความปลอดภัย | นักการยศาสตร์ มีหน้าที่ตรวจสภาพการทำงานและสิ่งแวดล้อมการทำงานเพื่อประเมิน ป้องกัน และควบคุมอุบัติเหตุ | แพทย์อาชีวอนามัย/ พยาบาลอาชีวอนามัย | งานเวชกรรมฟื้นฟู ประกอบด้วย แพทย์เฉพาะสาขา นักกายภาพบำบัด นักวิจัยอุตสาหกรรม\r\n', 'ผู้ประกอบอาชีพนี้อาจเริ่มจากระดับผู้ปฏิบัติงาน เมื่อมีประสบการณ์และศึกษาเพิ่มเติมจะได้รับการเลื่อนตำแหน่งไปตามลำดับจนถึงระดับหัวหน้าหรือผู้อำนวยการในภาคเอกชน ผู้ที่มีความสามารถจะได้รับการเลื่อนตำแหน่งจนถึงระดับผู้จัดการ ที่ปรึกษา และผู้อำนวยการ ขึ้นอยู่กับโครงสร้างการบริหารขององค์กร ผู้ที่มีประสบการณ์ในระบบการบริหารจัดการสิ่งแวดล้อม และการเป็นผู้ตรวจสอบระบบการจัดการสิ่งแวดล้อมตามมาตรฐานสิ่งแวดล้อม สามารถเปลี่ยนงานไปประกอบอาชีพอื่นได้ หรือปฏิบัติงานในสถานประกอบการอื่น ๆ ที่ต้องการบุคคลที่มีประสบการณ์ทางด้านนี้ เช่น วิทยากรหรือผู้อบรมระบบการบริหารจัดการด้านสิ่งแวดล้อม\r\n', 'https://www.youtube.com/embed/QPTWMJSPLLc', 'image/careerdetail/character/04.ผู้เชี่ยวชาญด้านสุขภาพสิ่งแวดล้อม และความปลอดภัย.png', 'image/careerdetail/visual_note/04.ผู้เชี่ยวชาญด้านสุขภาพสิ่งแวดล้อม และความปลอดภัย.jpg', 'image/careerdetail/cover/04.ผู้เชี่ยวชาญด้านสุขภาพสิ่งแวดล้อม และความปลอดภัย.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(5, 3, 13, '15,000-30,000 บาท สำหรับเจ้าของธุรกิจขึ้นอยู่กับผลประกอบการของบริษัท', 'ประยุกต์ใช้ความรู้วิทยาศาสตร์และเทคโนโลยีมาทำการเกษตร เช่น การใช้เซ็นเซอร์ตรวจวัดผลผลิตและความอุดมสมบูรณ์ของดิน ทำให้ได้ผลผลิตที่มีคุณภาพ ลดต้นทุน และเพิ่มความปลอดภัยต่อผู้บริโภครวมทั้งรู้จักวางแผนการผลิตให้สอดคล้องกับความต้องการของตลาด ออกแบบระบบปลูกพืชให้เหมาะสมนำไปสู่การทำเกษตรแบบยั่งยืนในอนาคต\n', 'โดรนเพื่อการเกษตร | ระบบน้ำอัจฉริยะ | ระบบ senser | ระบบไฟฟ้า | เครื่องวัดความชื้นในดิน | เครื่องวัดอุณหภูมิ | เครื่องวัดความเป็นกรด - เบส ในดิน | รถไถ | เครื่องเก็บเกี่ยวผลผลิตอัตโนมัติ | เครื่องมือเกษตรกรรมทั่วไป\n', 'การออกแบบระบบฟาร์ม | การเกษตร | ปุ๋ย ยา ธาตุอาหาร | ทักษะการบริหารการเพาะปลูก\n', '(แก้ปัญหาเป็น) การแก้ไขปัญหา | (ฉลาดสื่อสาร) ศิลปะในการพูด การเจรจา | (รู้จักเข้าสังคม) การสร้างเครือข่าย\n', 'อดทน | ละเอียดรอบคอบ | กล้าตัดสินใจ | มีความเด็ดขาด | ซื่อสัตย์ต่อผู้บริโภค\n', NULL, 'ผู้ปฏิบัติงาน: มีสวัสดิการ รางวัลแรงจูงใจในการทำงาน มีการเลื่อนตำแหน่งตามสายงาน | เจ้าของกิจการ: สามารถยกระดับโรงงานผลิตพืช (plant factory) ของไทยสู่ระดับสากล โดยใช้ข้อได้เปรียบทางธุรกิจคือ ใช้ระบบ robot 100 % และมีราคาที่ถูกกว่า\n', 'https://www.youtube.com/embed/ki88BO6ATEI\n', 'image/careerdetail/character/05.เกษตรกรยุคใหม่.png', 'image/careerdetail/visual_note/05.เกษตรกรยุคใหม่.jpg', 'image/careerdetail/cover/05.เกษตรกรยุคใหม่.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(6, 5, 32, 'เงินเดือนอยู่ในช่วงเริ่มต้น 25,000 บาท – 40,000 บาท', 'สร้างสรรค์ คิดค้น พัฒนานวัตกรรมหุ่นยนต์ และเทคโนโลยีระบบอัตโนมัติ ด้วยความรู้ด้านกลศาสตร์ไฟฟ้าบูรณาการร่วมกับความรู้ด้านคอมพิวเตอร์ เพื่อส่งเสริมศักยภาพให้อุตสาหกรรมด้านต่าง ๆ อาทิ การผลิตสินค้า การคมนาคม การแพทย์ หรือการศึกษา ซึ่งจะช่วยอำนวยความสะดวกให้กับมนุษย์มากขึ้น\n', 'หุ่นยนต์อุตสาหกรรม (Industrial Robot) | หุ่นยนต์ควบคุมระยะไกล (Mobile Robot (AGV)) | คอมพิวเตอร์ (Computer Notebook) | เครื่องมือวัดทางไฟฟ้า (Electrical Measuring Instrument) | เครื่องมืออุปกรณ์อิเล็กทรอนิกส์ (Electronic Tool) | เครื่องจักรกล (Machine Tool) | โปรแกรมควบคุมการทำงานของหุ่นยนต\n', 'ทักษะพื้นฐานทางด้านงานวิศวกรรม (Basic Engineer) | ความรู้ด้านการออกแบบคำนวนและวิเคราะห์วงจรไฟฟ้า วงจรการจ่ายกำลังไฟฟ้า (Electrical) | ความรู้เรื่องการใช้งานอุปกรณ์ เช่น การควบคุมมอเตอร์ การใช้งานเซนเซอร์อุตสาหกรรม ระบบควบคุมอัตโนมัติ การเขียนโปรแกรมคอมพิวเตอร์ (Automation)\n', 'ทักษะสารสนเทศ สื่อ เทคโนโลยี - (ฉลาดสื่อสาร) ทักษะการสื่อสารภายในองค์กร | ทักษะชีวิตและอาชีพ (รู้จักเข้าสังคม) ทักษะการร่วมงานกับผู้อื่น ความสามัคคี | ทักษะการเขียนรายงาน\n', 'มีความรอบคอบ | มีความรับผิดชอบ | ชอบเรียนรู้สิ่งใหม่ ๆ\n', 'วิศวกรฝ่ายขาย (Sale Engineer) | วิศวกรการผลิต (Manufacturing Engineering) | วิศวกรไฟฟ้า (Electrical Engineer) | วิศวกรคอมพิวเตอร์ (Computer Engineer) | โปรแกรมเมอร์ (programmer) | นักวัสดุศาสตร์ (Materials Science)\n', 'ความก้าวหน้าในสายงาน คือประสบการณ์ และผลงานที่เป็นเครื่องการันตีความสามารถซึ่งช่วยส่งเสริมให้ได้รับผลตอบแทนที่สูงขึ้น\n', 'https://www.youtube.com/embed/ZXJM2RUBwxA', 'image/careerdetail/character/06.วิศวกรหุ่นยนต์และระบบอัตโนมัติ.png', 'image/careerdetail/visual_note/06.วิศวกรหุ่นยนต์และระบบอัตโนมัติ.jpg', 'image/careerdetail/cover/06.วิศวกรหุ่นยนต์และระบบอัตโนมัติ.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(7, 5, 31, 'เดือนละ 35,000 - 50,000 บาท (บริษัทเอกชน) | เดือนละ 15,500 – 30,000 บาท (รัฐบาล)', 'ออกแบบ ก่อสร้างและซ่อมบำรุงโครงสร้างพื้นฐานทางราง การซ่อม-สร้างรถจักรรถพ่วง ระบบรับส่งกระแสไฟฟ้า ระบบอาณัติสัญญาณและโทรคมนาคม รวมถึงงานปฏิบัติการวางแผนและควบคุมการเดินขบวนรถเพื่อพัฒนาระบบขนส่งทางรางให้มีประสิทธิภาพ\n', 'อุปกรณ์เขียนแบบ | เครื่องมือตรวจสอบและดูแลรักษาระบบราง\n', 'ฟิสิกส์ คณิตศาสตร์ | ระบบการขนส่ง (logistics) ภูมิศาสตร์ | โทรคมนาคม | เทคโนโลยีระบบราง | วิศวกรรมโยธา | วิศวกรรมเครื่องกล |  วิศกรรมไฟฟ้า | ความรู้ด้านการออกแบบ\n', 'คิดสร้างสรรค์ | มีวิจารณญาณ | แก้ปัญหาเป็น | สื่อสารดี | (รู้จักเข้าสังคม) การมีมนุษยสัมพันธ์ที่ดี\n', 'รอบคอบ |  เป็นนักคิดและวางแผน | มีความรับผิดชอบ\n', 'วิศวกรโยธา | วิศวกรจราจร | วิศวกรโลจิสติกส์ | นักวัสดุศาสตร์ | ผู้รับเหมาก่อสร้าง\n', NULL, 'https://www.youtube.com/embed/ZXJM2RUBwxA\n', 'image/careerdetail/character/07.วิศวกรระบบราง.png', 'image/careerdetail/visual_note/07.วิศวกรระบบราง.jpg', 'image/careerdetail/cover/07.วิศวกรระบบราง.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(8, 6, 33, 'เริ่มต้นประมาณ 20,000 - 40,000 บาท', 'คิดค้นและประยุกต์ใช้นาโนเทคโนโลยีในการพัฒนาวัสดุและผลิตภัณฑ์ ช่วยให้เกิดนวัตกรรมทางวิทยาศาสตร์ และเทคโนโลยีใหม่ ๆ เกิดขึ้น นอกจากนั้นยังยกระดับคุณภาพชีวิตของคนในปัจจุบันให้มีคุณภาพที่ดีขึ้น ตลอดจนเพิ่มขีดความสามารถของอุตสาหกรรมไทยให้ทัดเทียมอารยประเทศ\n', 'เครื่องมือที่ใช้เตรียมชิ้นงานทางวิทยาศาสตร์ เช่น Electro-polisher เครื่องมือที่ใช้สำหรับการเตรียมชิ้นงานประเภทโลหะ, Ultra-microtome เครื่องมือที่ใช้สำหรับการเตรียมชิ้นงานประเภทโพลิเมอร์, Precision Ion Polishing System (PIPS) เครื่องมือที่ใช้สำหรับการเตรียมชิ้นงานประเภทเซรามิกซ์ | เครื่องมือที่ใช้ตรวจสอบหรือทดสอบชิ้นงาน ใช้ในการดูภาพของวัสดุ ได้แก่ กล้องจุลทรรศน์แบบแสง (Optical Microscopy, OM), กล้องจุลทรรศน์อิเล็กตรอนแบบส่องกราด (Scanning Electron Microscopy: SEM), กล้องจุลทรรศน์แบบแรงอะตอม (Atomic Force Microscopy: AFM), กล้องจุลทรรศน์อิเล็กตรอนแบบส่องผ่าน (Transmission Electron Microscopy: TEM), เครื่องวิเคราะห์การเลี้ยวเบนของรังสีเอ็กซ์ (X-Ray Diffractometer: XRD), เครื่องวัดการวาวแสงสารละลายเคมี (Fluorescence Spectrophotometer), เครื่องมือทดสอบคุณสมบัติทางกลทั่วไป เช่น ค่ามอดูลัส ความแข็งแรง ความเค้นและความเครียด\n', 'มีความรู้เกี่ยวกับวัสดุนาโนเป็นอย่างดี | มีความชำนาญในการใช้เครื่องมือหรืออุปกรณ์ในการทำวิจัย | มีทักษะการวิเคราะห์การตีความ หรือการสรุปผลที่แม่นยำถูกต้อง\n', '(รับผิดชอบหน้าที่) มีความรับผิดชอบต่อการทำงานวิจัย | (รับผิดชอบหน้าที่) มีความซื่อสัตย์ต่อผลงานของตนเอง | เคารพความคิดเห็นทางวิชาการของผู้อื่น | มีความรอบคอบ ระมัดระวัง\n', 'มุ่งมั่นในเป้าหมาย | อดทนในการทำงานวิจัย | รักในการทดลอง | ละเอียดรอบคอบ | ช่างสังเกต\n', 'นักวิทยาศาสตร์สาขาอื่น ๆ | วิศวกร | นักออกแบบผลิตภัณฑ์ | เจ้าของธุรกิจ/ผู้ประกอบการโรงงาน\n', 'การวิจัยและพัฒนาคุณสมบัติของวัสดุให้ดีขึ้น หรือการนำเสนอผลงานทางวิชาการเพื่อให้เกิดการสร้างสรรค์นวัตกรรมใหม่ ๆ ถือเป็นความก้าวหน้าทางสายงานของนักวิจัยวัสดุนาโน ในการเพิ่มค่าตอบแทนและเพิ่มโอกาสร่วมงานกับบริษัทอุตสาหกรรมที่สนใจในตัวชิ้นงานหรือวัสดุนั้น ๆ\n', 'https://www.youtube.com/embed/7d6a-TASnnI\n', 'image/careerdetail/character/08.นักวิจัยวัสดุนาโน.png', 'image/careerdetail/visual_note/08.นักวิจัยวัสดุนาโน.jpg', 'image/careerdetail/cover/08.นักวิจัยวัสดุนาโน.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(9, 7, 41, 'เริ่มต้นเดือนละ 18,000-50,000 บาท ขึ้นอยู่กับประสบการณ์', 'วิศวกรภูมิศาสตร์สารสนเทศ ทำงานเกี่ยวข้องกับการสำรวจ บันทึก ประมวลผล วิเคราะห์และประมวลผล การใช้งานสารสนเทศที่เกี่ยวข้องกับตำแหน่ง ไม่ว่าจะเป็นเชิงภูมิศาสตร์ที่เกิดขึ้นบนผิวโลก อวกาศและใต้ดิน เพื่อให้เข้าใจลักษณะแบบจำลองของปรากฏการณ์ทางกายภาพต่าง ๆ แล้วนำข้อมูลที่มีความถูกต้องไปใช้ประโยชน์ในการวางแผนเพื่อพัฒนาโครงการต่าง ๆ\n', 'ดิจิไทเซอร์ (Digitizer) | เครื่องกราดภาพ (Scanner) | กล้องวัดระดับ | อุปกรณ์วัดระยะทาง | เครื่องวัดระดับแบบใช้ลำแสง (Optical Level) | กล้องวัดมุม (Theodolite) | กล้องประมวลผลรวม (Total Station) | เครื่อง ASD HandHeld 2 | การรับรู้ระยะไกล (Remote Sensing: RS) | ระบบสารสนเทศภูมิศาสตร์ (Geographic Information System: GIS) | ระบบการกำหนดตำแหน่งบนพื้นโลกด้วยดาวเทียม (Global Positioning Systems: GPS) | GNSS (Global Navigation Satellite System) คือ ระบบนำทางด้วยดาวเทียม\n', 'อ่านและทำแผนที่ | การใช้โปรแกรมระบบสารสนเทศภูมิศาสตร์ | การตีความระบุตำแหน่งที่ตั้ง | การเก็บข้อมูลเชิงภูมิศาสตร์ | การอ่านแปลน | การเขียนแบบ | การใช้กล้องสำรวจ | คณิตศาสตร์ | การตีความภาพถ่ายทางอากาศ\n', '(แก้ปัญหาเป็น) การแก้ปัญหา | ใส่ใจนวัตกรรม | มีวิจารณญาณ | (สื่อสารดี) การสื่อสาร | มีความคิดสร้างสรรค์ | รอบรู้เทคโนโลยีสารสนเทศ | รับผิดชอบหน้าที่ | หมั่นหาความรู้รอบด้าน | ริเริ่มสิ่งใหม่ | รู้จักปรับตัว\n', 'ละเอียดรอบคอบ แม่นยำ | ชอบการสำรวจ | ชอบค้นคว้า | มีมนุษยสัมพันธ์ที่ดีทำงานร่วมกับผู้อื่นได้\n', 'วิศวกรโยธา | สถาปนิก | นักธรณีวิทยา | ทหาร  | เจ้าหน้าที่การไฟฟ้า | ประปา | สำนักงานจัดการภัยพิบัติแห่งชาติ\n', 'การเลื่อนลำดับขั้นในสายงานและเงินเดือน ขึ้นอยู่กับประสบการณ์การทำงาน โครงสร้างของบริษัทและการขยายตัวของกลุ่มธุรกิจ\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/09.วิศวกรภูมิศาสตร์สารสนเทศ.png', 'image/careerdetail/visual_note/09.วิศวกรภูมิศาสตร์สารสนเทศ.jpg', 'image/careerdetail/cover/09.วิศวกรภูมิศาสตร์สารสนเทศ.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(10, 6, 34, 'เดือนละ 28,000 - 35,000 บาท (บริษัทเอกชน) | เดือนละ 15,500 – 21,000 บาท (รัฐบาล)', 'นักสร้างสรรค์ผลิตภัณฑ์จากขยะ ทำหน้าที่เปลี่ยนขยะมูลฝอยจำนวนมากให้กลายเป็นของใช้ เสื้อผ้าไปจนถึงเฟอร์นิเจอร์ ซึ่งหน้าที่ตรงนี้จำเป็นต้องมีความรู้ด้านวิทยาศาสตร์วัสดุและการออกแบบเชิงอุตสาหกรรมเพื่อนำขยะเหล่านี้กลับมาใช้ซ้ำได้อย่างมีประสิทธิภาพ\n', 'กระดานเขียนแบบ | บรรทัดมาตราส่วน | แผ่นแบบ | กระดาษปรู๊ฟท์ | อุปกรณ์เครื่องเขียน | Sketch up | Autodesk 3D max | เครื่องบดพลาสติก | เครื่องบดยาง | เครื่องขึ้นรูป\n', 'ความรู้พื้นฐานวิชา วิทยาศาสตร์ ด้านวัสดุศาสตร์ | ความรู้ด้านการออกแบบ\n', '(คิดสร้างสรรค์) การมีความคิดริเริ่มสร้างสรรค์ | (รู้จักเข้าสังคม) การมีมนุษยสัมพันธ์ที่ดี เนื่องจากอาจต้องทำงานร่วมกับคนในหลากหลายสาขาอาชีพ\n', 'ชอบการประดิษฐ์/ออกแบบ | รู้จักการประยุกต์ใช้สิ่งของ | ใช้สิ่งของอย่างคุ่มค่า | รักสิ่งแวดล้อม\n', 'นักออกแบบผลงานด้านศิลปะ | นักวัสดุศาสตร์ | พนักงานฝ่ายผลิต | พนักงานควบคุมคุณภาพสินค้า | วิศวกรอุตสาหการ\n', 'ประกอบธุรกิจส่วนตัว ส่งออกชิ้นงาน ออกสู่สายตาประชาคมโลก | เป็นนักจัดการขยะ เจ้าหน้าที่ฝึกอบรมและปฏิบัติการให้ความรู้ในเรื่องการเกี่ยวกับขยะ\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/10.นักสร้างสรรค์ผลิตภัณฑ์จากขยะ.png', 'image/careerdetail/visual_note/10.นักสร้างสรรค์ผลิตภัณฑ์จากขยะ.jpg', 'image/careerdetail/cover/10.นักสร้างสรรค์ผลิตภัณฑ์จากขยะ.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(11, 7, 40, '20,000 – 35,000 ขึ้นกับประสบการณ์', 'ศึกษา วิจัย สำรวจ รวบรวมองค์ความรู้ที่เกี่ยวข้องกับความหลากหลายของสิ่งมีชีวิต โดยออกสำรวจในพื้นที่ป่าธรรมชาติ เพื่อเก็บตัวอย่างมาศึกษาในห้องปฏิบัติการ โดยศึกษาลักษณะทางสัณฐานวิทยา ในการหาคุณสมบัติเฉพาะของสิ่งมีชีวิต เช่น กายวิภาคศาสตร์ พฤติกรรม (พันธุกรรมและชีวเคมี) เพื่อระบุชนิดตัวอย่างสิ่งมีชีวิต และจัดเตรียมตัวอย่างพรรณไม้แห้ง หรือสตัฟฟ์สัตว์ เพื่อรักษาสภาพ เก็บเป็นตัวอย่างอ้างอิงไว้ในพิพิธภัณฑ์พืช\n', 'กรรไกรตัดกิ่ง | ถุงซิปล๊อค | อุปกรณ์เดินป่า เต็นท์ | ตู้อบตัวอย่างพืช | กล้องถ่ายรูป กล้องจุลทรรศน์ SEM | อุปกรณ์เตรียมตัวอย่างพืชเพื่อเก็บรักษาในพิพิธภัณฑ์พืช | อุปกรณ์ศึกษาชีววิทยาโมเลกุล | คู่มือหลักอนุกรมวิธาน\n', 'พฤกษศาสตร์ | อนุกรมวิธาน | กายวิภาคศาสตร์ | เรณูวิทยา | อณูชีววิทยา | การวาดรูปทางพฤกษศาสตร์ | การเกษตร การปลูกพืช | ทักษะในการเดินป่า การดำรงชีวิตในป่า | การถ่ายรูปและโปรแกรมแต่งรูป\n', 'การติดต่อสื่อสาร การประสานงาน ทักษะชีวิตและอาชีพ | (รู้จักเข้าสังคม) ทำงานเป็นทีม | กล้าคิดกล้าแสดงออก\n', 'ช่างสังเกต | ละเอียดรอบคอบ | ใจเย็น | ชอบสืบค้นข้อมูล | ชอบผจญภัย | ชอบต้นไม้\n', 'เกษตรกร | นักวิจัย อาจารย์ | นิสิต นักศึกษา | บริษัทเอกชน | นักกฎหมาย | เจ้าหน้าที่อุทยาน | การปกครองส่วนท้องถิ่น\n', 'เริ่มต้นจากเป็นพนักงานระดับปฏิบัติการ สามารถก้าวหน้าในตำแหน่งที่สูงขึ้นตามลำดับคือ หัวหน้าส่วน งาน ผอ.สำนัก รอง ผอ. นอกจากนั้นยังก้าวหน้าหรือมีชื่อเสียงทางด้านวิชาการ เป็นผู้ทรงคุณวุฒิ\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/11.นักอนุกรมวิธาน.png', 'image/careerdetail/visual_note/11.นักอนุกรมวิธาน.jpg', 'image/careerdetail/visual_note/11.นักอนุกรมวิธาน.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(12, 2, 12, 'เริ่มต้น 18,000 – 25,000 บาท ขึ้นอยู่กับ ความรู้ ความสามารถ และประสบการณ์ที่เกี่ยวข้อง\n', 'ตรวจสอบ ปรับปรุงกระบวนการผลิต เพื่อเพิ่มประสิทธิภาพการใช้พลังงาน ลดการปล่อยก๊าซคาร์บอนไดออกไซด์ที่จะเกิดขึ้นในขั้นตอน ตั้งแต่เครื่องจักรที่ใช้ วัสดุอุปกรณ์ และการใช้พลังงาน เพื่อผลกระทบที่จะเกิดขึ้นกับสิ่งแวดล้อม\n', 'ชุดเก็บอากาศ | โรตามิเตอร์ (Rotameter) |  เครื่องวัดประสิทธิภาพการเผาไหม้ | เครื่องวัดความเร็วรอบ (Tacho Meter)\n', 'ทักษะการคำนวณ การปล่อยก๊าซ คาร์บอนไดออกไซด์ | ทักษะการใช้เครื่องมือ | เข้าใจระบบ/กระบวนการผลิต\n', '(คิดสร้างสรรค์) ความคิดสร้างสรรค์ | (แก้ปัญหาเป็น) ทักษะการแก้ปัญหา | (สื่อสารดี) ทักษะการสื่อสาร | (รู้จักเข้าสังคม) ทักษะการทำงานร่วมกับผู้อื่น\n', 'ละเอียด |  รอบคอบ | ชอบการแก้ปัญหา | ชอบการคำนวณทางคณิตศาสตร์\n', 'นักวิจัยด้านพลังงาน | วิศวกรฝ่ายผลิต | วิศวกรอุตสาหการ | เจ้าของโรงงาน/องค์กร\n', 'การเลื่อนลำดับขั้นในสายงานและเงินเดือน ขึ้นอยู่กับประสบการณ์การทำงาน โครงสร้างของบริษัท และการขยายตัวของกลุ่มธุรกิจ\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/12.วิศวกรสิ่งแวดล้อมและการลดก๊าซเรือนกระจก.png', 'image/careerdetail/visual_note/12.วิศวกรสิ่งแวดล้อมและการลดก๊าซเรือนกระจก.jpg', 'image/careerdetail/cover/12.วิศวกรสิ่งแวดล้อมและการลดก๊าซเรือนกระจก.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(13, 1, 2, 'Digital Marketer / Analyst: 22,000 – 65,000 บาทต่อเดือน | Digital Marketing Specialist: 50,000 – 65,000 บาทต่อเดือน | Digital Marketing Manager: 70,000 – 120,000 บาทต่อเดือน | Chief Marketing Officer: 100,000 – 200,000 บาทต่อเดือน', 'ทำการตลาด หรือโปรโมทแบรนด์ผ่านอุปกรณ์อิเล็กทรอนิกส์ อินเตอร์เน็ต โซเชียลมีเดีย รวมไปถึงช่องทางอีเมล เพื่อให้กลุ่มเป้าหมายหรือลูกค้าสามารถรับสารนั้น ๆ ได้มากขึ้น และสามารถทำได้ในสื่อที่หลากหลายที่อยู่ในสื่อดิจิทัล เช่น บิลบอร์ด วิดีโอ โพสต์ หรือ SMS\n', 'คอมพิวเตอร์, แล็ปท็อป | Social media platforms เช่น Facebook Instagram | เครื่องมือเพิ่มจำนวนการเข้าถึงข้อมูล เช่น Search Engine Optimization (SEO)  Search Engine Marketing (SEM) Paid Searching (PPC) | เครื่องมือในการวิเคราะห์ข้อมูล เช่น Microsoft Excel Google Analytics\n', 'ทักษะการใช้เครื่องมือดิจิทัล | ทักษะการคำนวณ | ความรู้เกี่ยวกับการตลาดออนไลน์, SEO, Google Adwords, Facebook …ความรู้เกี่ยวกับเครื่องมือวิเคราะห์เว็บ\n', 'ทักษะการเรียนรู้และนวัตกรรม | (มีวิจารณญาณ) ทักษะการคิดวิเคราะห์ | คิดสร้างสรรค์ ทักษะสารสนเทศ สื่อ เทคโนโลยี | รู้เท่าทันสื่อ | รอบรู้เทคโนโลยีสารสนเทศ | (ฉลาดสื่อสาร) การถอดความ ความสามารถในการรับรู้และถ่ายทอดสารไปยังผู้บริโภคด้วยความชัดเจน เข้าใจง่าย น่าสนใจ และตรงประเด็น ทักษะชีวิตและอาชีพ | มีความรับผิดชอบในงานที่ทำ | (มีความเป็นผู้นำ) เป็นผู้นำและมีความสามารถในการบริหารจัดการ | (รู้จักปรับตัว) พร้อมที่จะปรับตัว | (รู้จักเข้าสังคม) การสร้างความสัมพันธ์ การสร้างความไว้วางใจ, การทำงานเป็นทีม | ทักษะการตั้งคำถาม | ทักษะการวางกลยุทธ์ การวางแผน\n', 'รักการเรียนรู้ | ชอบใช้โซเชียลมีเดีย | ใส่ใจรายละเอียด | ชอบความท้าทาย\n', 'ผู้ประกอบการ หน่วยงานต่างๆ | content creator | graphic designer | Admin ของโซเชียลมีเดียนั้น ๆ\n', 'การเลื่อนลำดับขั้นในสายงานและเงินเดือน ขึ้นอยู่กับประสบการณ์การทำงาน โครงสร้างของบริษัทและการขยายตัวของกลุ่มธุรกิจ\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/13.นักการตลาดดิจิตอล.png', 'image/careerdetail/visual_note/13.นักการตลาดดิจิตอล.jpg', 'image/careerdetail/cover/13.นักการตลาดดิจิตอล.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(14, 4, 25, '16,000 บาท/เดือน (เคสเดินตามคือผู้สูงอายุสามารถดูแลตัวเองได้ในระดับหนึ่ง) | 35,000 บาท/เดือน (เคสที่ผู้สูงอายุมีความจำเพาะและผู้ดูแลผ่านการอบรมขั้นสูง หรือสามารถพูดภาษาที่สองได้) ต่อเดือน |  600 – 1,200 บาท/วัน | ที่พัก ค่าอาหาร', 'ดูแลผู้สูงอายุ ทั้งในด้านร่างกายและจิตใจให้มีชีวิตปกติสุข ร่วมกับกิจกรรมนันทนาการ เพื่อเพิ่มคุณภาพชีวิตให้ดีขึ้นรอบด้าน และได้รับการดูแลอย่างใกล้ชิด ถูกต้องตามหลักการดูแลผู้สูงอายุ\n', 'อุปกรณ์ทางการแพทย์ที่เกี่ยวข้องกับโรคประจำตัวของผู้สูงอายุ เช่น เครื่องวัดความดัน เครื่องตรวจน้ำตาลในเลือด | อุปกรณ์อำนวยความสะดวกผู้สูงอายุ รถเข็นช่วยเดิน/รถเข็นสำหรับนั่ง ไม้เท้า\n', 'การติดตามสุขภาพการ และจิต ของผู้สูงอายุ | การช่วยเหลือผู้สูงอายุจากปัญหาของระบบต่าง ๆ ร่างกายเช่น ระบบทางเดินอาหาร ทางเดิน หายใจ ขับถ่าย |  การใช้ยาในผู้สูงอายุ | ความเข้าใจเบื้องต้นเกี่ยวกับโรคที่พบในผู้สูงอายุ | ภาวะวิกฤตกับการปฐมพยาบาลเบื้องต้นในผู้สูงอายุ |  การจัดสภาวะแวดล้อมสำหรับผู้สูงอายุ | การปฐมพยาบาลเบื้องต้น\n', '(รู้จักปรับตัว) การอยู่ร่วมกับผู้สูงอายุ | (รู้จักเข้าสังคม) การอยู่ร่วมกับญาติผู้สูงอายุ | ทักษะการสื่อสาร\n', 'สามารถควบคุมอารมณ์ได้ดี | ชอบเข้าสังคม | ชอบดูแลผู้สูงอายุ\n', 'บุคลากรทางการแพทย์ | แม่บ้าน/แม่ครัว | ญาติของผู้สูงอายุ\n', 'ขึ้นอยู่กับประสบการณ์การการทำงาน และความรู้ ความเชี่ยวชาญในการดูแลผู้สูงอายุ\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/14.ผู้ดูแลผู้สูงอายุ.png', 'image/careerdetail/visual_note/14ผู้ดูแลผู้สูงอายุ.jpg', 'image/careerdetail/cover/14ผู้ดูแลผู้สูงอายุ.png', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(15, 3, 18, '15,000 – 300,000 บาท/เดือน ขึ้นกับระดับการศึกษา ประสบการณ์การทำงาน และสถานที่ทำงาน', 'กำจัด แปรรูป หรือลดปริมาณการเกิดขยะจากอาหาร ร่วมกับชุมชน องค์กร หน่วยงานที่เกี่ยวข้องด้วยวิธีการต่าง ๆ โดยเป็นผู้ดูแลตั้งแต่สาเหตุไปจนถึงแนวทางการกำจัด ด้วยวิธีที่มีประสิทธิภาพสูงสุดหรือเกิดขยะอาหารน้อยที่สุด\n', 'ห่วงเขี่ยเชื้อและเข็มเขี่ยเชื้อ | หลอดเลี้ยงเชื้อ | ชุดย้อมสี | เครื่องกรองแบคทีเรีย | ตู้บ่มเชื้อ | หม้อนึ่งฆ่าเชื้อภายใต้ความดันไอน้ำ - อุปกรณ์ป้องกันการปนเปื้อน ในกรณีนำไปผลิตอาหารปศุสัตว์ หรือผลิตปุ๋ยชีวภาพ เช่น | หมวกครอบผม | แว่นนิรภัย | ถุงมือยาง | ผ้ากันเปื้อน | รองเท้าบู๊ตยาง | personal protective equipment (PPE)\n', 'ความรู้เรื่องวิทยาศาสตร์สิ่งแวดล้อม และวิทยาศาสตร์ทั่วไป | ทักษะการจัดการ วิเคราะห์ และสรุปข้อมูล | ทักษะด้านการใช้ภาษา | ทักษะด้านคอมพิวเตอร์ | ทักษะการจัดการ\n', '(สื่อสารดี) การสื่อสารที่ชัดเจน | (รู้จักเข้าสังคม) มีมนุษยสัมพันธ์ดี | (รู้จักปรับตัว) ปรับตัวเก่ง | การประสานงานกับบุคคลที่หลากหลาย | การทำงานอย่างเป็นระเบียบ\n', 'ขยัน | อดทน | มีแรงจูงใจสูง | ใส่ใจกับสิ่งแวดล้อม | เป็นมิตร | มนุษยสัมพันธ์ดี | ไหวพริบดี\n', 'นักวิจัยด้านสิ่งแวดล้อมและการกำจัดขยะ | เจ้าหน้าที่ NGOs ด้านสิ่งแวดล้อม | เจ้าหน้าที่ห้องทดลองด้านจุลชีววิทยาและเคมี | เจ้าหน้าที่โรงแรม ร้านอาหาร ร้านค้า ห้างสรรพสินค้า ศูนย์จัดแสดง/ประชุม | มูลนิธิการกุศล โรงเรียน ชุมชนยากไร้ | ฟาร์มปศุสัตว์ โรงงานผลิตปุ๋ยชีวภาพ บริษัท ผลิตเครื่องหมักปุ๋ยชีวภาพ | คนงานคัดแยกขยะ เจ้าหน้าที่ขนขยะมูลฝอย โรงเผาขยะ หลุมฝังกลบขยะ | โรงผลิตไฟฟ้าและเชื้อเพลิงที่ใช้เทคโนโลยีย่อยสลายแบบไม่ใช้ออกซิเจน (anaerobic digestion)\n', 'ผู้ประกอบอาชีพนี้อาจเริ่มจากระดับผู้ปฏิบัติงาน เมื่อมีประสบการณ์และศึกษาเพิ่มเติม จะได้รับการเลื่อนตำแหน่งไปตามลำดับจนถึงระดับหัวหน้าหรือผู้อำนวยการผู้ที่มีความสามารถจะได้รับการเลื่อนตำแหน่งจนถึงระดับผู้จัดการ ที่ปรึกษา และผู้อำนวยการ ขึ้นอยู่กับโครงสร้างการบริหารขององค์กรผู้ที่มีประสบการณ์ในระบบการบริหารจัดการขยะอาหาร และการเป็นผู้ตรวจสอบระบบการจัดการขยะอาหาร สามารถเปลี่ยนงานไปประกอบอาชีพอื่นได้ หรือปฏิบัติงานในสถานประกอบการอื่น ๆ ที่ต้องการบุคคลที่มีประสบการณ์ทางด้านนี้ เช่น วิทยากรหรือผู้อบรมระบบการบริหารจัดการด้านสิ่งแวดล้อม และการจัดการขยะอาหาร\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/15.ผู้จัดการขยะอาหาร.png', 'image/careerdetail/visual_note/15.ผู้จัดการขยะอาหาร.jpg', 'image/careerdetail/cover/15.ผู้จัดการขยะอาหาร.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL),
(16, 8, 45, '13,000 – 25,000 บาท ขึ้นอยู่กับฝีมือ ประสบการณ์ ของตนเอง ขนาดและรายได้ของสถานประกอบกิจการ', 'เป็นผู้สร้างสรรค์ศิลปะบนจานอาหารให้ผู้บริโภคได้รับความสุข มีสุขภาพที่ดี โดยใช้ทั้งด้านศาสตร์และศิลป์อย่างครบถ้วนคอยบริหารจัดการงานในห้องครัว คิดค้น ออกแบบ สร้างสรรค์สูตรอาหารใหม่ ๆ คัดเลือกวัตถุดิบที่ต้องใช้ คิดคำนวณต้นทุนกำไร ออกแบบการตกแต่งจาน ตลอดจนวางแผนและแจกจ่ายงานให้กับสมาชิกคนอื่นในทีมครัว โดยรายละเอียดของงานจะแตกต่างออกไปตามลักษณะของสถานที่ที่ทำงาน เช่น โรงแรม ภัตตาคารหรือร้านอาหารส่วนตัว และอาจแบ่งออกเป็นครัวเย็น ครัวร้อน ตามลักษณะอาหารที่รับผิดชอบได้อีกด้วย\n', 'อุปกรณ์ชั่งตวงวัด | มีด | เตา | กระทะ | หม้อ | ตู้แช่อาหาร | เตาอบ | หม้ออัดความดัน | เครื่องผสมอาหาร | เครื่องบดปั่นอาหาร | เครื่องซูวี (SOUS VIDE) | เครื่องซีลสุญญากาศ\n', 'ทักษะการประกอบอาหารแต่ละชนิด | ทักษะภาษาอังกฤษ | รู้จักและเชี่ยวชาญเกี่ยวกับคุณสมบัติของวัตถุดิบที่นำมาใช้ในการประกอบอาหาร | ทักษะความรู้เรื่องของการดัดแปลงวัตถุดิบ เครื่องปรุงให้หลากหลาย | มีความรู้เกี่ยวกับหลักโภชนาการสำหรับบุคคลแต่ละช่วงวัย และอาหารสำหรับการบำบัดโรคต่างๆ\n', '(มีวิจารณญาณ) ทักษะการบริหารจัดการ สามารถลำดับความสำคัญของงานได้ | (คิดสร้างสรรค์) ทักษะด้านมีความคิดสร้างสรรค์ | (แก้ปัญหาเป็น) ทักษะในการคิดวิเคราะห์ มีไหวพริบปฏิภาณ แก้ไขปัญหาเฉพาะหน้าได้ | (สื่อสารดี) ทักษะการสื่อสารและปฏิสัมพันธ์กับผู้อื่น | (รู้จักเข้าสังคม) ทักษะในการทำงานร่วมกับผู้อื่น | (มีความเป็นผู้นำ) ทักษะการเป็นผู้นำ กล้าคิด กล้าตัดสินใจ\n', 'รักการทำอาหาร | รักความสะอาด ถูกสุขลักษณะอนามัย ใส่ใจสุขภาพของลูกค้า | มีความคิดสร้างสรรค์ | สามารถวิเคราะห์หาสิ่งที่เหมาะสมตอบโจทย์เป้าหมายได้ | ใส่ใจรายละเอียด |  ช่างสังเกต | มีมาตรฐานในการทำอาหาร | ชอบเรียนรู้สิ่งใหม่ | ขยัน | อดทน | มีความกระตือรือร้น | คล่องแคล่วว่องไว | มีความรับผิดชอบสูง\n', 'พนักงานเสิร์ฟอาหาร | พนักงานผู้ช่วยในครัว | พนักงานโรงแรม | นักโภชนาการ | เจ้าของสถานประกอบการ | ลูกค้า\n', 'ความก้าวหน้าของอาชีพนี้ขึ้นอยู่กับความสามารถและประสบการณ์ ซึ่งถ้าประสบการณ์และความสามารถเป็นที่ยอมรับอย่างกว้างขวาง สามารถต่อยอดไปเป็นเจ้าของกิจการร้านอาหารเพื่อสุขภาพ เปิดสถาบันสอนทำอาหารเพื่อสุขภาพ หรือสร้างผลิตภัณฑ์อาหารเพื่อสุขภาพภายใต้แบรนด์ของตนเอง เป็นต้น\n', 'https://www.youtube.com/embed/ILgSuWv9qwg', 'image/careerdetail/character/16.นักรังสรรค์อาหาร.png', 'image/careerdetail/visual_note/16.นักรังสรรค์อาหาร.jpg', 'image/careerdetail/cover/16.นักรังสรรค์อาหาร.jpg', '2023-03-23 16:31:56', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers_detail_responsibility`
--

DROP TABLE IF EXISTS `careers_detail_responsibility`;
CREATE TABLE IF NOT EXISTS `careers_detail_responsibility` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `career_detail_main_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสดีเทลหลัก',
  `career_detail_responsibility` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'หน้าที่รับผิดชอบ',
  `career_detail_responsibility_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `career_detail_responsibility_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `career_detail_responsibility_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `career_detail_responsibility_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `career_detail_responsibility_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `career_detail_responsibility_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_detail_responsibility`
--

INSERT INTO `careers_detail_responsibility` (`id`, `career_detail_main_id`, `career_detail_responsibility`, `career_detail_responsibility_at`, `career_detail_responsibility_by`, `career_detail_responsibility_up_at`, `career_detail_responsibility_up_by`, `career_detail_responsibility_del_at`, `career_detail_responsibility_del_by`) VALUES
(1, 1, 'วิจัย วิเคราะห์ และพัฒนาระบบซอฟต์แวร์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(2, 1, 'ศึกษากระบวนการ ตลอดจนเทคโนโลยีที่เกี่ยวข้อง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(3, 1, 'ออกแบบกระบวนการในการทำระบบซอฟต์แวร์ให้เป็นมาตรฐาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(4, 1, 'ทดสอบ ตรวจสอบความถูกต้องของกระบวนการให้เป็นไปตามความต้องการ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(5, 1, 'ประเมินผลการทำงานของแต่ละขั้นตอนในกระบวนการ พร้อมประเมินผลความเสี่ยง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(6, 1, 'สนับสนุนการพัฒนาซอฟต์แวร์ระบบใหญ่ให้มีคุณภาพสูง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(7, 1, 'ดูแลแก้ไขข้อมูลด้านซอฟต์แวร์ของสถานประกอบการ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(8, 1, 'แนะนำและสอนเทคนิคการใช้โปรแกรมให้พนักงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(9, 2, 'ค้นคว้า วิจัยสารตั้งต้นที่ต้องการนำไปพัฒนายา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(10, 2, 'พัฒนาสูตรตำรับยา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(11, 2, 'ทดสอบความปลอดภัยและประสิทธิภาพของยา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(12, 2, 'ควบคุมคุณภาพการผลิตยา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(13, 2, 'เขียนรายงานและวารสารทางวิทยาศาสตร์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(14, 3, 'สำรวจหาและช่วยพัฒนาแหล่งกักเก็บปิโตรเลียม', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(15, 3, 'พิจารณาคัดเลือกพื้นที่ที่คาดว่าจะมีศักยภาพของทรัพยากรปิโตรเลียม', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(16, 3, 'ร่วมมือกับนักธรณีฟิสิกส์ในการจัดทำแผนที่ใต้ผิวดินเพื่อแสดงตำแหน่งโครงสร้างแหล่งกักเก็บต่าง ๆ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(17, 3, 'กำหนดตำแหน่งและแนวทางของหลุมเจาะ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(18, 3, 'ศึกษาชั้นหินและตรวจสอบคุณสมบัติของหินที่ได้จากหลุมเจาะสำรวจต่าง ๆ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(19, 3, 'นำข้อมูลที่ได้จากหลุมเจาะสำรวจต่าง ๆ มาประกอบกับข้อมูลการวัดความไหวสะเทือนเพื่อจัดทำแผนที่', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(21, 4, 'ดูแล ระมัดระวังและประเมินพื้นที่หน้างานที่มีแนวโน้มหรือความเสี่ยงจากที่อาจจะก่อให้เกิดอันตรายให้มีความความปลอดภัย', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(22, 4, 'ดูแลและควบคุมผู้รับเหมาที่เข้ามาปฏิบัติงานในพื้นที่ทำงานให้เป็นไปตามมาตรฐานความปลอดภัยของสถานประกอบการ รวมทั้งตรวจสอบความปลอดภัยของอุปกรณ์และดูแลขั้นตอนในการทำงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(23, 4, 'ในกรณีเกิดอุบัติเหตุเกิดขึ้น ดูแลสืบสวนสาเหตุที่แท้จริงของอุบัติเหตุ เพื่อสรุปและหาแนวทางแก้ไขและแนวทางการป้องกันเหตุที่อาจจะเกิดซ้ำขึ้นได้ในอนาคต', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(24, 4, 'จัดการขยะ ของเสียอันตราย ด้วยวิธีที่เหมาะสม', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(25, 4, 'จัดเก็บอุปกรณ์ สารเคมี ให้อยู่ในพื้นที่ที่เหมาะสมและไม่เกิดการทำปฏิกิริยา หรือก่อให้เกิดอันตราย', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(26, 4, 'ดูแลพื้นที่ทำงานให้เหมาะสม และป้องกันอุบัติเหตุที่อาจเกิดขึ้น', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(27, 5, 'วางแผนการปลูกพืชให้เหมาะสมกับฤดูกาล และความต้องการของท้องตลาด', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(28, 5, 'ออกแบบระบบปลูกพืชให้เหมาะสมกับพื้นที่ และพืชพันธุ์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(29, 5, 'ศึกษาวิจัยและออกแบบระบบ เพื่อพัฒนาฟาร์มให้ดียิ่งขึ้น', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(30, 5, 'จัดอบรมให้ความรู้แก่ผู้สนใจ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(31, 6, 'ดูแลตัวของหุ่นยนต์และระบบของหุ่นยนต์โดยรวม', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(32, 6, 'Update Software ควบคุมหุ่นยนต์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(33, 6, 'ศึกษาค้นคว้าผลิตและพัฒนาเทคโนโลยีหุ่นยนต์ เช่น แก้ไขตำแหน่งแขนหุ่นยนต์ เพื่อเพิ่มประสิทธิภาพการทำงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(34, 6, 'สร้างระบบฮาร์ดแวร์/ซอฟท์แวร์อัตโนมัติ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(35, 6, 'ฝึกอบรมการใช้งานหุ่นยนต์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(36, 7, 'ออกแบบโครงสร้างพื้นฐานของราง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(37, 7, 'ซ่อมแซม บำรุงรักษาระบบขนส่งทางราง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(38, 7, 'ศึกษา สำรวจดิน และศึกษาความเป็นไปได้', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(39, 7, 'สรุปและรายงานผลการศึกษา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(40, 7, 'ควบคุมการปฏิบัติงานของระบบราง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(41, 8, 'วิจัยและพัฒนาวัสดุนาโนเฉพาะทางเพื่อให้มีคุณสมบัติพิเศษในห้องปฏิบัติการทางวิทยาศาสตร์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(42, 8, 'วิจัยและพัฒนาเทคโนโลยีวัสดุนาโน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(43, 8, 'ประยุกต์ใช้เทคโนโลยีวัสดุนาโนในด้านต่าง ๆ เช่น การเกษตร เครื่องสำอาง อาหารและเครื่องดื่ม', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(44, 8, 'พลังงาน สิ่งทอ เป็นต้น', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(45, 8, 'ถ่ายทอดความรู้เกี่ยวกับงานวิจัยเพื่อเป็นประโยชน์ต่อผู้ที่สนใจ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(46, 8, 'ถ่ายทอดความรู้การใช้ประโยชน์ให้กับภาคอุตสาหกรรมการผลิต เพื่อยกระดับผลิตภัณฑ์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(47, 8, 'ถ่ายทอดความรู้ในกับนิสิตนักศึกษาในภาควิชาต่าง ๆ ที่เกี่ยวข้อง เช่น ภาควิชาวัสดุศาสตร์ เป็นต้น', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(48, 9, 'ตรวจสอบ บำรุงรักษาอุปกรณ์ที่ใช้ในการสำรวจ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(49, 9, 'สำรวจพื้นที่ระยะไกล โดยใช้เครื่องมือเก็บข้อมูล', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(50, 9, 'วิเคราะห์ความสัมพันธ์ของข้อมูลเชิงพื้นที่ ด้วย Geographic Information System (GIS)', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(51, 9, 'สำรวจพื้นที่ เพื่อทำแผนที่', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(52, 9, 'ติดตามเทคโนโลยีที่เกี่ยวข้องกับการถ่ายภาพ หรือวิทยาศาสตร์ที่เกี่ยวข้องกับสายงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(53, 10, 'ออกแบบผลิตภัณฑ์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(54, 10, 'เลือกวัสดุที่ต้องการนำมาใช้', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(55, 10, 'แยกประเภทและตรวจสอบวัสดุที่จะทำมาใช้ ให้เหลือเพียงส่วนประกอบที่สามารถนำมารีไซเคิลได้', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(56, 10, 'ตัด/บด วัสดุให้มีขนาดตามที่ต้องการ แล้วจึงทำความสะอาด กำจัดสิ่งปนเปื้อนที่ไม่สามารถกำจัดได้', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(57, 10, 'ประกอบวัสดุ หรือหลอมด้วยความร้อนและความดันที่เหมาะสม เพื่อขึ้นรูปใหม่', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(58, 10, 'ทดลองใช้ผลิตภัณฑ์ และปรับปรุงแก้ไขข้อพัฒนา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(59, 11, 'ทดลองใช้ผลิตภัณฑ์ และปรับปรุงแก้ไขข้อพัฒนา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(60, 11, 'ขยายพันธ์เพื่อการอนุรักษ์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(61, 11, 'ศึกษาวิจัยด้านหลากหลายทางชีวภาพและการใช้ประโยชน์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(62, 11, 'เขียนบทความและตีพิมพ์บทความวิชาการ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(63, 11, 'ดูแลรักษาโรงเรือนกล้วยไม้นอกถิ่นอาศัย', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(64, 11, 'ติดต่อประสานงานทั่วไป', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(65, 11, 'พัฒนานิทรรศการ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(66, 12, 'วิเคราะห์กระบวนการผลิต เพื่อลดการปล่อยก๊าซคาร์บอนไดออกไซด์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(67, 12, 'สืบค้นข้อมูลเกี่ยวกับแนวทางการเปลี่ยนเพื่อลดการลดการปล่อยก๊าซคาร์บอนไดออกไซด์ เช่น เครื่องจักร วัสดุอุปกรณ์ หรือการใช้พลังงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(68, 12, 'วางแผนการปรับรูปแบบการผลิตที่เป็นมิตรกับสิ่งแวดล้อมตามระยะเวลาการดำเนินงานเป็น 3 ระยะ ได้แก่ ระยะสั้น ปรับเปลี่ยนกระบวนการ หรือวิธีการที่ใช้ผลิต ระยะกลาง ปรับเปลี่ยนอุปกรณ์การผลิตบางส่วน ระยะยาว ซื้อเครื่องจักรในการผลิตใหม่', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(69, 12, 'ศึกษา วิเคราะห์ ประสิทธิภาพการทำงานและการปล่อยก๊าซคาร์บอนไดออกไซด์ หลังการปรับเปลี่ยน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(70, 12, 'ติดตามและประเมินผลการดำเนินงาน เพื่อเพิ่มประสิทธิภาพในการลดก๊าซคาร์บอนไดออกไซด์จากกระบวนการต่าง ๆ ได้อย่างยั่งยืน- วิจัยและพัฒนาด้านตัวเร่งปฏิกิริยาและสารดูดซับสำหรับกระบวนการทางพลังงานเคมีชีวภาพ และปิโตรเคมี', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(71, 13, 'วิเคราะห์กลุ่มเป้าหมาย', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(72, 13, 'วิเคราะห์ช่องทาง แพลตฟอร์ม ให้สอดคล้องกับกลุ่มเป้าหมาย เนื้อหา และภาพลักษณ์องค์กร', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(73, 13, 'วางแผนกลยุทธ์เพื่อส่งเสริมการขาย', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(74, 13, 'ติดตามยอด Organic Traffic ที่เข้ามายังเว็บไซต์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(75, 13, 'ติดามยอด Engagement ในช่องทางโซเชียลมีเดียต่าง ๆ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(76, 13, 'สร้างสื่อโฆษณา', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(77, 13, 'จัดงานอีเวนท์', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(78, 13, 'ประสานงานกับเอเจนซี่', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(79, 13, 'วิเคราะห์และประเมินผลการดำเนินงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(80, 14, 'ดูแลการเคลื่อนไหวและความปลอดภัย เช่น การประคองขณะเดิน – นั่ง', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(81, 14, 'ดูแลสุขภาพรอบด้าน ทั้งทางกาย จิตใจ การเข้าสังคมและโภชนาการ ให้เหมาะสมกับเงื่อนไข ข้อจำกัดต่างๆ เช่น หลีกเลี่ยงการรับประทานผลไม้ในผู้สูงอายุที่เป็นโรคเบาหวาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(82, 14, 'สังเกตพฤติกรรม เพื่อเป็นแนวทางในการปรับเปลี่ยนการดูแลและให้ความช่วยเหลือแก่ผู้สูงอายุ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(83, 14, 'จัดเตรียมยาให้ถูกต้องตามเวลา วิธีการใช้ และปริมาณ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(84, 14, 'ตรวจร่างกายที่เกี่ยวข้องกับโรคประจำตัว เช่น ความดันโลหิต เบาหวาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(85, 14, 'ดำเนินกิจกรรมนันทนาการ และสร้างบรรยกาศที่ดี เพื่อลดความเหงาและเศร้าซึม เช่น กิจกรรมนันทนาการ, กิจกรรมสร้างสังคม, ออกกำลังกาย, กีฬาหรือเกม, งานอดิเรก', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(86, 14, 'จัดสภาพแวดล้อมให้เหมาะสมกับการเปลี่ยนแปลงของร่ายกายผู้สูงอายุ เช่น การวางสิ่งของควรอยู่ใกล้มือ การใช้เก้าอี้มีพนังพิงและที่วางแขน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(87, 14, 'สนับสนุน ให้กำลังใจ และไม่ทำให้รู้สึกว่าผู้สูงอายุเป็นภาระ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(88, 14, 'ปฐมพยาบาลเบื้องต้นในภาวะวิกฤติ หรือกรณีฉุกเฉิน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(89, 14, 'หน้าที่อื่น ๆ ที่ตกลงกับผู้ว่าจ้าง เช่น การดูแลกึ่งแม่บ้าน และอื่น ๆ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(90, 15, 'กอบกู้อาหารส่วนเกินจากโรงแรม ร้านอาหาร ร้านค้าปลีก เพื่อนำไปบริจาคแก่ผู้ยากไร้', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(91, 15, 'หาแหล่งอาหารส่วนเกิน และประสานงานเรื่องการจัดการอาหารส่วนเกินนั้น', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(92, 15, 'ตรวจสอบความปลอดภัยของอาหารส่วนเกิน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(93, 15, 'การวางแผนด้าน logistics', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(94, 15, 'ประสานงานกับชุมชนต่าง ๆ', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(95, 15, 'ดำเนินการด้าน corporate social responsibility (CSR)', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(96, 15, 'เก็บและวิเคราะห์ข้อมูล', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(97, 15, 'จัดการอบรมให้แก่หน่วยงานอื่น บริษัทเอกชน หรือประชาชนทั่วไป เรื่องการจัดการขยะอาหาร ทั้งระดับสังคม องค์กร หรือในครัวเรือน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(110, 16, 'เชฟที่มีตำแหน่งเป็นหัวหน้างานหรือคิดค้นเมนูอาหาร จัดการวัตถุดิบและบริหารทีมครัวโดยเริ่มจากการประชุมงาน คำนวณงบประมาณ เพื่อวางแผนการทำงานในแต่ละวัน (หรือวางแผนล่วงหน้า)', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(111, 16, 'เช็คสต๊อก รวบรวมคัดสรรวัตถุดิบ ตรวจสอบคุณภาพให้ได้มาตรฐาน อาจทำสต๊อกของด้วย', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(112, 16, 'รักษาความสะอาด ใส่เครื่องแบบให้เรียบร้อย เตรียมพร้อมก่อนเข้าครัว', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(113, 16, 'ประกอบอาหารตามที่วางแผน ตามออเดอร์ลูกค้า หรือดูแลลูกทีมให้การทำอาหารเป็นไปอย่างราบรื่น', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(114, 16, 'ตรวจเช็คคุณภาพการปรุงอาหารแต่ละจาน ให้ได้ตามมาตรฐานของร้าน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL),
(115, 16, 'ใช้ไหวพริบคอยแก้ปัญหาเฉพาะหน้าที่เกิดขึ้นระหว่างงาน', '2023-03-23 09:46:28', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers_detail_work_place`
--

DROP TABLE IF EXISTS `careers_detail_work_place`;
CREATE TABLE IF NOT EXISTS `careers_detail_work_place` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id',
  `career_detail_main_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสดีเทลหลัก',
  `career_detail_work_place_id` bigint UNSIGNED NOT NULL COMMENT 'สถานที่ 1 = เอกชน, 2 = รัฐบาล',
  `career_detail_work_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สถานที่ทำงาน',
  `career_detail_work_place_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `career_detail_work_place_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `career_detail_work_place_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `career_detail_work_place_up_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `career_detail_work_place_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `career_detail_work_place_del_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers_detail_work_place`
--

INSERT INTO `careers_detail_work_place` (`id`, `career_detail_main_id`, `career_detail_work_place_id`, `career_detail_work_place`, `career_detail_work_place_at`, `career_detail_work_place_by`, `career_detail_work_place_up_at`, `career_detail_work_place_up_by`, `career_detail_work_place_del_at`, `career_detail_work_place_del_by`) VALUES
(1, 1, 1, 'บริษัท ไมโครซอฟท์ประเทศไทย จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(2, 1, 1, 'บริษัท ไอบีเอ็ม ประเทศไทย จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(3, 1, 1, 'บริษัท ซิมโฟนี่ คอมมูนิเคชั่น จำกัด (มหาชน)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(4, 1, 2, 'กระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(5, 1, 2, 'ฝ่ายเทคโนโลยีสารสนเทศในหน่วยงานภาครัฐ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(6, 2, 1, 'บริษัทเอกชนทั้งในและต่างประเทศ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(7, 2, 2, 'ห้องปฏิบัติงานด้านวิจัยและพัฒนาด้านวิทยาศาสตร์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(8, 2, 2, 'มหาวิทยาลัยแพทย์ต่าง ๆ เช่น คณะแพทยศาสตร์ศิริราชพยาบาล, คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี\nห้องปฏิบัติงานด้านวิจัยและพัฒนาด้านวิทยาศาสตร์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(9, 2, 2, 'มหาวิทยาลัยแพทย์ต่าง ๆ เช่น คณะแพทยศาสตร์ศิริราชพยาบาล, คณะแพทยศาสตร์โรงพยาบาลรามาธิบดี', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(10, 3, 1, 'บริษัทเชฟรอนประเทศไทยสำรวจและผลิต จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(11, 3, 1, 'บริษัท ปตท.สำรวจและผลิตปิโตรเลียม จำกัด (มหาชน)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(12, 3, 1, 'บริษัท บ้านปู จำกัด (มหาชน)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(13, 3, 1, 'บริษัท ผาแดง อินดัสทรี จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(14, 3, 2, 'กรมทรัพยากรธรณี', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(15, 3, 2, 'กรมเชื้อเพลิงธรรมชาติ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(16, 3, 2, 'กรมทรัพยากรน้ำ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(17, 3, 2, 'กรมพลังงานทหาร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(18, 4, 1, 'บริษัท เฮลธ์ แอนด์ เอ็นไวเทค จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(19, 4, 1, 'บริษัท ยูไนเต็ด แอนนาลิสต์ แอนด์ เอ็นจิเนียริ่ง คอนซัลแตนท์ จํากัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(20, 4, 2, 'สถานประกอบการหรือพื้นที่ที่อาจเกิดปัญหาผลกระทบต่อสิ่งแวดล้อมจากสถานประกอบการ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(21, 4, 2, 'กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(22, 4, 2, 'กรมควบคุมมลพิษ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(23, 4, 2, 'กรมส่งเสริมคุณภาพสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(24, 4, 2, 'สำนักงานนโยบายและแผนทรัพยากรธรรมชาติและสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(25, 5, 1, 'ฟาร์ม/ โรงเรือนเกษตร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(26, 5, 1, 'บริษัท ศูนย์เกษตรกรรมบางไทร จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(27, 5, 1, 'บริษัท ปลูกผักเพราะรักแม่ จำกัด (โอ้กะจู๋)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(28, 5, 2, 'กรมวิชาการเกษตร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(29, 5, 2, 'กรมการข้าว', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(30, 5, 2, 'กรมส่งเสริมการเกษตร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(31, 5, 2, 'บริษัท ดอยคำผลิตภัณฑ์อาหาร จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(32, 6, 1, 'บริษัท ABB Automation (Thailand) Co., Ltd.', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(33, 6, 1, 'บริษัทเอกชนที่ผลิตและพัฒนาซอฟต์แวร์และหุ่นยนต์ทางพาณิชย์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(34, 6, 1, 'สถาบันวิทยาการหุ่นยนต์ภาคสนาม (FIBO)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(35, 6, 1, 'ห้องปฏิบัติการและภาคสนาม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(36, 6, 2, 'สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช. หรือ NSTDA)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(37, 6, 2, 'ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ (NECTEC)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(38, 6, 2, 'สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย (วว.)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(39, 7, 1, 'กลุ่มบริษัทผู้ประกอบการขนส่งทางราง เช่น บริษัท ระบบขนส่งมวลชนกรุงเทพ จำกัด (มหาชน) (BTSC), บริษัท ทางด่วนและรถไฟฟ้ากรุงเทพ จำกัด (มหาชน) (BEM)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(40, 7, 1, 'กลุ่มบริษัทผู้รับจ้างก่อสร้างและซ่อมบำรุงระบบขนส่งทางราง', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(41, 7, 1, 'กลุ่มบริษัทที่ปรึกษาผู้ศึกษาออกแบบและควบคุมงานก่อสร้างระบบขนส่งทางราง', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(42, 7, 1, 'กลุ่มบริษัทผู้ผลิตและจัดจำหน่ายรถไฟและชิ้นส่วนที่เกี่ยวข้องกับระบบรางทั้งในและต่างประเทศ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(43, 7, 2, 'กระทรวงคมนาคม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(44, 7, 2, 'การรถไฟแห่งประเทศไทย', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(45, 7, 2, 'การรถไฟฟ้าขนส่งมวลชนแห่งประเทศไทย', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(46, 7, 2, 'บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(47, 8, 1, 'บริษัท นาโนโลยี จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(48, 8, 1, 'บริษัท บางบอนพลาสติก กรุ๊ป จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(49, 8, 1, 'บริษัท นาโน เอ็นเตอร์ไพร์ส จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(50, 8, 2, 'ศูนย์นาโนเทคโนโลยีแห่งชาติ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(51, 8, 2, 'สถาบันวิจัยวิทยาศาสตร์แห่งประเทศไทย', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(52, 8, 2, 'บริษัท พีทีที โกลบอล เคมิคอล จำกัด (มหาชน)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(53, 9, 1, 'บริษัทด้านข้อมูลแผนที่ (สารสนเทศภูมิศาสตร์ : GIS)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(54, 9, 2, 'กรมส่งเสริมการเกษตร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(55, 9, 2, 'กรมพัฒนาที่ดิน', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(56, 9, 2, 'กรมอุตุนิยมวิทยา', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(57, 9, 2, 'สำนักงานพัฒนาเทคโนโลยีอวกาศและภูมิสารสนเทศ (องค์การมหาชน) (GISDA)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(58, 9, 2, 'กรมชลประทาน', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(59, 9, 2, 'การไฟฟ้าส่วนภูมิภาค', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(60, 9, 2, 'การประปาส่วนภูมิภาค', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(61, 9, 2, 'กองทัพอากาศ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(62, 9, 2, 'กรมสอบสวนคดีพิเศษ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(63, 10, 1, 'บริษัท นิว อาไรวา จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(64, 10, 1, 'บริษัท 103 เพเพอโรนี จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(65, 10, 2, 'สำนักงานส่งเสริมเศรษฐกิจสร้างสรรค์ (องค์การมหาชน)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(66, 10, 2, 'กรมส่งเสริมอุตสาหกรรม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(67, 10, 2, 'กองพัฒนาอุตสาหกรรมสร้างสรรค์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(68, 10, 2, 'ศูนย์เทคโนโลยีโลหะและวัสดุแห่งชาติ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(69, 11, 2, 'กระทรวงเกษตรและสหกรณ์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(70, 11, 2, 'กรมส่งเสริมการเกษตร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(71, 11, 2, 'กรมวิชาการเกษตร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(72, 11, 2, 'กรมปศุสัตว์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(73, 11, 2, 'กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(74, 11, 2, 'กรมป่าไม้', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(75, 11, 2, 'กรมอุทยานแห่งชาติ สัตว์ป่าและพันธุ์พืช', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(76, 11, 2, 'องค์การอุตสาหกรรมป่าไม้', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(77, 11, 2, 'องค์การสวนสัตว์แห่งประเทศไทย', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(78, 11, 2, 'องค์การสวนพฤกษศาสตร์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(79, 11, 2, 'กลุ่มอนุรักษ์ความหลากหลายทางชีวภาพและสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(80, 12, 1, 'บริษัท เชฟรอน (ไทย) จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(81, 12, 1, 'บริษัท ปูนซิเมนต์ไทย จำกัด (มหาชน)', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(82, 12, 2, 'กรมโรงงานอุตสาหกรรม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(83, 12, 2, 'กระทรวงพลังงาน', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(84, 12, 2, 'กระทรวงวิทยาศาสตร์ เทคโนโลยีและสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(85, 12, 2, 'กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(86, 12, 2, 'ศูนย์วิศวกรรมพลังงานและสิ่งแวดล้อม คณะวิศวกรรมศาสตร์ มหาวิทยาลัยเกษตรศาสตร์', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(87, 13, 1, 'Work form home', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(88, 13, 1, 'บริษัท Digital Marketing Agency', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(89, 13, 1, 'บริษัท นิภา เทคโนโลยี จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(90, 13, 1, 'บริษัท ไอ แพลน ดิจิตอล จำกัด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(91, 13, 1, 'บริษัทด้านการตลาด', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(92, 13, 1, 'บริษัท startup', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(93, 13, 1, 'บริษัทอื่น ๆ ที่มีการทำ Digital Marketing', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(94, 14, 1, 'Joy Ride Thailand', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(95, 14, 2, 'สถานที่พำนักของผู้สูงอายุ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(96, 14, 2, 'หอพักผู้ป่วย', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(97, 14, 2, 'บ้านพักคนชรา', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(98, 14, 2, 'ศูนย์ดูแลผู้สูงวัย เช่น โรงพยาบาลผู้สูงอายุและศูนย์เวชศาสตร์ฟื้นฟู Chersery Home KIN Nursing Home', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(99, 15, 1, 'กลุ่มบริษัทผลิตอาหารแปรรูป', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(100, 15, 1, 'โรงแรม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(101, 15, 1, 'ร้านอาหาร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(102, 15, 2, 'ห้องปฏิบัติงานทางวิทยาศาสตร์ ปฏิบัติงานนอกสถานที่', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(103, 15, 2, 'สำนักสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(104, 15, 2, 'สำนักงานจัดการมูลฝอยและสิ่งปฏิกูล', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(105, 15, 2, 'กองกำจัดมูลฝอย', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(106, 15, 2, 'กองนโยบายและแผนงาน', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(107, 15, 2, 'กรมควบคุมมลพิษ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(108, 15, 2, 'กรมส่งเสริมคุณภาพสิ่งแวดล้อม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(109, 16, 1, 'โรงแรม', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(110, 16, 1, 'ภัตตาคาร ร้านอาหาร', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(111, 16, 1, 'ร้านอาหารส่วนตัว', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(112, 16, 1, 'โรงพยาบาล', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(113, 16, 1, 'โรงงานอุตสาหกรรมหรือองค์กรต่างๆ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL),
(114, 16, 1, 'เรือสำราญ', '2023-03-23 11:41:19', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_careers`
--

DROP TABLE IF EXISTS `category_careers`;
CREATE TABLE IF NOT EXISTS `category_careers` (
  `category_career_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสหมวดหมู่อาชีพ',
  `category_career_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อหมวดหมู่อาชีพ',
  `category_career_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปภาพ',
  `category_career_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `category_career_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `category_career_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `category_career_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `category_career_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `category_career_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`category_career_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_careers`
--

INSERT INTO `category_careers` (`category_career_id`, `category_career_name`, `category_career_picture`, `category_career_at`, `category_career_by`, `category_career_up_at`, `category_career_up_by`, `category_career_del_at`, `category_career_del_by`) VALUES
(1, 'Digital IT & Media', 'image/mockup/image1.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(2, 'Energy', 'image/mockup/image2.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(3, 'Food & Agriculture', 'image/mockup/image3.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(4, 'Healthcare & Medical', 'image/mockup/image4.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(5, 'Logistics, Transport & Automation', 'image/mockup/image5.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(6, 'Materials, Design & Manufacturing', 'image/mockup/image6.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(7, 'Weather & Environment', 'image/mockup/image7.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL),
(8, 'Other', 'image/mockup/image8.png', '2023-03-13 13:35:12', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_14_083343_create_category_careers_table', 1),
(6, '2023_03_14_083521_create_careers_table', 1),
(7, '2023_03_14_102358_create_quiz_table', 1),
(8, '2023_03_15_054424_create_type_scores_table', 1),
(9, '2023_03_23_124528_create_career_detail_main_table', 1),
(10, '2023_03_25_065647_create_career_detail_education_table', 1),
(11, '2023_03_25_072625_create_career_detail_responsibility_table', 1),
(12, '2023_03_25_073150_create_career_detail_career_resemble_table', 1),
(13, '2023_03_25_073529_create_career_detail_work_place_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสแบบสอบถาม',
  `type_score_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสประเภทคะแนน',
  `quiz_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'แบบสอบถาม',
  `quiz_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `quiz_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `quiz_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `quiz_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `quiz_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `quiz_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `type_score_id`, `quiz_name`, `quiz_at`, `quiz_by`, `quiz_up_at`, `quiz_up_by`, `quiz_del_at`, `quiz_del_by`) VALUES
(1, 1, 'เป็นคนช่างสังเกตธรรมชาติ และรอบรู้เรื่องดิน ฟ้า อากาศ สัตว์ พืช', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(2, 1, 'ชอบสัตว์ต่าง ๆ และชอบสัตว์เลี้ยง', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(3, 1, 'มักคิดถึงการอนุรักษ์ทรัพยากรธรรมชาติ และการพัฒนาอย่างยั่งยืนเพื่อสิ่งแวดล้อม', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(4, 1, 'ชอบไปเที่ยวสถานที่ธรรมชาติที่สวยงาม เช่น อุทยานแห่งชาติ น้ำตก สวนพฤกษศาสตร์', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(5, 1, 'สามารถปรับตัวเข้ากับสิ่งแวดล้อมได้ดี', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(6, 2, 'คิดถึงเป้าหมายบางอย่างที่สำคัญต่อชีวิตอยู่เสมอ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(7, 2, 'ทราบว่าตนเองมีจุดเด่น และจุดบกพร่องตรงไหน', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(8, 2, 'เมื่อทำงานกลุ่ม จะเลือกทำหน้าที่ค้นหาข้อมูล', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(9, 2, 'ชอบสำรวจตัวเองเสมอ เพื่อเรียนรู้และพัฒนาตนเอง', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(10, 2, 'ชอบทำสิ่งต่าง ๆ ด้วยตนเอง มากว่าคอยให้ผู้อื่นช่วยเหลือ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(11, 3, 'มีสัมพันธภาพที่ดีในครอบครัว และกับผู้อื่น', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(12, 3, 'เป็นคนกลางเสมอ คอยไกล่เกลี่ยปัญหาระหว่างคนอื่น', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(13, 3, 'สามารถพูดชักจูงผู้อื่น ให้มาร่วมทำสิ่งที่ตนเองต้องการให้สำเร็จได้', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(14, 3, 'มีเพื่อนสนิทหลายคน', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(15, 3, 'ชอบทำกิจกรรมเป็นกลุ่ม เล่นกีฬาเป็นทีม มากกว่ากิจกรรมหรือกีฬาที่ทำคนเดียว', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(16, 4, 'สามารถบอกได้ถ้าเสียงดนตรีผิดคีย์หรือ เสียงร้องเพี้ยน', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(17, 4, 'เข้าใจและสามารถตีความเนื้อเพลง ดนตรี ที่ผู้แต่งเพลงต้องการสื่อได้', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(18, 4, 'เล่นเครื่องดนตรีได้อย่างน้อย 1 ชิ้น', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(19, 4, 'เมื่อฟังเพลง จะเคาะโต๊ะหรือขยับเท้าตามจังหวะ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(20, 4, 'ชอบและสามารถแต่งเพลง หรือเล่นดนตรีได้ทันที โดยไม่ต้องเตรียมตัวล่วงหน้า', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(21, 5, 'ชอบเล่นเครื่องเล่นหวาดเสียวเมื่อไปเที่ยวสวนสนุก เช่นเรือไวกิ้ง รถไฟเหาะตีลังกา', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(22, 5, 'ชอบทำกิจกรรมที่ต้องเคลื่อนไหวร่างกาย หรือเล่นกีฬา', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(23, 5, 'ชอบการทำงานที่ต้องใช้มือ เช่นเย็บผ้า แกะสลัก เชื่อมโลหะ ต่อโมเดล', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(24, 5, 'การเต้นออกท่าทางไม่ใช่เรื่องยาก', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(25, 5, 'ชอบทำมือประกอบท่าทางขณะพูดคุย', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(26, 6, 'ชอบเล่นจิ๊กซอว์ หรือเกมจับผิดภาพ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(27, 6, 'จินตนาการภาพในความคิดได้ชัดเจน', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(28, 6, 'มีความสามารถและสนุกกับการสร้างภาพ 3 มิติเป็นรูปทรงต่าง ๆ เช่น พับกระดาษเป็นรูปทรงต่าง ๆ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(29, 6, 'ชอบใช้การวาดรูป แผนผัง แผนที่ เพื่อช่วยในการจดจำ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(30, 6, 'สนุกกับการขีดเขียน วาดภาพ ระบายสี ปั้น', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(31, 7, 'ชอบเล่นหมากรุก หมากฮอส หรือเกมกลยุทธต่าง ๆ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(32, 7, 'ชอบตั้งคำถามว่าสิ่งต่าง ๆ ทำงานอย่างไร', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(33, 7, 'สนุกที่ได้เรียนวิชาคณิตศาสตร์และวิทยาศาสตร์', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(34, 7, 'ชอบยกตัวอย่างประกอบ เมื่อต้องอธิบายเรื่องราวต่าง ๆ ให้ผู้อื่นฟัง', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(35, 7, 'สนุกกับการพูด การเล่นคำ สำนวน คำผวน คำกลอนตลก ๆ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(36, 8, 'ชอบเล่นปริศนาคำทาย หรือเกมเกี่ยวกับภาษา เช่น สแครบเบิ้ล ปริศนาอักษรไขว้ เกมต่อคำต่าง ๆ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(37, 8, 'ชอบอ่านหนังสือ นิตยสาร ไม่เว้นแม้แต่ฉลาก และป้ายโฆษณาต่าง ๆ', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(38, 8, 'ชอบพูดและเขียนเพื่อสื่อสารสิ่งที่ตนเองคิด', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(39, 8, 'คิดว่าวิชาด้านภาษาและสังคมง่ายกว่าวิชาด้านคณิตศาสตร์และวิทยาศาสตร์', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL),
(40, 8, 'ชอบเขียน จดบันทึกความคิดเห็นต่าง ๆ ลงในสมุดบันทึกประจำวัน เฟสบุ๊ค ไลน์', '2023-03-13 16:02:44', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_scores`
--

DROP TABLE IF EXISTS `type_scores`;
CREATE TABLE IF NOT EXISTS `type_scores` (
  `type_score_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทคะแนน',
  `type_score_name_th` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อประเภทคะแนนภาษาไทย',
  `type_score_name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อประเภทคะแนนภาษาอังกฤษ',
  `type_score_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่สร้าง',
  `type_score_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สร้างโดยใคร',
  `type_score_up_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่แก้ไข',
  `type_score_up_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'แก้ไขโดยใคร',
  `type_score_del_at` timestamp NULL DEFAULT NULL COMMENT 'วันที่ลบ',
  `type_score_del_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ลบโดยใคร',
  PRIMARY KEY (`type_score_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_scores`
--

INSERT INTO `type_scores` (`type_score_id`, `type_score_name_th`, `type_score_name_en`, `type_score_at`, `type_score_by`, `type_score_up_at`, `type_score_up_by`, `type_score_del_at`, `type_score_del_by`) VALUES
(1, 'ธรรมชาติ', 'Naturalistic', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(2, 'เข้าใจตนเอง', 'Intrapersonal', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(3, 'มนุษย์สัมพันธ์', 'Interpersonal', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(4, 'ดนตรี', 'Musical', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(5, 'ร่างกายและการเคลื่อนไหว', 'Bodily-Kinesthetic', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(6, 'มิติสัมพันธ์', 'Spatial', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(7, 'ตรรกะและคณิตศาสตร์', 'Logical-Mathematical', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL),
(8, 'ภาษา', 'Linguistic', '2023-03-13 13:52:19', 'system', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
