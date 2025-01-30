<?php
$output=null;

$fruit = [
    ['apple' , 'red'],
    ['banana', 'yellow'],
    ['grape', 'purple']
];

$output = $fruit[0][1];
$fruit[] = ['kiwi', 'green'];

$users = [
    ['name' => 'John Doe', 'email' => 'john@gmail.com', 'password' => '123456'],
    ['name' => 'Jane Doe', 'email' => 'jane@gmail.com', 'password' => '123456'],
    ['name' => 'Jim Doe', 'email' => 'jim@gmail.com', 'password' => '123456']
];

$users[]= ['name' => 'Mike Doe', 'email' => 'Mike@gmail.com', 'password' => '123456'];

array_push($users, ['name' => 'Marry Doe', 'email' => 'M@io.com', 'password' => '123456']);

array_pop($users); // remove last element
array_shift($users); // remove first element

unset($users[1]); // remove specific element


$output = $users[1]['email'];
$output = count($users);
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
      <p class="text-xl font-semibold">Multi-Dimensional Array</p>
      <h2 class="text-lg font-semibold mt-4">Fruit Array:</h2>
      <p>
        <pre>
            <?= print_r($users) ?>
            </pre>
        </p>
     
    </div>
  </div>
</body>

</html>