<?php
require_once 'Animal.php';

        class Ave extends Animal {
            private $corPena;

            public function getCorPena(){
                return $this->corPena;
            }
            public function setCorPena($corPena){
                $this->corPena = $corPena;
            }
            public function locomover(){
                echo "Voandooooo!!!";
            }
            public function emitirSom(){
                echo "Assobiandoooo!!!";
            }
            public function alimentar(){ 
                echo "Ciscando o chão";
            }
            public function fazerNinho(){
                echo "Construindo ninho!";
            }
        }
?>