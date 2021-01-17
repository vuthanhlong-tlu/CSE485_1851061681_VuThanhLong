<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "connect.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM hocvan WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $tentruong = $row["tentruong"];
                $tenkhoa = $row["tenkhoa"];
                $tenlop = $row["tenlop"];
                $ngayvao = $row["ngayvao"];
                $ngayra = $row["ngayra"];
                $chuthich = $row["chuthich"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Tên Trường</label>
                        <p class="form-control-static"><?php echo $row["tentruong"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Tên Khoa</label>
                        <p class="form-control-static"><?php echo $row["tenkhoa"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Tên LỚp</label>
                        <p class="form-control-static"><?php echo $row["tenlop"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Ngày Vào</label>
                        <p class="form-control-static"><?php echo $row["ngayvao"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Ngày ra</label>
                        <p class="form-control-static"><?php echo $row["ngayra"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>chuthich</label>
                        <p class="form-control-static"><?php echo $row["chuthich"]; ?></p>
                    </div>
                    <p><a href="admin.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>