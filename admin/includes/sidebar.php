    <div class="sidebar p-3 shadow" style="">
            <div class="head" style = "display:flex; margin: 20px 0;">
            <!-- <i class="fa fa-arrow-circle-left mr-4" id="btn" style="font-size:1.5rem; color: white;" aria-hidden="true"></i> -->
                <h6 style="font-size: 17px;" class="text-center text-white">KYU Chemistry Lab</h6>
                
            </div>

            <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->

            <div class="profile bg-light text-center mb-4">
                <a href="">
                    <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 2em;"></i>
                    <?php
                    
                    $query = $conn->query("select * from admin");
                    $row = $query->fetch_assoc();
                    
                    
                    ?>
                    <p class="text-dark"><?= $row['name'] ?></p>
                    <p class="text-dark"style="font-size: 13px; margin-top: -15px;"><?= $row['email'] ?></p>
                    <!-- <hr class="text-center mb-4" style="margin-top: 10PX;" color="white" height="20px"> -->
                </a>
            </div>
            <a href="./home.php">
                <div class="home mb-2 p-2">
                    <i class="fa fa-home mr-2" aria-hidden="true"></i>
                    <span>Home</span>
                </div>
                
            </a>
                <div class="home outer mb-2 p-2">
                    <!-- <i class="fa fa-arrow-circle-down mr-2" aria-hidden="true"></i> -->
                    <ul id="ul">
                        <li style = "list-style-type: none;">
                            <i class="fa fa-first-order mr-2" aria-hidden="true"></i>
                            <span class="caret">Orders</span>
                            <ul class="nested">
                                <a href="" class="mb-2"><li>By student</li></a>
                                <a href="" class="mb-2"><li>By Lecturer</li></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!-- <a href=""> -->
                <div class="home outer mb-2 p-2">
                    <!-- <i class="fa fa-arrow-circle-down mr-2" aria-hidden="true"></i> -->
                    <ul id="ul">
                        <li style = "list-style-type: none;">
                            <i class="fa fa-flask mr-2" aria-hidden="true"></i>
                            <span class="caret">Chemicals</span>
                            <ul class="nested">
                                <a href="http://localhost/chemlab/admin/chemicals/add.php" class=" mb-2"><li>View</li></a>
                                <a href="http://localhost/chemlab/admin/chemicals/add.php"><li>Add</li></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!-- </a> -->
            <a href="">
                <div class="home mb-2 p-2">
                    <i class="fa fa-thermometer-half mr-2" aria-hidden="true"></i>
                    <span>Apparatus</span>
                </div>
            </a>
            <a href="./home.php">
                <div class="home mb-2 p-2">
                    <i class="fas fa-toolbox    mr-2"></i>
                    <span>Equipment</span>
                </div>
                
            </a>
            <div class="home outer mb-2 p-2">
                    <!-- <i class="fa fa-arrow-circle-down mr-2" aria-hidden="true"></i> -->
                    <ul id="ul">
                        <li style = "list-style-type: none;">
                            <i class="fa fa-user mr-2" aria-hidden="true"></i>
                            <span class="caret">Users</span>
                            <ul class="nested">
                                <a href="http://localhost/chemlab/admin/chemicals/add.php" class=" mb-2"><li>Students</li></a>
                                <a href="http://localhost/chemlab/admin/chemicals/add.php"><li>Lecturers</li></a>
                            </ul>
                    </li>
                    </ul>
                </div>
            
            <a href="">
                <div class="home mb-2 p-2">
                    <i class="fas fa-file    mr-2"></i>
                    <span>Reports</span>
                </div>
            </a>
            
            
        </div>