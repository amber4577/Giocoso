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
                <a href="Client_Connu.php"#commconnu>AVEZ-VOUS DEJA UN COMPTE ?</a>
            </div>

            <div id="boutton">
                <button class="validation" onclick="href='compteclientform.php';" style="background-color: #70F8BA;">CREER MON NUMERO</button></a>
            </div>
    </section>

    <footer>
        <?php include 'app/view/common/footer.php';?>     
    </footer>
</body>