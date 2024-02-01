<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new user</title>
    <link rel="stylesheet" href="../../lineawesome/lineawesome/css/line-awesome.min.css">
    <script src="../../sweetalert/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
include "../../saver/server.php";

session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../login");
    
}

if (isset($_POST['btn_reg'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if (empty($fullname) || empty($username)) {
        echo "
        <script>
           swal('Infor','Pleased required all field','info')
           .then(
            function(res){
                if(true){
                    window.location='../control/new';
                }
            }
           )
        </script>
    ";
    }

    if ($password != $cpassword ) {
        echo "
        <script>
           swal('infor','the two password mix match'.'infor')
           .then(
            function(res){
                if(true){
                    window.location='./';
                }
            }
           )
        </script>
    ";
   
    }
    $stmt = $conn->prepare("INSERT INTO register(`fullname`, `username`,  `password`)VALUES(?,?,?)");
    $stmt->bind_param('sss',$fullname, $username, $password);
    $res = $stmt->execute();
    if ($res) {
        echo "
        <script>
        swal('Done','Thanks  for adding you $fullname','success')
        .then(
            function(res){
                if(true){
                    window.location='../dashboard';
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
                    window.location='./';
                }
            }
           )
        </script>
    ";
   
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../lineawesome/lineawesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
<link rel="stylesheet" href="../../sweetalert/sweetalert/dist/sweetalert.min.js">

<style>



</style>
</head>
<body>
    
    <div class="cont ">
        <article>
            <div class="container " style="  color:maroon">
                <div class="row p-3">
                    <div class="col-md-4 offset-md-4" style="border: 1px solid maroon; order-radius: 5%;">
                        <h5 class="text-center  mb-3">Create Account</h5>
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="fullname" >Full Name</label>
                                <input type="text" name="fullname" class="form-control mb-3 " required>
                            </div>
                            <div class="form-group">
                                <label for="username" >User Name</label>
                                <input type="text" name="username" class="form-control mb-3 " required>
                            </div>
                            
                           
                            <div class="form-group">
                                <label for="password" >Password</label>
                                <input type="password" name="password" class="form-control mb-3 " required>
                            </div>
                            <div class="form-group">
                                <label for="workname">Comfirm Password</label>
                                <input type="password" name="cpassword" class="form-control mb-3 " required>
        
                            </div>
                            <div class="form-group">
                                <button name="btn_reg" class="btn btn-danger form-control mt-3">Register</button>
                                <button name="btn_reg" class="btn btn-danger form-control mb-3 mt-3">
                                    <a href="../dashboard" class="text-light">Back</a>

                                </button>
                            </div>
                            <!-- <p class="text-center ">If You Have an account Pleased <a style="color:black" href="../login/"><b>Login</b></a></p> -->
                        </form>
                    </div>
                </div>
            </div>
        </article>

    </div>
</body>
</html>