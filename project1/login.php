<?php include "includes/header.php";?>

    <div class="container"> <!-- tạo div với class nhanh : dấu "." + tên class -->
        <div class="row">
            <div class="col-md-6">

            <form action = "index.php" method = "post">
                <h1>Login</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name = "email" class="form-control" id="email" placeholder="name@example.com">
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

    <?php include "includes/footer.php";?>
            
