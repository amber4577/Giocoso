
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Bière Funky</title>
    <link rel="stylesheet" href="public/css/b.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">

</head>
<style>
    header{
  background-image: url("public/images/page_biere_seule/vagueM.png");
  background-repeat: no-repeat;
  background-position: 80%;
}
body{
  background-color: #ff398a; 
    background-image: url("public/images/page_biere_seule/partD.png");
    background-repeat: no-repeat;
    background-position: right; 
}
.AjPanier{
    background-color: #ff398a;
    width: 76%;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0px 56px 56px 0px;
    padding:1%;
    font-size: 25px;
    text-align: center;
    color: #232323;
  }
    </style>

<body>
    <a href="NOS BIERES.php">
<p class="sortir" style="width: 50%;">X</p>
</a>
    <header>
    <!-- 33 cl = 2,90€ + 2,90€
    75 cl = 4,20€ changer d'affichage-->
    <!-- <img  src="./images/vagueM.png" class="Millieu"> -->

    <div class="BiereMockup">
        <img src="public/images/page_biere_seule/effect.png"alt="effet">
        <img class="effet" src="public/images/page_biere_seule/Funky_Mockup.png" alt="mockup">
    </div>
    
        <p class="prix">
            4,20€
        </p>
        <p class="Description">
            Vibrez au rythme du son tout en buvant notre bière, savourer les douces mélodies que provoque
            cette boisson au goût cerise,
            framboise. Cette boisson musicalement envoûtante vous fera danser jusqu'à la fin de la soirée.

            A remplacer
             
            
        </p>
        <img src="public/images/page_biere_seule/Funky.png" class="Funky">
   
    <div class="FBiere">
        <p class="cl">Format</p>
        <button class="cl">33cl</button>
        <button class="cl">75cl</button>  
    </div>

    <!-- Boutons pour ajouter ou enlever -->
    <?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0; 
}


if (isset($_POST['increment'])) {
    
    $_SESSION['counter']++;
}


if (isset($_POST['decrement'])) {

    if ($_SESSION['counter'] > 0) {
        $_SESSION['counter']--;
    }
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

    <a href="NOS BIERES.php">
    <button class="ContAchat">Continuer mes achats</button>
    </a>
</body>
</header>

