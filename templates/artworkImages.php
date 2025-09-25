
<?php

$imageFolder = isset($customImageFolder) ? $customImageFolder : 'img/artwork';
$sectionId = isset($sectionId) ? $sectionId : 'oilArtwork';
$files = scandir($imageFolder);


$imageExtensions = ['jpg', 'jpeg', 'png', 'gif']; 
$imageFiles = array_filter($files, function ($file) use ($imageExtensions) {
    return !preg_match('/^(\.|._)/', $file) && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), $imageExtensions);
});

$altTextArrays = [
    'oilArtwork' => [
        'back' => 'Alt',
        'fruit' => 'Alt',
        'gato1' => 'Alt',
        'gato2' => 'Alt',
        'hold' => 'Alt',
        'inTheCorner' => 'Alt',
        'owl' => 'Alt',
        'rose' => 'Alt',
        'round1' => 'Alt',
        'round2' => 'Alt',
        'self-1' => 'Alt',
        'self-2' => 'Alt',
        'self-3' => 'Alt',
        'self-4' => 'Alt',
        'self-5' => 'Alt',
        'servant' => 'Servant',
        'seViseu' => 'Alt',
        'sketch-6' => 'Alt',
        'snowman' => 'Alt',
        'spinMe' => 'Alt',
        'theFallingMan' => 'Alt',
        'twoOfThem' => 'Alt',
    ],
    'pastelsArtwork' => [
        'scan3' => 'Alt',
        'servant2' => 'Alt',
        'sketch1' => 'Alt',
        'sketch3' => 'Alt',
        'sketch4' => 'Alt',
        'sketch5' => 'Alt',
        'sketch7' => 'Alt',
        'sketch8' => 'Alt',
        'sketch9' => 'Alt',
        'sketch10' => 'Alt',
        'twoOfThemBig' => 'twoOfThemBig',
        'twoOfThemSketch' => 'Alt',
        'scan11' => 'Alt',
        'scan10' => 'Alt',
        'collision' => 'Alt',
    ],
    'portraitsArtwork' => [
        'avos' => 'Alt',
        'carolina' => 'Carolina',
        'ian1' => 'Alt',
        'ian22' => 'Alt',
        'ines' => 'Alt',
        'joana' => 'Alt',
        'joao' => 'Alt',
        'johny' => 'Alt',
        'Madr' => 'Alt',
        'maestro' => 'Alt',
        'mariana' => 'Alt',
        'ms' => 'Alt',
        'portrait-1' => 'Alt',
        'prima' => 'Alt',
        'self1' => 'Alt',
        'self2' => 'Alt',
        'sis' => 'Alt',

    ], 
];

$imageArray = array_map(function ($file) use ($imageFolder, $altTextArrays, $sectionId) {
    $filename = strtolower(pathinfo($file, PATHINFO_FILENAME)); 
    $altTextArray = array_change_key_case($altTextArrays[$sectionId] ?? [], CASE_LOWER);

    $imageURL = $imageFolder . '/' . $file;
    $altText = $altTextArray[$filename] ?? 'Artwork image';

    return ['url' => $imageURL, 'alt' => $altText];
}, $imageFiles);

?>

    <?php foreach ($imageArray as $image): ?>
        <a class="imageTab" href="<?php echo $image['url']; ?>" target="_blank">
        <img class="imagemArtwork" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </a>
    <?php endforeach; ?>
