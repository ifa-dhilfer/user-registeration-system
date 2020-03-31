<html>
<head>
<title>update records in php</title>
</head>
<body>
<?php
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'test');
    $sql="select * from registeration";
	$records=mysqli_query($con,$sql);
?>
<table>
<tr>
<th>firstname</th>
<th>lastname</th>
<th>birthdayday</th>
<th>birthdaymonth</th>
<th>birthdayyear</th>
<th>gender</th>
<th>education</th>
<th>nameogtheinstitution</th>
</tr>

<?php
   while($row = mysqli_fetch_array($records))
   {
	   echo"<tr><form action=update.php method=post>";
	   echo"<td><input type=text name=fname value='".$row['firstname']."'></td>";
	   echo"<td><input type=text name=lname value='".$row['lastname']."'></td>";
	   echo"<td><input type=text name=birday value='".$row['birthdayday']."'></td>";
	   echo"<td><input type=text name=birmon value='".$row['birthdaymonth']."'></td>";
	   echo"<td><input type=text name=biryear value='".$row['birthdayyear']."'></td>";
	   echo"<td><input type=text name=gender value='".$row['gender']."'></td>";
	   echo"<td><input type=text name=edu value='".$row['education']."'></td>";
	   echo"<td><input type=text name=noi value='".$row['nameoftheinstitution']."'></td>";

	   echo "<td><input type=hidden name=id value='".$row['id']."'>";
	   echo"<tr><td><input type=submit></tr></tr>";
	   echo"</form></tr>";
	   
	   
   }
?>
	
</table>
<h2><a href="connect2.php">back to adminpanel</a></h2>
</body>
</html>
