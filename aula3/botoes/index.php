<?php

require_once('model/Link.php');

function desenhaBotao($infoBotao){
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">' . $infoBotao['Nome'] . '</button>';
    echo '<div class="dropText">';

    $links = $infoBotao['Link'];

    foreach($links as $link) {
        echo '<span><img src="' . $link->getLinkImg() . '" width="20" height="20">' . $link->getInfo() . '</span>';
    }
    echo '</div>';
    echo '</div>';
} 

echo '<link rel="stylesheet" href="style.css">';

$link1_1 = new Link('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShpO6L0arsTsngCgF-GTHsd0zuxFmj0IdGog&s', 'Scuderia Ferrari');
$link1_2 = new Link('https://cdn-5.motorsport.com/images/mgl/YEQJgyLY/s800/mclaren-f1-team-logo-1.jpg', 'Mclaren Formula 1 Team');
$link1_3 = new Link('https://upload.wikimedia.org/wikipedia/pt/c/c6/Logotipo_da_Red_Bull_Racing.png', 'Oracle RedBull Racing');

$link2_1 = new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flamengo_braz_logo.svg/250px-Flamengo_braz_logo.svg.png', 'Clube de Regatas do Flamengo');
$link2_2 = new Link('https://upload.wikimedia.org/wikipedia/pt/a/ac/CRVascodaGama.png', 'Club de Regatas Vasco da Gama');
$link2_3 = new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/FFC_crest.svg/1200px-FFC_crest.svg.png', 'Fluminense Football Club');

$link3_1 = new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Los_Angeles_Lakers_logo.svg/640px-Los_Angeles_Lakers_logo.svg.png', 'Los Angeles Lakers');
$link3_2 = new Link('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7dDWE4DIWPi5PqWGRfyVKw14R19i3alWjgQ&s', 'Phoenix Suns');
$link3_3 = new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Brooklyn_Nets_logo_primario_2024.png/800px-Brooklyn_Nets_logo_primario_2024.png', 'Brooklyn Nets');

$link4_1 = new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Unofficial_Windows_logo_variant_-_2002%E2%80%932012_%28Multicolored%29.svg/1161px-Unofficial_Windows_logo_variant_-_2002%E2%80%932012_%28Multicolored%29.svg.png', 'Windows');
$link4_2 = new Link('https://wesinalves.github.io/assests/img/posts/macoshero.jpg', 'Mac OS');
$link4_3 = new Link('https://cdn.pixabay.com/photo/2013/07/13/11/43/tux-158547_640.png', 'Linux');

$botao1 = array('Nome' => 'Times de Fórmula 1', 'Link' => array($link1_1, $link1_2, $link1_3));
$botao2 = array('Nome' => 'Times de futebol cariocas', 'Link' => array($link2_1, $link2_2, $link2_3));
$botao3 = array('Nome' => 'Times da NBA', 'Link' => array($link3_1, $link3_2, $link3_3));
$botao4 = array('Nome' => 'Sistemas operacionais', 'Link' => array($link4_1, $link4_2, $link4_3));

desenhaBotao($botao1);
desenhaBotao($botao2);
desenhaBotao($botao3);
desenhaBotao($botao4);
