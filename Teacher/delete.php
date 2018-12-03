 <?php 
  include "connect.php";

  $del_id = $_GET['id'];
  $query = "DELETE FROM courses WHERE id = '$del_id' ";
  $data = mysqli_query($conn,$query);

  header("location:view_course_list.php");



  ?>