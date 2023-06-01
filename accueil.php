<?php
require_once 'app/model/dataConnection.php';


$page_title = 'Accueil';
$css = 'stylegiocoso.css';
$css = 'Footer.css';

ob_start();
require_once 'app/view/accueil.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 