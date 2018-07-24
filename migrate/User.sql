
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `User` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `User` (`id`, `name`, `password`, `status`) VALUES
(38, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0),
(39, 'Guest', 'a320480f534776bddb5cdb54b1e93d210a3c7d199e80a23c1b2178497b184c76', 1);


ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `User`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

