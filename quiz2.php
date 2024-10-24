<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta um</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<?php
		session_start();

		$_SESSION["$cont"] = $_POST["$cont"];

	 ?>

</head>
<body style="margin: 37px;">
	<form name="quiz" method="post" action="quiz2.php">
		<?php echo $_SESSION[$cont]; ?>
		<br><br>
		<label> TESTEEEEEEEEEEEEEEEEEEEEEEEEEEEE</label>
		<br><br>
		<input type="submit" name="Patrick" value="Patrick">
		<input type="submit" name="Sandy" value="Sandy">
		<input type="submit" name="Seu Serigueijo" value="Seu Serigueijo">
		<input type="submit" name="Lula Molusco" value="Lula Molusco">
	</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>