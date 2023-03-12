
<?php

include('../includes/conn.php');
if(isset($_POST['add']))
{
    echo $compound = $_POST['cname'];
    echo $amount = $_POST['camount'];
    echo $expdate = $_POST['cexp'];
    echo $location = $_POST['location'];
    echo $category = $_POST['category'];

    $query = $conn->query("select id from organic where compound = '$compound'");
    echo $query->num_rows;
    if($query->num_rows == 0)
    {
        $sql ="INSERT INTO `organic`(`compound`, `amount`, `expdate`, `location`,`category`) VALUES ('$compound','$amount','$expdate','$location','$category')";
        if($conn->query($sql)){
            echo "success";
            $_SESSION['success'] = 'Chemical added successfully';
        }
        else{
            echo "failed";
            $_SESSION['error'] = "error";
        }
    }
    else
    {
        $_SESSION['error'] = "The chemical already exists";
    }
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    echo $compound = $_POST['cname'];
    echo $amount = $_POST['camount'];
    echo $expdate = $_POST['cexp'];
    echo $location = $_POST['location'];
    echo $category = $_POST['category'];

        $sql ="update `organic`set compound = '$compound', amount = '$amount', expdate = '$expdate', location = '$location' where id='$id'";
        if($conn->query($sql)){
            echo "success";
            $_SESSION['success'] = 'Chemical updated successfully';
        }
        else{
            echo "failed";
            $_SESSION['error'] = "error";
        }
    
}
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $delete = "delete from organic where id = '$id'";
    if($conn->query($delete))
    {
        echo "success";
        $_SESSION['success'] = 'Chemical deleted successfully';
    }
}

if(isset($_POST['add_amt']))
{
    $id = $_POST['id'];
    $qty = $_POST['quantity'];

    $query = $conn->query("select amount from organic where id = $id");
    $row = $query->fetch_assoc();

    $old_amt = $row['amount'];

    $new_amt = $old_amt + $qty;

    $result = $conn->query("update organic set amount = $new_amt where id = $id");
}

header('location: ../chemicals.php');

?>