<?php

    session_start();
  	if(isset($_SESSION['admin'])){
        $_SESSION['success'] = "Sign in is sucessfull";
    	header('location:home.php');
  	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="./includes/css/style.css">
    <title>Kyu Chemistry Lab</title>
</head>
<body class="bg-light">

    <div class="container">
        <div class="row login p-3" style="margin-top: 10%;">
            <div class="col-lg-3"></div>
            <div class="col-lg-4 bg-white logo p-3  shadow">
                <center><img src="./assets/images/kyulogo.jpg" alt="" width="50" height="40" class="rounded mb-3 mt-5"></center>
                <h5 class="text-center " style="font-weight: 700;">
                    KYU Chemistry Lab
                    <hr class="text-center" color="blue" height="10px">
                </h5>
                <p class="text-center display-6 p-2" ><b>Welcome to Kyambogo Chemistry Laboratory portal.</b></p>
            </div>
            <div class="col-lg-4 form">
                <form action="login.php" method="post" class="">
                    <h5 class="text-center text-white mb-4">
                        Admin login
                    </h5>
                    <?php
                    if(isset($_SESSION['error'])){
                        echo "
                        <div class='alert alert-danger text-center'>
                            <p style='font-size: 13px;'>".$_SESSION['error']."</p> 
                        </div>
                        ";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="form-group text-white">
                        <label for="">Email: </label>
                        <input type="email" style="height: 40px; background-color: transparent;" class="form-control text-white" name ="email" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="">Password: </label>
                        <input type="password" style="height: 40px; background-color: transparent;" class="form-control text-white" name = "password" required>
                    </div>

                    <!-- <a href=""><p class="">Forgot Password? </p></a> -->
                    <button type="submit" style="width: 40%; margin: 0 30%;" class="btn btn-sm text-white mt-3" name ="login" >Login</button>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    
</body>
</html>