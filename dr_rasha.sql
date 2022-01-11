-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2021 at 11:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_rasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `cta_link` text DEFAULT NULL,
  `button_lable` text DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `ar_heading` text DEFAULT NULL,
  `ar_description` text DEFAULT NULL,
  `ar_button_lable` text DEFAULT NULL,
  `ar_cta_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `heading`, `description`, `photo`, `cta_link`, `button_lable`, `display_order`, `lang_id`, `is_active`, `ar_heading`, `ar_description`, `ar_button_lable`, `ar_cta_link`) VALUES
(1, 'الدكتورة رشا الشمري', 'معنا لتحقيق حلم الامومة', 'images/slider-4.jpg', 'contact-us.php', 'لحجز موعد', 1, NULL, 1, 'الدكتورة رشا الشمري', 'معنا لتحقيق حلم الامومة', 'لحجز موعد', 'contact-us.php'),
(2, 'كوني واثقة باختيار طبيبك\r\n', NULL, 'images/page-header.jpg', NULL, NULL, NULL, NULL, 1, 'كوني واثقة باختيار طبيبك\r\n', NULL, NULL, NULL),
(3, 'تكرس الدكتورة رشا و فريق عملها ذوو الخبرة العالية تقديم خدمةورعاية مميزة لكل شخص يزور العيادة لتلقي العلاج.\r\n', NULL, 'images/full-cta.jpg', 'contact-us.php', 'للأستفسار', NULL, NULL, 1, 'تكرس الدكتورة رشا و فريق عملها ذوو الخبرة العالية تقديم خدمةورعاية مميزة لكل شخص يزور العيادة لتلقي العلاج.\r\n', NULL, 'للأستفسار', 'contact-us.php'),
(4, 'الرعاية الإنجابية المتقدمة والكاملة\r\n', NULL, 'images/page-header.jpg', NULL, NULL, NULL, NULL, 1, 'الرعاية الإنجابية المتقدمة والكاملة\r\n', NULL, NULL, 'images/page-header.jpg'),
(5, 'نشكركم على ثقتكم الغالية\r\n', NULL, 'images/page-header.jpg', NULL, NULL, NULL, NULL, 1, 'نشكركم على ثقتكم الغالية\r\n', NULL, NULL, 'images/page-header.jpg'),
(6, 'معلومات محدثة وتثقفية حول الموضوعات المتعلقة بالحمل\r\n', NULL, 'images/page-header.jpg', NULL, NULL, NULL, NULL, 1, 'معلومات محدثة وتثقفية حول الموضوعات المتعلقة بالحمل\r\n', NULL, NULL, 'images/page-header.jpg'),
(7, 'للتواصل معنا\r\n', NULL, 'images/page-header.jpg', NULL, NULL, NULL, NULL, 1, 'للتواصل معنا\r\n', NULL, NULL, 'images/page-header.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ar_name` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_cat_id`, `name`, `ar_name`, `display_order`, `is_active`) VALUES
(1, 'أمراض النساء', 'أمراض النساء', 1, 1),
(2, 'التوليد', 'التوليد', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `featured_photo` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `create_date` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1,
  `language` text DEFAULT 'ar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`post_id`, `category_id`, `name`, `display_order`, `featured_photo`, `slug`, `title`, `meta_description`, `description`, `create_date`, `is_active`, `language`) VALUES
(1, 1, 'فحوصات الموجات فوق الصوتية: كيف تعمل؟', 1, 'images/blog-post-1.jpg', 'فحوصات-الموجات-فوق-الصوتية-كيف-تعمل', 'فحوصات الموجات فوق الصوتية: كيف تعمل؟', 'تصوير الجنين بالموجات فوق الصوتيية ', '<p>تصوير الجنين بالموجات فوق الصوتية (المخطط التصواتي) هو أحد تقنيات التصوير التي تستخدم موجات صوتية</p>\n', '2021-07-16 13:16:06', 1, 'ar'),
(2, 2, 'نصائح للمتدربين الممارسين العاملين في أمراض النساء', 2, 'images/blog-post-1.jpg', 'نصائح-للمتدربين-الممارسين-العاملين-في-أمراض-النساء', 'نصائح للمتدربين الممارسين العاملين في أمراض النساء', 'شبيبسب', '<p>تصوير الجنين بالموجات فوق الصوتية (المخطط التصواتي) هو أحد تقنيات التصوير التي تستخدم موجات صوتية2</p>\n', '2021-07-15 13:16:06', 1, 'ar'),
(5, 1, 'فحوصات الموجات فوق الصوتية: كيف تعمل؟3', 3, 'images/blog-post-1.jpg', 'فحوصات-الموجات-فوق-الصوتية-كيف-تعمل3', 'فحوصات الموجات فوق الصوتية: كيف تعمل؟3', 'تصوير الجنين بالموجات فوق الصوتية3', '<p>تصوير الجنين بالموجات فوق الصوتية (المخطط التصواتي) هو أحد تقنيات التصوير التي تستخدم موجات صوتية3</p>\r\n', '2021-07-16 13:16:06', 1, 'ar'),
(6, 2, 'نصائح للمتدربين الممارسين العاملين في أمراض النساء4', 4, 'images/blog-post-1.jpg', 'نصائح-للمتدربين-الممارسين-العاملين-في-أمراض-النساء4', 'نصائح للمتدربين الممارسين العاملين في أمراض النساء4', 'شبيبسب4', '<p>تصوير الجنين بالموجات فوق الصوتية (المخطط التصواتي) هو أحد تقنيات التصوير التي تستخدم موجات صوتية24</p>\r\n', '2021-07-15 13:16:06', 1, 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `cms_user`
--

CREATE TABLE `cms_user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_user`
--

INSERT INTO `cms_user` (`user_id`, `user_name`, `user_password`, `user_type`) VALUES
(1, 'Rami', '$2y$10$5O.re/0JkSls3FGpCNv.tO1Sc8kJlPxJ2.Rhw5GFi7PfNn6TBmEl6', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo_id` int(11) NOT NULL,
  `display_order` int(11) NOT NULL,
  `photo_path` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `display_order`, `photo_path`, `is_active`) VALUES
(1, 1, 'images/g1.jpg', 1),
(2, 2, 'images/g2.jpg', 1),
(3, 3, 'images/g3.jpg', 1),
(4, 4, 'images/g4.jpg', 1),
(5, 5, 'images/g5.jpg', 1),
(6, 6, 'images/g6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `lang_id` int(11) NOT NULL,
  `lang_name` text NOT NULL,
  `en_value` text NOT NULL,
  `ar_value` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `lang_type` int(11) NOT NULL DEFAULT 0 COMMENT '0:is text, 1:is html	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`lang_id`, `lang_name`, `en_value`, `ar_value`, `is_active`, `lang_type`) VALUES
(1, 'Index Trip Section', '        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12\">\r\n                    <div class=\"section-title text-center\">\r\n                        <h1 class=\"text-white\">رحلتك تبدأ من هنا</h1>\r\n                       \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-girl icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">شابة</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-fetus icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">الإنجاب</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-motherhood icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">أمومة</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon  icon-woman icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">منتصف العمر</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-stopwatch icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">السن يأس\r\n                </div></div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center\">\r\n                        <i class=\"icon icon-icon icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">السنوات اللاحقة</h4>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', '        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12\">\r\n                    <div class=\"section-title text-center\">\r\n                        <h1 class=\"text-white\">رحلتك تبدأ من هنا</h1>\r\n                       \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-girl icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">شابة</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-fetus icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">الإنجاب</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-motherhood icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">أمومة</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon  icon-woman icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">منتصف العمر</h4>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center mb20\">\r\n                        <i class=\"icon icon-stopwatch icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">السن يأس\r\n                </div></div>\r\n                <div class=\"col-lg-2 col-md-2 col-sm-4 col-xs-12\">\r\n                    <div class=\"outline-block text-center\">\r\n                        <i class=\"icon icon-icon icon-4x\"></i>\r\n                        <h4 class=\"text-white mb0\">السنوات اللاحقة</h4>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', 1, 1),
(2, 'About-us First Section', '        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">\r\n                    <h1 class=\"mb30\">مرحبًا بكم في عيادة الدكتورة رشا</h1>\r\n                    <p class=\"lead mb30\">الدكتورة رشا الشمري طبيبة متخصصة تتمتع بخبرة واسعة في مجال معالجة العقم  جراحة نسائية، توليد، رعايــة حوامل وأمراض النساء.</p>\r\n                    <p class=\"mb40\">بالنسبة للدكتورة رشا وفريقها الطبي، تحظى رغبات المرضى دائماً بالأولوية القصوى في موضوع مجال الحمل. وخصوصاً فيما يتعلق بعلاج العقم الذي يتم دائماً ضمن شبكة من المتخصصين الطبيين من ذوي الخبرة.</p>\r\n                    <a href=\"#\" class=\"btn btn-default mb30\" data-toggle=\"modal\" data-target=\"#myModal\">شاهد الفيديو</a>\r\n                </div>\r\n                <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n                            <div class=\"img-block\">\r\n                                <a href=\"#\" class=\"imghover\"><img src=\"images/about-1.jpg\" alt=\"\" class=\"img-responsive\"></a>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\r\n                            <div class=\"img-block\">\r\n                                <a href=\"#\" class=\"imghover\"><img src=\"images/about-2.jpg\" alt=\"\" class=\"img-responsive\"></a>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\r\n                            <div class=\"img-block\">\r\n                                <a href=\"#\" class=\"imghover\"><img src=\"images/about-3.jpg\" alt=\"\" class=\"img-responsive\"></a>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', '        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">\r\n                    <h1 class=\"mb30\">مرحبًا بكم في عيادة الدكتورة رشا</h1>\r\n                    <p class=\"lead mb30\">الدكتورة رشا الشمري طبيبة متخصصة تتمتع بخبرة واسعة في مجال معالجة العقم  جراحة نسائية، توليد، رعايــة حوامل وأمراض النساء.</p>\r\n                    <p class=\"mb40\">بالنسبة للدكتورة رشا وفريقها الطبي، تحظى رغبات المرضى دائماً بالأولوية القصوى في موضوع مجال الحمل. وخصوصاً فيما يتعلق بعلاج العقم الذي يتم دائماً ضمن شبكة من المتخصصين الطبيين من ذوي الخبرة.</p>\r\n                    <a href=\"#\" class=\"btn btn-default mb30\" data-toggle=\"modal\" data-target=\"#myModal\">شاهد الفيديو</a>\r\n                </div>\r\n                <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">\r\n                            <div class=\"img-block\">\r\n                                <a href=\"#\" class=\"imghover\"><img src=\"images/about-1.jpg\" alt=\"\" class=\"img-responsive\"></a>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\r\n                            <div class=\"img-block\">\r\n                                <a href=\"#\" class=\"imghover\"><img src=\"images/about-2.jpg\" alt=\"\" class=\"img-responsive\"></a>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\r\n                            <div class=\"img-block\">\r\n                                <a href=\"#\" class=\"imghover\"><img src=\"images/about-3.jpg\" alt=\"\" class=\"img-responsive\"></a>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', 1, 1),
(3, 'About-us Second Section', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12\">\r\n                    <div class=\"section-title text-center\">\r\n                        <h1>لماذا عيادة الدكتورة رشا</h1>\r\n                        <p> تكرس الدكتورة رشا و فريق عملها ذوو الخبرة العالية تقديم خدمةورعاية مميزة لكل شخص يزور العيادة لتلقي العلاج. </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"feature-center well-block text-center\">\r\n                        <div class=\"feature-center-icon\">\r\n                            <i class=\"icon-briefcase\"></i>\r\n                        </div>\r\n                        <h2>خبرة عالية</h2>\r\n                        <p>تتمتع عيادتنا بأكثر من 10 سنوات من الخبرة في علاج المرضى الذين يعانون من أمراض النساء والعقم.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"feature-center well-block text-center\">\r\n                        <div class=\"feature-center-icon\">\r\n                            <i class=\"icon-men-avatar\"></i>\r\n                        </div>\r\n                        <h2>فريق الرعاية</h2>\r\n                        <p>أفضل فريق من أخصائي أمراض الجيانا في بغداد ، يقدم رعاية متخصصة في علاجاتنا.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"feature-center well-block text-center\">\r\n                        <div class=\"feature-center-icon\">\r\n                            <i class=\"icon-telemarketer\"></i>\r\n                        </div>\r\n                        <h2>المتابعة الدقيقة</h2>\r\n                        <p>رعاية المرأة الحامل هي هدفنا .</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12\">\r\n                    <div class=\"section-title text-center\">\r\n                        <h1>لماذا عيادة الدكتورة رشا</h1>\r\n                        <p> تكرس الدكتورة رشا و فريق عملها ذوو الخبرة العالية تقديم خدمةورعاية مميزة لكل شخص يزور العيادة لتلقي العلاج. </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"feature-center well-block text-center\">\r\n                        <div class=\"feature-center-icon\">\r\n                            <i class=\"icon-briefcase\"></i>\r\n                        </div>\r\n                        <h2>خبرة عالية</h2>\r\n                        <p>تتمتع عيادتنا بأكثر من 10 سنوات من الخبرة في علاج المرضى الذين يعانون من أمراض النساء والعقم.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"feature-center well-block text-center\">\r\n                        <div class=\"feature-center-icon\">\r\n                            <i class=\"icon-men-avatar\"></i>\r\n                        </div>\r\n                        <h2>فريق الرعاية</h2>\r\n                        <p>أفضل فريق من أخصائي أمراض الجيانا في بغداد ، يقدم رعاية متخصصة في علاجاتنا.</p>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"feature-center well-block text-center\">\r\n                        <div class=\"feature-center-icon\">\r\n                            <i class=\"icon-telemarketer\"></i>\r\n                        </div>\r\n                        <h2>المتابعة الدقيقة</h2>\r\n                        <p>رعاية المرأة الحامل هي هدفنا .</p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>', 1, 1),
(4, 'Opening Hours', '                            <ul class=\"listnone\">\r\n                                <li><span class=\"day\">الاثنين: </span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li> <span>الثلاثاء: </span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li> <span>الأربعاء:</span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li><span>الخميس:</span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li><span>السبت:</span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                            </ul>', '                            <ul class=\"listnone\">\r\n                                <li><span class=\"day\">الاثنين: </span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li> <span>الثلاثاء: </span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li> <span>الأربعاء:</span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li><span>الخميس:</span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                                <li><span>السبت:</span> <span class=\"time\">8.30 am – 5.00 pm</span></li>\r\n                            </ul>', 1, 1),
(5, 'Contact-us Address Widget', '                            <div class=\"contact-detail\">\r\n                                <h3 class=\"widget-title\">عنوان العيادة</h3>\r\n                               \r\n                                <p>بغداد</p>\r\n                                <p>الاعظمية - شارع المغرب </p>\r\n								<p>مجمع الريان للعيادات الطبية - طابق الاول</p>\r\n                            </div>', '                            <div class=\"contact-detail\">\r\n                                <h3 class=\"widget-title\">عنوان العيادة</h3>\r\n                               \r\n                                <p>بغداد</p>\r\n                                <p>الاعظمية - شارع المغرب </p>\r\n								<p>مجمع الريان للعيادات الطبية - طابق الاول</p>\r\n                            </div>', 1, 1),
(6, 'Contact-us Phone Widget', '<div class=\"contact-detail\">\n<h3 class=\"widget-title\">ارقام التواصل</h3>\n\n<p class=\"phone-no\"><a href=\"tel:‏‪07716158154\">‏‪07716158154</a></p>\n</div>\n', '<div class=\"contact-detail\">\n<h3 class=\"widget-title\">ارقام التواصل</h3>\n\n<p class=\"phone-no\"><a href=\"tel:‏‪07716158154\">‏‪07716158154</a></p>\n</div>\n', 1, 1),
(7, 'Index Page Patient Words', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12\">\r\n                    <div class=\"section-title text-center\">\r\n                        <h1>ماذا يقول المرضى عنا</h1>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"testimonial-block mb30\">\r\n                        <!-- testimonial-block-->\r\n                        <div class=\"testimonial-user\">\r\n                            <!-- testimonial-user-->\r\n                            <div class=\"testimonial-img\"><img src=\"images/patient-1.jpg\" alt=\"\" class=\"img-circle\"></div>\r\n                            <div class=\"testomonial-info\">\r\n                                <h4 class=\"patients-name\">ام حسين <span class=\"patients-country\"></span></h4></div>\r\n                        </div>\r\n                        <!-- /.testimonial-user-->\r\n                        <div class=\"testimonial-desc\">\r\n                            <!-- testimonial-desc-->\r\n                            <p>“طاقم العمل اللطيف والطبيب بأسلوب ودود بجانب السرير. لقد سمعت أشياء مروعة عن ممارسات OB-GYN الأخرى في منطقتي ، لكن يسعدني جدًا أن أقول إنني وجدت مكانًا رائعًا. </p>\r\n                        </div>\r\n                        <!-- testimonial-desc-->\r\n                    </div>\r\n                    <!-- /.testimonial-block-->\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"testimonial-block mb30\">\r\n                        <!-- testimonial-block-->\r\n                        <div class=\"testimonial-user\">\r\n                            <!-- testimonial-user-->\r\n                            <div class=\"testimonial-img\"><img src=\"images/patient-2.jpg\" alt=\"\" class=\"img-circle\"></div>\r\n                            <div class=\"testomonial-info\">\r\n                                <h4 class=\"patients-name\">اية <span class=\"patients-country\"></span></h4></div>\r\n                        </div>\r\n                        <!-- /.testimonial-user-->\r\n                        <div class=\"testimonial-desc\">\r\n                            <!-- testimonial-desc-->\r\n                            <p>“لقد أجريت عملية جراحية كبيرة عن طريق الليزر وأود أن أشكر الدكتورة رشا على كونها استشاريًا لطيفًا ولطيفًا ورعاية ، والذي يتميز باحترافه المتميز.” </p>\r\n                        </div>\r\n                        <!-- testimonial-desc-->\r\n                    </div>\r\n                    <!-- /.testimonial-block-->\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"testimonial-block\">\r\n                        <!-- testimonial-block-->\r\n                        <div class=\"testimonial-user\">\r\n                            <!-- testimonial-user-->\r\n                            <div class=\"testimonial-img\"><img src=\"images/patient-3.jpg\" alt=\"\" class=\"img-circle\"></div>\r\n                            <div class=\"testomonial-info\">\r\n                                <h4 class=\"patients-name\">لما <span class=\"patients-country\"></span></h4></div>\r\n                        </div>\r\n                        <!-- /.testimonial-user-->\r\n                        <div class=\"testimonial-desc\">\r\n                            <!-- testimonial-desc-->\r\n                            <p>“ الدكتور. كانت رشا لطيفة للغاية وغنية بالمعلومات حول كل سؤالي. لم أشعر بالاندفاع. جعلني أشعر بالراحة طوال الوقت ..”</p>\r\n                        </div>\r\n                        <!-- testimonial-desc-->\r\n                    </div>\r\n                    <!-- /.testimonial-block-->\r\n                </div>\r\n            </div>\r\n        </div>', '<div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-offset-2 col-md-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12\">\r\n                    <div class=\"section-title text-center\">\r\n                        <h1>ماذا يقول المرضى عنا</h1>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"testimonial-block mb30\">\r\n                        <!-- testimonial-block-->\r\n                        <div class=\"testimonial-user\">\r\n                            <!-- testimonial-user-->\r\n                            <div class=\"testimonial-img\"><img src=\"images/patient-1.jpg\" alt=\"\" class=\"img-circle\"></div>\r\n                            <div class=\"testomonial-info\">\r\n                                <h4 class=\"patients-name\">ام حسين <span class=\"patients-country\"></span></h4></div>\r\n                        </div>\r\n                        <!-- /.testimonial-user-->\r\n                        <div class=\"testimonial-desc\">\r\n                            <!-- testimonial-desc-->\r\n                            <p>“طاقم العمل اللطيف والطبيب بأسلوب ودود بجانب السرير. لقد سمعت أشياء مروعة عن ممارسات OB-GYN الأخرى في منطقتي ، لكن يسعدني جدًا أن أقول إنني وجدت مكانًا رائعًا. </p>\r\n                        </div>\r\n                        <!-- testimonial-desc-->\r\n                    </div>\r\n                    <!-- /.testimonial-block-->\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"testimonial-block mb30\">\r\n                        <!-- testimonial-block-->\r\n                        <div class=\"testimonial-user\">\r\n                            <!-- testimonial-user-->\r\n                            <div class=\"testimonial-img\"><img src=\"images/patient-2.jpg\" alt=\"\" class=\"img-circle\"></div>\r\n                            <div class=\"testomonial-info\">\r\n                                <h4 class=\"patients-name\">اية <span class=\"patients-country\"></span></h4></div>\r\n                        </div>\r\n                        <!-- /.testimonial-user-->\r\n                        <div class=\"testimonial-desc\">\r\n                            <!-- testimonial-desc-->\r\n                            <p>“لقد أجريت عملية جراحية كبيرة عن طريق الليزر وأود أن أشكر الدكتورة رشا على كونها استشاريًا لطيفًا ولطيفًا ورعاية ، والذي يتميز باحترافه المتميز.” </p>\r\n                        </div>\r\n                        <!-- testimonial-desc-->\r\n                    </div>\r\n                    <!-- /.testimonial-block-->\r\n                </div>\r\n                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">\r\n                    <div class=\"testimonial-block\">\r\n                        <!-- testimonial-block-->\r\n                        <div class=\"testimonial-user\">\r\n                            <!-- testimonial-user-->\r\n                            <div class=\"testimonial-img\"><img src=\"images/patient-3.jpg\" alt=\"\" class=\"img-circle\"></div>\r\n                            <div class=\"testomonial-info\">\r\n                                <h4 class=\"patients-name\">لما <span class=\"patients-country\"></span></h4></div>\r\n                        </div>\r\n                        <!-- /.testimonial-user-->\r\n                        <div class=\"testimonial-desc\">\r\n                            <!-- testimonial-desc-->\r\n                            <p>“ الدكتور. كانت رشا لطيفة للغاية وغنية بالمعلومات حول كل سؤالي. لم أشعر بالاندفاع. جعلني أشعر بالراحة طوال الوقت ..”</p>\r\n                        </div>\r\n                        <!-- testimonial-desc-->\r\n                    </div>\r\n                    <!-- /.testimonial-block-->\r\n                </div>\r\n            </div>\r\n        </div>', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `package_item`
--

CREATE TABLE `package_item` (
  `package_id` int(11) NOT NULL,
  `package_en_name` text DEFAULT NULL,
  `package_ar_name` text DEFAULT NULL,
  `package_price` text DEFAULT NULL,
  `en_button_label` text DEFAULT NULL,
  `ar_button_label` text DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package_item_details`
--

CREATE TABLE `package_item_details` (
  `package_info_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `ar_value` text NOT NULL,
  `en_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `en_name` text NOT NULL,
  `ar_name` text NOT NULL,
  `dispaly_order` int(11) NOT NULL,
  `en_slug` text NOT NULL,
  `ar_slug` text NOT NULL,
  `en_title` text NOT NULL,
  `ar_title` text NOT NULL,
  `en_meta_description` text DEFAULT NULL,
  `ar_meta_description` text DEFAULT NULL,
  `ar_description` text NOT NULL,
  `en_description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `en_name` text NOT NULL,
  `ar_name` text NOT NULL,
  `icon` text NOT NULL,
  `photo` text NOT NULL,
  `display_order` int(11) NOT NULL,
  `en_description` text NOT NULL,
  `ar_description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `en_name`, `ar_name`, `icon`, `photo`, `display_order`, `en_description`, `ar_description`, `is_active`) VALUES
(1, 'بطانة الرحم\r\n', 'بطانة الرحم\r\n', '', 'images/treatment-img-1.jpg', 1, '<h1>أمراض النساء والعمليات</h1>\n\n<p class=\"lead\">ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية</p>\n\n<p>ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية</p>\n<a class=\"imghover\" href=\"#\"><img alt=\"\" class=\"img-responsive mb30\" src=\"images/cyclemon-ovary.png\" /></a>\n\n<h1>إجراءات أمراض النساء</h1>\n\n<p class=\"lead\">هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\n\n<p>هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\n\n<ul class=\"listnone bullet bullet-arrow-default\">\n	<li>تنظير الرحم</li>\n	<li>استئصال الورم العضلي</li>\n	<li>تنظير المهبل</li>\n</ul>\n', '<h1>أمراض النساء والعمليات</h1>\n\n<p class=\"lead\">ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية</p>\n\n<p>ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية</p>\n<a class=\"imghover\" href=\"#\"><img alt=\"\" class=\"img-responsive mb30\" src=\"images/cyclemon-ovary.png\" /></a>\n\n<h1>إجراءات أمراض النساء</h1>\n\n<p class=\"lead\">هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\n\n<p>هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\n\n<ul class=\"listnone bullet bullet-arrow-default\">\n	<li>تنظير الرحم</li>\n	<li>استئصال الورم العضلي</li>\n	<li>تنظير المهبل</li>\n	<li>SomeThing</li>\n</ul>\n', 1),
(2, 'تكيس المبايض\r\n', 'تكيس المبايض\r\n', '', 'images/treatment-img-2.jpg', 2, '                    <h1>أمراض النساء2  والعمليات</h1>\r\n                    <p class=\"lead\">ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة.\r\n                        العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <p>ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية\r\n                        مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <a href=\"#\" class=\"imghover\"><img src=\"images/cyclemon-ovary.png\" alt=\"\"\r\n                            class=\"img-responsive mb30\"></a>\r\n\r\n                    \r\n                    <h1>إجراءات أمراض النساء</h1>\r\n                    <p class=\"lead\">هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا\r\n                        الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\r\n                    <p>هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى\r\n                        جانب المقاربة التقليديّة التي</p>\r\n                    <ul class=\"listnone bullet bullet-arrow-default\">\r\n                        <li>تنظير الرحم</li>\r\n                        <li>استئصال الورم العضلي</li>\r\n                        <li>تنظير المهبل</li>\r\n\r\n                    </ul>', '                    <h1>2أمراض النساء والعمليات</h1>\r\n                    <p class=\"lead\">ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة.\r\n                        العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <p>ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية\r\n                        مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <a href=\"#\" class=\"imghover\"><img src=\"images/cyclemon-ovary.png\" alt=\"\"\r\n                            class=\"img-responsive mb30\"></a>\r\n\r\n                    \r\n                    <h1>إجراءات أمراض النساء</h1>\r\n                    <p class=\"lead\">هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا\r\n                        الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\r\n                    <p>هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى\r\n                        جانب المقاربة التقليديّة التي</p>\r\n                    <ul class=\"listnone bullet bullet-arrow-default\">\r\n                        <li>تنظير الرحم</li>\r\n                        <li>استئصال الورم العضلي</li>\r\n                        <li>تنظير المهبل</li>\r\n\r\n                    </ul>', 1),
(4, 'تكيس المبايض\r\n2', 'تكيس المبايض\r\n2', '', 'images/treatment-img-3.jpg', 3, '                    <h1>3أمراض النساء والعمليات</h1>\r\n                    <p class=\"lead\">ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة.\r\n                        العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <p>ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية\r\n                        مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <a href=\"#\" class=\"imghover\"><img src=\"images/cyclemon-ovary.png\" alt=\"\"\r\n                            class=\"img-responsive mb30\"></a>\r\n\r\n                    \r\n                    <h1>إجراءات أمراض النساء</h1>\r\n                    <p class=\"lead\">هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا\r\n                        الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\r\n                    <p>هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى\r\n                        جانب المقاربة التقليديّة التي</p>\r\n                    <ul class=\"listnone bullet bullet-arrow-default\">\r\n                        <li>تنظير الرحم</li>\r\n                        <li>استئصال الورم العضلي</li>\r\n                        <li>تنظير المهبل</li>\r\n\r\n                    </ul>', '                    <h1>3أمراض النساء والعمليات</h1>\r\n                    <p class=\"lead\">ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة.\r\n                        العمليات الجراحية مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <p>ذا التخصص يغطي مشاكل أمراض النساء من مرحلة الطفولة، والمراهقين حتى سنوات لاحقة. العمليات الجراحية\r\n                        مثل جراحة تنظير البطن، الخزعات المخروطية </p>\r\n                    <a href=\"#\" class=\"imghover\"><img src=\"images/cyclemon-ovary.png\" alt=\"\"\r\n                            class=\"img-responsive mb30\"></a>\r\n\r\n                    \r\n                    <h1>إجراءات أمراض النساء</h1>\r\n                    <p class=\"lead\">هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا\r\n                        الخارجيّة إلى جانب المقاربة التقليديّة التي</p>\r\n                    <p>هو إجراء جراحي محدود يساعد على فحص الرحم من الداخل. نقدّم هذه الخدمة في عيادتنا الخارجيّة إلى\r\n                        جانب المقاربة التقليديّة التي</p>\r\n                    <ul class=\"listnone bullet bullet-arrow-default\">\r\n                        <li>تنظير الرحم</li>\r\n                        <li>استئصال الورم العضلي</li>\r\n                        <li>تنظير المهبل</li>\r\n\r\n                    </ul>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_cat_id`),
  ADD UNIQUE KEY `display_order` (`display_order`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `display_order` (`display_order`);

--
-- Indexes for table `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `package_item`
--
ALTER TABLE `package_item`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_item_details`
--
ALTER TABLE `package_item_details`
  ADD PRIMARY KEY (`package_info_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `display_order` (`display_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package_item`
--
ALTER TABLE `package_item`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_item_details`
--
ALTER TABLE `package_item_details`
  MODIFY `package_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
