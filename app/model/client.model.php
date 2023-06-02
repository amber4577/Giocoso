<?php

function getDoneClient(int $identifiant, PDO $db): array
{
    $sql = "SELECT * FROM client WHERE num_client=:numClient;";

    $stmt = $db->prepare($sql);
    $stmt->bindValue('numClient', $identifiant , PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}


function addClient(array $client, PDO $db): bool
{

    try {
        $sql = 'INSERT INTO client (nom, prenom, adresse_mail, num_tel, adresse_postale, date_naissance, cp, ville)
                VALUES (:nom, :prenom, :adresse_mail, :num_tel, :adresse_postalen :date_naissance, :cp, :ville)';

        $stmt = $db->prepare($sql);
        $stmt->bindValue('nom', $client['nom']);
        $stmt->bindValue('prenom', $client['prenom']);
        $stmt->bindValue('adresse_mail', $client['adresse_mail']);
        $stmt->bindValue('num_tel', $client['num_tel']);
        $stmt->bindValue('adresse_posrale', $client['adresse_postale']);
        $stmt->bindValue('date_naissance', $client['date_naissance']);
        $stmt->bindValue('cp', $client['cp']);
        $stmt->bindValue('ville', $client['ville']);
        return $stmt->execute();
    } catch (PDOException $e) {
        throw $e;
    }
}
