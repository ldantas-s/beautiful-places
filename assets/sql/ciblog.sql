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
('Gruta do Lago Azul', 'Monumento Natural da Gruta do Lago Azul é um monumento natural no município de Bonito, Mato Grosso do Sul, Brasil. Possui duas cavernas com formações calcárias interessantes, mas frágeis, e está listada como área protegida desde 1978.', 'https://lh6.googleusercontent.com/proxy/jyMy4ADRpbnzZofDmrbUUSfZ23hAwcfnPalgTepCNULYQT9EYFZzhw10hxVYdpgfMmomHmt8G1KHeq7JrG_vOu3eBXdyIdvPcvIQDCc1NxrRiL9c9hfpWA7sx3bdBLbOYtjB-RKyWoinbNvXgI9XrNWhT6ZiPT8u7sHMvBn3Li4W=w296-h202-n-k-no'),
('Abismo Anhumas', 'Rapel, caverna, mergulho autônomo e aventura', 'https://lh6.googleusercontent.com/proxy/M--MJVNN2nnIR6bKeq5e6E-C2cV1clti40HfspBYk-c_P5jO2raoDF0meyWjd0MkwtWLHRT17OY2mtmFGKqZs9oLKyTuuZe9Oik__7AU_lJOSiFIDKRSJCXTJYhqZbe7BsB6zSYnWubY8DjkT3aqtvCVF8PHzzh51eY=w296-h202-n-k-no'),
('Lagoa Misteriosa - Mergulho e Flutuação em Bonito, MS', 'O Lagoa Misteriosa é o nome popular de uma caverna alagada com cerca de 220 metros de profundidade localizado no município de Jardim, interior de Mato Grosso do Sul, estado da região Centro-Oeste do Brasil.', 'https://lh5.googleusercontent.com/p/AF1QipMnNm4XreYpPC7TzNvDOhf3mActcymsvZsz1Ia8=w296-h202-n-k-no'),
('Estância Mimosa Ecoturismo - Cachoeiras em Bonito, MS', 'Queda de Água, ecoturismo e observação de aves', 'https://lh5.googleusercontent.com/p/AF1QipPpeRU2znTR5iPq-WgR8RhuE_vU8eKIz_Se1Rz1=w296-h202-n-k-no');


COMMIT;