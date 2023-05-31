<?php

ob_start();
require_once 'app/view/NosBieres.view.php';
$content = ob_get_clean();
require_once 'app/model/view/commun/layout.php'; 

