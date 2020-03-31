<html>
<head>
<title>delete records from database using php</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
   <tr>
       
	    <th>firstname</th>
		 <th>lastname</th>
		  <th>birthdayday</th>
		   <th>birthdaymonth</th>
		    <th>birthdayyear</th>
			 <th>gender</th>
			  <th>education</th>
			   <th>nameoftheinstitution</th>
			   
			   <th>delete</th>
	</tr>
	
<?php
$con=mysqli_connect('localhost','root','');
 
 mysqli_select_db($con,'test');
 
   $sql="SELECT * FROM registeration";
   
  $records= mysqli_query($con,$sql);
  
   while($row=mysqli_fetch_array($records))
   {
	   echo"<tr>";
	   echo"<td>".$row['firstname']."</td>";
	   echo"<td>".$row['lastname']."</td>";
	   echo"<td>".$row['birthdayday']."</td>";
	   echo"<td>".$row['birthdaymonth']."</td>";
	   echo"<td>".$row['birthdayyear']."</td>";
	   echo"<td>".$row['gender']."</td>";
	   echo"<td>".$row['education']."</td>";
	   echo"<td>".$row['nameoftheinstitution']."</td>";
	  
	   echo"<td><a href=delete.php?id=".$row['id'].">delete</a></td>";
	   
   }




?>
</table><h2><a href="connect2.php">back to adminpanel</a></h2>
</body>
</html>
	
			   