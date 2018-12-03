<?php
include "config/connect.php";
$id = "";
$fullname = "";            // hold first name             
$gender ="";            // hold gender_type
$email = ""; 
$phone_number = "";
$institution ="";
$address = "";                // hold email adress
$password=""; 
$image = "";               // hold password
$confirm_password ="";       // hold confirm pass
$error_array =  array(); 

if(isset($_POST['submit'])){



    // $student_id = strip_tags($_POST['student_id']);      //remove html tags
    // $student_id = str_replace(' ', ' ', $student_id);    //remove spaces
  

    $fullname = strip_tags($_POST['fullname']);      //remove html tags
    $fullname = str_replace(' ', ' ', $fullname);    //remove spaces
    $fullname = ucfirst(strtolower($fullname));      //uppercase first
    
    $email = strip_tags($_POST['email']);      //remove html tags
    $email = str_replace(' ', ' ', $email);    //remove spaces
    $email = ucfirst(strtolower($email));      //uppercase first





    $gender = strip_tags($_POST['gender']); 
    $gender = str_replace(' ', ' ',$gender );


    $phone_number = strip_tags($_POST['phone_number']);      //remove html tags
    $phone_number = str_replace(' ', ' ', $phone_number);    //remove spaces


    // $institution = strip_tags($_POST['institution']);      //remove html tags
    // $institution = str_replace(' ', ' ', $institution);    //remove spaces


    $address = strip_tags($_POST['address']);      //remove html tags
    $address = str_replace(' ', ' ', $address);    //remove spaces



    $password = mysqli_real_escape_string($conn,$_POST['password']);                     
    $password = str_replace(' ', ' ', $password);                    //remove spaces


    $confirm_password = mysqli_real_escape_string($conn,$_POST['c_password']);            
    $confirm_password = str_replace(' ', ' ', $confirm_password);    //remove spaces
    

    
     //checking the right form of email

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

    	$email = filter_var($email,FILTER_VALIDATE_EMAIL);


     //checking is the mail already in used or not
    	$email_check = mysqli_query($conn,"select email from teachers where email='$email' ");


    //count number of rows

    	$num_rows =mysqli_num_rows($email_check);

    	if($num_rows > 0){
    		array_push($error_array, "email already in used <br>") ;
    	}


    }else{
    	array_push($error_array, "invalid email <br>") ;
    }


    $image = $_FILES['image']['name'];
    

  	// image file directory
    $target = "images/".basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }







    // Password Issue

    if(  $password != $confirm_password){
    	array_push($error_array, "Password not match! try again!!! <br>");
    	
    }

    if(strlen($password) < 5){
    	array_push($error_array, "Password should at least five words! <br>");
    }


    //Insert values in the database
    
    if(empty($error_array)){

     $StorePassword = password_hash($password, PASSWORD_BCRYPT,array('cost' => 10));



     $query = mysqli_query($conn, "INSERT INTO teachers VALUES('','$fullname' , '$email' ,'$gender', '$phone_number','$address','$image' , '$StorePassword') ");


     session_start();
     $_SESSION['success'] = "Registration Success" ;
     

   }  
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Compiler</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- css files -->
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
	<!-- //css files -->

	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<!-- body starts -->
<body style="background-image:url(register.jpg); background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: left center;">
	<!-- section -->
	<section class="register">
		<h1 class="text-center text-uppercase" style="font-family: sans-serif; font-weight: 700; font-size:32px; color:#f7f7f7; text-align: center; padding: 40px;"> Teacher's Registration </h1>
		<div class="register-full">
			<div class="register-right" style="margin-top: 25px;" >
				<div class="register-in">
					<h2><span class="fa fa-pencil"></span> Join As Teacher</h2>
					<div class="register-form">
						<form action="#" method="post" enctype="multipart/form-data">

							<?php if(isset($_SESSION['success'])){  ?>	
                            <div style="margin-bottom:10px;" class="text-center alert alert-success">Registration Success <a href="http://localhost/ProjectCompiler/teacher/login.php">Log In Here</a> </div>
							<?php  } ?>	 

							<div class="fields-grid">
								<div class="styled-input agile-styled-input-top">
									<input type="text" name="fullname" required="" > 
									<label>Full Name</label>
									<span></span>
								</div>

								<div class="styled-input">
									<input type="email" name="email" required="">     
									<label>Email</label>
									<span></span>

								 <?php if(in_array("email already in used <br>",$error_array)){
										echo '<p style="color:red;">Email already in used </p>';
									} ?>
 
								</div>


                               <div class="styled-input agile-styled-input-top">
									<select id="category2" required="" name="gender" style="width:90%;">
										<option selected disabled>Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<span></span>
								</div>

								<div class="styled-input agile-styled-input-top">
									<input type="text" name="phone_number" required="" > 
									<label>Phone Number</label>
									<span></span>
								</div>

								<div class="styled-input agile-styled-input-top">
									<input type="text" name="address" required="" > 
									<label>Address</label>
									<span></span>
								</div>
								  <div class="form-row">
						          <div class="form-group col-md-6">
						            <label >Upload Image</label>
						            <input type="file" name="image" class="form-control" id="inputEmail4" >
						          </div>
						        </div>

								<div class="styled-input">
									<input type="password" name="password" required="">
									<label>Password</label>
									<span></span>

									<?php if(in_array("Password should at least five words! <br>",$error_array)){
										echo '<p style="color:red;">Password should at least five words!</p>';
									} ?>

								</div>

								<div class="styled-input">
									<input type="password" name="c_password" required="">
									<label>Confirm Password</label>
									<span></span>
									<br>
									<?php if(in_array("Password not match! try again!!! <br>",$error_array)){
										echo '<p style="color:red;"> Password not match! try again!!! <p>';
									} ?> 
								</div>

								<div class="clear"> </div>
							</div>
							<input type="submit"  name="submit" value="submit">		
					</form>
					</div>
					
				</div>

				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
		</div>
		<!-- copyright -->
		<p class="agile-copyright"> Developed By Compiler Team! </p>
		<!-- //copyright -->
	</section>
	<!-- //section -->


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>	
<!-- //body ends -->
</html>