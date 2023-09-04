<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
echo "i am a good student";
// single quote or double quote er vitor ja thake! sob e string
// jodi string er length ber korty hoy taholy
echo "<br>";
echo strlen("i eat mangoes");
// if you see the output then it will be 13
?>

<?php
// word er count ber korar jonno
echo "<br>";
echo str_word_count("i am a soldier and i will fight for country");
?>

<?php 
// jodi kono string ulto korte hoy or reverse korty hole
echo "<br>";
echo strrev("hello world");
// jodi kono string er position ber korty hole
echo "<br>";
echo strpos("i love cat", "love");
?>

<?php
// kono word replace korty holy
echo "<br>";
echo str_replace("pizza", "burger", "i love to eat pizza");
?>


<body>
</body>
</html>