
<?php

require_once 'app/model/dataConnection.php';
require_once 'app/model/param.php';
require_once 'app/model/biereS.model.php';
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Bière Rock</title>
    <link rel="stylesheet" href="public/css/bRock.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">

</head>
<body>
</a>
    <header>
    

    <div class="BiereMockup">
        <img class="effet" src="public/images/page_biere_seule/Rock+Effect.png" alt="mockup">
    </div>
    <a href="app/view/NosBieres.view.php">
    <p div class="Croix">X</p>
    </a>    

    <p class="prix">
        <?php

$infos = GetInfos($db);

if (!empty($infos)) {
    $prix = $infos['4']['prix'];
    echo "<p class=\"Prix\">" . $prix . "€ </p>";
}  
?>
        <?php
$infos = GetInfos($db);

if (!empty($infos)) {
    $description = $infos['4']['description'];
    echo "<p class=\"Description\">" . $description . "</p>";
} else {
    echo "No data found";
}

?>
        <img src="public/images/page_biere_seule/Rock.png" class="Rock" alt="LOGORock ">
</body>
</html>


    <!-- Boutons pour ajouter ou enlever -->
    <?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; 
}


if (isset($_POST['increment'])) {
    
    $_SESSION['counter']++;
}


if (isset($_POST['decrement'])) {

    if ($_SESSION['counter'] > 1) {
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

    <button class="ContAchat">Continuer mes achats</button>
    </a>
</body>
</header>

<style>
    header{
  background-image: url("public/images/page_biere_seule/vagueRock.png");
  background-repeat: no-repeat;
  background-position: 75%;
}
body{
  background-color: #232323; 
    background-image: url("public/images/page_biere_seule/partDRock.png");
    background-repeat: no-repeat;
    background-position: right; 
}
.AjPanier{
    background-color: #EACC39;
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

