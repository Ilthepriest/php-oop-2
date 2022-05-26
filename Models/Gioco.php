<?php
    class Gioco extends Prodotto{
        public $colore;
        public $diametro;
    
        public function __construct(String $nome, Float $prezzo, String $image, String $marca, String $peso, String $disponibilità, String $colore, Int $diametro){
            parent:: __construct($nome, $prezzo, $image, $marca, $peso, $disponibilità);
            $this->colore = $colore;
            $this->diametro = $diametro;
        }
    }
 ?>