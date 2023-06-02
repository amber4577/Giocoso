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
        $sql = 'INSERT INTO client (num_client, nom, prenom, adresse_mail, num_tel, adresse_postale, date_naissance, cp, ville)
                VALUES (:num_client, :nom, :prenom, :adresse_mail, :num_tel, :adresse_postalen :date_naissance, :cp, :ville)';

        $stmt = $db->prepare($sql);
        $stmt->bindValue('num_client', $client['num_client']);
        $stmt->bindValue('nom', $client['nom']);
        $stmt->bindValue('prenom', $client['prenom']);
        $stmt->bindValue('email', $client['adresse_mail']);
        $stmt->bindValue('numtel', $client['num_tel']);
        $stmt->bindValue('adp', $client['adresse_postale']);
        $stmt->bindValue('birth', $client['date_naissance']);
        $stmt->bindValue('cp', $client['cp']);
        $stmt->bindValue('ville', $client['ville']);
        return $stmt->execute();
    } catch (PDOException $e) {
        throw $e;
    }
}
