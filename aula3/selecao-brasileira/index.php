<?php

$jog1 = array('Número' => 1, 'Nome' => 'Tafarel');
$jog2 = array('Número' => 2, 'Nome' => 'Jorginho');
$jog3 = array('Número' => 13, 'Nome' => 'Aldair');
$jog4 = array('Número' => 15, 'Nome' => 'Márcio Santos');
$jog5 = array('Número' => 6, 'Nome' => 'Branco');
$jog6 = array('Número' => 5, 'Nome' => 'Mauro Silva');
$jog7 = array('Número' => 8, 'Nome' => 'Dunga');
$jog8 = array('Número' => 17, 'Nome' => 'Mazinho');
$jog9 = array('Número' => 9, 'Nome' => 'Zinho');
$jog10 = array('Número' => 11, 'Nome' => 'Romário');
$jog11 = array('Número' => 7, 'Nome' => 'Bebeto');

$jogadores = array($jog1, $jog2, $jog3, $jog4, $jog5, $jog6, $jog7, $jog8, $jog9, $jog10, $jog11);

function gerarLinha(int $numero, string $nome, string $corDeFundo){
    echo '<tr style="background-color: ' . $corDeFundo . '">';
    echo '<td>' . $numero . '</td>';
    echo '<td>' . $nome . '</td>';
    echo '<tr>';
}

echo '<table border=1 style="width: 10%">';
echo '<tr>';
echo '<td>Número</td>';
echo '<td>Nome</td>';
echo '</tr>';

$cor = 'yellow';
foreach ($jogadores as $linhas) {
    gerarLinha($linhas['Número'], $linhas['Nome'], $cor);

    if ($cor === 'yellow') {
        $cor = 'green';
    } else {
        $cor = 'yellow';
    }
}

echo '</table>';
