<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <style type="text/css">
    .floating-box{
  
  margin: 100px;
 
  box-shadow: 1px 5px 5px 1px;
opacity: .7;
}
#loginid2,#pass2
{
  border: none;
  width: 300px;
  background-color: none;
  height: 30px;
}
label{
    font-size: 24px;
  }
  #submit
  {
    padding :10px;
    background-color: red;
    border: none;
    font-size: 20px;
  }
  #submit:hover
  {
    background-color: yellow;
  }
  </style>

<title>Login</title>

<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(aa2.jpg)">
  <div style="float: right; position: fixed;">
    <a href="homepage.php" style="padding: 10px; font-size: 30px;">Home</a>
  </div>
<center>
<div class="floating-box" style=" background-color: lightgreen;text-align: center;padding: 20px; font-size: 20px; margin-left:300px; margin-right: 300px; margin-top: 100px;
margin-bottom: 200px;" >

<form name="form1" method="post">
<h1> Login form</h1>

   <label for="uname">User Name</label>
   <input type="text" id="loginid2" name="user_id" placeholder="username" value="" required><br><br>

   <label for="pwd">Password</label>
   <input type="password" id="pass2" name="pass" placeholder="password" value="" required><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="signup.php">Register Here</a></p>
<?php
      if(isset($found))
      {
        echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
      }

      $message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','crud') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM user WHERE user_id='" . $_POST["user_id"] . "' and pass = '". $_POST["pass"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['user_name'];
//$_SESSION["user_id"] = $row['user_id'];
//$_SESSION["massage"] = $row['message'];
//$_SESSION["email"] = $row['email'];


} else {
echo"<span style='color:red'>Invalid Username or Password!</span>";
}
}
if(isset($_SESSION["id"])) {
header("Location:userinterface.php");
}
      ?>
 </center>
</form>

</div>
<center>
</body>
</html>



