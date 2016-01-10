<?php $this->load->view('admin/template/header');?>
<body>
    <?php $this->load->view('admin/template/header-nav');?>
       
	<?php $this->load->view('admin/template/nav');?>
        <div id="page-wrapper" >
            <div id="page-inner">
			<form>	
			<div class="row">
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
			  <hr />
			   <div class="row">
				 <div class="col-md-4">
					<div class="col-md-12"><img src="<?php echo base_url();?>assets/img/logo.png" alt="logo" /></div>
					
				 </div>
				 
				  <div class="col-md-6 pull-right">
					<div class="col-md-8 pull-right">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Invoice Number</span>
						  <input type="text" class="form-control"  placeholder="Invoice Number" id="invoice_number" aria-describedby="basic-addon1">
						</div>
					</div>
					<br>
					

		            <div class="col-md-8 pull-right" style="margin-top:10px;">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Reference</span>
						  <input  type="text" class="form-control" id="invoice_reference" placeholder="Such as PO#" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-md-8 pull-right" style="margin-top:10px;">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">Due Date</span>
						   <div class="dropdown">
						    <select class="form-control" id="invoice_due">
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
					      <input  type="email" placeholder="Email address" class="form-control" id="bill_to">
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
				 <hr>


<!---------- INVOICE BODY-->


				 <div class="row" style="border: 2px solid #ddd; border-left: 3px solid #029ACC;">
				 	<div class="col-md-12" style="">
						<div class="col-md-6">
							<input  id="invoice_description" style="border-bottom: none; border:none" type="text" placeholder="Description" class="form-control" id="description">
				 		</div>
				 		<div class="col-md-2">
				 			<input  id="invoice_quantity" style="border: none;" onchange="changesubtotal(0)" type="number" value="1" placeholder="Quantity" class="form-control" id="quantity">
				 		</div>
				 		<div class="col-md-2">
				 			<input  id="invoice_price" style="border: none;margin-left:-30px;" onchange="changesubtotal(0)" value="0" type="number" placeholder="Price" class="form-control" id="quantity">
				 		</div>
				 	</div>
					<div class="col-md-12" style="">
						<div class="col-md-10">
							<textarea class="form-control" style="border: none;" id="invoice_additional"placeholder="Additional Description (optional)" rows="3" style="resize:none" id="invoice_body"></textarea>
							
						</div>
						<div class="col-md-2">
							<p class="amount" style="text-align:center;color:#286090;font-weight: bold;margin-top:-20px; padding-left:28px;">$<span id="amount">0.00</span></p>			
						</div>					
					</div>
				 </div>
<br>

<!---------- NEW DESCRIOPTION Section-->
					<div class="row" id='description_1' style="display:none;margin-top:10px;margin-bottom:10px;border: 2px solid #ddd; border-left: 3px solid #029ACC;">
				 	<div class="col-md-12" style="">
						<div class="col-md-6">
							<input style="border-bottom: none; border:none" id="invoice_description_1" type="text" placeholder="Description" class="form-control" id="description">
				 		</div>
				 		<div class="col-md-2">
				 			<input style="border: none;" id="invoice_quantity_1" onchange="changesubtotal(1)" type="number" value="1" placeholder="Quantity" class="form-control" id="quantity">
				 		</div>
				 		<div class="col-md-2">
				 			<input style="border: none;margin-left:-30px;" onchange="changesubtotal(1)" id="invoice_price_1" value="0" type="number" placeholder="Price" class="form-control" id="quantity">
				 		</div>
						<div class="col-md-2">
				 			<button type="button" class="btn btn-danger" value='1' onclick="del_section(this.value)"><span class="	glyphicon glyphicon-remove-circle"></span> Delete Row</button>
				 		</div>
				 	</div>
					<div class="col-md-12" style="">
						<div class="col-md-10">
							<textarea class="form-control" style="border: none;" id="invoice_additional_1" placeholder="Additional Description (optional)" rows="3" style="resize:none" id="invoice_body"></textarea>
							
						</div>
						<div class="col-md-2">
							<p class="amount" style="text-align:center;color:#286090;font-weight: bold;margin-top:-20px; padding-left:28px;">$<span id="amount_1">0.00</span></p>			
						</div>					
					</div>
				 </div>
				
				
				
				
			<div class="row" id='description_2' style="display:none;margin-top:10px;margin-bottom:10px;border: 2px solid #ddd; border-left: 3px solid #029ACC;">
				 	<div class="col-md-12" style="">
						<div class="col-md-6">
							<input style="border-bottom: none; border:none" id="invoice_description_2" type="text" placeholder="Description" class="form-control" id="description">
				 		</div>
				 		<div class="col-md-2">
				 			<input style="border: none;" id="invoice_quantity_2" onchange="changesubtotal(2)" type="number" value="1" placeholder="Quantity" class="form-control" id="quantity">
				 		</div>
				 		<div class="col-md-2">
				 			<input style="border: none;margin-left:-30px;" id="invoice_price_2" onchange="changesubtotal(2)" value="0" type="number" placeholder="Price" class="form-control" id="quantity">
				 		</div>
						<div class="col-md-2">
				 			<button type="button" class="btn btn-danger" value='2' onclick="del_section(this.value)"><span class="	glyphicon glyphicon-remove-circle"></span> Delete Row</button>
				 		</div>
				 	</div>
					<div class="col-md-12" style="">
						<div class="col-md-10">
							<textarea class="form-control" style="border: none;" id="invoice_additional_2" placeholder="Additional Description (optional)" rows="3" style="resize:none" id="invoice_body"></textarea>
							
						</div>
						<div class="col-md-2">
							<p class="amount" style="text-align:center;color:#286090;font-weight: bold;margin-top:-20px; padding-left:28px;">$<span id="amount_2">0.00</span></p>			
						</div>					
					</div>
				 </div>


				<div class="row" id='description_3' style="display:none;margin-top:10px;margin-bottom:10px;border: 2px solid #ddd; border-left: 3px solid #029ACC;">
				 	<div class="col-md-12" style="">
						<div class="col-md-6">
							<input style="border-bottom: none; border:none" id="invoice_description_3" type="text" placeholder="Description" class="form-control" id="description">
				 		</div>
				 		<div class="col-md-2">
				 			<input style="border: none;" id="invoice_quantity_3" onchange="changesubtotal(3)" type="number" value="1" placeholder="Quantity" class="form-control" id="quantity">
				 		</div>
				 		<div class="col-md-2">
				 			<input style="border: none;margin-left:-30px;" id="invoice_price_3" onchange="changesubtotal(3)" value="0" type="number" placeholder="Price" class="form-control" id="quantity">
				 		</div>
						<div class="col-md-2">
				 			<button type="button" class="btn btn-danger" value='3' onclick="del_section(this.value)"><span class="	glyphicon glyphicon-remove-circle"></span> Delete Row</button>
				 		</div>
				 	</div>
					<div class="col-md-12" style="">
						<div class="col-md-10">
							<textarea class="form-control" style="border: none;" id="invoice_additional_3" placeholder="Additional Description (optional)" rows="3" style="resize:none" id="invoice_body"></textarea>
							
						</div>
						<div class="col-md-2">
							<p class="amount" style="text-align:center;color:#286090;font-weight: bold;margin-top:-20px; padding-left:28px;">$<span id="amount_3">0.00</span></p>			
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
						    <!--<thead>
						      <tr>
						        <th>Firstname</th>
						        <th>Lastname</th>
						        <th>Email</th>
						      </tr>
						    </thead>-->
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
						        <td>$<span id="total">0.00</span></td>
						      </tr>
						    </tbody>
						  </table>
						<div class="checkbox">
						    <label><input type="checkbox">Allow Partial Payment</label>
						</div> 
					</div> 
				  </div>
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
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
<?php $this->load->view('admin/template/footer');?>

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
<script>
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
</body>

</html>
