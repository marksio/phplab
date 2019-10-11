<?php
$a="hello";  
$b="hello";  
if ($a==$b) {  
	echo "They are the same";  
}  
else 
	{  
		echo "They are not the same";  
}
?><br><br>

<?php
$a=0;  
$b=10;  
if ($a>$b) 
	{  
		echo "a is greater than b<br>";  
}  
else 
	{  
		echo "a is less than b<br>";  
} 
?><br><br>

<?php
$a=10;  
$b=10;  
if ($a>=$b) 
	{  
		echo "a is greater than or equal to b.";  
}
else{
		echo "a is less than b.";
}
?><br><br>

<?php
$a=0;  
$b=10;  
if ($a<$b) 
	{  
		echo "a is less than b<br>";  
	}  
	else {  
		echo "a is not less than b<br>";  
	}  
?><br><br>

<?php
$a=20;  
$b=10;  
if ($a>=$b) {  
	echo "a is greater than or equal to b<br>";  
} 
?><br><br>

<?php
$a=3;  
$b=3;  
if ($a===$b) {  
	echo "They are identical"; 
}  
else 
	{  
		echo "They are not identical";  
} 
?><br><br>

<?php
$a="hello";  
$b="hello";  
if ($a!=$b) {  
	echo "They are not equal<br>";  
}  else {  
	echo "They are equal<br>";  
} 
?><br><br>

<?php
$a=0;  
$a++;  
echo $a; 
?><br><br>

<?php
$a=5;  
$b=3;  
if ($a > $b) 
	{  
		echo "a is bigger than b";  
}
?><br><br>

<?php
$a=5;  
$b=13;  
if ($a > $b) {  
	echo "a is bigger than b";  
}  
else 
	{ 
		echo "a is NOT bigger than b";  
}
?><br><br>

<?php
$a=6;  
$b=5;  
if ($a > $b) {  
	echo "a is bigger than b";  
}  
elseif ($a == $b) {  
	echo "a is equal to b";  
} 
else {  
	echo "a is smaller than b";  
} 
?><br><br>

<?php
for ($i = 1; $i <= 10; $i++) {  
	echo "".$i."<br>";  
} 
?><br><br>

<?php
$i = 1;  
while ($i <= 10) {  
	echo "".$i++."<br>";  
}
?><br><br>

<?php
$i=2;  
switch ($i) {  
	case 0: echo "i equals 0";  
	break;  

	case 1: echo "i equals 1";  
	break;  

	case 2: echo "i equals 2";  
	break; }
?><br><br>

<?php
$income=50000;
$deductions=2500;
$net=$income - $deductions;
if($net<=25000){
	$tax=$net * 0.05;
}
elseif($net<=50000){
	$tax=$net * 0.07;
}
elseif($net<=100000){
	$tax=$net * 0.09;
}
else{
	$tax=$net * 0.15;
}
echo "Total tax to pay is ".$tax."<br>";
?><br><br>

<?php
$income=5000000;
$deductions=2500;
$net=$income - $deductions;

if($net<=25000){
	$tax=1;
}
elseif($net<=50000){
	$tax=2;
}
elseif($net<=100000){
	$tax=3;
}
else{
	$tax=4;
}
switch($tax){
	case 1 : echo ($net * 0.05);
	break;

	case 2 : echo ($net * 0.07);
	break;

	case 3 : echo ($net * 0.09);
	break;

	case 4 : echo ($net * 0.15);
	break;
}
?><br><br>

<?php
for($x=1;$x<=50;$x++){
echo " ".$x;
}
?><br><br>

<?php
for($x=1900;$x<=2008;$x++){
echo " ".$x;
}
?><br><br>

<?php
for($x=1900;$x<=2010;$x+=10){
echo " ".$x;
}
?><br><br>

<?php
$role="admin";
if($role == "admin"){
	echo"logged in.";
}
else{
	echo"You don't have the rights to access.";
}
?><br><br>

<?php
$balance = 500;
$luckynumber = 5;
if($luckynumber == 5){
	$totalbalance = $balance + 10;
}
else{
	$totalbalance = $balance + 5;
}
echo "Your total balance is: ".$totalbalance."";
?>