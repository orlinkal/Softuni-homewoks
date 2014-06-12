<html>
<head><meta charset=utf-8></meta></head>
<body>
<h2>Homework of Orlin Kalev - PHP Introduction @ softuni.bg</h2>
<?php

//Task 1
//Try to find date time function and print with echo or print functions current date.
echo "<b>Assignment 1:</b> Try to find date time function and print with echo or print functions current date.<br> Result: <br>";
$currentDate = date(d.m.Y);
echo $currentDate . "<br><br>";




//Task 2
//Declare all possible types of variable and then, print their types with echo. You can use function gettype() that return type of given variable.
echo "<b>Assignment 2:</b> Declare all possible types of variable and then, print their types with echo. You can use function gettype() that return type of given variable. <br> Result:<br>";

$string = "String text";
$int = 100;
$float = 65.5638;
$bolean = true;
$myArray = array( "az" => "gotin", "batman" => "pich");

$theString = gettype($string);
$theInt = gettype($int);
$theFloat = gettype($float);
$theBolean = gettype($bolean);
$theArray = gettype($myArray);
echo "The variables are: <br> $string (which is: $theString), <br> $int (which is: $theInt), <br> $float (which is: $theFloat), <br> $bolean (which is: $theBolean), and <br>";
var_dump ($myArray); echo (" (which: $theArray). <br><br> ");




//Task 3
//Write a program that enters the sides of a rectangle (two integers a and b) and calculates and prints the rectangle's area. Input Values are 7 and 20.
echo "<b>Assignment 3:</b> Write a program that enters the sides of a rectangle (two integers a and b) and calculates and prints the rectangle's area. Input Values are 7 and 20.";
$inputLength = 7;
$inputWidth = 20;
echo "Assignment:Write a program that enters the sides of a rectangle (two integers a and b) and calculates and prints the rectangle's area. Input Values are $inputLength and $inputWidth. <br>Result:<br>";
$area = $inputLength * $inputWidth;
echo $area . "<br><br>";




//Task 4
//Write a program that enters 3 points in the plane (as integer x and y coordinates), calculates and prints the area of the triangle composed by these 3 points. Round the result to a whole number. In case the three points do not form a triangle, print "0" as result
echo "<b> Assignment 4:</b> Write a program that enters 3 points in the plane (as integer x and y coordinates), calculates and prints the area of the triangle composed by these 3 points. Round the result to a whole number. In case the three points do not form a triangle, print '0' as result. <br>Result:<br>";

//Here are the values from the assignment
$pointA = array(-5,10);
$pointB = array(25,30);
$pointC = array(60,15);

//You can test the switch statement below by comenting the above values of points A,B & C and de-commenting the following substituting test values
/*
$pointA = array(10,5);
$pointB = array(20,10);
$pointC = array(30,15);
*/

//Formula for area calculaion from URL: http://www.mathopenref.com/coordtrianglearea.html
$area = (( ($pointA[0] * ($pointB[1] - $pointC[1])) + ($pointB[0] * ($pointC[1] - $pointA[1])) + ($pointC[0] * ($pointA[1] - $pointB[1])) )/2);

//If Area is neative - turn to positive
if ($area < 0) {
	$area = $area * (-1);
}

//Rounding the result to a whole number
$areaRounded = round ($area,0);

//Check if points are on a line and a triangle is imposible
switch ($pointA){
	//case all are on x axis
	case $pointA[0] == $pointB[0] && $pointA[0] == $pointC[0]:
		$areaRounded = 0;
		echo "$areaRounded - all points are on a line in the x axis";
		break;
	//case all are on y axis
	case $pointA[1] == $pointB[1] && $pointA[1] == $pointC[1]:
		$areaRounded = 0;
		echo "$areaRounded - all points are on a line in the y axis";
		break;
	//case all are on an inclined line
	case ($pointA[0] / $pointA[1]) == ($pointB[0] / $pointB[1]) && ($pointA[0] / $pointA[1]) == ( $pointC[0] / $pointC[1]):
		$areaRounded = 0;
		echo "$areaRounded - all points are on a straight line at certain angle from the x axis";
		break;
	//Default case is to print the result for $area on the screen
	default:echo "$areaRounded <br><br>";
}




//Task 5
//Declare a Boolean variable called isFemale and assign an appropriate value corresponding to your gender. Print it on the web page.
echo "<b>Assignment 5:</b> Declare a Boolean variable called isFemale and assign an appropriate value corresponding to your gender. Print it on the web page.<br>Result:<br>";
//defining the variables
$isFemale = false;
$gender;
//setting an if statement to set the values of the gender variable depending onrthe isFemale bolean values
if ($isFemale === false) {
	$gender = "Male";
} else {
	$gender = "Female";
}
//printing the result on the screen
echo "The value of the variable for gender is: $isFemale, therefore my gender is: $gender <br><br>";




// Task 6
// Declare two string variables and assign them with following value: I asked a girl out and she said – “I don't know”. Does she mean yes or no? Do the above in two different ways: with and without using quoted strings. Print the variables to ensure that their value was correctly defined.
echo "<b>Assignment 6:</b> Declare two string variables and assign them with following value: I asked a girl out and she said – \“I don't know\”. Does she mean yes or no? Do the above in two different ways: with and without using quoted strings. Print the variables to ensure that their value was correctly defined.<br>Result:<br>";
//declaring string with single quotes,using \ for escape
$var1 = 'I asked a girl out and she said – “I don\'t know”. Does she mean yes or no?';
//declaring string with double quotes
$var2 = "I asked a girl out and she said – \"I don't know\". Does she mean yes or no?";
//delcaring heredoc string
$var3 = <<<ORLIN
I asked a girl out and she said – “I don't know”. Does she mean yes or no?
ORLIN;
//declrating nowdoc string
$var4 = <<<'ORLIN'
		I asked a girl out and she said – “I don't know”. Does she mean yes or no?
ORLIN;

//printing the results on the screen	
echo $var1 . " - where string is declared with sngle quotes. <br>";
echo $var2 . " - where string is declared with double quotes. <br>";
echo $var3 . " - where string is declared with heredocs. <br>";
echo $var4 . " - where string is declared with nowdocs. <br><br>";




//Task 7
//You can pretend that a variable or value is of a different type by using a type cast. Try to cast floating point number to integer and then print it on the web page.
echo "<b>Assignment 7:</b> You can pretend that a variable or value is of a different type by using a type cast. Try to cast floating point number to integer and then print it on the web page.<br>Result:<br>";
$varFloatInitial = 12.638;
echo "The initial value of the variable is: $varFloatInitial and this variable is a floating point number.<br>";
//type casting with ()
$varFloatInitial = (int) $varFloatInitial;
echo "The type casted with parentesies into an integer results as: $varFloatInitial <br>";
$varFloatInitial = 12.638;
//type casting with settype function
settype($varFloatInitial,int);
echo "The type casted with settype function into an integer results as: $varFloatInitial <br><br>";




//Task 8
//Try to print html tags as text. Use build in functions in PHP.
echo "<b>Assignment 8:</b> Try to print html tags as text. Use build in functions in PHP. <br>Result:<br>";
$htmlTag = "<b>Hello World</b>";
echo "Here is the HTML tag as HTML: $htmlTag <br>";
$htmlConveted = htmlspecialchars($htmlTag);
echo "Here is the HTML converted as text: $htmlConveted";
echo "<br><br>";




//Task 9
//Write a Boolean expression that checks for given integer if it can be divided (without remainder) by 7 and 5 in the same time.
echo "<b>Assignment 9:</b> Write a Boolean expression that checks for given integer if it can be divided (without remainder) by 7 and 5 in the same time.<br>Result:<br>";
$n = array(35,0,10,7,18,72);
 
 //declaring my own testing function
function myFunction ($number) {
$testing7 = is_int($number / 7);
$testing5 = is_int($number / 5);
	if ($testing7 === true && $testing5 === true) {
		return true;
	} else {
		return false;
	}
}

//creating a loop to test all of the entries of the array
for ($i = 0; $i < count($n); $i++) {
	$testRun = myFunction($n[$i]);
	if ($testRun === true) {
		echo "The number $n[$i] is divisible by 5 and by 7. <br>";
	} else {
		echo "The number $n[$i] is NOT divisible by 5 and by 7.<br>";
	}
}
echo "<br>";




//Task 10
//Write an expression that checks for given integer if its third digit from right-to-left is 7.
echo "<b>Assignment 10:</b> Write an expression that checks for given integer if its third digit from right-to-left is 7.<br>Result:<br>";
$ex10Array = array (5,701,9703, 877,777877,9999799);
echo "The initial array is: ";
print_r($ex10Array);
echo "<br>";

//Defining my function to count the digits (I couldn't find a build-in one in PHP)
function countDigits($number) {
	return strlen ((string) $number);
}

//Defining my testing function
function my7TestFunction($input) {
	$result = substr($input, -3, 1);
	
	if ( countDigits($input) <=2 ) {
		echo "Error! The number $input has less than 3 digits in it! <br>"; 
	} else {
	
		if ($result == 7) {
			echo "The third digit from right-to-left in the number $input is 7. <br>"; 
		} else {
			echo "The third digit from right-to-left in the number $input is not 7, but is $result. <br>"; 
		}
	}
}

//Generating a loop to go through the whoole array and check with my test function
for ($i=0; $i < count($ex10Array); $i++) {
	my7TestFunction($ex10Array[$i]);
}
echo "<br><br>";




//Task 11
//Write a program that reads an integer number n from the input and prints all the numbers in the interval [1..n], each on a single line. Note that you may need to use a for-loop.
echo "<b>Assignment 11:</b> Write a program that reads an integer number n from the input and prints all the numbers in the interval [1..n], each on a single line. Note that you may need to use a for-loop.<br>Result:<br>";
$n = 7;

for ($i = 0; $i < $n; $i++) {
	echo ($i + 1) . "<br>";
}
echo "<br>";




//Task 12
//Write a program that reads a number n and prints on the web page the first n members of the Fibonacci sequence (at a single line, separated by spaces) : 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, …. Note that you may need to learn how to use loops.
echo "<b>Assignment 12:</b> Write a program that reads a number n and prints on the web page the first n members of the Fibonacci sequence (at a single line, separated by spaces) : 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, …. Note that you may need to learn how to use loops.<br>Result:<br>";
$n = 60;
echo "The Fibonacci numbers less than $n are: ";
$r1 = 0; if ($r1 <= $n) { echo "$r1 ,"; }
$r2 = 1; if ($r2 <= $n) { echo $r2; }

for ($r2New; $r2New < $n;) {
	$r2New = $r2 + $r1;
	if ($r2New > $n) { break; }
	echo " ,$r2New";
	$r1 = $r2;
	$r2 = $r2New;
	
}
?>
<br><br><br><br><br><br>
</body>
</html>