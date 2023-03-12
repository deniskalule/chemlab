
<?php

include('../includes/conn.php');
if(isset($_POST['add']))
{
    echo $name = $_POST['name'];
    echo $qty = $_POST['quantity'];
    echo $location = $_POST['location'];

    $query = $conn->query("select id from apparatus where name = '$name'");
    echo $query->num_rows;
    if($query->num_rows == 0)
    {
        $sql ="INSERT INTO `apparatus`(`name`, `quantity`, `location`) VALUES ('$name','$qty','$location')";
        if($conn->query($sql)){
            echo "success";
            $_SESSION['success'] = 'Apparatus added successfully';
        }
        else{
            echo "failed";
            $_SESSION['error'] = "error";
        }
    }
    else
    {
        $_SESSION['error'] = "The apparatus already exists";
    }
}


if(isset($_POST['update']))
{
    $id = $_POST['id'];
    echo $name = $_POST['name'];
    echo $quantity = $_POST['quantity'];
    echo $location = $_POST['location'];

        $sql ="update `apparatus` set name = '$name', quantity = '$quantity', location = '$location' where id='$id'";
        if($conn->query($sql)){
            echo "success";
            $_SESSION['success'] = 'Apparatus updated successfully';
        }
        else{
            echo "failed";
            $_SESSION['error'] = "error";
        }
    
}
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $delete = "delete from apparatus where id = '$id'";
    if($conn->query($delete))
    {
        echo "success";
        $_SESSION['success'] = 'Apparatus deleted successfully';
    }
}

if(isset($_POST['add_amt']))
{
    $id = $_POST['id'];
    $qty = $_POST['quantity'];

    $query = $conn->query("select quantity from apparatus where id = $id");
    $row = $query->fetch_assoc();

    $old_amt = $row['quantity'];

    $new_amt = $old_amt + $qty;

    $result = $conn->query("update apparatus set quantity = $new_amt where id = $id");
}

header('location: ../apparatus.php');

?>
