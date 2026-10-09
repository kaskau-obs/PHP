<?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
 
$pe = array();
    $pe[0] = new Pessoa ("Chacal", 25, "SM");
    $pe[1] = new Pessoa ("Dev", 36, "SSM");

$l = array();
    $l[0] = new Livro("Hábitos", "James", 280, $pe[0]);
    $l[1] = new Livro("POO em C", "Gustavo", 450, $pe[1]);



