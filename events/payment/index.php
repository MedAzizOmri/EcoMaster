<?php 
    include_once 'configpaym.php';
    include_once '..\..\Dashbord\controller\eventc.php';
    include_once '..\..\Dashbord\model\event.php';
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> Reservation Form</title>
        <meta charset="UTF-8">

        <!-- Stripe JS library -->
        <script src="https://js.stripe.com/v3/"></script>

        <link rel="stylesheet" href="stylespayment.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    </head>

    <body>
        
            <div class="panel">
                <div class="panel-body">

            <form>
                <div class="container">
                    <h1> Confirm your reservation </h1>
                    <div class="first-row">
                        <div class="owner">
                            <h3> Owner </h3>
                            <div class="input-field">
                                <input type="text" name="owner_name" id="owner_name" class="field" placeholder="Enter owner's name" required="" autofocus="">
                            </div>
                        </div>
                        <div class="owner">
                            <h3> ID Event </h3>
                            <div class="input-field">
                                <input type="text" name="id_eve" id="id_eve" class="field" required="" value="<?php echo $_GET['id'] ?>">
                            </div>
                        </div>
                        <div class="cvv">
                            <h3>CVV</h3>
                            <div class="input-field">
                                <input type="password" name="card_cvc" id="card_cvc" class="field" placeholder="CVV" required="" autofocus="">
                            </div>
                        </div>
                    </div>
                    <div class="second-row">
                        <div class="card-number">
                            <h3> Card Number </h3>
                            <div class="input-field">
                                <input type="text" name="card_numb" id="card_numb" class="field" placeholder="Enter Card Number">
                            </div>
                        </div>
                
                    </div>
                    <div class="third-row">
                        <h3> Expiration Date </h3>
                        <div class="selection">
                            <div class="date">
                                <select name="months" id="months">
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Jul">Jul</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sep">Sep</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>
                                <select name="years" id="years">
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                            <div class="cards">
                                <img src="assets\mc.png" alt="">
                                <img src="assets\visa.png" alt="">
                                <img src="assets\paypal.png" alt="">
                            </div>
                        </div>
                </div>
                    <a id="payBtn" href="">Submit Payment</a>    
                </div>
            </form>
            

        <script>
            //Create an instance of the Stripe object
            //Set your publishable API key
            var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY?>');

            //Create an instance of elements
            var elements = stripe.elements();

            var style = {
                base: {
                    fontWeight: 400,
                    fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                    fontSize: '16px',
                    lineHeight: '1.4',
                    color: '#555',
                    backgroundColor: '#fff',
                    '::placeholder': {
                        color: '#888',
                    },
                },
                invalid: {
                    color: '#eb1c26',
                }
            };

            var cardElement = elements.create('cardNumber', {
                style: style
            });
            cardElement.mout('#card_number');

            var exp = elements.create('cardExpiry', {
                'style': style
            })
            exp.mout('#card_expiry');

            var cvc = elements.create('cardCvc', {
                'style': style
            })
            cvc.mout('#card_cvc');

            var form = document.getElementById('paymentFrm');

            var resultContainer = document.getElementById('paymentResponse');

            cardElement.addEventListener('change', function(event){
                if (event.error){
                    resultContainer.innerHTML = '<p>' +event.error.message+ '</p>';
                } else{
                    resultContainer.innerHTML = '';
                }
            });

            //Create a token when the form is submitted.
            var form = document.getElementById('paymentFrm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                createToken();
            });

            //Create single-use token to charge the user
            function createToken() {
                stripe.createToken(cardElement).then(function(result){
                    if (result.error){
                        resultContainer.innerHTML = '<p>' +result.error.message+ '</p>'
                    } else {
                        stripeTokenHandler(result.token);
                    }
                });
            }

            function stripeTokenHandler(token) {
                //Insert the token ID into the form so it gets submitted to the server
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type','hidden');
                hiddenInput.setAttribute('name','stripeToken');
                hiddenInput.setAttribute('value',token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }

        </script>

    </body>
</html>
