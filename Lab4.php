<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameErr="Name is required";
	}
	else {
		$name = test_input($_POST["name"]);
	}
	if(empty($_POST["email"])){
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
	}
	if(empty($_POST["website"])){
		$websiteErr = "Website is required";
	} else {
		$website = test_input($_POST["website"]);
	}
	if(empty($_POST["gender"])){
		$genderErr = "gender is required";
	} else {
		$gender = test_input($_POST["gender"]);
	}
}
?>
<?php 
for($x=0;$x<=4;$x++)
{
	for($y=0;$y<=$x;$y++){
	echo"*"."";
}
echo "<br>";
}
?>

<?php
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>