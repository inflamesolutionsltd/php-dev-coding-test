<?php


$name = $_POST['name'] ?? 'Guest';
echo "Welcome " . $name;

if ($_POST['age'] > 18) {
    echo "You are eligible";
} else {
    echo "You are not eligible";
}

//Undefined index: age
//if ($_POST['age'] > 18) this line is wrong because if $_POST['age'] is not submitted in the form it will throw an error
