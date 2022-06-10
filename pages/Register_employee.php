<!-- This is header -->
<?php include("../template/header.php");?>

<h1>Register your Employee</h1>
<form action="../function/register.php" method="post">
        <label for="#">Register the full name:</label>&nbsp;<input type="text" name="username" require><br><br>
        <label for="#">Employees Positions:</label>&nbsp;
            <select name="position">
                <option value="Manager">Manager</option>
                <option value="Teamleader">Team leader</option>
                <option value="Crew">Clerk</option>
            </select>
            <br><br>
        <label for="#">Register Gender:</label>&nbsp;<br><br>
        <label for="#">Male</label><input type="radio" name="gender" require value="Male"><br><br>
        <label for="#">Female</label><input type="radio" name="gender" require value="Female"><br><br>
        <label for="#">Address</label>&nbsp;<input type="text" name="address" require><br><br>
        <label for="#">Give password for Accesing Payrol of Employees:</label>&nbsp;<input type="text" name="password" require><br><br>
        <input type="Submit" value="Save" name="Save">
</form>
<br>
<br>
<a href="../pages/Welcome.php">Back to home</a>

<?php include("../template/footer.php");?>
<!-- This is footer -->