<?php
$page_title = 'Inscription';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/compteclientform.view.php';
require_once 'config.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';


addClient($identifiant, $db);