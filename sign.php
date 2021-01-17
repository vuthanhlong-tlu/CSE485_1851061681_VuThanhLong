<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .bs-example{
             margin: 20px;        
            }
        </style>
	</head>
	<body>
		<?php
		include "connect.php";
		if (isset($_POST["btn_submit"])) {
			//lấy thông tin từ các form bằng phương thức POST
			$name = $_POST["name"];
			$age = $_POST["age"];	
			$email = $_POST["email"]; 
  			$username = $_POST["username"];
			$password = $_POST["password"];	
            $phone = $_POST["phone"];
			$description = $_POST["description"];	
            $image = $_POST["image"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if ($name==""|| $age=="" || $email == ""|| $username == "" || $password == ""
               || $phone == "" || $description == "") {
                   echo "Please enter your information full";
                   $password = md5($password);
			  }
			  else
			  {
  					// Kiểm tra tài khoản đã tồn tại chưa
  				$sql="select * from user where userId='$username'";
				$kt=mysqli_query($conn, $sql);
				if(mysqli_num_rows($kt)  > 0){
					echo "Account has already existed";
				}
				else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql1 = "INSERT INTO user(
	    					name,
							age,							
							email,
							username,
	    					password,	    					
                            phone,
                            description,							
                            image
	    					) VALUES (
							'$name',
							'$age',			
							'$email',
	    					'$username',
	    					'$password',
	    					'$phone',
                            '$description',
                            '$image'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
						   
						mysqli_query($conn,$sql1);
                        echo "Congratulations, you have successfully registered";
                      	header('Location: home.php');
					}
									    
					
			  }
	}
	?>
<div class="bs-example">
    <form action="register.php" class="needs-validation" method="post" novalidate>
         <h2>Create User</h2>
        <div class="form-group">
            <label for="inputEmail">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
            <div class="invalid-feedback">Please enter a valid name a.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Username</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
            <div class="invalid-feedback">Please enter a valid username .</div>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <div class="invalid-feedback">Please enter your password to continue.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Age</label>
            <input type="age" class="form-control" id="age" name = "age" placeholder="Age" required>
            <div class="invalid-feedback">Please enter a valid age.</div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
          <div class="form-group">
            <label for="inputEmail">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" required>
            <div class="invalid-feedback">Please enter a valid phone.</div>
        </div>
          <div class="form-group">
            <label for="inputEmail">Decription</label>
            <input type="decription" class="form-control" id="description" name="description" placeholder="Decription" required>
            <div class="invalid-feedback">Please enter a valid decription.</div>
        </div>
          <div class="form-group" method="POST" enctype="multipart/form-data">
            <label for="inputEmail">Image: </label>
            <input type="file" name="image"> 
            <div class="invalid-feedback">Please enter a valid image .</div>
        </div>
        <div class="form-group">
            <input name ="btn_submit" type="submit" class="btn btn-primary" value="ok">
        <a href="home.php" class="btn btn-default">Hủy bỏ</a>
        </div>

    </form>
    
   
    
</div>
	</body>
	</html>