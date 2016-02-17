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
								
								 
								  <?php  $t= $this->session->userdata('ticket_id');
								if($t!=null){?>
								<div style="text_align:center"> <h1 style="color:blue"><?php echo "Ticket No ".$t." successfully sent to admin!"?> </h1></div><br>
								
								<?php $this->session->unset_userdata('ticket_id'); 
									} ?>
									<h2><i class="fa fa-support"></i> Create New Ticket  </h2>
                                    <ul class="nav navbar-right panel_toolbox ">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                 
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                            <form id="demo-form" action="<?php echo site_url('client/create_new_ticket');?>" enctype="multipart/form-data" method="post">
                               
								<div class="x_content ">
                                {user_info}
                                    <div class="col-md-6">
                                    <!-- start form for validation -->
                                   
                                        <label for="name"> Name :</label>
                                        <input  id="name"  class="form-control" name="first_name" readonly value="{first_name} {last_name}" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                       
                                         <label for="company_name">Company Name :</label>
                                        <input  id="company_name"  class="form-control" name="company_name" readonly value="{company_name}" required type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="email">Email Address :</label>
                                        <input  id="email" class="form-control" name="user_email" readonly  value="{email}" required type="email"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>
                                        
                                        
                                    <!-- end form for validations -->
                                    </div>
                                     {/user_info}
                                    <div class="col-md-6">


                                    <label for="subject_name">Subject :</label>
                                        <input  id="subject_name"  class="form-control" name="subject" value="" required 
										type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
									
                                        <label for="dept">Department:</label>
                                        <select  id="dept" class="form-control" required name="dept_id">
										{dept}
										<option value="{dept_id}">{dept_name}</option>
										{/dept}
                                        </select>
										
										
										<ul id="parsley-id-0375" class="parsley-errors-list"  ></ul>
                                    
                                        <label for="prioritys">Priority:</label>
                                        <select  id="prioritys" class="form-control" required name="priority">
                                            <option value="High">High</option>
                                            <option value="Medium" selected>Medium</option>
                                            <option value="Low">Low</option>
                                        </select><ul id="parsley-id-0375" class="parsley-errors-list"></ul>
                                    <!-- start form for validation -->
                                        <label for="message"> Message :</label>
                                        <textarea  id="message"  class="form-control" name="message"  required ></textarea><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                       
                                         
                                        <label for="attachment">Attachment : .gif, .jpg, .png, .jpeg, .pdf, .docx</label>
										
                                          <input id="input-21" type="file" name="userfile" accept="application/pdf,image/jpeg,image/gif,image/png,image/x-eps"  class="file-loading btn btn-default">
                                        
                                       <input type="submit" class="btn btn-success pull-right" value="Submit Ticket">
                                    <!-- accept="image/*"
									application/vnd.ms-excel"
									end form for validations -->
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
				

<!-- Footer Link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <?php include 'template/footer_link.php';?>
<!-- Footer Link End-->

    <!--  -->
	

	

</body>

</html>