<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Payment Page</title>
<link rel="icon" href="badge.png">
<link rel="stylesheet" href="styles.css">

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, sans-serif;
    }

    body{
        background:#f5f5f5;
    }

    .container{
        width:90%;
        max-width:1000px;
        margin:auto;
        padding:40px 0;
    }

    .card{
        background:white;
        border-radius:15px;
        overflow:hidden;
        box-shadow:0 5px 15px rgba(0,0,0,0.2);
        display:flex;
        flex-wrap:wrap;
    }

    .left{
        flex:1;
        min-width:300px;
    }

    .left img{
        width:100%;
        height:100%;
        object-fit:cover;
    }

    .right{
        flex:1;
        padding:40px;
    }

    h1{
        margin-bottom:15px;
        color:#333;
    }

    p{
        margin-bottom:20px;
        color:#666;
    }

    .price{
        font-size:28px;
        color:#e67e22;
        margin-bottom:25px;
        font-weight:bold;
    }

    button{
        padding:14px 30px;
        border:none;
        border-radius:8px;
        background:#e67e22;
        color:white;
        font-size:18px;
        cursor:pointer;
        transition:0.3s;
    }

    button:hover{
        background:#cf711f;
    }

    .payment-form{
        display:none;
        margin-top:30px;
    }

    .payment-form input{
        width:100%;
        padding:12px;
        margin-bottom:15px;
        border:1px solid #ccc;
        border-radius:8px;
    }

    .success{
        color:green;
        margin-top:15px;
        font-weight:bold;
        display:none;
    }
</style>
</head>

<body>

<div class="container">
    <div class="card">

        <div class="left">
            <img src="resources/background.avif">
        </div>

        <div class="right">
            <h1>Special Catering Package</h1>

            <p>
                Delicious food package for your events and parties.
                Order now and make your event memorable.
            </p>

            <div class="price">Rs. 5,000</div>

            <button onclick="showPayment()">Order Now</button>

            <div class="payment-form" id="paymentForm">

                <h2 style="margin-bottom:20px;">Payment Details</h2>

                <input type="text" placeholder="Card Holder Name">

                <input type="text" placeholder="Card Number">

                <input type="text" placeholder="Expiry Date">

                <input type="text" placeholder="CVV">

                <button onclick="payNow()">Pay Now</button>

                <div class="success" id="successMsg">
                    Payment Successful !
                </div>

            </div>

        </div>

    </div>
</div>
<script src="script.js"></script>
<script src="bootstrap.js"></script>
<script src="bootstrap.bundle.js"></script>
</body>
</html>