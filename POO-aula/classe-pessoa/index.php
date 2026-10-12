<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP</title>
</head>
<body>
    <pre>
        <?php
                require_once 'class.php';

            $p1 = new Pessoa();
            $p1->setNome("Boneco");
            $p1->setIdade(25);

            $p2 = new Pessoa();
            $p2->setNome("Boneca");
            $p2->setIdade(17);

            print_r($p1);
            print_r($p2);

        ?>
    </pre>
</body>
</html>