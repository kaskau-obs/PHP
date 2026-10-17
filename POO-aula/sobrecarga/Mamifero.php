<?php
require_once 'Animal.php';

    class Mamifero extends Animal {
            protected $corPelo;
            
            public function emitirSom(){
                echo "Som de mamífero";
            }
            public function getCorPelo(){
                return $this->corPelo;
            }
            public function setCorPelo($corPelo){
                $this->corPelo = $corPelo;
            }
}
?>