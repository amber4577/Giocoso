<?php

function getNosBieres (PDO $db): array
{
    $sql = "SELECT num_pokemon AS num, nom FROM pokemon 
            WHERE num_forme=0 LIMIT ". $begin . "," . $end;
    $query = $db->query($sql);
    $results = $query->fetchAll();
    return $results;
}