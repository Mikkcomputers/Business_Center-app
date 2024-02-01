<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../lineawesome/lineawesome/css/line-awesome.min.css">
    <script src="../sweetalert/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "server.php";
if (isset($_POST['btn_reg'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $roll = 1;

    if (empty($fullname) || empty($username)) {
        echo "
        <script>
           swal('Infor','Pleased required all field','info')
           .then(
            function(res){
                if(true){
                    window.location='../control/register.html';
                }
            }
           )
        </script>
    ";
    }

    if ($password != $cpassword ) {
        echo "
            <script>
                swal('infor','The two password mix match','info')
                .then(
                    function(res){
                        if(true){
                            window.location='../control/register';
                        }
                    }
                   )
                </script>
            </script>
        ";
    }
    $sql = "INSERT INTO register(`fullname`, `username`, `phone`, `email`, `password`,`roll`)VALUES('$fullname','$username','$phone','$email','$password', $roll)";
    $res = $conn->query($sql);
    if ($res) {
     $sql1 = "CREATE TABLE task (
            id int,
            username varchar(255),
            word_name varchar(255),
            amount int,
            charges int
        )";
         $res2 = $conn->query($sql1);
        echo "
        <script>
        swal('Done','Thans $fullname for register','success')
        .then(
            function(res){
                if(true){
                    window.location='../control/login';
                }
            }
           )
        </script>
     </script>
    ";
    }else {
        echo "
        <script>
           swal('error','register have an error'.'error')
           .then(
            function(res){
                if(true){
                    window.location='../control/register';
                }
            }
           )
        </script>
        </script>
    ";
   
    }
}
?>