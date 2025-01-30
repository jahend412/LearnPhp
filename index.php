<?php
$output=null;

$user = [
  'name' => 'John Doe',
  'email' => 'john@gmail.com',
  'password' => '12345',
  'hobbies' => ['Reading', 'Writing', 'Coding'],
];

$output = $user['name'];
$output = $user['email'];

$output = $user['hobbies'][0];

$user['address'] = '123 Main St';

unset($user['address']);

// echo $user;  Can't echo an array
// var_dump($user);
 
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
      <p class="text-xl font-semibold">Associative Arrays</p>
      <h2 class="text-lg font-semibold mt-4">User Array:</h2>
      <p>
        <pre>
            <?php print_r($user); ?>
            </pre>
        </p>
     
    </div>
  </div>
</body>

</html>