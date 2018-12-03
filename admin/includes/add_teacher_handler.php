

<?php

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