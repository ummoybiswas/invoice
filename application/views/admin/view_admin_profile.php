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
            <div class="right_col" role="main">

                <br />
                <div class="">
                    {user_info}
                        <div class="x_panel">
                                <div class="x_title">

                                    <h2><i class="fa fa-user"></i>My Details </h2>
                                    <ul class="nav navbar-right panel_toolbox ">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                 
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content ">
                                    <div class="col-md-6">
                                    
                                    <!-- start form for validation -->
                                    <form novalidate="" action="<?php echo site_url('admin/update_profile_info');?>" method="post" id="demo-form" data-parsley-validate="">
                                        <label for="first_name">First Name :</label>
                                        <input  id="first_name" readonly="readonly" class="form-control" name="first_name" value="{first_name}" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                         <label for="last_name">Last Name :</label>
                                        <input  id="last_name" readonly="readonly" class="form-control" name="last_name" value="{last_name}" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        
                                         <label for="company_name">Company Name :</label>
                                        <input  id="company_name" readonly="readonly" class="form-control" name="company_name" value="{company_name}" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="email">Email Address :</label>
                                        <input  id="email" readonly="readonly" class="form-control" name="email" data-parsley-trigger="change" value="{admin_email}" required="" type="email"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <label for="address">Address :</label>
                                        <input  id="address"  value="{address}" class="form-control" name="address" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                       
                                 <label for="address2">Address 2 :</label>
                                        <input  id="address2"  value="{address2}" class="form-control" name="address2" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>

                                    </p>
                                    <!-- end form for validations -->
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <!-- start form for validation -->
                                   

                                        
                                         <label for="city">City :</label>
                                        <input  id="city"  value="{city}"class="form-control" name="city" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="state">State/Region :</label>
                                        <input  id="state"  value="{state}" class="form-control" name="state" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                       <label for="zip">Zip Code :</label>
                                        <input  id="zip"  value="{post_code}" class="form-control" name="zip" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>
                                        
                                        <label for="country">Country :</label>
                                        <input  id="country"  value="{country}" class="form-control" name="country" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <label for="phone">Phone No :</label>
                                        <input  id="phone" value="{phone_no}" class="form-control" name="phone" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>
										
                                        <br>
                                        <button style="border:none;background:none"><span class="btn btn-primary">Update Info</span></button>

                                    </p></form>
                                    <!-- end form for validations -->
                                    </div>
                                </div>
                            </div>
                        {/user_info}

            <!-- page content -->
           
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