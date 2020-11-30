<?php  include('time.php');

if (isset($_GET['userid'])) {
	$mobile=$_GET['userid'];
	$query=mysqli_query($db,"delete from events where id='$mobile' ");
	if ($query) {
		
	}
}
if(isset($_POST['user_id'])){
	$userid=$_POST['user_id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$query=mysqli_query($db,"update events set name='$name', mobile='$mobile' where id='$userid' ");
	if ($query) {
		
	}


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>my code</title>
	<style type="text/css">
		#papa{
			margin-left: 20px;
			margin-bottom: 40px;
			margin-top: 30px;
			float: right;
		}
		ul li {
			padding: 20px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<ul class="nav nav-pills" id="papa">
 <li class="active"><a href="#">Home</a></li>
 <li><a href="#">Hospital</a></li>
 <li><a href="#">Doctors</a></li>
 <li><a href="#"></a></li>
 <li class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
 Services<span class="caret"></span>
 </a>
 <ul class="dropdown-menu">
 <li><a href="#">About us</a></li>
 <li><a href="#">Help</a></li>
 <li class="divider"></li>
 <li><a href="#">More description</a></li>
 </ul>
 </li>
 <li><a href="#">Settings</a></li>
</ul>
	<?php 
	$result=mysqli_query($db,"SELECT * FROM events ");
	//if ($result) 
		{ ?>
		<table class="table table-striped"><thead><th>Name</th><th>Mobile</th> <th colspan="2">Action</th></thead>
		<?php
		while ($row=mysqli_fetch_assoc($result)) {
			$var=$row['id'];
			?>
			<tr><td><?php echo $row['name'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete user?')" href="last.php?userid=<?php echo $row['id'];?>">delete</a></td>
			<td><a class="btn btn-primary" href="#<?php echo "w".$var;?>" data-target="" data-toggle="modal">update</a></td>
			</tr>
<div class="modal fade" id="<?php echo "w".$var;?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="text-center">Update User Data</h6>
				<button type="button" class="close" data-dismiss="modal">&times</button>
			</div>
			<div class="modal-body">
				<form action="last.php" method="post">
					<div class="form-group">
						<input type="number" name="user_id" value="<?php echo $row['id'];?>" hidden="true">
						<label>Name</label>
						<input type="text" name="name" required="" minlength="3" value="<?php echo $row['name'];?>"   class="form-control">
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="number" name="mobile"  required="" value="<?php echo $row['mobile'];?>"   class="form-control">
					</div>
					<div class="text-right"><button class="btn btn-success" type="submit">Update</button></div>
				</form>
			</div>
		</div>
	</div>
	
</div>
			<?php

			# code...
		}
		?>
		</table><?php
		# code...
	}
	
	?>
	<form action="last.php" method="post" enctype="">
		<label for="name">Name:</label>
		<input type="text" name="name" value="" required="required"> <br>

		<label for="mobile">Mobile:</label>
		<input type="number" name="mobile" value="required" > <br>

		<button type="submit" name="save">save</button>
	</form>
</body>
</html>
