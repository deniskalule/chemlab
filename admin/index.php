
<?php echo ($_GET['data']);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/header.css">
    <link rel="stylesheet" href="../assets/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kyu Science Lab: Portal</title>
</head>
<body>

    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-10">
                <?php
                    include("../includes/adminheader.php")
                ?>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="container content">
                    <div class="header mb-4 text-right p-3 bg-white">
                        <a href="">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span class="text-danger"><b>Log Out</b></span>
                            <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-flask" style="font-size:2rem; color: red;" aria-hidden="true"></i>
                                            
                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title">Chemicals</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                        <i class="fa fa-thermometer-half" style="font-size:2rem; color: orange;" aria-hidden="true"></i>

                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title">Apparatus</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-themeisle" style="font-size:2rem; color: green;"  aria-hidden="true"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4 class="card-title">Equipment</h4>
                                            <p class="card-text">Text</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="fa fa-user"style="font-size:2rem; color: blue;" aria-hidden="true" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-9">
                                            <h4 class="card-title">Users</h4>
                                            <hr>
                                            <p class="card-text">0 Students</p>
                                            <p class="card-text">0 Lecturers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="fa fa-themeisle" style="font-size:2rem; color: blue;" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-9">
                                            <h4 class="card-title">Orders</h4>
                                            <hr>
                                            <p class="card-text">0 Equipment</p>
                                            <p class="card-text">0 Chemicals</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <!-- <i class="fa fa-user" style="font-size:2rem; color: blue;" aria-hidden="true"></i> -->
                                            <i class="fa fa-bell" style="font-size:2rem; color: blue;" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-9">
                                            <h4 class="card-title">Issued (C)</h4>
                                            <hr>
                                            <p class="card-text">0 to Students</p>
                                            <p class="card-text">0 to Lecturers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card mb-3">
                                
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-3">
                                            <!-- <i class="fa fa-user" style="font-size:2rem; color: blue;" aria-hidden="true"></i> -->
                                            <i class="fa fa-bell" style="font-size:2rem; color: blue;" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-9">
                                            <h4 class="card-title">Issued (E)</h4>
                                            <hr>
                                            <p class="card-text">0 to Students</p>
                                            <p class="card-text">0 to Lecturers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-5 mr-3 p-3 bg-white">
                                <h5 class = "text-dark">Enquiries</h4>
                                <div class="enq-content mb-3">
                                    <!-- sample message -->
                                    <div class="message mb-3">
                                        <div class="image">
                                            <i class="fa fa-user" style="font-size:1.5rem; color: blue;" aria-hidden="true"></i>
                                            <p class = "ml-3" style = "font-size: 15px;">Sample Name</p>
                                            <hr>
                                        </div>
                                        <div class="text ml-4 ">
                                            <p style = "font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi rem est.</p>
                                        </div>
                                        <div class="actions ml-4">
                                            <i class="fa fa-reply-all" aria-hidden="true"></i>
                                            <span>Reply</span>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="message mb-3">
                                        <div class="image">
                                            <i class="fa fa-user" style="font-size:1.5rem; color: blue;" aria-hidden="true"></i>
                                            <p class = "ml-3" style = "font-size: 15px;">Sample Name</p>
                                            <hr>
                                        </div>
                                        <div class="text ml-4 ">
                                            <p style = "font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi rem est.</p>
                                        </div>
                                        <div class="actions ml-4">
                                            <i class="fa fa-reply-all" aria-hidden="true"></i>
                                            <span>Reply</span>
                                        </div>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="col-lg-1"></div> -->
                            <div class="col-lg-5 p-3 mt-3 bg-white">
                                <h5 class = "text-dark">FAQs</h4>
                                <div class="enq-content mb-3">
                                    <!-- sample message -->
                                    <div class="message mb-3">
                                        <div class="image">
                                            <i class="fa fa-user" style="font-size:1.5rem; color: blue;" aria-hidden="true"></i>
                                            <p class = "ml-3" style = "font-size: 15px;">Sample Name</p>
                                            <hr>
                                        </div>
                                        <div class="text ml-4 ">
                                            <p style = "font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi rem est.</p>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="message mb-3">
                                        <div class="image">
                                            <i class="fa fa-user" style="font-size:1.5rem; color: blue;" aria-hidden="true"></i>
                                            <p class = "ml-3" style = "font-size: 15px;">Sample Name</p>
                                            <hr>
                                        </div>
                                        <div class="text ml-4 ">
                                            <p style = "font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi rem est.</p>
                                        </div>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div> 
                    


                    
                </div>
                <?php
                include("../includes/footer.php")
                ?>
            </div>
        </div>

        
    </div>


    <script src="../assets/script.js"></script>
    <script src="../assets/side.js"></script>
</body>
</html>
