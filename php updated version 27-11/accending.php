<?php
// 1. Store names of students in an array
$students = array("Niya", "Alice", "Miya", "Soul", "David");

// Function to display array in straight line with keys
function displayArrayWithKeys($arr) {
    $output = [];
    foreach ($arr as $key => $value) {
        $output[] = $key . "=>" . $value;
    }
    echo "Array: [" . implode(", ", $output) . "]<br><br>";
}

// 2. Display the original array
echo "<h3>Original Array:</h3>";
displayArrayWithKeys($students);

// 3. Sort the array in ascending order using asort()
asort($students);
echo "<h3>Array After asort() (Ascending Order):</h3>";
displayArrayWithKeys($students);

// 4. Sort the array in descending order using arsort()
arsort($students);
echo "<h3>Array After arsort() (Descending Order):</h3>";
displayArrayWithKeys($students);
?>

