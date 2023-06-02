

<main>
    
    <div class="">
        <?php if ($nbVariations > 1) : ?>
            <select name="variations" id="">
                <?php foreach ($Beers as $key => $variation) : ?>
                    <option value="<?= $variation['reference'] ?>"><?= $variation['nom'] ?></option>
                <?php endforeach ?>
            </select>
        <?php endif ?>
    </div>

    <?php foreach ($Beers as $Beer) : ?>
        <?php $FormBeer = $Beer['reference']; ?>
        <div class="<?= $numForm == 0 ? 'active' : '' ?>" data-num-Beer="<?= $numBeer ?>" id="-<?= $numForm ?>">
        </div>
    <?php endforeach ?>

    <div class="left">
        <figure>
            <img src="public/images/bieres/page_biere_seule/bieres<?= getBeer($Beer['reference']) . ($FormBeer > 0 ? '_f' . ($FormBeer + 1) : '') ?>.png" class="" />
        </figure>
        <figure>
            <img src="public/images/page_biere_seule/effets/<?= getBeer($Beer['reference']) . ($FormBeer > 0 ? '_f' . ($FormBeer + 1) : '') ?>.png" class="" />
        </figure>
    </div>
    
    <?php foreach ($pokemons as $pokemon) : ?>
        <?php $numForm = $pokemon['numBeer']; ?>
        <div class="right">
            <!-- <figure>
                <img src="public/images/<?= getBeer($Beer['reference']) . ($FormBeer > 0 ? '_f' . ($FormBeer + 1) : '') ?>.png" class="" />
            </figure> -->
    
            <p><?= $Beers[0]['prix'] ?> <?= getPrices($Beer[0]['prix']) ?></p>
            <p><?= $Beers[0]['description'] ?> <?= getDescription($Beer[0]['description']) ?></p>
            <div id="description-x-<?= $numForm ?>" class="version version-x active"><?= $pokemon['description1'] ?></div>
            
        </div>
    <?php endforeach ?>

</main>


