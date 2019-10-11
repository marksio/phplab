<?php
$color = array('white','green','red');
foreach($color as $c)
{
	echo "$c ";
}
sort($color);
echo "<ul>";
foreach($color as $y)
{
	echo"<li>$y</li>";
}
echo "</ul>";
?>

<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu);//The asort() function sorts an associative array in ascending order, according to the value.
foreach($ceu as $capital => $country){
	echo "The capital of ".$capital." is ".$country."<br>";
}
?><br><br>

<?php
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($name);
foreach($name as $name=>$age){
	echo"$name"." "."$age"." ";
}
?>
<br><br>
<?php
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($name);// Use the ksort() function to sort an associative array in ascending order, according to the key.
foreach($name as $name=>$age){
	echo"$name"." "."$age"." ";
}
?><br><br>

<?php
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($name);//Use the arsort() function to sort an associative array in descending order, according to the value.
foreach($name as $name=>$age){
	echo"$name"." "."$age"." ";
}
?><br><br>

<?php
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($name);// Use the ksort() function to sort an associative array in descending order, according to the key.
foreach($name as $name=>$age){
	echo"$name"." "."$age"." ";
}
?><br><br>

<?php
$number=array('1','2','3','4','5');
foreach($number as $no){
	echo"$no"." ";
}
$insert="$";
echo"<br>After inserted $ will be: "."<br>";
array_splice($number,3,0,$insert);//array_splice($number给等下要print出来的，3=第几个位置要塞进"$", 0=它这个“$”会占据多少位置（如果放2出来的就只是1,2,3,$), $insert=你要塞什么进去)
foreach($number as $no){
	echo"$no"." ";
}
?><br><br>

<?php
echo implode(",",range(200,250,4))."<br><br><br>";//放进逗号，range(200,250,4)是从200到250，然后之写出可以除以4的号码
?><br><br>

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73"; 
$temp_array = explode(',',$month_temp);//拿出逗号
$total_temp=0;//要算出$month_temp的总数
$temp_array_length=count($temp_array);//要算出$month_temp有多少个号码，总共有30个
foreach($temp_array as $x){//总数+=
	$total_temp+=$x;
}
$average_temp=$total_temp/$temp_array_length;//average的算法
echo"The Average of the temp is: ".$average_temp."<br>";
echo"The lowest temps are: ";
sort($temp_array);
for($i=0;$i<7;$i++){
	echo $temp_array[$i];
}
echo"<br>The highest temps are: ";
for($i=($temp_array_length-7); $i<($temp_array_length); $i++){
	echo $temp_array[$i]." ";
}

?><br><br>

<?php   
function factorial_of_a_number($n)   
{   
  if($n ==0)   
    {   
       return 1;   
    }   
  else    
    {      
       return $n * factorial_of_a_number($n-1);   
    }   
    }   
print_r(factorial_of_a_number(4)."\n");   
?><br><br>

<?php   
function IsPrime($n)   
{   
 for($x=2; $x<$n; $x++)   
   {   
      if($n %$x ==0)   
          {   
           return 0;   
          }   
    }   
  return 1;   
   }   
$a = IsPrime(18);   
if ($a==0)   
echo 'This is not a Prime Number.....'."\n";   
else   
echo 'This is a Prime Number..'."\n";   
?><br><br>

<?php   
function reverse_string($str1)   
{   
 $n = strlen($str1);   
 if($n == 1)   
   {   
    return $str1;   
   }   
 else   
   {   
   $n--;   
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);   
   }   
}   
print_r(reverse_string('1234')."\n");   
?><br><br>

<?php   
function array_sort($a)   
{   
 for($x=0;$x< count($a);++$x)   
  {   
    $min = $x;   
  for($y=$x+1;$y< count($a);++$y)   
   {   
     if($a[$y] < $a[$min] )    
     {   
       $temp = $a[$min];   
       $a[$min] = $a[$y];   
       $a[$y] = $temp;   
     }   
    }   
  }   
 return $a;   
 }   
$a = array(51,14,1,21,'hj');   
print_r(array_sort($a));   
?> <br><br>

<?php   
function is_str_lowercase($str1)   
   {   
    for ($sc = 0; $sc < strlen($str1); $sc++) {   
          if (ord($str1[$sc]) >= ord('A') &&   
          ord($str1[$sc]) <= ord('Z')) {   
      return false;   
         }   
         }   
      return true;   
       }   
var_dump(is_str_lowercase('abc def ghi'));   
var_dump(is_str_lowercase('abc dEf ghi'));   
?>   
 
Question 6 
<?php   
function check_palindrome($string)    
{   
  if ($string == strrev($string))   
      return 1;   
  else   
      return 0;   
}   
echo check_palindrome('madam')."\n";   
?> 
 
 