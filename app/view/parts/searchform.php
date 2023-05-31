<section class="search">
    <form action="<?= URL ?>search.php" method="get">
        <label for="search">Nom ou numéro</label>
        <input type="text" class="search-field" name="search" aria-label="champs de recherche">
        <input type="submit" class="search-btn" value="🔎" aria-label="rechercher">
    </form>
    <div class="search-explanation">
        Rechercher un pokemon par son nom ou son numéro de Pokédex national.
    </div>
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
                <button class="validation" style="background-color:#70F8BA;">ENVOYER</button>
    </div>