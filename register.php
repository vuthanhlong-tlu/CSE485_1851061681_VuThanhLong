<!doctype html>
<html lang="en">
  <head>
    <title>Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
  </head>

  <body>
      <h1>Đăng kí</h1>
      <form  action="register_submit.php" method="post">

        <div class="form-group">
            <label for="username">Tên</label>
            <input type="text" name="username1" id="username1" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-control"  >
        </div>        
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" id="password" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="repassword">repassword</label>
            <input type="text" name="repassword" id="repassword" class="form-control"  >
        </div>
        <button class="btn btn-primary">Đăng kí
        </button>
        <button class="btn btn-primary">Thoát</button>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>