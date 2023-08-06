-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table phpblog_db.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `quote` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='table for posts';

-- Dumping data for table phpblog_db.posts: ~1 rows (approximately)
INSERT INTO `posts` (`id`, `body`, `title`, `quote`, `image`, `author`, `created_at`) VALUES
	(3, 'Introduction\r\n\r\nChildbirth is a profound and transformative experience that has captivated human beings for millennia. It is a journey of love, courage, and empowerment, where new life is brought into the world, marking the beginning of a beautiful chapter in a parent\'s life. Throughout history, childbirth has been revered and celebrated, and today, it continues to be a cherished milestone in the lives of families worldwide. In this blog post, we will explore the multifaceted aspects of childbirth, delving into its significance, the stages of labor, the role of medical professionals, and the enduring bond it creates between parents and their newborn.\r\n\r\nThe Significance of Childbirth\r\n\r\nChildbirth is an essential and natural process that allows the continuation of life. It represents the culmination of a miraculous journey that starts with conception and progresses through the phases of pregnancy. The human body undergoes remarkable transformations during this time, with the mother nurturing and protecting the growing life within her. This period of anticipation and preparation is a time of emotional and physical growth for both the parents and the unborn child.\r\n\r\nThe Stages of Labor\r\n\r\nLabor, the process of childbirth, typically consists of three main stages: the early, active, and transitional phases. During the early stage, contractions begin, signaling the onset of labor. These contractions gradually become more regular and intense, as the cervix starts to dilate and efface in preparation for birth. In the active phase, the contractions reach their peak, and the cervix continues to dilate, allowing the baby to descend further down the birth canal. Finally, during the transitional stage, the cervix fully dilates to 10 centimeters, and the mother may experience intense emotions, exhaustion, and a strong urge to push. It is during this phase that the baby is born, completing the journey of childbirth.\r\n\r\nThe Role of Medical Professionals\r\n\r\nChildbirth is often supported by a team of medical professionals, including obstetricians, midwives, nurses, and doulas. These individuals play a crucial role in ensuring the safety and well-being of both the mother and the baby. They provide essential care, monitor the progress of labor, and offer guidance and support to the parents throughout the process. Medical interventions are sometimes necessary to address potential complications, but the primary focus is always on maintaining the health and comfort of the mother and child.\r\n\r\nThe Empowerment of Birth\r\n\r\nChildbirth is a transformative experience that empowers women as they navigate the journey of bringing life into the world. The strength, resilience, and determination displayed during labor are awe-inspiring, reinforcing the power that lies within every woman. The birthing process can also be a source of empowerment for partners, as they offer unwavering support and share in the joy of welcoming a new life.\r\n\r\nThe Bond between Parents and Newborn\r\n\r\nThe moment a child is born is nothing short of magical. It marks the beginning of a unique bond between parents and their newborn, a bond that will grow and deepen over time. Skin-to-skin contact immediately after birth facilitates bonding and provides numerous benefits for the baby, including regulating body temperature, stabilizing heart rate, and fostering a sense of security. This intimate connection lays the foundation for a lifetime of love, care, and nurturing.\r\n\r\nConclusion\r\n\r\nChildbirth is a profound and beautiful journey that encompasses the essence of life and the strength of the human spirit. It represents the epitome of love, courage, and empowerment as parents welcome their newborn into the world. Throughout history, childbirth has been celebrated and revered, and its significance remains unchanged in the modern world. As we continue to marvel at the miracle of childbirth, let us cherish and honor the magic it bestows upon us, reminding us of the wonders of life and the enduring power of love.', 'The Miracle of Childbirth: A Journey of Love, Courage, and Empowerment', ' As we continue to marvel at the miracle of ', '1691239842_good-faces-DavJROC1lBM-unsplash.jpg', 'John Doe', NULL),
	(4, 'HIV, or Human Immunodeficiency Virus, is a global health issue that has shaped public health efforts for decades. Since its discovery in the early 1980s, HIV has affected millions of lives, challenging communities, healthcare systems, and governments worldwide. Despite the obstacles, significant progress has been made in understanding and managing HIV, offering hope for a future where HIV is no longer a devastating epidemic.\r\n\r\nThe Impact of HIV\r\n\r\nHIV attacks the body\'s immune system, weakening its ability to fight off infections and diseases. As a result, individuals living with HIV are more susceptible to opportunistic infections, which can lead to severe health complications. The virus is primarily transmitted through unprotected sexual intercourse, sharing of contaminated needles, and from mother to child during childbirth or breastfeeding. Stigma and discrimination towards people living with HIV have also posed significant barriers to testing, treatment, and support.\r\n\r\nAdvancements in Treatment and Prevention\r\n\r\nOver the years, extensive research has led to remarkable advancements in HIV treatment. Antiretroviral therapy (ART) has revolutionized the management of HIV, helping people living with the virus to lead healthier lives. ART suppresses the virus, reducing its replication and slowing down the progression to AIDS (Acquired Immunodeficiency Syndrome). Additionally, pre-exposure prophylaxis (PrEP) has proven effective in preventing HIV transmission for individuals at high risk of infection.\r\n\r\nChallenges and Ongoing Efforts\r\n\r\nDespite these advancements, challenges persist. Access to treatment and prevention methods remains unequal globally, with marginalized communities often facing barriers to healthcare. The fight against HIV also requires continued efforts in raising awareness, reducing stigma, and encouraging testing and early diagnosis.\r\n\r\nHope for the Future\r\n\r\nThere is reason to be optimistic about the future of HIV management. Researchers continue to explore new treatment strategies, vaccines, and potential cures. Moreover, global initiatives and partnerships aim to strengthen healthcare systems and promote equitable access to HIV services. By working together, we can envision a world where HIV is no longer a life-threatening condition but a manageable chronic illness.\r\n\r\nConclusion\r\n\r\nHIV has been a formidable global health challenge, but progress in understanding, treating, and preventing the virus has offered hope for a better future. Continued efforts in research, awareness, and advocacy are essential to ensure that the fight against HIV remains a priority. By supporting those affected, combating stigma, and promoting access to treatment and prevention, we can move closer to an HIV-free world and create a healthier, more inclusive society for all.', ' Understanding HIV: Progress, Challenges, and Hope', 'By supporting those affected, combating stigma, and promoting access to treatment and prevention', '1691240640_mama-daughter.jpg', 'Admin', NULL);

-- Dumping structure for table phpblog_db.topics
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='topics table';

-- Dumping data for table phpblog_db.topics: ~2 rows (approximately)
INSERT INTO `topics` (`id`, `name`, `description`) VALUES
	(1, 'Technology', 'technology'),
	(2, 'Business', 'business'),
	(3, 'Fashion', 'fashion');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
