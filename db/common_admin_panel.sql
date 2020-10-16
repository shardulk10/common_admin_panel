--
-- Database: `common_admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(11) NOT NULL,
  `banner_heading` varchar(555) NOT NULL,
  `image_path` varchar(555) NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` int(4) NOT NULL,
  `updatedby` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emailsubscription`
--

CREATE TABLE `tbl_emailsubscription` (
  `id` int(11) NOT NULL,
  `email` varchar(555) NOT NULL,
  `subscribed` int(5) NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` tinytext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` int(4) NOT NULL,
  `updatedby` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `gallery_heading` varchar(555) NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `image_path` varchar(855) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homepage_accordion`
--

CREATE TABLE `tbl_homepage_accordion` (
  `id` int(5) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_order` int(2) NOT NULL,
  `createdby` tinyint(3) NOT NULL,
  `updatedby` tinyint(3) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_homepage_accordion`
--

INSERT INTO `tbl_homepage_accordion` (`id`, `image_path`, `image_order`, `createdby`, `updatedby`, `created_datetime`, `updated_datetime`, `published`) VALUES
(1, 'http://itmi-admin.aajtak.in/assets/uploads/hp_slider/1-bj-page1.jpg', 1, 1, 0, '2018-11-12 08:13:30', '2018-11-12 08:13:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '203.187.202.26', 'Chrome 49.0.2623.112', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 'Windows XP', '2019-12-21 12:25:04'),
(2, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.51.25.162', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2019-12-23 07:22:07'),
(3, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '219.91.135.2', 'Chrome 49.0.2623.112', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 'Windows XP', '2019-12-25 09:40:58'),
(4, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '123.201.94.251', 'Chrome 49.0.2623.112', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', 'Windows XP', '2019-12-28 02:48:10'),
(5, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-21 07:40:58'),
(6, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-21 07:43:00'),
(7, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-21 22:40:57'),
(8, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 10', '2020-01-22 02:47:36'),
(9, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '203.187.202.212', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-22 10:23:41'),
(10, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-23 01:36:27'),
(11, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '219.91.139.196', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-23 09:56:46'),
(12, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '219.91.139.196', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-23 10:58:42'),
(13, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '175.100.130.16', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-24 04:54:13'),
(14, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 10', '2020-01-29 07:17:10'),
(15, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.4 Safari/605.1.15', 'Mac OS X', '2020-01-30 02:20:56'),
(16, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_2) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.4 Safari/605.1.15', 'Mac OS X', '2020-01-30 04:42:22'),
(17, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15', 'Mac OS X', '2020-02-01 00:35:01'),
(18, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Mac OS X', '2020-02-03 07:24:07'),
(19, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15', 'Mac OS X', '2020-02-03 20:45:03'),
(20, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15', 'Mac OS X', '2020-02-04 06:16:25'),
(21, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', 'Windows 10', '2020-02-18 07:12:59'),
(22, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Chrome 80.0.3987.116', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36', 'Mac OS X', '2020-02-20 05:14:10'),
(23, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36', 'Windows 10', '2020-02-20 06:26:33'),
(24, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36', 'Windows 10', '2020-02-20 22:38:17'),
(25, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36', 'Windows 10', '2020-02-21 07:25:05'),
(26, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36', 'Windows 10', '2020-02-24 06:30:10'),
(27, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-02-28 07:14:56'),
(28, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Mac OS X', '2020-03-01 23:41:09'),
(29, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Windows 10', '2020-03-03 06:55:31'),
(30, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '139.59.95.169', 'Chrome 80.0.3987.122', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 'Mac OS X', '2020-03-04 06:59:04'),
(31, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '103.143.9.62', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Windows 10', '2020-03-11 05:27:39'),
(32, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.215', 'Chrome 80.0.3987.132', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 'Mac OS X', '2020-03-14 01:19:07'),
(33, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '45.118.160.230', 'Chrome 84.0.4147.135', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36', 'Mac OS X', '2020-08-25 02:08:42'),
(34, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '123.201.94.199', 'Chrome 85.0.4183.121', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'Windows 10', '2020-10-06 00:17:11'),
(35, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '123.201.94.199', 'Chrome 85.0.4183.121', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'Windows 10', '2020-10-06 00:20:19'),
(36, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 86.0.4240.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'Windows 10', '2020-10-15 13:07:54'),
(37, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 86.0.4240.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'Windows 10', '2020-10-15 15:44:17'),
(38, 1, '{\"role\":\"1\",\"siteId\":\"0\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 86.0.4240.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'Windows 10', '2020-10-16 17:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oneliner`
--

CREATE TABLE `tbl_oneliner` (
  `id` int(11) NOT NULL,
  `oneliner` varchar(555) NOT NULL,
  `createdby` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `profile_category` int(2) NOT NULL,
  `profile_name` varchar(100) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `profile_title` varchar(255) NOT NULL,
  `profile_short_description` tinytext NOT NULL,
  `profile_long_description` longtext NOT NULL,
  `associated_programmes` tinytext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` int(4) NOT NULL,
  `updatedby` int(4) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` tinytext NOT NULL,
  `meta_description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile_category`
--

CREATE TABLE `tbl_profile_category` (
  `id` int(5) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` tinyint(3) NOT NULL,
  `updatedby` tinyint(3) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` tinytext NOT NULL,
  `meta_description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programme_category`
--

CREATE TABLE `tbl_programme_category` (
  `id` int(5) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` tinyint(3) NOT NULL,
  `updatedby` tinyint(3) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` tinytext NOT NULL,
  `meta_description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programme_details`
--

CREATE TABLE `tbl_programme_details` (
  `id` int(11) NOT NULL,
  `programme_id` int(11) NOT NULL,
  `block_name` varchar(255) NOT NULL,
  `block_description` text NOT NULL,
  `block_order` int(3) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `is_career_block` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programme_info`
--

CREATE TABLE `tbl_programme_info` (
  `id` int(11) NOT NULL,
  `programme_category` tinyint(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `structure_info` text NOT NULL,
  `faculty` varchar(155) NOT NULL,
  `career_opportunity` text NOT NULL,
  `youtube_video` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` int(4) NOT NULL,
  `updatedby` int(4) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` tinytext NOT NULL,
  `meta_description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `key` varchar(555) NOT NULL,
  `value` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `key`, `value`) VALUES
(1, 'phone', '9820009255'),
(2, 'email', 'shardulk10@ggmail.com'),
(3, 'facebook_page_url', 'https://facebook.com/shardulkulkarni10'),
(4, 'twitter_page_url', 'https://twitter.com/shardulk10'),
(5, 'you_tube_page_url', 'https://www.instagram.com/shardulk10'),
(6, 'linkedin_page_url', ' https://www.linkedin.com/in/shardulkulkarni1084'),
(7, 'address', '18-A, 34, Vrundavan Vaibhav co op Society, Near Vrundavan Bus Stop, Thane West, 400601'),
(8, 'whatsapp', 'https://wa.me/919820009255');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staticpages`
--

CREATE TABLE `tbl_staticpages` (
  `id` int(11) NOT NULL,
  `page_type` tinyint(3) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `body_content` longtext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` int(4) NOT NULL,
  `updatedby` int(4) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` tinytext NOT NULL,
  `meta_description` tinytext NOT NULL,
  `menu_name` varchar(555) NOT NULL,
  `mainpage` int(1) NOT NULL,
  `slug` varchar(555) NOT NULL,
  `menu_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  `createdby` int(4) NOT NULL,
  `updatedby` int(4) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` tinytext NOT NULL,
  `meta_description` tinytext NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `siteId` int(11) NOT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `siteId`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@admin.com', '$2y$10$0PGAh3U8/iqO5CfJllRtVeJjqFVQ6o4f9C6BebsCfNQ6tOuA1pHxa', 'System Administrator', '1', 0, 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-07-26 15:35:51'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9898989898', 0, 2, 1, 1, '2016-12-09 17:49:56', 1, '2020-10-15 12:41:57'),
(3, 'employee@example.com', '$2y$10$0PGAh3U8/iqO5CfJllRtVeJjqFVQ6o4f9C6BebsCfNQ6tOuA1pHxa', 'Employee', '11111', 0, 3, 1, 1, '2016-12-09 17:50:22', 1, '2020-10-15 12:42:01'),
(9, 'sczx@kasd.com', '$2y$10$1tSQdLCgdSm5sorbgQwFf.2hHqGPHa0qHMO8ybGOf9X60Ak3rfAXi', 'Zc', '11111', 0, 3, 1, 1, '2018-04-11 16:29:11', 1, '2020-10-15 12:42:04'),
(10, 'asd@hgasd.com', '$2y$10$2/5MLJl4ZxqPbrVvsFq0yeeMfufkRGKGBu0fQZfa.ECZgHmTP8nbi', 'Asdasd', '11111', 1, 2, 1, 1, '2018-04-11 16:31:37', 1, '2020-10-15 12:42:06'),
(11, 'parmendra.kumar@gmail.com', '$2y$10$u6VxxYJIg2mI9Y4KHrp6luI1UCqxruXMmgR1a5bCuuZfEL.xogasy', 'Dsfdsf', '9898989898', 0, 3, 1, 1, '2018-11-19 08:01:19', 1, '2018-11-19 08:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `id` int(11) NOT NULL,
  `videos_heading` varchar(555) NOT NULL,
  `videos_url` varchar(855) NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_emailsubscription`
--
ALTER TABLE `tbl_emailsubscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_homepage_accordion`
--
ALTER TABLE `tbl_homepage_accordion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_oneliner`
--
ALTER TABLE `tbl_oneliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile_category`
--
ALTER TABLE `tbl_profile_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_programme_category`
--
ALTER TABLE `tbl_programme_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_programme_details`
--
ALTER TABLE `tbl_programme_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_programme_info`
--
ALTER TABLE `tbl_programme_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staticpages`
--
ALTER TABLE `tbl_staticpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_emailsubscription`
--
ALTER TABLE `tbl_emailsubscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_homepage_accordion`
--
ALTER TABLE `tbl_homepage_accordion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_oneliner`
--
ALTER TABLE `tbl_oneliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_profile_category`
--
ALTER TABLE `tbl_profile_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_programme_category`
--
ALTER TABLE `tbl_programme_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_programme_details`
--
ALTER TABLE `tbl_programme_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_programme_info`
--
ALTER TABLE `tbl_programme_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_staticpages`
--
ALTER TABLE `tbl_staticpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
