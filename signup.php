<!DOCTYPE HTML>
<html>
<head>

  <style type="text/css">
    .floating-box{
  
  margin: 100px;
  background-color: lightblue;
  box-shadow: 1px 5px 5px 1px;
  opacity: 0.7;

}
#name,#pass,#login,#text,#email
{
  border: none;
  width: 300px;
  background-color: none;
  height: 30px;
}
label{
    font-size: 24px;
  }
  .sub
  {
    padding :10px;
    background-color: red;
    border:none;
    font-size: 20px;
  }
  .sub:hover
  {
    background-color: yellow;
  }
  </style>

<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.user_id.value=="")
  {
    window.alert("Plese Enter Login Id");
	document.form1.user_id.focus();
	return false;

  }
 
 if(document.form1.login.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.login.focus();
	return false;
  } 
  if(document.form1.pass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.pass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.login.value)
  {
    alert("Confirm Password does not matched");
	document.form1.pass.focus();
	return false;
  }

  


  if(document.form1.name2.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name2.focus();
	return false;
  }

  

  /*
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  */

  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>

</head>

<body style="background-image:url(aa2.jpg);">
   <div style="float: right; position: fixed ;">
    <a href="homepage.php" style="padding: 10px; font-size: 30px;">Home</a>
  </div>
<center>
<div class="floating-box" style="background-color: lightgreen; text-align: center; font-size: 20px; margin-left:300px; margin-right: 300px; margin-top: 0px;
margin-bottom: 200px;" >
  <h1>sign up form</h1>
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >


   <label for="pwd"> User Id</label><br>
   <input type="text" id="name" name="user_id" placeholder="userid" style="border-radius: 20px;" required><br><br>
   <label for="pwd">Password</label><br>
   <input type="password" id="login" name="login" placeholder="password" style="border-radius: 20px;" required><br><br>
     
   <label for="pwd"> Confirm  password </label><br>
   <input type="password" id="pass" name="pass" placeholder="confirm password" style="border-radius: 20px;" required><br><br>
   <label >Name</label>
   <br>
   <input type="text" id="name" name="name2" placeholder="name" style="border-radius: 20px;" required><br><br>
       
   
   <label >Email id</label><br>
   <input type="text" id="email" name="email" placeholder="email" style="border-radius: 20px;" required><br><br>
    
   <input type="submit" name="submit" value="Signup" class="sub">
	<p> <a href="login.php"Login here> Already Register</a></p>
  <br>
                              

</form>
</div>
</center>
 
 
</body>
</html>
