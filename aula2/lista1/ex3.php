<?php

function desenhaLinha(array $cidade)
{
    echo "<tr>";
    echo "<td>" . $cidade["nome"] . "</td>";
    echo "<td>" . $cidade["habitantes"] . "</td>";
    echo "<td>" . $cidade["area"] . "</td>";
    echo "<td>" . $cidade["altitude"] . "</td>";
    echo "<td>" . $cidade["estado"] . "</td>";
    echo "</tr>";
}

$foz = array("nome" => "Foz do Iguaçu", "habitantes" => 250000, "area" => 500, "altitude" => 145, "estado" => "Paraná");
$cascavel = array("nome" => "Cascavel", "habitantes" => 300000, "area" => 420, "altitude" => 320, "estado" => "Paraná");
$chapeco = array("nome" => "Chapecó", "habitantes" => 240000, "area" => 120, "altitude" => 620, "estado" => "Santa Catarina");
$blumenau = array("nome" => "Blumenau", "habitantes" => 330000, "area" => 200, "altitude" => 85, "estado" => "Santa Catarina");
$curitiba = array("nome" => "Curitiba", "habitantes" => 1500000, "area" => 300, "altitude" => 850, "estado" => "Paraná");
$linhas = array($foz, $cascavel, $chapeco, $blumenau, $curitiba);

echo "<table border=1>";

echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Habitantes</td>";
echo "<td>Área</td>";
echo "<td>Altitude</td>";
echo "<td>Estado</td>";
echo "</tr>";

foreach ($linhas as $cidade) {
    /*
    echo "<tr>";
    echo "<td>" . $cidade["nome"] . "</td>";
    echo "<td>" . $cidade["habitantes"] . "</td>";
    echo "<td>" . $cidade["area"] . "</td>";
    echo "<td>" . $cidade["altitude"] . "</td>";
    echo "<td>" . $cidade["estado"] . "</td>";
    echo "</tr>";
    */

    desenhaLinha($cidade);
}

echo "</table>";
