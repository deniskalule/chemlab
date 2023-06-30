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
                <div class="col-10 tables">
                    <!-- organic -->
                    <div class="orders">
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
                                        <th>Ordered by </th>
                                        <th>Quantity </th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $select = $conn->query("select chemical_orders.id, chemical_orders.chemical_id, chemical_orders.status, chemical_orders.user_id, 
                                        chemical_orders.quantity, organic.compound, usertable.name
                                        from chemical_orders
                                        join organic on chemical_orders.chemical_id = organic.id 
                                        join usertable on  chemical_orders.user_id = usertable.id");
                                        while($row = $select->fetch_assoc())
                                        {
                                            ?>
                                                <tr>
                                                    <td scope="row"><?= $row['id'] ?></td>
                                                    <td><?= $row['compound'] ?></td>
                                                    <td class="text-uppercase"><?= $row['name'] ?></td>
                                                    <td><?= $row['quantity'] ?></td>
                                                    <td>
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
                                                        <a href="" class="btn btn-primary btn-sm tel"><i class="fas fa-phone    "></i></a>
                                                        <a href="" class="btn btn-success btn-sm tel"><i class="fas fa-whatsapp    "></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>

                        <!-- apparatus orders -->
                        <div class="apparatus_show">
                        <table class="table" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Apparatus Name</th>
                                        <th>Ordered by </th>
                                        <th>Quantity </th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $select = $conn->query("select apparatus_orders.id, apparatus_orders.apparatus_id, apparatus_orders.status, apparatus_orders.user_id, 
                                        apparatus_orders.quantity, apparatus.name, usertable.name as username
                                        from apparatus_orders
                                        join apparatus on apparatus_orders.apparatus_id = apparatus.id 
                                        join usertable on  apparatus_orders.user_id = usertable.id");
                                        while($row = $select->fetch_assoc())
                                        {
                                            ?>
                                                <tr>
                                                    <td scope="row"><?= $row['id'] ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td class="text-uppercase"><?= $row['username'] ?></td>
                                                    <td><?= $row['quantity'] ?></td>
                                                    <td>
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
                                                        <a href="" class="btn btn-primary btn-sm tel"><i class="fas fa-phone    "></i></a>
                                                        <a href="" class="btn btn-success btn-sm tel"><i class="fas fa-whatsapp    "></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>

                        <!-- equipment orders -->
                        <div class="equipment_show">
                        <table class="table" id="table3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Apparatus Name</th>
                                        <th>Ordered by </th>
                                        <th>Quantity </th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $select = $conn->query("select equipment_orders.id, equipment_orders.equipment_id, equipment_orders.status, equipment_orders.user_id, 
                                        equipment_orders.quantity, equipment.name, usertable.name as username
                                        from equipment_orders
                                        join equipment on equipment_orders.equipment_id = equipment.id 
                                        join usertable on  equipment_orders.user_id = usertable.id");
                                        while($row = $select->fetch_assoc())
                                        {
                                            ?>
                                                <tr>
                                                    <td scope="row"><?= $row['id'] ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td class="text-uppercase"><?= $row['username'] ?></td>
                                                    <td><?= $row['quantity'] ?></td>
                                                    <td>
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
                                                        <a href="" class="btn btn-primary btn-sm tel"><i class="fas fa-phone    "></i></a>
                                                        <a href="" class="btn btn-success btn-sm tel"><i class="fas fa-whatsapp    "></i></a>


                                                    </td>
                                                </tr>
                                            <?php
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