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
                                    <h2>Your Domain List</h2>
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
                                                <th>Invoice No</th>
                                                <th style="width:35%">Description </th>
                                                <th>Service</th>
                                                <th>Reg_Date </th>
                                                <th>Status</th>
                                                <th>Amount </th>
                                                <th>Bill_Status</th>
                                                <!--<th class=" no-link last"><span class="nobr">Action</span>
                                                </th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                         foreach ($services_list as $row)
                                         {
                                            ?>
                                            <tr class="even pointer">
                                                <!--<td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>-->
                                                <td class=" "><?=$row->bill_id;?></td>
                                                <td class=" "><?=$row->particulars;?></td>
                                                <td class=" "><?=$row->services;?></td>         
                                                <td class=" "><?=$row->reg_date;?><i class="success fa fa-long-arrow-up"></i>
                                                </td>
                                                <td class=" ">
                                                 <?php
                                                 if($row->status=='1'){ ?>
                                                 <span class="label label-primary">Active</span>
                                               <?php }
                                                if($row->status=='0'){ ?>
                                                <span class="label label-warning">Inactive</span>
                                                <?php } ?>
                                                </td>
                                                <td class=" "><?php echo '$'.$row->price;?></td>
                                                <td class="a-right a-right ">
                                                 <?php
                                                 if($row->bill_status=='1'){ ?>
                                                 <span class="label label-success">Paid</span>
                                               <?php }
                                                if($row->bill_status=='0'){ ?>
                                                <span class="label label-danger">Pending</span>
                                                <?php } ?>
                                        

                                                </td>
                                                <!--<td class=" last"><a href="#">View</a>
                                                </td>-->
                                                 
                                            </tr>
                                        <?php }?>
                                  
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