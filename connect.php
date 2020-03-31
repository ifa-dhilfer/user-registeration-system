<?php
    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
	 $birthdayday = $_POST['birthdayday'];
	  $birthdaymonth = $_POST['birthdaymonth'];
	   $birthdayyear = $_POST['birthdayyear'];
	    $gender = $_POST['gender'];
		 $education = $_POST['education'];
		  $nameoftheinstitution  =$_POST['nameoftheinstitution'];
		   $file = $_POST['file'];

    $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('connection failed:'.$conn->connect_error);
		}else{
			$stmt=$conn->prepare("insert into registeration (firstname,lastname,birthdayday,birthdaymonth,birthdayyear,gender,education,nameoftheinstitution,file) values(?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param('ssisissss',$firstname,$lastname,$birthdayday,$birthdaymonth,$birthdayyear,$gender,$education,$nameoftheinstitution,$file);
			$stmt->execute();
			echo "registeration success!!";
		$stmt->close();
		$conn->close();

			
		}
	



	?>