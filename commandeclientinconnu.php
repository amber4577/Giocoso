<?php
require_once 'app/model/dataConnection.php';


$page_title = 'Inscription';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/commandeclientinconnu.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 