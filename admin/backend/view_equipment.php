<?php

include('../includes/conn.php');
if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $result = $conn->query("select * from equipment where id = $id");
    while($row = $result->fetch_assoc())
    {
    
?>
<div class="" style="margin: -20px;">
    <div class="chem_info bg-white p-2 rounded" style="font-size: 13px;">
        <div class="header">
            <h6 class="text-uppercase text-center">Equipment Information</h6>
            <hr>
        </div>
        <div style="display:flex;">
            <h6>Code:</h6> 
            <p class="ml-2"><?= $row['code'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Name:</h6> 
            <p class="ml-2"><?= $row['name'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Specifications:</h6> 
            <p class="ml-2"><?= $row['specs'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Quantity:</h6> 
            <p class="ml-2"><?= $row['quantity'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Supplier:</h6> 
            <p class="ml-2"><?= $row['supplier'] ?></p>
        </div>
        <div style="display:flex;">
            <h6>Status:</h6> 
            <p class="ml-2"><?= $row['status'] ?></p>
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
            <h6 class="text-uppercase text-left">add amount</h6>
            <!-- <hr> -->
            <form action="./backend/addequipment.php" method="post" class="form">
                 <input type="hidden" name= "id" value="<?= $id ?>">
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" name= "quantity" class="form-control" required>
                </div>
                <button type="submit" name ="add_amt" class="mt-1 btn btn-success btn-sm">Save</button>
            </form>
        </div>
        <div class="add-amount mt-4">
            <h6 class="text-uppercase text-left">change status</h6>
            <!-- <hr> -->
            <form action="./backend/addequipment.php" method="post" class="form">
                 <input type="hidden" name= "id" value="<?= $id ?>">
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control" required>
                        <option value="" selected>Select</option>
                        <option value="working">Working</option>
                        <option value="not working">Not working</option>
                        <option value="under maintenance">Under maintenance</option>
                    </select>
                </div>
                <button type="submit" name ="change_status" class="mt-1 btn btn-success btn-sm">Save</button>
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
                <h5 class="modal-title">Delete Equipment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="./backend/addequipment.php" method="post">
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
                <form action="./backend/addequipment.php" method="post" class="form rounded">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="form-group">
                            <label for="">Equipment Name:</label>
                            <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Specifications:</label>
                            <input type="text" name="specs" class="form-control"value="<?= $row['specs'] ?>" required>
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label for="">Quantity: </label>
                                <input type="number" name = "quantity" class="form-control" value="<?= $row['quantity'] ?>" required>
                            </div>
                            <div class="col">
                                <label for="">Supplier: </label>
                                <input type="text" name = "supplier" class="form-control" value="<?= $row['supplier'] ?>" required>
                            </div>
                            
                        </div>
                        <div class="row form-group">
                            <!-- <div class="col">
                                <label for="">Status: </label>
                                <select name="status" id="" class="form-control" value="<?= $row['status'] ?>" required>
                                    <option value="" selected>Select</option>
                                    <option value="working">Working</option>
                                    <option value="not working">Not working</option>
                                    <option value="under maintenance">Under maintenance</option>
                                </select>
                            </div> -->
                            <div class="col">
                                <label for="">Location: </label>
                                <input type="text" name = "location" class="form-control" value="<?= $row['location'] ?>" required>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="">Code:</label>
                            <input type="text" name="code" class="form-control" value="<?= $row['code'] ?>" required>

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
