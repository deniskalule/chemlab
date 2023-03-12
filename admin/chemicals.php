<?php

include('./includes/session.php');

include('./includes/header.php');

?>



<div class="main shadow">
    <!-- sidebar section -->
    <?php
        include('./includes/sidebar.php');
    ?>

    <!-- content section -->
    <div class="content bg-light">
        <!-- navbar -->
        <?php include('./includes/navbar.php') ?>
        <!-- navbar -->

        <!-- error and success message -->
        <div class="message">
            <!-- hello -->
            <?php
                if(isset($_SESSION['error'])){
                echo "
                    <div class='alert alert-danger alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Error!</h4>
                    ".$_SESSION['error']."
                    </div>
                ";
                unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                echo "
                    <div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-check'></i> Success!</h4>
                    ".$_SESSION['success']."
                    </div>
                ";
                unset($_SESSION['success']);
                }
                if(isset($_SESSION['message']))
                {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                }
            ?>
        </div>
        <!-- error and success message -->

        <!-- inner-content -->
        <div class="inner-content mt-2 p-3">
            
            <!-- buttons -->
            <div class="header" style="display: flex;">
                <button id="1" class="btn-primary add mb-2 btn-sm pull-right" style="margin-left: 2%;">Add Chemicals</button>

                <button id="1" class="btn-primary view mb-2 btn-sm pull-right" style="margin-left: 2%;">View Chemicals</button>
                <form action="./backend/import_excel.php" method="post" enctype="multipart/form-data" class="ml-5" style="display: flex; margin-bottom:10px;">
                    <input type="file" name="import_file" id="" class="upload-box">
                    <button type="submit" class="btn btn-success btn-sm btn-flat" name="import" style="margin-left:-50px;">import</button>
                </form>
            </div>
            <!-- buttons -->

            <div class="row" id="view-section" style="font-size:13px; margin-left: 2%;">
                <div class="col-8 tables mt-3">
                    <!-- organic -->
                    <div class="organic">
                        <div class="header">
                            <h5>Organic chemicals</h5>
                            <hr>
                        </div>
                        <table class="table bg-white m-2" id="table2">
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
                                    $result = $conn->query("select * from organic where category = 'organic'");
                                    while($row = $result->fetch_assoc())
                                    {
                                    
                                ?>
                                <tr>
                                    <td scope="row"><?= $row['id']; ?></td>
                                    <td><?= $row['compound']; ?></td>
                                    <td><?= $row['amount']; ?></td>
                                    <td><?= $row['expdate']; ?></td>
                                    <td><?= $row['location']; ?></td>
                                    <td>
                                        <a href="" style="font-size: 12px;" class="more btn btn-sm btn-info" id="<?= $row['id']; ?>"><i class="fas fa-edit     mr-2"></i>More</a>
                                        
                                    </td>
                                </tr>
                                <?php
                                    
                                }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- organic -->

                    <!-- inorganic -->
                     <!-- organic -->
                     <div class="inorganic mt-3">
                        <div class="header">
                            <h5>Inorganic chemicals</h5>
                            <hr>
                        </div>
                        <table class="table bg-white m-2" id="table1">
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
                                    $result = $conn->query("select * from organic where category = 'inorganic'");
                                    while($row = $result->fetch_assoc())
                                    {
                                    
                                ?>
                                <tr>
                                    <td scope="row"><?= $row['id']; ?></td>
                                    <td><?= $row['compound']; ?></td>
                                    <td><?= $row['amount']; ?></td>
                                    <td><?= $row['expdate']; ?></td>
                                    <td><?= $row['location']; ?></td>
                                    <td>
                                        <a href="" style="font-size: 12px;" class="more btn btn-sm btn-info" id="<?= $row['id']; ?>"><i class="fas fa-edit     mr-2"></i>More</a>
                                        
                                    </td>
                                </tr>
                                <?php
                                    
                                }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- organic -->
                    <!-- inorganic -->
                </div>
                <div class=" col-lg-4 popup p-5 mt-4" id="popup">
                </div>
            </div>

            <!-- add chemical form -->
            <div class="col-lg-8 " id="display">
                    
                    
                    <form action="./backend/addchemical.php" method="post" class="form bg-white p-4">
                        <h6 class="text-uppercase mb-3">Enter a new compound</h6>
                        <div class="form-group">
                            <label for="">Compound Name:</label>
                            <input type="text" name="cname" class="form-control" required>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="">Amount in grams: </label>
                                <input type="number" name = "camount" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="">Expiry date:</label>
                                <input type="date" name="cexp" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <input type="text" name="category" class="form-control" required>
                            
                        </div>
                        <button class="btn-primary form-control" name = "add">Add</button>
                    </form>
                </div>
            <!-- add chemical form -->


        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>