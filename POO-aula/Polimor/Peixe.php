<?php
require_once 'Animal.php';
    class Peixe extends Animal {
        private $corEscama;

            public function getCorEscama(){
                return $this->corEscama;
            }
            public function setCorEscama($corEscama){
                $this->corEscama = $corEscama;
            }

            public function locomover(){
                    echo "Nadandooo!!";
            }
            public function alimentar(){
                    echo "Comendo lodooo!!!";
            }
            public function emitirSom(){
                    echo "Soltando bolhas!!!";
            }
    }
?>