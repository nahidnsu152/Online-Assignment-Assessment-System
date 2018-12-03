<?php 



             $query = "SELECT * FROM teachers";
             $select_users = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($select_users)) {
                $id = $row['id'];
                $fullname             = $row['fullname'];
                $email            = $row['email'];
                $gender      = $row['gender'];
                $phone      = $row['phone_number'];
                $address      = $row['address'];
                $image         = $row['image'];




                echo "<tr>";

                echo "<td>$fullname  </td>";
                echo "<td>$email </td>";
                echo "<td>$gender</td>";
                echo "<td>$phone</td>";
                echo "<td>$address</td>";
                echo "<td>'<img class='img-thumbnail' style='width:80px; height:80px;' src='images/".$row['image']."' >' </td>" ;
                
                echo "<td><a href='profile_view.php?view=$id'><button type='button' class='btn btn-primary'>View</button></a></td>";

                echo "<td><a data-href='delete.php?link=$id' data-toggle='modal' data-target='#delete'><button  type='button' class='btn btn-ok btn-danger'  >Delete</button></a> </td>";


                echo "<td><a href='update.php?edit=$id & fullname=$fullname & email=$email & phone_number=$phone & address=$address & '> <button type='button' class='btn btn-success'>Edit</button></a> </td>";


                echo "</tr>";

            }















?>

