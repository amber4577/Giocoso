<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title><?= $page_title ?></title>
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="public/css/<?= $css ?>">
    <?php endif ?>
</head>

<body>
        <footer>
        <style>
            footer{
        background-image: url("public/images/logo_rs/footer.png");
        padding-top: 200px;
        padding-bottom: 30x;
        background-repeat: no-repeat;
        background-position: bottom;
        background-size :100%;
        height : 500px; 
        }
        </style>
        <ul class="Horaires">
            <li>
                HORAIRES
            </li>

            <br>

            <li>
                Lundi : fermé
            </li>

            <li>
                Mardi : fermé
            </li>

            <li>
                Mercredi : 14h - 23h
            </li>

            <li>
                Jeudi : 14h - 23h
            </li>
            
            <li>
                Vendredi : 14h - 01h
            </li>

            <li>
                Samedi : 14h - 01h
            </li>

            <li>
                Dimanche : 14h - 23h
            </li>
        </ul>

        <div class="RS">
            <a href="url">
                <img src="public/images/logo_rs/facebook.png" alt="facebook">
            </a>

            <a href="https://twitter.com/GBrasserie68779">
                <img src="public/images/logo_rs/twitter.png" alt="twitter">
            </a>
            
            <a href="https://www.instagram.com/giocoso_brasserie/">
                <img src="public/images/logo_rs/instagram.png" alt="instagram" >
            </a>
        </div>

        <p class="alcool"> 
           L'abus d'alcool est dangereux pour la santé. A consommer avec modération.
        </p>
    </footer>
    </body>
 