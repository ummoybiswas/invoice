            <div class="top_nav">
			  <!--<li>  admin header   </li>-->

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo base_url();?>assets/profile_picture/<?php echo $get_pic[0]['profile_picture'];?>" alt="picture">
                                    <?php  $user_name= $this->session->userdata('username');
                                    echo $user_name;?>
									
                                    <span class=" fa fa-angle-down"></span>
                                </a>
								 
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="<?php echo site_url('admin/myprofile');?>">  Profile</a></li>
									<li><a data-toggle="modal" data-target="#myModal_img_change">Change Profile Picture</a></li>
                                    <li><a href="<?php echo site_url('logout/index');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
									
                                    <span class="badge bg-green"><?=$roww; ?></span>
									
                                </a>
								
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
								
								<?php if($roww==0){?> 
									  <li><a href="#" No notification>No notification</a></li>
									   <?php } ?>	
								
								{new_tickets}
                                    <li>
									
									             
									
										 											
													
													<a href="<?php echo site_url('admin/admin_click_notification/{ticket_id}');?>">  
														<button style="width:100%" class="btn  btn-xs">
															
															<span class="image"> Created On :{date_time}<br></span>
															<span class="image"> ticket_id :{ticket_id}<br></span>
															 <span class="image">Depaetment: {dept_name}<br></span>
															 <span class="image"> Subject : {subject}</span>
														
														</button>
												  </a>
													
														 
												  
										
                                      
								{/new_tickets}
								<?php if($roww==5){?> 
									  <a href="<?php echo site_url('admin/all_admin_notetfication');?>">
									  click to see more.... <?php } ?>									  
                                    </li>
								
                                   
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>





<div class="modal fade" id="myModal_img_change" role="dialog">

				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content" style="padding:20px">
				       
				     <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/change_profile_image');?>/<?=$get_pic[0]['profile_picture'];?>" style="padding:15px;margin-top:2%">
	                   		       
							 <input type="text" class="form-control"  name="name" style="display:none" value="<?php echo $get_pic[0]['profile_picture'];?>">
						    <div class="form-group">
						      <label for="pwd">Current Shop Image:</label>
						       <span><img style="height:85px;width:100px>" src="<?php echo base_url();?>assets/profile_picture/<?php echo $get_pic[0]['profile_picture'];?>" style="height:100%"/></span>  
						    	
						    </div>
                            <div class="form-group">
						      <label for="sold">New Image:(max-width:1024,max-height:780,max-weight:2 MB)</label>
						        <input id="input-21" type="file" name="userfile" required accept="image/*" class="file-loading btn btn-default">
						    </div>

                                                    
						    <div class="">
						    	<button type="submit" name="addShop" class="btn btn-success">Submit</button>
					</form>
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
						
				      </div>
				      
				    </div>

				    
</div>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
           <form action="<?php echo site_url('admin/change_password')?>" method="post" style="padding:20px;">
            <div class="form-group">
              <label for="pwd">New Password:</label>
              <input type="password" class="form-control" placeholder="minimum 6 char" name="pas_wrd" id="pwd" required>
            </div>
            <div class="form-group">
              <label for="con_pwd">Confirm Password:</label>
              <input type="password" class="form-control" name="con_pas_wrd" id="con_pwd" required>
            </div>
            <input type="submit" name="update" class="btn btn-success"value="Update">
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>