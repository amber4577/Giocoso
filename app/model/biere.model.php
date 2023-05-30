<?php

require_once 'app/model/param.php';

function getAllBeer(int $numBeer, PDO $db): array{
    $sql = "SELECT * FROM bddsite_giocoso WHERE reference=:numBeer ORDER BY reference ASC";
    $params = [
        'numBeer' => [$numBeer, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}

