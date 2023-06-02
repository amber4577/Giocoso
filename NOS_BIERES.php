<?php
session_start();
require_once "app/model/dataConnection.php";
require_once "app/model/dataConnection.php";
require_once "config.php";

$databaseConnection = getDatabaseConnectionMySQL();

$page_title = 'Nos Bières';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/NosBieres.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 

