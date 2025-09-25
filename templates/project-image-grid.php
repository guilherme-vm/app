<?php if (!empty($entry['img']) && is_array($entry['img'])): ?>
    <div class="project-image-grid" id="<?= $anchorId ?>">


        <?php if (!empty($titleH2)): ?>

            <h2 class="three-collumn-title"><?php echo $titleH2; ?></h2>
        <?php endif; ?>

        <?php if (!empty($titleH3)): ?>

            <h3 class="three-collumn-title secondLineTitle"><?php echo $titleH3; ?></h3>
        <?php endif; ?>






        <?php if (!empty($entry['img'])): ?>
            <div class="imagesWrapper">
                <?php foreach ($entry['img'] as $imgSrc): ?>
                    <a class="gridImage" href="<?= htmlspecialchars($imgSrc) ?>" target="_blank">
                        <img src="<?= htmlspecialchars($imgSrc) ?>" alt="Project Image">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>




        <?php if (empty($titleH2) && empty($titleH3) && !$nextHasTitleH2) : ?>

    </div>
<?php endif; ?>




<?php if (empty($titleH2) && $nextHasTitleH2) : ?>
    </div>
    </div>



<?php elseif (!empty($titleH2)) : ?>

<?php endif; ?>







<?php if ((!empty($titleH2) || !empty($titleH3)) && !$nextHasTitleH2 && !$nextHasTitleH3 && !empty($img)) : ?>

<?php endif; ?>



</div>




<?php endif; ?>