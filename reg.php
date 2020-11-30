<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$mobile = $_POST['number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$file = $_FILES['file']['name'];
	$filename= $_FILES['file']['tmp_name'];

	$connect = mysqli_connect("localhost","root","","kip");

	if ($connect) {

		$fileupload =move_uploaded_file($filename, '/xampp/htdocs/papa'.$file);

		if ($fileupload) {

			$query = mysql_query($connect,"insert into users(name,mobile,email,password,gender,file) values('$name','$mobile','$email','$password','$gender','$file')");
		
		}else{
			echo "Failed to upload file";
		}


		

	}else{

		echo "connection failed";
	}


}

 ?>