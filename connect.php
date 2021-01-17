<?php
$conn = mysqli_connect( 'localhost', 'root', '', 'cv');
if($conn === false){
    die("Lỗi kết nối" . mysqli_connect_error());
}
?>