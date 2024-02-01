<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <link rel="stylesheet" href="../login/">
    <script src="../../sweetalert2/sweetalert2/dist/sweetalert2.all.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "../../saver/server.php";
session_start();
session_destroy();
// header("location: ../login");

echo "<script>
swal.fire('Information','Do You Want Logout','info')
.then(
    function(res){
        if(true){
            window.location='../login';
        }
    }
);
</script>";
?>