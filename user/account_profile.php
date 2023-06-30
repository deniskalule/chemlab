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
            

              <div class="profile bg-info mt-5 p-3 rounded">
                <h4 class="text-white"> Account Profile</h4>
                <div class=" mt-4">
                    <p style="color:rgb(221, 111, 20);"> Welcome <span class="text-uppercase"><b><?= $user['name'] ?></b></span></p>
                    <p class="text-white" style="margin-top: -10px;"><?= $user['email'] ?></p>
                </div>
              </div>
              

                <!-- change password -->
                <div class="password-change mt-3 bg-light shadow p-3">
                    <div class="header bg-info text-white p-2">Change password</div>
                    <form action="./backend/password_change.php" method="post">
                        <input type="password" name="new_password" class="form-control mt-2" placeholder="Enter new password" >
                        <input type="password" name="confirm_password" class="form-control mt-2" placeholder="Confirm password ........." >
                        <button class="btn btn-flat btn-sm btn-primary mt-2" name="password_change">Change</button>
                    </form>
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