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


--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_name`, `description`, `image`) VALUES 
('Gruta do Lago Azul', 'Monumento Natural da Gruta do Lago Azul é um monumento natural no município de Bonito, Mato Grosso do Sul, Brasil. Possui duas cavernas com formações calcárias interessantes, mas frágeis, e está listada como área protegida desde 1978.', 'https://lh4.googleusercontent.com/proxy/GN3eD6L-T8xqAWp5QesPJOgd5FdLhU-2bY3CST2PT5zDhFwO52ENUAy6UCvyjnPM0irlbWSmwG8QOwaJyxXRZHZSgy5OayLzgOuIdI0Q0kQhvLc2ROb2zr4hjrUlF4KGiI1ep4IATFy02g7kRxHOlVw_Io8JFqbGyJ1D37Fec3Wq=w296-h202-n-k-no'),
('Abismo Anhumas', 'Rapel, caverna, mergulho autônomo e aventura', 'https://lh3.googleusercontent.com/proxy/6CCe4-tqMqNfm5cwXxP2Qb4v82dimeR-PTiI2l_ZhX6T0PveVmOE5kpGTTxBcc40ZUdVilY6DWC1Mw1dHwWgr-uezCeMdfzfnfPohNF9Xa2B0h2tWLTVEVcJZVEtxKvkLuWqGD_u35TgaZx1rDUv67iDrgkQi8o-jtM=w296-h202-n-k-no'),
('Lagoa Misteriosa - Mergulho e Flutuação em Bonito, MS', 'O Lagoa Misteriosa é o nome popular de uma caverna alagada com cerca de 220 metros de profundidade localizado no município de Jardim, interior de Mato Grosso do Sul, estado da região Centro-Oeste do Brasil.', 'https://lh5.googleusercontent.com/p/AF1QipMnNm4XreYpPC7TzNvDOhf3mActcymsvZsz1Ia8=w296-h202-n-k-no'),
('Estância Mimosa Ecoturismo - Cachoeiras em Bonito, MS', 'Queda de Água, ecoturismo e observação de aves', 'https://lh5.googleusercontent.com/p/AF1QipPpeRU2znTR5iPq-WgR8RhuE_vU8eKIz_Se1Rz1=w296-h202-n-k-no');


--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `place_id` int(11) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `text` TEXT(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),

  PRIMARY KEY (`id`),
  FOREIGN KEY (`place_id`) REFERENCES `places`(`id`)
) ENGINE-InnoDB DEFAULT CHARSET=latin1;



SET NAMES utf8;
COMMIT;