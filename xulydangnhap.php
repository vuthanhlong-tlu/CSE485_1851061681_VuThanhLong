<?php
include 'connect.php';
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "Insert into  users
values('$id','$username', '$email', '$password')";
$result=mysqli_query($conn,$sql); 
if ($result){
    header('location:login.php');
    }
else{
        echo "truy vấn lỗi";
    }
?>