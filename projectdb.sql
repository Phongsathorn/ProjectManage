-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 11:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_company`
--

CREATE TABLE `admin_company` (
  `admin_company_id` int(3) UNSIGNED NOT NULL,
  `admin_company_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_company_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pathimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_company`
--

INSERT INTO `admin_company` (`admin_company_id`, `admin_company_user`, `admin_company_pass`, `admin_company_name`, `status`, `pathimg`, `admin_email`) VALUES
(101109, 'Adminmaster', '123456789', 'My Admin', 'admin', '1366155295.DSC_0096-Edit-1.jpg', 'admin@gmail.com'),
(102209, 'admin1', '1234567893', 'คนดูเเลระบบคนที่1', 'admin', '1366155295.DSC_0096-Edit-1.jpg', 'admin1@gmail.com'),
(103309, 'admin2', '1234567894', 'คนดูเเลระบบคนที่2', 'admin', '1366155295.DSC_0096-Edit-1.jpg', 'admin2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `branch_project`
--

CREATE TABLE `branch_project` (
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_project`
--

INSERT INTO `branch_project` (`branch_id`, `branch_name`, `created_at`, `updated_at`) VALUES
(1, 'สาขาวิชาวิศวกรรมคอมพิวเตอร์', NULL, NULL),
(2, 'สาขาวิชาวิศวกรรมซอฟต์แวร์', NULL, NULL),
(3, 'สาขาวิทยาการคอมพิวเตอร์', NULL, NULL),
(4, 'สาขาวิชาคอมพิวเตอร์ธุรกิจ', NULL, NULL),
(5, 'สาขาวิชาเทคโนโลยีสารสนเทศ', NULL, NULL),
(6, 'สาขาวิชาภูมิสารสนเทศศาสตร์', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_project`
--

CREATE TABLE `category_project` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_project`
--

INSERT INTO `category_project` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'การศึกษา', NULL, NULL),
(2, 'ติดตาม', NULL, NULL),
(3, 'ดูเเลสุขภาพ', NULL, NULL),
(4, 'เกษตร', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fileprojectupload`
--

CREATE TABLE `fileprojectupload` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_fileproject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_fileproject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_fileproject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre_project`
--

CREATE TABLE `genre_project` (
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `genre_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre_project`
--

INSERT INTO `genre_project` (`genre_id`, `genre_name`, `created_at`, `updated_at`) VALUES
(1, 'เว็บ', NULL, NULL),
(2, 'เว็บเเอพพลิเคชัน', NULL, NULL),
(3, 'เเอพพลิเคชัน', NULL, NULL),
(4, 'ไอโอที(IoT)', NULL, NULL),
(5, 'ปัญญาประดิษฐ์(Ai)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imgaccount`
--

CREATE TABLE `imgaccount` (
  `imgaccount_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `imgaccount_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `img_project`
--

CREATE TABLE `img_project` (
  `img_p_id` int(2) UNSIGNED NOT NULL,
  `img_p_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_p_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_p_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `p_id` int(20) DEFAULT NULL,
  `p_admin_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `img_project`
--

INSERT INTO `img_project` (`img_p_id`, `img_p_1`, `img_p_2`, `img_p_3`, `created_at`, `updated_at`, `p_id`, `p_admin_id`) VALUES
(2, '1186069062.photographer-964014_960_720.jpg', '220506268.photographer-964023_960_720 .jpg', 'defaultimg1.png', NULL, '2020-08-04 14:43:49', 1, NULL),
(5, 'defaultimg1.png', 'defaultimg1.png', 'defaultimg1.png', NULL, '2020-08-05 13:18:03', 6, NULL),
(6, '1714032425.pics223.jpg', '1476998724.picswallpaper23.jpg', 'defaultimg1.png', NULL, '2020-08-09 14:38:11', 2, NULL),
(7, '1315588803.65156156151.jpg', '382199224.ab4fa641d2db8093344c9abb580a737d.jpg', '2048964279.images.png', NULL, '2020-08-11 19:05:42', 4, NULL),
(8, '236128080.Dtbezn3nNUxytg04N0vVCz6ixTUxVhIBKJDndfpGB4LGgq.jpg', '807127859.Screenshot_20161220-204108.png', '1508451123.unnamed.jpg', NULL, '2020-08-11 19:11:17', 3, NULL),
(25, 'defaultimg1.png', 'defaultimg1.png', 'defaultimg1.png', NULL, '2020-08-12 17:54:41', 101109, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `img_upload`
--

CREATE TABLE `img_upload` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `originname_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_09_132633_addproject_table', 1),
(4, '2020_06_17_155713_fileprojectupload_table', 1),
(5, '2020_06_18_134153_imgupload', 1),
(6, '2020_06_24_183719_admin_company', 1),
(7, '2020_07_17_182612_type_project_table', 1),
(8, '2020_07_17_183214_genre_project_table', 1),
(9, '2020_07_17_183427_branch_project_table', 1),
(10, '2020_07_18_015431_projects_table', 1),
(11, '2020_07_21_161851_imgaccount_table', 1),
(14, '2020_07_30_183421_imgproject_table', 2),
(16, '2020_08_02_050921_project_m_d_d_table', 3),
(18, '2020_08_12_154935_owner_table', 4),
(19, '2020_08_12_163912_ownermdd_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `owner_project`
--

CREATE TABLE `owner_project` (
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advisor_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner_projectmdd`
--

CREATE TABLE `owner_projectmdd` (
  `owner_m_id` bigint(20) UNSIGNED NOT NULL,
  `owner_m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advisor_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `p_m_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owner_projectmdd`
--

INSERT INTO `owner_projectmdd` (`owner_m_id`, `owner_m_name`, `facebook_m`, `email_m`, `phone_m`, `advisor_m`, `admin_id`, `created_at`, `updated_at`, `p_m_id`) VALUES
(12, 'นายไพสาท พูยยาท', 'ไพสาท พูยยาท', 'paysan@gmail.com', '0851236598', 'ดร.สาทสัม ความภัค', 101109, '2020-08-12 10:09:03', '2020-08-12 10:09:03', NULL),
(13, 'นายไพสาท พูยยาท', 'ไพสาท พูยยาท', 'paysan@gmail.com', '0851236598', 'ดร.สาทสัม ความภัค', 101109, '2020-08-12 10:09:18', '2020-08-12 10:09:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectmdd`
--

CREATE TABLE `projectmdd` (
  `project_m_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `project_m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword_m_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des_m_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `genre_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `branch_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_m_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `owner_m_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advisor_m` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_m` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_m` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_m` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectmdd`
--

INSERT INTO `projectmdd` (`project_m_id`, `user_id`, `project_m_name`, `keyword_m_project`, `des_m_project`, `type_id`, `genre_id`, `category_id`, `branch_id`, `created_at`, `updated_at`, `project_m_name_en`, `owner_m_name`, `advisor_m`, `facebook_m`, `email_m`, `phone_m`) VALUES
(1, 5, 'พฤติกรรมการใช้ การสื่อสาร และผลกระทบจากการใช้เฟซบุ๊กของนักศึกษา  มหาวิทยาลัยปทุมธานี', 'เฟซบุ๊ก พฤติกรรมการสื่อสาร ผลกระทบ', 'การวิจยัคร้ังน้ีมีวตัถุประสงคเ์พื่อศึกษา 1) พฤติกรรมการใช้เฟซบุ๊ค 2) พฤติกรรมการ สื่ อสารผ่านเฟซบุ๊ค 3) ผลกระทบจากการใช้เฟซบุ๊ก', 1, 1, 1, NULL, '2020-08-01 23:50:14', '2020-08-11 15:51:16', 'Communication usageses', NULL, NULL, NULL, NULL, NULL),
(28, 101109, 'อุปกรณ์ช่วยคน', 'อุปกรณ์ ช่วยเหลือ', 'อุปกรณ์ช่วยอำนวยความสะดวกให้กับมนุษยชาติ', 2, 4, 3, 2, '2020-08-12 10:33:03', '2020-08-12 10:33:03', 'Communication', 'นายไพสาท พูยยาท', 'ดร.สาทสัม ความภัค', 'ไพสาท พูยยาท', 'paysan@gmail.com', '0851236598');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(5) UNSIGNED NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `genre_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `branch_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_p` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_p` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_p` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_p` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advisor_p` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_p_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `user_id`, `project_name`, `keyword_project`, `des_project`, `type_id`, `genre_id`, `category_id`, `branch_id`, `created_at`, `updated_at`, `logo`, `name_en`, `facebook_p`, `email_p`, `phone_p`, `owner_p`, `advisor_p`, `admin_p_id`) VALUES
(2, 1, 'ระบบตรวจเช็คสภาพอากาศไฟฟ้า', 'สภาพอากาศร้อน', 'ระบบเช็คยอดการใช้ไฟฟ้าจะเป็นระบบที่ทำการวัดค่าไฟจากหม้อเเปลงไฟฟ้า', 2, 2, 2, NULL, '2020-07-30 19:45:31', '2020-08-04 14:43:49', '1923448457.logoapp.png', 'System', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 6, 'ลลินนนนน', 'NLP deep learning', 'อิอิ', 2, 5, 1, NULL, '2020-08-05 06:18:03', '2020-08-11 19:03:49', 'defaultlogo.png', 'lilin', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, 'ระบบตรวจเช็คสภาพอากาศ', 'สภาพอากาศ', 'ระบบตรวจเช็คสภาพอากาศจะเป็นตรวจสภาพอากาศนะพื้นที่นั้นๆ', 1, 3, 2, NULL, '2020-08-09 07:38:11', '2020-08-11 18:58:02', '1549129685.unnamed.png', 'atmospherese', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 4, 'กล้องดักถ่ายภาพอัตโนมัติ', 'กล้องถ่ายภาพ อัตโนมัติ', 'โปรเจคนี้ สามารถประยุกต์เป็นกล้องดักถ่ายภาพเมื่อมีผู้บุกรุก หรือเป็นกล้องดักถ่ายภาพสัตว์ มีชื่อเรียกหลายชื่อได้แก่ Trail Cam, Scout Cam, Camera Trap โดยผู้ใช้งานโดยซ่อนไว้ใกล้บริเวณทางที่สัตว์เดินผ่าน', 2, 4, 4, NULL, '2020-08-09 08:22:46', '2020-08-11 19:05:42', '2078841161.396cd8e1d8557f73c786892cffa4f13c.png', '', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 3, 'วัดความชื้นในดิน', 'วัด ความชื้น', 'สมาร์ทฟาร์มได้โดยหลักการทำงานคือเมื่อเซ็นเซอร์วัดความชื้นในดินตรวจสอบค่าข้อมูลความชื้นในดินของพืชที่ปลูกไว้ถ้ามีค่าเท่ากับหรือมากกว่าค่าที่ตั้งไว้ในตัวอย่าง', 2, 4, 2, NULL, '2020-08-09 08:29:35', '2020-08-11 19:11:17', '1901875668.wewillapp_20190429164900_phpKUYTri.png', 'Measure soil moisture', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 101109, 'อุปกรณ์ช่วยคน', 'อุปกรณ์ ช่วยเหลือ', 'ระบบเช็คยอดการใช้ไฟฟ้าจะเป็นระบบที่ทำการวัดค่าไฟจากหม้อเเปลงไฟฟ้า', 1, 4, 3, 3, '2020-08-12 10:54:41', '2020-08-12 10:54:41', 'defaultlogo.png', 'Communication', 'รุณ รานู', 'ranu_ra@gmail.com', '0863695789', 'นางสาวรุณ รานู', 'อ.กาญจวัต นากุลจุ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_project`
--

CREATE TABLE `type_project` (
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_project`
--

INSERT INTO `type_project` (`type_id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'วิจัย', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'โครงงาน', NULL, NULL),
(3, 'วิทยานิพนธ์', NULL, NULL),
(4, 'หนังสือ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pathimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `province`, `email`, `email_verified_at`, `username`, `password`, `confirm_password`, `pathimg`, `remember_token`, `created_at`, `updated_at`, `status`, `facebook`, `phone`) VALUES
(1, 'Ohmme nattapon', 'ชาย', 'หนองบัวลำภู', 'ohmsbn@gmail.com', NULL, 'ohmsbn123', '123456789', NULL, '1535551481.DSC_0101-4.jpg', NULL, '2020-07-24 01:53:56', '2020-08-04 14:43:49', 'user', 'Ohm Nattapon Sbn', '0992479271'),
(2, 'nattapon', 'ชาย', 'ตาก', 'ommi406@outlook.com', NULL, 'changofking', '1234567899', NULL, '545949393.DSC_0032-Edit-3.jpg', NULL, '2020-07-24 01:56:33', '2020-08-11 18:58:02', 'user', '', ''),
(3, 'ณัฐพล', 'หญิง', 'สระแก้ว', 'tong@gmail.com', NULL, 'tongde', '1234567893', NULL, '1417253767.DSC_0108-Edit-2.jpg', NULL, '2020-07-24 02:00:53', '2020-08-11 19:11:16', 'user', '', ''),
(4, 'นายณัฐพล สมบัตินันท์', 'ชาย', 'ระยอง', '60020637@up.ac.th', NULL, 'ohmsbn369', '1234567894', NULL, '993224126.DSC_0101.jpg', NULL, '2020-07-28 03:23:07', '2020-08-11 19:05:42', 'user', '', ''),
(5, 'โท เอก', 'หญิง', 'อุบลราชธานี', 'toraka@gmail.com', NULL, 'toaka', '789456123', NULL, 'default.png', NULL, '2020-08-01 22:29:34', '2020-08-01 22:29:34', 'user', NULL, NULL),
(6, 'ธนกฤต กันสุรีย์', 'ชาย', 'พะเยา', 'aof@gmail.com', NULL, 'aof', '12345678', NULL, '2025217341.photographer-964014_960_720.jpg', NULL, '2020-08-05 04:24:53', '2020-08-11 19:03:49', 'user', '', ''),
(7, 'ดวงเดช สมดี', 'หญิง', 'หนองบัวลำภู', 'sandas@gmail.com', NULL, 'sandas', '1234567896', NULL, 'default.png', NULL, '2020-08-11 11:14:32', '2020-08-11 11:14:32', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_company`
--
ALTER TABLE `admin_company`
  ADD PRIMARY KEY (`admin_company_id`);

--
-- Indexes for table `branch_project`
--
ALTER TABLE `branch_project`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `category_project`
--
ALTER TABLE `category_project`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `fileprojectupload`
--
ALTER TABLE `fileprojectupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre_project`
--
ALTER TABLE `genre_project`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `imgaccount`
--
ALTER TABLE `imgaccount`
  ADD PRIMARY KEY (`imgaccount_id`);

--
-- Indexes for table `img_project`
--
ALTER TABLE `img_project`
  ADD PRIMARY KEY (`img_p_id`);

--
-- Indexes for table `img_upload`
--
ALTER TABLE `img_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_project`
--
ALTER TABLE `owner_project`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `owner_projectmdd`
--
ALTER TABLE `owner_projectmdd`
  ADD PRIMARY KEY (`owner_m_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `projectmdd`
--
ALTER TABLE `projectmdd`
  ADD PRIMARY KEY (`project_m_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `type_project`
--
ALTER TABLE `type_project`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_company`
--
ALTER TABLE `admin_company`
  MODIFY `admin_company_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103311;

--
-- AUTO_INCREMENT for table `branch_project`
--
ALTER TABLE `branch_project`
  MODIFY `branch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_project`
--
ALTER TABLE `category_project`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fileprojectupload`
--
ALTER TABLE `fileprojectupload`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre_project`
--
ALTER TABLE `genre_project`
  MODIFY `genre_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `imgaccount`
--
ALTER TABLE `imgaccount`
  MODIFY `imgaccount_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_project`
--
ALTER TABLE `img_project`
  MODIFY `img_p_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `img_upload`
--
ALTER TABLE `img_upload`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `owner_project`
--
ALTER TABLE `owner_project`
  MODIFY `owner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner_projectmdd`
--
ALTER TABLE `owner_projectmdd`
  MODIFY `owner_m_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectmdd`
--
ALTER TABLE `projectmdd`
  MODIFY `project_m_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `type_project`
--
ALTER TABLE `type_project`
  MODIFY `type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
