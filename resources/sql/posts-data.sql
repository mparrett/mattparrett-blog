-- MySQL dump 10.13  Distrib 5.6.15, for osx10.9 (x86_64)
--
-- Host: 192.168.33.11    Database: blog_mp_dev
-- ------------------------------------------------------
-- Server version	5.6.17-65.0-587.precise

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `body_template` varchar(255) DEFAULT NULL,
  `shortlink` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `posted` (`created`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES
(7,'Our Habits Are a Reflection','','mp-blog/posts/wp-export/our-habits-are-a-reflection.md','our-habits-are-a-reflection','Matt','2013-03-01 12:05:56'),
(8,'I\'m Terrified of Starting a Blog','','mp-blog/posts/wp-export/introducing-my-blog.md','introducing-my-blog','Matt','2013-03-02 13:41:05'),
(10,'Don\'t Settle For Survival','','mp-blog/posts/wp-export/dont-settle-for-survival.md','dont-settle-for-survival','Matt','2013-03-07 14:58:15'),
(11,'Reading List 2013','','mp-blog/posts/wp-export/reading-list-2013.md','reading-list-2013','Matt','2013-09-09 10:00:07'),
(12,'How to Lose a Brazilian Jiu Jitsu Tournament','','mp-blog/posts/wp-export/how-to-lose-a-brazilian-jiu-jitsu-tournament.md','how-to-lose-a-brazilian-jiu-jitsu-tournament','Matt','2013-03-12 17:38:26'),
(13,'WordPress Installation Made Easy','','mp-blog/posts/wp-export/wordpress-installation-made-easy.md','wordpress-installation-made-easy','Matt','2013-02-28 20:50:41'),
(19,'Drowning In Debt: Economics of Living Well','','mp-blog/posts/wp-export/drowning-debt.md','drowning-debt','Matt','1970-01-01 00:00:00'),
(20,'Imagine the Opposite','','mp-blog/posts/wp-export/imagine-the-opposite.md','imagine-the-opposite','Matt','2013-03-13 16:26:14'),
(21,'Truthful Time Management Tips','','mp-blog/posts/wp-export/truthful-time-management-tips.md','truthful-time-management-tips','Matt','2013-03-14 01:33:15'),
(22,'Overcome Distraction, Regain Focus, and Work Smarter','','mp-blog/posts/wp-export/overcome-distraction-regain-focus-work-smarter.md','overcome-distraction-regain-focus-work-smarter','Matt','2013-03-18 20:20:18'),
(23,'Business Development Strategy: Counterfactual Simulation','','mp-blog/posts/wp-export/business-development-strategy-counterfactual-simulation.md','business-development-strategy-counterfactual-simulation','Matt','2013-03-19 14:10:18'),
(24,'The Best Free Search Engine Optimization Guides','','mp-blog/posts/wp-export/the-best-free-search-engine-optimization-guides.md','the-best-free-search-engine-optimization-guides','Matt','2013-03-13 13:58:02'),
(25,'A Deeper Truth About Money','','mp-blog/posts/wp-export/a-deeper-truth-about-money.md','a-deeper-truth-about-money','Matt','2013-04-02 17:42:08'),
(26,'You Are Bigger Than Your Habits','','mp-blog/posts/wp-export/you-are-bigger-than-your-habits.md','you-are-bigger-than-your-habits','Matt','2013-06-05 18:01:27'),
(27,'We Will Find a Way','','mp-blog/posts/wp-export/we-will-find-a-way.md','we-will-find-a-way','Matt','2013-06-07 16:14:22'),
(28,'Proper Care And Feeding of Programmers','','mp-blog/posts/wp-export/proper-care-and-feeding-of-programmers.md','proper-care-and-feeding-of-programmers','Matt','2013-06-08 19:18:54'),
(29,'Old Habits Die Easy','','mp-blog/posts/wp-export/old-habits-die-easy.md','old-habits-die-easy','Matt','2013-06-16 17:37:19'),
(30,'You Aren\'t What You Think','','mp-blog/posts/wp-export/you-arent-what-you-think.md','you-arent-what-you-think','Matt','2013-06-22 15:07:46'),
(31,'Save The Kids','','mp-blog/posts/wp-export/put-on-your-mask-first-and-save-the-kids.md','put-on-your-mask-first-and-save-the-kids','Matt','2013-06-22 20:29:47'),
(32,'Choose To Drop The Excuses','','mp-blog/posts/wp-export/choose-to-drop-the-excuses.md','choose-to-drop-the-excuses','Matt','2013-07-13 18:49:41'),
(33,'The List Goes On Forever','','mp-blog/posts/wp-export/the-list-goes-on-forever.md','the-list-goes-on-forever','Matt','2013-08-23 14:09:47'),
(34,'Your Mental Models are Not Real (Part 1)','','mp-blog/posts/wp-export/your-mental-models-are-not-real.md','your-mental-models-are-not-real','Matt','2013-09-17 17:03:18'),
(35,'What\'s your deepest reason for sharing your gifts?','','mp-blog/posts/wp-export/whats-deepest-reason.md','whats-deepest-reason','Matt','2013-10-16 16:52:36'),
(36,'Five Easy Steps to Achieve Your Goals','','mp-blog/posts/wp-export/five-easy-steps-achieve-goals.md','five-easy-steps-achieve-goals','Matt','2013-06-15 17:30:55'),
(37,'How To Worry Like a Hero','','mp-blog/posts/wp-export/worry-like-hero.md','worry-like-hero','Matt','2013-10-19 10:00:45'),
(38,'Goal Jitsu 14 Day Challenge','','mp-blog/posts/wp-export/goal-jitsu-14-day-challenge.md','goal-jitsu-14-day-challenge','Matt','2013-10-23 09:10:48'),
(39,'Thirty Cold Showers - My Progress','','mp-blog/posts/wp-export/thirty-cold-showers-my-progress.md','thirty-cold-showers-my-progress','Matt','2014-01-11 04:24:40'),
(40,'Ninety Days, No Excuses: An Experiment in Fitness','','mp-blog/posts/wp-export/ninety-days-no-excuses-fitness-exercise-nutrition-journal.md','ninety-days-no-excuses-fitness-exercise-nutrition-journal','Matt','2014-01-25 21:28:45'),
(41,'The Most Powerful Advice You Might Ever Hear, Unless You Like Being Miserable','','mp-blog/posts/wp-export/powerful-advice-might-ever-hear-unless-like-miserable.md','powerful-advice-might-ever-hear-unless-like-miserable','Matt','2014-01-25 21:25:49');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-19 15:44:20
