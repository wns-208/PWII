<?php
    public $nome;
    public $email;

    class Aluno extends Pessoa{
        public $rm;
    }

    class Professor extends Pessoa{
        public $formacao;
        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
            }
    }

    $aluno = new Aluno();
    $aluno-> = 'Seleide';
    $aluno->email = 'se@hotemail.com';

    $professor = new Professor ('Carlitos', 'ca@hotmail.com', 'ADS');
?>