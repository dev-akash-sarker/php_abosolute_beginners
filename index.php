<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// = is assainment oprator

// PHP Arithmetic Operators
// +	Addition	$x + $y	Sum of $x and $y	
// -	Subtraction	$x - $y	Difference of $x and $y	
// *	Multiplication	$x * $y	Product of $x and $y	
// /	Division	$x / $y	Quotient of $x and $y	
// %	Modulus	$x % $y	Remainder of $x divided by $y	
// **	Exponentiation	$x ** $y

$a = 15;
$b = 10;
echo($a % $b);

?>

<?php 
$x = 1;
$y = 2;
$x += $y ; // $x = $x + $y
$x -= $y ; // $x = $x - $y
$x *= $y ; // $x = $x * $y
$x /= $y ; // $x = $x / $y
?>

<?php 
$x = 1;
$y = 2;
var_dump($x == $y); // double equal
var_dump($x === $y); // identical equal
var_dump($x != $y); // not equal
var_dump($x !== $y); // identical not equal
var_dump($x < $y); // x er theke y boro
var_dump($x > $y); // y er theke x boro
var_dump($x <= $y); // boro ba soman kina
var_dump($x >= $y); // choto ba shoman ki na
?>
<body>
</body>
</html>