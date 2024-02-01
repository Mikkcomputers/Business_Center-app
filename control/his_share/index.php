<?php
include "../../saver/server.php";

session_start();
if (!isset($_SESSION['login'])) {
    header("location: ../login");   
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>share history</title>
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lineawesome/lineawesome/css/line-awesome.min.css">
     <style>
        body{
            padding: 0;
            margin: 0;
        }
        .container1{
            display: flex;
            width: 100%;
            height: 100vh;
        }
        nav{
          
            width: 30%;
            height: 100vh;

        }
       
        /* a{
            display: none;
        } */
        section{
            /* background-color: rgb(187, 151, 104); */
            width: 100%;
            height: 100vh;
        }
        header{
            display: flex;
            background-color: maroon;
            color:white;
            width: 100%;
            height: 15vh;
          font-size: 25px;
          text-align: center;
          align-items: center;
          justify-content: center;
          border:2px solid white;

        }
        .cards{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 30px;
    margin: 20px;
    /* opacity: 0.1; */
    padding: 30px;
    /* font-size:20px; */
    font-family:monospace;
    /* background-color: maroon; */
 }
 .card{
    padding: 50px 70px 50px 70px;
    box-shadow: inset 03px 0px 10px 0px maroon;
    /* border-radius: 20px; */
    color: maroon;

 }
        h1{
            margin-top:10px;
            /* padding:10px */
            padding: 5px 5px 5px 5px;
        }
            

            
        /*  */
        /* .la{
            position: absolute;
            
            left: 15px;
            /* margin-right: 10px; */
            /* font-size: 20px; */
        
        a,li{
            list-style-type: none;
            text-decoration: none;
            /* font-size: 15px; */
            /* font-weight: bold; */
            color:white;
            font-family: serif;
            margin-bottom: 20px;
            
        }
        li{
        }
        .sidenav {
  height: 100%;
  width: 180px;
 /* width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  */
  background-color: maroon; 
  overflow-x: hidden;
  font-size:15px;

  padding-top: 50px;
         }  

.sidenav a {
  padding: 8px 8px 8px 8px;
  text-decoration: none;
  /* text-align:center; */
  font-size: 20px;
  color:white;
  display: block;
 /* margin-bottom: 2rem; */
 /* font-family:monospace; */
 font-weight:100px;
  /* transition: 0.3s; */
}


.sidenav a:hover {
  opacity:0.5;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color:white;
}
#btn{display:none;
}
.container{
    width:70%;
}


        @media screen and (max-width:800px) {
            .card{
            /* background-color: rgb(156, 106, 40); */
            box-shadow: inset 03px 0px 10px 0px maroon;
            padding: 30px 40px 30px 40px;
            /* border-radius: 10px; */
        }
        #btn{display:block;
}
    h1{
        font-size:30px;
    }
    th,td{
        font-size:13px;
    }
    .la{
        font-size:20px;
    }
        .sidenav {
  height: 100%;
  /* width: 0; */
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
   /* background-color: #111;  */
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  
  overflow-x: hidden;
  font-size:15px;

  padding-top: 50px;
         }  
         .sidenav a{
  padding: 8px 8px 8px 8px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  display: block;
 margin-bottom: 10px;
  transition: 0.3s;
}
        .card:hover{
            padding: 32px 42px 32px 42px;;
            transition: all 1s;
        }
        .cards{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 10px;
            gap: 20px; 
            /* 336            256   */
        }

        }
        /* @media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  
        
} */

        @media screen and (max-width:450px) {
            .card{
                box-shadow: inset 03px 0px 10px 0px maroon;
            padding: 15px 20px 15px 20px;
            /* border-radiu s: 20px; */
        }
        #btn{display:block;
}
h1{
        font-size:20px;
    }
        .sidenav {
  height: 100%;
  /* width: 0; */
  /* width: 150px; */
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
   /* background-color: #111;  */
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  
  overflow-x: hidden;
  font-size:15px;

  padding-top: 50px;
         }  
         .sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  display: block;
 margin-bottom: 10px;
  transition: 0.3s;
}
        .card:hover{
            padding: 17px 22px 17px 22px;;
            transition: all 1s;
        }
        .cards{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* margin-top: 20px; */
            gap: 10px; 
            /* 336            256   */
        }
        #ul1{
           display: none;
        }
        }
       
        ul{
            padding: 0px;
        }
        .sidenav{
            overflow-x: none;
        }
        @media screen and (max-width:250px) {
            .card{
                box-shadow: inset 03px 0px 10px 0px maroon;
            padding: 3px 3px 3px 3px;
            /* border-radius: 10px; */
        }
        .card:hover{
            padding: 3px 3px 3px 3px;
        }
        h1{
            font-size:14px
        }
    }
    </style>
</head>
<body class="">
    <div class="container1">
        <nav  class="  sidenav" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" id="btn" onclick="closeNav()">&times;</a>

            <?php
        $user = $_SESSION['login'];
        $sqli = "SELECT * FROM register WHERE username = '$user'";
        $ress = $conn->query($sqli);
        $row = mysqli_fetch_assoc($ress);
        ?>
            <ul id=""  style=" font-size: 15px; padding: 0; margin: 0; " class=" alert alert-light text-center text-light">
                <span style="color:maroon">Welcome</span>
            <li id="" style=" font-size: 20px; padding: 0; margin: 0; color:maroon" class=""><?=$row['username']?></li>
        </ul>
        <ul>  
            <li>
                <a href="../dashboard/"> <i class="la la-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="../task/"> <i class="la la-apple"></i> Add Task</a>
            </li>
            <li>
                <a href="../expensive/"> <i class="la la-contao"></i> Expensive</a>
            </li>
            <li>
                </i><a href="../share/"> <i class="la la-share"> </i>Sharing</a>
            </li>
            <li>
                </i><a href="../his_task/"> <i class="la la-history"> </i>Task His</a>
            </li>
            <li>
                </i><a href="../his_expensive/"> <i class="la la-history"> </i>Expensive His</a>
            </li>
            <li>
                </i><a href="../his_share/"> <i class="la la-history"> </i>Sharing His</a>
            </li>
            <li>
                <a href="../logout"><i class="la la-user"></i> Logout</a>
            </li>
        </ul>
        </nav>
        <section class="" style="border: none;">
            
            <header class=""> 
                <span style="font-size:35px;cursor:pointer; margin-left: 10px;" id="btn"  onclick="openNav()">&#9776;</span>
               <h1 style="margin-left:30px" class="text-center"> BUSINESS CENTER DATA RECORD</h1>
            </header>
            <div class="container mt-5" style="color:maroon">
            <!-- <div class="row" > -->
                    <!-- <div class="con"> -->
                        <h3 class="text-center  mb-2">Share History</h5>
                        <table class="table table-striped text-danger table-light table-hover">
                        
                            <tr>
                                <th>S/N</th>
                                <th>Username</th>
                                <th>Amount</th>
                                <th>date</th>
                                <th colspan="2">Action</th>
                            </tr>
                            <?php
                                $sn = 1;
                                $sql = "SELECT * FROM share";
                                $res = $conn->query($sql);
                               while($data = $res->fetch_assoc()){
                                ?>
                            <tr>
                                <td><?=$sn++ ?></td>
                                <td><?=$data['username']; ?></td>
                                <td><?=$data['amount']; ?></td>
                                <td><?=$data['date']; ?></td>
                                <td><a style="color:red; font-size:25px" href="delete.php?del=<?=$data['id']; ?>"><i class="la la-trash"></i></a></td>
                                <td><a style="color:blue; font-size:25px" href="../share?edit=<?=$data['id']; ?>"><i class="la la-edit"></i></a></td>
                            </tr>
                            <?php
                           }
                            ?>
                        </table>
                        
                    </div>

              
            </div>
        </section>
    </div>



    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "180px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        </script>
        


</body>
</html>