<?php 
session_start();
  if(!isset($_SESSION['s_email'])){
      header('Location: /project1');
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    ADMIN PAGE
</body>
</html>