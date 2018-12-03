<?php 

include "../../config/connect.php";


             $query = "SELECT * FROM courses";
             $select_course = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($select_course)) {
                $id = $row['id'];
                $course_name            = $row['course_name'];
                $course_code           = $row['course_code'];
                $department      = $row['department'];
                




                echo "<tr>";

                echo "<td>$course_name  </td>";
                echo "<td>$course_code </td>";
                echo "<td>$department  </td>";
                
                echo "<td><a href='profile_view.php?view=$id'><button type='button' class='btn btn-primary'>View</button></a></td>";

                echo "<td><a data-href='delete.php?id=$id' data-toggle='modal' data-target='#delete'><button  type='button' class='btn btn-ok btn-danger'  >Delete</button></a> </td>";


                // echo "<td><a href='update.php?edit=$id & fullname=$fullname & email=$email & phone_number=$phone & address=$address & '> <button type='button' class='btn btn-success'>Edit</button></a> </td>";


                echo "</tr>";

            }




?>

