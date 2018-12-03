  <?php 
  include "connect.php";

  $tid = $_GET['link'];
  $query = "DELETE FROM teachers WHERE id = '$tid' ";
  $data = mysqli_query($conn,$query);

  header("location:view_teachers.php");



  ?>