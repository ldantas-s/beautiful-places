SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `beautiful_places`
--

--
-- Table structure for table `user`
--
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45),
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),

  UNIQUE(`email`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET NAMES utf8;

--
-- Table structure for table `places`
--
CREATE TABLE `places` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_user` INT(11) NOT NULL,
  `place_name` VARCHAR(255) NOT NULL, 
  `description` VARCHAR(255),
  `image` VARCHAR(255) NOT NULL,

  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_user`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET NAMES utf8;

--
-- Table structure for table `comments`
--
CREATE TABLE `comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_place` int(11) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `commentary` TEXT(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_place`) REFERENCES `places`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET NAMES utf8;


-- Dumping data for tables

--
-- Dumping data for table `user`
--
INSERT INTO `users` (`name`, `email`, `password`) VALUES
('ldantas_s', 'ldantas_s@email.com', '123456'),
('maryland', 'maryland@email.com', '123456');

--
-- Dumping data for table `places`
--
INSERT INTO `places` (`id_user`, `place_name`, `description`, `image`) VALUES 
(1,'Lagoa Misteriosa - Mergulho e Flutuação em Bonito, MS', 'O Lagoa Misteriosa é o nome popular de uma caverna alagada com cerca de 220 metros de profundidade localizado no município de Jardim, interior de Mato Grosso do Sul, estado da região Centro-Oeste do Brasil.', 'https://lh5.googleusercontent.com/p/AF1QipMnNm4XreYpPC7TzNvDOhf3mActcymsvZsz1Ia8=w296-h202-n-k-no'),
(2,'Estância Mimosa Ecoturismo - Cachoeiras em Bonito, MS', 'Queda de Água, ecoturismo e observação de aves', 'https://lh5.googleusercontent.com/p/AF1QipPpeRU2znTR5iPq-WgR8RhuE_vU8eKIz_Se1Rz1=w296-h202-n-k-no'),
(1,'Aquário Natural', 'Rio, ecoturismo e esnórquel', 'https://t1.gstatic.com/images?q=tbn:ANd9GcRyL8viWgmrlGicmGWEZ2fMxUCbXcB8Z0-VLUsCAGPF6zLB6gC9TNRbUxw3ssjyt_v9ICMVLkl8vCaqSg'),
(1,'Rio Sucuri Ecoturismo Bonito', 'Rio, ecoturismo e esnórquel', 'https://t2.gstatic.com/images?q=tbn:ANd9GcTjuDPLCuGWBDby7K40aSZXpZn6UJTL9SX8UAlaMFnn2WvF__zY3wglXjqCJ3adnjQwGFGtTqCbt1HXNg');

--
-- Dumping data for table `places`
--
INSERT INTO `comments` (`name`, `commentary`, `id_place`) VALUES 
('ldantas_s','This lake is so crazy',1),
('ldantas_s','This place is so beautiful',4);

COMMIT;