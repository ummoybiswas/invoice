            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo base_url();?>assets/images/img.jpg" alt="">
                                    <?php  $user_name= $this->session->userdata('username');
                                    echo $user_name;?>
									
                                    <span class=" fa fa-angle-down"></span>
                                </a>
								 
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li><a href="<?php echo site_url('logout/index');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
									
                                    <span class="badge bg-green"><?=$rows; ?></span>
									
                                </a>
								
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
								<?php if($rows==0){?> 
									  <li><a href="#" No notification>No notification</a></li>
									   <?php } ?>
								{nseen_info}
                                    <li>
										 											
													
													    <a href="<?php echo site_url('client/click_notification/{ticket_id}/{ticket_answer_id}');?>">
														<button style="width:100%" class="btn  btn-xs">
															
															<span class="image"> Created On :{date_time}<br></span>
															<span class="image"> ticket_answer_id :{ticket_answer_id}<br></span>
															 <span class="image">Depaetment: {dept_name}<br></span>
															 <span class="image"> Subject : {subject}</span>
														
														</button>
														</a>
													
														 
												  
										
                                      
									 {/nseen_info}
									 <?php if($rows==5){?> 
									  <a href="<?php echo site_url('client/all_client_notitication');?>">
									  click to see more.... <?php } ?>									  
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>