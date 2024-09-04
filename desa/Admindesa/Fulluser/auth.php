<?php
session_start();
include('db_conn.php');

$username=$_POST["username"];
$password=$_POST["password"];

$query=mysqli_query($conn,"select * from users where user_name='$username' AND password='$password'");

// echo $username;
if(mysqli_num_rows($query)==true )
{
    header('Location:../index.php');

} else {
// echo '<script type ="text/JavaScript">';  
// echo 'alert("Login gagal!")';  
// echo '</script>';
header('Location:login.php');
}
// MLNCSC
// echo $password; 

?>