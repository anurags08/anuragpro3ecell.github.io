<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body bgcolor="lightgreen">

	<div style="margin: 100px;padding: 20px;">
<form action="uploadfile.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br><br><br>
<input type="text" name="name" placeholder="user id"><br><br>
<button type="submit" name="upload">upload</button>
</form>

</div>
</body>
</html>