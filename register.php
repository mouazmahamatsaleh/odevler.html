<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "register";

$conn=mysqli_connect($server_name,$username,$password,$database_name) or die();

if (isset($_POST["mht"])) {
   
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
 
$send=mysql_query($conn,"INSERT INTO register(full_name,email,gender,password) VALUES('{$full_name}','{$email}','{$gender}','{$password}')");

}
?>
