<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

echo "Bem vindo " . $nome . " " . $sobrenome;

$idade = $_GET['idade'];

echo "<br>Idade: " . $idade;
