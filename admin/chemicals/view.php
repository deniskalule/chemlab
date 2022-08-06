
<?php
include("../includes/connection.php");
$limit = 5;


$getpage = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($getpage - 1) * $limit;
$result = mysqli_query($connect, "select * from organic limit $start, $limit");

$count = mysqli_query($connect, "select id from organic");
$res = mysqli_num_rows($count);

$pages = $res / $limit;
$pages;

$previous = $getpage - 1;
$next = $getpage + 1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/header.css">
    <link rel="stylesheet" href="../assets/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
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
                                <h5 class="text-center text-uppercase"> View Chemicals</h5>
                                <hr>
                            </div>
                            <a href="http://localhost/chemlab/admin/chemicals/add.php" style= "margin-left: 80%; text-decoration: none;" class="btn-primary btn-right p-1 shadow-md">
                                Add Chemical
                            </a>

                            <div class="col-lg-10 bg-white p-3 mt-4 mr-2">
                                <h6 class="text-center">Organic Chemicals</h6>
                            
                                
                                <table class="table" border="1">
                                    <thead class = "bg-dark">
                                        <tr class="text-white">
                                            <th scope="col">#</th>
                                            <th scope="col">Compound</th>
                                            <th scope="col">Amount(grams)</th>
                                            <th scope="col">Exp. date</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row = mysqli_fetch_array($result))
                                            {
                                            
                                        ?>
                                        <tr>
                                            <td scope="row"><?= $row['id']; ?></td>
                                            <td><?= $row['compound']; ?></td>
                                            <td><?= $row['amount']; ?></td>
                                            <td><?= $row['expdate']; ?></td>
                                            <td><?= $row['location']; ?></td>
                                            <td>
                                                <a href=""><i class="fas fa-edit    "></i></a>
                                                <a href=""><i class="fas fa-deaf    "></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        
                                        
                                    </tbody>
                                    
                                </table>
                                <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link" href="./view.php?page=<?= $previous;?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo; Previous</span>
                                                </a>
                                            </li>
                                            <?php for($i=1; $i<=$pages; $i++) :?>
                                            <li class="page-item"><a class="page-link" href="./view.php?page=<?= $i?>"><?= $i;?></a></li>
                                            <?php endfor?> 
                                            <li class="page-item">
                                                <a class="page-link" href="./view.php?page=<?= $next; ?>" aria-label="Next">
                                                    <span aria-hidden="true">&raquo; Next</span>
                                                    
                                                </a>
                                            </li>
                                        </ul>
                                </nav>
                            </div>
                            <div class="col-lg-10 bg-white p-4 mt-4">
                                <h6 class="text-center">Inorganic Chemicals</h6>
                                <table class="table" border="1">
                                    <thead class = "bg-dark">
                                        <tr class="text-white">
                                            <th scope="col">#</th>
                                            <th scope="col">Compound</th>
                                            <th scope="col">Amount(grams)</th>
                                            <th scope="col">Exp. date</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                        
                                        
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link" href="./view.php?page=<?= $previous;?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo; Previous</span>
                                                </a>
                                            </li>
                                            <?php for($i=1; $i<=$pages; $i++) :?>
                                            <li class="page-item"><a class="page-link" href="./view.php?page=<?= $i?>"><?= $i;?></a></li>
                                            <?php endfor?> 
                                            <li class="page-item">
                                                <a class="page-link" href="./view.php?page=<?= $next; ?>" aria-label="Next">
                                                    <span aria-hidden="true">&raquo; Next</span>
                                                    
                                                </a>
                                            </li>
                                        </ul>
                                </nav>
                            </div>
                            
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
