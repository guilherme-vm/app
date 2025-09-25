<?php
// Sanitize titleH2 for use in ID attributes
$titleH2Safe = preg_replace('/[^a-zA-Z0-9]/', '', $entry['titleH2']);
?>

<div class="project-description project-persona" id="<?= $anchorId ?>">

    <div class="three-collumn-title">
        <h2><?= htmlspecialchars($entry['titleH2']) ?></h2>

        <?php if (!empty($entry['userPersonas']) && is_array($entry['userPersonas'])): ?>
            <?php foreach ($entry['userPersonas'] as $index => $persona): ?>
                <?php
                $imgId = $titleH2Safe . '-btn' . ($index + 1) .'-img';
                $isFirst = $index === 0;
                ?>
                <?php if (!empty($persona['image'])): ?>
                    <img
                        class="personaImg"
                        src="<?= htmlspecialchars($persona['image']) ?>"
                        alt="<?= htmlspecialchars($persona['name']) ?>"
                        id="<?= htmlspecialchars($imgId) ?>"
                        style="<?= $isFirst ? '' : 'display:none;' ?>">
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php if (count($entry['userPersonas']) > 1): ?>
        <div class="six-collumn-content persona-six-collumns">
            <div class="button-group">
                <?php foreach ($entry['userPersonas'] as $index => $persona): ?>
                    <?php $btnId = $titleH2Safe . '-btn' . ($index + 1); ?>
                    
                    
                    <button
                        class="sectionButton persona-toggle-btn  <?php echo $buttonFlexCat; ?>"
                        id="<?= htmlspecialchars($btnId) ?>"
                        data-index="<?= $index + 1 ?>">
                        <?= htmlspecialchars($persona['name']) ?>
                    </button>
                <?php endforeach; ?>
            </div>
        
    <?php endif; ?>

    <?php if (!empty($entry['userPersonas']) && is_array($entry['userPersonas'])): ?>
        <div class="user-persona-container persona-six-collumns">
            <?php foreach ($entry['userPersonas'] as $index => $persona): ?>
                <?php
                $descId = $titleH2Safe . '-btn' . ($index + 1) . '-desc';
                ?>
                <div
                    class="user-persona-card persona-card"
                    id="<?= htmlspecialchars($descId) ?>"
                    style="<?= $index === 0 ? '' : 'display:none;' ?>">
                    <h3><?= htmlspecialchars($persona['name']) ?></h3>
                    <?php if (!empty($persona['ageCountry'])): ?>
                        <p><?= htmlspecialchars($persona['ageCountry']) ?></p>
                        <?php endif; ?>
                    <?php if (!empty($persona['categories']) && is_array($persona['categories'])): ?>
                        <div class="user-persona-categories">
                            <?php foreach ($persona['categories'] as $category): ?>
                                <div class="user-persona-category">
                                    <h4><?= htmlspecialchars($category['title']) ?></h4>
                                    <?php if (is_array($category['description'])): ?>
                                        <ul>
                                            <?php foreach ($category['description'] as $descItem): ?>
                                                <li><?= htmlspecialchars($descItem) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <p><?= nl2br(htmlspecialchars($category['description'])) ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


</div>


<?php if (count($entry['userPersonas']) > 1): ?>
       
            </div>
        
    <?php endif; ?>