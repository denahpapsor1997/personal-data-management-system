<!DOCTYPE html>
<html>
<head>
	<title>my bootsrap page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<?php
	$x=1;
	while($x <= 5){
	echo " $x <br>";
    $x++;
    
}
	?>
	<?php
	for($x=0;$x<=10;$x++){
     echo"$x <br>" ;

}
   
	?>
	<div class="dropdown">
 <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"
 data-toggle="dropdown">
 Topics
 <span class="caret"></span>
 </button>
 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">Java</a>
 </li>
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">Data Mining</a>
 </li>
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">
 Data Communication/Networking
 </a>
 </li>
 <li role="presentation" class="divider"></li>
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">Separated link</a>
 </li>
 </ul>
</div>
<div class="dropdown">
 <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"
 data-toggle="dropdown">Topics
 <span class="caret"></span>
 </button>
 <ul class="dropdown-menu pull-right" role="menu"
 aria-labelledby="dropdownMenu1">
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">Java</a>
 </li>
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">Data Mining</a>
 </li>
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">
 Data Communication/Networking
 </a>
 </li>
 <li role="presentation" class="divider"></li>
 <li role="presentation">
 <a role="menuitem" tabindex="-1" href="#">Separated link</a>
 </li>
 </ul>
</div>
<form class="form-horizontal" role="form">
 <div class="form-group">
 	<label class="col-sm-2 control-label">Focused</label>
 <div class="col-sm-10">
 <input class="form-control" id="focusedInput" type="text"
 value="This is focused...">
 </div>
 </div>
 <div class="form-group">
 <label for="inputPassword" class="col-sm-2 control-label">
 Disabled
 </label>
 <div class="col-sm-10">
 <input class="form-control" id="disabledInput" type="text"
 placeholder="Disabled input here..." disabled>
 </div>
 </div>
 <fieldset disabled>
 <div class="form-group">
 <label for="disabledTextInput" class="col-sm-2 control-label">
 Disabled input (Fieldset disabled)
 </label>
 <div class="col-sm-10">
 <input type="text" id="disabledTextInput" class="form-control"
 placeholder="Disabled input">
 </div>
 </div>
 <div class="form-group">
 <label for="disabledSelect" class="col-sm-2 control-label">
 Disabled select menu (Fieldset disabled)
 </label>
 <div class="col-sm-10">
 <select id="disabledSelect" class="form-control">
 <option>Disabled select</option>
 </select>
 </div>
 </div>
 </fieldset>
 <div class="form-group has-success">
 <label class="col-sm-2 control-label" for="inputSuccess">
 Input with success
 </label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="inputSuccess">
 </div>
 </div>
 <div class="form-group has-warning">
 <label class="col-sm-2 control-label" for="inputWarning">
 Input with warning
 </label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="inputWarning">
 </div>
 </div>
 <div class="form-group has-error">
 <label class="col-sm-2 control-label" for="inputError">
 Input with error
 </label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="inputError">
 </div>
 </div>
 <button type="button" class="btn btn-default btn-xs">
 <span class="glyphicon glyphicon-user"></span> User
</button>
<button type="button" class="btn btn-default btn-xs">
 <span class="glyphicon glyphicon-user"></span> User
</button>
</body>
</html>