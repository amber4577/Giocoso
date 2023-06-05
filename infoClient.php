<?php

require_once 'app/model/client.model.php';
require_once 'app/model/dataConnection.php';

if (empty($_GET['number']) || !ctype_digit($_GET['number'])) {
    die("Ce numéro n'existe pas");
}
$db = getDatabaseConnectionMySQL();
$identifiant = $_GET['number'];
$doneclient = getDoneClient($identifiant, $db);

$page_title = 'Information du client';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/client.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';