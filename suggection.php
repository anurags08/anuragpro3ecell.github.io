<?php





include("database.php");
extract($_POST);
//$email = $_POST['email'];
	//  $sugg = $_POST['suggections'];
$rs=mysqli_query($conn,"select * from suggestion where ");

$query="insert into suggestion(email,suggection_user) values('$email','$suggections')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  Created Sucessfully</div>";

/*
if(isset($_POST['submit']))
{	 
	
	
	 $email = $_POST['email'];
	  $sugg = $_POST['suggections'];
	 $sql = "INSERT INTO suggestion (email,suggection_user)
	 VALUES ('$email','$sugg')";
	 if (mysqli_query($conn, $sql)) {
		echo "sujjection sended successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

*/
?>