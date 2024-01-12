<style>
    .paymentMethod img , .logisticPartner img{
        width: 50px;
        height: 30px;
        background-color: white;
        margin-bottom: 10px;
    }

    .footer{
        background-color: #7286D3;
    }

    .box{
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    .left_content, .right_content{
        display: flex;
    }

    .content a{
        display: block;
        color: black;
        text-decoration: none;
        font-size: 13px;
        padding-bottom: 10px;
    }

    .content p, .paymentMethod p, .logisticPartner p{
        font-size: 15px;
        font-family: monospace;
        text-decoration: underline;
    }

    #term_content{
        background-color: #7286D3;
        text-align: center;
        font-family: 'Salsa', cursive;
        font-size: 12px;
        padding-bottom: 20px;
    }

    #special{
        margin-left: 50px;
        margin-right: 50px;
    }

    .content, .paymentMethod, .logisticPartner{
        margin: 20px;
    }

    /* mobile size */
    @media only screen and (max-width: 600px) {

        .paymentMethod,.logisticPartner {
            display: none;
        }
        
    }
</style>

<body>
    <div class="footer">
        <div class="box">
            <div class="left_content">
                <div class="content">
                    <p>Category</p>
                    <a href="">Men Fashion</a>
                    <a href="">Women Fashion</a>
                </div>
    
                <div class="content">
                    <p>About Store</p>
                    <a href="">Voucher</a>
                    <a href="">Promotion</a>
                </div>
    
                <div class="content">
                    <p>Customer Info</p>
                    <a href="">Wishlist</a>
                    <a href="">Return & Refund</a>
                    <a href="">Customer Service</a>
                </div>
            </div>
    
            <div class="right_content">
                <div class="paymentMethod">
                    <p>Payment Method</p>
                    <img src="footer_image/fpx_image.png" alt="fpx">
                    <img src="footer_image/visa.png" alt="visa">
                    <img src="footer_image/applyPay_image.png" alt="applePay">
    
                    <div class="paymentMethod_special">
                        <img src="footer_image/touchandgo.png" alt="tng">
                        <img src="footer_image/Mastercard_logo.png" alt="master">
                        <img src="footer_image/myBank_image.png" alt="maybank">
                    </div>
                </div>
    
                <div class="logisticPartner">
                    <p>Logistics Partner</p>
                    <img src="footer_image/ninjavan.png" alt="ninja">
                    <img src="footer_image/JT_Express.png" alt="J&T">
                    <img src="footer_image/poslaju.png" alt="postlaju">
    
                    <div class="logisticPartner_special">
                        <img src="footer_image/fedex.png" alt="fedex">
                        <img src="footer_image/dhl_image.png" alt="DHL">
                    </div>
                </div>
    
                <div class="content">
                    <p>Follow Us</p>
                    <a href="">Facebook</a>
                    <a href="">Instagram</a>
                    <a href="">Youtube</a>
                </div>
            </div>
        </div>
        <hr id="special">
        <p id="term_content">Copyright 2023. Sunny Shop Mobile Malaysia Sdn. Bhd. [201501009497 (1134832-W)]. All Rights Reserved.</p>
    </div>
</body>
