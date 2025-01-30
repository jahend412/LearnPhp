<?php

$names = array("John", "Jane", "Joe", "James", "Jill");
$numbers = [1, 2, 3, 4, 5];

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
   
}

// inspect($names);
// inspect($numbers);


// Fetch element from array
// echo $names[2];
// echo $numbers[4];

// Add element to array
$names[] = 'Jack';
$numbers[] = 6;

// Change at a specific position
$numbers[3] = 44;

// Remove element from array
unset($names[1]);  // This removes the index as well

$names = array_values($names); // This re-indexes the array

inspect ($names);
inspect ($numbers);
?>