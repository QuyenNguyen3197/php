
<?php include "database/function.php"; ?>


<!-- bootstrap/ introduction => copy cấu trúc => formcontrol -> copy form-->
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
  <?php include "includes/header.php";?>

    <div class="container"> <!-- tạo div với class nhanh : dấu "." + tên class -->
        <div class="row">
            <div class="col-md-6">
            <!-- update form -->
            <form action="index.php" method="post">
                <h1>Register</h1>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nguyen Van A">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password <i class="fa-solid fa-lock-open"> <!-- tìm kí hiệu mong muốn -> nhấn kí hiệu để copy link -> dán vào vtri cần chèn--> </i></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="********">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Register" name="submit">
                    <input type="reset" value="Reset">
                </div>
                </form>
            <!-- ket thuc update form -->
            </div>
        </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Project
1. có tên
2. include
3. index php -->