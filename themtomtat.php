<?php
// Include config file
require_once "connect.php";
 
// Define variables and initialize with empty values
$truoc18 = $sau18 =   "";
$truoc18_err = $sau18_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_truoc18 = trim($_POST["truoc18"]);
    if(empty($input_truoc18)){
        $truoc18_err = "Vui lòng nhập tên.";
    } else{
        $truoc18 = $input_truoc18;
    }
    
    // Validate sex
    $input_sau18 = trim($_POST["sau18"]);
    if(empty($input_sau18)){
        $sau18_err = "Vui lòng nhập giới tính.";     
    } else{
        $sau18 = $input_sau18;
    }

    

   
    // Check input errors before inserting in database
    if(empty($truoc18_err) && empty($sau18_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO tomtat (truoc18, sau18) VALUES (?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_truoc18, $param_sau18);
            
            // Set parameters
            $param_truoc18 = $truoc18;
            $param_sau18 = $sau18;
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: admin.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            //mysqli_stmt_close($stmt);
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Thêm</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
        .wrapper {
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
                            <h2>Thêm thông tin</h2>
                        </div>
                        <p>Vui lòng điền đầy đủ thông tin.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($truoc18_err)) ? 'has-error' : ''; ?>">
                                <label>Trước 18</label>
                                <input type="text" name="truoc18" class="form-control" value="<?php echo $truoc18; ?>">
                                <span class="help-block"><?php echo $truoc18_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($sau18_err)) ? 'has-error' : ''; ?>">
                                <label>Ghi Chú</label>
                                <input type="text" name="sau18" class="form-control" value="<?php echo $sau18; ?>">
                                <span class="help-block"><?php echo $sau18_err;?></span>
                            </div>
                            
                            <input type="submit" class="btn btn-primary" value="Thêm">
                            <a href="index.php" class="btn btn-default">Đóng</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>