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
            <a href="Dashboard.php">
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
            <li ><a href="../admin/includes/add_teacher.php" style="color:#222;">Add Teacher</a></li>
            <li ><a href="../admin/includes/view_teachers.php" style="color:#222;">Teacher's List</a></li>

        </ul>
    </li>

    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="pe-7s-user"></i>
        <p>  Student </p>
    </a>
    <ul class="dropdown-menu" style="margin-left: 25px; color:#222;">
        <li ><a href="../admin/includes/add_student.php" style="color:#222;">Add Student</a></li>
        <li ><a href="../admin/includes/view_students.php" style="color:#222;">Student's List</a></li>

    </ul>
</li>

    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="pe-7s-user"></i>
        <p>  Course </p>
    </a>
    <ul class="dropdown-menu" style="margin-left: 25px; color:#222;">
        <li ><a href="../admin/includes/add_course.php" style="color:#222;">Add Course</a></li>
        <li ><a href="../admin/includes/view_course.php" style="color:#222;">View Course</a></li>
        
    </ul>
</li>

</ul>
</div>
</div>