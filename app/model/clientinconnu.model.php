<?php

function postClientinconnu(int $identifiant, PDO $db): void
{
    $num_client = $_POST['num_client'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $numtel = $_POST['numtel'];
    $adp = $_POST['adp'];
    $birth = $_POST['birth'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];

    
    if (!$db) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    $sql = "INSERT INTO client (num_client, nom, prenom, adresse_mail, num_tel, adresse_postale, date_naissance, cp, ville) VALUES ('$num_client', '$nom', '$prenom', '$email', '$numtel', '$adp', '$birth', '$cp', '$ville')";

    if ($db) {
        echo "Vous êtes inscris !";
    } else {
        echo "Erreur lors de l'inscription ";
    }
}