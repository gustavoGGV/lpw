<?php

require_once("model/Pessoa.php");

if (isset($_GET['tipo'])){
    if ($_GET['tipo'] === 'A' || $_GET['tipo'] === 'C') {
        if (isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['idade'])) {
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];
            $idade = $_GET['idade'];
    
            echo "<h1>Sua pessoa</h1>";
    
            if ($_GET['tipo'] === 'A') {
                $pessoa = array("nome" => $nome, "sobrenome" => $sobrenome, "idade" => $idade);
    
                echo "Nome: " . $pessoa["nome"] . "<br>";
                echo "Sobreome: " . $pessoa["sobrenome"] . "<br>";
                echo "Idade: " . $pessoa["idade"] . "<br>";
            }
            if ($_GET['tipo'] === 'C') {
                $pessoa = new Pessoa($nome, $sobrenome, $idade);
    
                echo "Nome: " . $pessoa->getNome() . "<br>";
                echo "Sobreome: " . $pessoa->getSobrenome() . "<br>";
                echo "Idade: " . $pessoa->getIdade() . "<br>";
            }
        } else {
            echo "<h1>Defina os três detalhes da pessoa!</h1>";
        }
    } else {
        echo "<h1>Defina corretamente o tipo!</h1>";
    }
} else {
    echo "<h1>Defina o tipo!</h1>";
}

