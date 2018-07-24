
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE Comments (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `text` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `Comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;


