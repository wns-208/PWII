<?php
    //Pascal Case
    class Pessoa{
        //public - A variável está acessível externamente a classe
        //private - A variável está acessível internamente na classe
        //protected está acessível somente através de herença
        public $nome;
        public $idade;

        public function Apresentar(){
            echo "A pessoa $this->nome diz olá!";
        }
    }

    //instância
    $aluno = new Pessoa();
    $aluno->nome = "Gengivildo";
    $aluno->idade = 20;

    $aluno2 = new Pessoa();
    $aluno2->nome = "testonildo";
    $aluno2->idade = 18;
  
    print_r($aluno);
    print_r($aluno2);
   
?>