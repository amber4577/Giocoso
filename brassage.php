<?php
$page_title = 'Brassage';
$css = 'brassage.css';

ob_start();
require_once 'app/view/brassage.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';