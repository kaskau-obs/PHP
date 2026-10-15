<pre>
    <?php
        class Professor {
            private $especialidade;
            private $salario;

            public function getEspecialidade(){
                return $this->especialidade;
            }
            public function setEspecialidade($especialidade){
                $this->especialidade = $especialidade;
            }

            public function getSalario(){
                return $this->salario;
            }
            public function setSalario($salario){
                $this->salario = $salario;
            }


            public function receberAum($aum){
                if ($aum > 0){
                    $this->getSalario() + $aum;
                } else {echo "O aumento precisa ter um valor acima de zero para ter aumento!";}
            }
        }
    ?>
</pre>