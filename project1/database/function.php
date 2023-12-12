<?php 
    include "connect.php";
    function createRow(){
        if(isset($_POST['submit'])){
        global $conn;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $query = "INSERT INTO users(email, password, fullname) VALUES('$email','$password','$fullname')";
        // echo ('hihi');
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }else{
            echo "Record create";
        }
    }
    }

    function readRows(){
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
    }


    function showAllData(){
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $email = $row['email'];
            $fullname = $row['fullname'];
            $pasword = $row['password'];
            echo "<tr>
            <td>".$i++."</td>
            <td>".$email."</td>
            <td>".$fullname."</td>
            <td>".$pasword."</td>
            </tr>";
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