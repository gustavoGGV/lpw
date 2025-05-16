<?php
require_once("util/Conexao.php");

$conn = Conexao::getConexao();
if(isset($_POST["titulo"])) {
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $qtdPag = $_POST["paginas"];

    // "stm": statement, instrução para o banco de dados.
    // Não se pode inserir os valores diretos na string do statement, já que é sucetível a ataques. É melhor colocar interrogações (coringas).
    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
            VALUES (?, ?, ?)";
    $stm = $conn->prepare($sql);
    $stm->execute([$titulo, $genero, $qtdPag]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>
    <h1>Listagem</h1>
    <h1>Formulário</h1>
    <form action="" method="POST">
        <div>
            <label for="titulo">Título:&nbsp</label>
            <input type="text" name="titulo" id="titulo">
        </div><br>
        <div>
            <label for="genero">Gênero:&nbsp</label>
            <select id="genero" name="genero">
                <option value="">Selecione...</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div><br>
        <div>
            <label for="paginas">Páginas:&nbsp</label>
            <input type="number" name="paginas" id="paginas">
        </div><br>
        <div>
            <button type="submit">Gravar</button>
        </div>
    </form>
</body>
</html>
