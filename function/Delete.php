<?php

    include('../Database/connection.php');

    if(isset($_GET['Delete'])){

    $empDelete = $_GET['Delete'];
    $delete = "DELETE FROM `employee records` WHERE emp_id = '$empDelete'";

    if(mysqli_query($connect_db, $delete)){
        echo "<script>
                alert('Deleted Successfully');
            </script>";
    }
    else{
        echo "Error" . mysqli_error();
    }
}




?>