<?php

$page_title = 'Nos Bières';
$css = 'NosBières.css';

ob_start();
require_once 'app/view/NosBieres.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 

