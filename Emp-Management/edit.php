<?php
include("connection.php");
// ----------

session_start();
$UserProfile=$_SESSION['user_name'];

if($UserProfile==true){

}
else{
header('location:login.php');

}

?>
<?php
if (isset($_POST['search'])) {

    $search = $_POST['search'];
    $query = "SELECT * FROM form WHERE emp_code='$search'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);

} ?>


<?php
if (isset($_POST['edit'])) {
    $empcode = $_POST['emp_code'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $pin = $_POST['PIN'];
    $empDepartment = $_POST['empDepartment'];
    $username = $_POST['username'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];


     $query = "UPDATE form SET emp_code='$empcode',first_name='$firstname',last_name='$lastname',dob='$dob',gender='$gender',mobile_no='$mobile_no',email='$email',city='$city',pin='$pin','emp_dept'='$empDepartment',username='$username',password='$Password',confirm_password='$ConfirmPassword' WHERE emp_code='$empcode'";
 
    
    $data = mysqli_query($conn, $query);
   
    if ($data) {
        echo "<script> alert('Record Updated sucessfully')</script>";
        ?>    <meta http-equiv="refresh" content="1; url=./display.php"> <?php
    } else {
        echo "<script> alert('Failed to update Record')</script>";
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emp-management</title>
    <link rel="stylesheet" href="./index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .addbtn,
        button {
            text-decoration: 2px black;
            background-color: darkgray;
        }

        .logout {
            margin-left: 15x;
        }
    </style>
</head>

<body>



    <form action="#" method="POST">
        <h1>EDIT EMPLOYEE DETAILS</h1>

        <div class="form">
            <input type="button" class="addbtn" name="AddNewEmployee" value="Add New Employee<?php
                                                                                                if (isset($_POST['AddNewEmployee'])) {
                                                                                                    header("location: form.php");
                                                                                                    exit;
                                                                                                } ?>">
            <input type="text" name="search" class="textfield" placeholder="search EMP-CODE" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                        echo $result['emp_code'];
                                                                                                    } ?>">
            <input type="text" name="firstname" class="textfield" placeholder="First Name" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                        echo $result['first_name'];
                                                                                                    } ?>"> <br>
            <input type="text" name="lastname" class="textfield" placeholder="Last Name" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                    echo $result['last_name'];
                                                                                                } ?>"> <br>
            <input type="date" name="dob" id="dob" placeholder="Date of birth" value="<?php if (isset($_POST['searchdata'])) {
                                                                                            echo $result['dob'];
                                                                                        } ?>"> <br>
            <input type="number" name="mobile_no" placeholder="Mobile no" value="<?php if (isset($_POST['searchdata'])) {
                                                                                        echo $result['mobile_no'];
                                                                                    } ?>"> <br>
            <input type="email" name="email" id="email Id" placeholder="Email id" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                echo $result['email'];
                                                                                            } ?>"> <br>
            <input type="text" name="city" id="city" placeholder="city" value="<?php if (isset($_POST['searchdata'])) {
                                                                                    echo $result['city'];
                                                                                } ?>"> <br>
            <input type="text" id="" name="empcode" placeholder=" Employee Code" value="<?php if (isset($_POST['searchdata'])) {
                                                                                            echo $result['emp_code'];
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
            <input type="text" name="username" placeholder=" UserName" value="<?php if (isset($_POST['searchdata'])) {
                                                                                    echo $result['username'];
                                                                                } ?>"> <br>
            <input type="password" name="Password" id="Password" placeholder="Password" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                    echo $result['password'];
                                                                                                } ?>"> <br>
            <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" value="<?php if (isset($_POST['searchdata'])) {
                                                                                                                            echo $result['ConfirmPassword'];
                                                                                                                        } ?>"> <br>

            <button type="submit" name="searchdata" value="search">Search</button>
            <button type="submit" name="edit" value="edit">Update</button>
            <button type="submit" name="delete" onclick=" return ValidateDelete()">Delete</button>

            <?php
            if (isset($_POST['delete'])) {
                $emp_code = $_POST['search'];
                $query = "DELETE FROM form WHERE emp_code='$emp_code'";
                $data = mysqli_query($conn, $query);
                if ($data) {
                    echo "<script> alert('Record Deleted sucessfully')</script>";
                } else {
                    echo "<script> alert('Failed to delete Record')</script>";
                }
            }
            ?>

            <br>
        </div>
    </form>
    </div>
  
</body>
<script src="./index.js"></script>

</html>