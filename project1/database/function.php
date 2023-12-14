<?php 
    include "connect.php";

    function createRow(){
        if(isset($_POST['insert'])){
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
            <td><a href = 'updateForm.php?email=$email&fullname=$fullname'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href = 'index.php?email=$email'><i class='fa-solid fa-trash' style='color: #511f31;'></i></a></td>
            </tr>";
        }
    }

        function updateRow(){
            if(isset($_POST['update'])){
                global $conn;
                $query = "UPDATE users SET email='".$_POST['email']."',
                                           password='".$_POST['password']."',
                                           fullname='".$_POST['fullname']."' WHERE email='".$_POST['emailOld']."'";
                $result = mysqli_query($conn,$query);
                
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo "Record create";
            }
        }
    }
  
?>