<?php
    //Pascal Case
    class Pessoa{
        //public - A variável está acessível externamente a classe
        //private - A variável está acessível internamente na classe
        //protected está acessível somente através de herença
        public $nome;
        public $idade;

        public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        }

        public function Apresentar(){
            echo "A pessoa $this->nome diz olá!";
        }
    }

    //instância
    $aluno = new Pessoa("Gengivildo", 20);
    // $aluno->nome = "Gengivildo";
    // $aluno->idade = 20;

    $aluno2 = new Pessoa("barrildo", 18);
    // $aluno2->nome = "testonildo";
    // $aluno2->idade = 18;
  
    print_r($aluno);
    print_r($aluno2);
   
?>