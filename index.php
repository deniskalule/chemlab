

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Kyu Science Lab</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 p-3">
                <form action="server.php" method="post" class="form shadow">
                    <center><img src="./assets/images/kyulogo.jpg" alt="" width="50" height="40" class="rounded mb-3"></center>
                    <h4 class="text-center mb-4" style="font-weight: 700;">
                        KYU Chemistry Lab
                        <hr class="text-center" color="white" size="5px">
                    </h4>
                    <div class="form-group text-white">
                        <label for="">Username: </label>
                        <input type="text" class="form-control" name ="uname" required>
                    </div>
                    <div class="form-group text-white">
                        <label for="">Password: </label>
                        <input type="password" class="form-control" name = "password" required>
                    </div>

                    <a href=""><p class="">Forgot Password? </p></a>
                    <button type="submit" class="btn btn-success form-control" name ="login" >Login</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

    
</body>
</html>