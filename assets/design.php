<?php include 'templates/head.php'; ?>

<?php include 'templates/navbar.php'; ?>

<h1>Design</h1>




<div class="button-group page-button-group" role="tablist" aria-label="Artwork categories">
    <button class="sectionButton" role="tab" aria-selected="true" aria-label="Show all design projects" id="design-tab-all">
        All
    </button>
    <button class="sectionButton" role="tab" aria-selected="false" aria-label="Show interaction projects" id="design-tab-interaction">
        Interaction
    </button>
    <button class="sectionButton" role="tab" aria-selected="false" aria-label="Show branding projects" id="design-tab-branding">
        Branding
    </button>
   
</div>



<div class="cardsContainer">
    <?php
    $currentUrl = $_SERVER['REQUEST_URI'];
    $jsonString = file_get_contents('json/cardDesign.json');
    $projectCard = json_decode($jsonString, true);

    foreach ($projectCard as $card) : ?>
        <?php
        $cardUrl = $card["url"];
        $cardTitle = $card["title"];
        $cardDate = $card["date"];
        $cardImg = $card["img"];
        $cardImgAlt = $card["alt"];
        $cardCategory = $card["category"];
        ?>
        <?php include 'templates/projectCard.php'; ?>
    <?php endforeach; ?>
</div>


<?php include 'templates/footer.php'; ?>