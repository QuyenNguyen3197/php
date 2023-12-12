<!-- bật xmapp -> MySQL -> tạo database mới, chọn utf8-general-ci, chạy như bthg -->
<?php
    $conn = mysqli_connect('localhost:3308','root','','banhang');
    if(!$conn){
        die("Database connection failed");
    }
    
    

?>