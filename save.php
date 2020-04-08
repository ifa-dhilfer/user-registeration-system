<?php
$con=new mysqli("localhost","root","","test");
$usercheck=$_POST["usercheck"];
$passcheck=$_POST["passcheck"];
$emailcheck=$_POST["emailcheck"];
$birthdaydaycheck=$_POST["birthdaydaycheck"];
$birthdaymonthcheck=$_POST["birthdaymonthcheck"];
$birthdayyearcheck=$_POST["birthdayyearcheck"];
$educationcheck=$_POST["educationcheck"];
$nameoftheinstitutioncheck=$_POST["nameoftheinstitutioncheck"];
$resumecheck=$_POST["resumecheck"];
$gendercheck=$_POST["gendercheck"];

$sql="insert into registeration(usercheck,passcheck,emailcheck,birthdaydaycheck,birthdaymonthcheck,birthdayyearcheck,educationcheck,nameoftheinstitutioncheck,resumecheck,gendercheck) values ('{$usercheck}','{$passcheck}','{$emailcheck}','{$birthdaydaycheck}','{$birthdaymonthcheck}','{$birthdayyearcheck}','{$educationcheck}','{$nameoftheinstitutioncheck}','{$resumecheck}','{$gendercheck}')";
if($con->query($sql))
{
	echo "data saved...!";
}
else
{
	echo "error in saving data...!";
}



?>