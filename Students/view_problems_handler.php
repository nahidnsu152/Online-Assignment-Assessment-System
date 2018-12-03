<?php 

include "config/connect.php";


             $query = "SELECT * FROM assignments";
             $select_problem = mysqli_query($conn,$query);  
             while($row = mysqli_fetch_assoc($select_problem)) {
                $id = $row['id'];
                $problem_name            = $row['problem_name'];
                $description           = $row['description'];
                $sample_input           = $row['sample_input'];
                $sample_output     = $row['sample_output'];
                




                echo "<tr>";

                echo "<td>$problem_name  </td>";
                echo "<td>$description </td>";
                echo "<td>$sample_input </td>";
                echo "<td>$sample_output  </td>";
                
                echo "<td><a href='profile_view.php?view=$id'><button type='button' class='btn btn-primary'>View</button></a></td>";

                echo "<td><a data-href='delete.php?id=$id' data-toggle='modal' data-target='#delete'><button  type='button' class='btn btn-ok btn-danger'  >Delete</button></a> </td>";


                // echo "<td><a href='update.php?edit=$id & fullname=$fullname & email=$email & phone_number=$phone & address=$address & '> <button type='button' class='btn btn-success'>Edit</button></a> </td>";


                echo "</tr>";

            }




?>

