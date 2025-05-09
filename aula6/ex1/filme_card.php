<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("modelo/Filme.php");

$nomeFilme = $_POST['nome-filme'];
$nomeDiretorFilme = $_POST['nome-diretor-filme'];
$anoFilme = $_POST['ano-filme'];
$linkImagemFilme = $_POST['link-imagem-filme'];

if(!$nomeFilme || !$nomeDiretorFilme || !$anoFilme || !$linkImagemFilme){
    echo "<h1>Não foi possível gerar o card do filme!</h1>";
} else {
    $filme = new Filme($nomeFilme, $nomeDiretorFilme, $anoFilme, $linkImagemFilme);
    echo $filme;
}
