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

                    <div class="row top_tiles">
                        <a href="<?php echo site_url('client/service_list');?>"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">

                                <div class="icon"><i class="fa fa-puzzle-piece"></i>
                                </div>
                                <div class="count"><span><?php echo $total_service;?></span> | <span style="color:#1ABB9C"><?php echo $active_service;?></span> | <span style="color:#d23333"><?php echo $inactive_service;?></span></div>

                                <h3>Services</h3>
                                <p style="font-weight:bold"><span style="color:#73879C">Total</span> | <span style="color:#1ABB9C">Active</span> | <span style="color:#d23333">Inactive</span></p>
                            </div>
                        </div></a>
                        <a href="<?php echo site_url('client/domain_list');?>"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-globe"></i>
                                </div>
                                <div class="count"><span><?php echo $total_domain;?></span> | <span style="color:#1ABB9C"><?php echo $active_domain;?></span> | <span style="color:#d23333"><?php echo $inactive_domain;?></span></div>
                                <h3>Domains</h3>
                                <p style="font-weight:bold"><span style="color:#73879C">Total</span> | <span style="color:#1ABB9C">Active</span> | <span style="color:#d23333">Inactive</span></p>
                            </div>
                        </div></a>

                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count"><span><?php echo $total_hosting;?></span> | <span style="color:#1ABB9C"><?php echo $active_hosting;?></span> | <span style="color:#d23333"><?php echo $inactive_hosting;?></span></div>

                                <h3>Hosting</h3>
                                <p style="font-weight:bold"><span style="color:#73879C">Total</span> | <span style="color:#1ABB9C">Active</span> | <span style="color:#d23333">Inactive</span></p>
                            </div>
                        </div>
                        <a href="<?php echo site_url('client/my_invoice');?>"><div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-send"></i>
                                </div>
                                <div class="count"><span><?php echo $total_invoice;?></span> | <span style="color:#1ABB9C"><?php echo $active_invoice;?></span> | <span style="color:#d23333"><?php echo $inactive_invoice;?></span></div>

                                <h3>Invoices</h3>
                                <p style="font-weight:bold"><span style="color:#73879C">Total</span> | <span style="color:#1ABB9C">Paid</span> | <span style="color:#d23333">Due</span></p>
                            </div>
                        </div></a>

                    </div>

   
                              
                                

                                       

                                       
                    

                <!-- footer content -->
<!--                 <?php foreach ($invoice_info as $invoice) {
                    # code...
                    echo $invoice['bill_id'];
                }
                ?> -->
    <?php include 'template/footer.php';?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>


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
    <!-- flot -->
   
</body>

</html>