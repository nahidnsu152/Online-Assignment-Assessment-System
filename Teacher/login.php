
<?php 
include 'config/connect.php';



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn Portal</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body class="student-portal">

	<section class="login-block" > 
			<div class="container">
				<h2 class="text-center heading">Teacher's Portal</h2>
				<div class="row">
						<div class= "col-md-4 login-sec" style="left:35% ;">
					<h2 class="text-center">Login Now</h2>

					<form class="" action="login_handler.php" method="post" enctype="multipart/form-data">

					 <?php if(@$_GET['Empty']==true){ ?>

                     <div class="alert alert-danger text-center" > <?php echo $_GET['Empty'] ?></div>
                       
                        <?php  }   ?>


                         <?php  if(@$_GET['invalid']==true){ ?>

                         <div class="alert alert-danger text-center" ><?php echo $_GET['invalid'] ?> </div>
                       
                        <?php  }   ?>
					
						<div class="form-group">
							<input type="text" class="form-control" name="email" placeholder="User Email" value="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password"  value="">
							
							
						</div>


						<div class="form-check">
						<div class="row">
							<div class="submit"><button name="submit" type="submit" class="btn btn-login float-right">Submit</button></div>
							<div><p style="color: #f7f7f7; font-weight: 400; margin:10px 20px;">Forgot Password? <span><a href="http://localhost/ProjectCompiler/teacher/forgotpass.php">Click Here</a></span></p></div>
							
							
						</div>
                         </div>	
						<div> 
                           <p style="color: #f7f7f7; font-weight: 400; margin-top:25px;">Didn't Register? <a href="http://localhost/ProjectCompiler/teacher/register/register.php"> Sign Up Here</a></p>
						</div>

					</form>
				</div>	
				</div>
			</div>


			
		</section>


		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</body>
	</html>