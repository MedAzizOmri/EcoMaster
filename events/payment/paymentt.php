<?php
    // Include configuration file
    require_once 'configpaym.php';

    $payment_id = $statusMsg = '';
    $ordStatus = 'error';

    // Check whether stripe token is not empty
    if (!empty($_POST['stripeToken'])){
        //Retrieve stripe token and user info from the submitted form data
        $token = $_POST['stripeToken'];
        $customer_name = $_POST['customer_name'];
        $customer_email = $_POST['customer_email'];

        // Include Stripe PHP Library
        require_once 'stripe-php/init.php';

        //Set API Key
        \Stripe\Stripe::setApiKey(STRIPE_API_KEY);

        // Add customer to stripe
        try{
            $customer = \Stripe\Customer::create(array(
                'customer_email' => $customer_email,
                'source' => $token
            ));
        }catch (Exception $e){
            $api_error = $e->getMessage();
        }

        if (empty($api_error) && $customer){
            //Convert price to cents
            $itemPriceCents = ($itemPrice*100);

            //Charge a credit or a debit card
            try {
                $charge = \Stripe\Charge::create(array(
                    'customer' => $customer->id,
                    'amount' => $itemPriceCents,
                    'currency' => $currency,
                    'description' => $itemName
                ));
            } catch (Exception $e){
                $api_error = $e->getMessage();
            }
            if(empty($api_error) && $charge){
                //Retrieve charge details
                $chargeJson = $charge->jsonSerialize();

                //Check whether the charge is successful
                if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['capt']){
                    $transactionID = $chargeJson['balance_transaction'];
                    $paidAmount = $chargeJson['amount'];
                    $paidAmount = $chargeJson ($paidAmount/100);
                    $paidCurrency = $chargeJson['currency'];
                    $payment_status = $chargeJson['status'];

                    // Include database connection file
                    include_once 'dbConnect.php';

                    //Insert transaction data into the database
                    $sql = "INSERT INTO transactions (customer_name,customer_email,item_name,item_number,item_price,item_price_currency,paid_amount,paid_amount_currency,txn_id,payment_status,created,modified) 
                    VALUES ('".$customer_name."','".$customer_email."','".$itemName."','".$itemNumber."','".$itemPrice."','".$currency."','".$paidAmount."','".$paidCurrency."','".$transactionID."','".$payment_status."',NOW(),NOW())";
                    $insert = $db->query($sql);
                    $payment_id = $db->insert_id;

                    if($payment_status == 'succeeded'){
                        $ordStatus = 'success';
                        $statusMsg = 'Your Payment has been successful!';
                    }else{
                        $statusMsg = "Your Payment has Failed!";
                    }
                }else{
                    $statusMsg = "Transaction has been failed!";
                }
            }else{
                $statusMsg = "Charge creation failed! $api_error";
            }
        }else{
            $statusMsg = "Invalid card details! $api_error";
        }
    }else{
        $statusMsg = "Error on form submission.";
    }
?>

<!DOCTYPE html>
<html lang="en-US"> 
    <head>
        <title>Stripe Payment Status - EcoAware</title>
        <meta charset="utf-8">

        <!-- Stylesheet file -->
        <link href="css/stylespayment.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="status">
                <?php if(!empty($payment_id)){ ?>
                    <h1 class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h1>

                    <h4>Payment Information</h4>
                    <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
                    <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
                    <p><b>Paid Amount:</b> <?php echo $paidAmount.' '.$paidCurrency; ?></p>
                    <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>

                    <h4>Product Information</h4>
                    <p><b>Name:</b> <?php echo $itemName; ?></p>
                    <p><b>Price:</b> <?php echo $itemPrice.' '.$currency; ?></p>

                <?php }else{ ?>
                    <h1 class="error">Your Payment has Failed</h1>
                <?php } ?>
            </div>
            <a href="index.php" class="btn-link">Back to Payment Page</a>
        </div>
    </body>
</html>