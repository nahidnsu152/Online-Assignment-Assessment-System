

<?php

$error_array = array();

if(isset($_POST['submit'])){


  

    $problem_name = strip_tags($_POST['problem_name']);      //remove html tags
    $problem_name = str_replace(' ', ' ', $problem_name);    //remove spaces
    $problem_name = ucfirst(strtolower($problem_name));      //uppercase first

    $description = strip_tags($_POST['description']);      //remove html tags
    $description = str_replace(' ', ' ', $description);    //remove spaces
    $description = ucfirst(strtolower($description));      //uppercase first

    $sample_input = strip_tags($_POST['sample_input']);      //remove html tags
    $sample_input = str_replace(' ', ' ', $sample_input);    //remove spaces
    $sample_input = ucfirst(strtolower($sample_input));      //uppercase first

    $sample_output = strip_tags($_POST['sample_output']);      //remove html tags
    $sample_output = str_replace(' ', ' ', $sample_output);    //remove spaces
    $sample_output = ucfirst(strtolower($sample_output));      //uppercase first

   
   
  


 

  
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



     $query = mysqli_query($conn, "INSERT INTO assignments VALUES('' , '$problem_name' , '$description' ,'$sample_input', '$sample_output') ");


     session_start();
     $_SESSION['success'] = "Problem Posted" ;
     

   }  
 }
 
 ?>