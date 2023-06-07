<?php
$page_title = 'Contact';
$css = 'stylegiocoso.css';

ob_start();
require_once 'app/view/contact.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';