<?php
include('./includes/session.php');
include('./includes/header.php');


?>


<div class="main shadow">
    <?php
    
    if($_SESSION['role'] == "Student")
    {
        include('./includes/sidebar.php');
       
    }

    else
    {
        include('./includes/sidebar.php');
    
    }
    
    ?>
    <!-- content section -->
    <div class="content bg-light" >
            <!-- navbar -->
            <?php include('./includes/navbar.php') ?>
            <!-- navbar -->
            <?php
                if(isset($_SESSION['success'])){
                    echo '
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>'.$_SESSION['success'].'</strong> 
                    </div>
                    ';
                    unset($_SESSION['success']);
                }
                ?>   
            <!-- inner-content -->
            <div class="inner-content p-3 " >
                
                <div class="welcome-message shadow p-4">
                    Kyambogo University Chemistry Laboratory portal
                </div>

                <div class="row mt-2">
                    <div class="col-12 text p-2 ml-2">
                        <h6>Get your experiment or project done easily</h6>
                        <p class="">Order chemicals, apparatus and equipment from Kyambogo Chemistry Laboratory</p>
                        
                    </div>
                    <div class="home-cards2 col-12">
                        
                        <a href="chemicals.php" style="text-decoration: none;">
                            <div class="card-deck">
                                <div class="card text-center shadow rounded">
                                    <div class="card-body" style="margin-top :-10px;">
                                        <i class="fas fa-flask    mt-2" style="font-size: 1.5em;"></i>
                                        
                                    </div>
                                    <div class="card-body" style="margin-top:-30px;">
                                        <h5 class="card-title"><b>Chemicals</b></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="apparatus.php" style="text-decoration: none;">
                            <div class="card-deck">
                                <div class="card text-center shadow ">
                                    <div class="card-body" style="margin-top :-10px;">
                                        <i class="fa fa-thermometer-half text-success mb-2" style="font-size: 1.5em;" aria-hidden="true"></i>
                                        
                                    </div>
                                    <div class="card-body" style="margin-top:-30px;">
                                        <h5 class="card-title"><b>Apparatus</b></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="equipment.php" style="text-decoration: none;">
                            <div class="card-deck">
                                <div class="card text-center shadow rounded">
                                    <div class="card-body" style="margin-top :-10px;">
                                        <i class="fa fa-solar-panel text-warning mb-2" style="font-size: 1.5em;" aria-hidden="true"></i>
                                        
                                    </div>
                                    <div class="card-body" style="margin-top:-30px;">
                                        <h5 class="card-title"><b>Equipment</b></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        
                    </div>
                </div>

              
            </div>
            <footer class="footer">
                <ul>
                    <li><a href="./home.php"> <i class="fa fa-home" aria-hidden="true"></i> <p>Home</p></a></li>
                    <li><a href="./orders.php"><i class="fa fa-first-order" aria-hidden="true"></i> <p>Orders</p></a></li>
                    <li><a href="./account_profile.php"> <i class="fa fa-user" aria-hidden="true"></i> <p>Account</p></a></li>
                    <li><a href="./about.php"> <i class="fa fa-address-book" aria-hidden="true"></i> <p>About</p></a></li>
                </ul>
            </footer>
        </div>


</div>









<?php

include('./includes/footer.php');

?>