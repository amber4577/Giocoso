<?php

require_once 'app/model/param.php';

// // Recupérer le numéro de la bière
// function getBeer(int $reference, PDO $db): array {
//     $sql = "SELECT reference FROM bière WHERE numBeer = :reference";
//     $params = [
//         'reference' => $reference,
//     ];
//     return launchSimpleRequest($sql, $params, $db);
// }


// Recuperer les prix
function getPrices(float $prix, PDO $db): array
{
    $sql = "SELECT * FROM bière WHERE prix=";
    
    $params = ['price' => $prix,];
    return launchSimpleRequest($sql, $params, $db);
}


function takePrices(float $prix, PDO $db): array
{
    $query = "SELECT prix FROM bieres"; // Modify the table name and condition as per your database structure
    $stmt = $db->query($query);
    $prices = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $prices;
}

// Recuperer description
function getDescription(string $description, PDO $db): array
{
    $sql = "SELECT * FROM bière WHERE descr = :description";
           
    $params = [
        'description' => $description,
    ];
    return launchSimpleRequest($sql, $params, $db);
}






