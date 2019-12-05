<?php

include_once 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="black">
  <br>

<div style="align-content: center; padding: 10px; background-color: lightgreen">

<h1 style="color: red">profile of you</h1>
   <?php
include_once 'database.php';
$x=$_SESSION["name"];
$result = mysqli_query($conn,"SELECT * FROM user WHERE user_name='$x'");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr style="color: blue">
    <td>USER ID</td>
    <td> NAME</td>
   <td>PASSWORD</td>
    <td>EMAIL</td>
  </tr>
<?php

$i=0;
while($row = mysqli_fetch_array($result)) {
  
?>
<tr>
    <td><?php echo $row["user_id"]; ?></td>
    <td><?php echo $row["user_name"]; ?></td>
  <td> <?php echo $row["pass"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}

?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>






<br><hr>
<table width="80%" border="1">
    <tr>
    <th colspan="4"><center><h3>your uploads</h3> </center></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
include_once 'database.php';
$x=$_SESSION["name"];
$result = mysqli_query($conn,"SELECT * FROM file WHERE user_id='$x'");
?>
  <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
  
        <tr>
        <td><?php echo $row["filename"]; ?></td>
        <td><?php echo $row["type"]; ?></td>
        <td><?php echo $row["size"]; ?></td>
        <td><a href="upload/<?php echo $row['filename'] ?>" target="_blank">view file</a></td>
        </tr>
       <?php
$i++;
}
?> 
    </table>
    <br><br>
</div>

</body>
</html>

