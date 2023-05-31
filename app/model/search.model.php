<?php

function getPokedexByName(string $name, PDO $db): array
{
    $sql = "SELECT  reference, nom FROM bière
            WHERE nom LIKE :nomBiere AND num_forme=0";
    $stmt = $db->prepare($sql);
    $stmt->bindValue('nomBiere', '%' .  $name . '%', PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
}
