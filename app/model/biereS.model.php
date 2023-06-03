<?php

require_once 'app/model/param.php';

// Recupérer le numéro de la bière
// function getBeer(int $reference, PDO $db): array {
//     $sql = "SELECT reference FROM bière WHERE numBeer = :reference";
//     $params = [
//         'reference' => $reference,
//     ];
//     return launchSimpleRequest($sql, $params, $db);
// }


// Recuperer les prix
function GetPrices(float $prix, PDO $db): array
{
    $sql = "SELECT 'prix' FROM 'bieres' WHERE 'prix' =:prix;";

    $prices = [
        'prix' => $prix
];
    
    return launchSimpleRequest($sql, $prices, $db);
}

// Recuperer la description
function getDescription(string $description, PDO $db): array
{
    $sql = "SELECT * FROM 'bière' WHERE 'description' = ':description;'";
           
    $descr = [
        'description' => $description,
    ];
    return launchSimpleRequest($sql, $descr, $db);
}