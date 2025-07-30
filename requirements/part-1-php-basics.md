# Part 1: PHP Basics

## Task 1
Write a PHP function to:
- Accept an array of integers.
- Return the second-largest number in the array.
- If the array has less than 2 numbers, return null.

## Task 2
Debug the following code and explain what is wrong:
```php
<?php
$name = $_POST['name'] ?? 'Guest';
echo "Welcome " . $name;

if($_POST['age'] > 18) {
    echo "You are eligible";
} else {
    echo "You are not eligible";
}
?>
```

## Task 3
Explain the difference between:
- include vs require
- isset() vs empty()
