<?php
$currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');

$jsonPath = "../json/projects/{$currentPage}.json";

if (file_exists($jsonPath)) {
    $jsonContent = file_get_contents($jsonPath);
    $projectData = json_decode($jsonContent, true);
} else {
    $projectData = null;
}
?>

<?php if (is_array($projectData)): ?> 
    <!-- ────────── SIDEMENU ────────── -->

    <div class="sideMenu">
        
            <div class="sideMenuBar">
                <div id="sideMenuBarBall"></div>
            </div>

            <ul>
                <?php foreach ($projectData as $index => $entry): ?>
                    <?php if (!empty($entry['titleH2'])): ?>
                        <?php $anchorId = 'section-' . $index; ?>
                        <li>
                        <a class="sideMenuLink" aria-label="Scroll to <?= htmlspecialchars($entry['titleH2']) ?>" href="#<?= $anchorId ?>">
    <?= htmlspecialchars($entry['titleH2']) ?>
</a>

                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        
    </div>
<?php endif; ?>
