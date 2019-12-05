

<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from user where login='$user_id'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into user(user_id,login,pass,user_name,email) values('$user_id','$login','$pass','$name2','$email')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $user_id Created Sucessfully</div>";

header("Location:login.php");




?>
</body>
</html>