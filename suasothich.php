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
$query=mysqli_query($conn,"select * from `sothich` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Sở Thích</h2>
<label>Sở Thích : <input type="text" value="<?php echo $row['sothich']; ?>" name="sothich"></label><br/>
<label>Ghi Chú: <input type="text" value="<?php echo $row['ghichu']; ?>" name="ghichu"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$sothich=$_POST['sothich'];
$ghichu=$_POST['ghichu'];

 
// Create connection
$conn = new mysqli("localhost", "root", "", "cv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `sothich` SET sothich='$sothich', ghichu='$ghichu' WHERE id='$id'";
 
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