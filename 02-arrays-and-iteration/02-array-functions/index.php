<?php
$output = null;

$ids = [1, 22, 3, 4, 67];
$users = ['user1', 'user6', 'user3'];

$output = count($ids);

// sort
sort($ids);
sort($users);

// resver order sort
rsort($ids);
rsort($users);

// array_push
array_push($ids, 100);
array_push($users, "user100");

// array_pop
array_pop($ids);
array_pop($users);

// array_shift
array_shift($ids);
array_shift($users);

// array_unshift
array_unshift($ids, 100);
array_unshift($users, "user100");


// array_slice !!! returns a new array
$newIds = array_slice($ids, 1, 2);
// var_dump($newIds);

// array_splice
array_splice($ids, 0, 2, [100, 200]);

$output = "Sum of ids: " . array_sum($ids);

// array_search
$output = "User 3 is at index: " . array_search("user3", $users);

// in_array
$output = "User 3 exists: " . in_array("user3", $users);

// explode: string to arr
$tags = "php,javascript,html,css";
$tagsArr = explode(",", $tags);

// var_dump($tagsArr);

// implode: arr to string
$output = implode(";", $users);


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
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">IDS array:</h2>
            <p>
            <pre>
                    <?php print_r($ids) ?>
                </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">USERS array:</h2>
            <p>
            <pre>
                    <?php print_r($users) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>