<?php
# App Configs 
$baseURL = 'http://localhost/paypal-integration-php/'; // Base URL
# PayPal API Configs
$apiURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // SandBox Paypal API URL (Live URL: https://www.paypal.com/cgi-bin/webscr)
$merchantID = 'email@gmail.com'; //set email of paypal account
# PayPal UI Parms
$cppHeaderImage = 'https://www.paypalobjects.com/webstatic/developer/logo2_paypal_developer_1x.png';
# Redirect Configs
$returnURL = $baseURL.'success.php';
$cancelURL = $baseURL.'fail.php';
# Transaction Info (Custom)
$transactionID = 'TRANSACTION_CODE';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PayPal Integration</title>
    <link rel="stylesheet" href="">
</head>

<body>

    <h1>PHP PayPal Integration</h1>
    <p><a href="https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/" target="_blank">PayPal Developer Docs</a></p>
    <hr />
    
    <h4>Welcome!</h4>
    
    <div class="cart">
        
        <div class="product">
                
            <p class="name">Gift</p>
            
            <p class="price">Price: 1 HUF</p>
            
            <form id="PayPla_Checkout" action="<?php print $apiURL; ?>" method="post">
            
            	<input type="hidden" name="cmd" value="_xclick">
            
                <input type="hidden" name="business" value="<?php print $merchantID; ?>">
                <input type="hidden" name="currency_code" value="HUF">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="handling" value="0">
                
                <input type="hidden" name="no_shipping" value="1">
                
                <input type="hidden" name="cpp_header_image" value="<?php print $cppHeaderImage; ?>">
                
                <input type="hidden" name="custom" value="<?php print $transactionID; ?>">
                
                <input type="hidden" name="item_name" value="Item Label">
                <input type="hidden" name="item_number" value="<?php print $transactionID; ?>">
                <input type="hidden" name="amount" value="1">
                           
                <input type="hidden" name="cancel_return" value="<?php print $cancelURL; ?>">
                <input type="hidden" name="return" value="<?php print $returnURL; ?>">
                <input type="hidden" name="cbt" value="Return to Merchant">
                
                <input type="submit" border="0" name="submit">
                
                <p><img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></p>
                
            </form> 
            
        </div> <!--/product-->
        
    </div> <!--/cart-->

</body>
</html>