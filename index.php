


<!doctype html>

<html>
<head>
<title>registeration form</title><link rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script type="text/javascript">
/*$(document).ready(function(){
	$('$username').keyup(function()
	{
		$.post("aval_user.php",
		{username : $('username').val()
	    },function(response)
		{
		     $('$usernameresult').fadeOut();
             setTimeOut("closeajax('$usernameresult','"+escape(response)+"')",350);
    			 
		});
		return false;
		
	});
	
});


function  userresult(id,response)
{
	$('#usernameloading').hide();
	$('#'+id).html(unescape(response));
	$('$'+id).fadeIn();
}*/
</script>


<style type="text/css">
*{
	margin:0;
	paddding:0;
}
body{
	background-image:url(unnamed2.jpg);
	background-position:center;
	background-size:cover;
	font-family:sans-serif;
	margin-top:40px;
}
.regform
{
	width:800px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:#FFFFFF;
	padding:10px 0px 10px 0px;
	text-align:center;
	border-radius:15px 15px 0px 0px;
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:800px;
	margin:auto;
}
form{
	padding:10px;
}
.name{
	margin-left:25px;
	margin-top:30px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight:700;
}
.username{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	
}
.password{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.email{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.birday{
	position:relative;
	left:200px;
	top:-20px;
	line-height:40px;
	width:150px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.birmon{
	position:relative;
	left:200px;
	top:-20px;
	line-height:40px;
	width:150px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.biryear{
	position:relative;
	left:200px;
	top:-20px;
	line-height:40px;
	width:150px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.radio{
	display:inline-block;
	padding-right:70px;
	font-size:25px;
	margin-left:400px;
	margin-top:100px;
	color:white;
}
.radio input{
	width:15px;
	height:15px;
	border-radius:50px;
	cursor:pointer:
	outline:none;
}
.edu{
	position:relative;
	left:200px;
	top:-20px;
	line-height:100px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.nameoftheinstitution{
	position:relative;
	left:200px;
	top:-40px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.resume{
	position:relative;
	left:200px;
	top:-20px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
button{
	background-color:#3BAF9F;
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid #366473;
	padding:14px 110px;
	outline:none;
	color:white;
	cursor:pointer;
	transition:0.25px;
}
.radio{
	display:inline-block;
	paddding-right:70px;
	font-size:20px;
	margin-left:25px;
	margin-top:15px;
	color:white;
}
</style>
</head>
<body>
<div class="regform"><h1>Registeration Form</h1>
</div>
<div class="main">

<form method="post" autocomplete="off">
<div id="name"> 
<div><h2 class="name">Username</h2>
<input type="text" class="username" id="username" id="usercheck" name="usercheck" required><br>
<h4 id="usercheck"></h4>
<span id="usernameloading"></span>
<span id="usernameresult"></span></div>
<div><h2 class="name">Password</h2>
<input type="password" class="password" id="password" id="passcheck" name="passcheck" required><br>
<h4 id="passcheck"></h4></div>
<div><h2 class="name">Email</h2>
<input type="email" class="email" id="email" id="emailcheck" name="emailcheck" required><br>
<h4 id="emailcheck"></h4></div>
<div><h2 class="name">Date of Birth</h2>
<select  class="birday" name="birthdaydaycheck" id="birthdayday" id="birthdaydaycheck" required>
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
<h4 id="birthdaydaycheck"></h4>
 
<select class="birmon" id="birthdaymonth" id="birthdaymonthcheck" name="birthdaymonthcheck" required>
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 <h4 id="birthdaymonthcheck"></h4>
<select class="biryear" name="birthdayyearcheck" id="birthdayyear" id="birthdayyearcheck" required>
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
<h4 id="birthdayyearcheck"></h4></div>
<div><h2 class="name">Education</h2>
<select class="edu" name="educationcheck" placeholder="--choose option--" id="education" id="educationcheck" required>
<option value=" maths"></option>
<option value="computer science">computer science</option>
<option value="commerce">commerce </option>
<option value="account">account</option>
<option value="arts">arts</option>
<option value="computer application">computer application</option>
<option value="computer">computer</option>
<option value="physics">physics</option></select>
<h4 id="educationcheck"></h4></div>
<div><h2 class="name">Name of the Institution</h2>
<input type="text" class="nameoftheinstitution" id="nameoftheinstitution" name="nameoftheinstitutioncheck" id="nameoftheinstitutioncheck" required><br>
<h4 id="nameoftheinstitutioncheck"></h4></div>
<div><h2 class="name">Resume</h2>
<input type="file" class="resume" id="resume" name="resumecheck" id="resumecheck" required><br>
<h4 id="resumecheck"></h4></div>
<div><h2 class="name">Gender</h2>
<label class="radio" >
<input class="radio-one" id="gender" id="gendercheck" type="radio" checked="checked" name="gendercheck" required>
<span class="checkmark"></span>
Male
</label>
<label class="radio">
<input class="radio-two" id="gender" type="radio" id="gendercheck" checked="checked" name="gendercheck" required>
<span class="checkmark"></span>
Female
</label>
<h4 id="gendercheck"></h4></div>
<button id="submitbtn" onclick="savedatas()">SUBMIT</button>
</div>
</form>
<script>
function savedatas()
{
	 if(window.XMLHttpRequest)
	 {
		 a=new XMLHttpRequest();
	 }
	 else
	 {
		 a=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	 a.onreadystatechange=function(){
		 if(a.readystate==4&&a.status==200){
			 alert(a.responseText);
		 }
		 
	 }
	 var usercheck=document.getElementById("usercheck").value;
	 var passcheck=document.getElementById("passcheck").value;
	 var emailcheck=document.getElementById("emailcheck").value;
	 var birthdaydaycheck=document.getElementById("birthdaydaycheck").value;
	 var birthdaymonthcheck=document.getElementById("birthdaymonthcheck").value;
	 var birthdayyearcheck=document.getElementById("birthdayyearcheck").value;
	 var educationcheck=document.getElementById("educationcheck").value;
	 var nameoftheinstitutioncheck=document.getElementById("nameoftheinstitutioncheck").value;
	 var resumecheck=document.getElementById("resumecheck").value;
	 var gendercheck=document.getElementById("gendercheck").value;
	 var url="save.php";
	 var val="usercheck="+usercheck+"&passcheck="+passcheck+"&emailcheck="+emailcheck+"&birthdaydaycheck="+birthdaydaycheck+"&birthdaymonthcheck="+birthdaymonthcheck+"&birthdayyearcheck="+birthdayyearcheck+"&educationcheck="+educationdaycheck+"&nameoftheinstitutioncheck="+nameoftheinstitutioncheck+"&resumecheck="+resumecheck+"&gendercheck="+gendercheck;
	 a.open("POST",url,true);
	 a.setRequestHeader("content-type","application/x-www-form-urlencoded");
	 a.setRequestHeader("content-length",val.length);
	 a.setRequestHeader("connection","close");
	 a.send(val);
	 
	 
}
</script>



<script type="text/javascript">
$(document).ready(function(){
     $('#usercheck').hide();
	 $('#passcheck').hide();
	 $('#emailcheck').hide();
	 $('#birthdaydaycheck').hide();
	 $('#birthdaymonthcheck').hide();
	 $('#birthdayyearcheck').hide();
	 $('#educationcheck').hide();
	 $('#nameoftheinstitutioncheck').hide();
	 $('#resumecheck').hide();
	 $('#gendercheck').hide();
	 
	 
	var user_err=true;
     var pass_err=true;
     var email_err=true;
	 var birday_err=true;
	 var birmon_err=true;
	 var biryear_err=true;
	 var edu_err=true;
	 var noi_err=true;
	 var resume_err=true;
	 var gender_err=true;
	 
	 
	 $('#username').keyup(function(){
	  username_check();
	 
	 });
	 function username_check(){
	    var user_val=$('#username').val();
		
		if(user_val.length == ''){
		$('#usercheck').show();
		$('#usercheck').html("**please fill the username");
		$('#usercheck').focus();
		$('#usercheck').css("color","red");
		user_err=false;
		return false;
		}else{
		$('#usercheck').hide();
		}
		
		
		if((user_val.length < 3)||(user_val.length > 15)){
		$('#usercheck').show();
		$('#usercheck').html("**username length must be between 3 to 15");
		$('#usercheck').focus();
		$('#usercheck').css("color","red");
		user_err=false;
		return false;
		}else{
		$('#usercheck').hide();
		}
		
	 
	 }
	 
	 $('#password').keyup(function(){
	    password_check();
	
	 });
	 function password_check(){
	 var passwordstr=$('#password').val();
	 
	  if(passwordstr.length == ''){
	  $('#passcheck').show();
		$('#passcheck').html("**please fill the password");
		$('#passcheck').focus();
		$('#passcheck').css("color","red");
		pass_err=false;
		return false;
		}else{
		$('#passcheck').hide();
	  }
	  if(passwordstr.search(/[0-9]/)==-1){
		$('#passcheck').show();
		$('#passcheck').html("**password should contain atleast 1 numeric value");
		$('#passcheck').focus();
		$('#passcheck').css("color","red");
		pass_err=false;
		return false;
		}else{
		$('#passcheck').hide();
	 } 
	 if(passwordstr.search(/[!\@\#\$\%\^\&\*\(\)_\.\,\:\;]/)==-1){
		$('#passcheck').show();
		$('#passcheck').html("**password should contain special characters");
		$('#passcheck').focus();
		$('#passcheck').css("color","red");
		pass_err=false;
		return false;
		}else{
		$('#passcheck').hide();
	 } 
	 
	}
	  
	   $('#email').keyup(function(){
	    emailid_check();
	 });
	 
	 function emailid_check(){
	 var emailaa=$('#email').val();
	  if(emailaa.length == ''){
	  $('#emailcheck').show();
		$('#emailcheck').html("**please fill the email");
		$('#emailcheck').focus();
		$('#emailcheck').css("color","red");
		email_err=false;
		return false;
		}else{
		$('#emailcheck').hide();
	  }
	 } 
	  $('#birthdayday').keyup(function(){
	    birday_check();
	 });
	 
	 function birday_check(){
	 var birdaybb=$('#birthdayday').val();
	  if(birdaybb.length == ''){
	  $('#birthdaydaycheck').show();
		$('#birthdaydaycheck').html("**please fill the birthday day");
		$('#birthdaydaycheck').focus();
		$('#birthdaydaycheck').css("color","red");
		birday_err=false;
		return false;
		}else{
		$('#birthdaydaycheck').hide();
	  }
	 } 
	  $('#birthdaymonth').keyup(function(){
	    birmon_check();
	 });
	 
	 function birmon_check(){
	 var birmoncc=$('#birthdaymonth').val();
	  if(birmoncc.length == ''){
	  $('#birthdaymonthcheck').show();
		$('#birthdaymonthcheck').html("**please fill the birthday month");
		$('#birthdaymonthcheck').focus();
		$('#birthdaymonthcheck').css("color","red");
		birmon_err=false;
		return false;
		}else{
		$('#birthdaymonthcheck').hide();
	  }
	 } 
	  
	   $('#birthdayyear').keyup(function(){
	    biryear_check();
	 });
	 
	 function biryear_check(){
	 var biryeardd=$('#birthdayyear').val();
	  if(biryeardd.length == ''){
	  $('#birthdayyearcheck').show();
		$('#birthdayyearcheck').html("**please fill the birthday year");
		$('#birthdayyearcheck').focus();
		$('#birthdayyearcheck').css("color","red");
		biryear_err=false;
		return false;
		}else{
		$('#birthdayyearcheck').hide();
	  }
	 } 
	   $('#education').keyup(function(){
	    edu_check();
	 });
	 
	 function edu_check(){
	 var eduee=$('#education').val();
	  if(eduee.length == ''){
	  $('#educationcheck').show();
		$('#educationcheck').html("**please fill the education");
		$('#educationcheck').focus();
		$('#educationcheck').css("color","red");
		edu_err=false;
		return false;
		}else{
		$('#educationcheck').hide();
	  }
	 } 
	 
	 $('#nameoftheinstitution').keyup(function(){
	    noi_check();
	 });
	 
	 function noi_check(){
	 var noiff=$('#nameoftheinstitution').val();
	  if(noiff.length == ''){
	  $('#nameoftheinstitutioncheck').show();
		$('#nameoftheinstitutioncheck').html("**please fill the name of the institution");
		$('#nameoftheinstitutioncheck').focus();
		$('#nameoftheinstitutioncheck').css("color","red");
		noi_err=false;
		return false;
		}else{
		$('#nameoftheinstitutioncheck').hide();
	  }
	 } 
	  $('#resume').keyup(function(){
	    resume_check();
	 });
	 
	 function resume_check(){
	 var resumegg=$('#resume').val();
	  if(resumegg.length == ''){
	  $('#resumecheck').show();
		$('#resumecheck').html("**please fill the resume");
		$('#resumecheck').focus();
		$('#resumecheck').css("color","red");
		resume_err=false;
		return false;
		}else{
		$('#resumecheck').hide();
	  }
	 } 
	  $('#gender').keyup(function(){
	    gender_check();
	 });
	 
	 function gender_check(){
	 var genderhh=$('#gender').val();
	  if(genderhh.length == ''){
	  $('#gendercheck').show();
		$('#gendercheck').html("**please fill the gender");
		$('#gendercheck').focus();
		$('#gendercheck').css("color","red");
		gender_err=false;
		return false;
		}else{
		$('#gendercheck').hide();
	  }
	 } 
	 
	 
	$('#submitbtn').click(function(){
     user_err=true;
     pass_err=true;
     email_err=true;
	 birday_err=true;
	 birmon_err=true;
     biryear_err=true;
	 edu_err=true;
	 noi_err=true;
	 resume_err=true;
	 gender_err=true;
	 
	  
	  
	  username_check();
	  password_check();
	  emailid_check();
	  birday_check();
	  birmon_check();
	  biryear_check();
	  edu_check();
	  noi_check();
	  resume_check();
	  gender_check();
	  
	  if((user_err==true) && (pass_err==true)  && (email_err==true) && (birday_err==true) && (birmon_err==true) && (biryear_err==true) && (edu_err==true) && (noi_err==true) && (resume_err==true) && (gender_err==true) ){
	     return true;
	  }else{
	  return false;
	  }
	 }); 
});

</script>

</body>
</html>