<section class="search">
    <form action="http://localhost/giocoso/search.php" method="get">
        <div id="searchbar">
            <input id="barrederecherche" onkeyup="recherche" type="text" name="search" placeholder="Bières, verres, dessous de table..." style="color :black;">
            <div id="boutton">
                 <button class="validation" style="background-color:#70F8BA;">RECHERCHER</button>
            </div>
        </div>
    </form>
        <?php if (isset($message)): ?>
        <div class="message">
            <p><?= $message ?></p>
        </div>
    <?php endif ?>
</section>
