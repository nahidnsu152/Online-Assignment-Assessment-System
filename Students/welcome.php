<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
	<div class="text-center " style="margin-top: 15%; text-align: center; font-size: 32px; background-color: #d4edda; padding: 30px;" > 
	<?php 
       
        session_start();

        echo  "<h3>"."Welcome"." ". $_SESSION['fullname'] ."</h3>";
	?>
	</div>

<section id="submit_assignment">

    <div class="assignment_form">
        <button class="file" id="upload_button">+</button>
        <form id="assignment_form" class="assignment_form">
            <input  id="assignment_input" type="text" placeholder="Enter message here...">
            <input type="submit" value="submit" name="text_submit">
        </form>
    </div>


    <article id="post">
    </article>

<div id="upload_div">
    <button id="hide_button">close</button>
    <form id="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <label for="file" id="file_icon" name="filelabel"> select file </label>
        <input type="submit" value="submit" name="submit" id="submit">

        <div class="bar" id="bar">
            <span class="bar-fill" id="pb">
            </span>
        </div>
    </form>
</div>


    

</section>

<?php 
include "config/connect.php";

$sql="SELECT file_name FROM uploads";
$result= mysqli_query($conn,$sql);



while ($row= mysqli_fetch_array($result)) {
    $class=basename($row[0],".java");
    echo shell_exec("cd uploads && javac $row[0] && java $class");

}




?>
<div style="margin-top: 5%;"> 

<a href="compile.php" >Compile Here</a>
</div>

</body>
</html>