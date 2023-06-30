<?php
session_start();
include("./admin/includes/conn.php");

// if login button is clicked
if(isset($_POST['login']))
{
    echo $uname = $_POST['uname'];
    echo $password = $_POST['password'];
    $password = md5($password);

    $select = "select * from student_table where email = '$uname'";
    $result = $conn->query($select);
    $sql = $conn->query("select * from staff_table where email = '$uname' and role='Lecturer'");
    

   if($result->num_rows > 0)
   {
        
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $pass = $row['password'];
        $id = $row['id'];
        $role = $row['role'];
        echo strcasecmp($password, $pass);

        if(strcasecmp($password, $pass)==0 && strcasecmp($uname, $email)==0)
        {
            $_SESSION['user'] = $id;
            $_SESSION['role'] = $role;
            
        }

        else
        {
            $_SESSION['error'] = 'Incorrect username or password';
        }

   }
   if($sql->num_rows > 0)
   {
        $lec = $sql->fetch_assoc();
        $email = $lec['email'];
        $pass = $lec['password'];
        $id = $lec['id'];
        $role = $lec['role'];
        echo strcasecmp($password, $pass);

        if(strcasecmp($password, $pass)==0 && strcasecmp($uname, $email)==0)
        {
            $_SESSION['user'] = $id;
            $_SESSION['role'] = $role;
            
        }

        else
        {
            $_SESSION['error'] = 'Incorrect username or password';
        }

   }
   else
   {
        header('location: admin/index.php');
   }
   

}
else{
    $_SESSION['error'] = 'Input admin credentials first';
}

header('location: index.php');


?>