<?php

echo "1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.) <br> <br>";
function sortByLength($arr) {
  usort($arr, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $arr;
}
print_r(sortByLength(["apple", "banana", "cherry", "date"]));

echo "<br><br><br><br>";


echo "2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string. <br> <br>";
function concatStrRev($str1, $str2) {
  return $str1 . strrev($str2);
}
$str1 = "Hello";
$str2 = "world";
print_r(concatStrRev($str1, $str2));

echo "<br><br><br><br>";

echo "3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array. <br> <br>";
function removeFirstAndLast($arr) {
  array_shift($arr);
  array_pop($arr);
  return $arr;
}
print_r(removeFirstAndLast(["apple", "banana", "cherry", "date"]));

echo "<br><br><br><br>";

echo "4.Write a PHP function to check if a string contains only letters and whitespace. <br> <br>";

function whiteSpace($str) {
  return preg_match('/^[a-zA-Z\s]+$/', $str);
}
$str1 = "Hello world";
$str2 = "Hello, world!";
echo "String 1: " . $str1 . "<br>";
echo "Contains only letters and whitespace: " . whiteSpace($str1) . "<br><br>";
echo "String 2: " . $str2 . "<br>";
echo "Contains only letters and whitespace: " . whiteSpace($str2);

echo "<br><br><br><br>";

echo "5.Write a PHP function to find the second largest number in an array of numbers. <br> <br>";

function findSecondLargest($arr) {
  rsort($arr);
  $max = $arr[0];
  $secondMax = null;
  foreach ($arr as $value) {
    if ($value < $max) {
      $secondMax = $value;
      break;
    }
  }
  return $secondMax;
}
echo "Second largest result: " . findSecondLargest([3, 5, 1, 8, 2, 7]);
