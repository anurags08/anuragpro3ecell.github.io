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
 
  

<h2 style="color: red"> submited ideas</h2>


<div>
 <table width="80%" border="1">
    <tr>
    <th colspan="4"><h2>total  uploads</h2></th>
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
    
</div>

 </body>
</html>