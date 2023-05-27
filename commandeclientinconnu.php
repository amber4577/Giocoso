<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title>Commande</title>
    <link rel="stylesheet" href="public/css/stylegiocoso.css">
</head>
<header>
    <?php include 'app/view/common/header.php';?>     
</header>  
<body>
    <h2>MES INFORMATIONS</h2>

    <section class="numeroclient">
            <h3>CREER VOTRE NUMERO CLIENT</h3>
            <input id="barredenum" onkeyup="numero" type="text" name="number">
            <div id="question">
                <a href="commandeclientconnu.html"#commconnu>AVEZ-VOUS DEJA UN COMPTE ?</a>
            </div>

            <div id="boutton">
                <button class="validation">CREER MON NUMERO</button></a>
            </div>
    </section>
</body>