
<?php

include('../includes/conn.php');
if(isset($_POST['add']))
{
    echo $name = $_POST['name'];
    echo $specs = $_POST['specs'];
    echo $supplier = $_POST['supplier'];
    echo $location = $_POST['location'];
    echo $quantity = $_POST['quantity'];
    echo $status = $_POST['status'];
    echo $code = $_POST['code'];

    $query = $conn->query("select id from organic where compound = '$compound'");
    echo $query->num_rows;
    if($query->num_rows == 0)
    {
        $sql ="INSERT INTO `equipment`(`name`, `specs`, `supplier`, `quantity`,`status`,`location`,`code`) VALUES ('$name','$specs','$supplier','$quantity','$status','$location','$code')";
        if($conn->query($sql)){
            echo "success";
            $_SESSION['success'] = 'Equipment added successfully';
        }
        else{
            echo "failed";
            $_SESSION['error'] = "error";
        }
    }
    else
    {
        $_SESSION['error'] = "The equipment already exists";
    }
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    echo $name = $_POST['name'];
    echo $specs = $_POST['specs'];
    echo $supplier = $_POST['supplier'];
    echo $location = $_POST['location'];
    echo $quantity = $_POST['quantity'];
    echo $status = $_POST['status'];
    echo $code = $_POST['code'];

        $sql ="update `equipment` set name = '$name', specs = '$specs', supplier = '$supplier',location = '$location', quantity = '$quantity', code = '$code' where id='$id'";
        if($conn->query($sql)){
            echo "success";
            $_SESSION['success'] = 'Equipment updated successfully';
        }
        else{
            echo "failed";
            $_SESSION['error'] = "error";
        }
    
}
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $delete = "delete from equipment where id = '$id'";
    if($conn->query($delete))
    {
        echo "success";
        $_SESSION['success'] = 'Equipment deleted successfully';
    }
}

if(isset($_POST['add_amt']))
{
    $id = $_POST['id'];
    $qty = $_POST['quantity'];

    $query = $conn->query("select quantity from equipment where id = $id");
    $row = $query->fetch_assoc();

    $old_amt = $row['quantity'];

    $new_amt = $old_amt + $qty;

    $result = $conn->query("update equipment set quantity = $new_amt where id = $id");
}

if(isset($_POST['change_status']))
{
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = $conn->query("update equipment set status='$status' where id =$id");

}

header('location: ../equipment.php');

?>