<?php

echo "<head><link rel='stylesheet' href='styles.css'></head>";

if(!isset($_GET['palpite'])){
  echo "<h1>Nenhum palpite foi passado!</h1>";
} else if ($_GET['palpite'] < 1 || $_GET['palpite'] > 6) {
  echo "<h1>Palpite inválido!</h1>";
}

require_once("./modelo/Piloto.php");

$piloto1 = new Piloto("Lewis Hamilton", "https://media.formula1.com/image/upload/f_auto,c_limit,q_auto,w_1320/content/dam/fom-website/drivers/2025Drivers/hamilton", 361, 7, 105, 202, 1);
$piloto2 = new Piloto("Michael Schumacher", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWmesXXqHI3_sdbIV-HbBRqYTMtWw6ML4_rg&s", 307, 7, 91, 155, 2);
$piloto3 = new Piloto("Juan Manuel Fangio", "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Fangio_in_1955_%28cropped%29.jpg/250px-Fangio_in_1955_%28cropped%29.jpg", 51, 5, 24, 35, 3);
$piloto4 = new Piloto("Max Verstappen", "https://media.formula1.com/image/upload/f_auto,c_limit,q_auto,w_1320/content/dam/fom-website/drivers/2025Drivers/verstappen", 214, 4, 64, 115, 4);
$piloto5 = new Piloto("Ayrton Senna", "https://static.nationalgeographicbrasil.com/files/styles/image_3200/public/senna_divulgacao-gov-bra--1-.jpeg.webp?w=1600&h=1067&p=top", 161, 3, 41, 80, 5);
$piloto6 = new Piloto("Pastor Maldonado", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0tUJc0RYAKNNBNf6vG9q4oCKOTAPe0cWpGfGOSsN3p3aUAhXGMl9QJUny9WeoAQR1fbQ&usqp=CAU", 95, 0, 1, 1, 6);

$pilotos = array($piloto1, $piloto2, $piloto3, $piloto4, $piloto5, $piloto6);
$sorteio = rand(0, 5);
$pilotoSorteado = $pilotos[$sorteio];

if ($_GET['palpite'] == $pilotoSorteado->getNumeroPalpite()){
  echo "<h1>Você acertou!</h1>";
  echo "<a href='index.php'>Voltar</a><hr>";
  echo $pilotoSorteado;
} else {
  echo "<h1>Você errou!</h1>";
  echo "<a href='index.php'>Voltar</a><hr>";
  echo "<h1>Palpite correto:</h1>";
  echo $pilotoSorteado;
  echo "<hr><h1>Seu palpite:</h1>";

  foreach($pilotos as $piloto) {
    if($_GET['palpite'] == $piloto->getNumeroPalpite()) {
      $palpite = $piloto;
    }
  }

  echo $palpite;
}
