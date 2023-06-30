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
    <div class="content bg-light">
            <!-- navbar -->
            <?php include('./includes/navbar.php') ?>
            <!-- navbar -->
            <?php
                if(isset($_SESSION['success'])){
                    echo "
                    <div class='alert col-12 alert-success text-center'>
                        <p style='font-size: 15px;''>".$_SESSION['success']."</p> 
                    </div>
                    ";
                    unset($_SESSION['success']);
                }
                ?>   
            <!-- inner-content -->
            <div class="inner-content mt-2 p-3">

              <div class="" id="display">

                <!-- equipment -->
                <div class="chemicals">
                    <div class="header">
                        <h6>Equipment</h6>
                        <a href="./equipment.php" class="btn"><i class="fas fa-arrow-circle-right    "></i></a>

                    </div>

                    <!-- category buttons -->
                    <div class="cat-btns">
                        <button id="all" class='btn cat-btn3 btn-outline-success mr-2 mt-2 mb-2 active' style='font-size: 12px;'>All equipment</button>
                        <?php
                            // $cat_btns = $conn->query("select category from organic group by category");

                            // while($cat_btn = $cat_btns->fetch_assoc())
                            // {
                            //     echo "<button id=".$cat_btn['category']." class='btn cat-btn btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>".$cat_btn['category']."</button>";
                            // }
                        ?>

                    </div>
                    <div id="view_details" class="mt-3">
                    </div>
                    <div class="all mt-3">
                        <h6>All Equipment </h6>
                        <hr />
                        <div class="home-cards">
                            <?php
                                $select = $conn->query("select * from equipment");
                                while($row = $select->fetch_assoc())
                                {
                                    ?>
                                    <!-- <div class=" mt-3"> -->
                                            <div class="card-deck about-equipment mr-2" id="<?= $row['id'] ?>" style="cursor:pointer;">
                                                <div class="card text-center">
                                                    
                                                    <div class="card-body" style="margin:-20px;">
                                                        <p> <?= $row['quantity'] ?></p>
                                                        <h6 class="card-title"><?= $row['name'] ?></h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    <!-- </div> -->

                                    <?php
                                }
                            
                            ?>
                        </div>

                    </div>

                </div>
                <!-- equipment -->
              </div>

              <!-- popup -->
              <div class="" style="margin-top: 50px" id= "popup" style="display:none">;
                
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