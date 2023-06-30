<?php
session_start();
include('../includes/conn.php');

if(isset($_POST['create-user']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    $password = md5("123456");

    if($role === "Student")
    {
        $course = $_POST['course'];
        $student_no = $_POST['stud_no'];
        $department = $_POST['department1'];
        $supervisor = $_POST['supervisor'];
        

        $student = $conn->query("select id from student_table where student_no = '$student_no' or email = '$email'");
        if($student->num_rows > 0)
        {
            $_SESSION['error'] = "This user already exists";
        }
        else
        {
            $insert = $conn->query("insert into student_table (fname,lname,email,contact,role,course,student_no,supervisor,department,password) 
            values('$fname','$lname','$email','$contact','$role','$course','$student_no','$supervisor','$department','$password')");

            if($insert)
            {
                $_SESSION['success'] = "User has been created";
            }
        }
    }
    else if($role === "Lecturer")
    {
        $staff_ID  = $_POST['staff_id1'];
        $department  = $_POST['department2'];
        $emp_status  = $_POST['emp_status2'];

        $staff = $conn->query("select id from staff_table where staff_ID = '$staff_ID' or email = '$email'");
        if($staff->num_rows > 0)
        {
            $_SESSION['error'] = "This user already exists";
        }
        else
        {
            echo "success";
            $insert = $conn->query("insert into staff_table (fname,lname,email,contact,role,staff_ID,department,emp_status,password) 
            values('$fname','$lname','$email','$contact','$role','$staff_ID','$department','$emp_status','$password')");

            if($insert)
            {
                echo "success";
                $_SESSION['success'] = "User has been created";
            }
            else{
                echo "failed";
            }
        }
    }

    else
    {
        $staff_ID  = $_POST['staff_id'];
        $department  = $_POST['department'];
        $emp_status  = $_POST['emp_status'];
        $assigned_lab  = $_POST['assigned_lab'];

        $staff = $conn->query("select id from staff_table where staff_ID = '$staff_ID' or email = '$email'");
        if($staff->num_rows > 0)
        {
            $_SESSION['error'] = "This user already exists";
        }
        else
        {
            $sql = $conn->query("insert into staff_table (fname,lname,email,contact,role,staff_ID,department,emp_status,assigned_lab,password) 
            values('$fname','$lname','$email','$contact','$role','$staff_ID','$department','$emp_status','$assigned_lab','$password')");

            if($sql)
            {
                $_SESSION['success'] = "User has been created";
            }
            else
            {
                echo "failed";
            }
        }

    }

    header("location: ../users.php");
}
?>