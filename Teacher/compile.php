  <?php include "header.php"; ?>




  <div id="wrapper">
  	<?php include "sidebar.php" ?>


  	<div id="content-wrapper">

  		<div class="content">
  			<div class="container-fluid">
  				<div class="row">
  					<div class="col-md-12">

  						<div class="header text-center" style="padding:25px; margin-bottom: 20px;">

  							<h2>Compiler Result</h2>
  						</div>

  						<?php

  						$languageID=$_POST["language"];
  						error_reporting(0);


  						if($_FILES["file"]["name"]!="")
  						{
  							include "compilers/make.php";
  						}
  						else
  						{
  							switch($languageID)
  							{
  								
  								case "java":
  								{	
  									include("compilers/java.php");
  									break;
  								}
  								
  							}
  						}
  						?>


  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>




  <?php include "footer.php"; ?>

