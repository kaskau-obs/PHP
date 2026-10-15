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
        class Pessoa {
            public $nome;
            private $idade;

            public function getNome(){
                return $this->nome;
            }
            public function setNome($nome){
                $this->nome = $nome;


            }
            public function getIdade(){
                return $this->idade;
        }
            public function setIdade($idade){
                $this->idade = $idade;
            }
        }
        ?>
    </pre>
    
</body>
</html>