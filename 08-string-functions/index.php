<?php
$output = null;
$str = "Hello, World!";

// strlen()
$output = strlen($str);

// str_word_count()
$output = str_word_count($str);

// strpos()
$output = strpos($str, "World");

// Get Specific char by index
$output = $str[4];

// substr()
$output = substr($str, strpos($str, "World"), strlen("World"));

// str_replace()
$output = str_replace("World", "PHP", $str);

// strtolower()
$output = strtolower($str);

// strtoupper()
$output = strtoupper($str);

// ucwords
$output = ucwords($str);

// trim()
$str2 = "   Hello, World!   ";
$output = trim($str2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>