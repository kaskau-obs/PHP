<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP - capsula</title>
</head>
<body>
    <h1>POO em PHP - capsula</h1>
    <?php
        require_once 'class.php';

        $controle = new ControleRemoto();
        $controle->Ligar();
        $controle->abrirMenu();

    
    ?>
    
</body>
</html>