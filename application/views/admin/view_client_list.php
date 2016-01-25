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

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-users"></i> Clients List</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                               <!-- <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>-->
                                                <!--<th>Invoice No</th>-->
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Address </th>
                                                <th>Company Name</th>
                                                <th>City</th>
                                                <th>Country</th>
                                                <th>Phone</th>
                                                
                                                <!--<th class=" no-link last"><span class="nobr">Action</span>
                                                </th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                         {client_info}
                                            <tr class="even pointer">
                                                <!--<td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                                <td class=" "><?=$row->bill_id;?></td>-->
                                                <td class=" ">{first_name} {last_name}</td>
                                                <td class=" ">{email}</td>         
                                                <td class=" ">{address}</td>
                                                <td class=" ">{company_name}</td>
                                                <td class=" ">{city}</td>
                                                <td class=" ">{country}</td>
                                                <td class=" ">{phone_no}</td>

                                            </tr>
                                         {/client_info}
                                  
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
  

                <!-- footer content -->
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
           <!-- Datatables -->
        <script src="<?php echo base_url();?>assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/tools/js/dataTables.tableTools.js"></script>
        
    
</body>

</html>