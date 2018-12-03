     <?php 

     include "connect.php";
     include "header.php";
     include "student_profile_view.php";
     
     ?>


     <div class="content" style="margin-top:5%; margin-left: 15%;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">




            <div class="text-left" >

              <?php echo "<img style='height:350px;  width:300px;' class='img-thumbnail' src='images/".$image."' >"; ?>
            </div>
            <div class="text-left" style="margin-top:5%;" >

             <?php 
              echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Phone      :  $student_id    </h4> ";
             echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Fullname   :  $fullname   </h4> ";
             echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Email    :  $email   </h4> ";
             echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Gender    :  $gender   </h4> ";
             echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Phone      :  $phone    </h4> ";
             echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Phone      :  $university    </h4> ";

             echo " <h4 style='color:#222; font-size:24px; font-weight:500; font-family:sans-serif;'>Address       :$address   </h4> ";



             ?>


           </div>            
         </div>
       </div>
     </div>
   </div>

   <?php include "footer.php"; ?>