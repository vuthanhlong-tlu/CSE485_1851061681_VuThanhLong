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
$query=mysqli_query($conn,"select * from `tomtat` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Tóm Tắt</h2>
<label>Trước 18: <input type="text" value="<?php echo $row['truoc18']; ?>" name="truoc18"></label><br/>
<label>Sau 18: <input type="text" value="<?php echo $row['sau18']; ?>" name="sau18"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$truoc18=$_POST['truoc18'];
$sau18=$_POST['sau18'];

 
// Create connection
$conn = new mysqli("localhost", "root", "", "cv");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `tomtat` SET truoc18='$truoc18', sau18='$sau18' WHERE id='$id'";
 
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