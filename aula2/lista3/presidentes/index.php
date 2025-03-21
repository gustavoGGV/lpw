<?php

require_once("model/Presidente.php");

function desenharLinha(Presidente $presidente)
{
    echo "<tr>";
    echo "<td>" . $presidente->getNumero() . "</td>";
    echo "<td>" . $presidente->getNome() . "</td>";
    echo "<td>" . $presidente->getAnoInicioMandato() . "</td>";
    echo "<td>" . $presidente->getAnoFimMandato() . "</td>";
    echo "</tr>";
}


$presidente16 = new Presidente(16, "Eurico Gaspar Dutra", 1946, 1951);
$presidente17 = new Presidente(17, "Getúlio Vargas", 1951, 1954);
$presidente18 = new Presidente(18, "Café Filho", 1954, 1955);
$presidente19 = new Presidente(19, "Carlos Luz", 1955, 1955);
$presidente20 = new Presidente(20, "Nereu Ramos", 1955, 1956);
$presidente21 = new Presidente(21, "Juscelino Kubitschek", 1956, 1961);

$presidentes = array($presidente16, $presidente17, $presidente18, $presidente19, $presidente20, $presidente21);

echo "<table border=1 style='width: 30%'>";

echo "<tr>";
echo "<td>Número</td>";
echo "<td>Nome</td>";
echo "<td>Início</td>";
echo "<td>Fim</td>";
echo "</tr>";

foreach ($presidentes as $p) {
    desenharLinha($p);
}
