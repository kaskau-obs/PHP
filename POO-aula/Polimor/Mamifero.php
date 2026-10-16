<?php
require_once 'Animal.php';
    class Mamifero extends Animal {

        public function locomover(){
            echo "Correndoooo!";
        }
        public function alimentar(){
            echo "Mamandoooo!";
        }
        public function emitirSom(){
            echo "Emitindo som de mamíferooo";
        }
    }
?>