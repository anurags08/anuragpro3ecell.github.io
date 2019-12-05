<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <style type="text/css">
   th,tr,td
   {
    border: 1px solid;
    border-collapse: collapse;
    padding: 10px;
   }

 </style>
 </head>
<body bgcolor="black" style="color: white">
 

<div>
<h3 style="color: red">selected ideas and  members list</h3>
<div style="float: left; width:  50%">
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>user id</td>
   <td>name</td>
  
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["user_id"]; ?></td>
   
   <td><?php echo $row["user_name"]; ?></td>
   
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
</div>

<div style="float: right; width: 50%">
 <table width="90%" border="1">
    <tr>
    <th colspan="4"><h2>idea selected</h2></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
$result = mysqli_query($conn,"SELECT * FROM file");
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
        <td><?php echo $row["filename"];?></td>
        <td><?php echo $row["type"]; ?></td>
        <td><?php echo $row["size"]; ?></td>
        <td><a href="upload/<?php echo $row['filename'] ?>" target="_blank">view file</a></td>
        </tr>
       <?php
$i++;
}
?> 
    </table>
    
</div>
</div>
 </body>
</html>