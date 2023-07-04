<?php 
if(isset($_POST['id']))
{
    include('./includes/session.php');
    $id = $_POST['id'];
    $select = $conn->query("select * from organic where id= $id");

    $row = $select->fetch_assoc();
    ?>

    <div class="mt-5">
        <div class="row" style="margin: 0 -30px">
            <div class="col-lg-6">
                <div class="details bg-white p-3 rounded">
                    <div class="header d-flex justify-content-between">
                        <h6 class="text-uppercase" style="color:#26baf1;"><b>Compound Details</b><h6>
                        <a href="" class="btn btn-sm btn-outline-secondary">x</a>
                        <hr>
                    </div>
                    <div class="compound-details">
                        <p class="mb-4"><b>Compound Name :</b> <span><?= $row['compound'] ?></span></p>
                        <p class="mb-4"><b>Quantity :</b> <span>
                        
                            <?php
                              if($row['amount'] != 0)
                              {
                                echo $row['amount'];
                              }
                              else
                              {
                                ?>
                                    <span class='text-danger'>All chemicals of this type were ordered. try again later</span>";
                                    <script>
                                        document.getElementById("order").style.display = "none";
                                    </script>
                                <?php
                              }
                            ?></span></p>
                        <p class="mb-4"><b>Status :</b> <span><?php
                            if(date('yy-mm-dd') < $row['expdate'])
                            {
                                echo "Available";
                            }
                            else
                            {
                                echo "<b class='text-danger'>Expired</b>";
                                ?>
                                    <script>
                                        document.getElementById("order").style.display = "none";
                                    </script>
                                <?php
                            }
                        ?></span></p>
                        <p class="mb-4"><b>Location :</b> <span><?= $row['location'] ?></span></p>
                        <p class="mb-4"><b>Category:</b> <span><?= $row['category'] ?></span></p>

                    </div>
                </div>
                
            </div>
            <div class="col-lg-6">
                <div class="details bg-white p-3 rounded" id="order">
                    <div class="header">
                        <h6 class="text-uppercase" style="color:#26baf1;"><b>Make an order now</b><h6>
                        <hr>
                    </div>
                    <form  action="./backend/order.php" method="post" class="col-8">
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <input type="hidden" name="chem_id" value="<?= $id ?>">
                        <div class="form-group">
                          <label for="">Quantity</label>
                          <input type="number" name="quantity" id="" class="form-control" required>
                        </div>
                        <button class="btn btn-flat btn-sm btn-primary" name="chem_order">Order now</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>

    <?php

}

?>