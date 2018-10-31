<!DOCTYPE html>
<html>
<head>
	<title>RESULT</title>
	<style type="text/css">
		table
		{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: monospace;
			font-size: 16px;
			text-align: left;
		}
		th
		{
			background-color: #8B8989;
			color: black; 
		}
		tr:nth-child(even)
		{
			background-color: #D0CFCF;
		}
	</style>
</head>
<body>

	<table>
		<th>Answer Number</th>
		<th>Question 1</th>
		<th>Question 2</th>
		<th>Question 3</th>
		<th>Question 4</th>
		<th>Question 5</th>
		<th>Question 6</th>

	<?php
		$conn=new mysqli("localhost","root","","innovision");
		$val10=$conn->query("SELECT * FROM feedback WHERE ans1='0'");
		$val11=$conn->query("SELECT * FROM feedback WHERE ans1='1'");
		$val12=$conn->query("SELECT * FROM feedback WHERE ans1='2'");
		$val13=$conn->query("SELECT * FROM feedback WHERE ans1='3'");
		$val14=$conn->query("SELECT * FROM feedback WHERE ans1='4'");
		$val20=$conn->query("SELECT * FROM feedback WHERE ans2='0'");
		$val21=$conn->query("SELECT * FROM feedback WHERE ans2='1'");
		$val22=$conn->query("SELECT * FROM feedback WHERE ans2='2'");
		$val23=$conn->query("SELECT * FROM feedback WHERE ans2='3'");
		$val24=$conn->query("SELECT * FROM feedback WHERE ans2='4'");
		$val30=$conn->query("SELECT * FROM feedback WHERE ans3='0'");
		$val31=$conn->query("SELECT * FROM feedback WHERE ans3='1'");
		$val32=$conn->query("SELECT * FROM feedback WHERE ans3='2'");
		$val33=$conn->query("SELECT * FROM feedback WHERE ans3='3'");
		$val34=$conn->query("SELECT * FROM feedback WHERE ans3='4'");
		$val40=$conn->query("SELECT * FROM feedback WHERE ans4='0'");
		$val41=$conn->query("SELECT * FROM feedback WHERE ans4='1'");
		$val42=$conn->query("SELECT * FROM feedback WHERE ans4='2'");
		$val43=$conn->query("SELECT * FROM feedback WHERE ans4='3'");
		$val44=$conn->query("SELECT * FROM feedback WHERE ans4='4'");
		$val50=$conn->query("SELECT * FROM feedback WHERE ans5='0'");
		$val51=$conn->query("SELECT * FROM feedback WHERE ans5='1'");
		$val52=$conn->query("SELECT * FROM feedback WHERE ans5='2'");
		$val53=$conn->query("SELECT * FROM feedback WHERE ans5='3'");
		$val54=$conn->query("SELECT * FROM feedback WHERE ans5='4'");
		$val60=$conn->query("SELECT * FROM feedback WHERE ans6='0'");
		$val61=$conn->query("SELECT * FROM feedback WHERE ans6='1'");
		$val62=$conn->query("SELECT * FROM feedback WHERE ans6='2'");
		$val63=$conn->query("SELECT * FROM feedback WHERE ans6='3'");
		$val64=$conn->query("SELECT * FROM feedback WHERE ans6='4'");
        
		echo "<tr><td>0</td><td>".$val10->num_rows."</td><td>".$val20->num_rows."</td><td>".$val30->num_rows."</td><td>".$val40->num_rows."</td><td>".$val50->num_rows."</td><td>".$val60->num_rows."</td></tr>";

		echo "<tr><td>1</td><td>".$val11->num_rows."</td><td>".$val21->num_rows."</td><td>".$val31->num_rows."</td><td>".$val41->num_rows."</td><td>".$val51->num_rows."</td><td>".$val61->num_rows."</td></tr>";
		
		echo "<tr><td>2</td><td>".$val12->num_rows."</td><td>".$val22->num_rows."</td><td>".$val32->num_rows."</td><td>".$val42->num_rows."</td><td>".$val52->num_rows."</td><td>".$val62->num_rows."</td></tr>";
		
		echo "<tr><td>3</td><td>".$val13->num_rows."</td><td>".$val23->num_rows."</td><td>".$val33->num_rows."</td><td>".$val43->num_rows."</td><td>".$val53->num_rows."</td><td>".$val63->num_rows."</td></tr>";
		
		echo "<tr><td>4</td><td>".$val14->num_rows."</td><td>".$val24->num_rows."</td><td>".$val34->num_rows."</td><td>".$val44->num_rows."</td><td>".$val54->num_rows."</td><td>".$val64->num_rows."</td></tr>";
		echo "</table>";


	$val=$conn->query("SELECT * FROM feedback");
	echo "Total Number: " .$val->num_rows;

	?>

</body>
</html>