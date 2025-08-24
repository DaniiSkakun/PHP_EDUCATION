<?php

$x = 'Hello';
$x .= 'World';
echo $x;
?>
<br>
    <br>
<?php
$x = 4;
$y = 5;
var_dump($x!==$y);
echo "<br>";
var_dump($x<=>$y);
echo "<br>";
?>
<?php

$x = 'HelloWorld';
$y = strpos($x, 'H');
if($y===false){
    echo "Not";

}else{
    echo"Yes". $y;
}

echo "<br>";


$result = $y === false ? 'Not' : "Yes" . $y;

echo $result;
echo "<br>";

$x = null;
$y = $x ??  "HelloWorld";
var_dump($y);

echo "<br>";
echo "<br>";


$x=5;
$x++;
echo $x;
echo "<br>";
$x--;
echo $x++;
echo "<br>";
echo ++$x;
echo "<br>";

$x = null;
echo --$x;
echo "<br>";
echo ++$x;
echo "<br>";


$x = false;
$y = "десять";

if ($x === false && $y === "десять") {
echo "Good";
    echo "<br>";
}

$a = true and false;
$b = true && false;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";

$a = false or true;
$b = false || true;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$x = true;
$y = false;
function hello()
{
echo "Hello";
return false;
}
var_dump($x || hello());
echo "<br>";
echo "<br>";
$x = false;
$y = false;
function hello1()
{
    echo "Hello";
    return false;
}
var_dump($x || hello1());
echo "<br>";
echo "<br>";
$x = true;
$y = false;
function hello2()
{
    echo "Hello";
    return false;
}
var_dump($x && hello2());
echo "<br>";
echo "<br>";
$x = false;
$y = false;
function hello3()
{
    echo "Hello";
    return false;
}
var_dump($x && hello3());
echo "<br>";
echo "<br>";
$x = false;
$y = false;
function hello4()
{
    echo "Hello";
    return false;
}
var_dump($x && hello4()||true);
echo "<br>";
echo "<br>";
$x = 6; //110
$y = 3; //011

var_dump(~$x); //-7
echo "<br>";
var_dump(~$x&$y); //1
echo "<br>";
var_dump($x&$y);//2
echo "<br>";
var_dump($x|$y);//7
echo "<br>";
var_dump($x^$y);//5
echo "<br>";
var_dump($x<<$y);//110000 // 48
echo "<br>";
var_dump($x>>$y);//0
echo "<br>";
var_dump(~$x|$y);
echo "<br>";
var_dump(~$x<<60);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$x = ["A", "B", "C"];
$y = ["D", "E", "F"];
$z = $x+$y;
var_dump($z);
echo "<br>";
echo "<br>";
$x = ["A", "B", "C"];
$y = ["D", "E", "F","G","J"];
$z = $x+$y;
var_dump($z);