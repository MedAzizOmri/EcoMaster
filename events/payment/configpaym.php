<?php
    //Product Details
    // Minimum amount is $0.50 USD

    $itemName = "Demo Product";
    $itemNumber = "PN12345";
    $itemPrice = 25;
    $currency = "USD";

    // Stripe API configuration  
    define('STRIPE_API_KEY', 'sk_test_51K2Cu9EM9yk30CTje4mMTsiYrLZovv7qebty1DbPsnc8lQu62yGDdiaIQF9zSR3XKI7ThtYZSS8W3m9xkQnef9JW00mTnAqKjb'); 
    define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51K2Cu9EM9yk30CTj2E6lQIauXnib1fgtlZlwtoy0BR57IaaGf1QE0Nc47REQrUcvYedpJPu1a6VBCrnLR7LYPTNb00ZHbpMyco'); 
  
    // Database configuration  
    define('DB_HOST', 'localhost'); 
    define('DB_USERNAME', 'root'); 
    define('DB_PASSWORD', ''); 
    define('DB_NAME', 'eco');
?>