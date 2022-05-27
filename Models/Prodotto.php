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
            $random_date = rand(2018,2025);
            //$random_date = "non è un intero"; // in questo caso genererà l'errore e verrà l'avvertimento a schermo
            if(!is_int($random_date)){
                throw new Exception("Devi inserire una data");
            }else if($random_date >= date('Y')){
                $this->pagamento = "Pagamento accettato";
            }else if($random_date < date('Y')){
                $this->pagamento = "Pagamento rifiutato";
            }
            return $this->pagamento;
        }

        

       
    };
 ?>