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
            $name = $row['name'];
        }

        // echo $x = strcasecmp($password, $pass);
        // echo $y = strcasecmp($email, $email2);

        if(strcasecmp($password, $pass)==0 && strcasecmp($email, $email2)==0)
        {
            $action = "Logged In";
            $role = "admin";
            $_SESSION['admin'] = $id;
            $_SESSION['role'] = $role;

            $insert = $conn->query("insert into logs (user_id, name,role, action )
            values('$id', '$name', '$role','$action')");
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
        $urole = $staff['role'];
        $uname = $staff['lname'].' '.$staff['fname'];

        if(strcasecmp($password, $pass)==0 && strcasecmp($email, $email2)==0)
        {
            $uaction= "Logged In";
            $_SESSION['admin'] = $id;
            $_SESSION['role'] = $role;

            $insert = $conn->query("insert into logs (user_id, name,role, action )
            values('$id', '$uname', '$urole','$uaction')");
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