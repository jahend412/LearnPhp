<?php
$title = 'PHP Practice';
$heading = 'Learn PHP from Scratch';
$firstName = 'John';
$lastName = 'Doe';
$fullName = $firstName . ' ' . $lastName;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $heading ?></h2>
          <p> <?= 'Hello my name is '  . $fullName .'!' ?> </p>
          <?= "<p>Hello my name is $fullName!</p>" ?>
          <?= 'My name is \'John\'' ?>
        </div>
    </div>
</body>

</html>