<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="../sweetalert2/sweetalert2/dist/sweetalert2.all.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "server.php";
session_start();
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    }
    $sql = "SELECT * FROM register WHERE username = '$username' AND `password` = '$password'";
    $res = $conn->query($sql);
    if (mysqli_num_rows($res) == 1) {
        $_SESSION['login']= $username;
        echo"
            <script>
                swal.fire('Done','Login Successfully','success')
                .then(function(res) {
                    if (true) {
                        window.location='../control/dashboard';
                    }
                })
            </script>
        ";
       
        
    }else {
        echo"
        <script>
            swal.fire('Wrong input','User not found','erro')
            .then(function(res) {
                if (true) {
                    window.location='../control/login';
                }
            })
        </script>
    ";
       
    }

?>