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
            <div class="inner-content" >
                
                <!-- <div class="welcome-message shadow p-4">
                    Kyambogo University Chemistry Laboratory portal
                </div> -->
                <div class="search" style="width: 100%;border-radius: 10px;">
                    <h5 class="" style="font-weight: 700; font-family: Arial;">Find Your Desired Item</h5>
                    <form>
                        <i class="fas fa-search    " style=" position: absolute; margin-top: 10px; left: 80%;"></i>
                        <input type="text" name="seachInput" class="form-control pl-4" placeholder="Search Items .... " />
                        
                    </form>
                </div>
                <hr />
                <div id="display">
                    <!-- chemicals -->
                <div class="row mt-3">
                    <div class="d-flex justify-content-between " style="width: 100%;">
                        <h5 style="font-weight: 600;">Chemicals</h4>
                        <a href="chemicals.php" class="btn btn-sm btn-outline-secondary ">View All</a>
                    </div>
                    <div class="home-cards mt-3 ml-3">
                            <?php
                                $select = $conn->query("select * from organic order by id limit 2");
                                while($row = $select->fetch_assoc())
                                {
                                    ?>
                                    <!-- <div class=" mt-3"> -->
                                            <div class="card-deck about-chemical mr-4" id="<?= $row['id'] ?>" style="cursor:pointer;">
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
                <!-- chemicals -->
                <hr />
                <!-- apparatus -->
                <div class="row mt-3" style="">
                    <div class="d-flex justify-content-between" style="width: 100%;">
                        <h5 style="font-weight: 600;">Apparatus</h4>
                        <a href="apparatus.php" class="btn btn-sm btn-outline-secondary ">View All</a>
                    </div>
                    <div class="home-cards mt-3 ml-3">
                            <?php
                                $select = $conn->query("select * from apparatus limit 2");
                                while($row = $select->fetch_assoc())
                                {
                                    ?>
                                    <!-- <div class=" mt-3"> -->
                                            <div class="card-deck about-apparatus mr-4" id="<?= $row['id'] ?>" style="cursor:pointer;">
                                                <div class="card text-center">
                                                    
                                                    <div class="card-body" style="margin:-20px;">
                                                        <p> <?= $row['quantity'] ?></p>
                                                        <h6 class="card-title "><?= $row['name'] ?></h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    <!-- </div> -->

                                    <?php
                                }
                            
                            ?>
                        </div>
                </div>
                <!-- apparatus -->
                <hr />
                <!-- equipment -->
                <div class="row mt-3" style=" margin-bottom: 100px;">
                    <div class="d-flex justify-content-between" style="width: 100%;">
                        <h5 style="font-weight: 600;">Equipment</h4>
                        <a href="equipment.php" class="btn btn-sm btn-outline-secondary ">View All</a>
                    </div>
                    <div class="home-cards mt-3 ml-3">
                            <?php
                                $select = $conn->query("select * from equipment order by id limit 2");
                                while($row = $select->fetch_assoc())
                                {
                                    ?>
                                    <!-- <div class=" mt-3"> -->
                                            <div class="card-deck about-equipment mr-4" id="<?= $row['id'] ?>" style="cursor:pointer;">
                                                <div class="card text-center">
                                                    
                                                    <div class="card-body" style="margin:-20px;">
                                                        <p> <?= $row['quantity'] ?></p>
                                                        <h6 class="card-title text-uppercase"><?= $row['name'] ?></h6>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    <!-- </div> -->

                                    <?php
                                }
                            
                            ?>
                        </div>
                </div>
                <!-- equipment -->
                </div>
                <div id="popup"></div>
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
<script>
    $('.about-chemical').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      chem_id = $(this).attr('id');
      // alert(chem_id);

      $.ajax({
        type: "post",
        url: "view_chemicals.php",
        data: {id:chem_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });

    // apparatus
    $('.about-apparatus').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      app_id = $(this).attr('id');
      // alert(app_id);

      $.ajax({
        type: "post",
        url: "view_apparatus.php",
        data: {id:app_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });

    // equipment
    $('.about-equipment').click(function (e) { 
      e.preventDefault();
      document.getElementById("popup").style.display = "block";

      document.getElementById("display").style.display = "none";

      equ_id = $(this).attr('id');
      // alert(chem_id);

      $.ajax({
        type: "post",
        url: "view_equipment.php",
        data: {id:equ_id},
        // dataType: "dataType",
        success: function (result) {
          $('#popup').html(result);
        }
      });

    });
</script>