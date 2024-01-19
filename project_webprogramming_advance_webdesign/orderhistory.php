<?php

// Include database connection file
include("orderhistoryDB.php");

// Fetch order history data from the database
$order_history_code = 1; // Replace 1 with the actual user ID
$orderHistoryQuery = "SELECT * FROM order_history WHERE order_history_code = $order_history_code";
$result = mysqli_query($conn, $orderHistoryQuery);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
    <style>
        
        body{
          background-color:#FFF2F2;
        }

    

        .container{
            display: flex;
        }

     

        .vouchertitle{
            text-align: left;
        }

        .vouchertitle h1{
            margin-left: 70px;
            margin-top: 55px;
            font-size: 60px;
        }

        .rect{
            background-color: white;
            width: 270px;
            height: 100px;
            margin-left: 40px;
            margin-top: 0px;
            border-bottom: 2px solid #333
        }

        .orderusericon{
            font-size: 50px;
            margin-left: 20px;
            padding-top: 10px;
            height: 100px;

        }

        .orderuser{
            margin-left: 10px;
            margin-top: 20px;
        }

        .ul{
            list-style-type: none;
            margin-left: 0px;
            width:270px;
            background-color: white;
            text-align: center;
        }

        li a{
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover{
            background-color: #555;
            color: white;
        }


        .whiterect{
            width: 800px;
            height: 550px;
            margin-left: 20px;
            background-color: white;
        }

        .orderid{
            width: 250px;
            margin-left: 400px;
            margin-top: 10px;
        }

        .complete{
            width: 100px;
            height: 30px;
            background-color: rgb(184, 255, 184);
            border-radius: 40px;
            text-align: center;
            margin-top: 8px;
            padding: 3px;
            color: darkgreen;
        }

        .line{
            width: 740px;
            height: 2px;
            background-color: black;
            margin-left: 20px;

        }

        .line1{
            width: 740px;
            height: 2px;
            background-color: black;
            margin-left: 20px;
            margin-top: 15px;

        }

        .shoeimage{
            margin-left: 50px;
            margin-top: 30px;
        }

        .shoeimage img{
            width: 180px;
            height: 180px;
        }

        .orderdetail{
            margin-top: 25px;
            width: 250px;
            margin-left: 50px;

        }

        .price{
            margin-left: 50px;
            margin-top:25px ;
        }

        .historydetail{
            margin-right: 29px;
            text-align: right;
            font-size: 12px;
            margin-top: 10px;
        }

        .mastercard{
            text-align: right;
            font-size: 15px;
        }

        .button{
           border:1px solid rgb(56, 35, 56) ;
           color: white;
           padding: 15px 32px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           cursor:pointer;
           background-color: rgb(121, 122, 214);
           margin-left: 50px;

           
        }


        .Header {
    background-color: #E5E0FF;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 20px 20px 5px 20px;
}

.right_content {
    display: flex;
}

.form-inline {
    display: flex;
    align-items: center;
}

.form-control {
    width: 400px;
    background-color: #7286D3;
    border-radius: 20px 0 0 20px;
    /* Rounded left corners */
}

.search_bar button {
    background-color: #7286D3;
    border-radius: 0 20px 20px 0;
    /* Rounded right corners */
    margin-left: -2px;
    font-size: 15px;
}

.left_content a,
.icons a {
    font-size: 35px;
}

.search_bar {
    margin-right: 100px;
}

.search_bar a {
    font-size: 12px;
    color: #000000;
    text-decoration: none;
    padding: 10px;
}

#search_btn {
    background-color: #7286D3;
}

.icons a {
    margin-right: 50px;
}

/* Dropdown Content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #E5E0FF;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    flex-direction: column;
    width: 100%;
}

.menu:hover .dropdown-content {
    display: flex;
    flex-direction: column;
}

.menu {
    display: none;
}

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


.order-history-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .order-history-table th, .order-history-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .order-history-table th {
            background-color: #f2f2f2;
        }


/* mobile size */
@media only screen and (max-width: 600px) {
    .right_content {
        display: none;
    }

    .left_content a {
        font-size: 25px;
    }

    .menu {
        float: right;
        overflow: hidden;
        display: block;
    }

    .menu i{
        font-size: 25px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        z-index: 1;
        flex-direction: column;
        width: 100%;
        top: 60px;
        left: 0px;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .show {
    display: block;
    }


    .paymentMethod,.logisticPartner {
        display: none;
    }
    

}

        



       


    </style>
  </head>
  <body>

    <div class="Header">
        <div class="left_content">
            <a href=""><i class="fa-solid fa-house" style="color: #000000;"></i></a>
        </div>

        <div class="right_content">
            <div class="search_bar">
                <form action="" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0" type="submit" id="search_btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <a href="userProfile.html">My Profile</a>
                <a href="voucher.html">My Voucher</a>
                <a href="orderhistory.html">Order History</a>
                <a href="review.html">My Review</a>
                <a href="wishlist.html">Wishlist</a>
            </div>

            <div class="icons">
                <a href=""><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
                <a href=""><i class="fa-regular fa-circle-user" style="color: #000000;"></i></a>
            </div>
        </div>

        <div class="menu">
            <a onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-bars" style="color: #000000;"></i></a>
            <div id="myDropdown" class="dropdown-content">
                <a href="userProfile.html">My Profile</a>
                <a href="voucher.html">My Voucher</a>
                <a href="orderhistory.html">Order History</a>
                <a href="review.html">My Review</a>
                <a href="wishlist.html">Wishlist</a>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
                }
            }
    }
    </script>


            <div class="vouchertitle">

            <h1>Order History</h1>

            </div>

            <div class="container">

            <div class="rect">
                <div class="container">
                <div class="orderusericon">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="orderuser">
                    <h1>XXXXXX</h1>
                </div>
                </div>

                <div class="ul">
                    <li><a href="userProfile.html">My Profile</a></li>
                    <li><a href="voucher.html">My Voucher</a></li>
                    <li><a href="orderhistory.html">Order History</a></li>
                    <li><a href="review.html">My Review</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </div>

            </div>

            <div class="whiterect">
                <div class="container">
                    <div class="orderid">
                        <p>Order ID : 08081717YTG00W</p>
                    </div>
                    <div class="complete">
                        <p>COMPLETE</p>
                    </div>
                </div>

                <div class="line"></div>

                <div class="container">
                    <div class="shoeimage">
                        <img src="./WomenShoes.jpg">
                    </div>

                    <div class="orderdetail">
                        <p>Women High Heels Shoes Casual Shoes Workplace Shoes</p>
                        <p>Black, 39</p>
                        <p>x 2</p>
                    </div>

                    <div class="price">
                        <h2>RM20.50</h2>
                    </div>
                </div>

                <div class="line1"></div>

                <div class="historydetail">
                    <p>Order Datetime: 08-08-2023 12:17</p>
                    <p>Purchase Datetime: 08-08-2023 12:17</p>
                    <p>Ship Out Datetime: 10-08-2023 17:20</p>
                    <p>Order Received Datetime : 14-08-2023 20:20</p>

                    <div class="mastercard">
                        <p>Payment Method: Master Card</p>
                    </div>
                </div>

                <button class="button">CONTACT SELLER</button>
                <button class="button">PURCHASES AGAIN</button>
                <button class="button">RETURN/REFUND</button>
                

            </div>

            </div>

            
            <?php if (mysqli_num_rows($result) > 0): ?>
        <table class="order-history-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['status_detail']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No order history found for user <?php echo $username; ?></p>
    <?php endif; ?>

            
            <div class="footer">
                <div class="box">
                    <div class="left_content">
                        <div class="content">
                            <p>Category</p>
                            <a href="productDetails_Men.html">Men's Cloth</a>
                            <a href="productDetails_Women.html">Women's Cloth</a>
                        </div>
            
                        <div class="content">
                            <p>About Store</p>
                            <a href="voucher.html">Voucher</a>
                            <a href="">Promotion</a>
                        </div>
            
                        <div class="content">
                            <p>Customer Info</p>
                            <a href="wishlist.html">Wishlist</a>
                            <a href="return.html">Return & Refund</a>
                            <a href="">Customer Service</a>
                        </div>
                    </div>
            
                    <div class="right_content">
                        <div class="paymentMethod">
                            <p>Payment Method</p>
                            <img src="./fpx_image.png" alt="fpx">
                            <img src="./visa_image.png" alt="visa">
                            <img src="./applyPay_image.png" alt="applepay">
            
                            <div class="paymentMethod_special">
                                <img src="./tng_image.png" alt="tng">
                                <img src="./masterCard_image.png" alt="mastercard">
                                <img src="./myBank_image.png" >
                            </div>
                        </div>
            
                        <div class="logisticPartner">
                            <p>Logistics Partner</p>
                                <img src="./ninjaVan_image.png" alt="ninjavan">
                                <img src="./jtExpress_image.png" alt="JT_Express">
                                <img src="./poslaju_image.png" alt="poslaju">
            
                            <div class="logisticPartner_special">
                                    <img src="./fedex_image.png" alt="fedex">
                                    <img src="./dhl_image.png" alt="dhl">
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
        
    
    
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>