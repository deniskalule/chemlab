<?php

    session_start();
  	if(isset($_SESSION['user'])){
        $_SESSION['success'] = "Sign in is sucessfull";
        $_SESSION['role'];
    	header('location:user/home.php');
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
    <link rel="stylesheet" href="./admin/includes/css/style.css">
    <title>Kyu Chemistry Lab</title>
    <style>

    body
    {
        background-image: url('./admin/assets/images/lab-g5f486f62b_1280.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100vh

    } 


    </style>
</head>
<body>

    <div class="container">
        <div class="row p-3" style="margin-top: 10%;">
            <div class="col-lg-3"></div>
            <div class="col-lg-4 bg-white logo shadow">
                <center><img src="./admin/assets/images/kyulogo.jpg" alt="logo" width="50" height="40" class="mt-5 rounded mb-3"></center>
                <h4 class="text-center " style="font-weight: 700;">
                    KYU Chemistry Lab
                    <hr class="text-center" color="blue" height="10px">
                </h4>
                <p class="text-center p-2" ><b>Welcome to Kyambogo Chemistry Laboratory portal.</b></p>
            </div>
            <div class="col-lg-4 p-3 form">
                <form action="login.php" method="post" class="p-3">
                    
                    <div class="form-group text-white">
                        <label for="">Username: </label>
                        <input type="email" style="height: 40px; background-color: transparent;" class="form-control text-white" name ="uname" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="">Password: </label>
                        <input type="password" style="height: 40px; background-color: transparent;" class="form-control text-white" name = "password" required>
                    </div>

                    <!-- <a href=""><p class="">Forgot Password? </p></a> -->
                    <button type="submit" class=" mt-3 btn btn-flat form-control" name ="login" >Login</button>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    
</body>
</html>