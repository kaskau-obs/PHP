<pre>
<?php
    require_once 'livro.php';
    require_once 'pessoa.php';

        $pe = array();
        $l = array();

        $pe[0] = new Pessoa ("Fulano", 25, "M");
        $l[0] = new Livro ("Essencialismo", 270, "Greg", $pe[0]);

        print_r($pe[0]);
        print_r($l[0]);

        
?>
</pre>