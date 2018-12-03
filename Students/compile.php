<!DOCTYPE html>
<html>
<head>
	<title>compile</title>
</head>
<body>
<?php 
include "config/connect.php";

$sql="SELECT file_name FROM uploads";
$result= mysqli_query($conn,$sql);



while ($row= mysqli_fetch_array($result)) {
	$class=basename($row[0],".java");
	echo shell_exec("cd uploads && javac $row[0] && java $class");

}




?>
</body>
</html>

