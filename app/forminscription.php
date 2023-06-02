<?php
$page_title = 'Inscription';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/forminscription.view.php';
require_once 'app/model/client.model.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';


addClient($identifiant, $db);