<?php include 'templates/head.php'; ?>

<?php include 'templates/navbar.php'; ?>

<h1>Video</h1>


<div class="cardsContainer cardsContainerVideo">
    <?php
    $currentUrl = $_SERVER['REQUEST_URI'];
    $jsonSource = 'cardVideo.json';
    $jsonString = file_get_contents('json/' . $jsonSource);
    $projectCard = json_decode($jsonString, true);

    foreach ($projectCard as $card) : ?>
        <?php
        $cardUrl = $card["url"];
        $cardTitle = $card["title"];
        $cardDescription = $card["description"];
        $cardDate = $card["date"];
        $cardImg = $card["img"];
        $cardSource = $jsonSource; // Pass the filename to the template
        ?>
        <?php include 'templates/projectCard.php'; ?>
    <?php endforeach; ?>

</div>



<?php include 'templates/footer.php'; ?>