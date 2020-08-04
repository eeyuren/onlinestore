

<div class="box"><!-- box Begin -->
    
    <?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    ?>
    
    <h1 class="text-center">Payment Options For You</h1>
    
    <p class="lead text-center"><!-- lead Begin -->
        
        <a class="" href="order.php?c_id=<?php echo $customer_id ?>"> Offline Payment </a>
        
    </p><!-- lead finish -->
    
    <center><!-- center Begin -->
        
        <p class="lead"><!-- lead Begin -->
            
           <!-- <a href="pay_online.php?c_id=<?php echo $customer_id ?>">
                
                Pay with Paypal
                
                <img class="img-responsive" src="images/paypal.png" alt="paypal image">
                
            </a> -->
            
        </p><!-- lead finish -->
        
        <p class="lead"><!-- lead Begin -->
            
           <!-- <a href="https://paystack.com/pay/30daydevotionals?c_id=<?php echo $customer_id ?>">
                
                Pay with Paystack
                
                <img class="img-responsive" src="images/paystack.png" alt="paypal image">
                
            </a> -->
            
            Pay with Paypal
            
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="F59UASEPZK5UQ">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Digital Product">
<input type="hidden" name="item_number" value="digitalproduct">
<input type="hidden" name="item_id" value="<?php echo $pro_id; ?>">
<input type="hidden" name="amount" value="1.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="0.1">
<input type="hidden" name="rm" value="1">
<input type="hidden" name="return" value="https://www.renaissanceassembly.org/onlinestore/thankyou.php">
<input type="hidden" name="cancel_return" value="https://www.renaissanceassembly.org/onlinestore/failed.php">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="notify_url" value="https://www.renaissanceassembly.org/onlinestore/handler.php">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
            
            
<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->


            
        </p><!-- lead finish -->
        
    </center><!-- center finish -->
    
</div><!-- box Finish -->