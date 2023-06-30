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
            
            <!-- buttons -->
            
            <!-- buttons -->

            <div class="row" id="" style="font-size:13px; margin-left: 2%;">
                <div class="col-8 tables mt-3">
                    <!-- organic -->
                    <div class="lecturers">
                        <div class="header">
                            <h5>Lecturer users list</h5>
                            <hr>
                        </div>
                        <table class="table bg-white m-2" id="table2">
                            <thead class = "bg-dark">
                                <tr class="text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Course Unit</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $result = $conn->query("select * from usertable where role = 'lecturer'");
                                    while($row = $result->fetch_assoc())
                                    {
                                    
                                ?>
                                <tr>
                                    <td scope="row"><?= $row['id']; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['department']; ?></td>
                                    <td><?= $row['course_unit']; ?></td>
                                    <td>
                                        <a href="" style="font-size: 12px;" class="more3 btn btn-sm btn-info" id="<?= $row['id']; ?>"><i class="fas fa-edit     mr-2"></i>More</a>
                                        
                                    </td>
                                </tr>
                                <?php
                                    
                                }
                                ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- organic -->


        </div>
    </div>


</div>









<?php

include('./includes/footer.php');

?>