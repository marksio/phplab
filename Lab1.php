<?php
echo "My first PHP script";
?><br><br>

<?php
$x=5 /* + 15 */ +5;
echo $x;
?><br><br>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
ecHO "Hello World!<br>";
?><br><br>

<?php
$color = "red";
echo "My car is ".$color."<br>";
echo "My house is ".$COLOR."<br>";
echo "My boat is ".$coLOR."<br>";
?><br><br>

<?php
$T_199="Myself";
echo"I love ".$T_199." !";
?><br><br>

<?php
$number1=100;
$number2=0.933;
$result= $number1 * $number2;
echo $result;
?><br><br>

<?php
$x=5;
function testing(){
	echo"Variable x inside function is: ".$x."<br>";
}
testing();
echo"Variable x outside function is ".$x."<br>";
?><br><br>

<?php
function localvariable(){
	$x=5;
	echo "".$x."<br>";
}
localvariable();

echo $x;
?><br><br>

<?php
$x =5;
function globalvariable(){
	global $x;
	echo "".$x."<br>";
}
globalvariable();

echo $x;
?><br><br>

<?php
function testing1(){
	static $x = 0;
	echo $x;
	$x++;
}
testing1();
testing1();
testing1();
?><br><br>
