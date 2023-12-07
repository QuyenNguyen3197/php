<?php 
    include "connect.php";
    function createRow(){
        if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $query = "INSERT INTO users(email, password, fullname) VALUES('$email','$password','$fullname')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }else{
            echo "Record create";
        }
    }
    }
    // if(isset($_POST['submit'])){
        
        
        // if($conn){
        //     if ($email == "admin@gmail.com"){
        //         if($password == "123"){
        //             echo "<br> Login success!";
        //         }else{
        //             echo "<br> Password incorrect!";
        //         }
        //     }else{
        //         echo "<br> Email incorrect!";
        //     }
        // }
    //}
?>