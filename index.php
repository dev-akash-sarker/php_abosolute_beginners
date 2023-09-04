<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$variable = 10;
echo $variable;
echo "<br>";
$variable = 20;
echo "<br>";
echo $variable;
echo "<br>";
// as you see $ common variable can be changed without any error but
define('a', 15);
echo ""; // this will work cz you can never change there output
echo "<br>";
define('a', 20);
echo a; // here comes error
// constant fruit already defined so you can not change the output
// you can only read!
// if you comment any of the folloing const fruit the error will be gone
?>

<?php 
echo "<br>";
//array
define('cars', [
    'BMW', 'Toyota', 'Ferari'
]);

echo (cars[0]);
?>

<!-- $variables are not global but constant variables are global -->

<?php 
$name = "akash";

function functionName(){
    echo($name);
}

functionName(); // Undefined variable $name
// cz $$name is not gloabl !its only works in local
?>

<?php 

function functionNameTwo(){
    $name = "akash";
    echo($name);
}

functionNameTwo(); // now the function will give us the output
//not $name is local variable so it will work.
?>

<br>
<?php 
define('age', 10);

function ageNumber(){
    echo(age);
}

ageNumber(); // age is a constant variable and global variable 
// so it will work without any issues

?>
<body>
</body>
</html>