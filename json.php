<!DOCTYPE html>
<html>
<head>
<style>
table{
	width:900px;
	border:1px solid blue;
	border-collapse:collapse;
}
th{
	border:1px solid black;
	background-color:red;
}
td{
	text-align:center;
	border:1px solid blue;
}
</style>
</head>
<body>
<table>
<tr><th>Name</th><th>Address</th><th>Email</th><th>Desi</th></tr>
<?php

$connection = mysqli_connect("localhost","root","","company")or die("Error " . mysqli_error($connection));
    //open connection to mysql db
    

    //fetch table rows from mysql db
    $sql = "select * from employees";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array

	foreach($result as $key => $val){
		echo "<tr>";
		foreach($val as $key => $value){
			echo "<td>".$value."</td>";
		}	
	echo "</tr>";
	}
?>
</table>
</body>
</html>