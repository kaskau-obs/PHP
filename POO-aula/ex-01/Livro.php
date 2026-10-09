<?php
    require_once 'pessoa.php';
    require_once 'Publicacao.php';
    class Livro{
        private $titulo;
        private $autor;
        private $pagTotal;
        private $pagAtual;
        private $aberto;
        private $leitor;

            public function __construct($titulo, $autor, $pagTotal, $leitor){
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->pagTotal = $pagTotal;
                $this->leitor = $leitor;
            }

            public function getTitulo(){
                return $this->titulo;
            }
            public function setTitulo($titulo){
                $this->titulo = $titulo;
            }

            public function getAutor(){
                return $this->autor;
            }
            public function setAutor($autor){
                $this->autor = $autor;
            } 

            public function getPaginasTot(){
                return $this->pagTotal;
            }
            public function setTotPaginas($pagTotal){
                $this->pagTotal = $pagTotal;
            }

            public function getPagAtual(){
                return $this->pagAtual;
            }
            public function setPagAtual($pagAtual){
                $this->pagAtual = $pagAtual;
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

        public function detalhes(){
            echo "Num total de " . $this->getPaginasTot() . "agora estamos na página " . $this->getPagAtual();
        }

        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if($p>$this->pagTotal){
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }

        
        public function proxpag(){
            $this->pagAtual ++;
        }
        public function voltpag(){
            $this->pagAtual --;
        }
    }