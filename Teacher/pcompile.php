<?php include "header.php"; ?>
<div class="main">
<div class="row">
<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Output</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-1">
</div>
<div class="col-sm-8">

<div id="div"></div>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>






</div>

<div class="col-sm-3">

</div>
</div>
</div>
</div><br><br><br>

<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
</div>

<div class="col-sm-5">


<div class="fm">

<b>Beta Version-2016</b><br>
<b>Developed By Ashadullah Shawon</b>

</div>
</div>


<div class="col-sm-4">

</div>
</div>
</div>
</div>



</body>
</html>