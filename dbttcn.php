<!DOCTYPE html>
<html lang="en">
<head>
  <link href="assets/img/ba1.jpg" rel="icon">
  <link href="assets/img/ba1.jpg" rel="crown">
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Thông Tin Cá Nhân</h2>
                        <a href="themttcn.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM thongtincanhan";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>ten</th>";
                                        echo "<th>ngaysinh</th>";
                                        echo "<th>diachi</th>";   
                                        echo "<th>email</th>";
                                        echo "<th>sdt</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ten'] . "</td>";
                                        echo "<td>" . $row['ngaysinh'] . "</td>";
                                        echo "<td>" . $row['diachi'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['sdt'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewthongtincanhan.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suathongtincn.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletethongtincanhan.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
                    
                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>