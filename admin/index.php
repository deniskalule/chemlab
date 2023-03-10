
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
<body>

    <div class="container">
        <div class="row p-3" style="margin-top: 10%;">
            <div class="col-lg-3"></div>
            <div class="col-lg-3 bg-white logo p-3">
                <center><img src="./assets/images/kyulogo.jpg" alt="" width="50" height="40" class="rounded mb-3"></center>
                <h4 class="text-center " style="font-weight: 700;">
                    KYU Chemistry Lab
                    <hr class="text-center" color="blue" height="10px">
                </h4>
                <p class="text-center p-2" ><b>Welcome to Kyambogo Chemistry Laboratory portal.</b></p>
            </div>
            <div class="col-lg-3 p-3 form">
                <form action="adminlogin.php" method="post" class="shadow">
                    
                    <div class="form-group text-white">
                        <label for="">Username: </label>
                        <input type="text" class="form-control" name ="uname" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="">Password: </label>
                        <input type="password" class="form-control" name = "password" required>
                    </div>

                    <a href=""><p class="">Forgot Password? </p></a>
                    <button type="submit" class="btn btn-flat form-control bg-info text-white" name ="login" >Login</button>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    
</body>
</html>