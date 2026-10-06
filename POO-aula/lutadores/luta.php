<?php
    class Luta {
//atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

//métodos getters setters
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
//-------------------------------------------------------
        public function getDesafiante(){
            return $this->desafiante;
        }
        public function setDesafiante($desafiante){
            $this->desafiante = $deafiante;
        }   
//-------------------------------------------------------
        public function getRounds(){
            return $this->rounds;
        } 
        public function setRounds($rounds){
            $this->rounds = $rounds;
        }
//-------------------------------------------------------
        public function getAprovada(){
            return $this->aprovada;
        }
        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }
//métodos
        //métodos
        public function marcarLuta($l1, $l2){
    if($l1.getCategoria() == $l2.getCategoria() && $l1 != $l2) {
        $this->aprovada = true;
        $this->desafiado = $l1;
        $this->desafiante = $l2;
    } else {
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
    }
//---------------------------------------------------------    
        public function lutar(){
            if($this->marcarLuta = true){
                $this->desafiado->apresentar();
                $this->deafiante->apresentar();
                $vencerdor = rand(0, 1, 2);
                
                switch($vencedor){
                    case 0: //empate
                        echo "EMPATE!!!";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    case 1 /*Venceu luta*/ {
                        echo "VENCEU A LUTA!!!"
                    }
                }
            }

        }
//---------------------------------------------------------        
     }
    ?>