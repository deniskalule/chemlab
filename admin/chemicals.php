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

        <!-- inner-content -->
        <div class="inner-content mt-2 p-3">
            
            <!-- buttons -->
            <div class="header" style="display: flex;">
                <button id="1" class="btn-primary add mb-2 btn-sm pull-right" style="margin-left: 2%;">Add Chemicals</button>

                <button id="1" class="btn-primary view mb-2 btn-sm pull-right" style="margin-left: 2%;">View Chemicals</button>
                
            </div>
            <!-- buttons -->

            <div id="view-section" style="display:flex">
                <div class="tables mt-3">
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
                                    $result = $conn->query("select * from organic");
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
                </div>
                <div class="popup p-5" id="popup">
                </div>
            </div>

            <!-- add chemical form -->
            <div class="col-lg-8 " id="display">
                    
                    
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
                                <input type="date" name="cexp" class="form-control">
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
            <!-- add chemical form -->


        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>