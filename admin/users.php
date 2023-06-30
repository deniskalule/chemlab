<?php

include('./includes/session.php');

include('./includes/header.php');

?>



<div class="main shadow">
    <!-- sidebar section -->
    <?php
        include('./includes/sidebar.php');
    ?>

    <!-- content section -->
    <div class="content bg-light">
        <!-- navbar -->
        <?php include('./includes/navbar.php') ?>
        <!-- navbar -->

        <!-- error and success message -->
        <div class="message">
            <!-- hello -->
            <?php
                if(isset($_SESSION['error'])){
                echo "
                    <div class='alert alert-danger alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Error!</h4>
                    ".$_SESSION['error']."
                    </div>
                ";
                unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                echo "
                    <div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-check'></i> Success!</h4>
                    ".$_SESSION['success']."
                    </div>
                ";
                unset($_SESSION['success']);
                }
                if(isset($_SESSION['message']))
                {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                }
            ?>
        </div>
        <!-- error and success message -->

        <!-- inner-content -->
        <div class="inner-content mt-2 p-3">
            
            <!-- buttons -->
            
            <!-- buttons -->

            <div id="" style="font-size:13px;">
                
                <div class=" tables">
                    <a href="" class="btn btn-sm btn-primary create">Create user</a>
                    <!-- organic -->
                    <section class="user-tables">
                        <div class="">
                            <!-- <div class="header">
                                <h5>Users list</h5>
                                <hr>
                            </div> -->
                            <div class="cat-btns">
                                <button id="" class='btn student btn-outline-success mr-2 mt-2 mb-2 active' style='font-size: 12px;'>Students</button>
                                <button id="" class='btn lecturer btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>Lecturers</button>
                                <button id="" class='btn chief btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>Chief Technicians</button>
                                <button id="" class='btn lab_attendant # btn-outline-success mr-2 mt-2 mb-2' style='font-size: 12px;'>Lab Technicians</button>
                            </div>

                        </div>
                        <div class="default student_show">
                            <!-- students -->
                            <table class="table bg-white m-2" id="table2">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Student Number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Supervisor</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $result = $conn->query("select * from student_table where role = 'Student'");
                                        $count = 1;
                                        while($row = $result->fetch_assoc())
                                        {
                                        
                                    ?>
                                    <tr>
                                        <td scope="row"><?= $count ?></td>
                                        <td><?= $row['lname'].' '.$row['fname'] ?></td>
                                        <td><?= $row['student_no']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['contact']; ?></td>
                                        <td><?= $row['course']; ?></td>
                                        <td><?= $row['department']; ?></td>
                                        <td><?= $row['supervisor']; ?></td>
                                        <td>
                                            <a href="#edit-user" style="font-size: 12px;" class="btn btn-sm text-primary""><i class="fas fa-edit"></i></a>
                                            <a href="#delete-user" style="font-size: 12px;" class="btn btn-sm text-danger""><i class="fas fa-trash"></i></a>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                    $count ++;
                                        
                                    }
                                    ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class="lecturer_show" style="display:none;">
                            <table class="table bg-white m-2" id="table">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Staff ID</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Employment Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $result = $conn->query("select * from staff_table where role = 'Lecturer'");
                                            while($row = $result->fetch_assoc())
                                            {
                                            
                                        ?>
                                        <tr>
                                            <td scope="row"><?= $row['id']; ?></td>
                                            <td><?= $row['lname'] .' '.$row['fname'] ?></td>
                                            <td><?= $row['staff_ID'];?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['contact']; ?></td>
                                            <td><?= $row['department']; ?></td>
                                            <td><?= $row['emp_status']; ?></td>
                                            <td>
                                                <a href="#edit-user" style="font-size: 12px;" class="btn btn-sm text-primary""><i class="fas fa-edit"></i></a>
                                                <a href="#delete-user" style="font-size: 12px;" class="btn btn-sm text-danger""><i class="fas fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="lab_attendant_show" style="display:none;">
                                <table class="table bg-white m-2" id="table">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Staff ID</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Employment Status</th>
                                            <th scope="col">Assigned Laboratory</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $result = $conn->query("select * from staff_table where role = 'Laboratory Technician'");
                                            while($row = $result->fetch_assoc())
                                            {
                                            
                                        ?>
                                        <tr>
                                            <td scope="row"><?= $row['id']; ?></td>
                                            <td><?= $row['lname'] .' '.$row['fname'] ?></td>
                                            <td><?= $row['staff_ID'];?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['contact']; ?></td>
                                            <td><?= $row['department']; ?></td>
                                            <td><?= $row['emp_status']; ?></td>
                                            <td><?= $row['assigned_lab']; ?></td>
                                            <td>
                                                <a href="#edit-user" style="font-size: 12px;" class="btn btn-sm text-primary""><i class="fas fa-edit"></i></a>
                                                <a href="#delete-user" style="font-size: 12px;" class="btn btn-sm text-danger""><i class="fas fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="chief_show" style="display:none;">
                                <table class="table bg-white m-2" id="table">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Staff ID</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Employment Status</th>
                                            <th scope="col">Assigned Laboratory</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $result = $conn->query("select * from staff_table where role = 'Chief Technician'");
                                            while($row = $result->fetch_assoc())
                                            {
                                            
                                        ?>
                                        <tr>
                                            <td scope="row"><?= $row['id']; ?></td>
                                            <td><?= $row['lname'] .' '.$row['fname'] ?></td>
                                            <td><?= $row['staff_ID'];?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['contact']; ?></td>
                                            <td><?= $row['department']; ?></td>
                                            <td><?= $row['emp_status']; ?></td>
                                            <td><?= $row['assigned_lab']; ?></td>
                                            <td>
                                                <a href="#edit-user" style="font-size: 12px;" class="btn btn-sm text-primary""><i class="fas fa-edit"></i></a>
                                                <a href="#delete-user" style="font-size: 12px;" class="btn btn-sm text-danger""><i class="fas fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Modal -->
                    <section id="create-user" style="display:none;">
                        <div class="row mt-3 p-2">
                            <!-- drop or drag file -->
                            <div class="col-lg-5">
                                <div class="drop bg-white shadow p-3 rounded">
                                    <div class="header">
                                        <h5 class="title">Create User</h5>
                                    </div>
                                    <div class="body">
                                        <div class="container-fluid">
                                            <div class="drop-file rounded" style="border:1px dotted black; height: 40vh;">
                                                <h6 class="text-center" style="color: #000a; margin: 30% 0">Drop or Drag Files Here</h6>
                                            </div>
                                            <input type="file" class="mt-2" name="file" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- form for creating user -->
                            <div class="col-lg-7">
                                <div class="form shadow p-3 rounded">
                                    <form action="backend/create_user.php" method="post" class="form p-3">
                                        <div class="form-group">
                                            <h5 class="title">Enter User Details</h5>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="">First Name: </label>
                                                <input type="text" name="fname" class="form-control" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="">Last Name: </label>
                                                <input type="text" name="lname" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="">Email: </label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="">Contact: </label>
                                                <input type="text" name="contact" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="">User Role</label>
                                          <select class="form-control" name="role" id="role" onchange="chooseRule()" required>
                                            <option value="" selected>Choose user role</option>
                                            <option value="Student">Student</option>
                                            <option value="Lecturer">Lecturer</option>
                                            <option value="Chief Technician">Chief Technician</option>
                                            <option value="Laboratory Technician">Laboratory Technician</option>
                                          </select>
                                        </div>
                                        <!-- students -->
                                        <div class="student-info" style="display:none;">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="">Course: </label>
                                                    <input type="text" name="course" class="form-control" >
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="">Student Number: </label>
                                                    <input type="text" name="stud_no" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="">Department: </label>
                                                    <input type="text" name="department1" class="form-control" >
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="">Supervisor Name: </label>
                                                    <input type="text" name="supervisor" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- staff -->
                                        <div class="staff-info" style="display:none;">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="">Staff ID: </label>
                                                    <input type="text" name="staff_id1" class="form-control" >
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="">Department: </label>
                                                    <input type="text" name="department2" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label for="">Employment status: </label>
                                                    <select class="form-control" name="emp_status2" id="" >
                                                        <option value="" selected>Choose employment status</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Contract">Contract</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- chief-technician -->
                                        <div class="chief-info" style="display:none;">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="">Staff ID: </label>
                                                    <input type="text" name="staff_id" class="form-control" >
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="">Department: </label>
                                                    <input type="text" name="department" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="">Employment status: </label>
                                                    <select class="form-control" name="emp_status" id="" >
                                                        <option value="" selected>Choose employment status</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Contract">Contract</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="">Assigned laboratory: </label>
                                                    <input type="text" name="assigned_lab" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- laboratory Technician -->
                                        <div class="technician-info" style="display:none;">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="">Staff ID: </label>
                                                    <input type="text" name="staff_id" class="form-control" >
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="">Department: </label>
                                                    <input type="text" name="department" class="form-control" >
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="">Employment status: </label>
                                                    <select class="form-control" name="emp_status" id="" >
                                                        <option value="" selected>Choose employment status</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Contract">Contract</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="">Assigned laboratory: </label>
                                                    <input type="text" name="assigned_lab" class="form-control" >
                                                </div>

                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm" name="create-user" >Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>  
            </div>  
            
            
            

        </div>
    </div>


</div>








<?php

include('./includes/footer.php');

?>
<script>
  $('#create-user').hide();
  $(document).ready(function () {
    $('.create').click(function (e) { 
        e.preventDefault();
        // alert("success");
        $('#create-user').show();
        $('.user-tables').hide();

    });
    
  });

 function chooseRule()
 {
    var role = document.getElementById("role").value;

    if(role === "Student")
    {
        $(".student-info").show();
        $(".staff-info").hide();
        $(".chief-info").hide();
        $(".technician-info").hide();
    }
    else if(role === "Lecturer")
    {
        
        $(".student-info").hide();
        $(".staff-info").show();
        $(".chief-info").hide();
        $(".technician-info").hide();
    }
    else if(role === "Chief Technician")
    {
        $(".student-info").hide();
        $(".staff-info").hide();
        $(".chief-info").show();
        $(".technician-info").hide();
    }
    else if(role === "Laboratory Technician")
    {
        $(".student-info").hide();
        $(".staff-info").hide();
        $(".chief-info").hide();
        $(".technician-info").show();
    }
    else
    {
        $(".student-info").hide();
        $(".staff-info").hide();
        $(".chief-info").hide();
        $(".technician-info").hide();
    }

 }

</script>