<?php
include("includes/connection.php");
if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $select = "select email,password from usertable where email = '$username'";
    $result = mysqli_query($connect,$select);
    
    while($row = mysqli_fetch_array($result))
    {
        $uname = $row['email'];
        $pass = $row['password'];
    }

    if(strcasecmp($uname,$username)== 0 && strcasecmp($pass,$password)== 0)
    {
        $data = "<script>alert('You have successfully logged in')</script>";
        header("location:student/index.php?data=$data");
    }
    
    else if($username = "chemadmin@kyu.ac.ug" && $password == "admin")
    {
        $data = "<script>alert('You have successfully logged in')</script>";
        header("location:admin/index.php?data=$data");
    }
}

?>