<?php
	session_start();
	if(!isset($_SESSION['user']) || (trim($_SESSION['user']) == ''))
	{
		header("location: index.php");
		exit();
	}
?>

<html>
<head>
</head>

<body>
<table>
<form action="insert.php" method="post">
<tr>
<td><label> tag: <label> </td>

<td><input size="75" type="text" name ="tag"/></td>

</tr>

<tr>

<td><label> block:<label></td>
<td><textarea size="75" type="text" name="block"> </textarea></td>

</tr>

<tr>

<td><label> pageoption:<label></td>
<td><input size="75" type ="text" name="pageoption"/></td>
</tr>

<tr>

<td><label> pageorder:<label></td>
<td><input size="75" type ="text" name="pageorder"/></td>
</tr>

<tr>

<td><label> template:<label></td>
<td><input size="75" type ="text" name="template"/></td>
</tr>


</table>
<label>&nbsp;</label>
<input type="submit" value="Opslaan" name="postback" />
</tr>
</form>
</div>


</body>
</html>