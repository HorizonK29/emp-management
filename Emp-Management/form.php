<?php
include("connection.php");
?>
<?php
if (isset($_POST['searchdata'])) {

    $search = $_POST['search'];
    $query = "SELECT * FROM form WHERE emp_code='$search'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);
}
?>


<?php
if (isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $pin = $_POST['PIN'];
    $empcode = $_POST['empcode'];
    $empDepartment = $_POST['empDepartment'];
    $username = $_POST['username'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];


    $query = "INSERT INTO form (emp_code,first_name,last_name,dob,gender,mobile_no,email,city,pin,emp_dept,username,password,confirm_password)
values ('$empcode','$firstname','$lastname','$dob','$gender','$mobile_no','$email','$city','$pin','$empDepartment','$username','$Password','$ConfirmPassword')";
}
$data = mysqli_query($conn, $query);
if ($data) {

    echo "<script> alert('Data Added successfully')</script>";
} else {
    echo "<script>alert('failed to added data')</script>";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMP-MANAGEMENT</title>
    <link rel="stylesheet" href="./index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="center">
        <form action="#" method="POST">
            <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
            <h2>Resgister New Emplyoee</h2>
            <div class="form">
                <input type="text" id="" name="empcode" placeholder=" Employee Code" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                echo $result['emp_code'];
                                                                                            } ?>"> <br>
                <input type="text" name="firstname" class="textfield" placeholder="First Name" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                            echo $result['first_name'];
                                                                                                        } ?>"> <br>
                <input type="text" name="lastname" class="textfield" placeholder="Last Name" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                        echo $result['last_name'];
                                                                                                    } ?>"> <br>
                <input type="date" name="dob" id="dob" placeholder="Date of birth" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                echo $result['dob'];
                                                                                            } ?>"> <br>
                <label class="form-check-label"> <b> Gender :</b></label>

                <input class="form-check-input" type="radio" name="gender" id="gender" <?php if ($gender == "Male" || isset($_POST['searchdata'])) {
                                                                                            echo $result['gender'];
                                                                                            echo "checked";
                                                                                        } ?> value="Male" selected>
                <label class="form-check-label">Male</label>

                <input class="form-check-input" type="radio" id="gender" name="gender" <?php if ($gender == "Female" || isset($_POST['searchdata'])) {
                                                                                            echo $result['gender'];
                                                                                            echo "checked";
                                                                                        } ?> value="Female" selected>
                <label class="form-check-label">Female</label>


                <input class="form-check-input" type="radio" id="gender" name="gender" <?php if ($gender == "Other" || isset($_POST['searchdata'])) {
                                                                                            echo $result['gender'];
                                                                                            echo "checked";
                                                                                        } ?> value="Other">
                <label class="form-check-label">Other</label>


                <br>
                <input type="number" name="mobile_no" placeholder="Mobile no" value="<?php if (isset($_POST['searchdata'])) {
                                                                                            echo $result['mobile_no'];
                                                                                        } ?>"> <br>
                <input type="email" name="email" id="email Id" placeholder="Email id" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                    echo $result['email'];
                                                                                                } ?>"> <br>
                <input type="text" name="city" id="city" placeholder="city" value="<?php if (isset($_POST['searchdata'])) {
                                                                                        echo $result['city'];
                                                                                    } ?>"> <br>
                <input type="number" id="PIN" name="PIN" placeholder="PIN" value="<?php if (isset($_POST['searchdata'])) {
                                                                                        echo $result['pin'];
                                                                                    } ?>"> <br>


                <select name="empDepartment" value=" NotSelected">
                    <option name="empDepartment" value=" EmployeeDepartment"> Employee Department</option>
                    <option name="empDepartment" value="Account" <?php if ($result['emp_dept'] == 'Account') {
                                                                        echo "selected";
                                                                    } ?>>Account</option>
                    <option name="empDepartment" value="Legal" <?php if ($result['emp_dept'] == 'Legal') {
                                                                    echo "selected";
                                                                } ?>>Legal</option>
                    <option name="empDepartment" value="Purchase" <?php if ($result['emp_dept'] == 'Purchase') {
                                                                        echo "selected";
                                                                    } ?>>Purchase</option>
                    <option name="empDepartment" value="Sale" <?php if ($result['emp_dept'] == 'Sale') {
                                                                    echo "selected";
                                                                } ?>>Sale</option>
                    <option name="empDepartment" value="Software" <?php if ($result['emp_dept'] == 'Software') {
                                                                        echo "selected";
                                                                    } ?>>Software</option>
                    <option name="empDepartment" value="Hardware" <?php if ($result['emp_dept'] == 'Hardware') {
                                                                        echo "selected";
                                                                    } ?>>Hardware</option>
                    <option name="empDepartment" value="Administration" <?php if ($result['Administration'] == 'Sale') {
                                                                            echo "selected";
                                                                        } ?>>Administration</option>
                </select> <br>

                <input type="text" name="username" placeholder=" UserName"> <br>
                <input type="password" name="Password" id="Password" placeholder="Password"> <br>
                <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password"> <br>
                <button type="submit" name="add">Add</button>
                <button type="reset"> Reset</button>
                <br>
                <div class="logout">
    <a href="./login.php">Logout</a>
    </div>
            </div>
        </form>
    </div>
</body>
<script src="./index.js"></script>

</html>

<?php

session_start();
$UserProfile=$_SESSION['user_name'];

if($UserProfile==true){

}
else{
header('location:login.php');

}

?> 