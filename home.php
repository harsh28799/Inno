<?php

	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	body{
		background-color: slategray;
		color: white;
	}
	h1{
		text-align: center;
	}
	

	</style>
</head>
<body>

	<h1>FEEDBACK FORM</h1>

	<form method="post" action="process.php">

		<fieldset>
			<legend><strong><h3>1.How well do you rate Inno 2k18</h3></strong></legend>
			<input type="radio" name="q1" value="1">1. 0-3<br>
			<input type="radio" name="q1" value="2">2. 4-6<br>
			<input type="radio" name="q1" value="3">3. 6-8<br>
			<input type="radio" name="q1" value="4">4. 9-10<br>
		</fieldset>


		<fieldset>
			<legend><strong><h3>2.How well do you rate Inno 2k18</h3></strong></legend>
			<input type="radio" name="q2" value="1">1. 0-3<br>
			<input type="radio" name="q2" value="2">2. 4-6<br>
			<input type="radio" name="q2" value="3">3. 6-8<br>
			<input type="radio" name="q2" value="4">4. 9-10<br>
		</fieldset>


		<fieldset>
			<legend><strong><h3>3.How well do you rate Inno 2k18</h3></strong></legend>
			<input type="radio" name="q3" value="1">1. 0-3<br>
			<input type="radio" name="q3" value="2">2. 4-6<br>
			<input type="radio" name="q3" value="3">3. 6-8<br>
			<input type="radio" name="q3" value="4">4. 9-10<br>
		</fieldset>


		<fieldset>
			<legend><strong><h3>4.How well do you rate Inno 2k18</h3></strong></legend>
			<input type="radio" name="q4" value="1">1. 0-3<br>
			<input type="radio" name="q4" value="2">2. 4-6<br>
			<input type="radio" name="q4" value="3">3. 6-8<br>
			<input type="radio" name="q4" value="4">4. 9-10<br>
		</fieldset>

		<fieldset>
			<legend><strong><h3>5.Would you like to visit next year?</h3></strong></legend>
			<input type="radio" name="q5" value="1">1. no<br>
			<input type="radio" name="q5" value="2">2. yes<br>
			<input type="radio" name="q5" value="3">3. may be<br>
			<input type="radio" name="q5" value="4">4. Can't say at the moment<br>
		</fieldset>

		<fieldset>
			<legend><strong><h3>6.Would you like to spread the word about Innovision?</h3></strong></legend>
			<input type="radio" name="q6" value="1">1. no<br>
			<input type="radio" name="q6" value="2">2. yes<br>
			<input type="radio" name="q6" value="3">3. may be<br>
			<input type="radio" name="q6" value="4">4. Can't say at the moment<br>
		</fieldset>						

		<input id="submit" type="submit" name="submit" value="submit">
	</form>
  
</form>