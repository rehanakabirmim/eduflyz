-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2023 at 01:48 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduone`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` bigint UNSIGNED NOT NULL,
  `question_id` int NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `answer`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, 'A) Gram', 0, NULL, '2023-10-28 07:05:46'),
(2, 1, 'B) Kilogram', 1, NULL, '2023-10-28 07:05:46'),
(3, 1, 'C) POUND', 0, NULL, '2023-10-28 07:05:46'),
(4, 1, 'D) DOZEN', 0, NULL, '2023-10-28 07:05:46'),
(5, 2, 'A) Vernier Calipers', 0, NULL, NULL),
(6, 2, 'B) Micrometer', 0, NULL, NULL),
(7, 2, 'C) RULER', 0, NULL, NULL),
(8, 2, 'D) PROTRACTOR', 1, NULL, NULL),
(9, 3, 'A) Amount of space', 0, NULL, NULL),
(10, 3, 'B) Amount of time', 0, NULL, NULL),
(11, 3, 'C) Amount of weight', 0, NULL, NULL),
(12, 3, 'D) Amount of matter', 1, NULL, NULL),
(13, 4, 'A) Beam balance', 1, NULL, NULL),
(14, 4, 'B) Clock', 0, NULL, NULL),
(15, 4, 'C) Our hands', 0, NULL, NULL),
(16, 4, 'D) Water', 0, NULL, NULL),
(17, 5, 'A) Scalar quantity', 1, NULL, NULL),
(18, 5, 'B) Vector quantity', 0, NULL, NULL),
(19, 5, 'C) Free quantity', 0, NULL, NULL),
(20, 5, 'D) Dependent quantity', 0, NULL, NULL),
(21, 6, 'A) Mass', 0, NULL, NULL),
(22, 6, 'B) Time', 0, NULL, NULL),
(23, 6, 'C) Pressure', 0, NULL, NULL),
(24, 6, 'D) Force', 1, NULL, NULL),
(25, 7, 'A) Kilogram', 1, NULL, NULL),
(26, 7, 'B) Newton', 0, NULL, NULL),
(27, 7, 'C) Second', 0, NULL, NULL),
(28, 7, 'D) Mile', 0, NULL, NULL),
(29, 8, 'A) second', 0, NULL, NULL),
(30, 8, 'B) Steradian', 1, NULL, NULL),
(31, 8, 'C) kilogram', 0, NULL, NULL),
(32, 8, 'D) candela', 0, NULL, NULL),
(33, 9, 'A) Astronomy Unit', 0, NULL, NULL),
(34, 9, 'B) Astronomical unit', 1, NULL, NULL),
(35, 9, 'C) Astrological Unit', 0, NULL, NULL),
(36, 9, 'D) Archaeological Unit', 0, NULL, NULL),
(37, 10, 'A) Acceleration', 0, NULL, NULL),
(38, 10, 'B) Velocity', 0, NULL, NULL),
(39, 10, 'C) Work', 1, NULL, NULL),
(40, 10, 'D) Force', 0, NULL, NULL),
(41, 11, 'A) Luminosity', 0, NULL, NULL),
(42, 11, 'B) Wavelength', 0, NULL, NULL),
(43, 11, 'C) Permittivity', 1, NULL, NULL),
(44, 11, 'D) Inertia', 0, NULL, NULL),
(45, 12, 'A) Luminosity', 0, NULL, NULL),
(46, 12, 'B) Frequency', 0, NULL, NULL),
(47, 12, 'C) Force', 0, NULL, NULL),
(48, 12, 'D) Energy', 1, NULL, NULL),
(49, 13, 'A) Force', 0, NULL, NULL),
(50, 13, 'B) Angular momentum', 1, NULL, NULL),
(51, 13, 'C) Energy', 0, NULL, NULL),
(52, 13, 'D) Power', 0, NULL, NULL),
(53, 14, 'A) Absolute count', 0, NULL, NULL),
(54, 14, 'B) Least count', 1, NULL, NULL),
(55, 14, 'C) Round off value', 0, NULL, NULL),
(56, 14, 'D) Minimum count', 0, NULL, NULL),
(57, 15, 'A) SMS system', 0, NULL, NULL),
(58, 15, 'B) MKP system', 0, NULL, NULL),
(59, 15, 'C) FPS System', 1, NULL, NULL),
(60, 15, 'D) CJS System', 0, NULL, NULL),
(61, 16, 'A) Work', 1, NULL, NULL),
(62, 16, 'B) Force', 0, NULL, NULL),
(63, 16, 'C) Momentum', 0, NULL, NULL),
(64, 16, 'D) Pressure', 0, NULL, NULL),
(65, 17, 'A) Ohm', 0, NULL, NULL),
(66, 17, 'B) Newton', 0, NULL, NULL),
(67, 17, 'C) Electron Volt', 1, NULL, NULL),
(68, 17, 'D) Farad', 0, NULL, NULL),
(69, 18, 'A) Base Units', 0, NULL, NULL),
(70, 18, 'B) Fundamental Units', 0, NULL, NULL),
(71, 18, 'C) System of Units', 1, NULL, NULL),
(72, 18, 'D) None of the above', 0, NULL, NULL),
(73, 19, 'A) 9.46 km', 0, NULL, NULL),
(74, 19, 'B) 9.46 m', 0, NULL, NULL),
(75, 19, 'C) 9.46 x 1015 m', 1, NULL, NULL),
(76, 19, 'D) 9.46 x 10-15 m', 0, NULL, NULL),
(77, 20, 'A) Amperes', 0, NULL, NULL),
(78, 20, 'B) Metre', 0, NULL, NULL),
(79, 20, 'C) Newton', 0, NULL, NULL),
(80, 20, 'D) Hertz', 1, NULL, NULL),
(97, 25, 'A) PHP is an open-source programming language', 0, NULL, NULL),
(98, 25, 'B) PHP is used to develop dynamic and interactive websites', 0, NULL, NULL),
(99, 25, 'C) PHP is a server-side scripting language', 0, NULL, NULL),
(100, 25, 'D) All of the mentioned', 1, NULL, NULL),
(101, 26, 'A) Drek Kolkevi', 0, NULL, NULL),
(102, 26, 'B) Rasmus Lerdorf', 1, NULL, NULL),
(103, 26, 'C) Willam Makepiece', 0, NULL, NULL),
(104, 26, 'D) List Barely', 0, NULL, NULL),
(105, 27, 'A) <?php ?>', 0, NULL, NULL),
(106, 27, 'B) < php >', 0, NULL, NULL),
(107, 27, 'C) < ? php ?>', 0, NULL, NULL),
(108, 27, 'D) <? ?>', 1, NULL, NULL),
(109, 28, 'A) Identifying defects in software', 0, NULL, NULL),
(110, 28, 'B) Enhancing software development speed', 0, NULL, NULL),
(111, 28, 'C) Ensuring software quality and reliability', 1, NULL, NULL),
(112, 28, 'D) Reducing project costs', 0, NULL, NULL),
(113, 29, 'A) Planning', 0, NULL, NULL),
(114, 29, 'B) Coding', 0, NULL, NULL),
(115, 29, 'C) Testing', 1, NULL, NULL),
(116, 29, 'D) Deployment', 0, NULL, NULL),
(117, 30, 'A) Unit testing', 0, NULL, NULL),
(118, 30, 'B) Functional testing', 0, NULL, NULL),
(119, 30, 'C) Regression testing', 0, NULL, NULL),
(120, 30, 'D) Load testing', 1, NULL, NULL),
(121, 31, 'A) Confirming that the software works as intended', 0, NULL, NULL),
(122, 31, 'B) Confirming that the right product is being built', 1, NULL, NULL),
(123, 31, 'C) Fixing defects in the software', 0, NULL, NULL),
(124, 31, 'D) Testing the software\'s performance', 0, NULL, NULL),
(125, 32, 'A) Code review', 1, NULL, NULL),
(126, 32, 'B) System testing', 0, NULL, NULL),
(127, 32, 'C) User acceptance testing', 0, NULL, NULL),
(128, 32, 'D) Alpha testing', 0, NULL, NULL),
(129, 33, 'A) Equivalence partitioning', 0, NULL, NULL),
(130, 33, 'B) Traceability', 1, NULL, NULL),
(131, 33, 'C) Usability testing', 0, NULL, NULL),
(132, 33, 'D) Alpha testing', 0, NULL, NULL),
(133, 34, 'A) list', 1, NULL, NULL),
(134, 34, 'B) tuple', 0, NULL, NULL),
(135, 34, 'C) set', 0, NULL, NULL),
(136, 34, 'D) dictionary', 0, NULL, NULL),
(137, 35, 'A) func', 0, NULL, NULL),
(138, 35, 'B) function', 0, NULL, NULL),
(139, 35, 'C) define', 0, NULL, NULL),
(140, 35, 'D) def', 1, NULL, NULL),
(141, 36, 'A) // This is a comment', 1, NULL, NULL),
(142, 36, 'B) # This is a comment', 0, NULL, NULL),
(143, 36, 'C) \'\'\' This is a comment \'\'\'', 0, NULL, NULL),
(144, 36, 'D) \"\"\" This is a comment \"\"\"', 0, NULL, NULL),
(145, 37, 'A) remove()', 0, NULL, NULL),
(146, 37, 'B) delete()', 0, NULL, NULL),
(147, 37, 'C) pop()', 1, NULL, NULL),
(148, 37, 'D) discard()', 0, NULL, NULL),
(149, 38, 'A) 12', 0, NULL, NULL),
(150, 38, 'B) 18', 1, NULL, NULL),
(151, 38, 'C) 24', 0, NULL, NULL),
(152, 38, 'D) 48', 0, NULL, NULL),
(153, 39, 'A) NumPy', 1, NULL, NULL),
(154, 39, 'B) Matplotlib', 0, NULL, NULL),
(155, 39, 'C) Requests', 0, NULL, NULL),
(156, 39, 'D) Random', 0, NULL, NULL),
(157, 40, 'A) Pariatur In sunt o', 0, NULL, NULL),
(158, 40, 'B) Consequuntur volupta', 0, NULL, NULL),
(159, 40, 'C) Ut distinctio Exerc', 1, NULL, NULL),
(160, 40, 'D) Corrupti ut aute ve', 0, NULL, NULL),
(161, 41, 'A) a', 1, NULL, NULL),
(162, 41, 'B) b', 0, NULL, NULL),
(163, 41, 'C) c', 0, NULL, NULL),
(164, 41, 'D) d', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint UNSIGNED NOT NULL,
  `assignment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` date NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `assignment_name`, `course_id`, `slug`, `due_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Assignment On Measurements', 12, 'assignment-one', '2023-11-15', 'active', NULL, '2023-11-10 02:27:02'),
(2, 'Assignment Two', 2, 'assignment-two', '2023-11-15', 'active', NULL, '2023-11-01 00:17:39'),
(3, 'problem solving', 8, 'ps', '2023-11-07', 'active', NULL, '2023-11-03 07:11:13'),
(4, 'MCQ test', 8, 'php', '2023-11-03', 'active', NULL, NULL),
(5, 'Test Case Generation', 12, 'TestCaseGeneration', '2023-11-08', 'active', NULL, NULL),
(8, 'Conditional Statements and Loops Task', 13, 'Conditional', '2023-11-12', 'active', NULL, NULL),
(9, 'assignment2', 13, 'assignment2', '2023-11-15', 'active', NULL, '2023-11-10 02:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_submissions`
--

CREATE TABLE `assignment_submissions` (
  `id` bigint UNSIGNED NOT NULL,
  `assignment_id` int NOT NULL,
  `user_id` int NOT NULL,
  `course_id` int NOT NULL,
  `submitted_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignment_submissions`
--

INSERT INTO `assignment_submissions` (`id`, `assignment_id`, `user_id`, `course_id`, `submitted_file`, `created_at`, `updated_at`) VALUES
(11, 8, 3, 13, 'upload/assignment/1782164628294234.pdf', '2023-11-09 18:00:00', NULL),
(13, 9, 3, 13, 'upload/assignment/1782180418830652.pdf', '2023-11-09 18:00:00', NULL),
(15, 8, 27, 13, 'upload/assignment/1782183738347913.pdf', '2023-11-09 18:00:00', NULL),
(16, 9, 27, 13, 'upload/assignment/1782183789573401.pdf', '2023-11-09 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` int NOT NULL,
  `user_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `course_id`, `user_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(30, 8, 14, 1, 4500, NULL, NULL),
(32, 8, 16, 1, 4500, NULL, NULL),
(50, 11, 11, 1, 400, NULL, NULL),
(56, 9, 3, 1, 450, NULL, NULL),
(58, 12, 28, 1, 5000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `certificate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `certificate_name`, `course_id`, `course_name`, `user_id`, `user_name`, `user_phone`, `user_email`, `created_at`, `updated_at`) VALUES
(4, 'python development', '13', 'Python Best Practices and Code Optimization', '3', 'Rakib Hasan', '', 'user@example.com', '2023-11-10 07:15:58', NULL),
(5, 'Python WIth Django', '13', 'Python Best Practices and Code Optimization', '27', 'Sabbir', '01718022214', 'tauhid10030@gmail.com', '2023-11-10 07:28:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` bigint UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `type` enum('flat','percentage') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `coupon_code`, `amount`, `type`, `created_at`, `updated_at`) VALUES
(1, 'NewYear10', 10, 'percentage', NULL, NULL),
(3, 'FLAT100', 100, 'flat', NULL, NULL),
(4, 'Discount23', 1090, 'flat', NULL, NULL),
(5, 'SQA101', 20, 'percentage', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` enum('recorded','live') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `course_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_learnop` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_requirment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_count` int NOT NULL DEFAULT '0',
  `course_duration` int NOT NULL DEFAULT '0',
  `intro_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_type`, `category_id`, `category_name`, `teacher_id`, `teacher_name`, `price`, `course_summary`, `course_img`, `course_description`, `course_learnop`, `course_requirment`, `lesson_count`, `course_duration`, `intro_link`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Microsoft Excel Zero to Hero', 'recorded', 1, 'Skills & Office Courses', 2, 'Arindam Utsha', 350, 'সহজ টিউটোরিয়ালের মাধ্যমে বেসিক থেকে অ্যাডভান্সড লেভেল Microsoft Excel শিখুন। Vlookup, pivot tables, charts, graphs সহ বিভিন্ন ফাংশন এবং ফর্মুলা ব্যবহার শিখুন।', 'upload/1781696709792848.jpg', 'অফিসের নানা প্রজেক্ট কিংবা কাজের হাজারো হিসাব রাখতে হিমশিম খাচ্ছেন? অ্যাকাডেমিক কিংবা প্রফেশনাল লাইফে মাইক্রোসফট এক্সেল- এর ফাংশন, ফর্মুলা, টিপস ও ট্রিকস শিখে নিলে সময় সাপেক্ষ কাজগুলো অনেকটা সহজে করা যায়। বর্তমানে প্রতিটি প্রতিষ্ঠানের কাজকর্ম মাইক্রোসফট এক্সেল নির্ভর, তাই একবার ভালো করে এক্সেল শিখে নিলে আপনি ক্যারিয়ারে এগিয়ে থাকবেন অনেকটাই। তাই MS Excel -এর সব খুঁটিনাটি শেখানোর মাধ্যমে আপনাকে চাকরি বাজারে এগিয়ে রাখতে EduFlyz নিয়ে এলো “Microsoft Excel Zero to Hero” কোর্স।\r\n<br /><br />\r\n“Microsoft Excel Zero to Hero” কোর্সটি করে আপনি নিজেকে আরো প্রোডাক্টিভ করতে পারবেন বেসিক টু অ্যাডভান্সড ফিচার শিখে। স্প্রেডশিট তৈরি করে বেসিক ফরম্যাটিং, সর্টিং-এর পাশাপাশি Vlookup, Pivot Table ইত্যাদি ব্যবহার করে ডাটা সাজিয়ে সিদ্ধান্ত নেয়ার মতো স্কিল অর্জন করতে পারবেন এই কোর্স থেকে। তাই লক্ষ-কোটি অর্থহীন সংখ্যাকে নিমিষেই অর্থপূর্ণ করতে, মিনিটেই হিসাব-নিকাশ করতে, এবং এক্সেল-এর খুঁটিনাটি শিখতে আজই ভর্তি হোন।', '<li>Microsoft Excel -এর বেসিক থেকে অ্যাডভান্স ফাংশন, ফর্মুলা, টিপস্, ও ট্রিকস শিখে দ্রুত জটিল কাজ শেষ করা</li><li>বেসিক ডাটা এন্ট্রি থেকে অ্যাডভান্সড হিসাব নিকাশের মাধ্যমে ডাটা অ্যানালাইসিস করা</li><li>এক্সেল এর মাধ্যমে ওয়ার্কশীট ডেটা এনালাইসিস করা </li><li>অ্যাডভান্সড এক্সেল ফর্মুলা, ডাটা ফিল্টার, চার্ট তৈরিসহ আরও বিভিন্ন ফিচার ব্যবহার করে সময় সাশ্রয়ী হওয়া</li>', '<li>ইন্টারনেট সংযোগ (ওয়াইফাই বা মোবাইল ইন্টারনেট)</li>\r\n<li>স্মার্টফোন অথবা পিসি</li>', 8, 40, 'https://www.youtube.com/watch?v=Yc3M8JijKHc', 'microsoft-excel-zero-to-hero', NULL, '2023-11-05 20:59:47'),
(5, 'Learn Laravel - For Beginners', 'recorded', 1, 'Web Development', 11, 'Rehana Kabir Mim', 500, 'Laravel is a popular open-source PHP web application framework that provides a robust and elegant way to build web applications.', 'upload/1781695703334080.jpg', 'In this course, students will gain in-depth knowledge and hands-on experience in web application development using the Laravel framework. Laravel is a robust and highly regarded PHP framework known for its elegant syntax and developer-friendly features. This course is designed to provide a comprehensive understanding of Laravel\'s core components and best practices in modern web application development.', '<li>Laravel Fundamentals</li>\r\n<li>Blade Templating</li>\r\n<li>Database Interaction</li>\r\n<li>PHP Data Types</li>\r\n<li>Routing</li>\r\n<li>User Authentication and Authorization</li>', '<li>Basic Knowledge Bootstrap CSS Framework.</li>\r\n<li>Good Knowledge of HTML, CSS, and Javascript.</li>', 7, 42, 'https://www.youtube.com/watch?v=M9DoUszVCFc&list=PL0b6OzIxLPbz7JK_YYrRJ1KxlGG4diZHJ&index=1', 'learn-php---for-beginners', NULL, '2023-11-05 21:10:13'),
(9, 'Professional Graphic Design', 'recorded', 1, 'Graphics Design', 19, 'Hosain Shium', 450, 'Graphic design is a creative field that combines art and technology to communicate ideas visually. Designers use elements like typography, imagery, and layout to create compelling visuals for various media, including print, digital, and branding.', 'upload/1781714844190287.png', 'A graphic design course equips students with the skills and knowledge to create visually engaging content. It covers the principles of design, typography, color theory, and software tools like Adobe Photoshop and Illustrator. Students learn to design for various platforms, from print materials to digital media, and explore branding and layout design. This course fosters creativity and prepares individuals for careers in advertising, marketing, and multimedia production.,br> <br>A graphic design course imparts essential skills in visual communication, covering design principles, software proficiency, and applications across diverse media, preparing students for careers in advertising, marketing, and multimedia.', '<li>In a graphic design course, you will learn a diverse range of skills essential for effective visual communication. </li>\r\n<li> You will gain an understanding of design principles, including layout, balance, and hierarchy. </li>\r\n<li>Typography will be a key focus, teaching you how to choose and manipulate fonts to convey messages effectively.</li>\r\n<li>Color theory and its application in design will be explored, enabling you to create visually appealing and harmonious compositions.</li>\r\n<li>You\'ll also delve into practical design projects, helping you develop a portfolio that showcases your creativity and proficiency in various design applications.</li>', '<li>Computer and Software Proficiency</li>\r\n<li>Creativity and Artistic Skills</li>', 10, 62, 'https://www.youtube.com/watch?v=ygl4UCFvv9c', 'basic-to-advance-graphics-designer', NULL, '2023-11-05 21:09:03'),
(10, 'Information Technology', 'recorded', 1, 'HSC ICT', 20, 'Arman Rahman', 300, 'তথ্য ও যোগাযোগ প্রযুক্তি কোর্স এটি তথ্য ও ডিজাইন কৌশলের প্রভুতি দেয়, যা তথ্য প্রযুক্তির প্রযুক্তিবিদ্যা এবং যোগাযোগ দ্বারা উপাদানগুলি ব্যবহার করে কৃত্রিম কাজ সংক্রান্ত সংদেশ প্রসারণ করে।', 'upload/1781656629410997.jpeg', 'তথ্য ও যোগাযোগ প্রযুক্তি কোর্সে ছাত্রদেরকে দর্শনা করা হয় যে যাৗগিক সংক্রান্ত প্রকৌশল এবং প্রযুক্তিবিদ্যা সাথে সৃজনাত্মক কৌশল শেখানো। এটি ডিজাইনের নীতি, টাইপোগ্রাফি, এবং রঙের সংজ্ঞান দিয়, যাতে ছাত্ররা প্রভাবশালী ও সৌন্দর্যবাদী রচনা সৃজন করতে পারে। Adobe Creative Suite (Photoshop, Illustrator, InDesign) এবং ব্র্যান্ডিং নকশা সূত্রও শেখানো হয়।<br><br>তথ্য ও যোগাযোগ প্রযুক্তি কোর্সটি তথ্য ও ডিজাইন দুটি মহত্ত্বপূর্ণ ক্ষেত্রে ছাত্রদের দক্ষতা ও জ্ঞান প্রদান করে। এটি ডিজাইনের সূত্র, ঠিকানা, এবং বিচারের সাথে ডিজাইন নীতি শেখায় এবং টাইপোগ্রাফি, রং সম্বন্ধে সত্তাধিক ধারণা দেয়, যাতে ছাত্ররা প্রভাবশালী গ্রাহক-আকর্ষণ সৃষ্টি করতে পারে। উচ্চারিত সফটওয়্যার উপযুক্ত প্রযুক্তি শেখানো হয়, যেমন Adobe Creative Suite (Photoshop, Illustrator, InDesign)। সাথে প্রযুক্তি প্রয়োগে ব্র্যান্ডিং এবং পরিচিতি নকশা শেখায়, যা ব্যবসার এবং সংগঠনের সময় একটি পরস্পরসম্মিলিত দৃশ্য সৃষ্টি করতে সাহায্য করে।', '<li>একটি গ্রাফিক ডিজাইন কোর্সে আপনি বিভিন্ন দক্ষতা শেখতে পাবেন, যা ভাল ভাবে চিত্রিক যোগাযোগ করার জন্য জরুরী।</li>\r\n<li>আপনি ডিজাইনের নীতি, যেমন ঠিকানা, ভর, এবং পর্যায় সম্মতি সম্পর্কে জ্ঞান অর্জন করবেন।</li>\r\n<li>টাইপোগ্রাফি একটি গুরুত্বপূর্ণ বিষয় হবে, যা আপনাকে সঠিক ফন্ট চয়ন এবং ম্যানিপুলেট করার জন্য শেখবে।</li>\r\n<li>রঙের সাধারণ সত্তাধিক সংজ্ঞা দেবে, যাতে আপনি দৃষ্টি-আকর্ষণকর এবং সামঞ্জস্যপূর্ণ গঠন তৈরি করতে পারেন।</li>', '<li>গ্রাফিক ডিজাইন কোর্সে ভর্তি হওয়ার জন্য আপনাকে একটি কম্পিউটার এবং Adobe Creative Suite সম্মত সফ্টওয়্যারে দক্ষতা থাকতে আবশ্যক।</li>\r\n<li>ই কোর্সে প্রভাবশালী দৃষ্টি এবং শিল্পশিল্পি দক্ষতা আবশ্যক, কারণ এটি দৃষ্টিগত প্রসারণ সৃষ্টি এবং ডিজাইন কনসেপ্ট তৈরির মধ্যে শ্রেষ্ঠতা নিশ্চিত করে। </li>', 4, 24, 'https://www.youtube.com/watch?v=1zE0R4X0Xz0&list=PLuaHF6yUT-70296ookJZMj_3H-_oiwAA0&index=1', 'তথ্য-ও-যোগাযোগ-প্রযুক্তি', NULL, '2023-11-04 22:13:23'),
(11, 'A to Z Digital Marketing', 'recorded', 10, 'Digital Marketing', 2, 'Arindam Utsha', 400, 'Acquire the Skills, Enhance Your Career With Digital Marketing', 'upload/1781695569620894.jpg', 'Marketing through digital platforms has become a trendy topic in today’s world. Most of the people navigate online before buying any product. As a result, digital marketing has turned into a smart business strategy capable of drawing potential buyers by product promotion.This upwarding trend of online marketing might hit the mark of 786.2 billion dollar by 2026, estimated the global industry analysts. If you are keen to learn about online marketing strategies, or want to expand your business reach, enroll in this course now.', '<li>Niche Selection </li>\r\n<li>Keyword Research (AdSense, Affiliate, Service)</li>\r\n<li>Competitor Analysis & Website Audit </li>\r\n<li>On-Site Optimization</li>\r\n<li>On-Page Optimization </li>', '<li>SEMrush</li>\r\n<li>SE Ranking</li>', 5, 48, 'https://www.youtube.com/watch?v=JZbvOJmSx8Q&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE', 'a-to-z-digital-marketing', NULL, '2023-11-05 21:04:36'),
(12, 'Quality Assurance in Software Development', 'live', 1, 'SQA', 11, 'Rehana Kabir Mim', 5000, 'This SQA course provides comprehensive training in software testing, quality assurance methodologies, and tools. Students learn to ensure the reliability and performance of software applications, improving their testing and quality management skills.', 'upload/1781712913041193.jpg', 'This Software Quality Assurance (SQA) course is designed to equip students with the knowledge and skills necessary to ensure the quality, reliability, and performance of software applications. It covers a broad spectrum of topics related to SQA, encompassing both theory and practical applications.\r\nStudents will delve into the fundamental principles of software testing, quality management, and assurance methodologies. They will gain a deep understanding of various testing techniques, test planning, test execution, and defect tracking. The course also explores the use of industry-standard SQA tools and frameworks to streamline the quality assurance process.<br><br>Real-world case studies and hands-on exercises will provide practical experience in SQA, allowing students to apply their knowledge in a professional context. By the end of this course, participants will be well-prepared to contribute to the software development process by maintaining high-quality standards and delivering software products that meet the demands of the modern tech industry. Whether you\'re a software developer, tester, or project manager, this course is essential for anyone looking to excel in the field of Software Quality Assurance.', '<li>Software Testing Fundamentals</li>\r\n<li>Test Planning and Strategy</li>\r\n<li>Test Case Development</li>\r\n<li>Defect Management</li>\r\n<li>Quality Assurance Methodologies</li>\r\n<li>Automation Testing</li>\r\n<li>Performance Testing</li>\r\n<li>Quality Metrics and Reporting</li>', '<li>Prerequisite Knowledge in software development and programming concepts.</li>\r\n<li>Access to a computer with internet connectivity.</li>\r\n <li>Installation of specific software testing and quality assurance tools, if required.</li>\r\n<li>Purchase or access to required textbooks, course materials, and software licenses.</li>\r\n<li>Dedication of a set number of hours per week for lectures, assignments, and discussions.</li>', 0, 4, 'https://www.youtube.com/watch?v=RLWc6gaD6EU&list=PLHSvWOz-3OcHf6NV9QfuHDoIR7vILbnBk&ab_channel=SoftwareTestingAcademy', 'software-engineering-question', NULL, '2023-11-05 22:57:58'),
(13, 'Python Best Practices and Code Optimization', 'live', 1, 'Python', 25, 'Fozlol Haque', 4500, '\"Learn Python, a versatile and beginner-friendly programming language. Explore core concepts, data manipulation, and practical application in this comprehensive course.\"', 'upload/1781784079820583.jpg', '\"Welcome to our Python programming course, where you\'ll embark on a comprehensive journey into the world of Python, one of the most versatile and widely-used programming languages. Whether you\'re a complete beginner or have some programming experience, this course is designed to help you grasp Python\'s fundamentals and empower you to build robust, efficient, and scalable applications.<br><br>Python is not only a language that\'s easy to learn but also incredibly powerful, making it the go-to choice for developers, data scientists, and engineers worldwide. Join us on this Python programming adventure and become a confident and skilled Python developer ready to tackle a wide range of projects and challenges.\"', '<li>Python Fundamentals</li>\r\n<li>Object-Oriented Programming</li>\r\n<li>Data Manipulation</li>\r\n<li>Web Development</li>\r\n<li>Data Science and Analysis</li>\r\n<li>Data Science and Analysis</li>\r\n<li>Best Practices</li>\r\n<li>Machine Learning</li>\r\n<li>Debugging and Testing</li>\r\n<li>Version Control with Git</li>', '<li>Computer and Internet Access</li>\r\n<li>Text Editor</li>\r\n<li>Web Browser</li>\r\n<li>Basic Computer Skills</li>\r\n<li>Desire to Learn</li>', 0, 3, 'https://www.youtube.com/watch?v=CtbckFw0pJs&list=PL6X5MDnC9oqOrCtwCxo3VsVMbLpNW7SkK&ab_channel=DurgaSoftwareSolutions', 'python-best-practices-and-code-optimization', NULL, '2023-11-05 22:57:00'),
(15, 'Online IELTS Course', 'live', 3, 'English', 23, 'Kaosar Ahmed', 2500, '\"Join our comprehensive IELTS Preparation Course to boost your exam readiness. Our expert instructors will equip you with essential strategies and practice to excel in all IELTS modules. Whether for academic or immigration purposes, we\'ll help you achieve your desired scores.\"', 'upload/1781822537545308.png', '\"Our IELTS Preparation Course is a comprehensive program designed to equip you with the skills and strategies needed to excel in the International English Language Testing System (IELTS) exam. Whether you\'re aiming for higher education, professional accreditation, or immigration purposes, our course offers targeted training for both the Academic and General Training versions of the exam.<br><br>Throughout the course, you\'ll benefit from in-depth guidance on each IELTS module, including Listening, Reading, Writing, and Speaking. Our experienced instructors will help you understand the test format, improve your language proficiency, and master exam-specific techniques to achieve your desired band score.', '<li>Introduction to IELTS</li>\r\n<li>Test Format</li>\r\n<li>Test-Taking Strategies</li>\r\n<li>Speaking Practice</li>\r\n<li>Writing Techniques</li>\r\n<li>Listening and Reading Comprehension</li>\r\n<li>Mock Test</li>\r\n<li>Q&A and Guidance</li>', '</li>English Proficiency</li>\r\n<li>Access to a Computer and Internet</li>\r\n<li>Commitment to Learning</li>\r\n<li>Recommended Materials</li>\r\n<li>IELTS Aspiration</li>', 0, 2, 'https://www.youtube.com/watch?v=Jzps8q2es7c&list=PLfSUFKdFlttn1MWrG5Q0-a9Cbm9y3uulX', 'online-ielts-course', NULL, NULL),
(16, 'Folk Dance', 'live', 13, 'Dance', 26, 'Marwa Khanom', 1500, 'The \"Online Bangladeshi Folk Dance Course\" is a virtual learning program designed to introduce participants to the rich and vibrant world of traditional Bangladeshi folk dance forms.', 'upload/1781986416751476.jpg', 'Immerse yourself in the captivating world of traditional Bangladeshi folk dance with our \"Online Bangladeshi Folk Dance Course.\"This comprehensive online program is designed to introduce you to the diverse and culturally rich folk dance traditions of Bangladesh.Explore the rhythms, movements, and stories that make each folk dance style unique, including the spirited Baul, the vibrant Bihu, the graceful Jari, and the elegant Manipuri.<br><br>Our expert instructors will take you on a cultural journey, sharing the historical and regional contexts of these dance forms, enriching your understanding of their significance.Delve into the intricate footwork, gestures, and expressions that define each folk dance, allowing you to connect with the essence of Bangladeshi culture.', '<li>Introduction to Bangladeshi Folk Dances</li>\r\n<li>Fundamental Dance Movements</li>\r\n<li>Cultural Context and Stories</li>\r\n<li>Rhythms and Music</li>\r\n<li>Practical Dance Training</li>\r\n<li>Costumes and Presentation</li>', '<li>Internet Access</li>\r\n<li>Device for Online Learning</li>\r\n<li>Video Playback Capability</li>\r\n<li>Enthusiasm and Dedication</li>', 0, 1, 'https://www.youtube.com/watch?v=m3bzkcBStJI&ab_channel=IndakTradisyon', 'folk-dance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_count` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `category_name`, `slug`, `course_count`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'web-development', 1, NULL, '2023-11-06 08:05:49'),
(2, 'Skills & Office Courses', 'skills-and-office', 1, NULL, '2023-11-03 05:02:13'),
(3, 'English', 'english', 1, NULL, '2023-11-06 07:46:30'),
(4, 'Video Editing', 'video-editing', 0, NULL, '2023-11-03 05:01:51'),
(5, 'Physics', 'physics', 0, NULL, '2023-11-04 10:36:12'),
(8, 'Graphics Design', 'graphics-design', 1, NULL, '2023-11-04 11:10:54'),
(9, 'HSC ICT', 'hsc-ict', 1, NULL, '2023-11-04 11:40:30'),
(10, 'Digital Marketing', 'digital-marketing', 1, NULL, '2023-11-06 08:05:41'),
(11, 'SQA', 'sqa', 1, NULL, '2023-11-05 02:44:04'),
(12, 'Python', 'python', 1, NULL, '2023-11-05 21:30:39'),
(13, 'Dance', 'dance', 1, NULL, '2023-11-08 03:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `course_reviews`
--

CREATE TABLE `course_reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_reviews`
--

INSERT INTO `course_reviews` (`id`, `course_id`, `user_id`, `title`, `content`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Excellent', 'The Course is Excellent! It was was and fun to learn. Thank you for the amazing course!', '5', NULL, NULL),
(2, 8, 1, 'php good', 'basic to advance was best', '3', NULL, NULL),
(3, 8, 1, 'bes', 'dgfjh', '5', NULL, NULL),
(4, 8, 1, 'rbghhbjhj,k', 'jmkj', '2', NULL, NULL),
(5, 5, 3, 'oijkoi', 'jhnj', '3', NULL, NULL),
(6, 13, 27, 'Occaecat modi ex pro', 'Modi tenetur autem v', '4', NULL, NULL),
(7, 12, 3, 'Good', 'very', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` bigint UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_count` int DEFAULT '0',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`, `course_id`, `slug`, `question_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Units & Measurement Chapter', 2, 'units-measurement', 20, 'active', '2023-11-03 10:56:31', '2023-11-01 00:29:31'),
(3, 'PHP MCQ', 8, 'phpmcq', NULL, 'active', NULL, '2023-11-03 23:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempts`
--

CREATE TABLE `exam_attempts` (
  `attempt_id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `exam_id` int NOT NULL,
  `course_id` int NOT NULL,
  `total_question` int NOT NULL,
  `correct_ans` int NOT NULL,
  `score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_attempts`
--

INSERT INTO `exam_attempts` (`attempt_id`, `user_id`, `exam_id`, `course_id`, `total_question`, `correct_ans`, `score`, `created_at`, `updated_at`) VALUES
(6, 3, 4, 12, 6, 1, 17, NULL, NULL),
(8, 11, 4, 12, 6, 1, 17, NULL, NULL),
(9, 3, 5, 13, 6, 0, 0, NULL, NULL),
(10, 3, 5, 13, 6, 3, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `lesson_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_duration` int NOT NULL,
  `lesson_serial` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `lesson_name`, `course_id`, `course_name`, `slug`, `lesson_img`, `lesson_link`, `lesson_duration`, `lesson_serial`, `created_at`, `updated_at`) VALUES
(3, 'Introduction', 1, 'Microsoft Excel Zero to Hero', 'introduction', 'upload/1780995268430387.jpg', 'https://www.youtube.com/watch?v=Yc3M8JijKHc', 2, 1, NULL, '2023-10-29 03:15:37'),
(4, 'Create & Close Files', 1, 'Microsoft Excel Zero to Hero', 'create-close-files', 'upload/1780211385658448.jpg', 'https://www.youtube.com/watch?v=DyiBTUXNWAI', 6, 2, NULL, NULL),
(7, 'Laravel Install Xampp & Composer', 5, 'Learn Laravel - For Beginners', 'install', 'upload/1781556818093569.png', 'https://www.youtube.com/watch?v=1kPEQ-MqlFI&list=PL0b6OzIxLPbz7JK_YYrRJ1KxlGG4diZHJ&index=2', 10, 1, NULL, '2023-11-03 09:41:35'),
(8, 'Laravel Folder & File Structure', 5, 'Learn Laravel - For Beginners', 'folder', 'upload/1781556892199567.png', 'https://www.youtube.com/watch?v=-yFJh8CavLI&list=PL0b6OzIxLPbz7JK_YYrRJ1KxlGG4diZHJ&index=4', 6, 2, NULL, '2023-11-03 09:41:44'),
(9, 'Laravel Routing Basics', 5, 'Learn Laravel - For Beginners', 'routing', 'upload/1781556956202255.png', 'https://www.youtube.com/watch?v=oCf9Bb-crPc&list=PL0b6OzIxLPbz7JK_YYrRJ1KxlGG4diZHJ&index=5', 5, 3, NULL, '2023-11-03 09:41:51'),
(12, 'Adobe Illustrator', 9, 'Basic to Advance Graphics Designer', 'graphichs', 'upload/1781654482448362.png', 'https://drive.google.com/file/d/1SzK--4t3W9P1bntjV8_j6AsmrYq-KcAf/view?usp=drive_link&fbclid=IwAR32r6vGpdWbDPLoqLyhBhfgCk8k1gBBzGu9TGbOKWrfF1C6NBKWRU9bNnw', 5, 1, NULL, NULL),
(13, 'Flyer design', 9, 'Basic to Advance Graphics Designer', 'flyer', 'upload/1781654598484099.jpg', 'https://drive.google.com/file/d/1SzK--4t3W9P1bntjV8_j6AsmrYq-KcAf/view?usp=drive_link&fbclid=IwAR1mkwZKXXJi6tEyP1135inrEI0MUvlDXVQTUEo5hZdTqrzLIQojoXyPUNw', 4, 2, NULL, NULL),
(14, 'O Letter Logo Design Idea', 9, 'Basic to Advance Graphics Designer', 'logo', 'upload/1781654680111140.jpg', 'https://www.youtube.com/watch?v=TLrlQhS1QAc&list=PLBi_Z5TEVEnBKE4uk-qU7dIMtgZSABA3v&index=7', 7, 3, NULL, NULL),
(15, 'কমিউনিকেশন সিস্টেমস ও নেটওয়ার্কিং', 10, 'তথ্য ও যোগাযোগ প্রযুক্তি', 'কমিউনিকেশন সিস্টেমস ও নেটওয়ার্কিং', 'upload/1781656156725961.png', 'https://www.youtube.com/watch?v=ziUL87QIntc&list=PLuaHF6yUT-70296ookJZMj_3H-_oiwAA0&index=4', 8, 2, NULL, NULL),
(16, 'সংখ্যা পদ্ধতি ও ডিজিটাল ডিভাইস', 10, 'তথ্য ও যোগাযোগ প্রযুক্তি', 'সংখ্যা পদ্ধতি ও ডিজিটাল ডিভাইস', 'upload/1781656521082831.jpeg', 'https://www.youtube.com/watch?v=4uS-kTsuWJo&list=PLuaHF6yUT-70296ookJZMj_3H-_oiwAA0&index=11', 6, 3, NULL, '2023-11-04 11:47:44'),
(17, 'ওয়েব ডিজাইন পরিচিতি ও HTML', 10, 'তথ্য ও যোগাযোগ প্রযুক্তি', 'ওয়েব ডিজাইন পরিচিতি ও HTML', 'upload/1781656303297361.jpeg', 'https://www.youtube.com/watch?v=R9fzqzcvl84&list=PLuaHF6yUT-70296ookJZMj_3H-_oiwAA0&index=34', 5, 4, NULL, NULL),
(18, 'ডেটাবেজ ম্যানেজমেন্ট সিস্টেম', 10, 'তথ্য ও যোগাযোগ প্রযুক্তি', 'ডেটাবেজ ম্যানেজমেন্ট সিস্টেম', 'upload/1781656373222182.png', 'https://www.youtube.com/watch?v=ZRzwY7XlqPI&list=PLuaHF6yUT-70296ookJZMj_3H-_oiwAA0&index=52', 5, 5, NULL, NULL),
(19, 'How to Create Google Ads', 11, 'A to Z Digital Marketing', 'HowtoCreateGoogleads', 'upload/1781696056480474.jpg', 'https://www.youtube.com/watch?v=AONYJ9MOBHQ&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=4', 10, 1, NULL, NULL),
(20, 'Keyword Research for Google Ads', 11, 'A to Z Digital Marketing', 'Keyword Research for Google Ads2023', 'upload/1781696277906018.png', 'https://www.youtube.com/watch?v=57IXuoIKUNo&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=5', 9, 2, NULL, NULL),
(21, 'Digital Marketing Live Project', 11, 'A to Z Digital Marketing', 'Digital Marketing Live Project', 'upload/1781696483237514.jpg', 'https://www.youtube.com/watch?v=cIHx-dK4Zvk&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=10', 15, 3, NULL, NULL),
(22, 'Excel Basics', 1, 'Microsoft Excel Zero to Hero', 'ExcelBasics', 'upload/1781781040942834.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 5, 3, NULL, NULL),
(23, 'Formatting and Cell Customization in Excel', 1, 'Microsoft Excel Zero to Hero', 'Formatting and Cell', 'upload/1781781139134124.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 6, 4, NULL, NULL),
(24, 'Formulas and Functions', 1, 'Microsoft Excel Zero to Hero', 'Formulas and Functions', 'upload/1781781233357039.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 4, 5, NULL, NULL),
(25, 'Charts and Graphs', 1, 'Microsoft Excel Zero to Hero', 'Charts and Graphs', 'upload/1781781285902412.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 5, 6, NULL, NULL),
(26, 'Advanced Functions and Formulas in Exce', 1, 'Microsoft Excel Zero to Hero', 'Advanced Functions and Formulas in Exce', 'upload/1781781344460603.jpg', 'https://www.youtube.com/watch?v=FLs6rAVQWs0&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=4&ab_channel=DaniKrossing', 7, 7, NULL, NULL),
(27, 'Laravel Routing and Controllers', 5, 'Learn Laravel - For Beginners', 'Laravel Routing and Controllers', 'upload/1781781520001554.jpg', 'https://www.youtube.com/watch?v=cIHx-dK4Zvk&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=10', 4, 4, NULL, NULL),
(28, 'Eloquent ORM', 8, 'Learn PHP - For Beginners', 'Eloquent ORM', 'upload/1781781554780166.jpg', 'https://www.youtube.com/watch?v=57IXuoIKUNo&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=5', 5, 5, NULL, NULL),
(29, 'Middleware and Security Best Practices in Laravel', 5, 'Learn Laravel - For Beginners', 'Middleware and Security Best Practices in Laravel', 'upload/1781781658677623.jpg', 'https://www.youtube.com/watch?v=cIHx-dK4Zvk&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=10', 5, 5, NULL, NULL),
(30, 'Forms and Validation', 5, 'Learn Laravel - For Beginners', 'Forms and Validation', 'upload/1781781692458930.jpg', 'https://www.youtube.com/watch?v=57IXuoIKUNo&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=5', 6, 6, NULL, NULL),
(31, 'Understanding Design Principles', 9, 'Professional Graphic Design', 'Understanding Design Principles', 'upload/1781781806096175.jpg', 'https://www.youtube.com/watch?v=57IXuoIKUNo&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=5', 4, 4, NULL, NULL),
(32, 'Color Theory and Psychology', 1, 'Microsoft Excel Zero to Hero', 'Color Theory and Psychology', 'upload/1781781849300225.jpg', 'https://www.youtube.com/watch?v=cIHx-dK4Zvk&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=10', 5, 5, NULL, NULL),
(33, 'Logo Design', 11, 'A to Z Digital Marketing', 'Logo Design', 'upload/1781781889127573.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 6, 6, NULL, NULL),
(34, 'Understanding Design Principles', 9, 'Professional Graphic Design', 'Understanding Design Principles', 'upload/1781782012772025.jpg', 'https://www.youtube.com/watch?v=57IXuoIKUNo&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=5', 5, 5, NULL, NULL),
(36, 'Logo Design', 9, 'Professional Graphic Design', 'Logo Design', 'upload/1781782095520416.jpg', 'https://www.youtube.com/watch?v=cIHx-dK4Zvk&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=10', 7, 7, NULL, NULL),
(37, 'Image Editing and Manipulation with Photoshop', 11, 'A to Z Digital Marketing', 'Image Editing and Manipulation with Photoshop', 'upload/1781782152714655.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 8, 8, NULL, NULL),
(38, 'Vector Graphics and Adobe Illustrator Mastery', 9, 'Professional Graphic Design', 'Vector Graphics and Adobe Illustrator Mastery', 'upload/1781782294488372.jpg', 'https://www.youtube.com/watch?v=57IXuoIKUNo&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=5', 7, 7, NULL, NULL),
(39, 'Layout Design for Print Media: Brochures, Posters, and Flyers', 9, 'Professional Graphic Design', 'Layout Design for Print Media: Brochures, Posters, and Flyers', 'upload/1781782330283733.jpg', 'https://www.youtube.com/watch?v=cIHx-dK4Zvk&list=PLXBs5IsvvrdgFcveGzarQPJEWMMkA4NFE&index=10', 8, 8, NULL, NULL),
(40, 'Web Design Fundamentals', 9, 'Professional Graphic Design', 'Web Design Fundamentals', 'upload/1781782382331542.jpg', 'https://www.youtube.com/watch?v=FLs6rAVQWs0&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=4&ab_channel=DaniKrossing', 5, 9, NULL, NULL),
(41, 'Packaging Design', 9, 'Professional Graphic Design', 'Packaging Design', 'upload/1781782432499228.jpg', 'https://www.youtube.com/watch?v=7q20ngxCZIc&list=PLYhiAeoT-jPsWxgp7R49UoOyKNWe-Kq-2&ab_channel=RajonSami', 10, 10, NULL, NULL),
(42, 'Integrating Third-Party APIs in Laravel', 5, 'Learn Laravel - For Beginners', 'Integrating Third-Party APIs in Laravel', 'upload/1781782506245809.jpg', 'https://www.youtube.com/watch?v=FLs6rAVQWs0&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=4&ab_channel=DaniKrossing', 6, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_27_140829_create_recorded_categories_table', 2),
(6, '2023_10_05_041706_create_recorded_courses_table', 3),
(7, '2023_10_12_050300_create_recorded_course_chapters_table', 4),
(8, '2023_10_12_063817_create_lessons_table', 5),
(9, '2023_10_13_132051_create_carts_table', 6),
(10, '2023_10_14_140206_create_orders_table', 7),
(11, '2023_10_17_050606_create_live_categories_table', 8),
(12, '2023_10_18_143730_create_live_courses_table', 9),
(13, '2023_10_19_104739_create_course_categories_table', 10),
(14, '2023_10_19_104845_create_courses_table', 10),
(15, '2023_10_19_190522_create_course_reviews_table', 11),
(16, '2023_10_20_062004_create_streams_table', 12),
(17, '2023_10_20_082857_create_assignments_table', 13),
(18, '2023_10_20_091559_create_assignment_submissions_table', 14),
(19, '2023_10_20_153051_create_mcq_question_sets_table', 15),
(20, '2023_10_20_161322_create_mcqs_table', 16),
(21, '2023_10_26_041533_create_exams_table', 17),
(22, '2023_10_26_044020_create_questions_table', 18),
(23, '2023_10_26_044039_create_answers_table', 18),
(24, '2023_10_26_081601_create_exam_attempts_table', 19),
(25, '2023_10_26_082349_create_given_exam_answers_table', 19),
(26, '2023_10_27_174151_create_testimonials_table', 20),
(27, '2023_10_28_143500_create_coupons_table', 20),
(28, '2023_10_31_171353_create_teacher_requests_table', 21),
(31, '2023_11_10_084655_create_certificates_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `course_id` int NOT NULL,
  `price` int NOT NULL,
  `payment_method` enum('bkash') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bkash',
  `trxn_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `course_id`, `price`, `payment_method`, `trxn_id`, `created_at`, `updated_at`) VALUES
(10, 3, 1, 350, 'bkash', 'AK360FTDRW', NULL, NULL),
(11, 11, 2, 4500, 'bkash', 'AK360FTG7O', NULL, NULL),
(12, 11, 1, 4500, 'bkash', 'AK360FTG7O', NULL, NULL),
(15, 3, 12, 7600, 'bkash', 'AK890FVFGR', NULL, NULL),
(16, 3, 5, 500, 'bkash', 'AK870FVFQZ', NULL, NULL),
(17, 3, 10, 300, 'bkash', 'AK840FVRDI', NULL, NULL),
(18, 3, 11, 400, 'bkash', 'AK850FVRE3', NULL, NULL),
(19, 3, 13, 4500, 'bkash', 'AKA00FWFOE', NULL, NULL),
(20, 27, 13, 4500, 'bkash', 'AKA10FWK13', NULL, NULL),
(21, 27, 12, 5000, 'bkash', 'AKA90FWJV7', NULL, NULL),
(22, 28, 1, 350, 'bkash', 'AKB20FWT60', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('dartroofing571@gmail.com', '$2y$10$t0zBYjVSDxhPp0LCwQ3FhONoq6ifxD7BYO0rf2dNg11tOM0Vgsedu', '2023-10-29 08:36:44'),
('kazizerin66@gmail.com', '$2y$10$hC5HJSNL8tYCIvdWLs7Js.cdPbH5eXn7t2I8GBr1/QRIqVe0zzGIG', '2023-10-30 10:04:41'),
('user@example.com', '$2y$10$1boA/R31Kb9Ve3Q1WMpReusSmi0oxL9IDpc7uxGgQSTfcs.PJvgdK', '2023-10-28 10:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` bigint UNSIGNED NOT NULL,
  `exam_id` int NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `exam_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 'Which of the following is the standard unit of measurement of mass?', NULL, '2023-10-28 07:05:16'),
(2, 1, 'Which of the following devices cannot measure distance?', NULL, NULL),
(3, 1, 'Mass can be explained as _____', NULL, NULL),
(4, 1, 'Mass can be measured using _____', NULL, NULL),
(5, 1, 'Mass is a _____', NULL, NULL),
(6, 1, 'Weight represents ___', NULL, NULL),
(7, 1, 'Which one of the following units can be used to measure matter?', NULL, NULL),
(8, 1, 'What is the unit of solid angle?', NULL, NULL),
(9, 1, 'AU is the unit of ________', NULL, NULL),
(10, 1, 'Dimensions of kinetic energy is the same as that of ________', NULL, NULL),
(11, 1, 'Farad is the unit of ________', NULL, NULL),
(12, 1, 'Electron volt is a unit of', NULL, NULL),
(13, 1, 'Joule second is the unit of', NULL, NULL),
(14, 1, 'The smallest value which is measured using an instrument is known as ________', NULL, NULL),
(15, 1, 'Which is the system of unit', NULL, NULL),
(16, 1, '1. __________ has the same dimensions that of kinetic energy.', NULL, NULL),
(17, 1, 'What is the unit of Energy?', NULL, NULL),
(18, 1, 'What are the complete set of base and derived units known as?', NULL, NULL),
(19, 1, 'What is the value of 1 light-year?', NULL, NULL),
(20, 1, 'The frequency of the sound waves are measured in', NULL, NULL),
(25, 2, 'What is PHP?', NULL, NULL),
(26, 2, 'Who is the father of PHP?', NULL, NULL),
(27, 3, 'Which of the following is the correct syntax to write a PHP code?', NULL, NULL),
(28, 4, 'What is the primary goal of Software Quality Assurance (SQA)?', NULL, NULL),
(29, 4, 'Which phase of the software development lifecycle is typically associated with', NULL, NULL),
(30, 4, 'Which type of testing assesses the software\'s performance under heavy loads?', NULL, NULL),
(31, 4, 'In SQA, what does the term \"verification\" refer to?', NULL, NULL),
(32, 4, 'Which SQA process involves examining code to find defects before testing?', NULL, NULL),
(33, 4, 'Which SQA principle involves ensuring that each requirement in a specification is traceable to a test case?', NULL, NULL),
(34, 5, 'Which of the following is a Python data type for storing a sequence of elements that is ordered and changeable?', NULL, NULL),
(35, 5, 'In Python, which keyword is used to define a function?', NULL, NULL),
(36, 5, 'Which of the following is not a valid way to comment a single line in Python?', NULL, NULL),
(37, 5, 'Which of the following is used to remove an item from a list in Python?', NULL, NULL),
(38, 5, 'What is the result of the expression \"3 * 2 ** 3\"?', NULL, NULL),
(39, 5, 'Which of the following Python libraries is commonly used for data manipulation and analysis?', NULL, NULL),
(40, 9, 'Kitra Graves', NULL, NULL),
(41, 13, 'what is php', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE `streams` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `streams`
--

INSERT INTO `streams` (`id`, `course_id`, `user_id`, `content`, `stream_img`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'test', NULL, NULL, NULL),
(2, 2, 1, 'Please join in our new Live class at 9 PM through:\r\nhttps://www.youtube.com/watch?v=CzzybUpvFO4', NULL, NULL, NULL),
(3, 12, 11, 'https://docs.google.com/document/d/1jPpkKgv9YmDM74TQNa_l-hrvE4H6eAYN/edit', NULL, NULL, NULL),
(4, 12, 1, 'https://meet.google.com/yjj-ctya-pfi', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_requests`
--

CREATE TABLE `teacher_requests` (
  `tr_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_requests`
--

INSERT INTO `teacher_requests` (`tr_id`, `name`, `email`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Rehana Kabir Mim', 'rehanakabirmim@gmail.com', '01521100207', 'I want to be a teacher....', NULL, NULL),
(2, 'Kazi Zerin', 'kazizerin66@gmail.com', '01521100207', 'I have 5 year of experience....', NULL, NULL),
(3, 'Samia Kabir', 'samia@gmail.com', '01680650424', 'I\'m a teacher of department of CSE', NULL, NULL),
(4, 'Husain Shium', 'husainshium@gmail.com', '01772570969', 'I am Hosain Shium. I am a graphic designer. I have 3+ years of experience in Graphic Designing.', NULL, NULL),
(5, 'Hosain Shium', 'husainshium@gmail.com', '01772570969', 'I am hosain shium. I am a graphic designer. I have 3+ years of experience in Graphic Designing.', NULL, NULL),
(6, 'Arman Rahman', 'armanrahman@gmail.com', '01680650425', 'ICT Trainer & Software Developer', NULL, NULL),
(7, 'Kaosar Ahmed', 'kaosarahmed@yahoo.com', '017193584969', 'I try to do the best that I can in the current situation. Sometimes that means a lot more that other teachers when my standards are higher.', NULL, NULL),
(8, 'Demo', 'demo@gmail.com', '12345678911', 'demo', NULL, NULL),
(9, 'Fozlol Haque', 'fazlol@yahoo.com', '01680653420', 'I\'m a Python Developer. I\'ve worked for 2years  with an overseas team on Python language.', NULL, NULL),
(10, 'Marwa Khanom', 'marwa@gmail.com', '017193584968', 'Danching teacher\r\nhttps://meet.google.com/yjj-ctya-pfi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `tm_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`tm_id`, `name`, `title`, `comment`, `tm_img`, `created_at`, `updated_at`) VALUES
(8, 'Sohana Sharmin', 'SQA Tester', '\"I can\'t express how much I appreciate the diverse courses offered by this education system. It has enabled me to tailor my academic journey to my interests and career goals.\"', 'upload/1781810969603787.jpeg', NULL, NULL),
(9, 'Takir Hosain', 'Graphics Designer', '\"The flexibility and variety of courses in this education system have given me the opportunity to broaden my knowledge and expertise in ways I never thought possible.\"', 'upload/1781811167741879.jpeg', NULL, NULL),
(10, 'Sadia Hosain', 'Class 12', '\"I am genuinely impressed by the comprehensive selection of courses available in this education system. It has provided me with the tools I needed to excel academically and professionally.\"', 'upload/1781811376981471.jpeg', NULL, NULL),
(11, 'Ayesha Akter', 'Developer', '\"The multitude of courses offered by this education system has not only expanded my horizons but also empowered me to embrace a well-rounded education that aligns perfectly with my aspirations.\"', 'upload/1781811436440421.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `role` enum('admin','teacher','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'upload/avatar.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `balance`, `address`, `description`, `role`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@example.com', '2023-10-31 00:17:23', '$2y$10$LXrwxqGofZ5WZXEheJvUROsN.Bwiy8Qu4KhP47olV6E.luCujjgry', '01521100207', NULL, 'Dhaka, Bangladesh', 'I am an admin.', 'admin', 'upload/1781558852865456.jpg', NULL, NULL, '2023-11-03 23:06:47'),
(2, 'Arindam Utsha', 'Video Editor & Content Creator', 'teacher@example.com', '2023-10-30 12:32:56', '$2y$10$buNUI5ByXLT9PsyVP3ssp.DfszCrqoyhja9AOG0gYAjFeefr5Gudy', '', '3000.00', NULL, NULL, 'teacher', 'upload/utsa.jpg', NULL, NULL, '2023-10-31 10:26:48'),
(3, 'Rakib Hasan', 'rakib', 'user@example.com', '2023-11-03 10:30:00', '$2y$10$6wL2cGGX9zWsqZXLnkUWAOG/Ee1M4S7e6GkX9eX3PHD5OtzaclKPq', '', '3000.00', NULL, NULL, 'user', 'upload/1781809353586400.png', NULL, NULL, '2023-11-06 04:16:57'),
(11, 'Rehana Kabir Mim', 'Software Engineer', 'rehanakabirmim@gmail.com', '2023-10-30 12:32:56', '$2y$10$ZTDuRnfmQcaQdZM51J/ZXeb0HS75NiMpAH76oMDbNP0tBhmjWvzYm', '01795913298', '6000.00', NULL, NULL, 'teacher', 'upload/1781551138266096.png', NULL, NULL, '2023-11-03 07:52:43'),
(19, 'Hosain Shium', 'Graphics Designer', 'husainshium@gmail.com', '2023-11-04 17:51:36', '$2y$10$WZlFa8/hbCtMo7szNsNl7OHUvtRdAwY3sDA0xxcY/veIYxkA23YXC', '', '5000.00', NULL, NULL, 'teacher', 'upload/1781657084105034.jpeg', NULL, NULL, '2023-11-04 11:56:41'),
(20, 'Arman Rahman', 'ICT Trainer & Software Developer', 'armanrahman@gmail.com', '2023-11-04 17:51:43', '$2y$10$9tWWQavWh1jYPa7/XPW/o.hL6f8jJDZ5.UV.zxzt4Bn5Yh8J91Yg2', '', '2500.00', NULL, NULL, 'teacher', 'upload/1781656808107190.jpeg', NULL, NULL, '2023-11-04 11:52:18'),
(23, 'Kaosar Ahmed', 'English Teacher', 'kaosarahmed@yahoo.com', '2023-11-05 16:23:25', '$2y$10$i0m21e5raFhj1dARKP1gyeJrVvUmyewSqilc4yhj2G9c4fwuVl3le', '017193584969', '3000.00', NULL, NULL, 'teacher', 'upload/1781741878235273.jpeg', NULL, NULL, '2023-11-05 10:24:27'),
(25, 'Fozlol Haque', 'Python Developer', 'fazlol@yahoo.com', '2023-11-05 16:47:28', '$2y$10$JWqeBxs/z5F0xaa6Z5UW..zCSWx1cEiWQl2QsKahRqqz1RyFnIhnq', '01680653420', '6000.00', NULL, NULL, 'teacher', 'upload/1781743419478132.jpeg', NULL, NULL, '2023-11-05 10:48:57'),
(26, 'Marwa Khanom', 'Dance Instructor', 'marwa@gmail.com', '2023-11-08 09:12:01', '$2y$10$voiKQ52znMS6fHuCQlgYI.VR.bKHDVQMkCoeUpiLidzWOOn2.XD9W', '017193584968', '2000', NULL, NULL, 'teacher', 'upload/avatar.png', NULL, NULL, NULL),
(27, 'Sabbir', NULL, 'tauhid10030@gmail.com', '2023-11-10 07:21:40', '$2y$10$K7HYsqOX.obys.q68M.x2umS/a3/RXEeTG80h0KnHU3PuGuKbjz2u', '01718022214', NULL, NULL, NULL, 'user', 'upload/avatar.png', NULL, '2023-11-10 07:20:26', '2023-11-10 07:21:40'),
(28, '#', NULL, 'vayaj43594@mkurg.com', '2023-11-11 00:54:21', '$2y$10$8uCobaAFHiBCp140NMdS7uzIPSCCMGaI.xGdhCW4e5YaJrFaaCnfK', '01680650429', NULL, NULL, NULL, 'user', 'upload/avatar.png', NULL, '2023-11-11 00:53:12', '2023-11-11 00:54:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment_submissions`
--
ALTER TABLE `assignment_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_reviews`
--
ALTER TABLE `course_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_attempts`
--
ALTER TABLE `exam_attempts`
  ADD PRIMARY KEY (`attempt_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_requests`
--
ALTER TABLE `teacher_requests`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tm_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignment_submissions`
--
ALTER TABLE `assignment_submissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_reviews`
--
ALTER TABLE `course_reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam_attempts`
--
ALTER TABLE `exam_attempts`
  MODIFY `attempt_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_requests`
--
ALTER TABLE `teacher_requests`
  MODIFY `tr_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `tm_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
