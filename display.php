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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>

	<table>
		<th>Student ID</th>
		<th>Question 1</th>
		<th>Question 2</th>
		<th>Question 3</th>
		<th>Question 4</th>
		<th>Question 5</th>

	<?php
		$conn=new mysqli("localhost","root","","innovision");
		$sql="SELECT * FROM feedback";

		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				echo "<tr>
						<td>".$row["id"]."</td>
						<td>".$row["ans1"]."</td>
						<td>".$row["ans2"]."</td>
						<td>".$row["ans3"]."</td>
						<td>".$row["ans4"]."</td>
						<td>".$row["ans5"]."</td>
					 </tr>";
			}
		}
	?>	
	</table>

<br><br><br><br>

	<table>
		<th>Answer Number</th>
		<th>Question 2</th>
		<th>Question 3</th>
		<th>Question 4</th>

	<?php
		$conn=new mysqli("localhost","root","","innovision");
		$val21=$conn->query("SELECT * FROM feedback WHERE ans2='1'");
		$val22=$conn->query("SELECT * FROM feedback WHERE ans2='2'");
		$val23=$conn->query("SELECT * FROM feedback WHERE ans2='3'");
		$val24=$conn->query("SELECT * FROM feedback WHERE ans2='4'");
		
		$val31=$conn->query("SELECT * FROM feedback WHERE ans3='1'");
		$val32=$conn->query("SELECT * FROM feedback WHERE ans3='2'");
		$val33=$conn->query("SELECT * FROM feedback WHERE ans3='3'");
		$val34=$conn->query("SELECT * FROM feedback WHERE ans3='4'");
		$val35=$conn->query("SELECT * FROM feedback WHERE ans3='5'");
		$val36=$conn->query("SELECT * FROM feedback WHERE ans3='6'");
		$val37=$conn->query("SELECT * FROM feedback WHERE ans3='7'");
		$val38=$conn->query("SELECT * FROM feedback WHERE ans3='8'");
		$val39=$conn->query("SELECT * FROM feedback WHERE ans3='9'");
		$val310=$conn->query("SELECT * FROM feedback WHERE ans3='10'");

		$val41=$conn->query("SELECT * FROM feedback WHERE ans4='1'");
		$val42=$conn->query("SELECT * FROM feedback WHERE ans4='2'");
		$val43=$conn->query("SELECT * FROM feedback WHERE ans4='3'");
		$val44=$conn->query("SELECT * FROM feedback WHERE ans4='4'");
		
		echo "<tr><td>1</td><td>".$val21->num_rows."</td><td>".$val31->num_rows."</td><td>".$val41->num_rows."</td></tr>";
		echo "<tr><td>2</td><td>".$val22->num_rows."</td><td>".$val32->num_rows."</td><td>".$val42->num_rows."</td></tr>";
		echo "<tr><td>3</td><td>".$val23->num_rows."</td><td>".$val33->num_rows."</td><td>".$val43->num_rows."</td></tr>";
		echo "<tr><td>4</td><td>".$val24->num_rows."</td><td>".$val34->num_rows."</td><td>".$val44->num_rows."</td></tr>";
		echo "<tr><td>5</td><td></td><td>".$val35->num_rows."</td><td></td></tr>";
		echo "<tr><td>6</td><td></td><td>".$val36->num_rows."</td><td></td></tr>";
		echo "<tr><td>7</td><td></td><td>".$val37->num_rows."</td><td></td></tr>";
		echo "<tr><td>8</td><td></td><td>".$val38->num_rows."</td><td></td></tr>";
		echo "<tr><td>9</td><td></td><td>".$val39->num_rows."</td><td></td></tr>";
		echo "<tr><td>10</td><td></td><td>".$val310->num_rows."</td><td></td></tr>";
		
		echo "</table>";


	$val=$conn->query("SELECT * FROM feedback");
	echo "Total Number: " .$val->num_rows;

	?>
	<div class="row">
     <div class="col-4"><canvas id="myChart1" width="40%" height="10%"></canvas></div>
     <div class="col-4"><canvas id="myChart2" width="40%" height="10%"></canvas></div>
     <div class="col-4"><canvas id="myChart3" width="40%" height="10%"></canvas></div>
    


	</div>
	
<script>
	///////////////////////////////////
var ctx = document.getElementById("myChart1");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
     data: {
    datasets: [{
        data: [10, 20, 30,500],
        backgroundColor: [
                'rgba(255, 99, 132, 2)',
                'rgba(54, 162, 235, 2)',
                'rgba(255, 206, 86, 2)',
                'rgba(75, 192, 192, 2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
},

    options:Chart.defaults.doughnut
});
/////////////////////////////////////
///////////////////////////////////
var ctx = document.getElementById("myChart2");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
     data: {
    datasets: [{
        data: [10, 20, 30,40,50,60,70,80,90,100],
        backgroundColor: [
                'rgba(255, 99, 132, 2)',
                'rgba(54, 162, 235, 2)',
                'rgba(255, 206, 86, 2)',
                'rgba(75, 192, 192, 2)',
                 'rgba(153, 102, 255, 2)',
                 'rgba(255, 159, 64, 2)',
                 'rgba(255, 199, 132, 2)',
                'rgba(54, 12, 235, 2)',
                'rgba(255, 26, 86, 2)',
                'rgba(75, 19, 192, 2)',
            ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
},

    options:Chart.defaults.doughnut
});
/////////////////////////////////////
///////////////////////////////////
var ctx = document.getElementById("myChart3");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
     data: {
    datasets: [{
        data: [10, 20, 30,12],
        backgroundColor: [
                'rgba(255, 99, 132, 2)',
                'rgba(54, 162, 235, 2)',
                'rgba(255, 206, 86, 2)',
                'rgba(75, 192, 192, 2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
},

    options:Chart.defaults.doughnut
});
/////////////////////////////////////
</script>
</body>
</html>