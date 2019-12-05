<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>

</div>
<div>
 <table width="80%" border="1">
    <tr>
    <th colspan="4"><h3>your uploads</h3></th>
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