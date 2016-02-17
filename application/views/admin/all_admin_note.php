<?php include 'template/head_link.php';?>
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

                            
                                <div class="x_content ">
                                <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width:10%">Ticket No</th>
                                                <th style="width:20%">Ticket Subject</th>
                                                
                                                <th>Ticket Created</th>
                                                <th>Status</th>
                                                <th >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										foreach ($all_new_t as $value) 
										{ ?>
                                            <tr>
                                                <td><?=$value['ticket_id'];?></td>
                                                <td>
                                                    <a><?=$value['subject'];?></a>
                                                
                                                </td>
                                                
                                                <td class="project_progress">
                                                    <!--<div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="11"></div>
                                                    </div>
                                                    <small>11% Complete</small>-->
                                                    <?=$value['date_time'];?>
                                                </td>
                                                <td>
                                                    
													
													<?php 
													
													   if($value['status']==0){
														   ?>
														  <button type="button" class="btn btn-warning btn-xs">Not Answered
													</button>
													<?php
													}
													   else{ ?>
													   <a class="btn btn-success"" >Answered </a>
													
													<?php
													   }
													?>
													
                                                </td>
												
												<td>
												<a href="<?php echo site_url('client/click_view/'.$value["ticket_id"].'');?>" class="btn btn-success">
													   
														    View/Reply</a>
													
														 
												</td>
												
                                            </tr>
										<?php } ?>
                                            </tbody>
                                        </table>
                                    
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

    <!--  -->
	

</body>

</html>