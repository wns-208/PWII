<?php

class Veiculos {

    public $modelo;
    public $marca;

    public function __construct($modelo, $marca) {
        $this->modelo = $modelo;
        $this->marca = $marca;
    }

    public function exibir() {
        echo "O modelo é: $this->modelo e a marca: $this->marca";
    }

}

class Carro extends Veiculos {
    public $nome;
    public $cor;
    public $ano;

    public function estaLigado(){
        echo "O $this->nome está ligado!";
    }
}

$c = new Carro("procher911", "procher");
$c->nome = "carrão daora";
$c->cor = "preto";
$c->ano = 2024; 
$c->exibir();?>
<br>
<?php
$c->estaLigado();
?>