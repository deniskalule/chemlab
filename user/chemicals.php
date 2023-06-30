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
              
            <!-- inner-content -->
            <div class="inner-content mt-2 p-3">
            <?php
                if(isset($_SESSION['success'])){
                    echo "
                    <div class='alert col-12 alert-success text-center'>
                        <p style='font-size: 15px;''>".$_SESSION['success']."</p> 
                    </div>
                    ";
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo "
                    <div class='alert col-12 alert-success text-center'>
                        <p style='font-size: 15px;''>".$_SESSION['error']."</p> 
                    </div>
                    ";
                    unset($_SESSION['error']);
                }
                ?> 
              <div class="" id="display">
                <!-- chemicals -->
                <div class="chemicals">
                    <div class="header">
                        <h6 class="mt-2">Chemicals</h6>
                        <a href="./chemicals.php" class="btn"><i class="fas fa-arrow-circle-right    "></i></a>
                    </div>
                    <!-- <input class="form-control mt-2" style="width: 80%;" onkeyup="searchItems()" type="text" placeholder="Search for chemical........."> -->
                    <div class="cat-btns">
                        <button id="all" class='btn cat-btn btn-outline-success mr-2 mt-2 mb-2 active' style='font-size: 12px;'>All chemicals</button>
                        <?php
                            $cat_btns = $conn->query("select category from organic group by category");

                            while($cat_btn = $cat_btns->fetch_assoc())
                            {
                                echo "<button id=".$cat_btn['category']." class='btn cat-btn btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>".$cat_btn['category']."</button>";
                            }
                        ?>

                    </div>
                    <div id="view_details" class="mt-3">
                    </div>
                    
                    <div class="all mt-3">
                        <h6>All Chemicals </h6>
                        <hr />
                        <div class="home-cards">
                            <?php
                                $select = $conn->query("select * from organic");
                                while($row = $select->fetch_assoc())
                                {
                                    ?>
                                    <!-- <div class=" mt-3"> -->
                                            <div class="card-deck about-chemical mr-2" id="<?= $row['id'] ?>" style="cursor:pointer;">
                                                <div class="card text-center">
                                                    
                                                    <div class="card-body" style="margin:-20px;">
                                                        <p> <?= $row['amount'] ?></p>
                                                        <h6 class="card-title"><?= $row['compound'] ?></h6>
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
             </div>

              <!-- popup -->
              <div class="p-3" id= "popup">
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