<?php

require_once("model/Pokemon.php");

$psyduck = new Pokemon("https://static.wikia.nocookie.net/pokepediabr/images/5/53/054Psyduck.png/revision/latest/scale-to-width-down/1000?cb=20161215012627&path-prefix=pt-br", "Psyduck", "Água", "https://pokemon.fandom.com/pt-br/wiki/Psyduck");
$bulbassauro = new Pokemon("https://static.wikia.nocookie.net/pokepediabr/images/3/3c/001Bulbassauro.png/revision/latest/scale-to-width-down/180?cb=20210330173024&path-prefix=pt-br", "Bulbassauro", "Grama, venenoso", "https://pokemon.fandom.com/pt-br/wiki/Bulbassauro");
$charmander = new Pokemon("https://static.wikia.nocookie.net/pokepediabr/images/7/73/004Charmander.png/revision/latest/scale-to-width-down/180?cb=20210330173520&path-prefix=pt-br", "Charmander", "Fogo", "https://pokemon.fandom.com/pt-br/wiki/Charmander");
$squirtle = new Pokemon("https://static.wikia.nocookie.net/pokepediabr/images/3/39/007Squirtle.png/revision/latest/scale-to-width-down/180?cb=20210330173846&path-prefix=pt-br", "Squirtle", "Água", "https://pokemon.fandom.com/pt-br/wiki/Squirtle");
$pikachu = new Pokemon("https://static.wikia.nocookie.net/pokepediabr/images/0/0d/025Pikachu.png/revision/latest/scale-to-width-down/180?cb=20220305211006&path-prefix=pt-br", "Pikachu", "Elétrico", "https://pokemon.fandom.com/pt-br/wiki/Pikachu");

$pokemons = array($psyduck, $bulbassauro, $charmander, $squirtle, $pikachu);

echo "<h1>Minha Pokedéx</h1>";
