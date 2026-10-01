<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Index da conta bancária</title>
</head>
<body>
    <pre>
    <?php
        require_once 'class-banco.php';
        $p1 = new contaBanco();
        $p2 = new contaBanco();

        $p1->abrirConta("CC");
        $p1->setDono("Neto");
        $p1->setNumConta(2026);

        $p2->abrirConta("CP");
        $p2->setDono("Nick");
        $p2->setNumConta(2027);

            print_r($p1);
            print_r($p2);

    ?>
    </pre>
</body>
</html>