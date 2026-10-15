<pre>
    <?php
            class Aluno {
                private $matr;
                private $curso;

                public function getMatr(){
                    return $this->matr;
                }
                public function setMatr($matr){
                    $this->matr = $matr;
                }

                public function getCurso(){
                    return $this->curso;
                }
                public function setCurso($curso){
                    $this->curso = $curso;
                }

                public function cancelarMatr(){

                }
            }
    ?>
</pre>