
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `dbphones`
--
CREATE DATABASE IF NOT EXISTS `dbphones` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbphones`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `confirm` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_user1` (`id_user1`,`id_user2`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `friends`
--

INSERT INTO `friends` (`id`, `id_user1`, `id_user2`, `confirm`) VALUES
(7, 5, 4, 1),
(6, 7, 5, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sender` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date_s` datetime NOT NULL,
  `readed` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `message`
--

INSERT INTO `message` (`id`, `id_sender`, `id_rec`, `msg`, `date_s`, `readed`) VALUES
(1, 4, 5, 'test1 sdfwef', '2019-01-29 14:29:08', 1),
(2, 4, 5, 'werwe', '2019-01-29 14:44:20', 1),
(3, 4, 5, 'werwe', '2019-01-29 14:44:42', 1),
(4, 5, 4, 'ktewrwer', '2019-01-29 14:45:02', 1),
(5, 4, 5, 'qweqweqw', '2019-01-29 14:48:21', 1),
(6, 4, 5, 'werwer', '2019-01-29 15:02:46', 1),
(7, 5, 4, 'werwer', '2019-01-29 15:02:58', 1),
(8, 4, 5, 'werwer', '2019-01-29 15:03:04', 1),
(9, 5, 4, 'kalimera', '2019-01-29 15:03:19', 1),
(10, 4, 5, 'ti kaneis', '2019-01-29 15:04:36', 1),
(11, 5, 4, 'eimai kala', '2019-01-29 15:04:47', 1),
(12, 4, 5, 'tha eimai poly kala', '2019-01-29 15:05:17', 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `typos` varchar(300) NOT NULL,
  `perigrafi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `photos`
--

INSERT INTO `photos` (`id`, `id_user`, `file`, `typos`, `perigrafi`) VALUES
(7, 4, 'uploads/4_244747560lisi_ER.jpg', 'image/jpeg', 'lisi');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(400) NOT NULL,
  `typos` varchar(10) NOT NULL,
  `confirm` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `address`, `typos`, `confirm`) VALUES
(1, 'polpol2', 'polyd2', '32144352', 'ermou 51', 'admin', 0),
(3, 'pol2', 'poooo', '23453425', 'sdfnwelrkj', 'user', 0),
(4, 'uuuu', 'uuuu', '324234', 'sdfasldfjk', 'user', 1),
(5, 'aaaa', 'aaaa', '23422', 'werwerwer', 'user', 1),
(6, 'pol3', 'pol', '234234', 'sdfadfa', 'user', 1),
(7, 'nikos', 'nikos', '234534525', 'ermou 20', 'user', 1),
(8, 'petros', 'petros', '343534543', 'pergamou 20', 'admin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
