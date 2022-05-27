<?php
    class Prodotto{
        public $nome;
        public $prezzo;
        public $image;
        public $marca;
        public $peso;
        public $disponibilità;
        public $sconto = "Registrati per avere lo sconto !";
        public $pagamento;
    
        public function __construct(String $nome, Float $prezzo, String $image, String $marca, String $peso, String $disponibilità)
        {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->image = $image;
            $this->marca = $marca;
            $this->peso = $peso;
            $this->disponibilità = $disponibilità;
        }
    
        public function getSconto(){
            if(rand(0, 10) % 2 == 0){
                $this->sconto = " Sconto del 20% !!!";
            }
            return $this->sconto;
        }
    
        public function getPagamento(){
            if(rand(2018, 2024) < date('Y')){
                $this->pagamento = "Pagamento rifiutato";
            }else if(rand(2018, 2024) >= date('Y')){
                $this->pagamento = "Pagamento accettato";
            }
            return $this->pagamento;
        }

        

       
    };
 ?>