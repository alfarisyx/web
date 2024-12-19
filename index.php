<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
    } 
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            
        }

    </style>
</head>

<body>
   <div class="container">
    <h1 style="">selamat datang di halaman dashboard <?php echo $username; ?> </h1>
    <a href="logout.php"> logout </a>
   </div>
</body>
</html>
