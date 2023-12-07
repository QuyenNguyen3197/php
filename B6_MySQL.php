<?php
    $conn = mysqli_connect('localhost', 'root', '123456');
    if($conn){
        echo "<br> Connect success!";
    }else{
        die("Database connect faild");
    }
    
?>