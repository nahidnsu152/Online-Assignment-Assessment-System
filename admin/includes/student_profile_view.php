
<?php 

$id = $_GET['view'];

$query = "SELECT * FROM students WHERE id ='$id' ";
$select_users = mysqli_query($conn,$query);  
while($row = mysqli_fetch_assoc($select_users)) {
  $student_id            = $row['student_id'];
  $fullname             = $row['fullname'];
  $email                = $row['email'];
  $gender         = $row['gender'];
  $phone      = $row['phone_number'];
  $address      = $row['address'];
  $university      = $row['university'];
  $image         = $row['image'];

} 

?>