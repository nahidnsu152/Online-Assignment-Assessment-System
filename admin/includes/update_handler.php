

<?php

    include "connect.php";
   
if(isset($_GET['update'])){
$uid = $_GET['edit']; 

   $fullname=$_GET['fullname'];
   $email=$_GET['email'];
   
   $phone=$_GET['phone_number'];
   $address=$_GET['address'];

     $query =  "UPDATE teachers SET fullname =  '$fullname' , email ='$email' , phone_number = '$phone',  address= '$address'  WHERE id='$uid' ";

        $update_query  = mysqli_query($conn,$query);

        if($update_query ){
           
            echo "update success";
        }

        }
?>