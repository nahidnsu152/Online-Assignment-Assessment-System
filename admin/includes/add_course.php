<?php

include "../../config/connect.php";
include "header.php";
include "add_course_handler.php";



?>



<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

       <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

         <h2>Add Course</h2>
       </div>

       <form action="#" method="POST" enctype = "multipart/form-data">

         <?php


         if(isset($_SESSION['success'])){  ?>	
         <div style="margin-bottom:10px; display:inline-block; margin-left: 33%; color:#f7f7f7; background: #222; padding:10px 20px;" class="text-center">Course Added <a href="view_course.php">View Course List</a> </div>


         <?php  } ?>	

         <div class="form-row">
           <div class="form-group col-md-6">
            <label >Course Name</label>
            <input type="text" name="course_name" class="form-control" placeholder="course_name">
          </div>

          <div class="form-group col-md-6">
            <label >Course Code</label>
            <input type="text" name="course_code" class="form-control" placeholder="course_code">
           <!--  <?php if(in_array("email already in used <br>",$error_array)){
                    echo '<p style="color:red;">Email already in used </p>';
                  } ?> -->
          </div>

        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
            <label >Department</label>
            <select name="department" class="form-control">
              <option selected>Choose</option>
              <option>CSE</option>
              <option>EEE</option>
              <option>BBA</option>
              <option>MATHMETICS</option>
              <option>PHYSICS</option>
              <option>CHEMISTRY</option>
              <option>HISTORY</option>
              <option>OTHERS</option>
            </select>
          </div>
          
        </div>






        <div class="text-center">
          <button type="submit" name="submit" class=" btn btn-primary text-left" style="margin-top: 25px; padding: 7px 14px;">Submit</button>
        </div>

      </form>
    </div>
  </div>
</div>
</div>


</div>
</div>

<?php include "footer.php"; ?>