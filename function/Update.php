<?php 
            
    include('../Database/connection.php');
    $ID = $_GET['Update'];

    $select_emp = "SELECT * FROM `employee records` WHERE emp_id = '$ID'";
                
    $result = mysqli_query($connect_db, $select_emp);

    $data = mysqli_fetch_assoc($result);

?>


<form method="post" action="Update.php">
    <h1>UPDATE Employee</h1>
        <input type="hidden" name="emp_id" value="<?php echo $data['emp_id'];?>"><br><br>
        <label for="">Full name</label>&nbsp; <input type="text" name="fullname" value="<?php echo $data['emp_fullname'];?>"><br><br>
        <label for="">Position</label>&nbsp; <input type="text" name="position" value="<?php echo $data['emp_position'];?>"><br><br>
        <label for="">Gender</label>&nbsp; <input type="text" name="gender" value="<?php echo $data['gender'];?>"><br><br>
        <label for="">Address</label>&nbsp; <input type="text" name="address" value="<?php echo $data['address'];?>"><br><br>
        <label for="">Password</label>&nbsp; <input type="text" name="password" value="<?php echo $data['emp_password'];?>"><br><br>
        <input type="submit" name="update">
</form>


<?php

    if(isset($_POST['update'])){

        echo $id = $_POST['emp_id'];
        echo $fullname = $_POST['fullname'];
        echo $position = $_POST['position'];
        echo $gender = $_POST['gender'];
        echo $address = $_POST['address'];
       echo  $password = $_POST['password'];


        $sql = "UPDATE `employee records`
               SET `emp_fullname` = '$fullname',
                   `emp_position` = '$position',
                   `gender` = '$gender',
                   `address` = '$address',
                   `emp_password` = '$password'
                   WHERE `emp_id` = '$id'";


        $result = mysqli_query($connect_db, $sql);

        if(!$result){
            echo "Not Update" . mysqli_error();
        }
        else{
            header('location:http://localhost/NIercode/pages/Employee_records.php?Successfully Update');
        }

    }


?>