
<!-- This is header -->
<?php 
include('../Database/connection.php');
include("../template/header.php");
?>


<h1>This is all records of Employee</h1>
<table border="1">
    <tr>
        <th>EMP ID</th>
        <th>EMP FULL NAME</th>
        <th>EMP POSITION</th>
        <th>EMP GENDER</th>
        <th>EMP ADDRESS</th>
        <th>EMP PASSWORD</th>
        <th>UPDATE</th>
        <th>DELETE</th>
    </tr>
    <tr>
        <?php

           $select_emp = "SELECT * FROM `employee records`"; 
           $result_emp = mysqli_query($connect_db, $select_emp);

           while ($row = mysqli_fetch_assoc($result_emp)) {
            echo "<tr>";
                echo "<td>" . $row['emp_id'] . "</td>";
                echo "<td>" . $row['emp_fullname'] . "</td>";
                echo "<td>" . $row['emp_position'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['emp_password'] . "</td>";
                echo "<td><a href='../function/Update.php?Update=". $row['emp_id'] ." ' class='btn btn-primary'>UPDATE</a></td>";
                echo "<td><a href='../function/Delete.php?Delete=" . $row['emp_id'] ." '  class='btn btn-danger'>DELETE</a></td>";
            echo "</tr>";
        }
        
        ?>
    </tr>
</table>
<br><br>
<a href="http://localhost/NIercode/pages/Welcome.php">Back to home</a>

<?php include("../template/footer.php");?>
<!-- This is footer -->