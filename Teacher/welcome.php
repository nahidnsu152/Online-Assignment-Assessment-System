<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
    <div class="text-center " style=" text-align: center; margin-top: 10%; font-size: 35px; background-color:#b8daff; padding: 30px;" > 
    <?php 
       
          session_start();

        echo  "<h2>"."Welcome"." ". $_SESSION['email'] ."</h2>";
    ?>
    </div>

    <div style="margin-top: 5%; text-align: center;">
    		<a href="http://localhost/ProjectCompiler/teacher/login.php" > Go Back</a>
    </div>


</body>
</html>