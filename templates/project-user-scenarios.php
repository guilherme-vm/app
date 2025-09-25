<div class="project-description" id="<?= $anchorId ?>">
    <h2 class="three-collumn-title"><?php echo $titleH2; ?></h2>
    <div class="user-scenario-container six-collumn-content">
        <?php

        $count = min(count($userScenarioTitles), count($userScenarioDescriptions));

        for ($i = 0; $i < $count; $i++):
            $title = htmlspecialchars($userScenarioTitles[$i]);
            $description = htmlspecialchars($userScenarioDescriptions[$i]);
            $id = $i + 1;
        ?>
            <div class="user-scenario">

                

                    <button class="sectionButton user-scenario-title" aria-expanded="false" id="user-scenario-<?php echo $id; ?>-title">
                        <span><?php echo $title; ?></span>
                   

                    <span class="user-scenario-line"></span>
                    <img class="user-scenario-arrow" src="../assets/img/icons/arrowDown.svg" alt="">
                    </button>
                
                <p class="user-scenario-description" id="user-scenario-<?php echo $id; ?>-description">
                    <?php echo $description; ?>
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php if ($nextHasTitleH2) {
                        echo '</div>'; 
                    } ?>
