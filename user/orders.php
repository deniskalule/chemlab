<?php
include('./includes/session.php');
include('./includes/header.php');


?>


<div class="main shadow">
    <?php
    
    if($_SESSION['role'] == "student")
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
                <div class="chemicals" style="margin: 6px -20px;">
                    <div class="header p-2">
                        <h6 class="ml-4">My orders</h6>
                        <a href="./orders.php" class="btn"><i class="fas fa-arrow-circle-right    "></i></a>
                    </div>
                </div>
                <div class="home-cards2">
                    <div class="card-deck" >
                        <div class="card text-center shadow rounded">
                            <div class="card-body" style="margin-top :-10px;">
                                
                                <p class="card-text" style="font-size: 2rem; font-weight: 900;">
                                <?php 
                                    $user_id = $user['id'];
                                    $select= $conn->query("select id from chemical_orders where user_id = $user_id");
                                    echo $select->num_rows;
                                ?>
                                
                                </p>
                                <h5 class="card-title"><b>Chemical Orders</b></h5>
                            </div>
                            <div class="card-body" style="margin-top:-30px;">
                                <a href="#" class="card-link btn btn-outline-success">Approved: 
                                    <span>
                                        <?php
                                        $user_id = $user['id'];
                                        $select= $conn->query("select id from chemical_orders where user_id = $user_id and status=1");
                                        echo $select->num_rows;
                                        ?>
                                    </span>
                                </a>
                                <a href="#" class="card-link btn btn-outline-warning">Pending: 
                                    <span>
                                        <?php
                                        $user_id = $user['id'];
                                        $select= $conn->query("select id from chemical_orders where user_id = $user_id and status=0");
                                        echo $select->num_rows;
                                        ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck" >
                        <div class="card text-center shadow rounded">
                            <div class="card-body" style="margin-top :-10px;">
                                
                                <p class="card-text" style="font-size: 2rem; font-weight: 900;">
                                <?php 
                                    $user_id = $user['id'];
                                    $select= $conn->query("select id from equipment_orders where user_id = $user_id");
                                    echo $select->num_rows;
                                ?>
                                
                                </p>
                                <h5 class="card-title"><b>Equipment Orders</b></h5>
                            </div>
                            <div class="card-body" style="margin-top:-30px;">
                                <a href="#" class="card-link btn btn-outline-success">Approved: 
                                    <span>
                                        <?php
                                        $user_id = $user['id'];
                                        $select= $conn->query("select id from equipment_orders where user_id = $user_id and status=1");
                                        echo $select->num_rows;
                                        ?>
                                    </span>
                                </a>
                                <a href="#" class="card-link btn btn-outline-warning">Pending: 
                                    <span>
                                        <?php
                                        $user_id = $user['id'];
                                        $select= $conn->query("select id from equipment_orders where user_id = $user_id and status=0");
                                        echo $select->num_rows;
                                        ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck" >
                        <div class="card text-center shadow rounded">
                            <div class="card-body" style="margin-top :-10px;">
                                
                                <p class="card-text" style="font-size: 2rem; font-weight: 900;">
                                <?php 
                                    $user_id = $user['id'];
                                    $select= $conn->query("select id from apparatus_orders where user_id = $user_id");
                                    echo $select->num_rows;
                                ?>
                                
                                </p>
                                <h5 class="card-title"><b>Apparatus Orders</b></h5>
                            </div>
                            <div class="card-body" style="margin-top:-30px;">
                                <a href="#" class="card-link btn btn-outline-success">Approved: 
                                    <span>
                                        <?php
                                        $user_id = $user['id'];
                                        $select= $conn->query("select id from apparatus_orders where user_id = $user_id and status=1");
                                        echo $select->num_rows;
                                        ?>
                                    </span>
                                </a>
                                <a href="#" class="card-link btn btn-outline-warning">Pending: 
                                    <span>
                                        <?php
                                        $user_id = $user['id'];
                                        $select= $conn->query("select id from apparatus_orders where user_id = $user_id and status=0");
                                        echo $select->num_rows;
                                        ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>

            <!-- display chemical orders -->
            <div id="chemical-orders"></div>
            <!-- display chemical orders -->
            <div id="apparatus-orders"></div>
            <!-- display chemical orders -->
            <div id="equipment-orders"></div>
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