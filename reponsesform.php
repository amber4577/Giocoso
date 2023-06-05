<body>
    <h2>Récapitulatif</h2>
    <ul>
        <?php
        // Récupérer les données du formulaire
        $numclient = $_POST['numclient'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $numtel = $_POST['numtel'];
        $adp = $_POST['adp'];
        $birth = $_POST['birth'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];

        // Afficher les données dans une liste
        echo "<li>Identifiant: " . $numclient . "</li>";
        echo "<li>Nom: " . $nom  . "</li>";
        echo "<li>Prénom: " . $prenom . "</li>";
        echo "<li>Adresse e-mail: " . $email . "</li>";
        echo "<li>Numéro de téléphone: " . $numtel . "</li>";
        echo "<li>Adresse postale: " . $adp . "</li>";
        echo "<li>Date de naissance: " . $birth . "</li>";
        echo "<li>Code postal: " . $codePostal . "</li>";
        echo "<li>Ville: " . $ville . "</li>";
        ?>
    </ul>