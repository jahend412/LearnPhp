<?php
$title = 'PHP Practice';
$heading = 'Learn PHP from Scratch';

$number1 = 10;
$number2 = 20;
$number3 = '30';
$fruit = 'Apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Type Conversion
$result0 = $number1 + $number2;
$result1 = $number1 + $number2 + $number3;
$result = $number3 + $number3;
$result2 = $number1 . $number2;
// $result3 = $fruit + $number1; // Error
$result4 = $number1 + $bool1;
$result5 = $number1 + $null;

// Explicit Type Conversion
$result6 = (int) $number3;
$result7 = (string) $number1;
$result8 = (bool) $number1;
$result9 = (bool) $number3;
$result10 = (bool) $null;
$result11 = (int) $bool1;
$result12 = (int) $bool2;
$result13 = (int) $fruit;
$result14 = (int) $null;

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
         <?= 'Implicit Type Conversion'; echo '<br />'?>
            <?=  var_dump($result) ?>
          <?=       var_dump($result0); ?>
            <?=       var_dump($result1); ?>
            <?=       var_dump($result2);  ?>
            <?=       var_dump($result4);  ?>
            <?=       var_dump($result5); echo '<br />'  ?>
            <?= 'Explicit Type Conversion'; echo '<br />' ?>
            <?=       var_dump($result6);  ?>
            <?=       var_dump($result7);  ?>
            <?=       var_dump($result8);  ?>
            <?=       var_dump($result9);  ?>
            <?=       var_dump($result10);  ?>
            <?=       var_dump($result11);  ?>
            <?=       var_dump($result12);  ?>
            <?=       var_dump($result13);  ?>
            <?=       var_dump($result14);  ?>
        </div>
    </div>
</body>

</html>