
<!-- bật xmapp -> MySQL -> tạo database mới, chọn utf8-general-ci, chạy như bthg -->
<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '123456');
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($conn){
            if ($email == "admin@gmail.com"){
                if($password == "123"){
                    echo "<br> Login success!";
                }else{
                    echo "<br> Password incorrect!";
                }
            }else{
                echo "<br> Email incorrect!";
            }
        }
    }
    
    
?>

<!-- bootstrap/ introduction => formcontrol -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"> <!-- tạo div với class nhanh : dấu "." + tên class -->
        <div class="row">
            <div class="col-md-6">
                <form action = "B6_MySQL.php" method = "post">
                <h1>Login</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name = "password" class="form-control" id="password" placeholder="********">
                </div>
                <div class="mb-3">
                    <input type="submit" value = "Login" name ="submit">
                    <input type="reset" value = "Reset">
                </div>
                </form>
            </div>
        </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>