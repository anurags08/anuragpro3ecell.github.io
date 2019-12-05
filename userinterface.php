<?php

include_once 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<style>
* {
  box-sizing: border-box;
}
a{
	font-size: 20px;
	border: none;
	text-decoration:none; 
}
.menu {
  float:left;
  width:20%;
  text-align:center;
}

.menu button {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.menu button:hover{
	background-color: red;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>

</head>
<body style="font-family:Verdana;color: solid black; background-color: pink" >

<div style="background-color:green ;padding:30px;text-align:center;">

	<img src="ecell.jpg" style="height: 48px; width: 48px; float: left;  "><h3><i style="color: orange; float: left;">ECELL NIT PATNA</i></h3>
 <span style=" float: right;"> <?php
if($_SESSION["id"]) {

?>
<a href="logout.php" tite="Logout" style="float: right; padding-left:  20px;padding-right: 10px; color: lightblue">Logout</a>
 <a href="galary.html" style="float: right; padding-left:  20px;padding-right: 10px; color: lightblue">galary</a>

   
  	<?php echo "	  ".$_SESSION["name"]; // print $_SESSION["name"]; 
?> </span>
<?php
}else echo "<h1>Please login first .</h1>";
?>
</div>
<br>
<div style="overflow:auto">
  <div class="menu">
    <button   style="margin-left: 10px;"><a href="homepageuser.php"  > home</a></button>
   

    <button class="btn btn-success" id="btnclick"  style="margin-left: 10px;"> profile</button>
    <button class="btn btn-success" id="btnclick1"  style="margin-left: 10px;">submited ideas </button>
    <button class="btn btn-success" id="btnclick2"  style="margin-left: 10px;">selected members</button>


    
		

  </div>

  <div class="main">
    <h2>upload files/ideas</h2>
  <form  method="post" enctype="multipart/form-data" >
<input type="file" name="file" / style="color: green;">
<button type="submit" name="upload" style="color: blue;">upload</button>
</form>

<?php
include_once 'database.php';
if(isset($_POST['upload']))
{   
     
    // $name=$_POST['name'];
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 if($_SESSION["id"]) {


 $folder="upload/";}
 //$folder="upload/";}
 else
 	$folder="upload/";

 $x=$_SESSION["name"];
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO file(filename,type,size,user_id) VALUES('$final_file','$file_type','$new_size','$x')";
  mysqli_query($conn,$sql);
  
 ?>
<script type="text/javascript">
	window.alert("file uploaded successfully !")
</script>
 <?php
  //echo "<p style='color:green' >File sucessfully upload</style>";
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>

  </div>

  <div class="right">
    <h2 style="color: red;">running event</h2>
    <p style="color: green">submit your best idea and won up to $100000 prize money<br>valid till 21 dec 2019 </p>
  </div>
</div>



	
</div>











<hr>

   <div id="loaddata">
     

   </div>
   
   

   <script type="text/javascript">
     $(document).ready(function(){
      $('#btnclick').click(function(){
        $('#loaddata').load('profileuser.php');
      })
     });

   </script>


   <script type="text/javascript">
     $(document).ready(function(){
      $('#btnclick1').click(function(){
        $('#loaddata').load('retrieve.php');
      })
     });

   </script>


   <script type="text/javascript">
     $(document).ready(function(){
      $('#btnclick2').click(function(){
        $('#loaddata').load('selectedidea.php');
      })
     });

   </script>

<br>




</body>
</html>


	


