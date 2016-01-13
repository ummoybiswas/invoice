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
                                    <form novalidate="" id="demo-form" data-parsley-validate="">
                                        <label for="first_name">First Name :</label>
                                        <input  id="first_name" readonly="readonly" class="form-control" name="first_name" value="{first_name}" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                         <label for="last_name">Last Name :</label>
                                        <input  id="last_name" readonly="readonly" class="form-control" name="last_name" value="{last_name}" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        
                                         <label for="company_name">Company Name :</label>
                                        <input  id="company_name" readonly="readonly" class="form-control" name="company_name" value="{company_name}" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="email">Email Address :</label>
                                        <input  id="email" readonly="readonly" class="form-control" name="email" data-parsley-trigger="change" value="{email}" required="" type="email"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                       
                                        <label for="payment">Payment Method:</label>
                                        <select  id="payment" class="form-control" required="">
                                            <option value="">Choose..</option>
                                            <option value="bkash">Bank or Bkash (BD Only)</option>
                                            <option value="paypal">Paypal</option>
                                            <option value="debit">Debit or Credit</option>
                                        </select><ul id="parsley-id-0375" class="parsley-errors-list"></ul>

                                        <label for="default">Default Billing Contact:</label>
                                        <select  id="default" class="form-control" required="">
                                            <option value="default">Use Default Contact</option>
                                        </select><ul id="parsley-id-0375" class="parsley-errors-list"></ul>
                                

                                    </p>
                                    <!-- end form for validations -->
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <!-- start form for validation -->
                                   
                                        <label for="address">Address :</label>
                                        <input  id="address" readonly="readonly" value="{address}" class="form-control" name="address" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                         <label for="address2">Address 2 :</label>
                                        <input  id="address2" readonly="readonly" value="{address2}" class="form-control" name="address2" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        
                                         <label for="city">City :</label>
                                        <input  id="city" readonly="readonly" value="{city}"class="form-control" name="city" required="" type="text"><ul id="parsley-id-0979" class="parsley-errors-list"></ul>
                                        
                                        <label for="state">State/Region :</label>
                                        <input  id="state" readonly="readonly" value="{state}" class="form-control" name="state" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                       <label for="zip">Zip Code :</label>
                                        <input  id="zip" readonly="readonly" value="{post_code}" class="form-control" name="zip" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>
                                        
                                        <label for="country">Country :</label>
                                        <input  id="country" readonly="readonly" value="{country}" class="form-control" name="country" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <label for="phone">Phone No :</label>
                                        <input  id="phone" readonly="readonly" value="{phone_no}" class="form-control" name="phone" data-parsley-trigger="change" required="" type="text"><ul id="parsley-id-5214" class="parsley-errors-list"></ul>

                                        <br>
                                        <span class="btn btn-primary">Update Info</span>

                                    </p></form>
                                    <!-- end form for validations -->
                                    </div>
                                </div>
                            </div>
                        {/user_info}
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
    
    
    
    <script>

function partial_payment()
{
    var total=document.getElementById('total').innerHTML;
    var p=document.getElementById('percentage_partial_value').value;
    var partial_value=((p*total)/100);
    
    document.getElementById('partial_payment_value').value=partial_value;
}


function check() 
{
    if(document.getElementById("allow_payment").checked == true)
    {
        document.getElementById('allow_payment_box').style.display = 'block';
    }
    else{
        document.getElementById('allow_payment_box').style.display = 'none';
    }
    
}



function service_check()
{
    var e = document.getElementById("service_name");
   var service_value = e.options[e.selectedIndex].value;


   if(service_value=='Hosting' || service_value=='Domain')
    {
        document.getElementById('bill_cycle').style.display = 'block';
    }

  
    else
    {
        document.getElementById('bill_cycle').style.display = 'none';
    }
}


function service_check_1()
{

   var f = document.getElementById("service_name_1");
   var service_value_1 = f.options[f.selectedIndex].value;

    if(service_value_1=='Hosting' || service_value_1=='Domain')
    {
        document.getElementById('bill_cycle_1').style.display = 'block';
    }
    else
    {
        document.getElementById('bill_cycle_1').style.display = 'none';
    }
}

function service_check_2()
{

   var f = document.getElementById("service_name_2");
   var service_value_2 = f.options[f.selectedIndex].value;

    if(service_value_2=='Hosting' || service_value_2=='Domain')
    {
        document.getElementById('bill_cycle_2').style.display = 'block';
    }
    else
    {
        document.getElementById('bill_cycle_2').style.display = 'none';
    }
}
function service_check_3()
{

   var f = document.getElementById("service_name_3");
   var service_value_3 = f.options[f.selectedIndex].value;

    if(service_value_3=='Hosting' || service_value_3=='Domain')
    {
        document.getElementById('bill_cycle_3').style.display = 'block';
    }
    else
    {
        document.getElementById('bill_cycle_3').style.display = 'none';
    }
}

var i=1;
var arr=[];
    function add_section()
    {
        if(i==1){document.getElementById('description_1').style.display = 'block'; arr.push(i);}
        if(i==2){document.getElementById('description_2').style.display = 'block'; arr.push(i);}
        if(i==3){document.getElementById('description_3').style.display = 'block'; arr.push(i);}
        i++;
        
    }

function del_section(section)
    {
        //alert(section);
        $('#amount'+section).html('0.00');
        $('#invoice_quantity_'+section).val(1);
        $('#invoice_price_'+section).val(0);
        $('#invoice_description_'+section).val('');
        $('#invoice_additional_'+section).val('');
        document.getElementById("description_"+section).style.display = 'none';
        for(var a=0;a<arr.length;a++)
        {
            if(arr[a]==section)
            {
                for(var b=a;b<arr.length;b++)
                {
                    arr[b]=arr[b+1];
                }
            }
        }
        arr.pop();
        //alert("in delete: "+arr);
        i--;
        changesubtotal(section);
        
        
    }
function changesubtotal(id)
{
    if(id==0)
    {
        if($('#invoice_quantity').val()=="" || $('#invoice_price').val()=="")
        {
            $('#amount').html('0.00');
        }
        else
        {
            var invoice_quantity = parseFloat($('#invoice_quantity').val());
            var invoice_price = parseFloat($('#invoice_price').val());
            var amount=(invoice_quantity*invoice_price).toFixed(2);
            $('#amount').html(amount);  
        }
        
    }
    else
    {
    if( $('#invoice_quantity_'+id).val()=="" || $('#invoice_price_'+id).val()=="")
    {
        $('#amount_'+id).html('0.00');
    }
    else
    {
        var invoice_quantity = parseFloat($('#invoice_quantity_'+id).val());
        var invoice_price = parseFloat($('#invoice_price_'+id).val());
        var amount=(invoice_quantity*invoice_price).toFixed(2);
        $('#amount_'+id).html(amount);
    }
    
    }
    var sum=0;
    sum=parseFloat($('#amount').html());
    if(arr.length>0)
    {
        for(var a=0;a<arr.length;a++)
        {
            sum=sum+parseFloat($('#amount_'+arr[a]).html());
        }
    }
    $('#subtotal').html(sum.toFixed(2));
    $('#total').html(sum.toFixed(2));
    
    if($('#discount').val()!="")
    {
    var discount=((parseFloat($('#subtotal').html()))*parseFloat($('#discount').val()))/100;
    var sum=parseFloat($('#subtotal').html())-discount;
    $('#dis_count').html(discount.toFixed(2));
    $('#total').html(sum.toFixed(2));
    }
    else
    {
        $('#dis_count').html('0.00');
    }
    partial_payment();
    
}
function changetotal()
{
    if($('#discount').val()!="")
    {
    var discount=((parseFloat($('#subtotal').html()))*parseFloat($('#discount').val()))/100;
    var sum=parseFloat($('#subtotal').html())-discount;
    $('#dis_count').html(discount.toFixed(2));
    $('#total').html(sum.toFixed(2));
    }
    else
    {
        $('#dis_count').html('0.00');
        var sum=0;
        sum=parseFloat($('#amount').html());
        if(arr.length>0)
        {
            for(var a=0;a<arr.length;a++)
            {
                sum=sum+parseFloat($('#amount_'+arr[a]).html());
            }
        }
        $('#subtotal').html(sum.toFixed(2));
        $('#total').html(sum.toFixed(2));
        
    }

}
function checkFormData()
{
    var invoice_date = $('#invoice-date').val();
    var invoice_number = $('#invoice-number').val();
    var invoice_reference = $('#invoice-reference').val();
    var invoice_due = $('#invoice_due').val();
    var bill_to = $('#bill_to').val();
    var cc = $('#cc').val();
    var invoice_description = $('#invoice_description').val();
    var invoice_quantity = $('#invoice_quantity').val();
    var invoice_price = $('#invoice_price').val();
    var invoice_additional = $('#invoice_additional').val();
    if(arr.length>0)
    {
        for(var a=0;a<arr.length;a++)
        {
            var invoice_description = $('#invoice_description_'+arr[a]).val();
            var invoice_quantity = $('#invoice_quantity_'+arr[a]).val();
            var invoice_price = $('#invoice_price_'+arr[a]).val();
            var invoice_additional = $('#invoice_additional_'+arr[a]).val();
        }
    }
    else
    {
        
    }
    
    
    
}
</script>
    <!-- /datepicker -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">
 
    $('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    
</script>

</body>

</html>