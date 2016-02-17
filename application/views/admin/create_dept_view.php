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
						<?php  $t= $this->session->userdata('dept_id');
								if($t!=null){?>
								<div style="text_align:center"> <h1 style="color:blue"><?php echo "department No ".$t." successfully created"?> </h1></div><br>
								
								<?php $this->session->unset_userdata('dept_id'); 
									} ?>
                              

                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" 
							                      action="<?php echo site_url('admin/insert_department');?>"       
												  method="post">
							            <h2 style="text-align:center"> Add New Department</h2>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" name="dept_name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email-name">Department Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email-name" name="dept_email" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                             </form>
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