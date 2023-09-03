<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
class Phone {
    var $model;
    function phoneModel ($number) {
        global $model;
        $model = $number;
        echo "This is $model <br>"; 
    }
}

$apple = new Phone;
$apple-> phoneModel('iphone 16');
$samsung = new Phone;
$samsung -> phoneModel('samsung note 12');
// ekhane object holo class
// upore jemn Phone holoe ekti object
?>
<?php ?>
<?php ?>

<body>
</body>
</html>