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
                <button id="1" class="btn-primary add mb-2 btn-sm pull-right" style="margin-left: 2%;">Add equipment</button>

                <button id="1" class="btn-primary view mb-2 btn-sm pull-right" style="margin-left: 2%;">View eqipment</button>
                <form action="./backend/import_excel3.php" method="post" enctype="multipart/form-data" class="ml-5" style="display: flex; margin-bottom:10px;">
                    <input type="file" name="import_file" id="" class="upload-box">
                    <button type="submit" class="btn btn-success btn-sm btn-flat" name="import" style="margin-left:-50px;">import</button>
                </form>
            </div>
            <!-- buttons -->

            <div class="row" id="view-section" style="font-size:13px; margin-left: 2%;">
                <div class="col-8 tables mt-3">
                    <!-- organic -->
                    <div class="equipment">
                        <div class="header">
                            <h5>Equipment</h5>
                            <hr>
                        </div>
                        <table class="table bg-white m-2" id="table2">
                            <thead class = "bg-dark">
                                <tr class="text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Specifications</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result = $conn->query("select * from equipment");
                                    while($row = $result->fetch_assoc())
                                    {
                                    
                                ?>
                                <tr>
                                    <td scope="row"><?= $row['id']; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['specs']; ?></td>
                                    <td><?= $row['quantity']; ?></td>
                                    <td><?= $row['status']; ?></td>
                                    <td>
                                        <a href="" style="font-size: 12px;" class="more3 btn btn-sm btn-info" id="<?= $row['id']; ?>"><i class="fas fa-edit     mr-2"></i>More</a>
                                        
                                    </td>
                                </tr>
                                <?php
                                    
                                }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- organic -->

                   
                </div>
                <div class=" col-lg-4 popup p-5 mt-2" id="popup">
                </div>
            </div>

            <!-- add chemical form -->
            <div class="col-lg-7 " id="display">
                    
                    
                    <form action="./backend/addequipment.php" method="post" class="form bg-white p-5">
                        <h6 class="text-uppercase mb-3">Enter a new apparatus</h6>
                        <div class="form-group">
                            <label for="">Equipment Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Specifications:</label>
                            <input type="text" name="specs" class="form-control" required>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="">Quantity: </label>
                                <input type="number" name = "quantity" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="">Supplier: </label>
                                <input type="text" name = "supplier" class="form-control" required>
                            </div>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="">Status: </label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="" selected>Select</option>
                                    <option value="working">Working</option>
                                    <option value="not working">Not working</option>
                                    <option value="under maintenance">Under maintenance</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Location: </label>
                                <input type="text" name = "location" class="form-control" required>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="">Code:</label>
                            <input type="text" name="code" class="form-control" required>

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