<?php

class Movies{
    public $nome;
    public $autore;
    public $anno;
    public $genere;
    public $casaproduct;

    public function __construct($_nome,$_anno,$_autore,$_casaproduct,$_genere)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->autore = $_autore;
        $this->genere = $_genere;
        $this->casaproduct = $_casaproduct;
    }
}