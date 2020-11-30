<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<meta charset="utf-8">
	<title>form validation</title>
	<style type="text/css">
		h1 {
			margin-bottom: 20px;
		}
		input,label {
			margin-top: 7px;margin-bottom: 7px; color: 000066; font-size: 18px;padding-right: 7px;
		}
		input[type='checkbox']{
			margin-left: 5px;
		}
		.note{
			color: #ff0000;
		}
		.success_msg{
			color: #006600;
		}
	</style>
</head>
<body>
<div class="container">
	<h1>Travel reservation  form</h1>
	<form id="registration_form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label>Full name <span class="note">*</span>:</label>
	<input type="text" name="full_name" placeholder="FirstName LastName" autofocus="autofocus" value="<?php echo $_POST['full_name']; ?>">
	<?php echo "<p class='note'>".$msg_name."</p>";?>
	<?php echo "<p class='note'>".$msg2_name."</p>";?>	
	</form>
	
</div>
<?php
if (isset($_POST['submit'])) {
	if (empty($_POST['full_name'])) {
		# code...
	}
	# code...
}

?>
</body>
</html>