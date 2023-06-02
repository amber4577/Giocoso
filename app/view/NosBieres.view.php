<?php include 'presentationgamme.php'; ?>

<div class="container">

    <?php foreach ($bieres as $biere) : ?>
        <li>
            <img src="./public/images/bieres/biere_electro.png" alt="bières <?= $biere['nom'] ?>" style=" width: 80%; background-color: #D11FE3;
    border-radius: 2em; height : 300px;">
            <p><?= $biere['nom'] ?> <p><?= $biere['prix'] ?></p>
        </li>
    <?php endforeach ?>
        
    <li>
        <img src="public/images/bieres/biere_funky.png" alt="bière funky" style=" width: 80%; background-color: #FF398A;
    border-radius: 2em; height : 300px;">
        <p>FUNKY 4,20 €</p>
    </li>

    <li>
        <img src="public/images/bieres/biere_jazz.png" alt="bière jazz" style=" width: 80%; background-color: #ffcb3d;
    border-radius: 2em; height : 300px;">
        <p>JAZZ 4,20 €</p>
    </li>
    <li>
        <img src="public/images/bieres/biere_rock.png" alt="bière rock" style=" width: 80%; background-color:#A81A16 ;
   border-radius: 2em; height : 300px;">
        <p>ROCK 4,20 €</p>
    </li>
    <li>
        <img src="public/images/bieres/biere_tango.png" alt="bière tango" style=" width: 80%; background-color:#EA3434;
    border-radius: 2em; height : 300px;">
        <p>TANGO 4,20 €</p>
    </li>

</div>