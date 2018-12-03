
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../admin/assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
          <h3>ProjectCompiler</h3>
      </div>

      <ul class="nav">
        <li class="active">
            <a href="index.php">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>

                <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="pe-7s-user"></i>
            <p>  Profile </p>
        </a>
        <ul class="dropdown-menu" style="margin-left: 25px; color:#222;">
            <li ><a href="" style="color:#222;">View Profile</a></li>
            <li ><a href="" style="color:#222;">Edit Profile</a></li>

        </ul>
    </li>

        <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="pe-7s-user"></i>
            <p>  Teacher </p>
        </a>
        <ul class="dropdown-menu" style="margin-left: 25px; color:#222;">
            <li ><a href="../includes/add_teacher.php" style="color:#222;">Add Teacher</a></li>
            <li ><a href="../includes/view_teachers.php" style="color:#222;">Teacher's List</a></li>

        </ul>
    </li>

    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="pe-7s-user"></i>
        <p>  Student </p>
    </a>
    <ul class="dropdown-menu" style="margin-left: 25px; color:#222;">
        <li ><a href="../includes/add_student.php" style="color:#222;">Add Student</a></li>
        <li ><a href="../includes/view_students.php" style="color:#222;">Student's List</a></li>

    </ul>
</li>

    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="pe-7s-user"></i>
        <p>  Course </p>
    </a>
    <ul class="dropdown-menu" style="margin-left: 25px; color:#222;">
        <li ><a href="../includes/add_course.php" style="color:#222;">Add Course</a></li>
        <li ><a href="../includes/view_course.php" style="color:#222;">View Course</a></li>
        
    </ul>
</li>

</ul>
</div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-dashboard"></i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>

                    <li>
                     <a href="">
                        <i class="fa fa-search"></i>
                        <p class="hidden-lg hidden-md">Search</p>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                 <a href="">
                     <p>Account</p>
                 </a>
             </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>
                  Dropdown
                  <b class="caret"></b>
              </p>

          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </li>
    <li>
        <a href="../logout.php">
            <p>Log out</p>
        </a>
    </li>
    <li class="separator hidden-lg"></li>
</ul>
</div>
</div>
</nav>