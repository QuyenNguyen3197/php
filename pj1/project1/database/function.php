<?php
   session_start();
    include "connect.php";
    function createRow(){
        if(isset($_POST['insert'])){
            global $conn;
            $email = $_POST['email'];
            $password=$_POST['password'];
            $fullName = $_POST['fullname'];
            $query = "INSERT INTO users(email, password, fullName) VALUES('$email','$password','$fullName')";
            
            $result =mysqli_query($conn,$query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo "Record Create";
            }
        }
    }

    function readRows(){
        global $conn;
        $query = "SELECT * FROM users";
        $result =mysqli_query($conn,$query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result))
        {
            print_r($row);
        }
        
    }

    function showAllData(){
        global $conn;
        $query = "SELECT * FROM users";
        $result =mysqli_query($conn,$query);
        if(!$result){
            die("Query failed!".mysqli_error());
        }
        $i=0;
        while($row = mysqli_fetch_assoc($result))
        {
            $email = $row['email'];
            $fullName = $row['fullName'];
            $password = $row['password'];
            echo "<tr>
            <td>".$i++."</td>
            <td>".$email."</td>
            <td>".$fullName."</td>
            <td>".$password."</td>
            <td><a href='updateForm.php?email=$email&password=$password'><i class='fa-solid fa-pen-to-square text-success'></i></a></td>
            <td><a href='index.php?email=$email&delete=delete'><i class='fa-solid fa-trash text-danger'></i></a></td>
            </tr>";
        }
    }
    function updateRow(){
        if(isset($_POST['update'])){
            global $conn;
            $query = "UPDATE users SET 
            email='".$_POST['email']."' ,
            password='".$_POST['password']."', 
            fullName=' ".$_POST['fullName']."' WHERE email='".$_POST['emailOld']."'";
            $result = mysqli_query($conn,$query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo "Record Update";
            }
        }
    }
    function deleteRow(){
        if(isset($_GET['delete'])){
            global $conn;
            $query = "DELETE FROM users WHERE email='".$_GET['email']."'";
           
            $result = mysqli_query($conn,$query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo "Record Delete Success!";
            }
        }
    }

    //=========================login===============================
    function login($email, $password){
        
        if(isset($_POST['login'])){
            global $conn;
            //$password = mysqli_real_escape_string($conn, $password);
            $query = "SELECT * FROM users WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
            //echo $query;
            $result =mysqli_query($conn,$query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }
            while($row = mysqli_fetch_array($result))
            {
                $db_email = $row['email'];
                
                $db_password = $row['password'];
                $db_fullname = $row['fullName'];
                
                if($password===$db_password && $email===$db_email){
                   
                    $_SESSION['s_email'] = $db_email;
                    $_SESSION['s_fullname']=$db_fullname;
                    
                    header('Location: /project1/admin');
                }else{
                    header('Location: /project1/login.php');
                }
            }
        }
    }

    function checkLogin(){
        if(isLogin()){
            header('Location: /project1/admin');
            exit;
        }else{
            header('Location: /project1');
        }
    }
    function isLogin(){
        if(isset($_SESSION['s_email'])){
            
            return true;
        }
        return false;
    }
    //==================ket thuc phan login=================
?>