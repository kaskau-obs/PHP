<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP - capsula class</title>
</head>
<body>
    <?php
            require_once 'interface.php';
        class ControleRemoto 
         implements Controlador {
            //atributos
            private $volume;
            private $ligado;
            private $tocando;
            //métodos especiais
            public function __construct() {
                $this->volume = 50;
                $this->ligado = false;
                $this->tocando = false;
            }
//-------------------------------------------------------------------

            private function getVolume() {
                return $this->volume;
            }
            private function setVolume($volume) {
                $this->volume = $volume;
            }
//-------------------------------------------------------------------

            private function getLigado() {
                return $this->ligado;
            }
            private function setLigado($ligado) {
                $this->ligado = $ligado;
            }
//-------------------------------------------------------------------

            private function getTocando() {
                return $this->tocando;
            }
            private function setTocando($tocando) {
                $this->tocando = $tocando;
            }
//-------------------------------------------------------------------
            //métodos abstratos
            public function Ligar() {
                $this->setLigado(true);
            }
            public function Desligar() {
                $this->setLigado(false);
            }
            public function abrirMenu() {
                echo "<p>Está ligado? " . ($this->getLigado() ? "Sim" : "Não") . "</p>";
                echo "<p>Está tocando? " . ($this->getTocando() ? "Sim" : "Não") . "</p>";
                echo "<p>Volume: " . $this->getVolume() . "</p>";
                for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                    echo "|";
                }
                echo "<br>";
            }
            public function fecharMenu() {
                echo "<p>Fechando menu...</p>";
            }
            public function maisVolume() {
                if ($this->getLigado()) {
                    $this->setVolume($this->getVolume() + 10);
                } else {
                    echo "<p>Impossível aumentar volume. O controle está desligado.</p>";
                }
            }
            public function menosVolume() {
                if ($this->getLigado()) {
                    $this->setVolume($this->getVolume() - 10);
                } else {
                    echo "<p>Impossível diminuir volume. O controle está desligado.</p>";
                }
            }
            public function ligarMudo() {
                if ($this->getLigado() && $this->getVolume() > 0) {
                    $this->setVolume(0);
                }
            }
            public function desligarMudo() {
                if ($this->getLigado() && $this->getVolume() == 0) {
                    $this->setVolume(50); // Define um valor padrão para o volume ao desligar o mudo
                }
            }
            public function play() {
                if ($this->getLigado() && (!$this->getTocando()) ) {
                    $this->setTocando(true);
                }
            }
            public function pause() {
                if ($this->getLigado() && $this->getTocando()) {
                    $this->setTocando(false);
                }
            }
        }
    ?>
    
</body>
</html>