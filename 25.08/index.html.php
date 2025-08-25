<html>
<head>

</head>
<body>
<?php $score = 90;?>
<?php if ($score >= 90): ?>
<strong style="color:rebeccapurple;">A</strong>
<?php elseif ($score >= 80): ?>
<strong style="color:green;">B</strong>
<?php elseif ($score >= 70): ?>
<strong style="color:yellow;">C</strong>
<?php elseif ($score >= 60): ?>
<strong style="color:orange;">D</strong>
<?php else: ?>
    <strong style="color:red;">F</strong>
<?php endif; ?>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<?php
$i=0;

while (true){
    while ($i >10){
        break 2;
    }
    echo $i++;
}
echo "<br>";
echo "<br>";
$i=0;
while (true){
    if ($i>=15){
        break ;
    }
    while ($i >10){
        break ;
    }
    echo $i++;
}
echo "<br>";
echo "<br>";
$programminglanguages = ["Java", "Python","C++","GO","PHP","R"];
foreach ($programminglanguages as $language){
    echo $language."<br>";
}
echo "<br>";
foreach ($programminglanguages as $language){
    $language = "PHP";

}
print_r($programminglanguages);
echo "<br>";
foreach ($programminglanguages as &$language){
    $language = "PHP";

}
print_r($programminglanguages);
echo "<br>";