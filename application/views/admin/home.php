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
					
					<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="text-align:center"><i class="fa fa-support"></i> New Ticket Questions!</h2>
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
                                               
                                                <th>Ticket ID</th>
                                                <th>Subject </th>
                                                <th>Problem</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
												{t_info_client}
                                                <tr>
											         <td>{ticket_id}</td>
                                                     <td>{subject}</td>
                                                     <td>{message}</td>
                                                     <td>
													 <a href="<?php echo site_url('admin/answer_client/{ticket_id}');?>"><button style="" class="btn  btn-success btn-xs">
													    Answer</button>
														 
														 
													 </td>
                                                           
                                                </tr> 
                                            {/t_info_client}   
                                  
                                        </tbody>
										
                                    </table>
                                </div>
								
								
						 <!-- footer content -->
<!--                 <?php foreach ($invoice_info as $invoice) {
                    # code...
                    echo $invoice['bill_id'];
                }
                ?> -->
    <?php include 'template/footer.php';?>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

          

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
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
    
</body>

</html>