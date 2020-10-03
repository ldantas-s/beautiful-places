SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `beautiful_places`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--
CREATE TABLE `places` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `place_name` VARCHAR(255) NOT NULL, 
  `description` VARCHAR(255),
  `image` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET NAMES utf8;


--
-- Dumping data for table `places`
--
INSERT INTO `places` (`place_name`, `description`, `image`) VALUES 
('Lagoa Misteriosa - Mergulho e Flutuação em Bonito, MS', 'O Lagoa Misteriosa é o nome popular de uma caverna alagada com cerca de 220 metros de profundidade localizado no município de Jardim, interior de Mato Grosso do Sul, estado da região Centro-Oeste do Brasil.', 'https://lh5.googleusercontent.com/p/AF1QipMnNm4XreYpPC7TzNvDOhf3mActcymsvZsz1Ia8=w296-h202-n-k-no'),
('Estância Mimosa Ecoturismo - Cachoeiras em Bonito, MS', 'Queda de Água, ecoturismo e observação de aves', 'https://lh5.googleusercontent.com/p/AF1QipPpeRU2znTR5iPq-WgR8RhuE_vU8eKIz_Se1Rz1=w296-h202-n-k-no'),
('Aquário Natural', 'Rio, ecoturismo e esnórquel', 'https://t1.gstatic.com/images?q=tbn:ANd9GcRyL8viWgmrlGicmGWEZ2fMxUCbXcB8Z0-VLUsCAGPF6zLB6gC9TNRbUxw3ssjyt_v9ICMVLkl8vCaqSg'),
('Rio Sucuri Ecoturismo Bonito', 'Rio, ecoturismo e esnórquel', 'https://t2.gstatic.com/images?q=tbn:ANd9GcTjuDPLCuGWBDby7K40aSZXpZn6UJTL9SX8UAlaMFnn2WvF__zY3wglXjqCJ3adnjQwGFGtTqCbt1HXNg');


--
-- Table structure for table `comments`
--
CREATE TABLE `comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_place` int(11) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `commentary` TEXT(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_place`) REFERENCES `places`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--
INSERT INTO `comments` (`username`, `commentary`, `id_place`) VALUES 
('ldantas_s','This lake is so crazy',1),
('ldantas_s','This place is so beautiful',4);


SET NAMES utf8;
COMMIT;