<?php
    class Cuccia extends Prodotto{
        public $colore;
        public $dimensione;
    
        public function __construct(String $nome, Float $prezzo, String $image, String $marca, String $peso, String $disponibilità, String $colore, String $dimensione){
            parent:: __construct($nome, $prezzo, $image, $marca, $peso, $disponibilità);
            $this->colore = $colore;
            $this->dimensione = $dimensione;
        }
    }
?>