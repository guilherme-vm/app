<?php if (!empty($titleH2) && !empty($titleH3)): ?>
    <div class="project-description both-headings" id="<?= $anchorId ?>">
        <h2 class="three-collumn-title marginH3bottom"><?php echo $titleH2; ?></h2>
        <div class="cost">
            <h3 class="three-collumn-title secondLineTitle"><?php echo $titleH3; ?></h3>
        <?php endif; ?>


        <?php if (!empty($titleH2) && empty($titleH3)): ?>
            <div class="project-description" id="<?= $anchorId ?>">
                <h2 class="three-collumn-title"><?php echo $titleH2; ?></h2>
            <?php endif; ?>



            <?php if (empty($titleH2) && !empty($titleH3)): ?>
                <div class="cost">
                    <h3 class="three-collumn-title secondLineTitle"><?php echo $titleH3; ?></h3>
                <?php endif; ?>




                <div class="six-collumn-content">

                    <?php if (!empty($description1) && is_array($description1)): ?>

                        <?php foreach ($description1 as $desc): ?>
                            <p><?php echo $desc; ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>


                    <?php
                    // Clean ID bases for safe HTML IDs
                    $titleH3Safe = preg_replace('/[^a-zA-Z0-9_-]/', '', $entry['titleH3'] ?? '');
                    $titleH2Safe = preg_replace('/[^a-zA-Z0-9_-]/', '', $entry['titleH2'] ?? '');

                    // Load data safely
                    $buttons      = $entry['buttons'] ?? [];
                    $buttonsAria  = $entry['buttonsAria'] ?? [];  // ✅ properly assign from $entry
                    $buttonsAria  = is_array($buttonsAria) ? $buttonsAria : []; // ✅ ensure array

                    $descriptions = $entry['description'] ?? [];
                    $images       = $entry['img'] ?? [];
                    $vids         = $entry['vid'] ?? [];
                    ?>

                    <?php if (!empty($buttons)): ?>
                        <div class="button-group">
                            <?php for ($i = 0; $i < count($buttons); $i++): ?>
                                <?php
                                $btnLabel = htmlspecialchars($buttons[$i]);
                                // ✅ Use aria text from JSON if available, else build a descriptive fallback
                                $btnAria  = htmlspecialchars($buttonsAria[$i]);

                                // Build a stable button ID (prefers titleH3Safe, then titleH2Safe, else "btn")
                                $idBase   = !empty($titleH3Safe) ? $titleH3Safe : (!empty($titleH2Safe) ? $titleH2Safe : "btn");
                                $buttonId = htmlspecialchars($idBase . "-btn" . ($i + 1));
                                ?>
                                <button
                                    aria-label="<?= $btnAria ?>"
                                    class="sectionButton <?= htmlspecialchars($buttonFlexCat ?? '') ?>"
                                    id="<?= $buttonId ?>">
                                    <?= $btnLabel ?>
                                </button>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>





                    <?php
                    if (!empty($descriptions)): ?>
                        <div class="description-group">
                            <?php for ($i = 0; $i < count($descriptions); $i++): ?>
                                <?php
                                $descText = htmlspecialchars($descriptions[$i]);
                                $idBase = !empty($titleH3Safe) ? $titleH3Safe . "-btn" . ($i + 1) : $titleH2Safe . "-btn" . ($i + 1);
                                ?>
                                <p class="sectionButtonDescription" id="<?php echo $idBase; ?>-desc"><?php echo $descText; ?></p>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($images)): ?>
                        <div class="image-group">
                            <?php for ($i = 0; $i < count($images); $i++): ?>
                                <?php
                                $imgSrc = htmlspecialchars($images[$i]);
                                $linkSrc = htmlspecialchars($images[$i]);
                                $btnLabel = htmlspecialchars($buttons[$i] ?? '');
                                $imgAltText = htmlspecialchars($imgAlt[$i] ?? $btnLabel); // ✅ different variable name

                                $idBase = !empty($titleH3Safe)
                                    ? $titleH3Safe . "-btn" . ($i + 1)
                                    : $titleH2Safe . "-btn" . ($i + 1);
                                ?>
                                <a class="imageTab" href="<?= $linkSrc ?>" target="_blank">
                                    <img src="<?= $imgSrc ?>"
                                        alt="<?= $imgAltText ?>"
                                        class="sectionImage"
                                        id="<?= htmlspecialchars($idBase) ?>-img">
                                </a>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>


                    <?php if (!empty($iframe)): ?>
                        <div class="iframeWrapper">
                            <iframe
                                src="<?= $iframe ?>"
                                style="border: none; width:100%; height:450px;"
                                allowfullscreen
                                loading="lazy">
                            </iframe>
                        </div>
                    <?php endif; ?>




                    <?php
                    if (!empty($vids)): ?>
                        <div class="video-group">
                            <?php for ($i = 0; $i < count($vid); $i++): ?>
                                <?php
                                $imgSrc = htmlspecialchars($vid[$i]);
                                $btnLabel = htmlspecialchars($buttons[$i] ?? '');

                                // Match logic used in button ID generation
                                $idBase = !empty($titleH3Safe) ? $titleH3Safe . "-btn" . ($i + 1) : $titleH2Safe . "-btn" . ($i + 1);
                                ?>

                                <iframe class="sectionVideo description-video" id="<?= htmlspecialchars($idBase) ?>-vid" src="<?= $imgSrc ?>"></iframe>

                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                </div>



                <?php if (!empty($titleH3)): ?>
                </div>
            <?php endif; ?>


            <?php if ($nextHasTitleH2): ?>
            </div>
        <?php endif; ?>