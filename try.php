<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$connect = mysqli_connect("localhost","root","","papsor");
	if ($connect) {
		$querry=mysqli_query($connect,"insert into trials(name,mobile,email,password) values('$name','$mobile','$email','$password') ");
		//  while ($row = mysql_fetch_array ($querry)){
	//	echo "connection successfully";
	}
	$sql ="SELECT * FROM trials";
	$sqp="DELETE * FROM trials where name= $name";
	$result=$connect ->query($sql);
	//if ($result ->num_rows > 0) {
	//	?>
		<table border="2px"><th>Name</th><th>Mobile</th><th>email</th>
		<?php
		while ($row=$result ->fetch_assoc()) { ?>
			
			<tr>
			echo('<td>'.$row["name"].'</td>');
			echo('<td>'.$row["email"].'</td>');
			echo('<td>'.$row["mobile"].'</td>');
			

			<a href="delete_name.php? id=<? echo $rows['name'];?>">delete</a>
			</tr>
			

		<?php} ?> 
		
		</table>
		<?php
	}
		
	//else{
		echo "0 results";
	}
	$connect->close();

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>paapa</title>
</head>
<body>

<button type="button" id="del" value="delete">Delete</button>
<button type="button" id="add" value="add">Add</button>
<button type="button" id="update" value="update">Update</button>
</body>
</html>