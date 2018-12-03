  <?php include "header.php"; ?>




  <div id="wrapper">
   <?php include "sidebar.php" ?>


   <div id="content-wrapper">

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

           <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

             <h2>Java Compiler</h2>
           </div>


           <div class="main">
            <div class="row cspace">
              <div class="col-sm-8">
                <div class="form-group">
                  <form action="compile.php" id="form" name="f2" method="POST" >
                    <label for="lang">Choose Language</label>

                    <select class="form-control" name="language">
                      <option value="java">Java</option>


                    </select><br><br>

                    <label for="ta">Write Your Code</label>
                    <p style="color:red;">Give The Class Name as Main</p>
                    <textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
                    <label for="in">Enter Your Input</label>
                    <textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
                    <input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


                  </form>


</div>
</div>


</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>




<?php include "footer.php"; ?>


