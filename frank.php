<!DOCTYPE html>
<html>
<head>
	<title>my php scripts</title>
</head>
<body>

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $website = $comment = $gender =  "";
    
     if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name=test_input($_POST['name']);
	$email=test_input($_POST['email']);
	$website=test_input($_POST['website']);
	$comment=test_input($_POST['comment']);
	$gender=test_input($_POST['gender']);
	//$gender=test_input($_POST['gender']);

	# code...
if (empty($_POST["name"])) {
 $nameErr = "Name is required";
} else {
 $name = test_input($_POST["name"]);
}}
function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

//function papa(){
//	echo "hello papa! <br>";
//papa();
//function familyName($fname){
//	echo "$fname Otieno. <br>";
//}
//familyName("mary");
//familyName("papa");


//function sum($x,$y){
//	$z=$x +$y;
//	return $z;
//}
//echo "10 + 5 =".sum(10,5)."<br>";
?>	
<h2>PHP Form Validation Example</h2>
<form action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email">
<br><br>
 Website: <input type="text" name="website">
 <br><br>
 Comment: <textarea name="comment" rows="5" cols="40"></textarea>
 <br><br>
 Gender:
 <input type="radio" name="gender" value="female">Female
 <input type="radio" name="gender" value="male">Male
 <br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";

?>

<script>
	function hitman()
confirm("Are you sure you want to close this window?");
</script>
<a href="home.html" onclick="return confirm('are you sure you want to logout!');">logout</a>
</body>
</html>