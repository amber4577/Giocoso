<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title><?= $page_title ?></title>
    
    <link  rel="stylesheet" href="Footer.css" href='https://fonts.googleapis.com/css?family=Fredoka One'>
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="public/css/<?= $css ?>">
    <?php endif ?>
</head>
<body>


    <header>
        <section class="logo">
            <a href="accueil.php"><img src="public/images/imgheader/logo_giocoso.png"/></a>
        </section>
    
        <?php include 'app/view/common/nav.php';?>   
    </header>