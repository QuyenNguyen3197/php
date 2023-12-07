<form action = "index.php" method = "post">
                <h1>Login</h1>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" name = "fullname" class="form-control" id="fullname" placeholder="Nguyen Van A">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password <i class="fa-solid fa-lock-open"> <!-- tìm kí hiệu mong muốn -> nhấn kí hiệu để copy link -> dán vào vtri cần chèn--> </i></label>
                    <input type="password" name = "password" class="form-control" id="password" placeholder="********">
                </div>
                <div class="mb-3">
                    <input type="submit" value = "Register" name ="submit">
                    <input type="reset" value = "Reset">
                </div>
                </form>