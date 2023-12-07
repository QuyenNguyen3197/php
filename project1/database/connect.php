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