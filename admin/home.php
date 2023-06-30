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
        <?php
                if(isset($_SESSION['success'])){
                    echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
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
        <div class="inner-content mt-2 p-3">
            
            <div class="row">
                
                <div class="col-lg-4 col-sm-6">
                    <!-- cards -->
                    <div class="card shadow bg-white mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="display:flex;">
                                    
                                    <h1 class="text-center ml-4" style=" margin-top: -6px;">
                                    <?php
                                        $query= $conn->query("select id from organic");
                                        echo $query->num_rows;
                                    ?>
                                    </h1>
                                </div>
                                <div class="col-8">
                                    <h5 class="card-title"><i class="fa fa-flask mr-3" style="font-size:2rem; color: red;" aria-hidden="true"></i>Chemicals</h5>
                                    <a href="chemicals.php" class="card1 form-control">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow bg-white mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="display:flex;">
                                
                                <h1 class="text-center ml-4" style=" margin-top: -6px;">
                                <?php
                                    $query= $conn->query("select id from apparatus");
                                    echo $query->num_rows;
                                ?>
                                </h1>
                                </div>
                                <div class="col-8">
                                    <h5 class="card-title"><i class="fa fa-thermometer-half mr-3" style="font-size:2rem; color: orange;" aria-hidden="true"></i>Apparatus</h5>
                                    <a href="apparatus.php" class="form-control card2">More Info</a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card shadow bg-white mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="display:flex;">
                                    
                                    <h1 class="text-center ml-4" style=" margin-top: -6px;">
                                    <?php
                                        $query= $conn->query("select id from equipment");
                                        echo $query->num_rows;
                                    ?>
                                    </h1>
                                </div>
                                <div class="col-8">
                                    <h5 class="card-title"><i class="fa fa-themeisle mr-3" style="font-size:2rem; color: green;"  aria-hidden="true"></i>Equipment</h5>
                                    <a href="equipment.php" class="form-control card3">More Info</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row small-cards pt-3" style="background-color: #0001;">
                <div class="col-lg-2 col-sm-6">
                    <div class="card shadow mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user"style="font-size:1rem; color: blue;" aria-hidden="true" aria-hidden="true"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="card-title">Users</h6>
                                    <hr>
                                    <p class="card-text" style="margin-left:-10px;">
                                    <span><?php
                                        $query= $conn->query("select id from student_table");
                                        echo $query->num_rows;
                                    ?></span>
                                    Students</p>
                                    <p class="card-text" style="margin-left:-10px;">
                                    <span>
                                    <?php
                                        $query= $conn->query("select id from staff_table");
                                        echo $query->num_rows;
                                    ?> 

                                    </span>
                                    Staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="card shadow mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-themeisle" style="font-size:1rem; color: blue;" aria-hidden="true"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="card-title">Orders</h6>
                                    <hr>
                                    <p class="card-text" style="margin-left:-25px; margin-top: -20px;"><span>
                                        <?php
                                            $select = $conn->query("select id from chemical_orders");
                                            echo $select->num_rows;
                                        ?>
                                    </span> Chemicals</p>
                                    <p class="card-text" style="margin-left:-25px; margin-top: -20px;"><span>
                                        <?php
                                            $select = $conn->query("select id from equipment_orders");
                                            echo $select->num_rows;
                                        ?>
                                    </span> Equipment</p>
                                    <p class="card-text" style="margin-left:-25px; margin-top: -20px;"><span>
                                        <?php
                                            $select = $conn->query("select id from apparatus_orders");
                                            echo $select->num_rows;
                                        ?>
                                    </span> Apparatus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="card shadow mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <!-- <i class="fa fa-user" style="font-size:2rem; color: blue;" aria-hidden="true"></i> -->
                                    <i class="fa fa-bell" style="font-size:1rem; color: blue; margin-left: -5px;" aria-hidden="true"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="card-title" style="margin-left:-15px;">Issued (C)</h6>
                                    <hr>
                                    <p class="card-text" style="margin-left:-25px;"><span>0</span> to Students</p>
                                    <p class="card-text" style="margin-left:-25px;"><span>0</span> to Lecturers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="card shadow mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <!-- <i class="fa fa-user" style="font-size:2rem; color: blue;" aria-hidden="true"></i> -->
                                    <i class="fa fa-bell" style="font-size:1rem; color: blue; margin-left: -5px;" aria-hidden="true"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="card-title" style="margin-left:-15px;">Issued (E)</h6>
                                    <hr>
                                    <p class="card-text" style="margin-left:-25px;"><span>0</span> to Students</p>
                                    <p class="card-text" style="margin-left:-25px;"><span>0</span> to Lecturers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="card shadow mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <!-- <i class="fa fa-user" style="font-size:2rem; color: blue;" aria-hidden="true"></i> -->
                                    <i class="fa fa-bell" style="font-size:1rem; color: blue; margin-left: -5px;" aria-hidden="true"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="card-title" style="margin-left:-15px;">Issued (A)</h6>
                                    <hr>
                                    <p class="card-text" style="margin-left:-25px;"><span>0</span> to Students</p>
                                    <p class="card-text" style="margin-left:-25px;"><span>0</span> to Lecturers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="card shadow mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <!-- <i class="fa fa-user" style="font-size:2rem; color: blue;" aria-hidden="true"></i> -->
                                    <i class="fa fa-bell" style="font-size:1rem; color: blue; margin-left: -5px;" aria-hidden="true"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="card-title" style="margin-left:-15px;">Pending</h6>
                                    <hr>
                                    <p class="card-text" style="margin-left:-25px; margin-top: -20px;"><span>
                                        <?php
                                            $select = $conn->query("select id from chemical_orders where status = 0");
                                            echo $select->num_rows;
                                        ?>
                                    </span> Orders (C)</p>
                                    <p class="card-text" style="margin-left:-25px; margin-top: -20px;"><span>
                                        <?php
                                            $select = $conn->query("select id from equipment_orders where status = 0");
                                            echo $select->num_rows;
                                        ?>
                                    </span> Orders (E)</p>
                                    <p class="card-text" style="margin-left:-25px; margin-top: -20px;"><span>
                                        <?php
                                            $select = $conn->query("select id from apparatus_orders where status = 0");
                                            echo $select->num_rows;
                                        ?>
                                    </span> Orders (A)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-9">
                        
                        <h5 class="mb-3">Statistics</h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="box bg-white p-2">
                                    <canvas id="my1" style="font-size: 11px;"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="box bg-white p-1">
                                    <canvas id="mychart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 p-3">
                        <div>
                            <h6>Recent orders</h6>
                            <hr />
                        </div>
                    </div>
                    
                </div>
            </div> 
        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>