<main>
    <header>
        <?= include 'app/view/common/header';?>
    </header>
    <header class="header-title">
        <?php //include 'view/parts/precedent_suivant.php' 
        ?>
        <h1><span><?= $pokemons[0]['nom'] ?></span> No. <?= formatBiere($pokemons[0]['num_pokemon']) ?></h1>
    </header>

    <div class="container variations">
        <?php if ($nbVariations > 1) : ?>
            <select name="variations" id="var-select">
                <?php foreach ($pokemons as $key => $variation) : ?>
                    <option value="<?= $variation['num_forme'] ?>"><?= $variation['nom'] ?></option>
                <?php endforeach ?>
            </select>
        <?php endif ?>
    </div>

    <?php foreach ($pokemons as $pokemon) : ?>
        <?php $numForm = $pokemon['num_forme'] ?>
        <div class="container caracteristics <?= $numForm == 0 ? 'active' : '' ?>" data-num-form="<?= $numForm ?>" id="pokemon-<?= $numForm ?>">
            <div class="left">
                <figure>
                    <img src="public/images/pokemon/<?= formatBiere($pokemon['num_pokemon']) . ($numForm > 0 ? '_f' . ($numForm + 1) : '') ?>.png" class="img-full" />
                </figure>
                <div class="stats">
                    <h2>Stats de base</h2>
                    <div class="stats-boxes">
                        <?php for ($i = 15; $i > 0; $i--) : ?>
                            <?php foreach ($pokemon['stats'] as $stat) : ?>
                                <div class="stats-cell stats-cell--<?= ($stat <= $i) ? 'white' : 'blue' ?>"></div>
                            <?php endforeach ?>
                        <?php endfor ?>
                        <?php foreach (array_keys($pokemon['stats']) as $key) : ?>
                            <div class="stats-intitule"><?= $key ?></div>
                        <?php endforeach ?>
                    </div>
                </div>

            </div>
        </div>

            <div class="right">
                <section class="pres">
                    <div class="pres-descriptions">
                        <div id="description-x-<?= $numForm ?>" class="version version-x active"><?= $pokemon['description1'] ?></div>
                        <div id="description-y-<?= $numForm ?>" class="version version-y"><?= empty($pokemon['description2']) ? $pokemon['description1'] : $pokemon['description2'] ?></div>
            </div>

                        

</main>