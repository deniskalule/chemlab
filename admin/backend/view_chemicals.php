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
                                <input type="hidden" name="">
                                <div class="form-group">
                                    <label for="">Compound Name:</label>
                                    <input type="text" name="cname" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="">Amount in grams: </label>
                                        <input type="number" name = "camount" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="">Expiry date:</label>
                                        <input type="date" name="cexp" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="text" name="location" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <input type="text" name="category" class="form-control">
                                    
                                </div>
                                <button class="btn-primary form-control" name = "add">Add</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>

<?php
    
}
    

}

?>
