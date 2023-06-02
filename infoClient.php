<?php

require_once 'app/model/client.model.php';
require_once 'app/model/dataConnection.php';

if (empty($_GET['number']) || !ctype_digit($_GET['number'])) {
    die("Ce numéro n'existe pas");
}
$db = getDatabaseConnectionMySQL();
$identifiant = $_GET['number'];
$doneclient = getDoneClient($identifiant, $db);