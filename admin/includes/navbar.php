<nav class="navbar p-2 shadow" style="display:flex; background-color: #0b85b2;
 justify-content:space-between; margin-left: ;">
    <div class="btn">
        <i id="btn" onClick="
            var sidebar = document.querySelector('.sidebar');
            var content = document.querySelector('.content');

            sidebar.classList.toggle('active');
            content.classList.toggle('active');
        " class="fa fa-bars text-white" aria-hidden="true"></i>
    </div>
    <div style="">
        <a href="" class="username ml-4 text-white" style="text-decoration:none;">
        <?php
        if($_SESSION['role'] == "Laboratory Technician")
        {
            ?>
                <i class="fa fa-user-circle mr-2" aria-hidden="true" ></i><?= $user['fname'].' '.$user['lname'] ?>
            <?php
        }
        if($_SESSION['role'] == "Chief Technician")
        {
            ?>
                <i class="fa fa-user-circle mr-2" aria-hidden="true" ></i><?= $user['fname'].' '.$user['lname'] ?>
            <?php
        }
        if($_SESSION['role'] == "admin")
        {
            ?>
                <i class="fa fa-user-circle mr-2" aria-hidden="true" ></i><?= $admin['name'] ?>
            <?php
        }
        
        ?>
            
        </a>
        <a href="./logout.php" class="ml-4 mr-4" style="text-decoration:none;">
            <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
            <span class="text-danger"><b>Log Out</b></span>
            <!-- <i class="fa fa-power-off text-danger" aria-hidden="true"></i> -->
        </a>
    </div>
</nav>