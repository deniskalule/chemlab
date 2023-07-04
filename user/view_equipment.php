<?php 
if(isset($_POST['id']))
{
    include('./includes/session.php');
    $id = $_POST['id'];
    $select = $conn->query("select * from equipment where id= $id");

    $row = $select->fetch_assoc();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="details bg-white p-3 rounded">
                    <div class="header d-flex justify-content-between">
                        <h6 class="text-uppercase" style="color:#26baf1;"><b>Equipment Details</b><h6>
                        <a href="" class="btn btn-sm btn-outline-secondary">x</a>
                        <hr>
                    </div>
                    <div>
                        <p class="mb-3">Equipment Name : <span><?= $row['name'] ?></span></p>
                        <p class="mb-3">Quantity : <span>
                            <?php
                                if($row['quantity'] != 0)
                                {
                                    echo $row['quantity'];
                                }
                                else
                                {
                                    ?>
                                        <span class='text-danger'>All equipment of this type were ordered. try again later</span>
                                        <script>
                                            document.getElementById("order").style.display = "none";
                                        </script>
                                    <?php
                                } ?></span></p>
                        
                        <p class="mb-3">Location : <span><?= $row['location'] ?></span></p>
                        <p class="mb-3">Specifications: <span><?= $row['specs'] ?></span></p>
                        <p class="mb-3">Code: <span><?= $row['code'] ?></span></p>

                    </div>
                </div>
                
            </div>
            <div class="col-lg-6 mt-4">
                <div class="details bg-white p-3 rounded" id="order">
                    <div class="header">
                        <h6 class="text-uppercase" style="color:#26baf1;"><b>Make an order now</b><h6>
                        <hr>
                    </div>
                    <form  action="./backend/order.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <input type="hidden" name="equip_id" value="<?= $id ?>">
                        <div class="form-group">
                          <label for="">Quantity</label>
                          <input type="number" name="quantity" id="" class="form-control" required>
                        </div>
                        <button name="equip_order" class="btn btn-flat btn-sm btn-primary">Submit request</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>

    <?php

}

?>