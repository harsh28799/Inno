<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>THANK YOU</title>
	<style type="text/css">
	body{
		background-color: slategray;
	}
		.container
		{
			color: white;
  			height: 100%;
  			width: 100%;
  			display: flex;
  			position: fixed;
  			align-items: center;
  			justify-content: center;
		}
	</style>
</head>
<body>

	<?php

		$ans1=$ans2=$ans3=$ans4=$ans5=$ans6="";
		$ctr=0;

		$conn = new mysqli("localhost", "root", "", "innovision");

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{

  			if(empty($_POST["q1"])) {$ans1=0;} else  {$ans1=$_POST["q1"];}
        	if(empty($_POST["q2"])) {$ans2=0;} else  {$ans2=$_POST["q2"];}
        	if(empty($_POST["q3"])) {$ans3=0;} else  {$ans3=$_POST["q3"];}
        	if(empty($_POST["q4"])) {$ans4=0;} else  {$ans4=$_POST["q4"];}
        	if(empty($_POST["q5"])) {$ans5=0;} else  {$ans5=$_POST["q5"];}
        	if(empty($_POST["q6"])) {$ans6=0;} else  {$ans6=$_POST["q6"];}

        	$id=$_SESSION["id"];

   			$conn->query("INSERT INTO feedback (id,ans1,ans2,ans3,ans4,ans5,ans6) VALUES ('$id','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6')");

		}

	?>

	<div class="container">
  		<h1>THANK YOU!</h1>
	</div>

	<?php session_destroy(); ?>

</body>
</html>


