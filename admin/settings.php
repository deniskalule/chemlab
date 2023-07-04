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


            <div class="" id="" style="font-size:13px;">
                <div class="header">
                    <h5>Settings</h5>
                    <hr>
                </div>
            </div>
            <div class="message">
            <!-- hello -->
        
            <?php
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
                
            ?>
        </div>
        <!-- error and success message -->

            <div class="row">
                <div class="col-md-6">
                    <form action="./backend/add_lab.php" method="post" class="form shadow bg-white p-4 rounded">
                        <h5 class="text-left">Add Laboratory</h5>
                        <hr />
                        <div class="form-group">
                            <label>Lab Code: </label>
                            <input type="text" class="form-control" name="lab_code" required>
                        </div>
                        <div class="form-group">
                            <label>Lab Name: </label>
                            <input type="text" class="form-control" name="lab_name" required>
                        </div>
                        <button class="btn btn-sm w-25 btn-info" type="submit" name = "add_lab">Add Lab</button>
                    </form>
                </div>
                <div class="col-md-6 "></div>
            </div>


        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>