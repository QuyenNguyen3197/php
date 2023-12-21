<?php
    include "../includes/header.php";
?>
<!-- noi dung cua index -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">

<!-- day la noi dung hien thi  -->
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Full name</th>
                    <th scope="col">password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
     $conn = mysqli_connect('localhost:3308', 'root','','banhang');
     if(!$conn)
     {
        die("Database connection failed");
     }
    
        $query = "SELECT * FROM users";
        $result =mysqli_query($conn,$query);
        if(!$result){
            die("Query failed!".mysqli_error($conn));
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
            <td><a href='delete.php?email=$email&delete=delete'><i class='fa-solid fa-trash text-danger'></i></a></td>
            </tr>";
        }

       
    ?>
                </tbody>
                </table>
<!-- ket thuc noi dung hien thi -->

            </div>
        </div>
    </div>
<!-- ket thuc noi dung cua index   -->
