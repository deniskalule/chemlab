<nav class="navbar p-2 bg-light shadow" style="display:flex; justify-content:space-between; margin-left: ;">
    <div class="btn">
        <i id="btn" class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div style="">
        <a href="" class="username ml-4" style="text-decoration:none;">
            <i class="fa fa-user-circle mr-2" aria-hidden="true" ></i><?= $row['name'] ?>
        </a>
        <a href="./logout.php" class="ml-4 mr-4" style="text-decoration:none;">
            <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
            <span class="text-danger"><b>Log Out</b></span>
            <!-- <i class="fa fa-power-off text-danger" aria-hidden="true"></i> -->
        </a>
    </div>
</nav>