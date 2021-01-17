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
                        <h2 class="pull-left">Bảng Người Dùng</h2>
                        <a href="them.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>email</th>";
                                        echo "<th>password</th>";
                                       
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['userid'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewthongtincanhan.php?id=". $row['userid'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='aaa.php?id=". $row['userid'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletethongtincanhan.php?id=". $row['userid'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Học Vấn</h2>
                        <a href="insert.php" class="btn btn-success pull-right">Thêm</a>
                        
     </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql1 = "SELECT * FROM hocvan";
                    if($result = mysqli_query($conn, $sql1)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>tentruong</th>";
                                        echo "<th>tenkhoa</th>";
                                        echo "<th>tenlop</th>";   
                                        echo "<th>ngayvao</th>";
                                        echo "<th>ngayra</th>";
                                        echo "<th>chuthich</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['tentruong'] . "</td>";
                                        echo "<td>" . $row['tenkhoa'] . "</td>";
                                        echo "<td>" . $row['tenlop'] . "</td>";
                                        echo "<td>" . $row['ngayvao'] . "</td>";
                                        echo "<td>" . $row['ngayra'] . "</td>";
                                        echo "<td>" . $row['chuthich'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewhocvan.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suahocvan.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletehocvan.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
                        echo "ERROR: Could not able to execute $sql                                                         . " . mysqli_error($conn);
                    }
 
                   
                    ?>
                        
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Kĩ Năng</h2>
                        <a href="themkinang.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM kynang";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>kynang</th>";
                                        echo "<th>ghichu</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['kynang'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewkynang.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suakinang.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletekynang.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Kinh Nghiệm</h2>
                        <a href="insert.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM kinhnghiem";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>congviec</th>";
                                        echo "<th>ghichu</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['congviec'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewkinhnghiem.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suakinhnghiem.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletekinhnghiem.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Điểm Mạnh</h2>
                        <a href="themdiemmanh.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM diemmanh";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>diemmanh</th>";
                                        echo "<th>ghichu</th>";
                                       
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['diemmanh'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewdiemmanh.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suadiemmanh.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletediemmanh.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Đánh Giá</h2>
                        <a href="themdanhgia.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM danhgia";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>ten</th>";
                                        echo "<th>ghichu</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ten'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                       
                                        echo "<td>";
                                            echo "<a href='viewdanhgia.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suadanhgia.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletedanhgia.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Tóm Tắt</h2>
                        <a href="themtomtat.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM tomtat";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>truoc18</th>";
                                        echo "<th>sau18</th>";
                                      
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['truoc18'] . "</td>";
                                        echo "<td>" . $row['sau18'] . "</td>";
                                       
                                        echo "<td>";
                                            echo "<a href='viewtomtat.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suatomtat.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletetomtat.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Trường</h2>
                        <a href="themtruong.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM truong";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>ten</th>";
                                        echo "<th>diachi</th>";
                                        echo "<th>email</th>";   
                                        echo "<th>sdt</th>";
                                        echo "<th>website</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ten'] . "</td>";
                                        echo "<td>" . $row['diachi'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['sdt'] . "</td>";
                                        echo "<td>" . $row['website'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='viewtruong.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suatruong.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletetruong.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Sở Thích</h2>
                        <a href="themsothich.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM sothich";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>sothich</th>";
                                        echo "<th>ghichu</th>";
                                        
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['sothich'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                     
                                        echo "<td>";
                                            echo "<a href='viewsothich.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='suasothich.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deletesothich.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
                    
                    <div class="page-header clearfix">
                        <a href="index.php" class="btn btn-success pull right">Quay lại trang chủ</a>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <div class="page-header clearfix"> <a href="logout.php" class="btn btn-success pull right">Đăng xuất</a> </div>
</body>
</html>