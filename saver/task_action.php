<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
    <link rel="stylesheet" href="../control/task/">
    <script src="../sweetalert/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "server.php";

if (isset($_POST['btn_action'])) {
 $username = $_POST['username'];
 $work_name = $_POST['work_name'];
 $amount = $_POST['amount'];
 $charges = $_POST['charges'];
$quantity = $amount * $charges;
 $sql = "INSERT INTO task(`username`, `word_name`, `amount`, `charges`)VALUES('$username','$work_name',$amount,$quantity)";
$res1 = $conn->query($sql);
if ($res1) {
    echo "<script>
        swal('Done','Adding Task now','success')
        .then(function (res) {
            if (true) {
                window.location='../control/task/';
            }
        })
    </script>";
}else {
    echo "<script>
        alert('wrong');
    </script>";
}

}


// UPDATE SITE
$update = false;
    $username = "";
    $work_name = "";
    $amount = "";
    $charges = "";
    
if (isset($_GET['edit'])) {
    $update  = true;
    $id = $_GET['edit'];
    $sql = "SELECT * FROM task WHERE id = $id";
    $res = $conn->query($sql);
    $rows = $res->fetch_assoc();

}
if ($update == true) {
    $username = $rows['username'];
    $work_name = $rows['word_name'];
    $amount = $rows['amount'];
    $charges = $rows['charges'];
    
}
if (isset($_POST['btn_update'])){
    $hidden = $_POST['id'];
    $sername = $_POST['username'];
    $ork_name = $_POST['work_name'];
    $mount = $_POST['amount'];
    $harges = $_POST['charges'];
// <link rel="stylesheet" href="">
 $sqli = "UPDATE task SET `username` = '$sername', `word_name` = '$ork_name', `amount` = $mount, `charges` = $harges WHERE `id` = $hidden";
$resul = $conn->query($sqli);
if ($resul) {
    echo "<script>
        swal('Done','Updating Successfully','success')
        .then(function (res) {
            if (true) {
                window.location='../control/his_task/';
            }
        })
    </script>";
}else {
    echo "<script>
        swal('Error','Updating error','error')
        .then(function (res) {
            if (true) {
                window.location='../control/his_task/';
            }
        })
    </script>";
}
}


?>