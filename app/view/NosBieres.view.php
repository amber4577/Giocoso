<style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;
        }
    </style>
<div class="grid-container">
    <?php

        $sql = "SELECT nom_img FROM bière";
        $resultat = mysqli_query($databaseConnection, $sql);

        while ($ligne = mysqli_fetch_assoc($resultat)) {
            $nomIMg = $ligne['nom_img'];
            echo "<div class='grid-item'> <ul> 
            <li><img src='public/images/repertoire/ $nomIMg' alt='$nomIMg'></li>;
            <li><img src='public/images/repertoire/ $nomIMg' alt='$nomIMg'></li>;
            <li><img src='public/images/repertoire/ $nomIMg' alt='$nomIMg'></li>;
            <li><img src='public/images/repertoire/ $nomIMg' alt='$nomIMg'></li>;
            <li><img src='public/images/repertoire/ $nomIMg' alt='$nomIMg'></li> 
            </ul>";
        }
    ?>
</div>