<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: $length<br>";
echo "Width:  $width<br>";
echo "Area: $area<br>";
echo "Perimeter: $perimeter<br>";


$amount = 1000;
$vat = $amount * 0.15;
echo "Amount: $amount<br>";
echo "VAT (15%): $vat<br>";

$number = 69;
if ($number % 2 == 0) {
    echo $number . " is Even<br>";
} else {
    echo $number . " is Odd<br>";
}
$num1 = 25;
$num2 = 40;
$num3 = 15;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "The largest number is: $num1" ;
}
else if ($num2 >= $num1 && $num2 >= $num3) {
    echo "The largest number is: $num2";
}
else {
    echo "The largest number is: $num3";
}
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo  "$i <br>";
    } else {
       
    }
}
$numbers = array(10, 20, 30, 40, 50, 60);
$search = 40;
$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        break;
    } else {
        
    }
}

if ($found == true) {
    echo  "$search is found in the array. <br>";
} else {
    echo "$search is not found in the array. <br>";
}

//STAR
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
//NUMBER
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
//ALPHABET
$ch = 'A';

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
?>
