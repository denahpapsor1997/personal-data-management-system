<?php
session_start();
$db=mysqli_connect('localhost','root',"",'preps');
$name="";
$mobile="";
$update=false;
$id=0;
if (isset($_POST['save'])) {
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	mysqli_query($db,"INSERT INTO events (name,mobile) VALUES('$name','$mobile')");
	$_SESSION['message']="data inserted successfully";
	echo "successfully inserted";
	header('location:last.php');
	# code...
}
 
?>