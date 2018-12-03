
<?php 

$id = $_GET['view'];

$query = "SELECT * FROM teachers WHERE id ='$id' ";
$select_users = mysqli_query($conn,$query);  
while($row = mysqli_fetch_assoc($select_users)) {

  $fullname             = $row['fullname'];
  $email                = $row['email'];
  $gender         = $row['gender'];
  $phone      = $row['phone_number'];
  $address      = $row['address'];
  $image         = $row['image'];

} 

?>