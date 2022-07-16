<?php
include("connection.php");
session_start();

if (!isset($_SESSION["username"])) {

    header("location:login.php");
}


?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["username"] ?>

    <a href="logout.php">Logout</a>
</body>

</html>

<!-- userhome.php -->


<?php
session_start();
if (!isset($_SESSION["username"])) {

    header("location:login.php");
}

?>




<h1>THIS IS USER HOME PAGE</h1><?php echo $_SESSION["username"] ?>



<a href="logout.php">Logout</a>



</body>

</html>


<?php

session_start();

session_destroy();

header("location:login.php");



?>