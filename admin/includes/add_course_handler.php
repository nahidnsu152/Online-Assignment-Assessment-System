

<?php

$error_array = array();

if(isset($_POST['submit'])){


  

    $course_name = strip_tags($_POST['course_name']);      //remove html tags
    $course_name = str_replace(' ', ' ', $course_name);    //remove spaces
    $course_name = ucfirst(strtolower($course_name));      //uppercase first
  

    $course_code = strip_tags($_POST['course_code']);      //remove html tags
    $course_code = str_replace(' ', ' ', $course_code);    //remove spaces

    $department = strip_tags($_POST['department']); 
    $department = str_replace(' ', ' ',$department );

 
  
    //  //checking the right form of email

    // if(filter_var($email,FILTER_VALIDATE_EMAIL)){

    // 	$email = filter_var($email,FILTER_VALIDATE_EMAIL);


    //  //checking is the mail already in used or not
    // 	$email_check = mysqli_query($conn,"select email from teachers where email='$email' ");


    // //count number of rows

    // 	$num_rows =mysqli_num_rows($email_check);

    // 	if($num_rows > 0){
    // 		array_push($error_array, "email already in used <br>") ;
    // 	}


    // }else{
    // 	array_push($error_array, "invalid email <br>") ;
    // }

    
    if(empty($error_array)){



     $query = mysqli_query($conn, "INSERT INTO courses VALUES('','$course_name' , '$course_code' ,'$department') ");



     

   }  
 }
 
 ?>