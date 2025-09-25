<?php
$html = ob_get_clean(); // Get the full page HTML

$openCount  = substr_count($html, '<div');
$closeCount = substr_count($html, '</div>');



// Output the original HTML
echo $html;

$diff = $openCount - $closeCount;

if ($diff > 0) {
    // If difference is 1, 2, or 3, echo that many closing divs
    for ($i = 0; $i < $diff; $i++) {
        echo '</div>';
    }
} 

?>


</main>

<footer class="footer">


    <div class="footer-section" id="footer-group-1">

        <ul>
            <li><a href="<?= isset($linkVar) ? $linkVar . 'index.php' : 'index.php' ?>">Home</a></li>
            <li><a href="<?= isset($linkVar) ? $linkVar . 'design.php' : 'design.php' ?>">Design</a></li>
            <li><a href="<?= isset($linkVar) ? $linkVar . 'video.php' : 'video.php' ?>">Video</a></li>
            <li><a href="<?= isset($linkVar) ? $linkVar . 'artwork.php' : 'artwork.php' ?>">Artwork</a></li>
            <li><a href="<?= isset($linkVar) ? $linkVar . 'about.php' : 'about.php' ?>">About</a></li>
        </ul>
    </div>

    <?php
    $jsonPath = isset($linkVar) ? $linkVar . 'json/cardDesign.json' : 'json/cardDesign.json';
    $jsonData = file_get_contents($jsonPath);
    $cards = json_decode($jsonData, true);
    if (is_array($cards)) {
        echo '<div class="footer-section" id="footer-group-2">';




        echo '<ul class="footer-list">';

        echo "<li><a href='" . (isset($linkVar) ? $linkVar . "design.php?selectedButton=interactionDesign" : "design.php?selected=interactionDesign") . "'>UI/UX Projects</a></li>";
        foreach ($cards as $card) {
            if (
                isset($card['category']) &&
                $card['category'] === 'interactionCard' &&
                !empty($card['url']) &&
                !empty($card['title'])
            ) {
                if (isset($linkVar)) {
                    echo '<li><a href="../' . htmlspecialchars($card['url']) . '">'
                        . htmlspecialchars($card['title']) . '</a></li>';
                } else {
                    echo '<li><a href="' . htmlspecialchars($card['url']) . '">'
                        . htmlspecialchars($card['title']) . '</a></li>';
                }
            }
        }
        echo '</ul>';
        echo '</div>';
    } else {
        echo "Error: Could not load cardDesign.json or invalid format.";
    }
    ?>




    <?php
    $jsonPath = isset($linkVar) ? $linkVar . 'json/cardDesign.json' : 'json/cardDesign.json';
    $jsonData = file_get_contents($jsonPath);
    $cards = json_decode($jsonData, true);
    if (is_array($cards)) {
        echo '<div class="footer-section" id="footer-group-3">';


        echo '<ul>';
        echo "<li><a href='" . (isset($linkVar) ? $linkVar . "design.php?selectedButton=brandingDesign" : "design.php?selected=brandingDesign") . "'>Branding Projects</a></li>";
        foreach ($cards as $card) {
            if (
                isset($card['category']) &&
                $card['category'] === 'brandingCard' &&
                !empty($card['url']) &&
                !empty($card['title'])
            ) {
                if (isset($linkVar)) {
                    echo '<li><a href="../' . htmlspecialchars($card['url']) . '">'
                        . htmlspecialchars($card['title']) . '</a></li>';
                } else {
                    echo '<li><a href="' . htmlspecialchars($card['url']) . '">'
                        . htmlspecialchars($card['title']) . '</a></li>';
                }
            }
        }
        echo '</ul>';
        echo '</div>';
    } else {
        echo "Error: Could not load cardDesign.json or invalid format.";
    }
    ?>



</footer>