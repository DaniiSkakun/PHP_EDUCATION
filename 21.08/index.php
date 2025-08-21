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