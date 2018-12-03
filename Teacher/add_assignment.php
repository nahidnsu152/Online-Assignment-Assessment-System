<?php

include "config/connect.php";
include "header.php";
include "add_assignment_handler.php";



?>

      <div id="wrapper">
     <?php include "sidebar.php" ?>
      

      <div id="content-wrapper">

<div class="content" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

       <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

         <h2>Add Assignment</h2>
       </div>

       <form action="#" method="POST" enctype = "multipart/form-data">

         <?php


         if(isset($_SESSION['success'])){  ?>	
         <div style="margin-bottom:10px; display:inline-block; margin-left: 33%; color:#f7f7f7; background: #222; padding:10px 20px;" class="text-center">Problem Post Successfully <a href="view_assignments.php">View Problems</a> </div>


         <?php  } ?>	

      
           <div class="form-group col-md-7">
            <label >Problem Name</label>
            <input type="text" name="problem_name" class="form-control" placeholder="problem name">
          </div>

          <div class="form-group col-md-7">
            <label for="in">Description</label>
           <textarea class="form-control" name="description" placeholder="Description" rows="10" cols="50"></textarea><br><br>
          </div>
      

      
           <div class="form-group col-md-7">
            <label for="in">Sample Input</label>
           <textarea class="form-control" name="sample_input" placeholder="Sample input" rows="10" cols="50"></textarea><br><br>
          </div>
       

          <div class="form-group col-md-7">
            <label for="in">Sample Output</label>
           <textarea  class="form-control" name="sample_output" placeholder="Sample Output" rows="10" cols="50"></textarea><br>
          </div>
     
        <div class="text-left">
          <button type="submit" name="submit" class=" btn btn-primary text-left" style="margin-bottom:25px; padding: 7px 14px;">Submit</button>
        </div>

      </form>
    </div>
  </div>
</div>
</div>


</div>
</div>

<?php include "footer.php"; ?>