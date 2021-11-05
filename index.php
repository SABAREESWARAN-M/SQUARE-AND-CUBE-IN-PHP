<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Square and cube</title>
</head>
<body>
<form action="index.php"  method="POST">
	<h1>Square and Cube in php</h1>
	<label>Enter the number want to square and cube</label>
	<input type="text" name="num"><br><br>
<input type="submit" name="submit">	<br>
</form>
<?php

if(isset($_POST['submit']))
{
$num=$_POST['num'];
$cube=$num*$num*$num;
$square=$num*$num;
echo "cube of number".$num."is"."=".$cube;
echo "<br><br>";
echo "square of ".$num."is"."=".$square;
}
?>
</body>
</html>
