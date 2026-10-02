<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Conta Bancária</title>
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

////////////////////////////////////////////////////////////////
                public function abrirConta($tipo){
                        $this->setTipo($tipo);
                        $this->setStatus(true);
                    if($tipo == "CC"){
                        $this->setSaldo(50);
                  } elseif ($tipo == "CP"){
                        $this->setSaldo(150);
                  }
                 }
////////////////////////////////////////////////////////////////
            public function fecharConta(){
                if ($this->getSaldo() > 0){
                   echo "Não tem dinheiro na conta";
                } elseif ($this->getSaldo() < 0){
                    echo "Conta está em débito!";
                }   else {
                    $this->setStatus(false);
                }
            }
////////////////////////////////////////////////////////////////
            public function depositar($v){
                if ($this->getStatus()){
                     $this->setSaldo($this->getSaldo() + $v);
                } else {
                    echo"Conta fechada, não tem como depositar";
                }
            }
////////////////////////////////////////////////////////////////
            public function sacar($v){
                if ($this->getStatus()){
                    if ($this->getSaldo() >= $v){
                        $this->setSaldo($this->getSaldo() - $v);
                    } else {
                        echo "Saldo insuficiente para sacar!";
                    }
                } else {
                     echo "Conta fechada, não tem como sacar!";
                    }
            }
///////////////////////////////////////////////////////////////
            public function pagarMensal(){
                if ($this->getTipo() == "CC"){
                    $v = 20;
                } else if ($this->getTipo() == "CP"){
                        $v = 50;
                    }
                if ($this->getStatus()){
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "Problemas com a conta, não é possível cobrar!";
                    }
            }
///////////////////////////////////////////////////////////
            public function __construct(){
                $this->setSaldo(0);
                $this->setStatus(false);
                echo "Conta criada!";
            }

///////////////////////////////////////////////////////////
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
                    return $this->saldo = $saldo;
                }

                public function getStatus(){
                    return $this->status;
                }
                public function setStatus($status){
                    return $this->status = $status;
                }

            }
        ?>
    </pre>
    
</body>
</html>