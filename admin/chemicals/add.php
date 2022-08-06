
<?php
        include("../includes/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/header.css">
    <link rel="stylesheet" href="../assets/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kyu Science Lab: Portal</title>
</head>
<body>

    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-10">
                <?php
                    include("../includes/adminheader.php")
                ?>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="container content">
                    <div class="header mb-4 text-right p-1 bg-white">
                        <a href="">
                            <span class="text-dark">LOGOUT</span>
                            <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="header">
                                <h5 class="text-center text-uppercase ml-4">Add Chemicals</h5>
                                <hr>
                            </div>
                            
                        </div>
                        <div class="col-lg-8">
                            <a href="http://localhost/chemlab/admin/chemicals/view.php">
                            <button style= "margin-left: 80%;" class="btn-primary btn-right mb-2">View Chemicals</button>
                            </a>
                            
                            <form action="" method="post" class="form bg-white p-4">
                                <h6 class="text-uppercase mb-3">Enter a new compound</h6>
                                <div class="form-group">
                                    <label for="">Compound Name:</label>
                                    <input type="text" name="cname" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="">Amount in grams: </label>
                                        <input type="number" name = "camount" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="">Expiry date:</label>
                                        <input type="number" name="cexp" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="text" name="location" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <input type="text" name="category" class="form-control">
                                    
                                </div>
                                <button class="btn-primary form-control" name = "add">Add</button>
                            </form>
                        </div>
                            

                        
                    </div>
                    


                    
                </div>
                <?php
                include("../includes/footer.php")
                ?>
            </div>
        </div>

        
    </div>


    <script src="../assets/script.js"></script>
    <script src="../assets/side.js"></script>
</body>
</html>
