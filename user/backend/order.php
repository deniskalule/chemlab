<?php

session_start();
include("../includes/conn.php");

// chemical orders
if(isset($_POST['chem_order']))
{
    $user_id = $_POST['user_id'];
    $chem_id = $_POST['chem_id'];
    $quantity = $_POST['quantity'];

    // checking if the order is already made
    $select= $conn->query("SELECT * FROM `chemical_orders` WHERE user_id=$user_id and chemical_id=$chem_id");
    
    if($select->num_rows > 0)
    {
        $_SESSION['error'] = "The order was already made by this user";
    }
    else
    {
        // inserting the order details in the orders table
        $insert = $conn->query("insert into chemical_orders (chemical_id, user_id, quantity) values($chem_id, $user_id,$quantity)");
        if($insert)
        {
            $_SESSION['success'] = "Your order has successfully been made, Wait for the confirmation";
        }
        else
        {
            $_SESSION['error'] ="Something went wrong, try again";
        }
    }

    header("location: ../chemicals.php");

}

// apparatus orders
if(isset($_POST['app_order']))
{
    $user_id = $_POST['user_id'];
    $app_id = $_POST['app_id'];
    $quantity = $_POST['quantity'];

    // checking if the order is already made
    $select= $conn->query("SELECT * FROM `apparatus_orders` WHERE user_id=$user_id and apparatus_id=$app_id");
    
    if($select->num_rows > 0)
    {
        $_SESSION['error'] = "The order was already made by this user";
    }
    else
    {
        // inserting the order details in the orders table
        $insert = $conn->query("insert into apparatus_orders (apparatus_id, user_id, quantity) values($app_id, $user_id,$quantity)");
        if($insert)
        {
            $_SESSION['success'] = "Your order has successfully been made, Wait for the confirmation";
        }
        else
        {
            $_SESSION['error'] ="Something went wrong, try again";
        }
    }

    header("location: ../apparatus.php");

}

// equipment orders
if(isset($_POST['equip_order']))
{
    $user_id = $_POST['user_id'];
    $equip_id = $_POST['equip_id'];
    $quantity = $_POST['quantity'];

    // checking if the order is already made
    $select= $conn->query("SELECT * FROM `equipment_orders` WHERE user_id=$user_id and equipment_id=$equip_id");
    
    if($select->num_rows > 0)
    {
        $_SESSION['error'] = "The order was already made by this user";
    }
    else
    {
        // inserting the order details in the orders table
        $insert = $conn->query("insert into equipment_orders (equipment_id, user_id, quantity) values($equip_id, $user_id,$quantity)");
        if($insert)
        {
            $_SESSION['success'] = "Your order has successfully been made, Wait for the confirmation";
        }
        else
        {
            $_SESSION['error'] ="Something went wrong, try again";
        }
    }

    header("location: ../equipment.php");

}

?>