<?php
// Array Functions 
// array() - Create an array
// count() - Count all elements in an array
// array_push() - Add one or more elements to the end of an array
// array_pop() - Delete the last element of an array
// array_shift() - Delete the first element of an array
// array_unshift() - Add one or more elements to the beginning of an array
// array_merge() - Merge one or more arrays
// array_sum() - Calculate the sum of the values in an array
// array_product() - Calculate the product of the values in an array
// array_reverse() - Return an array in the reverse order
// in_array() - Check if a value exists in an array
// array_search() - Search for a value in an array and return its key
// array_keys() - Return all the keys of an array
// array_values() - Return all the values of an array
// array_splice() - Remove a portion of the array and replace it with something else
// array_slice() - Return a portion of an array
// array_rand() - Pick one or more random keys from an array
// shuffle() - Shuffle the elements in an array
// sort() - Sort an array
// rsort() - Sort an array in reverse order
// asort() - Sort an array, and maintain index association
// ksort() - Sort an array by key
// arsort() - Sort an array in reverse order, and maintain index association
// krsort() - Sort an array by key in reverse order
// array_unique() - Remove duplicate values from an array
// array_diff() - Compare arrays, and return the differences
// array_intersect() - Compare arrays, and return the matches
// array_column() - Return the values from a single column in the input array
// array_map() - Apply a user-defined function to every element in an array
// array_filter() - Filters the values of an array using a callback function
// array_reduce() - Reduces the array to a single value using a callback function
// array_walk() - Apply a user-defined function to every element in an array
// array_key_exists() - Check if the given key or index exists in the array
// array_change_key_case() - Changes the case of all keys in an array
// array_chunk() - Split an array into chunks
// array_fill() - Fill an array with values
// array_fill_keys() - Fill an array with values, specifying keys
// array_flip() - Exchanges all keys with their associated values in an array
// array_key_first() - Return the first key of an array
// array_key_last() - Return the last key of an array
// array_map() - Applies a callback function to the elements of one or more arrays
// array_rand() - Pick one or more random keys out of an array
// array_replace() - Replaces the values of the first array with the values from following arrays
// array_replace_recursive() - Replaces the values of the first array with the values from following arrays recursively
// array_walk_recursive() - Apply a user function recursively to every member of an array
// compact() - Create an array containing variables and their values
// extract() - Import variables into the current symbol table from an array
// reset() - Set the internal pointer of an array to its first element
// end() - Set the internal pointer of an array to its last element
// next() - Advance the internal pointer of an array
// prev() - Rewind the internal pointer of an array
// current() - Return the current element in an array

// Create an array$
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user1', 'user2', 'user3'];
$output = null;

// Count all elements in an array
$output = count($ids);

// Sort an array
sort($ids);

// Sort in reverse
rsort($users);

// Array Push 
array_push($ids, 100);
array_push($users, 'user4');

// Array Pop   Remove the last element
array_pop($ids);

// Array Shift  Remove the first element
array_shift($users);
array_shift($ids);

// Array Unshift  Add one or more elements to the beginning of an array
array_unshift($users, 'user0');
array_unshift($ids, 5);

// Array Slice Return a portion of an array
$ids2 = array_slice($ids, 1, 3);
var_dump($ids2);

// Array Splice Remove a portion of the array and replace it with something else
array_splice($ids, 1, 1, 'REPLACED');
array_splice($users, 0, 1, 'New User');


// Sum of all elements in an array
$output = 'Sum of ids: ' . array_sum($ids);

// Array Search
$output = array_search('user2', $users);

// in_array Check if a value exists in an array  It returns true or false 
$output = in_array('user2', $users);

// Explode - Split a string by a string
$tags= 'web development,programming,php,laravel';
$tagsArray = explode(',', $tags); // First parameter is the delimiter in this case a ,  and the second parameter is the string to be split which is $tags

// Implode - Join array elements with a string
$tagsString = implode(',', $tagsArray); // First parameter is the delimiter in this case a ,  and the second parameter is the array to be joined which is $tagsArray

 
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
      <p class="text-xl font-semibold">Array Functions</p>
      <h2 class="text-lg font-semibold mt-4">IDs Array:</h2>
      <p>
        <pre>
            <?php print_r($ids); ?>
        </pre>
        </p>
        <p>
        <pre>
            <?php print_r($users); ?>
        </pre>
        </p>
    </div>
  </div>
</body>

</html>