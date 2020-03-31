
<html>
<head>
<title>view tha table</title>
</head>
<body><table border="2" colspan="1">
<tr>
  <th>id</th>
  <th>firstname</th>
  <th>lastname</th>
  <th>birthdayday</th>
  <th>birthdaymonth</th>
  <th>birthdayyear</th>
  <th>gender</th>
  <th>education</th>
  <th>name of the institution</th>
   
</tr>

<?php
$conn=mysqli_connect("localhost","root","","test");
if($conn->connect_error){
	die("connection failed:".$conn->connection_error);
	
}
$sql="SELECT * FROM registeration";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["birthdayday"]."</td><td>".$row["birthdaymonth"]."</td><td>".$row["birthdayyear"]."</td><td>".$row["gender"]."</td><td>".$row["education"]."</td><td>".$row["nameoftheinstitution"]."</td><td>"."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
	
}
$conn->close();
?>


</table><h2><a href="connect2.php">back to adminpanel</a></h2>
</body>
</html>