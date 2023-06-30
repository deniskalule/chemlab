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
            
            <!-- buttons -->

            <div class="row" id="" style="font-size:13px;">
                <div class="col-8 tables mt-3">
                    <!-- organic -->
                    <div class="students">
                        <div class="header">
                            <h5>Student users list</h5>
                            <hr>
                        </div>
                        
                    </div>
                    <!-- organic -->


        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>