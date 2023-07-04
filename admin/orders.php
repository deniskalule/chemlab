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
            <div class="row" style="font-size:13px;">
                <div class="col-md-11 tables">
                    <div class="header">
                        <h5>Orders list</h5>
                        <hr>
                    </div>
                    <div class="cat-btns">
                        <button id="" class='btn chemical-btn btn-outline-success mr-2 mt-2 mb-2 active' style='font-size: 12px;'>Chemical Orders</button>
                        <button id="" class='btn apparatus-btn btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>Apparatus orders</button>
                        <button id="" class='btn equipment-btn btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>Equipment orders</button>
                    </div>

                    <!-- chemical orders -->
                    <div class="default chemical_show">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Compound Name</th>
                                    <th>Quantity</th>
                                    <th>Ordered by </th>
                                    <th>Contact </th>
                                    <th>Email </th>
                                    <th>Order Date </th>
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = $conn->query("SELECT organic.compound, student_table.fname,student_table.lname, student_table.contact,student_table.email, chemical_orders.quantity,chemical_orders.date,chemical_orders.status
                                    FROM chemical_orders
                                    JOIN organic ON organic.id=chemical_orders.chemical_id
                                    JOIN student_table ON student_table.id = chemical_orders.user_id");
                                    $count = 1;
                                    while($row = $select->fetch_assoc())
                                    {
                                        ?>
                                            <tr>
                                                <td scope="row"><?= $count ?></td>
                                                <td><?= $row['compound'] ?></td>
                                                <td><?= $row['quantity'] ?></td>
                                                <td class="text-uppercase"><?= $row['lname'].' '.$row['fname'] ?></td>
                                                <td><?= $row['contact'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['date'] ?></td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm tel"><i class="fas fa-phone    "></i></a>
                                                    <a href="" class="btn btn-success btn-sm tel"><i class="fas fa-whatsapp    "></i></a>
                                                    <?php 
                                                        if($row['status'] == 1)
                                                        {
                                                            echo '<button class="btn btn-sm btn-success" >Approved</button>';
                                                        }
                                                        else
                                                        {
                                                            echo '<button class="btn btn-sm btn-warning text-white" >Pending ..</button>';
                                                        }
                                                        
                                                    
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                        $count ++;
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- chemical table -->

                    <!-- apparatus table -->
                    <div class="apparatus_show">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Apparatus Name</th>
                                    <th>Quantity</th>
                                    <th>Ordered by </th>
                                    <th>Contact </th>
                                    <th>Email </th>
                                    <th>Order Date </th>
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = $conn->query("SELECT apparatus.name,student_table.fname,student_table.lname,student_table.contact, student_table.email,
                                    apparatus_orders.quantity, apparatus_orders.date, apparatus_orders.status 
                                    FROM apparatus_orders
                                    JOIN apparatus ON apparatus.id = apparatus_orders.apparatus_id
                                    JOIN student_table ON student_table.id = apparatus_orders.user_id");
                                    $count = 1;
                                    while($row = $select->fetch_assoc())
                                    {
                                        ?>
                                            <tr>
                                                <td scope="row"><?= $count ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['quantity'] ?></td>
                                                <td class="text-uppercase"><?= $row['lname'].' '.$row['fname'] ?></td>
                                                <td><?= $row['contact'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['date'] ?></td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm tel"><i class="fas fa-phone    "></i></a>
                                                    <a href="" class="btn btn-success btn-sm tel"><i class="fas fa-whatsapp    "></i></a>
                                                    <?php 
                                                        if($row['status'] == 1)
                                                        {
                                                            echo '<button class="btn btn-sm btn-success" >Approved</button>';
                                                        }
                                                        else
                                                        {
                                                            echo '<button class="btn btn-sm btn-warning text-white" >Pending ..</button>';
                                                        }
                                                        
                                                    
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                        $count ++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- apparatus table -->

                    <!-- equipment_table -->
                    <div class="equipment_show">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Equipment Name</th>
                                    <th>Quantity</th>
                                    <th>Ordered by </th>
                                    <th>Contact </th>
                                    <th>Email </th>
                                    <th>Order Date </th>
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = $conn->query("SELECT equipment.name,student_table.fname,student_table.lname,student_table.contact, student_table.email,
                                    equipment_orders.date,equipment_orders.status,equipment_orders.quantity
                                    FROM equipment_orders
                                    JOIN equipment ON equipment.id = equipment_orders.equipment_id
                                    JOIN student_table ON student_table.id = equipment_orders.user_id");
                                    $count = 1;
                                    while($row = $select->fetch_assoc())
                                    {
                                        ?>
                                            <tr>
                                                <td scope="row"><?= $count ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['quantity'] ?></td>
                                                <td class="text-uppercase"><?= $row['lname'].' '.$row['fname'] ?></td>
                                                <td><?= $row['contact'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['date'] ?></td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm tel"><i class="fas fa-phone    "></i></a>
                                                    <a href="" class="btn btn-success btn-sm tel"><i class="fas fa-whatsapp    "></i></a>
                                                    <?php 
                                                        if($row['status'] == 1)
                                                        {
                                                            echo '<button class="btn btn-sm btn-success" >Approved</button>';
                                                        }
                                                        else
                                                        {
                                                            echo '<button class="btn btn-sm btn-warning text-white" >Pending ..</button>';
                                                        }
                                                        
                                                    
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                        $count ++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- equipment_table -->

                </div>
            </div>
        </div>
    </div>


</div>
<?php

include('./includes/footer.php');

?>