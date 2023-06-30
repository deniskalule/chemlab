<nav class="navbar p-2 bg-light shadow" style="display:flex; justify-content:space-between; margin-left: ;">
    <div class="btn">
        <i id="btn" onClick="
            var sidebar = document.querySelector('.sidebar');
            var content = document.querySelector('.content');
            var nav = document.querySelector('navbar');

            sidebar.classList.toggle('active');
            content.classList.toggle('active');
            nav.classList.toggle('active');
        " class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div style="">
        <a href="" class="username ml-4" style="text-decoration:none;">
        <?php
        if($_SESSION['role'] == "Student")
        {
            ?>
                <i class="fa fa-user-circle mr-2" aria-hidden="true" ></i><?= $user['lname'].' '.$user['fname'] ?>
            <?php
        }
        else
        {
            ?>
                <i class="fa fa-user-circle mr-2" aria-hidden="true" ></i><?= $user2['lname'].' '.$user2['fname'] ?>
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