<?php
   $username=$_POST['username'];
    $password=$_POST['password'];
	 
	
    $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('connection failed:'.$conn->connect_error);
		}else{
			$stmt=$conn->prepare("insert into admin (username,password) values(?,?)");
			$stmt->bind_param('ss',$username,$password);
			$stmt->execute();
			echo " ";
		$stmt->close();
		$conn->close();

			
		}
	



	?>
	<html>
	<head><title>adminbox</title><h2>WELCOME TO THE ADMIN PAGE!!</h2>
<link rel="stylesheet" type="text/css" href="st.css">
	</head>
	<body>
<h3><a href="vi.php">cilck to view the details of the user</a></h3>
     <h3><a href="upt.php">click to update</a></h3>
	 <h3><a href="del.php">click to delete</a></h3>
	</body>
	</html>