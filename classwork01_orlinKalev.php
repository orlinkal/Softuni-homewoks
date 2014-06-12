<html>
<head>
<title>Hi</title>
</head>
<body>

<?php
//task 1
?><br> task 1 <br><br> <?php
$a = date("d.m.Y");
echo $a;


//task 2
?><br> task 2 <br><br> <?php
echo gettype($a);

//task 3
?><br> task 3 <br><br> <?php
$a = 7;
$b = 20;
$area1 = $a * $b;
echo $area1;

//task 4
?><br> task 4-a <br><br> <?php

$o = array("x" => -5, "y" => 10);
$p = array("x" => 25, "y" => 30);
$q = array("x" => 60, "y" => 15);

$result = 0.5 * (($o["x"]*($p["y"]-$q["y"]))+($p["x"]*($q["y"]-$o["y"]))+($q["x"]*($o["y"]-$p["y"])));

if ($result <0) { $result = $result * (-1); }
echo $result;


?><br> task 4-b <br> <?php
$o = array("x" => 1, "y" => 1);
$p = array("x" => 1, "y" => 1);
$q = array("x" => 1, "y" => 1);

$result = 0.5 * (($o["x"]*($p["y"]-$q["y"]))+($p["x"]*($q["y"]-$o["y"]))+($q["x"]*($o["y"]-$p["y"])));

if ($result <0) { $result = $result * (-1); }
echo $result;

//task 5
?><br><br> task 5 <br><br> <?php

$isFemale = male;
$gender = array ("male", "female");
$a = 0;
if ($isFemale === true) { $a = 1; }
echo "Orlin's gender is: $gender[$a]";
?>


<?php 
//experiment of orlin
echo "ORlin is cool";
$var1 = 1;
$result = $var1 * 5;
echo $result;

?>

<?php 
echo "test";
?>
</body>
</html>