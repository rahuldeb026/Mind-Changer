                    <!-- start sidebar menu -->
                    <div class="col-lg-3 col-md-12 p-3 mb-2 text-white side_bars"> 

                            <p class="dsb_text text-center"></p>
							
							<?php 
							  if($_SESSION['photo']!=''){
							?>
							<img src="uploads/<?=$_SESSION['photo']?>" alt="User photo" class="rounded-circle img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">							
							<?php 
							  }else{
							?>

                            <img src="assets/img/avatar.jpg" alt="User photo" class="rounded-circle img-fluid mx-auto d-block profile-img img-thumbnail" height="85px" width="85px">
							
                            <?php 
							  }
							?>
                            
                            <h5 class="text-center dsb_sidebar_info text-dark"><?= $_SESSION['name']; ?></h5>

                            <?php
                                if($_SESSION['role_id']=='1'){
                            ?>

                            <h6 class="text-center dsb_sidebar_info text-dark">Admin</h6>

                            <?php
                                }elseif($_SESSION['role_id']=='2'){
                            ?>

                            <h6 class="text-center dsb_sidebar_info text-dark">Motivator</h6>
                            
                            
                            <?php
                                }elseif($_SESSION['role_id']=='3'){
                            ?>

                            <h6 class="text-center dsb_sidebar_info text-dark">User</h6>
                            
                            <?php
                                }
                            
                            ?>
                            
                            <nav class="navbar navbar-expand-lg navbar-light"> <!-- responsive break point -->

                                <!-- icon & target for collapse -->

                                <div class="col-xl-12">
                                    
                                    <button type="button" class="navbar-toggler bg-light" data-toggle="collapse"
                                            data-target="#menus" > <!-- target id collapse -->
                                            <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="row menu">
                                        <!-- div for collapse with target id -->

                                        <div id="menus" class="collapse navbar-collapse sidevars">
                                            <ul>
                                                <?php
                                                    if($_SESSION['role_id']=='2' || $_SESSION['role_id']=='3'){
                                                ?>
                                                <li><a href="my-profile.php" class="menul"><i class="fas fa-user-tie"></i> My Profile </a></li>
                                                <?php
                                                    }
                                                    if($_SESSION['role_id']=='1'){
                                                ?>
                                                <!-- start dropdown menu -->
                                                <li><a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Motivator </a>
                                                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                                                        <li><a href="all-motivator.php"> <i class="fas fa-users"></i> All Motivator </a></li>
                                                        <li><a href="add-motivator.php"> <i class="fas fa-user-edit"></i> Add New Motivator </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="all-contact-us.php" class="menul"><i class="fas fa-envelope"></i> Contact Us Info </a></li>
                            
                                                <!-- end dropdown menu -->
												<?php
                                                    }
                                                ?>
												<?php
													if($_SESSION['role_id']=='2' || $_SESSION['role_id']=='3'){
												?>
    
                                                <li><a href="update-my-profile.php" class="menul"><i class="fas fa-user-edit"></i> Update Profile Information </a></li>
												
                                                <?php
													}
												?>
                                                <?php
													if($_SESSION['role_id']=='2'){
												?>

                                                <li><a href="motivator-pending-requests.php" class="menul"><i class="fas fa-tasks"></i> Pending Motivation Requests </a></li>
                                                <li><a href="motivator-approved-requests.php" class="menul"><i class="fas fa-tasks"></i> Approved Motivation Requests </a></li>
                                                
                                                <?php
													}
												?>
                                                <?php
													if($_SESSION['role_id']=='3'){
												?>

                                                <li><a href="user-sent-requests.php" class="menul"><i class="fas fa-tasks"></i> Pending Sent Motivation Requests </a></li>
                                                <li><a href="user-approved-sent-requests.php" class="menul"><i class="fas fa-tasks"></i> Approved Motivation Requests </a></li>
                                                <li><a href="review.php" class="menul"><i class="fas fa-edit"></i> Review </a></li>
                                                
                                                <?php
													}
												?>

                                                <li><a href="change-password.php" class="menul"><i class="fas fa-key"></i> Change Password </a></li>
                                                
                                                <li><a href="index.php" class="menul"><i class="fas fa-globe-asia"></i> Website </a></li>
                                                
                                                <li><a href="logout.php" class="menul"><i class="fas fa-sign-out-alt"></i> Sign out </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <!-- div end collapse -->

                        </nav>
                    </div>
                    <!-- end sidebar menu -->
                    <!-- start dashboard information/content section -->
                    <div class="col-lg-9 col-md-12 p-3 mb-2 bg-light text-dark" id="dashboard_section"> 
                        <div class="scrollable">
                        <!--data/content -->