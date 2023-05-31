<?php
session_start();

require_once "app/model/dataConnection.php";
require_once "app/model/search.model.php";
require_once "config.php";

$databaseConnection = getDatabaseConnectionMySQL();

if (empty($_GET['search'])){
    $_SESSION['message'] = ("Veuillez saisir un nom de bière");
    //redirection vers une page :
    header("localion" . URL . 'NOS_BIERES.php');
} else if (ctype_digit($_GET['search'])){
    $search = $_GET['search'];
    $pokedex = getPokedexByNum($search,$databaseConnection);
    $pokedex = addTypesToPokemons($pokedex, $databaseConnection);
} else {
    $search = $_GET['search'];
    $pokedex = getPokedexByName($search,$databaseConnection);
    $pokedex = addTypesToPokemons($pokedex, $databaseConnection);
}

//

$page_title = 'Pokedex';

ob_start();
require_once 'app/view/pokedex.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 