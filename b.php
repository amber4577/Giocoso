
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Bière Funky</title>
    <link rel="stylesheet" href="b.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
    <!-- 33 cl = 2,90€ + 2,90€
    75 cl = 4,20€ changer d'affichage-->
    <!-- <img  src="./images/vagueM.png" class="Millieu"> -->

    <div class="BiereMockup">
        <img src="./images/effect.png"alt="effet">
        <img class="effet" src="./images/Funky_Mockup.png" alt="biere">
    </div>
    
        <p class="prix">
            4,20€
        </p>
        <p class="Description">
            Vibrez au rythme du son tout en buvant notre bière, savourer les douces mélodies que provoque
             cette boisson au goût cerise,
             framboise. Cette boisson musicalement envoûtante vous fera danser jusqu'à la fin de la.
             
            
        </p>
        <img src="./images/Funky.png" class="Funky">
   
    <div class="FBiere">
        <p class="cl">Format</p>
        <button class="cl">33cl</button>
        <button class="cl">75cl</button>  
    </div>
    <?php
session_start();

// Check if the counter is set in session
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0; // Initialize counter if it doesn't exist
}

// Check if the increment button is clicked
if (isset($_POST['increment'])) {
    // Increment the counter by one
    $_SESSION['counter']++;
}

// Check if the decrement button is clicked
if (isset($_POST['decrement'])) {
    // Decrement the counter by one, but ensure it doesn't go below 0
    if ($_SESSION['counter'] > 0) {
        $_SESSION['counter']--;
    }
}

// Reset the counter when the page is refreshed
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['counter'] = 0;
    // Redirect to the same page to avoid resubmitting form data
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

    
            <div class="Ajout">
                <div class="Boutons">
                    <p class="QTE"> <?php echo $_SESSION['counter']; ?></h1>
                
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <button class="PLUS" type="submit" name="increment">+</button>
                        <button class="SOUS" type="submit" name="decrement">-  </button>
                    </form>
            </div>


        <p class="AjPanier">Ajouter aux panier</p>
    </div>

    <a href="url">
    <button class="ContAchat">Continuer mes achats</button>
    </a>
</body>
</header>




