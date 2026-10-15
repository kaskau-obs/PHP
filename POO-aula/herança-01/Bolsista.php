<?php
    class Bolsista extends Aluno {
    private $bolsa;
        
        public function __construct($bolsa){
            $this->bolsa = $bolsa;
        }

        
        public function renovarBolsa(){
            echo "Bolsa em dia!";
        }

        public function pagarMensalidade(){
            echo "Pagando mensalidade do Bolsista!";

        }
        
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }
?>