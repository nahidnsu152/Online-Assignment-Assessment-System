<?php

include "connect.php";
include "header.php";
include "update_handler.php";



?>



<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

       <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

         <h2>Update Teacher</h2>
       </div>
   
       <form action="#" method="GET" enctype = "multipart/form-data">

        <input type="text" value="<?php echo $_GET['edit'] ?> " name="edit">
         <div class="form-row">
           <div class="form-group col-md-6">
            <label >Full Name</label>
            <input type="text" name="fullname" class="form-control" placeholder="Full Name" value=" <?php echo $_GET['fullname'] ?> ">
          </div>

          <div class="form-group col-md-6">
            <label >Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value = "<?php echo $_GET['email'] ?>">
          </div>

        </div>

        <div class="form-row">
    
          <div class="form-group col-md-6">
            <label >Phone Number</label>
            <input type="integer" class="form-control" name="phone_number" placeholder="Phone Number" value="<?php echo $_GET['phone_number'] ?>">
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">Address</label>
            <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="address" value="<?php echo $_GET['address'] ?>">
          </div>
        </div>


        <div class="text-center">
          <button type="submit" name="update" class=" btn btn-primary text-left" style="margin-top: 25px; padding: 7px 14px;">Update</button>
        </div>

      </form>
    </div>
  </div>
</div>
</div>


</div>
</div>

<?php include "footer.php"; ?>