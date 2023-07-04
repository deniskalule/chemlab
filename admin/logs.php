<?php

include('./includes/session.php');

include('./includes/header.php');

?>



<div class="main shadow">
    <!-- sidebar section -->
    <?php
        include('./includes/sidebar.php');
    ?>

    <!-- content section -->
    <div class="content bg-light">
        <!-- navbar -->
        <?php include('./includes/navbar.php') ?>
        <!-- navbar -->

        <!-- error and success message -->
        <div class="message">
            <!-- hello -->
            <?php
                if(isset($_SESSION['error'])){
                echo "
                    <div class='alert alert-danger alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Error!</h4>
                    ".$_SESSION['error']."
                    </div>
                ";
                unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                echo "
                    <div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-check'></i> Success!</h4>
                    ".$_SESSION['success']."
                    </div>
                ";
                unset($_SESSION['success']);
                }
                if(isset($_SESSION['message']))
                {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                }
            ?>
        </div>
        <!-- error and success message -->

        <!-- inner-content -->
        <div class="inner-content mt-2 p-3">
            

            <div class="row" id="" style="font-size:13px;">
                <div class="col-11 tables mt-3">
                    <div class="logs">
                        <div class="header">
                            <h5>Activity Logs</h5>
                            <hr>

                            <!-- <?= $_SESSION['admin'] ?> -->
                        </div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                    <th>Date and Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                    $sql = $conn->query("select * from logs");
                                    $count = 1;
                                    while($row = $sql->fetch_assoc())
                                    {
                                        ?>
                                        <tr>
                                            <td scope="row"><?= $count ?></td>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= $row['role'] ?></td>
                                            <td><?= $row['action'] ?></td>
                                            <td><?= $row['date'] ?></td>
                                        </tr>
                                        <?php
                                        $count++;
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>