
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title> Reservation Form</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <form>
        <div class="container">
            <h1> Confirm your reservation </h1>
            <div class="first-row">
                <div class="owner">
                    <h3> Owner </h3>
                    <div class="input-field">
                        <input type="text" name="owner_name">
                    </div>
                </div>
                <div class="owner">
                    <h3> ID Event </h3>
                    <div class="input-field">
                        <input type="text" name="id_eve">
                    </div>
                </div>
                <div class="cvv">
                    <h3>CVV</h3>
                    <div class="input-field">
                        <input type="password" name="cvv">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3> Card Number </h3>
                    <div class="input-field">
                        <input type="text" name="card_numb">
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
                                <option value="2021">2026</option>
                                <option value="2021">2025</option>
                                <option value="2021">2024</option>
                                <option value="2021">2023</option>
                                <option value="2021">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                            </select>
                        </div>
                        <div class="cards">
                            <img src="mc.png" alt="">
                            <img src="visa.png" alt="">
                            <img src="paypal.png" alt="">
                        </div>
                    </div>
            </div>
            <a href="">Confirm</a>
        </div>
    </form>
    
</body>

</html>