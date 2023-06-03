<?php

function getDoneClient(int $identifiant, PDO $db): array
{
    $sql = "SELECT * FROM client WHERE num_client=:numClient;";

    $stmt = $db->prepare($sql);
    $stmt->bindParam('numClient', $identifiant , PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

function postDoneClient(int $identifiant, PDO $db): void

{
        $numclient = $_POST['numclient'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $numtel = $_POST['numtel'];
        $adp = $_POST['adp'];
        $birth = $_POST['birth'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];

        $sql = "INSERT INTO client (num_client, nom, prenom, adresse_mail, num_tel, adresse_postale, date_naissance, cp, ville)
        VALUES (':numclient', ':nom', ':prenom', ':email', ':numtel', ':adp', ':birth', ':cp', ':ville')";
        $stmt = $db->prepare($sql);


        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':email', $_POST['adresse_mail']);
        $stmt->bindParam(':numtel', $_POST['num_tel']);
        $stmt->bindParam(':adp', $_POST['adresse_postale']);
        $stmt->bindValue(':birth', $_POST['date_naissance']);
        $stmt->bindValue(':cp', $_POST['cp']);
        $stmt->bindValue(':ville', $_POST['ville']);
            $stmt->execute();



}
    
