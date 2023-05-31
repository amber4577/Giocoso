<section class="search">
    <form action="<?= URL ?>search.php" method="get">
        <div id="searchbar">
            <input id="barrederecherche" onkeyup="recherche" type="text" name="search" placeholder="Bières, verres, dessous de table...">
            <!-- mettre bouton rechercher -->
        </div>
    </form>
        <?php if (isset($message)): ?>
        <div class="message">
            <p><?= $message ?></p>
        </div>
    <?php endif ?>
</section>

<div id="searchbar">
        <input id="barrederecherche" onkeyup="recherche" type="text" name="search" placeholder="Bières, verres, dessous de table...">
    </div>
<div id="boutton">
    <button class="validation" style="background-color:#70F8BA;">RECUPERER MES INFORMATIONS</button>
</div>