<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GeeksnTechnology Limited : Admin Area</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
<!-- Styling -->
    <link href="https://clients.hostpair.com/templates/hostpair/assets/css/invoice-clean.css" rel="stylesheet">
</head>  

<style type="text/css">
p{
	padding:0px;
	font-size:14px;
}
</style>
<body>
    <div class="container">
                <div class="invoice-container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-8">
                                                        <div class="logo"><img src="https://clients.hostpair.com/logo/logo.png" title="HostPair LLC" /></div>
                            
                        </div>
                        <div class="col-sm-4">
                        <div class="invoice-status text-right">
                        		                                <span class="unpaid">Unpaid</span>
                                                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-8">
                    <h3>Invoice #14324</h3>
                    </div>    
                    
                    <div class="col-md-4">
                                                        <div class="payment-btn-container text-right">
                                <p>Please check below link for Bank Account number and bKash number.<br />
http://clients.hostpair.com/knowledgebase.php?action=displayarticle&amp;id=171<br />Reference Number: 14324</p>
                            </div>
                                                </div>    
                    </div>

                    <hr>
                                        <div class="row">
                        <div class="col-md-3 col-sm-6">
                         <h5>Invoiced To:</h5>
                         <address>
                                                        Md Toriqul Islam Kiron<br>
                            29/1a(ground floor),main road,kallyanpur, <br>
                            dhaka, dhaka, 1207<br>
                            Bangladesh
                                                    </address>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Pay To:</h5>
                        <address>
                            HostPair LLC<br />
16192 Coastal Highway<br />
Lewes<br />
Delaware 19958, USA.
                        </address>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Invoice Date:</h5>
                        <p>21/12/2015</p>

                                                 <h5>Due Date:</h5>
                        <p>21/12/2015</p>
                                

                    </div>  
                    <div class="col-md-3 col-sm-6">
                     <h5>Payment Method:</h5>
                                          <form method="post" action="/viewinvoice.php?id=14324" class="form-inline">
                        <input type="hidden" name="token" value="b7d06c0fde0a8161d56059d2dbff5441a946e9e1" /><select name="gateway" onchange="submit()" class="form-control select-inline"><option value="banktransfer" selected="selected">Bank or bKash(BD only)</option><option value="easypayway">EasyPayWay (BD Only)</option><option value="paypal">PayPal</option><option value="tco">2CheckOut(Credit/Debit Card)</option></select>
                    </form>
                                    </div>
            </div>
                                    <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Description</td>
                            <td class="text-right">Amount</td>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <td>B-Advanced - hgewhewh.com (21/12/2015 - 20/01/2016)</td>
                            <td class="text-right">$8.00 USD</td>
                        </tr>
                                                <tr>
                            <td>Domain Registration - hgewhewh.com - 1 Year/s (21/12/2015 - 20/12/2016)<br />
 + DNS Management</td>
                            <td class="text-right">$11.20 USD</td>
                        </tr>
                                                <tr class="active">
                            <td>Sub Total</td>
                            <td class="text-right">$19.20 USD</td>
                        </tr>
                                                                        <tr class="active">
                            <td>Credit</td>
                            <td class="text-right">$0.00 USD</td>
                        </tr>
                        <tr>
                            <td><h4>Total</h4></td>
                            <td class="text-right"><h4>$19.20 USD</h4></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                        <div class="transactions-container">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td>Transaction Date</td>
                                <td>Gateway</td>
                                <td>Transaction ID</td>
                                <td class="text-right">Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td colspan="4">No Related Transactions Found</td>
                            </tr>
                                                        <tr>
                                <td colspan="3">Balance</td>
                                <td class="text-right">$19.20 USD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                    </div>
    </div>
</div>
<p class="text-center hidden-print">
<a class="btn btn-link" href="clientarea.php">&laquo; Back to Client Area</a>
<a href="javascript:window.print()" class="btn btn-link"><i class="fa fa-print"></i> Print</a>
<a href="dl.php?type=i&amp;id=14324" class="btn btn-link"><i class="fa fa-arrow-down"></i> Download</a>
</p>
</div>
</body>
</html>

