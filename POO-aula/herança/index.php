<?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';

                $p1 = new Pessoa("Indivíduo", 25, "M");
                $p2 = new Aluno("Gutinho", 19, "M");
                $p3 = new Funcionario("Worker", 32 , "M");
                $p4 = new Professor("Edson", 45, "M");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
//teste
        
?>