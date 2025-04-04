<?php
$students = array("Alice", "Bob", "Charlie", "David", "Eve");

echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

asort($students);
echo "<h3>Array Sorted in Ascending Order (asort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

arsort($students);
echo "<h3>Array Sorted in Descending Order (arsort):</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>
