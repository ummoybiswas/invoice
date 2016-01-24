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

        <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Due Invoices</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <section class="content invoice">
                                        <!-- title row -->
                                        <div class="row">
                                            <div class="col-xs-12 invoice-header">
                                                <h1>
                                        <p style="text-align:center"><i class="fa fa-globe"></i> Invoice.</p>
                                       
                                    </h1>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- info row -->
                                        <div class="row invoice-info">
                                            <div class="col-sm-6 invoice-col">
                                                From
                                    {from_info}
                                     <address>
                                        <strong>Geeks'nTechnology Ltd</strong>
                                        <br>{address}
                                        <br>{city},{country}
                                        <br>Phone: {phone_no}
                                        <br>Email: {email}
                                    </address>
                                    {/from_info}
                                            </div>
                                            <!-- /.col -->
                                    <div class="col-sm-4 invoice-col pull-right">
                                                To
                                       {to_info}        
                                     <address>
                                        <strong>{first_name} {last_name}</strong>
                                        <br>{address}
                                        <br>{city},{country}
                                        <br>Phone: {phone_no}
                                        <br>Email: {email}
                                    </address>
                                    {/to_info} 
                                            </div>
                                            <!-- /.col -->
                                            <!--<div class="col-sm-4 invoice-col">
                                                <b>Invoice #007612</b>
                                                <br>
                                                <br>
                                                <b>Order ID:</b> 4F3S8J
                                                <br>
                                                <b>Payment Due:</b> 2/22/2014
                                                <br>
                                                <b>Account:</b> 968-34567
                                            </div>-->
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->

                                        <!-- Table row -->
                                        <div class="row">
                                            <div class="col-xs-12 table">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice No</th>
                                                            <th>Bill Date</th>
                                                            <th>Due Date</th>
                                                            <th>Tot. Amount</th>
                                                            <th>Dis. Amount</th>
                                                            <th>Bill to Pay</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead\>
                                                        <?php ?>
                                                    
                                                    <?php 
                                                    
                                                    ?>
                                                    <tbody>
                                                    <?php foreach ($invoice_info as $invoice) {?>
                                                        <tr>
                                                            <td><?=$invoice['bill_id']?></td>
                                                            <td><?=$invoice['bill_date']?></td>
                                                            <td><?=$invoice['bill_due_date']?></td>
                                                            <td><?=$invoice['bill_total_amount']?></td>
                                                            <td><?php 
                                                            if($invoice['discount_amount']==NULL){echo '0';}
                                                                 else {echo $invoice['discount_amount'];}?>
                                                            </td>
                                                            <td><?=$invoice['bill_to_paid']?></td>
                                                            <td>
                                                                <?php 
                                                            if($invoice['bill_status']=='0'){?>
                                                            <span class="label label-danger">Pending</span>
                                                            <?php }
                                                                else {
                                                                    ?>
                                                                    <span class="label label-success">Paid</span>
                                                                    <?php }?>
                                                            </td>
                                                            <td><a href="<?php echo site_url('client/view_bill_details');?>/<?=$invoice['bill_id']?>"><button  type="button" class="btn-md btn-success" style="border:none;">View</button></a></td>

                                                        </tr> 
                                                       <?php } ?>
                                                    </tbody>
                                                  
                                                </table>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->

                                       <!-- <div class="row">
                                            <!-- accepted payments column -->
                                            <!--<div class="col-xs-6">
                                                <p class="lead">Payment Methods:</p>
                                                <img src="<?php echo base_url();?>assets/images/visa.png" alt="Visa">
                                                <img src="<?php echo base_url();?>assets/images/mastercard.png" alt="Mastercard">
                                                <img src="<?php echo base_url();?>assets/images/american-express.png" alt="American Express">
                                                <img src="<?php echo base_url();?>assets/images/paypal2.png" alt="Paypal">
                                                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                                </p>
                                            </div>
                                            <!-- /.col -->
                                            <!--<div class="col-xs-6">
                                                <p class="lead">Amount Due 2/22/2014</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width:50%">Subtotal:</th>
                                                                <td><?php echo '$'.$total;?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax (9.3%)</th>
                                                                <td>$10.34</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping:</th>
                                                                <td>$5.80</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td>$265.24</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->

                                        <!-- this row will not appear when printing -->
                                       <!-- <div class="row no-print">
                                            <div class="col-xs-12">
                                                <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                                <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                                <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
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
    <script type="text/javascript">
        //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
        var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

        //generate random number for charts
        randNum = function () {
            return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
        }

        $(function () {
            var d1 = [];
            //var d2 = [];

            //here we generate data for chart
            for (var i = 0; i < 30; i++) {
                d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
                //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
            }

            var chartMinDate = d1[0][0]; //first day
            var chartMaxDate = d1[20][0]; //last day

            var tickSize = [1, "day"];
            var tformat = "%d/%m/%y";

            //graph options
            var options = {
                grid: {
                    show: true,
                    aboveData: true,
                    color: "#3f3f3f",
                    labelMargin: 10,
                    axisMargin: 0,
                    borderWidth: 0,
                    borderColor: null,
                    minBorderMargin: 5,
                    clickable: true,
                    hoverable: true,
                    autoHighlight: true,
                    mouseActiveRadius: 100
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        lineWidth: 2,
                        steps: false
                    },
                    points: {
                        show: true,
                        radius: 4.5,
                        symbol: "circle",
                        lineWidth: 3.0
                    }
                },
                legend: {
                    position: "ne",
                    margin: [0, -25],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                    labelFormatter: function (label, series) {
                        // just add some space to labes
                        return label + '&nbsp;&nbsp;';
                    },
                    width: 40,
                    height: 1
                },
                colors: chartColours,
                shadowSize: 0,
                tooltip: true, //activate tooltip
                tooltipOpts: {
                    content: "%s: %y.0",
                    xDateFormat: "%d/%m",
                    shifts: {
                        x: -30,
                        y: -50
                    },
                    defaultTheme: false
                },
                yaxis: {
                    min: 0
                },
                xaxis: {
                    mode: "time",
                    minTickSize: tickSize,
                    timeformat: tformat,
                    min: chartMinDate,
                    max: chartMaxDate
                }
            };
            var plot = $.plot($("#placeholder33x"), [{
                label: "Email Sent",
                data: d1,
                lines: {
                    fillColor: "rgba(150, 202, 89, 0.12)"
                }, //#96CA59 rgba(150, 202, 89, 0.42)
                points: {
                    fillColor: "#fff"
                }
            }], options);
        });
    </script>
    <!-- /flot -->
    <!--  -->
    <script>
        $('document').ready(function () {
            $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'bar',
                height: '125',
                barWidth: 13,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
                type: 'bar',
                height: '40',
                barWidth: 8,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
                type: 'line',
                height: '40',
                width: '200',
                lineColor: '#26B99A',
                fillColor: '#ffffff',
                lineWidth: 3,
                spotColor: '#34495E',
                minSpotColor: '#34495E'
            });

            var doughnutData = [
                {
                    value: 30,
                    color: "#455C73"
                },
                {
                    value: 30,
                    color: "#9B59B6"
                },
                {
                    value: 60,
                    color: "#BDC3C7"
                },
                {
                    value: 100,
                    color: "#26B99A"
                },
                {
                    value: 120,
                    color: "#3498DB"
                }
        ];
            var myDoughnut = new Chart(document.getElementById("canvas1i").getContext("2d")).Doughnut(doughnutData);
            var myDoughnut = new Chart(document.getElementById("canvas1i2").getContext("2d")).Doughnut(doughnutData);
            var myDoughnut = new Chart(document.getElementById("canvas1i3").getContext("2d")).Doughnut(doughnutData);
        });
    </script>
    <!-- -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->
</body>

</html>