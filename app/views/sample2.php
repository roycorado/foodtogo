<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Day of Week </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- CSS -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<!-- JS -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<h3 class="h3Sample2"> Hello </h3>
	<?php
		
		$dayOfWeek = date('w');
		
		
			switch ($dayOfWeek) {
				case $dayOfWeek == 0:
					echo "<h3 class='h3Sample2'> Today is Sunday! </h3>";
					break;
				case $dayOfWeek == 0:
					echo "<h3 class='h3Sample2'> Today is Monday! </h3>";
					break;
				case $dayOfWeek == 0:
					echo "<h3 class='h3Sample2'> Today is Tuesday! </h3>";
					break;
				case $dayOfWeek == 0:
					echo "<h3 class='h3Sample2'> Today is Wednesday! </h3>";
					break;
				case $dayOfWeek == 0:
					echo "<h3 class='h3Sample2'> Today is Thursday! </h3>";
					break;
				case $dayOfWeek == 0:
					echo "<h3 class='h3Sample2'> Today is Friday! </h3>";
					break;
				
				default:
					echo "<h3 class='h3Sample2'> Today is Saturday! </h3>";
					break;
			}

	?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div  class="container-fluid" >
		<div class="container">
			<h3 class="text-center"> Simple Calculator </h3>
			<form class="form-group">
				<input type="integer" name="num1" placeholder="Enter first number" class="form-control">
				<input type="integer" name="num2" placeholder="Enter second number" class="form-control">
				<select name="operator" class="form-control">
					<option> NONE </option>
					<option> ADD </option>
					<option> SUBTRACT </option>
					<option> MULTIPLY </option>
					<option> DIVIDE </option>
				</select>
				<button name="submit" type="submit" value="submit" class="btn btn-outline-success bg-primary btn-block"> Compute </button>
				
			</form>
			
		</div>

<?php

		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$operator = $_GET['operator'];

		echo "The answer is :";;

		if ($operator == "NONE") {
			echo "Please enter a number to compute.";
		} elseif ($operator == "ADD") {
			echo $num1 + $num2;
		} elseif ($operator == "SUBTRACT") {
			echo $num1 - $num2;
		} elseif ($operator == "MULTIPLY") {
			echo $num1 * $num2;
		} else {
			echo $num1 / $num2;
		}

?>
		
	</div>

</body>
</html>