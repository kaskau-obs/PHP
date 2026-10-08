<?php
    require_once 'pessoa.php';
    class Livro{
        private $titulo;
        private $autor;
        private $paginasTot;
        private $pagAtual;
        private $aberto;
        private $leitor;

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
                return $this->paginasTot;
            }
            public function setTotPaginas($paginasTot){
                $this->paginasTot = $paginasTot;
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
    }