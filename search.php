<?php
session_start();

require_once "app/model/dataConnection.php";
require_once "app/model/search.model.php";
require_once "config.php";

$databaseConnection = getDatabaseConnectionMySQL();

if (empty($_GET['search'])){
    $_SESSION['message'] = ("Veuillez saisir un nom de bière");
    //redirection vers une page :
    header("location:" . URL . 'NOS_BIERES.php');
} else {
    $search = $_GET['search'];
    $biere_recherche = getBiereByName($search,$databaseConnection);
}

var_dump($biere_recherche);
die();

$page_title = 'Nos bières';

ob_start();
require_once 'app/view/NosBieres.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';