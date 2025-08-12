<?php
class Editora{
    private $id;
    private $nome;
    private $site;
    private $foto;

    public function __construct($nome, $site, $foto){
        $this->nome = $nome;
        $this->site = $site;
        $this->foto = $foto;
    }

    public function inserir(){}

public function buscar($id) {}

public function buscarTodos() {}

public function atulizar($id) {}

public function deletar() {}

}
?>