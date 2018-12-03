<?php  


include "config/connect.php";


$fullname=$_POST['fullname'];


if(isset($_POST['submit'])){

$email = $_POST['email'];

$password= md5($_POST['password']);

$result=$conn->query("SELECT * FROM students WHERE email='$email' ");
  $row=$result->fetch_array(MYSQLI_BOTH);

  if(password_verify($password,$row['password'])){ 
  
  session_start();

  $_SESSION['email'] = $row['email'];
  $_SESSION['fullname'] = $row['fullname'];
  $_SESSION['gender'] = $row['gender'];
   $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['address'] = $row['address'];
$_SESSION['image'] = $row['image'];

  header("location:index.php");
}else{
  header("location:login.php?invalid=please enter valid informtion");
}

 if(empty($_POST['email']) || empty($_POST['password'])){
      header("location: login.php?Empty=Please fill the fields ");
    }









}
?>