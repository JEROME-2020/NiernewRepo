<?php


    include('../Database/connection.php');

    // This is for registering Admin
    if(isset($_POST['register'])){


     $username = $_POST['username'];
     $Email = $_POST['Email'];
     $Password = $_POST['password'];


     $sql = "SELECT * FROM user_records where email = '$Email'";
     $select = mysqli_query($connect_db, $sql);
 
     $row = mysqli_num_rows($select);

     if($row > 0){
        echo "Error the user is Exist";
    }
    else{
        $sql = "INSERT INTO user_records(
            username,  
            email,   
            password)
VALUES(
    '$username',
    '$Email ', 
    '$Password'
    )
";


    $inserted = mysqli_query($connect_db, $sql);

    if($inserted){
        echo "The user is Register";
    }
    else{
        echo "The user is Not Register";
    }

    }
}

// This is for recording the Registering Employee

if(isset($_POST['Save'])){
     $username = $_POST['username'];
     $position = $_POST['position'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
     $Password = $_POST['password'];



     $sql = "SELECT * FROM `employee records` WHERE emp_fullname = '$username' AND emp_position = '$position'";
     $select = mysqli_query($connect_db, $sql);

    $row = mysqli_num_rows($select);


        if($row > 0){
            echo "Error the Employee is Exist";
        }
        else{
           $sql2 = "INSERT INTO `employee records`(
                `emp_fullname`,
                `emp_position`,
                `gender`,
                `address`,
                `emp_password`
            )
            VALUES(
                '$username',
                '$position',
                '$gender',
                '$address',
                '$Password'
            );";


        $inserted = mysqli_query($connect_db, $sql2);

        if($inserted){
            echo "The employee is Register Successfully";
        }
        else{
            echo "The employee is Not Register" . mysqli_error($connect_db);
        }

    }

}

?>