<?php
        require_once 'pessoa.php';
        require_once 'publi.php';

    class Livro implements Publi {
        private $titulo;
        private $pagTotal;
        private $pagAtual;
        private $autor;
        private $leitor;
        private $aberto;


    public function __construct($titulo, $pagTotal, $autor, $leitor)
    {     
       $this->leitor   =   $leitor;
       $this->titulo   =   $titulo;
       $this->pagTotal =   $pagTotal;
       $this->autor    =   $autor;
       $this->pagAtual =   0;
       $this->aberto   =   false;
    }

                    public function getTitulo(){
                        return $this->titulo;
                    }
                    public function setTitulo($titulo){
                        $this->titulo = $titulo;
                    }
        
                    public function getPagAtual(){
                        return $this->pagAtual;
                    }
                    public function setPaginas($pagAtual){
                        $this->pagAtual = $pagAtual;
                    }
        
                    public function getAutor(){
                        return $this->autor;
                    }
                    public function setAutor($autor){
                        $this->autor = $autor;
                    }

                    public function getAberto(){
                        return $this->aberto;
                    }
                    public function setAberto($aberto){
                        $this->aberto = $aberto;
                    }

                    public function getLeitor(){
                        return $this->leitor;
                    }
                    public function setLeitor($leitor){
                        $this->leitor = $leitor;
                    }

                    public function abrir(){
                        $this->aberto = true;
                    }

                    public function fechar(){
                        $this->aberto = false;
                    }

                    public function folhear($pag){
                        if ($pag > $this->pagTotal) {
                            $this->pagAtual = 0;
                        } else {$this->pagAtual = $pag;}
                    }

                    public function pagAtual(){
                        return $this->pagAtual;
                    }

                    public function proxPag(){
                        if($this->pagAtual <= $this->pagTotal){
                            $this->pagAtual = 0;
                        } else {$this->pagAtual ++;}
                            
                    }

                    public function voltpag(){
                        $this->pagAtual --;
                    }

                    public function detalhes(){
                        echo "Livro" . $this->titulo . "escrito por " . $this->autor . "tem " . $this->pagTotal . "de páginas";
                    }
    }
?>