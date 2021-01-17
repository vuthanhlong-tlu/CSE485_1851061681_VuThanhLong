<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include 'connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `thongtincanhan` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa thành viên</h2>
<label>Họ Và Tên: <input type="text" value="<?php echo $row['ten']; ?>" name="ten"></label><br/>
<label>Ngày Sinh: <input type="text" value="<?php echo $row['ngaysinh']; ?>" name="ngaysinh"></label><br/>
<label>Địa Chỉ: <input type="text" value="<?php echo $row['diachi']; ?>" name="diachi"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<label>Số Điện Thoại: <input type="text" value="<?php echo $row['sdt']; ?>" name="sdt"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$ten=$_POST['ten'];
$ngaysinh=$_POST['ngaysinh'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$sdt=$_POST['sdt'];
 
// Create connection
$conn = new mysqli("localhost", "root", "", "cv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `thongtincanhan` SET ten='$ten', ngaysinh='$ngaysinh', diachi='$diachi', email='$email',sdt='$sdt' WHERE id='$id'";
 
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
header("location: admin.php");
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>
</form>
</body>
</html>