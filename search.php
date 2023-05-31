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
    $pokedex = getPokedexByName($search,$databaseConnection);
}

$page_title = 'Nos bières';

ob_start();
require_once 'app/view/NOS_BIERES.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';