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
                               

                            <form id="demo-form" data-parsley-validate="">
                               <div class="x_content">

                                    <div class="col-md-12 col-lg-12 col-sm-7">
                                        <!-- blockquote -->
                                        <blockquote>
										{ticket_details}
										   <h3>User Email: {user_email} </h3>
										   <h3>Subject :  {subject}</h3>
										   <p>Date Time : {date_time}</p>
										   <p>Message: {message}</p>
                                           <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>-->
											
										{/ticket_details}
                                        </blockquote>

                                        <blockquote class="blockquote-reverse">
										    <h3>Admin : </h3>
                                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>-->
                                        </blockquote>
                                    </div>
                                    

                                    <div class="clearfix"></div>

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