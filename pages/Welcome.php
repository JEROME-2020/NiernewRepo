<?php 
    
    session_start();

    if(isset($_SESSION['Email'])){

        // If the session is not exit you can't access this page because the header location will dedirect you from index.php
    }
    else{
        header('location: http://localhost/NIercode/index.php');
    }
?>




<?php include("../template/header.php");?>
<body>
    <h1>This is Admin page</h1>
    <h1>Welcome Mr: <span style="color: green;"><?php echo $_SESSION['Email']; ?></span></h1>

    <a href="http://localhost/NIercode/function/logout.php">Logout</a>
    <p>==================================================================================</p>

    <h2>Employee Data sheet</h2>
    <ul>
        <li><a href="Register_employee.php">Register Employee</a></li>
        <li><a href="Employee_records.php">Employee Records</a></li>
    </ul>
</body>
<?php include("../template/footer.php");?>