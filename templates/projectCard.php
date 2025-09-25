<div class="projectCard <?php echo htmlspecialchars($cardCategory); ?>">

    <img class="cardImg" src="<?php echo htmlspecialchars($cardImg); ?>" alt="<?php echo htmlspecialchars($cardImgAlt); ?>">
    <div class="projectCardInfo">
        <div>
        <h2><?php echo $cardTitle; ?></h2>
        <?php
        if (isset($card['description'])) {
            echo "<p>" . $card['description'] . "</p>";
        }
        ?>
        </div>
        <div class="projectCardInfoBottom">
            
        <p><?php echo htmlspecialchars($cardDate); ?></p>
        <a href="<?php echo htmlspecialchars($cardUrl); ?>">Access<?php if ($cardSource === 'cardVideo.json'): ?>
            <img alt="" class="newTab" src="assets/img/icons/newTab.svg"> 
        <?php endif; ?></a>
        </div>
    </div>
</div> 