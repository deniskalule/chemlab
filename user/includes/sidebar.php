    <div class="sidebar p-3 shadow" style="">
            <div class="head text-center mb-3">
                <img src="./assets/images/kyulogo.jpg" width="50" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                <h6 style="" class="">KYU Chemistry Lab</h6>
            </div>

            <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->

            <div class="profile text-center mb-4" style="background-color: #010038; color: #fff;">
                <a href="">
                    <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 2em;"></i>
                    <?php
                    if($_SESSION['role'] == "Student")
                    {
                        ?>
                            <p class="text-white"><?= $user['lname'].' '.$user['fname'] ?></p>
                            <p class="text-white"style="font-size: 13px; margin-top: -15px;"><?= $user['email'] ?></p>
                            <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->
                        <?php
                    }
                    if($_SESSION['role'] == "Lecturer")
                    {
                        ?>
                            <p class="text-white"><?= $user2['lname'].' '.$user2['fname'] ?></p>
                            <p class="text-white"style="font-size: 13px; margin-top: -15px;"><?= $user2['email'] ?></p>
                            <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->
                        <?php
                    }
                    
                    ?>

                    
                </a>
            </div>
            <a href="./home.php">
                <div class="home mb-2 p-2">
                    <i class="fa fa-home mr-2" aria-hidden="true"></i>
                    <span>Home</span>
                </div>
                
            </a>
            <?php
            if($_SESSION['role'] == "Lecturer")
            {
                ?>
                    <a href="./practicals.php">
                        <div class="home mb-2 p-2">
                            <i class="fa fa-flask mr-2" aria-hidden="true"></i>
                            <span>Practicals</span>
                        </div>
                        
                    </a>
                <?php
            }
            ?>
            <a href="./chemicals.php">
                <div class="home mb-2 p-2">
                    <i class="fa fa-flask mr-2" aria-hidden="true"></i>
                    <span>Chemicals</span>
                </div>
                
            </a>
            <a href="./apparatus.php">
                <div class="home mb-2 p-2">
                    <i class="fa fa-thermometer-half mr-2" aria-hidden="true"></i>
                    <span>Apparatus</span>
                </div>
            </a>
            <a href="./equipment.php">
                <div class="home mb-2 p-2">
                    <i class="fas fa-toolbox    mr-2"></i>
                    <span>Equipment</span>
                </div>
                
            </a>
            
            
            <a href="orders.php">
                <div class="home mb-2 p-2">
                    <i class="fas fa-file    mr-2"></i>
                    <span>Orders</span>
                </div>
            </a>
            
            
        </div>