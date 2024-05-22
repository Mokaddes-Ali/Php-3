<?php
//Practice of loops
//for loop
echo "This series is integer number series";
echo "\n";
echo "</br>";
for ($i = 1; $i <= 20; $i++){
    echo $i . " ";
}
echo "\n";
echo "</br>";

//for loop statement for  even number calculate
echo "This series is Even number series";
echo "\n";
echo "</br>";
for ($i = 0; $i <= 20; $i++){
    if($i % 2 == 0){
        echo $i." ";
    }
}
echo "\n";
echo "</br>";

//for loop statement for  odd number calculate
echo "This series is odd number series";
echo "\n";
echo "</br>";
for ($i = 0; $i <= 20; $i++){
    if($i % 2 == 1){
        echo $i." ";
    }
}

echo "\n";
echo "</br>";
//for loop series
echo "This is the complex number series";
echo "</br>";
for ($i = 0; $i <= 10; $i++){
    for ($j = 0; $j <= 10; $j++){
        echo $j." ";
      
    }
    echo "</br>";
}
echo "\n";
echo "</br>";
//while loop calculate sum of the series
echo "The sum of a series is" . "\n";
echo "</br>";
$sum = 0;
$i = 1;
while ($i <= 250){
    $sum = $sum + $i;
    $i++;
}
echo $sum . "\n";
echo "</br>";

//Nested loop
//Multiplication table
echo " The multiplication table make by for loop";
echo "</br>";
for ($i = 1; $i <= 12; $i++){
    for ($j = 1; $j <= 10; $j++){
        echo $i*$j." ";
    }
    echo "\n";
    echo "</br>";
}
echo "</br>";

//power calculation using the for loop
echo " the power of 2^4 calculation use for loop";
echo "</br>";
$m = 1;
$b = 2;
for ($i = 1; $i <= 4; $i++){
     $m = $m * $b;
}
echo "$m";
echo "</br>";
// calculate factorial using the for loop
echo " calculation  of factorial 7 by for loop";
echo "</br>";
$f = 1;
for ($i = 1; $i <= 7; $i++){
    $f = $f * $i;
    echo $i . "!=" . "$f" . "</br>";
}
echo "$f";
//