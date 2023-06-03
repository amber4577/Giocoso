<?php
require_once 'config copy.php';

function getDatabaseConnectionMySQL(): PDO
{
    $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8';

    try {
        $databaseConnection = new PDO($dsn, DB_USER, DB_PASSWORD);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e){
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
    
    // Le PDO s'est connecté à la base de donnée sauf qu'on veut pas qu'il se supprime avec la fonction, on veut l'utiliser plusieurs fois
    return $databaseConnection;
}