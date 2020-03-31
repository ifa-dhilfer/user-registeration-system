<?php
$con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'test');
       $sql = "UPDATE registeration SET firstname='$_POST[fname]',lastname='$_POST[lname]',birthdayday='$_POST[birday]',birthdaymonth='$_POST[birmon]',birthdayyear='$_POST[biryear]',gender='$_POST[gender]',education='$_POST[edu]',nameoftheinstitution='$_POST[noi]' WHERE id='$_POST[id]'";
	        if(mysqli_query($con,$sql))
				header("refresh:1; url=upt.php");
			else
				echo "Not Update!!";
?>			