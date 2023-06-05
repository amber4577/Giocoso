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
    <h2>Récapitulatif</h2>
    <ul>
        <?php
        $num_client = $_POST['numclient'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $numtel = $_POST['numtel'];
        $adp = $_POST['adp'];
        $birth = $_POST['birth'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];

        echo "<li>Identifiant: " . $num_client . "</li>";
        echo "<li>Nom: " . $nom  . "</li>";
        echo "<li>Prénom: " . $prenom . "</li>";
        echo "<li>Adresse e-mail: " . $email . "</li>";
        echo "<li>Numéro de téléphone: " . $numtel . "</li>";
        echo "<li>Adresse postale: " . $adp . "</li>";
        echo "<li>Date de naissance: " . $birth . "</li>";
        echo "<li>Code postal: " . $cp . "</li>";
        echo "<li>Ville: " . $ville . "</li>";
        ?>
    </ul>

    <footer>
        <?php include 'app/view/common/footer.php';?>     
    </footer>
</body>