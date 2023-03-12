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

        <!-- inner-content -->
        <div class="inner-content mt-2 p-3">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- cards -->
                    <div class="card mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="display:flex;">
                                    <i class="fa fa-flask" style="font-size:2rem; color: red;" aria-hidden="true"></i>
                                    <h1 class="text-center ml-4" style=" margin-top: -6px;">0</h1>
                                </div>
                                <div class="col-8">
                                    <h4 class="card-title">Chemicals</h4>
                                    <a href="chemicals.php" class="bg-secondary text-white form-control" style = "list-style-type: none; height:40px; margin-bottom:-15px;">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="display:flex;">
                                <i class="fa fa-thermometer-half" style="font-size:2rem; color: orange;" aria-hidden="true"></i>
                                <h1 class="text-center ml-4" style=" margin-top: -6px;">0</h1>
                                </div>
                                <div class="col-8">
                                    <h4 class="card-title">Apparatus</h4>
                                    <a href="chemicals.php" class="bg-secondary text-white form-control" style = "list-style-type: none; height:40px; margin-bottom:-15px;">More Info</a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card mb-3">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="display:flex;">
                                    <i class="fa fa-themeisle" style="font-size:2rem; color: green;"  aria-hidden="true"></i>
                                    <h1 class="text-center ml-4" style=" margin-top: -6px;">0</h1>
                                </div>
                                <div class="col-8">
                                    <h4 class="card-title">Equipment</h4>
                                    <a href="chemicals.php" class="bg-secondary text-white form-control" style = "list-style-type: none; height:40px; margin-bottom:-15px;">More Info</a>

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
            
            <div class="container mt-2">
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
                    <div class="col-lg-5 p-3 bg-white">
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
    </div>


</div>









<?php

include('./includes/footer.php');

?>