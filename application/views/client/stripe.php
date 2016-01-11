<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payments using Stripe</title>	
</head>
<body>
<h1>Buy Facebook login Script</h1>
<p>Price: 15.00$</p>
<p>Name: How to Login with Facebook Graph API in PHP</p>
 
<form action="<?php echo base_url();?>index.php/admin/charge" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_live_DdTUjGTT8gTtBITCDC13OcEC" // your publishable keys
    data-image="<?php echo base_url();?>assets/img/logo.png" // your company Logo
    data-name="GeeksnTechnology.com"
    data-description="Download Script ($100.00)"
    data-amount="10000">
  </script>
</form>





<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='smkiron@gmail.com'; // Business email ID
?>
<h4>Welcome, Guest</h4>
 
<div class="product">            
    <div class="image">
        <img src="<?php echo base_url();?>assets/img/logo.png" />
    </div>
    <div class="name">
        GNT Payment
    </div>
    <div class="price">
        Price:$10
    </div>
    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="PHPGang Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="10">
    <input type="hidden" name="cpp_header_image" value="<?php echo base_url();?>assets/img/logo.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="<?php echo base_url();?>index.php/admin/cancel">
    <input type="hidden" name="return" value="<?php echo base_url();?>index.php/admin/success">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</div>
 
</body>
</html>