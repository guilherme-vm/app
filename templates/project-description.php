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






                <?php if ((!empty($titleH2) || !empty($titleH3)) && !$nextHasTitleH2 && !$nextHasTitleH3 && !empty($img)) : ?>
                    <div class="costBeta">

                    <?php endif; ?>







                    <div class="six-collumn-content">

                        <?php if (!empty($description1) && is_array($description1)): ?>
                            <?php foreach ($description1 as $desc): ?>
                                <p><?php echo $desc; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (!empty($description) && is_array($description)): ?>
                            <?php foreach ($description as $desc): ?>
                                <p><?php echo $desc; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>

 
                        <?php
                        $externalLinkNames = $entry['externalLinkName'] ?? [];
                        $externalLinkUrls  = $entry['externalLinkUrl'] ?? [];


                        if (!empty($externalLinkNames) && !empty($externalLinkUrls)) {

                            echo '<div class="tab-button-group">';
                            foreach ($externalLinkNames as $index => $name) {
                                $url = isset($externalLinkUrls[$index]) ? $externalLinkUrls[$index] : '#';
                        ?>
                                <a class="sectionButton requirements" target="_blank" href="<?php echo $url; ?>">
                                    <?php echo $name; ?>
                                    <img src="../assets/img/icons/newTab.svg" alt="">
                                </a>
                        <?php
                            }
                            echo '</div>';
                        }
                        ?>

                        <?php if (!empty($downloadNames) && is_array($downloadNames) && is_array($downloadUrls)): ?>

                            <div class="button-external">
                                <?php foreach ($downloadNames as $index => $name): ?>
                                    <?php
                                    $url = $downloadUrls[$index] ?? '#'; // Fallback to "#" if URL missing
                                    ?>
                                    <a class="sectionButton requirements" href="<?= htmlspecialchars($url) ?>" target="_blank">
                                        <?= htmlspecialchars($name) ?>
                                        <img class="downloadIcon" src="../assets/img/icons/download.svg" alt="">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>





                        <?php if (!empty($img)): ?>

                            <?php if (is_array($img)): ?>

                                <?php foreach ($img as $index => $src): ?>
                                    <a class="imageTab" href="<?php echo $src; ?>" target="_blank">
                                        <img class="<?php echo $imgSize; ?>"
                                            src="<?php echo $src; ?>"
                                            alt="<?php echo isset($imgAlt[$index]) ? htmlspecialchars($imgAlt[$index], ENT_QUOTES) : ''; ?>">
                                    </a>
                                <?php endforeach; ?>

                            <?php else: ?>
                                <a class="imageTab" href="<?php echo $img; ?>" target="_blank">
                                    <img src="<?php echo $img; ?>" alt="<?php echo $imgAlt; ?>">
                                </a>
                            <?php endif; ?>

                        <?php endif; ?>







                        <?php if (!empty($pdf)): ?>


                            <embed class="description-video" src="<?php echo $pdf; ?>" width="800px" height="2100px" />


                        <?php endif; ?>





                        <?php if (!empty($vid)): ?>

                            <iframe class="description-video" src="<?php echo $vid; ?>"></iframe>



                        <?php endif; ?>


                        <?php if ($nextHasTitleH2 || !$nextHasTitleH3): ?>
                        <?php endif; ?>

                    </div>




                    <?php if ((empty($titleH2) && empty($titleH3)) && $nextHasTitleH2): ?>

                    </div>
                <?php endif; ?>


                <?php if (!empty($titleH3)): ?>
                </div>
            <?php endif; ?>


            <?php if ($nextHasTitleH2): ?>
            </div>
        <?php endif; ?>