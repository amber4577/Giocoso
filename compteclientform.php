<?php

require_once 'app/model/client.model.php';
require_once 'app/model/dataConnection.php';

$db = getDatabaseConnectionMySQL();
$addclient = postDoneClient($identifiant, $db);
$identifiant = $_POST['numclient'];


$page_title = 'Inscription';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/compteclientform.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';