<?php
ob_start(); // Start capturing output
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php
    $page = basename($_SERVER['PHP_SELF'], '.php');
    if ($page === 's4ng') {
      echo "Skills For A Next Generation";
    } else if ($page === 'index') {
      echo "Guilherme Vila Maior";
    } else if ($page === 'skytales') {
      echo "Sky Tales";
    } else if ($page === 'coro') {
      echo "Coro Mozart";
    }else if ($page === 'anglophonetravellersinportugal') {
      echo "Anglophone Travellers In Portugal";
    } else {
      // Default: convert filename like "my-page" to "My Page"
      echo ucwords(str_replace('-', ' ', $page));
    }
    ?>
  </title>

  <meta name="description" content="Portfolio of Guilherme Vila Maior">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">



  <?php
  if (isset($linkVar)) {
    echo '<link rel="stylesheet" type="text/css" href="' . $linkVar . 'assets/css/reset.css">';
    echo '<link rel="stylesheet" type="text/css" href="' . $linkVar . 'assets/css/type.css">';
    echo '<link rel="stylesheet" type="text/css" href="' . $linkVar . 'assets/css/style.css">';
    echo '<link rel="stylesheet" type="text/css" href="' . $linkVar . 'assets/css/queries.css">';

    echo '<script src="' . $linkVar . 'assets/script/jquery-3.7.1.min.js"></script>';
    echo '<script src="' . $linkVar . 'assets/script/script.js"></script>';
    echo '<script src="' . $linkVar . 'assets/script/cookies.js"></script>';
  } else {
    echo '<link rel="stylesheet" type="text/css" href="assets/css/reset.css">';
    echo '<link rel="stylesheet" type="text/css" href="assets/css/type.css">';
    echo '<link rel="stylesheet" type="text/css" href="assets/css/style.css">';
    echo '<link rel="stylesheet" type="text/css" href="assets/css/queries.css">';
    echo ' <script src="assets/script/jquery-3.7.1.min.js"></script>';
    echo ' <script src="assets/script/script.js"></script>';
    echo ' <script src="assets/script/cookies.js"></script>';
  }
  if (isset($toolkitGame)) {
    echo '<link rel="stylesheet" type="text/css" href="' . $toolkitGame . 'assets/css/toolkitGarden.css">';
  }

  ?>

</head>

<body>

  