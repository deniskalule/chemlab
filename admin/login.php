<?php
session_start();
include("./includes/conn.php");

// if login button is clicked
if(isset($_POST['login']))
{
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];
    $password = md5($password);

    $select = "select * from admin";
    $result = $conn->query($select);
    
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $email2 = $row['email'];
            $pass = $row['password'];
            $id = $row['id'];
        }

        // echo $x = strcasecmp($password, $pass);
        // echo $y = strcasecmp($email, $email2);

        if(strcasecmp($password, $pass)==0 && strcasecmp($email, $email2)==0)
        {
            $_SESSION['admin'] = $id;
            $_SESSION['role'] = "admin";
        }

        else
        {
            $_SESSION['error'] = 'Incorrect username or password';
        }
    }

    $sql = $conn->query("select * from staff_table where email = '$email'");
    if($sql->num_rows > 0)
    {
        $staff = $sql->fetch_assoc();
        $email2 = $staff['email'];
        $pass = $staff['password'];
        $id = $staff['id'];
        echo $role = $staff['role'];
        if(strcasecmp($password, $pass)==0 && strcasecmp($email, $email2)==0)
        {
            $_SESSION['admin'] = $id;
            echo $_SESSION['role'] = $role;
        }

        else
        {
            $_SESSION['error'] = 'Incorrect username or password';
        }
    }


}
else{
    $_SESSION['error'] = 'Input admin credentials first';
}

if(!headers_sent())
{
    header("location: index.php");
}
else
{
    header("location: index.php");
}


?>