-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 19, 2020 at 01:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CodeReview10`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `last_name` char(70) DEFAULT NULL,
  `first_name` char(70) DEFAULT NULL,
  `media_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `publish_date` date NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `type` enum('book','CD','DVD') NOT NULL,
  `status` enum('available','reserved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `titel`, `image`, `author`, `ISBN`, `short_description`, `publish_date`, `publisher`, `type`, `status`) VALUES
(19, 'Anna Karenina', 'img/karenina.jpg', 'Leo Tolstoy', '9781847490599', 'A complex novel in eight parts, with more than a dozen major characters, it is spread over more than 800 pages (depending on the translation and publisher), typically contained in two volumes. It deals with themes of betrayal, faith, family, marriage, Imperial Russian society, desire, and rural vs. city life.', '1877-01-01', 'The Russian Messenger', 'book', 'available'),
(20, 'War and Peace', 'img/war_and_peace.jpg', 'Leo Tolstoy', '9780192827807', 'In Russia\'s struggle with Napoleon, Tolstoy saw a tragedy that involved all mankind. Greater than a historical chronicle, War and Peace is an affirmation of life itself', '1869-09-01', 'The Russian Messenger', 'book', 'available'),
(22, 'The Sign of the Four', 'img/the_sign.jpg', 'Arthur Conan Doyle', '9780192823793', 'The disappearance of a young woman\'s father and a mysterious note years later after the strange regular annual delivery of valuable pearls to her puts Sherlock Holmes on the case.', '1890-02-12', 'Lippincott\'s Monthly Magazine', 'book', 'available'),
(23, 'A Study in Scarlet', 'img/scarlet.jpg', 'Arthur Conan Doyle', ' 9780192123138', 'The story marks the first appearance of Sherlock Holmes and Dr. Watson, who would become the most famous detective duo in popular fiction. The book\'s title derives from a speech given by Holmes, a consulting detective, to his friend and chronicler Watson on the nature of his work.', '1887-09-23', 'Lippincott Monthly Magazine', 'book', 'available'),
(24, 'Abbey Road', 'img/Abbey.jpg', 'The Beatles', '0602577915079', 'Is the eleventh studio album by the English rock band the Beatles, released on 26 September 1969 by Apple Records. Named after the location of EMI Studios in London, the cover features the group walking across the street\'s zebra crossing, an image that became one of the most famous and imitated in popular music.', '1969-09-26', 'EMI, Olympic and Trident', 'CD', 'available'),
(25, 'Let It Be ', 'img/LetItBe.jpg ', 'The Beatles', '060257791507345', 'is the twelfth and final studio album by the English rock band the Beatles. It was released on 8 May 1970, almost a month after the group\'s break-up, in tandem with the motion picture of the same name.', '1870-05-08', 'EMI, Olympic and Trident', 'CD', 'available'),
(26, 'Harry Potter and the Philosopher Stone', 'img/Philosopher.jpg', 'J. K. Rowling', ' 97801921231435', 'An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world.', '2001-11-04', 'Warner Bros. Pictures ', 'book', 'available'),
(27, 'Harry Potter and the Chamber of Secrets', 'img/Chamber.jpg', 'J. K. Rowling', '9780192780724', 'An ancient prophecy seems to be coming true when a mysterious presence begins stalking the corridors of a school of magic and leaving its victims paralyzed.', '2002-11-15', 'Warner Bros. Pictures ', 'DVD', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publicher_name` char(50) DEFAULT NULL,
  `publicher_address` varchar(200) DEFAULT NULL,
  `size_of_publisher` enum('small','medium','big') DEFAULT NULL,
  `media_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `media_id_fk` (`media_id_fk`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`),
  ADD KEY `media_id_fk` (`media_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`media_id_fk`) REFERENCES `media` (`media_id`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`media_id_fk`) REFERENCES `media` (`media_id`);
