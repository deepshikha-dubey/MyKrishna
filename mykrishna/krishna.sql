-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 04:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `krishna`
--

CREATE TABLE `krishna` (
  `ID` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krishna`
--

INSERT INTO `krishna` (`ID`, `Title`, `Image`, `Description`) VALUES
(2, 'Surrender to Krishna', '39221246_889199387942359_4868716463650766848_n.jpg', 'Devotee should only serve the Supreme personality of Godhead. As Lord is the Protector of His Devotees, He takes care of everything. Devotee has nothing to worry about.'),
(3, 'Spiritual Life', 'sprituality.jpg', 'Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare/ Hare Rama, Hare Rama, Rama Rama, Hare Hare. In Kali-yuga, if this Vedic maha-mantra is chanted regularly and heard regularly by the devotional process of shravanam kirtanam, it will purify all societies, and thus humanity will be happy both materially and spiritually.'),
(4, 'Supreme Lord', 'supreme.jpg', 'The Supreme LordÂ is eternal,Â perennially young,Â and so are HisÂ immortal words:Â they are ever-fresh.\r\n\r\nAlthough I am unborn and My transcendental body never deteriorates, and although I am the Lord of all living entities, I still appear in every millenium in My original transcendental form.\r\n\r\nThe supreme personality of Godhead is the only shelter of everyone. Anyone desiring to be protected by others is certainly a great fool who desires to cross the sea by holding the tail of a dog.'),
(5, 'Surrender', '2017-02-08--07_52_45.jpg', 'Devotee should only serve the Supreme personality of Godhead. As Lord is the protector of his Devotees, he takes care of everything. Devotee has nothing to worry about.'),
(6, 'Krishna believed in teamwork', '155215.jpeg', 'Krishna always worked as a member of the team with his friends during all occasions like the work, play, trouble, dance, happiness.\r\n\r\nKrishna never posed himself as a leader though he was an undisputed leader of the villagers at the age of 8 years.\r\n\r\nLORD KRISHNA BELIEVED IN TEAMWORK'),
(7, 'Krishna believed in forgiveness but to a limit of selfrespect', '20160611211635.jpg', 'Krishna forgive one hundred abuses of Shishupal in Indraprashtha but thereafter punished him.\r\n\r\nLORD KRISHNA WAS A KIND HEARTED, FORGIVER BUT HAVING SELF RESPECT.'),
(8, 'Krishna showed the courage', 'krishna&kaliya.jpg', 'Krishna went into Yamuna where Kaliya Nag lived though nobody dared to go inside his territory. He defeated Kaliya and forced him to leave the place for protection of his followers.\r\n\r\nLORD KRISHNA HAD COURAGE TO FACE ANY CONDITION.'),
(9, 'Krishna protected his followers', 'krishna-arjuna.jpeg', 'Krishna protected Arjun at the many occasions including the day when he took oath to slain Jayadrath before sunset and if not for self immolation.\r\n\r\nLORD KRISHNA WAS ALWAYS WITH HIS FRIENDS AND FOLLOWERS AND PROTECTED THEM.'),
(11, 'Krishna loved to all', '2016-11-17--16_07_59.jpg', 'Krishna loved to elders, friends, and aoung once. He also loved animals, birds and even non livings. He loved everyone without differenting in gender, or caste.\r\n   LORD KRISHNA LOVED ALL LIVING ANIMALS AND NATURE WITHOUT ANY DIFFERENTIATION.'),
(12, 'Bhagavad Geeta', '262636ee9e1a1ac61cf77b62e2b453ff-1.jpeg', 'On the other hand, if a sincere person tries to control the active senses by the mind and begins karma-yoga [in Krsna consciousness] without attachment, he is by far superior.'),
(13, 'How To Love Shri Krishna', 'Krishna-taking-prasadam.png', 'Learning to love Krishna is something like developing love for family and friends in our everyday life. But we can offer all aspects of our life to Krishna, and one of the most important and practical offerings is food. Krishna declares that devotees who eat food first offered to Him make spiritual advancement but those who prepare food for personal sense enjoyment â€œverily eat only sinâ€ (Bhagavad-gita 3.13). By offering tasty vegetarian dishes for Krishnaâ€™s pleasure and then eating His remnants, we not only avoid sinful reaction, but also gradually develop our loving relationship with Him. After all, love is all about give and take.'),
(14, 'Krishna Quotes', 'Devotional-Service.jpg', 'Better indeed is knowledge then mechanical practice. Better than knowledge is meditation. But better still is surrender of attachment to results, because there follows immediate piece.    '),
(2, 'Surrender to Krishna', '39221246_889199387942359_4868716463650766848_n.jpg', 'Devotee should only serve the Supreme personality of Godhead. As Lord is the Protector of His Devotees, He takes care of everything. Devotee has nothing to worry about.'),
(3, 'Spiritual Life', 'sprituality.jpg', 'Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare/ Hare Rama, Hare Rama, Rama Rama, Hare Hare. In Kali-yuga, if this Vedic maha-mantra is chanted regularly and heard regularly by the devotional process of shravanam kirtanam, it will purify all societies, and thus humanity will be happy both materially and spiritually.'),
(4, 'Supreme Lord', 'supreme.jpg', 'The Supreme LordÂ is eternal,Â perennially young,Â and so are HisÂ immortal words:Â they are ever-fresh.\r\n\r\nAlthough I am unborn and My transcendental body never deteriorates, and although I am the Lord of all living entities, I still appear in every millenium in My original transcendental form.\r\n\r\nThe supreme personality of Godhead is the only shelter of everyone. Anyone desiring to be protected by others is certainly a great fool who desires to cross the sea by holding the tail of a dog.'),
(5, 'Surrender', '2017-02-08--07_52_45.jpg', 'Devotee should only serve the Supreme personality of Godhead. As Lord is the protector of his Devotees, he takes care of everything. Devotee has nothing to worry about.'),
(6, 'Krishna believed in teamwork', '155215.jpeg', 'Krishna always worked as a member of the team with his friends during all occasions like the work, play, trouble, dance, happiness.\r\n\r\nKrishna never posed himself as a leader though he was an undisputed leader of the villagers at the age of 8 years.\r\n\r\nLORD KRISHNA BELIEVED IN TEAMWORK'),
(7, 'Krishna believed in forgiveness but to a limit of selfrespect', '20160611211635.jpg', 'Krishna forgive one hundred abuses of Shishupal in Indraprashtha but thereafter punished him.\r\n\r\nLORD KRISHNA WAS A KIND HEARTED, FORGIVER BUT HAVING SELF RESPECT.'),
(8, 'Krishna showed the courage', 'krishna&kaliya.jpg', 'Krishna went into Yamuna where Kaliya Nag lived though nobody dared to go inside his territory. He defeated Kaliya and forced him to leave the place for protection of his followers.\r\n\r\nLORD KRISHNA HAD COURAGE TO FACE ANY CONDITION.'),
(9, 'Krishna protected his followers', 'krishna-arjuna.jpeg', 'Krishna protected Arjun at the many occasions including the day when he took oath to slain Jayadrath before sunset and if not for self immolation.\r\n\r\nLORD KRISHNA WAS ALWAYS WITH HIS FRIENDS AND FOLLOWERS AND PROTECTED THEM.'),
(11, 'Krishna loved to all', '2016-11-17--16_07_59.jpg', 'Krishna loved to elders, friends, and aoung once. He also loved animals, birds and even non livings. He loved everyone without differenting in gender, or caste.\r\n   LORD KRISHNA LOVED ALL LIVING ANIMALS AND NATURE WITHOUT ANY DIFFERENTIATION.'),
(12, 'Bhagavad Geeta', '262636ee9e1a1ac61cf77b62e2b453ff-1.jpeg', 'On the other hand, if a sincere person tries to control the active senses by the mind and begins karma-yoga [in Krsna consciousness] without attachment, he is by far superior.'),
(13, 'How To Love Shri Krishna', 'Krishna-taking-prasadam.png', 'Learning to love Krishna is something like developing love for family and friends in our everyday life. But we can offer all aspects of our life to Krishna, and one of the most important and practical offerings is food. Krishna declares that devotees who eat food first offered to Him make spiritual advancement but those who prepare food for personal sense enjoyment â€œverily eat only sinâ€ (Bhagavad-gita 3.13). By offering tasty vegetarian dishes for Krishnaâ€™s pleasure and then eating His remnants, we not only avoid sinful reaction, but also gradually develop our loving relationship with Him. After all, love is all about give and take.'),
(14, 'Krishna Quotes', 'Devotional-Service.jpg', 'Better indeed is knowledge then mechanical practice. Better than knowledge is meditation. But better still is surrender of attachment to results, because there follows immediate piece.    '),
(25, 'Surrender to Krishna\'s Lotus feet ', 'Images/KRISHNA;S_FEET.jpg', 'O My Lord, as powerful as fire, O omnipotent one, now I offer You all obeisances, falling on the ground at Your feet. O my Lord please lead me on right path to reach You, and since You know all that I have done in the past, please free me from the reactions to my past since so that there will be no hindrance to my progress.'),
(26, 'Surrender to Krishna\'s Lotus feet ', 'Images/KRISHNA_FEET.jpg', 'Lord Krishna is ready to talk with you. He has come, He has descended in arca-murti to talk with you, to be visible by you. Now you make yourself ready and fit to talk with Krishna. Then He will exchange conversation. This is possible...'),
(27, 'Surrender to Lord Krishna\'s feet', 'Krishna_lotus_feet.jpg', 'Krishna Consciousness moment is so important that without taking to it, no other method: political, social, religious, cultural can give relief to the poor chaotic status of the worldly situation...'),
(28, 'Surrender to Lord Krishna\'s feet', 'krishnabeautiful_Feet.jpg', 'The Process of Krishna Consciousness work; but we have to take the medicine properly. Problems start when we give up the process... ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
