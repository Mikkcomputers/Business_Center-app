<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>share</title>
    <!-- <link rel="stylesheet" href="../control/share/"> -->
    <script src="../sweetalert2/sweetalert2/dist/sweetalert2.all.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "server.php";

if (isset($_POST['btn_share'])) {
 $username = $_POST['username'];
 $amount = $_POST['amount'];

 $sql = "INSERT INTO share(`username`,  `amount`)VALUES(?,?)";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param('si',$username,$amount);
$res = $stmt->execute();
if ($res) {
    echo"
    <script>
        swal.fire('Done','Share to. {$username}','success')
        .then((res)=>{window.location='../control/share/'})
    </script>
    ";
}else{
    echo"
    <script>
        swal.fire('error','Share to {$username} have an error','error')
        .then((res)=>{window.location='../control/share/'})
    </script>
    ";
}}
  // UPDATE SITE
$update = false;
    $username = "";
    $amount = "";
    
if (isset($_GET['edit'])) {
    $update  = true;
    $id = $_GET['edit'];
    $sql = "SELECT * FROM expensive WHERE id = $id";
    $res = $conn->query($sql);
    $rows = $res->fetch_assoc();

}
if ($update == true) {
    $username = $rows['username'];
    $amount = $rows['amount'];
    
}
if (isset($_POST['btn_update'])){
    $hidden = $_POST['hidden'];
    $username = $_POST['username'];
    $amount = $_POST['amount'];
 $sql = "UPDATE share SET `username` = '$username', `amount` = $amount WHERE id = $hidden";
$res = $conn->query($sql);
if ($res) {
    echo "<script>
        swal.fire('Done','Updating Successfully','success')
        .then(function (res) {
            if (true) {
                window.location='../control/his_share/';
            }
        })
    </script>";
}else {
    echo "<script>
        swal.fire('Error','Updating error','error')
        .then(function (res) {
            if (true) {
                window.location='../control/his_share/';
            }
        })
    </script>";
}
}


?>