<?php

function getAllBeer(PDO $db): array {
   $sql = "SELECT reference, nom, prix, gout, 'description' FROM biere";
   $stmt = $db->query($sql);
   return $stmt->fetchAll();
}

function launchSimpleRequest(string $sql, array $params, PDO $db): array
{
    $stmt = $db->prepare($sql);
    foreach ($params as $id=>$param) {
        $stmt->bindValue($id, $param[0], $param[1]);
    }
    $stmt->execute();
    $result = $stmt->fetchAll();
    unset($stmt);
    return $result;
}



function getAllTalents(PDO $db): array {
   $sql = "SELECT id_talent, nom FROM talent";
   $stmt = $db->query($sql);
   return $stmt->fetchAll();
}
