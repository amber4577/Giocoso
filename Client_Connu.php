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
            <h3>RENSEIGNER VOTRE NUMERO CLIENT</h3>
            
               
            </div>
<form action="infoClient.php" method="get">
<input id="barredenum" onkeyup="numero" type="number" name="number">
            <div id="question">
    <div id="boutton">
                <button type="submit" class="validation" style="background-color:#70F8BA;">RECUPERER MES INFORMATIONS</button>
            </div>
</form>
             <a href="commandeclientinconnu.php"#commconnu>VOUS N'AVEZ PAS DE NUMERO CLIENT ?</a>
    </section>

    <footer>
        <?php include 'app/view/common/footer.php';?>     
    </footer>
</body>

