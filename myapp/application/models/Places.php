<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Places extends CI_Model {

    private $info_places;

    function __construct() {

      $this->info_places = [
        [
          "id" => "0",
          "place_name" => "Cristo Redentor",
          "description" => "Cristo Redentor é uma estátua art déco que retrata Jesus Cristo, localizada no topo do morro do Corcovado, a 709 metros acima do nível do mar, no Parque Nacional da Tijuca, com vista para a maior parte da cidade do Rio de Janeiro, Brasil. Em 2007 foi eleito informalmente como uma das sete maravilhas do mundo moderno. Em 2012 a UNESCO considerou o Cristo Redentor como parte da paisagem do Rio de Janeiro incluída na lista de Patrimônios da Humanidade.",
          "image" => "cristo-redentor.jpg"
        ],
        [
          "id" => "1",
          "place_name" => "Pão de Açucar",
          "description" => "Monumento Natural dos Morros do Pão de Açúcar e da Urca é um complexo de morros localizado no bairro da Urca, na cidade do Rio de Janeiro, no Brasil. É composto pelo Morro do Pão de Açúcar e pelo Morro da Urca. Junto com a estátua do Cristo Redentor, é o maior cartão-postal da cidade do Rio de Janeiro e um dos mais famosos do Brasil. ",
          "image" => "pao-acuca.jpg",
        ],
        [
          "id" => "2",
         "place_name" => "Corcovado",
         "description" => "O Corcovado é um dos morros da cidade do Rio de Janeiro, célebre no Brasil e no mundo pela sua estátua do Cristo Redentor de 38 metros de altura. O Cristo Redentor é um dos principais símbolos do país e oferece uma privilegiada vista panorâmica da cidade do Rio de Janeiro. Em 2003 foram concluídas as obras de instalação de elevadores e escadas rolantes no local.",
         "image" => "corcovado.jpg",
        ],
        [
          "id" => "3",
          "place_name" => "Fernando de Noronha",
          "description" => "Fernando de Noronha é um arquipélago brasileiro do estado de Pernambuco. Formado por 21 ilhas, ilhotas e rochedos de origem vulcânica, ocupa uma área total de 26 km² — dos quais 17 km² são da ilha principal — e se situa no Oceano Atlântico a nordeste do Brasil continental, distando 545 km da capital pernambucana, Recife, e 360 km de Natal no Rio Grande do Norte.",
          "image" => "fernando-noronha.jpg",
        ],
        [
          "id" => "4",
          "place_name" => "Parque Nacional dos Lençóis Maranhenses",
          "description" => "O Parque Nacional dos Lençóis Maranhenses é uma unidade de conservação brasileira de proteção integral à natureza localizada na região nordeste do estado do Maranhão. O território do parque, com uma área de 156 584 ha, está distribuído pelos municípios de Barreirinhas, Primeira Cruz e Santo Amaro do Maranhão. ",
          "image" => "lencoes-maranhense.jpg",
        ],
        [
          "id" => "5",
          "place_name" => "Escadaria Selarón",
          "description" => "A Escadaria Selarón é uma obra arquitetônica localizada entre os bairros de Santa Teresa e Lapa, no Rio de Janeiro, Brasil, decorada pelo artista chileno radicado no Brasil de longa data, Jorge Selarón, que declarou-a como uma \"homenagem ao povo brasileiro\".",
          "image" => "escadaria-selaron.jpeg",
        ],			 
      ];
    }

    public function placesImages() {
      $images = [];

      foreach ($this->info_places as $place) {
        $images[$place['place_name']] = array(
          'id' =>  $place['id'],
          'image' =>  $place['image']
        );
      }
      
      return $images;
    }

    public function placeInfo($id) {
      return $this->info_places[$id];
    }

  }
