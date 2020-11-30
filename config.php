<?php
session_start();
$db = mysqli_connect('localhost','root','','cynthia');
$name="";
$age="";
$id=0;
$update=false;
if (isset($_POST['save'])) {
	$name=$_POST['name'];
	$age=$_POST['age'];
	mysqli_query($db, "INSERT INTO users(name,age) values('$name','$age')");
	$_SESSION['message']="address saved";
	echo "data inserted successfully";
	header('location:index.php');
	# code...
}
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	mysqli_query($db,"UPDATE users SET name='$name',age='$age' WHERE id='$id'");
	$_SESSION['message']="address updated";
	echo "data updated successfully";
	header('location:index.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM users WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	echo "data deleted successfully";
	header('location: index.php');
}
?>