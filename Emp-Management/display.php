<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Emp List </title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            margin: 0px;
            text-align: center;
            background-color: cadetblue;
            display: flex;
            justify-content: center;
            height: 100vh;
            margin-top: 5%;
        }

   
        button{
            margin-top: 0px;
            align-items: center;
            margin-left: 30px;
            color: black;
    width: 50%;
    height: 25px;
    border: 2px solid black;
    border-radius: 2px; 
    background-color: darkgray;

}


 table{
     width: 100%;
    background:  white;

 }
 tr{
    color:black;

}
    </style>


</head>

<body>


    <form action="#">
    <label  align="center" for=""><b><h1>Emplyoee List</h1></b></label>
<br>
<!-- ------------------------------------------- -->
            <?php
include("connection.php");
error_reporting(0);

$UserProfile=$_SESSION['user_name'];

if($UserProfile==true){

}
else{
header('location:login.php');

}
$query = "SELECT * FROM form ";
$data = mysqli_query($conn, $query);
 $total=mysqli_num_rows($data);
// echo $total;
    
if($total !=0){
?>

  <center> 
<table border="3" cellspacing="7" width="100px">
<thead>
            <tr >
                <th width="5%"> <b>ID </b> </th>
                <th width="8%"><b> First Name</b></th>
                <th width="8%"><b>Last Name </b></th>
                <th width="10%"><b> Gender</b></th>
                <th width="10%"><b>Mobile No </b></th>
                <th width="20%"><b> Email</b></th>
                <th width="39%"><b> Operations   </b></th>
            </tr>
        </thead>



<?php
  while( $result=mysqli_fetch_assoc($data)){

    echo "
    <tr>
        <td>". $result['emp_code']." </td>
        <td>".$result['first_name']."</td>
        <td>".$result['last_name']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['mobile_no']."</td>
        <td>".$result['email']."</td>
        <td> <button><a href='./edit.php'>Edit</a> </button></td>    
    </tr>";

     }
}
else{

    echo "no records found";
}
?>
</table>
</center>
 
</form>
<a href="./logout.php"><input type="submit" name="" value="logout" style="cursor:pointer" >
</a> 
</body>

</html>
