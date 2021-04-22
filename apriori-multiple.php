<?php

require_once __DIR__ . './vendor/autoload.php';

use Phpml\Association\Apriori;

$associator = new Apriori();
$samples = [
    ['playstation', 'xbox', 'nintendo', 'gamecube'],
    ['hamburguer', 'misto', 'cachorro-quente', 'lanche'],
    ['carro', 'caminhão', 'moto', 'bicicleta'],
    ['relogio', 'carteira', 'colar', ' tenis']
];

$associator->train($samples, []);

$result = $associator->predict(['bicicleta']);

for ($i = 0; $i < count(end($result)); $i++) {
    echo $result[$i][0] . '-----';
}
