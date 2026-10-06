<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutadores - index</title>
</head>
<body>
    <?php 
        require_once 'index.php';

    $l1 = new lutador ("Buneco", "Brasil", 25, 1.70, 70, 3, 1, 0);
    $l2 = new lutador ("Buneca", "Brasil", 23, 1.71, 65, 0, 0, 0);


        $l1->apresentar();

        
    
        
        ?>
    
</body>
</html>