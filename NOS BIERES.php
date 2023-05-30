<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Nos bières</title>
    <link rel="stylesheet" href=".app/public/css/NosBières.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">

</head>

<header>
    <?php include 'app/view/common/header.php';?>     
</header>

<body>
    
    <?php include 'presentationgamme.php';?> 
 
    <div class="container">
  
    <?php foreach 
        $bieres = 
        $image = 
        $prix = 
        foreach (iterable_expression as $bieres )
            unset($bieres);
        >
    <li>
        <img src = "./public/images/bieres/biere_electro.png" alt = "bière electro" style=" width: 80%; background-color: #D11FE3;
        border-radius: 2em; height : 300px;">
        <p>ELECTRO         4,20 €</p>
    </li>
    
   
    <li>
        <img src = "./public/images/bieres/biere_funky.png" alt = "bière funky" style=" width: 80%; background-color: #FF398A;
        border-radius: 2em; height : 300px;">
        <p>FUNKY         4,20 €</p>
    </li>
    
    <li>
        <img src = "./public/images/bieres/biere_jazz.png" alt = "bière jazz" style=" width: 80%; background-color: #ffcb3d;
        border-radius: 2em; height : 300px;">
        <p>JAZZ         4,20 €</p>
    </li>
    <li>
        <img src = "./public/images/bieres/biere_rock.png" alt = "bière rock" style=" width: 80%; background-color:#A81A16 ;
       border-radius: 2em; height : 300px;">
       <p>ROCK         4,20 €</p>
    </li>
    <li>
        <img src = "./public/images/bieres/biere_tango.png" alt = "bière tango" style=" width: 80%; background-color:#EA3434;
        border-radius: 2em; height : 300px;">
        <p>TANGO         4,20 €</p>
    </li>
    
</div>


<footer>
        <?php include 'app/view/common/footer.php';?>     
</footer>

</body>
