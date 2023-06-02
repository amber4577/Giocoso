<?php

function getDoneClient(int $identifiant, PDO $db): array
{
    $sql = "SELECT * FROM client WHERE num_client=:numClient;";

    $stmt = $db->prepare($sql);
    $stmt->bindValue('numClient', $identifiant , PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}
