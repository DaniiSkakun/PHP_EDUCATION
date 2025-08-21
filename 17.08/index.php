<?php
print "Hi";
?>
v
<?php
$x = 1;
$y = $x;
$x = 3;
print $y. "<br>";

$x = 1;
$y = &$x;
$x = 3;
print $y. "<br>";
//Hi
?>
<?php

$name = "Kek";

print "Hello $name". "<br>";
?>

<?php
// Правильно, современно
const NAME1 = "Kek";
echo NAME1. "<br>";

// Когда имя задаётся переменной — только define
$constName = "NAME2";
define($constName, "Lol");
echo NAME2. "<br>";
?>
<br>
<br>
<?php
if(true){
   // const FIRST = 'first';
    define('SECOND', "SECOND");
  //  print FIRST. "<br>";
    print SECOND. "<br>";
}

$paid = "PAID";
define('CONST_'.$paid, "4 ".$paid);
print CONST_PAID. "<br>";
?>
<br>
<br>
<?php
echo __LINE__;
echo __FILE__;
?>
<br>
<br>
<?php
var_dump($paid). "<br>";
$arrrrrr = [1,2,3,-4,"yes",true,false,0.5,0.7];
//echo $arrrrrr. "<br>";
//print $arrrrrr. "<br>";
print_r($arrrrrr);
echo '<pre>' . print_r($arrrrrr, true) . '</pre><br>';
echo '<pre>' . print_r($arrrrrr) . '</pre><br>';
?>
<br>
<br>
<?php
function sum($x,$y)
{
    var_dump($x,$y);
    echo "<br>";
    return $x + $y;
}

$sum = sum(2,"3.9");

echo $sum."<br>";

var_dump($sum);
?>
<br>
<br>
<?php
$isComplete = false;
if(!$isComplete){
    print "true";
}
else {
    print "false";
}
?>
<br>
<br>
<?php
$integerrr = (int)9_999_999_999;
echo $integerrr;
?>
<br>
<br>
<?php
$x = floor((0.1+0.7)*10);
echo $x."<br>";
$y = ceil((0.1+0.2)*10);
echo $y."<br>";
?>
<br>
<br>
<?php
$name = "Worker";
echo $name[1]."<br>";
echo $name[-2]."<br>"
       ?>
<br>
<br>
<?php
$xx =1;
$yy =2;
//Heredoc
$text = <<<Text
Line 1 $xx
Line 2 $yy
Line 3
Text;

echo nl2br($text);
//Nowdoc
$text = <<<"Text"
Line 1
Line 2
Line 3
Text;
echo '<br>';
echo nl2br($text);
?>
<br>
<br>
<?php
$xxx = NULL;
var_dump($xxx);
?>
<br>
<br>
<?php
$language =["php","python","java"];
if (isset($language[2])){
    print "good";

    print_r ($language);
    echo "<br>";


}
else {
    $language[] = "C++";
    print_r ($language);
    echo "<br>";
}

$language[] = "Go";
array_push($language, "C", "Ruby", "JavaSkript");

print_r($language);
echo "<br>";

$language[]=[
    "C"=>4,
     "Ruby"=>5,
     "JavaSkript"=>6
];

print_r($language)."<br>";
echo "<br>";

echo $language[7]["C"]."<br>";

$array = [true =>"a", 1=>"b", 1=>"c", 1.8 =>"d"];
print_r($array);
echo "<br>";
$array = ["a" => true, "b" => 1, "c" => 1, "d" => 1.8];
print_r($array);

echo "<br>";
?>
<?php







