<?php

    $txt="Ford";
    $day="10";
echo "Hello World ".$day;
echo "<br>";
echo "<hr>";
echo "<br>";
echo $txt." " .$day."hi"; 
echo "<br>";
echo "<hr>";
echo "<br>";
echo "$txt"." New Line";
echo "<br>";
echo "<br>";
//////

$x='5';
$y='10';
$awser = $x + $y;
echo  "Awser is "."$awser";
// echo "awser" $x+$y;
echo "<hr>";

for($i=1;$i<=10;$i++){ //Start,Stop,Step
    echo "Hello World".$i;
    echo "<hr>";
    // echo "Hello World".$step;

}

$number = 100;
$numA= 80;
$numB = 70;
$numC = 60;
$numD = 50;

if($number === 99){
    echo "Yes number is 99";
}elseif($number === 100){
    echo "Yes number is 100";
}else{
    echo "No number is not 99";
}
echo "<hr>";

$point = 00;

if ($point >= 80) {
    echo "You point is A";
}elseif ($point >= 70){
    echo "You point is B";
}
elseif ($point >= 60){
    echo "You point is C";
}
elseif ($point >= 50){
    echo "You point is D";
}
 else {
    echo "No pass";
}

?>