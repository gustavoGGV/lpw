<?php

class Filme{
    private string $nomeFilme;
    private string $nomeDiretorFilme;
    private int $anoFilme;
    private string $linkImagemFilme;

    public function __construct($nomeFilme, $nomeDiretorFilme, $anoFilme, $linkImagemFilme){
        $this->nomeFilme = $nomeFilme;
        $this->nomeDiretorFilme = $nomeDiretorFilme;
        $this->anoFilme = $anoFilme;
        $this->linkImagemFilme = $linkImagemFilme;
    }

    public function __toString(){
        return "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>\n
        " . $this->nomeFilme . "<br>\n  
        " . $this->nomeDiretorFilme . "<br>\n
        " . $this->anoFilme . "<br>\n
        <img style='width: 100%; height: auto;' src='" . $this->linkImagemFilme . "' /><br>\n
        </div>";
    }
}
