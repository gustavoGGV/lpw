<?php

function desenhaLinha($pais)
{
    echo "<tr>";
    echo "<td>" . $pais["ordem"] . "</td>";
    echo "<td><img style='width: 20%; height: auto;' src='" . $pais["bandeira"] . "'>" . $pais["sigla"] . " " . $pais["pais"] . "</td>";
    echo "<td>" . $pais["ouro"] . "</td>";
    echo "<td>" . $pais["prata"] . "</td>";
    echo "<td>" . $pais["bronze"] . "</td>";
    echo "<td>" . $pais["totalMedalhas"] . "</td>";
    echo "</tr>";
}

$pos1 = array("ordem" => 1, "bandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/1920px-Flag_of_the_United_States.svg.png", "sigla" => "USA", "pais" => "Estados Unidos", "ouro" => 46, "prata" => 37, "bronze" => 38, "totalMedalhas" => 121);
$pos2 = array("ordem" => 2, "bandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/1920px-Flag_of_the_United_Kingdom_%283-5%29.svg.png", "sigla" => "GBR", "pais" => "Reino Unido", "ouro" => 27, "prata" => 23, "bronze" => 17, "totalMedalhas" => 67);
$pos3 = array("ordem" => 3, "bandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/1920px-Flag_of_the_People%27s_Republic_of_China.svg.png", "sigla" => "CHN", "pais" => "China", "ouro" => 26, "prata" => 18, "bronze" => 26, "totalMedalhas" => 70);
$pos4 = array("ordem" => 4, "bandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/1920px-Flag_of_Russia.svg.png", "sigla" => "RUS", "pais" => "Rússia", "ouro" => 19, "prata" => 18, "bronze" => 19, "totalMedalhas" => 56);
$pos5 = array("ordem" => 5, "bandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1920px-Flag_of_Germany.svg.png", "sigla" => "GER", "pais" => "Alemanha", "ouro" => 17, "prata" => 10, "bronze" => 15, "totalMedalhas" => 42);

$linhas = array($pos1, $pos2, $pos3, $pos4, $pos5);

echo "<table border=1 style='width: 40%'>";

echo "<tr>";
echo "<td>Ordem</td>";
echo "<td>País</td>";
echo "<td><img style='width: 20%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/1024px-Gold_medal.svg.png'></td>";
echo "<td><img style='width: 20%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Silver_medal.svg/1024px-Silver_medal.svg.png'/></td>";
echo "<td><img style='width: 20%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Bronze_medal.svg/1024px-Bronze_medal.svg.png'/></td>";
echo "<td><img style='width: 20%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/GoldSilverBronze_medals.svg/1920px-GoldSilverBronze_medals.svg.png'/></td>";
echo "</tr>";

foreach ($linhas as $pais) {
    desenhaLinha($pais);
}

echo "</table>";
