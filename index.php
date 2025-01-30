<?php
$output=null;
// Get an array of numbers

$numbers = [1, 2, 3, 4, 5];
// Get the sum of all the numbers combine and put into a variable 

$sum = array_sum($numbers);
$sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];
$amount = count($numbers);

echo '<h3>Sum of An Array</h3>';
echo 'The sum of the ' . $amount . ' numbers is ' . $sum;

echo '<h3> Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);

// array_push($colors, 'purple');
// $colors[]= 'orange';

// Array Merge

$colors =  array_merge($colors, ['purple', 'orange']);  // Add purple and orange with array_merge
array_splice($colors, 1, 1, 'pink');  // Change out specific 
array_pop($colors);  // Remove last
print_r($colors);


echo '<h3> Job Listings </h3>';

$listings = [
    [
        'id' => 1,
        'title' => 'Dev',
        'company' => '123 co',
        'con_email' => 'J@gmail.com',
        'con_phone' => '123-123-1234',
        'skills' => ['1', '2', '3'],
    ],
    [
        'id' => 2,
        'title' => 'Dev1',
        'company' => '1233 co',
        'con_email' => 'J2@gmail.com',
        'con_phone' => '123-123-1234',
        'skills' => ['1', '2', '3']
    ],[
        'id' => 3,
        'title' => 'Dev',
        'company' => '14123 co',
        'con_email' => 'J3@gmail.com',
        'con_phone' => '123-123-1234',
        'skills' => ['1', '2', '3']
    ],
];

array_push($listings, [
    'id' => 4,
    'title' => 'Dev',
    'company' => '123 co',
    'con_email' => 'J4@gmail.com',
    'con_phone' => '123-123-1234',
    'skills' => ['1', '2', '3'],
]);

// print_r($listings);
echo $listings[1]['title'];
echo $listings[2]['skills'][0]

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
        <p class="text-xl font-semibold"><?= $output ?></p>
      <p class="text-xl font-semibold">Challenge</p>
      <h2 class="text-lg font-semibold mt-4"></h2>
      <p>
        <pre>
          
        </p>
     
    </div>
  </div>
</body>

</html>