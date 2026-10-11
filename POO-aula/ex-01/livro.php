<?php
        require_once 'pessoa.php';
        require_once 'publi.php';
    class Livro {
        private $titulo;
        private $pagtotal;
        private $pagAtual;
        private $autor;
        private $leitor;
        private $aberto;


            public function __construct($titulo, $pagTotal, $pagAtual, $autor, $leitor){
                $this->titulo = $titulo;
                $this->pagTotal = $pagTotal;
                $this->pagAtual = $pagAtual;
                $this->leitor = $leitor;
                $this->autor = $autor;
            }

                    public function getTitulo(){
                        return $this->titulo;
                    }
                    public function setTitulo($titulo){
                        $this->titulo = $titulo;
                    }
            ///////////////////////////////////////////////////
                    public function getPagAtual(){
                        return $this->pagAtual;
                    }
                    public function setPaginas($pagAtual){
                        $this->pagAtual = $pagAtual;
                    }
            ///////////////////////////////////////////////////////
                    public function getAutor(){
                        return $this->autor;
                    }
                    public function setAutor($autor){
                        $this->autor = $autor;
                    }
    }
?>