<?php

include('../includes/conn.php');
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $result = $conn->query("select * from organic where id = $id");
    while($row = $result->fetch_assoc())
    {
    
?>
<div class="" style="margin: -20px;">
    <div class="chem_info bg-white p-2 rounded" style="font-size: 13px;">
        <div class="header">
            <h6 class="text-uppercase text-center">Chemical Information</h6>
            <hr>
        </div>
        <div style="display:flex;">
            <h6>Compound:</h6> 
            <p class="ml-2"><?= $row['compound'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Amount:</h6> 
            <p class="ml-2"><?= $row['amount'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Expiration_date:</h6> 
            <p class="ml-2"><?= $row['expdate'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Location:</h6> 
            <p class="ml-2"><?= $row['location'] ?></p>
        </div>

        <!-- buttons -->
        <div class="buttons mt-3">
            <hr>
            <a href="" id="<?= $id ?>" data-toggle="modal" data-target="#edit" class="btn edit btn-info btn-sm"><i class="fas fa-edit    mr-2"></i>Edit</a>
            <a href="" id="<?= $id ?>" data-toggle="modal" data-target="#delete" class="btn delete btn-danger btn-sm"><i class="fas fa-trash    mr-2"></i>Delete</a>

            <a href="" class="btn btn-dark btn-sm pull-right"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Close</a>
        </div>
        <!-- buttons -->

        <!-- quick edits -->
        <div class="add-amount mt-4">
            <h6 class="text-uppercase text-center">add amount</h6>
            <hr>
            <form action="./backend/addchemical.php" method="post" class="form">
                 <input type="hidden" name= "id" value="<?= $id ?>">
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" name= "quantity" class="form-control" required>
                </div>
                <button type="submit" name ="add_amt" class="mt-1 btn btn-success btn-sm">Save</button>
            </form>
        </div>
        <!-- quick edits -->
    </div>
</div>
<!-- Modal for delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title">Delete Chemical</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="./backend/addchemical.php" method="post">
                    <input type="hidden" name= "id" value="<?= $id ?>">

                    <p class="text-center">Are you sure, you want to delete</p>
                    <div class="modal-footer">
                        <button type="submit" name="delete" class="btn btn-success btn-sm">Yes</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">no</button>
                        
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal for edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="text-center text-white p-2">Edit information</h6>
                    <button type="button" class="close text-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="./backend/addchemical.php" method="post" class="form rounded">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="form-group">
                        <label for="">Compound Name:</label>
                        <input type="text" name="cname" class="form-control" value="<?= $row['compound'] ?>" required>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label for="">Amount in grams: </label>
                            <input type="number" name = "camount" class="form-control" value="<?= $row['amount'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="">Expiry date:</label>
                            <input type="date" name="cexp" class="form-control" value="<?= $row['expdate'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" name="location" class="form-control" value="<?= $row['location'] ?>" required>

                    </div>
                    <button class="btn-primary form-control" name = "update">Save</button>
                </form>
            </div>
            
        </div>
    </div>
</div>

<?php
    
}
    

}

?>
