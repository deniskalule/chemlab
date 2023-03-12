<?php
session_start();
include("./includes/conn.php");

// if login button is clicked
if(isset($_POST['login']))
{
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];

    $select = "select * from admin";

    $result = $conn->query($select);
    
    while($row = $result->fetch_assoc())
    {
        echo $email2 = $row['email'];
        echo $pass = $row['password'];
        $id = $row['id'];
    }

    echo $x = strcasecmp($password, $pass);
    echo $y = strcasecmp($email, $email2);

    if(strcasecmp($password, $pass)==0 && strcasecmp($email, $email2)==0)
    {
        echo "success";
        $_SESSION['admin'] = $id;
    }

    else
    {
        $_SESSION['error'] = 'Incorrect username or password';
    }


}
else{
    $_SESSION['error'] = 'Input voter credentials first';
}

header('location: index.php');


?>