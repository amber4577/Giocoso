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
            <input id="barredenum" onkeyup="numero" type="text" name="number">
            <div id="question">
                <a href="commandeclientinconnu.php"#commconnu>VOUS N'AVEZ PAS DE NUMERO CLIENT ?</a>
            </div>

            <div id="boutton">
                <button class="validation" style="background-color: #FFB904;">RECUPERER MES INFORMATIONS</button>
            </div>
    </section>

    <footer>
        <?php include 'app/view/common/footer.php';?>     
    </footer>
</body>

