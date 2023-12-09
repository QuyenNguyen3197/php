<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome cdm -> copy link đầu tiên -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
    <!-- Chèn header -->
  <?php include "includes/header.php";?>

    <div class="container"> <!-- tạo div với class nhanh : dấu "." + tên class -->
        <div class="row">
            <div class="col-md-6">
            <form action = "index.php" method = "post">
                <h1>Login</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password <i class="fa-solid fa-lock-open"> <!-- tìm kí hiệu mong muốn -> nhấn kí hiệu để copy link -> dán vào vtri cần chèn--> </i></label>
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
</body>