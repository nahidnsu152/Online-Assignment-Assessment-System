<?php
include "../../config/connect.php";
include "header.php";


?>



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

             <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

                 <h2>Course List</h2>
             </div>



             <table class="table">
              <thead class="thead-light">
                <tr>

                  <th scope="col">Course Name</th>
                  <th scope="col">Course Code</th>
                  <th scope="col">Department</th>
                  <th scope="col">Action</th>
                 
              </tr>
          </thead>
          <tbody>


             <?php  include "view_course_list.php";   ?>




</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel" style="text-align: center;">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Are You Sure You Want To Delete?</p>
        <input type="hidden" name="delete_id" id="del_id" value="" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>





<?php include "footer.php"; ?>
