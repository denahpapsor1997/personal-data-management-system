<?php  include('config.php'); 
if(isset($_GET['edit'])){
$id=$_GET['edit'];
$update=true;
$record=mysqli_query($db,"SELECT * FROM users WHERE id=$id");
if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['age'];	
}}
?>

<!DOCTYPE html>
<html>
<head>
	<title>my records</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	<?php $result=mysqli_query($db,"SELECT * FROM users");  ?> 
	<table width="200px;" border="2px;">
		<thead>
			
				<th>name</th>
				<th>age</th>
				<th colspan="2">action</th>
			
		</thead>
	
	<?php while ($row=mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['age'];?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="config.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
		
	<?php } ?>
</table>
		
	<form action="config.php" method="post" id="fom">
		<div id="form">
			<label>Id</label>
		<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<label>Name</label>
			<input type="text" name="name" id="name" value="<?php echo $name; ?>" required="required"><br>

			<label>age</label>
			<input type="text" name="age" id="age" value="<?php echo $age ;?>" required="required"><br>
			<?php if($update == true):?>
			<button type="submit" name="update">update</button>
			<?php else: ?>
				<button type="submit" name="save">save</button>
			<?php endif?>

		</div>
	</form>

</body>
</html>
<style type="text/css">
	#form {
		width: 500px;
		margin-left: 20px;
	}
	#fom {
		width: 500px;
	}
</style>