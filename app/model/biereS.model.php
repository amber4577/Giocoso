<?php

require_once 'app/model/param.php';

// Retrieve information for beers
function GetInfos(PDO $db): array 
{
    $sql = "SELECT * FROM `bière`";
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}



