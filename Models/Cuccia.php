<?php
include __DIR__ . "/Trait_Tessuto.php";

    class Cuccia extends Prodotto{

        public $colore;
        public $dimensione;
    
        public function __construct(String $nome, Float $prezzo, String $image, String $marca, String $peso, String $disponibilit√†, String $colore, String $dimensione){
            parent:: __construct($nome, $prezzo, $image, $marca, $peso, $disponibilit√†);
            $this->colore = $colore;
            $this->dimensione = $dimensione;
        }

        use Tessuto;
    }
?>