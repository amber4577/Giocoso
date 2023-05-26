<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title><?= $page_title ?></title>
    
    <link  rel="stylesheet" href="Footer.css" href='https://fonts.googleapis.com/css?family=Fredoka One'>
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="public/css/<?= $css ?>">
    <?php endif ?>
</head>
<header>
    <section class="logo">
        <img src="./images/imgheader/logo_giocoso.png"/>
    </section>
    <nav class="menu">
        <ul>
            <li><a href="brasserie.html"#brasserie>LA BRASSERIE</a></li>
            <li><a href="catalogue.html"#catalogue>BIERES</a></li>
            <li><a href="entreprise.html"#entreprise>NOUS</a></li>
            <li><a href="contact.html"#contact>CONTACT</a></li>
            <li><a href="connexion.html"#connexion><img src="iconeprofil.png"/></a></li>
            <li><a href="panier.html"#connexion><img src="iconepanier.png"/></a></li>
        </ul>
    </nav>
</header>
<body>

