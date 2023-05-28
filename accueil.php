<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="public/css/stylegiocoso.css">
</head>
<header>
    <?php include 'app/view/common/header.php';?>     
</header>
<body>
    <div class="contenu">
        <div id="searchbar">
            <input id="barrederecherche" onkeyup="recherche" type="text" name="search" placeholder="Bières, verres, dessous de table...">
        </div>

        <section class="publicite">
            <h2>NOTRE PUBLICITE</h2>
        </section>

        <section class="gamme">
            <h2>HARMONIE</h2>
        </section>
    
        <section class="brasserie">
            <h2>LA BRASSERIE</h2>
            <p style="font-size : 16px;"> Giocoso c'est la brasserie où vous rendre pour passer un moment festif </br>
                tout en profitant de la musique et de nos boissons.</br></p>
            <p style="font-size : 16px;">
                Vous passerez un moment inoubliable en compagnie de plein d'autres personnes</br>
                partageant notre passion commune pour la musique, la fête et la bière ! </br></p>
        
            <p style="font-size : 16px;">
                Venez boire un coup chez-nous, vous ne le regretterez pas ! </br>
                Giocoso, Inspire by beat ! </br>
            </p>

            <a href="events.html"><button class="validation" style="background-color: #70F8BA;">Nos évènements</button></a>
            <a href="discovermore.html"><button class="validation" style="background-color: #70F8BA;">En savoir plus</button></a>
        </section>
    </div>

    <footer>
        <?php include 'app/view/common/footer.php';?>     
    </footer>
</body>
