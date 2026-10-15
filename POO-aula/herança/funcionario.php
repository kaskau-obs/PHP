<pre>
    <?php
            class Funcionario {
                private $setor;
                private $working;

                public function getSetor(){
                    return $this->setor;
                }
                public function setSetor($setor){
                    $this->setor = $setor;
                }

                public function getWorking(){
                    return $this->working;
                }
                public function setWorking($working){
                    $this->working = $working;
                }


                public function mudarWork(){}
            }
    ?>
</pre>