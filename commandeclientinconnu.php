<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Page Client</title>
    <link rel="stylesheet" href="public/css/stylegiocoso.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">
</head>
<header>
    <?php include 'app/view/common/header.php';?>     
</header>

<body>
    <h2>MES INFORMATIONS</h2>

    <section class="numeroclient">
            <h3>CREER VOTRE NUMERO CLIENT</h3>
            <input id="barredenum" onkeyup="numero" type="text" name="number">
            
            <div id="boutton">
                <a href="compteclientform.php"><button type="submit" class="validation" style="background-color:#70F8BA;">CREER VOTRE COMPTE</button></a>
            </div>

        <div id="question">
             <a href="Client_Connu.php"#commconnu>VOUS AVEZ DEJA UN NUMERO CLIENT ?</a>
        </div>
    </section>
            </div>
    </section>
    <footer>
        <?php include 'app/view/common/footer.php';?>     
    </footer>
</body>