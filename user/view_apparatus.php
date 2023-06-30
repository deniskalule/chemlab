<?php 
if(isset($_POST['id']))
{
    include('./includes/session.php');
    $id = $_POST['id'];
    $select = $conn->query("select * from apparatus where id= $id");

    $row = $select->fetch_assoc();
    ?>

    <div class="">
        <div class="row" style="margin: 0 -30px">
            <div class="col-lg-6">
                <div class="details bg-white p-3 rounded">
                    <div class="header">
                        <h6 class="text-uppercase" style="color:#26baf1;"><b>Apparatus details</b><h6>
                        <hr>
                    </div>
                    <div>
                        <p class="mb-4">Apparatus Name : <span><?= $row['name'] ?></span></p>
                        <p class="mb-4">Quantity : <span>
                            <?php
                                if($row['quantity'] != 0)
                                {
                                    echo $row['quantity'];
                                }
                                else
                                {?>
                                    <span class='text-danger'>All apparatus were ordered. try again later</span>
                                    <script>
                                        document.getElementById("order").style.display = "none";
                                    </script>
                                <?php
                                }
                            ?>
                        </span></p>
                        <p class="mb-4">Location : <span><?= $row['location'] ?></span></p>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6">
                <div class="details bg-white p-3 rounded" id= "order">
                    <div class="header">
                        <h6 class="text-uppercase" style="color:#26baf1;"><b>Make an order now</b><h6>
                        <hr>
                    </div>
                    <form  action="./backend/order.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <input type="hidden" name="app_id" value="<?= $id ?>">
                        <div class="form-group">
                          <label for="">Quantity</label>
                          <input type="number" name="quantity" id="" class="form-control" required>
                        </div>
                        <button name="app_order" class="btn btn-flat btn-sm btn-primary">Order now</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>

    <?php

}

?>