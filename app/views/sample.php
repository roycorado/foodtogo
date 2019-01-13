
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title> Calculator </title>
</head>




<body>
	<div class="container">
		<H3> THIS IS A SIMPLE CALCULATOR </H3>
		<form>
			<input type="integer" name="num1" placeholder="enter first number">
			<input type="integer" name="num2" placeholder="enter first number">
			<select name="operator">
				<option>None</option>
				<option>ADD</option>
				<option>SUBTRACT</option>
				<option>MULTIPLY</option>
				<option>DIVIDE</option>
			</select>
			<br>
			<button type="submit" name="submit" value="submit"> Calculate </button>
		</form>
		
	</div>

	<p>The answer is: </p>

	<?php
		if (isset($_GET['submit'])) {
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['operator'];

			switch ($operator) {
				case 'None':
					echo "Must select a method.";
					break;
				case 'ADD':
					echo $result1 + $result2;
					break;
				case 'SUBTRACT':
					echo $result1 - $result2;;
					break;
				case 'MULTIPLY':
					echo $result1 * $result2;
					break;
				
				default:
					echo $result1 / $result2;
					break;
			}
		}

	?>

</body>
</html>