<?php include 'template/head_link.php';?>


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

                    
            
        <div class="row">
                        <input type="hidden" id="invoice_id" value="<?=$invoice_id?>">
                        <div class="col-md-12">
                                          <!-- Tabs -->
                                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                                        <ul class="list-unstyled wizard_steps">
                                            <li>
                                                <a href="#step-11" >
                                                    <span class="step_no">1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-22">
                                                    <span class="step_no">2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-33">
                                                    <span class="step_no">3</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-44">
                                                    <span class="step_no">4</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div id="step-11">
											<div class="row">
                                            <?php if($partial_true==1){?>
                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel">
                                                <div class="x_title">

                                                {bill_partial_amt}
                                                    <h2>Partial Payment</h2>
                                                    <ul class="nav navbar-right panel_toolbox" style="min-width: 20px;">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>

                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px" id="price">
                                                     <h2>${partial_amount}</h2>
                                                    </div>
                                                    <div class="divider"></div>
													<div class="radio">
                                                    <label class="label1" onclick="bill_amount('partial','<?php echo $invoice_id;?>')">
                                                        <div style="position: relative;" class="iradio_flat-green checked">
                                                        <input id="partial_label" style="position: absolute; opacity: 0;" class="flat" name="iCheck" value="partial" type="radio">
                                                        <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Partial Payment
                                                    </label>
                                                </div>
                                                   {/bill_partial_amt}
                                                </div>
                                            </div>
                                        </div><?php } ?>


                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                {bill_data}
                                                    <h2>Full Payment</h2>
                                                    <ul class="nav navbar-right panel_toolbox" style="min-width: 20px;">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>

                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                      <h2>${bill_due_amount}</h2>
                                                    </div>
                                                    <div class="divider"></div>
													<div class="radio">
                                                    <label class="label2" onclick="bill_amount('full','<?php echo $invoice_id;?>')">
                                                        <div style="position: relative;" class="iradio_flat-green checked">
                                                        <input id="full_label" style="position: absolute; opacity: 0;" class="flat" name="iCheck" value="full"  type="radio">
                                                        <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Full Payment
                                                    </label>
                                                </div>
                                                   {/bill_data}
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
										</div>
                                        <div id="step-22">
                                            <h2 class="StepTitle">Step 2 Content</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>

                                         <?php if(isset($txn_id)){ ?>
                                        <div id="step-33">
                                           <br>
                                            <h2 class="StepTitle" style="text-align:center">Payment Status</h2>
                                            <p>You have successfully <?=$payment_status;?> for <?=$invoice_id;?></p>
                                            <h4>Details are given below...</h4>
                                            <p><b>Payment: </b><?=$credit;?></p>
                                            <p><b>Payment Method: </b><?=$gateway;?></p>
                                            <p><b>Payment Date: </b><?=$transaction_date_time;?></p>
                                        </div>

                                        
                                        <div id="step-44">
                                            <h2 class="StepTitle">Step 4 Content</h2>
                                            <?php //$this->parser->parse('client/view_bill_paid');?>
                                        </div>
                                        <?php } ?>
                                    </div>
 
  <hr />
  <div style="position:">
				<?php include 'template/footer.php';?>
       </div>         <!-- /footer content -->

            </div>
            <!-- /page content -->
    




    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
<!-- Footer Link-->
    
    <?php include 'template/footer_link.php';?>
    
<!-- Footer Link End-->

   
    <!-- form wizard -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/wizard/jquery.smartWizard.js"></script>
    <?php if(isset($txn_id)){ ?>
    <script>
     $(document).ready(function () {
            // Smart Wizard 
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });
            $('#wizard_verticle').smartWizard('goToStep', 3);
             $(".next").removeAttr("disabled"); 

        });
    </script>

    <?php } else { ?>
     <script type="text/javascript">
        $(document).ready(function () {
            // Smart Wizard     
           // $('#wizard').smartWizard();
            

            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                //alert('Finish Clicked');
            }
        });

        $(document).ready(function () {
            // Smart Wizard 
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });
            //$('#wizard_verticle').smartWizard('goToStep', 3);

        });
    </script>
    <?php } ?>

</body>

</html>