<!DOCTYPE html>
<html>
<head>
<title>Học Vấn</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include 'connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `hocvan` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Học Vấn</h2>
<label>Tên Trường: <input type="text" value="<?php echo $row['tentruong']; ?>" name="tentruong"></label><br/>
<label>Tên Khoa: <input type="text" value="<?php echo $row['tenkhoa']; ?>" name="tenkhoa"></label><br/>
<label>Tên Lớp: <input type="text" value="<?php echo $row['tenlop']; ?>" name="tenlop"></label><br/>
<label>Ngày Vào: <input type="text" value="<?php echo $row['ngayvao']; ?>" name="ngayvao"></label><br/>
<label>Ngày Ra: <input type="text" value="<?php echo $row['ngayra']; ?>" name="ngayra"></label><br/>
<label>Chú Thích: <input type="text" value="<?php echo $row['chuthich']; ?>" name="chuthich"></label><br/>

<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$tentruong=$_POST['tentruong'];
$tenkhoa=$_POST['tenlop'];
$tenlop=$_POST['tenlop'];
$ngayvao=$_POST['ngayvao'];
$ngayra=$_POST['ngayra'];
$chuthich=$_POST['chuthich'];


 
// Create connection
$conn = new mysqli("localhost", "root", "", "cv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `hocvan` SET tentruong='$tentruong', tenkhoa='$tenkhoa', tenlop='$tenlop', ngayvao='$ngayvao',ngayra='$ngayra',chuthich='$chuthich' WHERE id='$id'";
 
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