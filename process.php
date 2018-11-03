<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  
</head>
<body>

	<?php

		$ans1=$ans2=$ans3=$ans4=$ans5="";
		$ans1Err=$ans2Err=$ans3Err=$ans4Err=$ans5Err="";
		$ctr=0;

		$conn = new mysqli("localhost", "root", "", "innovision");

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{

  			if(empty($_POST["q1"])) {$ans1Err="You have not answered this question!";} else  {$ans1=$_POST["q1"];}
        	if(empty($_POST["q2"])) {$ans2Err="You have not answered this question!";} else  {$ans2=$_POST["q2"];}
        	if(empty($_POST["q3"])) {$ans3Err="You have not answered this question!";} else  {$ans3=$_POST["q3"];}
        	if(empty($_POST["q4"])) {$ans4Err="You have not answered this question!";} else  {$ans4=$_POST["q4"];}
        	if(empty($_POST["q5"])) {$ans5Err="You have not answered this question!";} else  {$ans5=$_POST["q5"];}

        	$id=$_SESSION["id"];

        	echo $ans1;

        	if($ans1Err==""&&$ans2Err==""&&$ans3Err==""&&$ans4Err==""&&$ans5Err=="")
   			{
   				$conn->query("INSERT INTO feedback (id,ans1,ans2,ans3,ans4,ans5) VALUES ('$id','$ans1','$ans2','$ans3','$ans4','$ans5')");
   				
   				header("location:success.php");
   			}	
		}

		$conn->close();

	?>

</body>
</html>


