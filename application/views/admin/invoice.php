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
				<form>	
                    <div class="row top_tiles">
                        <div class="col-md-6"><h2>Create Invoice</h2></div>
						 <div class="col-md-6 pull-right">
								<div class="form-group ">
									<label for="dtp_input2" class="col-md-6 control-label " style="text-align:right">Invoice Date</label>

									<div style="cursor: pointer" class="input-group date form_date col-md-6 pull-right" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="form-control" size="16" type="text" id="invoice_date" value="" >
										<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
									<input type="hidden" id="dtp_input2" value="" /><br/>
								</div>
							</div>
                    </div>

                    <div class="row">
                       				 <div class="col-md-4">
					<div class="col-md-12"><img src="<?php echo base_url();?>assets/img/logo.png" alt="logo" /></div>
					
				 </div>
				 
				  <div class="col-md-6 pull-right">
					<div class="col-md-8 pull-right">


						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Invoice Number</span>
<<<<<<< HEAD
						  <input type="text" class="form-control"  placeholder="Invoice Number" id="invoice_number" aria-describedby="basic-addon1" value="INV-<?php echo $invoice_no[0]['invoice_no']; ?>">
=======
						  <input type="text" class="form-control" readonly="readonly" placeholder="Invoice Number" id="invoice_number" aria-describedby="basic-addon1">
>>>>>>> 7aaaf1efc4abfc68760f870a3d09ad5db162c9da
						</div>
					</div>
					<br>
					

		            <div class="col-md-8 pull-right" style="margin-top:10px;">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Reference</span>
						  <input  type="text" class="form-control" required id="invoice_reference" placeholder="Such as PO#" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-md-8 pull-right" style="margin-top:10px;">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Due Date</span>
						   <div class="dropdown">
						    <select required class="form-control" id="invoice_due">
								  <option value="0">Due on receipt</option>
								  <option value="10">Due 10 days</option>
								  <option value="15">Due 15 days</option>
								  <option value="20">Due 20 days</option>
								  <option value="25">Due 25 days</option>
								  <option value="30">Due 30 days</option>
								  <option value="60">Due 60 days</option>
								</select>
						</div>
					</div>
                 </div>
	  			</div>
                    </div>


					<div class="row"><div class="col-md-6"><h3>My Business Information</h3></div></div><hr>

                    <div class="row">
						<div class="col-md-6">
		  			    <div class="form-group">
					      <label for="bill">Bill to:</label>
					      <input  type="email" required placeholder="Email address" class="form-control" id="bill_to">
					    </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="cc">CC:</label>
							  <input  type="email" placeholder="Email address" class="form-control" id="cc">
							</div>
						</div>
                    </div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-3">
								<h3>Customize</h3>
							</div>
						</div>
					 </div>

					 
					 
					 
					 
					 
					 <div class="row">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="descrip" style="float:left;width:300px;">
						<input required  id="invoice_description" style="" type="text" placeholder="Description" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input required id="invoice_quantity" style="width: 144px;margin-right: 32px" onchange="changesubtotal(0)" type="number" value="1" placeholder="Quantity" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_price" style="width: 144px;margin-left:-30px;" onchange="changesubtotal(0)" value="0" type="number" placeholder="Price" class="form-control" >
			 		</div>
			 		<select required name="" class="form-control" id="service_name" style="float:left;width:119px;height: 32px;margin-right: 7px;" onchange="service_check()">
			 			<option value="">Services</option>
			 			<option value="Hosting">Hosting</option>
			 			<option value="Domain">Domain</option>
			 			<option value="Development">Development</option>
			 		</select>
			 		<select required name="" class="form-control" id="bill_cycle" style="float:left;width:119px;height: 32px;display:none">
			 			<option value="">Cycle</option>
			 			<option value="Monthly">Monthly</option>
			 			<option value="Yearly">Yearly</option>
			 		</select>		 		
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="add_des">
						<textarea required class="form-control" style=" resize: none" id="invoice_additional"placeholder="Additional Description (optional)" rows="2" ></textarea>
					</div>					
				</div>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pri_cunt">
				<p class="amount" style="color:#286090;font-weight: bold;margin-top: 60px;">$<span id="amount">0.00</span></p>
			</div>
		</div>

	</div>

<!-- my Invoice body -->


<!---------- INVOICE BODY-->

<br>

<!---------- NEW DESCRIOPTION Section-->
					<div class="row" id='description_1' style="display:none;margin-top:10px;margin-bottom:10px; ">
				 	<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="descrip" style="float:left;width:300px;">
						<input   id="invoice_description_1" style="" type="text" placeholder="Description" class="form-control">
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_quantity_1" style="width: 144px;margin-right: 32px" onchange="changesubtotal(1)" type="number" value="1" placeholder="Quantity" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_price_1" style="width: 144px;margin-left:-30px;" onchange="changesubtotal(1)" value="0" type="number" placeholder="Price" class="form-control" >
			 		</div>
			 		<select name="" class="form-control" id="service_name_1" style="float:left;width:119px;height: 32px;margin-right: 7px;" onchange="service_check_1()">
			 			<option value="">Services</option>
			 			<option value="Hosting">Hosting</option>
			 			<option value="Domain">Domain</option>
			 			<option value="Development">Development</option>
			 		</select>
			 		<select name="" class="form-control" id="bill_cycle_1" style="float:left;width:119px;height: 32px;display:none">
			 			<option value="">Cycle</option>
			 			<option value="Monthly">Monthly</option>
			 			<option value="Yearly">Yearly</option>
			 		</select>			 		
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="add_des">
						<textarea class="form-control" style=" resize: none" id="invoice_additional_1" placeholder="Additional Description (optional)" rows="2" ></textarea>
					</div>					
				</div>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pri_cunt">
				<p class="amount" style="color:#286090;font-weight: bold;margin-top: 60px">$<span id="amount_1">0.00</span></p>
			</div>
		</div>
		<div class="col-md-1" >
			<div class="pri_cunt" >
				<button  type="button"value='1' style="margin-top:70%;background:none;border:none" onclick="del_section(this.value)">
				
				  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="float: left;  border:1px solid #44b8fb;height: 30px;width: 30px;border-radius: 70px; text-align: center;padding-top:7px;color: red"></span>
				</button>
			</div>
		</div>
				 </div>
		
				
				
			<div class="row" id='description_2' style="display:none;margin-top:10px;margin-bottom:10px;">
				 	<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="descrip" style="float:left;width:300px;">
						<input  id="invoice_description_2" style="" type="text" placeholder="Description" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_quantity_2" style="width: 144px;margin-right: 32px" onchange="changesubtotal(2)" type="number" value="1" placeholder="Quantity" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_price_2" style="width: 144px;margin-left:-30px;" onchange="changesubtotal(2)" value="0" type="number" placeholder="Price" class="form-control" >
			 		</div>
			 		<select name="" class="form-control" id="service_name_2" style="float:left;width:119px;height: 32px;margin-right: 7px;" onchange="service_check_2()">
			 			<option value="">Services</option>
			 			<option value="Hosting">Hosting</option>
			 			<option value="Domain">Domain</option>
			 			<option value="Development">Development</option>
			 		</select>
			 		<select name="" class="form-control" id="bill_cycle_2" style="float:left;width:119px;height: 32px;display:none">
			 			<option value="">Cycle</option>
			 			<option value="Monthly">Monthly</option>
			 			<option value="Yearly">Yearly</option>
			 		</select>		 		
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="add_des">
						<textarea class="form-control" style=" resize: none" id="invoice_additional_2"placeholder="Additional Description (optional)" rows="2" ></textarea>
					</div>					
				</div>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pri_cunt">
				<p class="amount" style="color:#286090;font-weight: bold;margin-top: 60px">$<span id="amount_2">0.00</span></p>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pri_cunt">
				<button  type="button"value='2' style="margin-top:70%;background:none;border:none" onclick="del_section(this.value)">
				
				  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="float: left;  border:1px solid #44b8fb;height: 30px;width: 30px;border-radius: 70px; text-align: center;padding-top:7px;color: red"></span>
				</button>
			</div>
		</div>
				 </div>

				 
				 
				 
				 				<div class="row" id='description_3' style="display:none;margin-top:10px;margin-bottom:10px;">
						


				<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div class="descrip" style="float:left;width:300px;">
						<input  id="invoice_description_3" style="" type="text" placeholder="Description" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_quantity_3" style="width: 144px;margin-right: 32px" onchange="changesubtotal(3)" type="number" value="1" placeholder="Quantity" class="form-control" >
			 		</div>
			 		<div class="price" style="float:left;">
			 			<input  id="invoice_price_3" style="width: 144px;margin-left:-30px;" onchange="changesubtotal(3)" value="0" type="number" placeholder="Price" class="form-control" >
			 		</div>
			 		<select name="" class="form-control" id="service_name_3" style="float:left;width:119px;height: 32px;margin-right: 7px;" onchange="service_check_3()">
			 			<option value="">Services</option>
			 			<option value="Hosting">Hosting</option>
			 			<option value="Domain">Domain</option>
			 			<option value="Development">Development</option>
			 		</select>
			 		<select name="" class="form-control" id="bill_cycle_3" style="float:left;width:119px;height: 32px;display:none">
			 			<option value="">Cycle</option>
			 			<option value="Monthly">Monthly</option>
			 			<option value="Yearly">Yearly</option>
			 		</select>			 		
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="add_des">
						<textarea class="form-control" style=" resize: none" id="invoice_additional_3"placeholder="Additional Description (optional)" rows="2" ></textarea>
					</div>					
				</div>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pri_cunt">
				<p class="amount" style="color:#286090;font-weight: bold;margin-top: 60px">$<span id="amount_3">0.00</span></p>
			</div>
		</div>
		<div class="col-md-1">
			<div class="pri_cunt">
				<button  type="button"value='3' style="margin-top:70%;background:none;border:none" onclick="del_section(this.value)">
				
				  <span class="glyphicon glyphicon-remove" aria-hidden="true" style="float: left;  border:1px solid #44b8fb;height: 30px;width: 30px;border-radius: 70px; text-align: center;padding-top:7px;color: red"></span>
				</button>
			</div>
		</div>
				 </div>
				 
				 
				 
				 <!---------- NEW DESCRIOPTION Section END-->
<!---------- INVOICE BODY END-->

				<div class="row">
					<div class="col-md-2">
 						<button type="button" class="btn btn-primary" onclick="add_section()"><span class="glyphicon glyphicon-plus-sign"></span> Add Row</button>
 					</div>
					<div class="col-md-5 pull-right">

						<table class="table">

						    <tbody>
						      <tr class="success">
						        <td></td>
						        <td>Subtotal</td>
						        <td>$<span id="subtotal">0.00</span></td>
						      </tr>
						      <tr class="danger">
						        <td style="width:30%">Discount</td>
						        <td style="width:30%"><input onchange="changetotal()" id="discount" placeholder="%"style="width:60%" type="text" class="form-control"></td>
						        <td>$<span id="dis_count">0.00</span></td>
						      </tr>
						      <tr class="info">
						        <td></td>
						        <td>Total</td>
						        <td>$<span  id="total" style="font-weight: bold;
font-size: 15px;">0.00</span></td>
						      </tr>
						    </tbody>
						  </table>
						<div class="checkbox">
						    <label><input type="checkbox" onclick="check()" id="allow_payment">Allow Partial Payment</label>
						</div> 


						<div id="allow_payment_box" style="display:none">
						    <input id="percentage_partial_value" onchange="partial_payment()" style="width:50%;" type="number"  placeholder="Percentage(%) of total Money" class="form-control" >
						    <br>
						    <b>Current Payment: $</b><span  style="font-size:20px;color:#2876B6;"><input type="text" style="border:none;" id="partial_payment_value"></span><br>
						</div> 
						
					</div> 
				  </div>
 <br>
				 <div class="row">
				 	<div class="col-md-6">
		  			    <div class="form-group">
					      <label for="usr">Note to recipient</label>
					      <textarea class="form-control" rows="5" style="resize:none" id="note_recipient"></textarea>
					    </div>
				    </div>
				    <div class="col-md-6">
		  			    <div class="form-group">
					      <label for="usr">Terms and Condition</label>
					      <textarea class="form-control" rows="5" style="resize:none" id="term_condition"></textarea>
					    </div>
				    </div>
				 </div>


				<div class="row">
				 	<div class="col-md-6">
					   <div style="position:relative;">
						<a class='btn btn-primary' href='javascript:;'>
							Choose File...
							<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
							</a>
							&nbsp;
							<span class='label label-info' id="upload-file-info"></span>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
				 	<div class="col-md-2 pull-right">
						<button type="button" class="btn btn-primary">Preview</button>
						<button type="submit" onclick="checkFormData()" class="btn btn-success">Send</button>
					</div>
				</div>
             <!-- /. PAGE INNER  -->
			 </form>
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
	
	
	
	<script>

function partial_payment()
{
	var total=document.getElementById('total').innerHTML;
	var p=document.getElementById('percentage_partial_value').value;
	var partial_value=((p*total)/100).toFixed(2);
	
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
	var p=document.getElementById('percentage_partial_value').value;
	if(p!="")
	{
		var total=document.getElementById('total').innerHTML;
		var partial_value=((p*total)/100).toFixed(2);
		document.getElementById('partial_payment_value').value=partial_value;
	}
	
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
	var p=document.getElementById('percentage_partial_value').value;
	if(p!="")
	{
		var total=parseFloat(document.getElementById('total').innerHTML);
		var partial_value=((p*total)/100).toFixed(2);
		document.getElementById('partial_payment_value').value=partial_value;
	}
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