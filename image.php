<?php
$db=mysqli_connect('localhost','root',"",'image_upload');
$update=false;
$msg="";
if (isset($_POST['upload'])) {
	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = $_POST['image_text'];

  	// image file directory
  	$target = "/xampp2/htdocs/papa/".basename($image);

  //	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	mysqli_query($db, "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')");
  	// execute query
 // 	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  	if(isset($_GET['edit'])){
$id=$_GET['edit'];
$update=true;
$record=mysqli_query($db,"SELECT * FROM images WHERE id=$id");
if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$image = $n['image']['name'];
			$image_text = $n['image_text'];	
} }
  }
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM images WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	echo "data deleted successfully";
	header('location: image.php');
}
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$image=$_FILES['image']['name'];
	$image_text =$_POST['image_text'];
	$target = "/xampp2/htdocs/papa/".basename($image);
	mysqli_query($db,"UPDATE images  SET image='$image',image_text='$image_text' WHERE id='$id'");
	mysqli_query($db, $sql);
	$_SESSION['message']="address updated";
	echo "data updated successfully";
	header('location:image.php');
	# code...
}
  $result = mysqli_query($db, "SELECT * FROM images");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>my images</title>
	<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>

<body>
	<div id="content">
		<table>
			<thead>
				<tr>
					<th>image</th>
					<th>image_text</th>
					
				</tr>
			</thead>
		<?php
    while ($row = mysqli_fetch_array($result)) { ?>
      
      	<tr>
      <td>	<img src="<?php echo($row['image']);?>"></td>
      <td>	<?php echo "<p>".$row['image_text']."</p>";?></td>
      	</tr>
      <td>
				<a href="image.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="image.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
      <?php
    }
    ?>
</table>
	<form method="POST" action="image.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<?php if ($update==true): ?>
  			<button type="submit" name="update">update</button>
  		<?php else: ?>
  		<button type="submit" name="upload">upload</button>
  	<?php endif?>
  	</div>
  </form>
</div>

</body>
</html>