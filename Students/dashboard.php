
<?php 

session_start();

include "header.php";




?>



      <div id="wrapper">
     <?php include "sidebar.php" ?>
      

      <div id="content-wrapper" style="background: #262626;">




    <div class="text-center " style=" text-align: center; margin-top:5%; font-size: 35px; background-color:#b8daff; padding: 30px;" > 


   <img src="<?php echo $_SESSION['image']; ?>" /> 
    <?php 
       
          

        echo "<img class='img-thumbnail' style='width:80px; height:80px;' src='images/".$_SESSION['image']."' > " ;
        echo  "<h2>"."Welcome"." ". $_SESSION['fullname'] ."</h2>";
        echo  "<h2>".$_SESSION['email'] ."</h2>";
         echo  "<h2>". $_SESSION['gender'] ."</h2>";
         echo  "<h2>". $_SESSION['phone_number'] ."</h2>";
         echo  "<h2>".  $_SESSION['address'] ."</h2>";
          


    ?>
    </div>

   













     

   <?php include "footer.php"; ?>