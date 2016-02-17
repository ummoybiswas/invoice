<?php 

?><?php include 'template/head_link.php';?>
<style>

</style>
<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
              
                    <!-- sidebar menu -->
                             <?php include 'template/nav.php';?>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
                  <?php include 'template/header.php';?>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="">
                   
                        <div class="x_panel">
                                <div class="x_title">

                                    <h2><i class="fa fa-support"></i> All Tickets List</h2>
                                    <ul class="nav navbar-right panel_toolbox ">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                 
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                           
                          </div>
                        <div class="container">
						 <div class="x_content">
                                             
								<div class="col-md-12 col-lg-12 col-sm-7">
								
									
										
										<blockquote>
														{user_ticket_info}
													   <h5 style="font-weight:bold"></h5>
													   <h3>{user_email}</h3>
													   <h3>{date_time}</h3>
													   <h6>{subject}</h6>
													   <p>{message}</p>
													    <?php if(!empty($user_ticket_info[0]['user_file']) || ($user_ticket_info[0]['user_file'])!=NULL) { ?>
													   <a  style="color:blue" href="<?php echo base_url();?>assets/ticket_file/{user_file}" target="_blank">attached File </a>
														<?php } ?>
													  {/user_ticket_info}
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													
										</blockquote>
													
										
								
						             <?php 
										foreach ($details_single_p_t as $value) 
										{  if( $value['reply_type']==0){
										    ?>
							 
										  
													<!-- blockquote -->
													
												<blockquote>
													
													   <h5 style="font-weight:bold"></h5>
													   <h3><?=$value['user_email'];?></h3>
													   <h3><?=$value['date_time_ans'];?></h3>
													   <h6><b>Subject:</b><?=$value['subject'];?> </h6>
													   <p><b>Message : </b><?=$value['ans_message'];?></p>
													  <?php if(!empty($value['user_file']) || ($value['user_file'])!=NULL) { ?>
													  <a  style="color:blue" href="<?php echo base_url();?>assets/ticket_file/{user_file}" target="_blank">attached File </a>
													  <?php } ?>
													  
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													
													</blockquote>
													
                                            <?php
													}
													   else{ ?>

													<blockquote class="blockquote-reverse">
													
													   <h5 style="font-weight:bold"></h5>
													   <h3>Admin</h3>
													   <h5>Date : <?=$value['date_time_ans'];?> </h5>
													   <p>Reply :<?=$value['ans_message'];?>  </p>
													   
													   
													<?php
													   }
													?>  
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													
													</blockquote>
													
                                                   
									 <?php } ?>	
									 
												</div>
											
												
							</div>

                               
								 

                        
					    </div>

				</div>
                <!-- footer content -->
    <?php include 'template/footer.php';?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->



    </div>
				

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
<!-- Footer Link-->
    <?php include 'template/footer_link.php';?>
<!-- Footer Link End-->

     
	
	
	

</body>

</html>