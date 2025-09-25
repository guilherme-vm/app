<?php include 'templates/head.php'; ?>



<div class="homepageContent">
    <div class="homepageIntro">
        <p>Hello there! I'm <span>Guilherme Vila Maior!</span><br>UI/UX Designer rooted in Communication Design </p>
    </div>


    
    <div class="homepageCardContainer">

        <?php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $jsonString = file_get_contents('json/cardHomepage.json');
        $homepageCard = json_decode($jsonString, true);

        foreach ($homepageCard as $card) : ?>
            <?php
            $cardUrl = $card["url"];
            $cardTitle = $card["title"];
            $cardDescription = $card["description"];
            $cardTags = $card["tags"];
            ?>
            <?php include 'templates/cardHomepage.php'; ?>
        <?php endforeach; ?>
    </div>
</div>
</body>


<?php include 'templates/footer.php'; ?>

</html>


