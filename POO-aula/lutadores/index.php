<?php 
        require_once 'lutador.php';
        require_once 'luta.php';
    $l = array();

$l[0] = new lutador ("Buneco", "Brasil", 25, 1.70, 70, 3, 1, 0);
$l[1] = new lutador ("Buneca", "Brasil", 23, 1.71, 73, 0, 0, 0);

        $TRETA = new luta();
        $TRETA->marcarLuta($l[0], $l[1]);
        $TRETA->lutar();
        
?>