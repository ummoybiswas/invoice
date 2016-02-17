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
				    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 style="text-align:center"><i class="fa fa-support"></i>  All New Tickets List</h2>
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
												<a href="<?php echo site_url('admin/answer_client/'.$value["ticket_id"].'');?>" class="btn btn-success">
													   
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


    <!--  -->
	

</body>

</html>