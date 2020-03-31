<?php
$con=mysqli_connect('localhost','root','');
 
 mysqli_select_db($con,'test');
 
   $sql="DELETE FROM registeration WHERE id='$_GET[id]'";
   
  if(mysqli_query($con,$sql))
	  header("refresh:1; url=del.php");
  else
	  echo "Not deleted!!";





?>
