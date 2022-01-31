<?php

class Movies{
    public $nome;
    public $autore;
    public $anno;
    public $genere;
    public $casaproduct;

    public function __construct($_nome,$_autore,$_anno,$_casaproduct,$_genere)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->autore = $_autore;
        $this->genere = $_genere;
        $this->casaproduct = $_casaproduct;
    }

    public function getInfoFilm()
    {
        return "{$this->nome} di {$this->autore}";
    }
}