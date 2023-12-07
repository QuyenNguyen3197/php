<!-- bật xmapp -> MySQL -> tạo database mới, chọn utf8-general-ci, chạy như bthg -->
<?php
    $conn = mysqli_connect('localhost', 'root', '123456');
    if(!$conn){
        die("Database connection failed");
    }
    
    

?>