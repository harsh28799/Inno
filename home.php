<!DOCTYPE html>
<html>
<head>
	
	<title>POLL</title>

	<style type="text/css">
		#submit{
			padding: 1em;
			background-color: green;
			margin: 10px;
			align-self: center;
			 align-items: center;
			 position: center;
			width: 20%;
			text-align: center;
			font-family: sans-serif;
			font-weight: 300;
			border-color: black;
			margin-left: 40em;
		}
		.error{
			color: red;
		}
		h1{
			align-content: center;
			text-align: center;
		}
	</style>

</head>
<body>
<!-- <div class="container-fluid"> -->
	<?php include('process.php'); ?>

	<h1 >POLL</h1>
    <!-- <div class="container-fluid"> -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		<!-- <div class="container-fluid"> -->
			<fieldset>
			<legend><strong><h3>1.Which political party according to you is the most deserving one to win the 2019 general elections?</h3></strong></legend>
			<span class="error">*<?php echo $ans1Err; ?></span><br>
			<input type="text" name="q1" value="<?php echo $ans1; ?>"><br>
			</fieldset>
		<!-- </div> -->


		<!-- <div class="container-fluid"> -->
			<fieldset>
			<legend><strong><h3>2.Which is the major issue right now in the country which needs utmost attention?</h3></strong></legend>
			<span class="error">*<?php echo $ans2Err; ?></span><br>
			<input type="radio" name="q2" value="1">1. Corruption<br>
			<input type="radio" name="q2" value="2">2. Poverty<br>
			<input type="radio" name="q2" value="3">3. Education<br>
			<input type="radio" name="q2" value="4">4. Law and Order<br>
			</fieldset>
		<!-- </div> -->


		<!-- <div class="container-fluid"> -->
			<fieldset>
			<legend><strong><h3>3.On a scale of 1-10 how would you rate the work of the NDA government in the last 5 years?</h3></strong></legend>
			<span class="error">*<?php echo $ans3Err; ?></span><br>
			<input type="text" name="q3" value="<?php echo $ans3; ?>"><br>
			</fieldset>
		<!-- </div> -->


		<!-- <div class="container-fluid"> -->
			<fieldset>
			<legend><strong><h3>4.Which do you think is the best allies among these countries for India?</h3></strong></legend>
			<span class="error">*<?php echo $ans4Err; ?></span><br>
			<input type="radio" name="q4" value="1">1. Russia<br>
			<input type="radio" name="q4" value="2">2. Iran<br>
			<input type="radio" name="q4" value="3">3. United States<br>
			<input type="radio" name="q4" value="4">4. France<br>
		<!-- </div> -->
	</fieldset>

		<!-- <div class="container-fluid"> -->
			<fieldset>
			<legend><strong><h3>5.Who could be the most suitable prime ministeral candidate against Modi?</h3></strong></legend>
			<span class="error">*<?php echo $ans5Err; ?></span><br>
			<input type="text" name="q5" value="<?php echo $ans5; ?>"><br>
		<!-- </div>		 -->
	</fieldset>
    
       <!-- <div class="container-fluid" style="align-content: center;"> -->
       	<input id="submit" type="submit" class="btn btn-success" name="submit" value="submit">
       <!-- </div> -->
		
	
	</form>
  <!-- </div> -->
<!-- </div> -->
</body>
</html>