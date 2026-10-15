<pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';

        
        $a1 = new Aluno(40028922, "POO-PHP");
        $a1->setNome("Gutinho");
        $a1->setIdade(25);
        $a1->setSexo("M");
        $a1->pagarMensalidade();
        print_r($a1);



        $b1 = new Bolsista("6 meses");
        $b1->setNome("Neto");
        $b1->setCurso("Muay Thai");
        $b1->setMatricula(4332);
        $b1->setIdade(24);
        $b1->setSexo("M");
        print_r($b1);

    
    ?>
</pre>