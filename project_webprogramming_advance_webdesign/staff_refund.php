<?php
include 'header_footer/header.html';
include 'header_footer/adminPortal.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .staffbody{
            background-color: rgb(253, 215, 239);
        }

        .refundctn{
            display: flex;
        }

        ul{
            list-style-type: none;
            margin-left: 50px;
            width: 200px;
            background-color: white;
            padding: 0;
            text-align: center;
            height: fit-content;
        }

        li a{
            display: block;
            color: black;
            text-decoration: none;
            padding: 10px 16px;
        }

        li a:hover{
            background-color: #555;
            color: white;
        }

        .bigwhiterect{
            width: 1000px;
            height: fit-content;
            background-color: white;
            margin-left: 30px;
            margin-bottom: 20px;
        }

        .text1{
        color: #555;
        display: flex;
        justify-content: space-between;
        }

        .text1 p{
        font-family: 'Courier New', Courier, monospace;
        margin: 5px;
        font-size: 20px;
        }

        .text2{
        background-color: lightgrey;
        color: black;
        display: flex;
        }

        .text2 p {
        font-family: Arial, Helvetica, sans-serif;
        margin: 5px;
        font-size: 15px;
        padding: 10px;
        }

        .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 22px;
        top: 15px;
        }

        .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
        }

        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: darkgrey;
        -webkit-transition: .4s;
        transition: .4s;
        width: 41.5px;
        }

        .slider:before {
        position: absolute;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input:checked + .slider {
        background-color: darkgreen;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px darkgreen;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        }

        .slider.round {
        border-radius: 34px;
        }

        .slider.round:before {
        border-radius: 50%;
        }

        .text3{
        display: flex;
        justify-content: space-between;
        }

        .text3 p{
        font-family: Arial, Helvetica, sans-serif;
        margin: 5px;
        font-size: 15px;
        padding: 10px;
        width: 125px;
        text-align: center;
        }

        .text4{
        background-color: lightgrey;
        color: black;
        display: flex;
        justify-content: space-between;
        }

        .text4 p {
        font-family: Arial, Helvetica, sans-serif;
        margin: 5px;
        font-size: 15px;
        padding: 10px;
        width: 125px;
        text-align: center;
        }
    </style>
</head>

<body class="staffbody">
    <div class="refundctn">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Customer</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Stock</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Track Order</a></li>
        </ul>

        <div class="bigwhiterect">
            <div class="text1">
                <p>Cancel</p>
                <p>Refund Items-Order#POS-e8384430</p>
                <p>RM50.15</p>
            </div>

            <div class="text2">
                <p>Use Max Quantity to Refund</p>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>

            <div class="text3">
                <p>Product</p>
                <p>Qty to Refund</p>
                <p>Return to Stock</p>
                <p>Price</p>
                <p>Discount</p>
                <p>Row Total</p>
            </div>
            <hr style="margin: 0">

            <div class="text3">
                <p style="text-align: left;">Loose Wide Leg Jeans Women High Waist Casual</p>
                <p>1</p>
                <p><label class="switch" style="top: 0px;">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label></p>
                <p>RM69.00</p>
                <p>RM0.00</p>
                <p>RM0.00</p>
            </div>
            <hr style="margin: 0">

            <div class="text3">
                <p style="text-align: left;">Korean Style Women Ladies Loose Long Sleeve Shirt Blouse</p>
                <p>1</p>
                <p><label class="switch" style="top: 0px">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label></p>
                <p>RM32.00</p>
                <p>-RM3.20</p>
                <p>RM28.80</p>
            </div>
            <hr style="margin: 0">

            <div class="text3">
                <p style="text-align: left;">Korean Style Women Ladies Loose Knitted Striped Long Sleeve Shirt</p>
                <p>1</p>
                <p><label class="switch" style="top: 0px">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label></p>
                <p>RM12.00</p>
                <p>-RM1.20</p>
                <p>RM10.80</p>
            </div>

            <div class="text4">
                <p>Total</p>
                <p>3</p>
                <p></p>
                <p></p>
                <p>-RM4.40</p>
                <p>RM39.60</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
include 'header_footer/footer.html';
?>