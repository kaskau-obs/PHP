<?php 
        class lutador {
            private $nome;
            private $nacao;
            private $idade;
            private $altura;
            private $peso;
            private $categoria;
            private $wins;
            private $losses;
            private $draws;

            public function __construct($nome, $nacao, $idade, $altura, $peso, $wins, $losses, $draws){
                $this->nome      =  $nome;
                $this->nacao     =  $nacao;
                $this->idade     =  $idade;
                $this->altura    =  $altura;
                $this->setPeso($peso);
                $this->wins      =  $wins;                $this->losses    =  $losses;                $this->draws     =  $draws;
            }
//métodos getters e setters            
            public function getNome(){
                return $this->nome;
            }
            public function setNome($nome){
                $this->nome = $nome;
            }
//-------------------------------------------------------
            public function getNacao(){
                return $this->nacao;
            }
            public function setNacao($nacao){
                $this->nacao = $nacao;
            }
//-------------------------------------------------------
            public function getIdade(){
                return $this->idade;
            }
            public function setIdade($idade){
                $this->idade = $idade;
            }
//-------------------------------------------------------
            public function getAltura(){
                return $this->altura;
            }
            public function setAltura($altura){
                $this->altura = $altura;
            }
//-------------------------------------------------------
            public function getPeso(){
                return $this->peso;
            }
            public function setPeso($peso){
                $this->peso = $peso;
                $this->setCategoria($peso);
            }
//-------------------------------------------------------
            public function getCategoria(){
                return $this->categoria;
            }
            private function setCategoria($categoria){
                if($this->peso < 45){
                    $this->categoria = "inválido";
                } elseif($this->peso >= 45 && $this->peso < 60){
                    $this->categoria = "leve";
                } elseif($this->peso > 60 && $this->peso < 78){
                    $this->categoria = "médio";
                } elseif($this->peso >= 78 && $this->peso < 120){
                    $this->categoria = "pesado";
                } else {
                    $this->categoria = "inválido";
                }
                }
//-------------------------------------------------------
            public function getWins(){
                return $this->wins;
            }
            public function setWins($wins){
                $this->wins = $wins;
            }
//-------------------------------------------------------
            public function getLosses(){
                return $this->losses;
            }
            public function setLosses($losses){
                $this->losses = $losses;
            }
//-------------------------------------------------------
            public function getDraws(){
                return $this->draws;
            }
            public function setDraws($draws){
                $this->draws = $draws;
            }
//-------------------------------------------------------
            public function apresentar(){
                echo " Lutador: " . $this->getNome();
                echo " Nacionalidade: " . $this->getNacao();
                echo " Idade: " . $this->getIdade();
                echo " Altura: " . $this->getAltura() . "m";
                echo " Peso: " . $this->getPeso() . "kg";
                echo " Vitórias: " . $this->getWins();
                echo " Derrotas: " . $this->getLosses();
                echo "Empates: " . $this->getDraws();
            }
//-----------------------------------------------------            
            public function status(){
                echo "Lutador: " . $this->getNome();
                echo "Categoria: " . $this->getCategoria();
                echo "Vitórias: " . $this->getWins();
                echo "Derrotas: " . $this->getLosses();
                echo "Empates: " . $this->getDraws();
            }
//------------------------------------------------------
            public function ganharLuta(){
                $this->setWins($this->getWins() + 1);
            }
//------------------------------------------------------
            public function perderLuta(){
                $this->setLosses($this->getLosses() + 1);
            }
//------------------------------------------------------
            public function empatarLuta(){
                $this->setDraws($this->getDraws() + 1);
            }
//------------------------------------------------------
            }
    ?>
    
</body>
</html>