<?php

require_once 'app/model/clientinconnu.model.php';
require_once 'app/model/dataConnection.php';

$db = getDatabaseConnectionMySQL();
$identifiant = $_POST['num_client'];


$page_title = 'Inscription';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/compteclientform.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';