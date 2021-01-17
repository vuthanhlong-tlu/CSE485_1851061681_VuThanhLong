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
$query=mysqli_query($conn,"select * from `truong` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Trường</h2>
<label>Username: <input type="text" value="<?php echo $row['ten']; ?>" name="ten"></label><br/>
<label>Phone: <input type="text" value="<?php echo $row['diachi']; ?>" name="diachi"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<label>Phone: <input type="text" value="<?php echo $row['sdt']; ?>" name="sdt"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['website']; ?>" name="website"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$ten=$_POST['ten'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$sdt=$_POST['sdt'];
$website=$_POST['website'];
 
// Create connection
$conn = new mysqli("localhost", "root", "", "cv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `truong` SET ten='$ten', diachi='$diachi', email='$email',sdt='$sdt',website='$website' WHERE id='$id'";
 
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