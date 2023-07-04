    <div class="sidebar p-3 shadow">
            <div class="head" style = "margin: 20px 0;">
            <!-- <i class="fa fa-arrow-circle-left mr-4" id="btn" style="font-size:1.5rem; color: white;" aria-hidden="true"></i> -->
                <h6 style="font-size: 17px;" class="text-center">KYU Chemistry Lab</h6>
                
            </div>

            <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->

            <div class="profile text-center mb-4">
                <a href="" class="text-white">
                    <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 2em;"></i>
                    
                    <?php
                    // echo $_SESSION['role'];
                    if($_SESSION['role'] == "Laboratory Technician")
                    {
                        ?>
                            <p class=""><?= $user['fname'].' '.$user['lname'] ?></p>
                            <p class=""style="font-size: 12px; margin-top: -15px;"><?= $user['email'] ?></p>
                        <?php
                    }
                    if($_SESSION['role'] == "Chief Technician")
                    {
                        ?>
                            <p class=""><?= $user['fname'].' '.$user['lname']?></p>
                            <p class=""style="font-size: 12px; margin-top: -15px;"><?= $user['email'] ?></p>
                        <?php
                    }
                    if($_SESSION['role'] == "admin")
                    {
                        ?>
                            <p class=""><?= $admin['name'] ?></p>
                            <p class=""style="font-size: 12px; margin-top: -15px;"><?= $admin['email'] ?></p>
                            <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->
                        <?php
                    }
                    
                    ?>
                    
                </a>

            </div>
            <a href="./home.php">
                <div class="home mb-1 p-2">
                    <i class="fa fa-home mr-2" aria-hidden="true"></i>
                    <span>Home</span>
                </div>
                
            </a>
            <a href="./orders.php">
                <div class="home mb-1 p-2">
                    <i class="fas fa-hand-holding    "></i>
                    <span>Orders</span>
                </div>
                
            </a>
                
           
            <a href="./chemicals.php">
                <div class="home mb-1 p-2">
                    <i class="fa fa-flask mr-2" aria-hidden="true"></i>
                    <span>Chemicals</span>
                </div>
                
            </a>
            <a href="./apparatus.php">
                <div class="home mb-1 p-2">
                    <i class="fa fa-thermometer-half mr-2" aria-hidden="true"></i>
                    <span>Apparatus</span>
                </div>
            </a>
            <a href="./equipment.php">
                <div class="home mb-1 p-2">
                    <i class="fas fa-toolbox    mr-2"></i>
                    <span>Equipment</span>
                </div>
                
            </a>
            <?php
             if($_SESSION['role'] == "admin")
             {
                 ?>
                    <a href="./practicals.php">
                        <div class="home mb-1 p-2">
                            <i class="fas fa-users    mr-2"></i>
                            <span>Practicals</span>
                        </div>
                        
                    </a>
                    <a href="./users.php">
                        <div class="home mb-1 p-2">
                            <i class="fas fa-users    mr-2"></i>
                            <span>Users</span>
                        </div>
                        
                    </a>
                    
                    
                    <a href="">
                        <div class="home mb-1 p-2">
                            <i class="fas fa-file    mr-2"></i>
                            <span>Reports</span>
                        </div>
                    </a>
                    <a href="./logs.php">
                        <div class="home mb-1 p-2">
                            <i class="fas fa-cog    mr-2"></i>
                            <span>Activity logs</span>
                        </div>
                        
                    </a>
                    <a href="./settings.php">
                        <div class="home mb-1 p-2">
                            <i class="fas fa-cog    mr-2"></i>
                            <span>Settings</span>
                        </div>
                        
                    </a>
                 <?php
             }
            
            ?>
            
            
            
            
        </div>