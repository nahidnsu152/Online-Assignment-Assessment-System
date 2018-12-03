 <?php 
  include "connect.php";

  $sid = $_GET['link'];
  $query = "DELETE FROM students WHERE id = '$sid' ";
  $data = mysqli_query($conn,$query);

  header("location:view_students.php");



  ?>