

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn Portal</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body class="student-portal">

	<section class="login-block">
			<div class="container">
				<h2 class="text-center heading">Admin Portal</h2>
				<div class="row">
						<div class= "col-md-4 login-sec">
					<h2 class="text-center">Login Now</h2>

					<form class="" action="login.php" method="post">
                          
                        <?php   if(@$_GET['invalid']==true){   ?>

                           <div class="alert alert-danger text-center" ><?php echo $_GET['invalid'] ?> </div>
                       
                        <?php  }   ?>




                         <?php   if(@$_GET['Empty']==true){   ?>

                           <div class="alert alert-danger text-center" ><?php echo $_GET['Empty'] ?> </div>
                       
                        <?php  }   ?>



                        <?php   if(@$_GET['logout']==true){   ?>

                           <div class="alert alert-danger text-center" ><?php echo $_GET['logout'] ?> </div>
                       
                        <?php  }   ?>


                         



						<div class="form-group">
							<input type="text" class="form-control" name="fullname" placeholder="Username" value="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password"  value="">
						</div>


						<div class="form-check">
						<div class="row">
							<div class="submit"><button name="submit" type="submit" class="btn btn-login float-right">Submit</button></div>
							<div><p style="color: #f7f7f7; font-weight: 400; margin:10px 20px;">Forgot Password? <span><a href="">Click Here</a></span></p></div>
							
							
						</div>
     
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