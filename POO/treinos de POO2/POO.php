<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino de POO em PHP</title>
</head>
<body>
    <pre>
        <?php
            class ContaBanco {
//atributos                
                public      $numConta;
                protected   $tipo;
                private     $dono;
                private     $saldo;
                private     $status;

                public function getnumConta(){
                    return $this->numConta;
                }
                public function setnumConta($numConta){
                    return $this->numConta = $numConta;
                }



                public function getTipo(){
                    return $this->tipo;
                }
                public function setTipo($tipo){
                    return $this->tipo = $tipo;
                }



                public function getDono(){
                    return $this->dono;
                }
                public function setDono($dono){
                    return $this->dono = $dono;
                }



                public function getSaldo(){
                    return $this->saldo;
                }
                public function setSaldo($saldo){
                    returno $this->saldo = $saldo;
                }



                public function getStatus(){
                    return $this->status;
                }
                public function setStatus($status){
                    return $this->status = $status;
                }
//métodos
            public functiom abrirConta($tipo){
                if($tipo === "CC"){
                    $this->saldo = 50;
                } elseif ($tipo === "CP"){
                    $this->saldo = 150;
                }
            }
            public function fecharConta()
            public function depositar()
            public function sacar()
            public function pagarMensal()

    //métodos especiais
            public function __construct(){
                $saldo = 0
                $status = falso
            }
            }

        ?>
    </pre>
    
</body>
</html>