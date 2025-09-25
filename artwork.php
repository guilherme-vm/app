<?php include 'templates/head.php'; ?>

<?php include 'templates/navbar.php'; ?>


<h1>Artwork</h1>


<div class="button-group page-button-group" role="tablist" aria-label="Artwork categories">
    <button class="sectionButton page-buttons" role="tab" aria-selected="true" aria-controls="allArtwork" id="artwork-tab-all">
        All
    </button>
    <button class="sectionButton page-buttons" role="tab" aria-selected="false" aria-controls="oilArtwork" id="artwork-tab-oil">
        Oil
    </button>
    <button class="sectionButton page-buttons" role="tab" aria-selected="false" aria-controls="pastelsArtwork" id="artwork-tab-pastels">
        Pastels
    </button>
    <button class="sectionButton page-buttons" role="tab" aria-selected="false" aria-controls="portraitsArtwork" id="artwork-tab-portraits">
        Portraits
    </button>
</div>


<?php

$sideMenuChoices = array(
    array(
        "label" => "Oil",
        "id" => "oil",
    ),
    array(
        "label" => "Pastels",
        "id" => "pastels",
    ),
    array(
        "label" => "Portraits",
        "id" => "portraits",
    ),
);
?>
<div class="artWorkContainer" id="allArtwork">

    <div class="artwork-image-grid gridArtwork" id="oilArtwork" >
        <?php $customImageFolder = 'assets/img/artwork/oil'; ?>
        <?php $sectionId = 'oilArtwork'; ?>
        <?php include 'templates/artworkImages.php'; ?>

    </div>

    <div class="artwork-image-grid gridArtwork hide" id="pastelsArtwork" >
        <?php $customImageFolder = 'assets/img/artwork/pastels'; ?>
        <?php $sectionId = 'pastelsArtwork'; ?>
        <?php include 'templates/artworkImages.php'; ?>
    </div>

    <div class="artwork-image-grid gridArtwork hide" id="portraitsArtwork">
        <?php $customImageFolder = 'assets/img/artwork/portraits'; ?>
        <?php $sectionId = 'portraitsArtwork'; ?>
        <?php include 'templates/artworkImages.php'; ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>