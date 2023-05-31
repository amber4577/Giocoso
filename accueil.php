<?php

require_once 'database.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/biere.model.php';

//Génération de la page
$page_title = 'Accueil';

ob_start();
require_once 'app/view/common/accueil.view.php';
$content = ob_get_clean();
$css = "public/css/stylegiocoso.css";
require_once 'app/view/common/layout.php';