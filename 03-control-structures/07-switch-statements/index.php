<?php
$dayOfWeek = date('l');

switch ($dayOfWeek) {
  case 'Monday':
    $message = 'Monday blues!';
    $color = 'blue';
    $fontColor = 'white';
    break;
  case 'Tuesday':
    $message = 'It\'s Tuesday!';
    $color = 'green';
    $fontColor = 'white';
    break;
  case 'Wednesday':
    $message = 'Hump day!';
    $color = 'yellow';
    $fontColor = 'black';
    break;
  case 'Thursday':
    $message = 'Almost there!';
    $color = 'orange';
    $fontColor = 'white';
    break;
  case 'Friday':
    $message = 'TGIF!';
    $color = 'red';
    $fontColor = 'white';
    break;
  case 'Saturday':
    $message = 'Weekend vibes!';
    $color = 'purple';
    $fontColor = 'white';
    break;
  case 'Sunday':
    $message = 'Relaxing Sunday!';
    $color = 'pink';
    $fontColor = 'black';
    break;
  default:
    $message = 'Unknown day!';
    $color = 'black';
    $fontColor = 'white';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: <?= $fontColor ?>;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= $message ?></h1>
</body>

</html>