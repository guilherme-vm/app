<?php $linkVar = "../"; ?>

<?php include '../templates/head.php'; ?>

<?php include '../templates/navbar.php'; ?>









<div class="project-intro">

    <?php
    // Load and decode JSON

    // Get current PHP filename without extension
    $currentPage = basename($_SERVER['PHP_SELF'], '.php');

    // Build the JSON path
    $jsonPath = "../json/projects/{$currentPage}.json";

    $jsonContent = file_get_contents($jsonPath);
    $projectData = json_decode($jsonContent, true);

    // Check if decoding worked
    if (is_array($projectData)) {
        foreach ($projectData as $index => $entry) {

            $templateType = $entry['templateType'] ?? null;
            $titleH2 = $entry['titleH2'] ?? null;
            $titleH3 = $entry['titleH3'] ?? null;
            $description1 = $entry['description1'] ?? null;
            $description = $entry['description'] ?? [];
            $buttonFlexCat = $entry['buttonFlexCat'] ?? null;



            $img = $entry['img'] ?? [];
            $imgAlt = $entry['imgAlt'] ?? [];
            $iframeCard = $entry['iframeCard'] ?? [];


            $vid = $entry['vid'] ?? null;
            $pdf = $entry['pdf'] ?? null;
            $externalLinkName = $entry['externalLinkName'] ?? null;
            $externalLinkUrl = $entry['externalLinkUrl'] ?? null;

            $downloadNames = $entry['downloadName'] ?? [];
            $downloadUrls = $entry['downloadUrl'] ?? [];


            $anchorId = 'section-' . $index;

            $userScenarioTitles = $entry['userScenarioTitles'] ?? [];
            $userScenarioDescriptions = $entry['userScenarioDescriptions'] ?? [];

            $userPersonas = $entry['userPersonas'] ?? [];
            $imgSize = $entry['imgSize'] ?? null;

            $nextEntry = $projectData[$index + 1] ?? null;
            $nextHasTitleH2 = $nextEntry && !empty($nextEntry['titleH2']);
            $nextNextEntry = $entries[$currentIndex + 2] ?? null; // safely get the "next next" entry

            $nextNextHasTitleH2 = $nextNextEntry && !empty($nextNextEntry['titleH2']);


            $nextHasTitleH3 = $nextEntry && !empty($nextEntry['titleH3']);


            // Safety check: does the templateType exist?
            if ($templateType) {
                $templateFile = "../templates/" . $templateType . ".php";

                if (file_exists($templateFile)) {
                    include $templateFile;
                } else {
                    echo "<!-- Template not found: $templateFile -->";
                }
            }
        }
    } else {
        echo "<p>Error loading project data.</p>";
    }
    ?>


<?php include '../templates/footer.php'; ?>