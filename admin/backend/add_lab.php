<?php
include('../includes/conn.php');
if(isset($_POST['add_lab']))
{
    echo $lab_code = $_POST['lab_code'];
    $lab_name = $_POST['lab_name'];

    $select  = $conn->query("select id from laboratory where lab_code = '$lab_code' or lab_name = '$lab_name'");

    if($select->num_rows > 0)
    {
        $_SESSION['error'] = "laboratory already added";
    }

    else
    {
        $insert = $conn->query("insert into laboratory (lab_code, lab_name) 
        values('$lab_code','$lab_name')");

        if($insert)
        {
            $_SESSION['success'] = "Laboratory added successfully";
        }
        else
        {
            $_SESSION['error'] = "Error adding Laboratory";
        }
    }
    

    header("location: ../settings.php");
}
?>