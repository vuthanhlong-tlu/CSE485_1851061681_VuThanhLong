<?php
include 'connect.php';
$username1=$_POST['username1'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "Insert into  users
values( '$username1',$email', '$password')";
$result=mysqli_query($conn,$sql); 
if ($result){
    header('location:login.php');
    }
else{
        echo "truy vấn lỗi";
    }
?>