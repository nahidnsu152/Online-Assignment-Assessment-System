

<?php  


include "config/connect.php";





if(isset($_POST['submit'])){

  $username = $_POST['fullname'];

$password= md5($_POST['password']);

  
    if(empty($_POST['fullname']) || empty($_POST['password'])){
      header("location: index.php?Empty=Please fill the fields ");
    }
    else{

    $query = "SELECT * FROM admin where name = '$username' AND password='$password'  ";

    $result = mysqli_query($conn,$query);
    $row = mysqli_num_rows($result );
  

    if($row==1){
      session_start();
      $_SESSION['author'] = $username;
      header("location:dashboard.php");
    }else{

      header("location:index.php?invalid=Access Denied!!!");
    }

    

}
}else{
  echo "not working";
}


?>