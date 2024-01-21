<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!--FontFamily-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro:wght@400;700&display=swap">
    <style>

        body{
          background-color:#FFF2F2;
        }

        .title h1{
          font-family: "Montserrat", sans-serif;
          padding: 50px;
        }

        .order_table{
            width: auto;
            height: auto;
            background-color: white;
            margin-left:50px;
            margin-right: 50px;
            margin-top: 20px;
        }

        .button_status{
            text-align: right;
            padding: 20px;
        }

        #inProgress{
            width: 150px;
            height: 50px;
            border-radius: 30px;
            border:0px;
            background-color:rgba(255, 200, 0, 0.5);
        }

        .order_content{
            display: flex;
            align-items: flex-start;
            margin-left: 50px;
            padding: 10px;
            width: auto;
            height: auto;
        }

        .section_image img{
            max-width: 100px;
            border-radius: 10px;
        }

        #content{
            margin-right: 50px;
        }

        .section_product_info{
            width: 300px;
        }

        .section_amount h3{
            font-family: "Montserrat", sans-serif;
            font-size: 35px;
        }

        #complete{
            width: 150px;
            height: 50px;
            border-radius: 30px;
            border:0px;
            background-color: rgb(0, 202, 79,0.5);
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
    <!--Header-->
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
                <a href="userProfile.php">My Profile</a>
                <a href="voucher.php">My Voucher</a>
                <a href="orderhistory.php">Order History</a>
                <a href="review.php">My Review</a>
                <a href="wishlist.php">Wishlist</a>
            </div>

            <div class="icons">
                <a href=""><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
                <a href=""><i class="fa-regular fa-circle-user" style="color: #000000;"></i></a>
            </div>
        </div>

        <div class="menu">
            <a onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-bars" style="color: #000000;"></i></a>
            <div id="myDropdown" class="dropdown-content">
                <a href="userProfile.php">My Profile</a>
                <a href="voucher.php">My Voucher</a>
                <a href="orderhistory.php">Order History</a>
                <a href="review.php">My Review</a>
                <a href="wishlist.php">Wishlist</a>
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

    <!--Content-->
    <div class="title">
        <h1>My Order</h1>
    </div>

    <!-- PHP code to connect to the database and fetch orders -->
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="e_commerce_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="order_table">';
            echo '<div class="button_status">';
            echo '<button id="inProgress">IN PROGRESS</button>';
            echo '<hr>';
            echo '</div>';
            echo '<div class="order_content">';
            echo '<div class="section_image" id="content">';
            // Assuming you have a column named 'image_path' in your orders table
            echo '<img src="' . $row['image_path'] . '">';
            echo '</div>';
            echo '<div class="section_product_info" id="content">';
            // Assuming you have a column named 'product_name' in your orders table
            echo '<h5>' . $row['product_name'] . '</h5>';
            // Assuming you have a column named 'product_details' in your orders table
            echo '<p style="color: gray;">' . $row['product_details'] . '</p>';
            // Assuming you have a column named 'quantity' in your orders table
            echo '<p>' . $row['quantity'] . '</p>';
            echo '</div>';
            echo '<div class="section_amount" id="content">';
            // Assuming you have a column named 'total_amount' in your orders table
            echo '<h3>' . $row['total_amount'] . '</h3>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No orders found.';
    }

    $conn->close();
    ?>

    <!--completed order-->
    <div class="order_table">
        <div class="button_status">
            <button id="complete">COMPLETED</button>
            <hr>
        </div>

        <div class="order_content">
            <div class="section_image" id="content">
                <img src="./coat.jpg">
            </div>
            <div class="section_product_info" id="content">
                <h5>Casual Plain Button Blazer</h5>
                <p style="color: gray;">Gray Free Size</p>
                <p>1</p>
            </div>
            <div class="section_amount" id="content">
                <h3>RM 70.00</h3>
            </div> 
        </div>

        <div class="order_content">
            <div class="section_image" id="content">
                <img src="./dress.jpg">
            </div>
            <div class="section_product_info" id="content">
                <h5>Women Solid Butterfly Sleeve Belted Dress</h5>
                <p style="color: gray;">Pink L</p>
                <p>2</p>
            </div>
            <div class="section_amount" id="content">
                <h3>RM 55.00</h3>
            </div> 
        </div>
    </div>
     

      <!--Footer-->
      <div class="footer">
        <div class="box">
            <div class="left_content">
                <div class="content">
                    <p>Category</p>
                    <a href="productDetails_Men.php">Men's Cloth</a>
                    <a href="productDetails_Women.php">Women's Cloth</a>
                </div>
    
                <div class="content">
                    <p>About Store</p>
                    <a href="voucher.php">Voucher</a>
                    <a href="">Promotion</a>
                </div>
    
                <div class="content">
                    <p>Customer Info</p>
                    <a href="wishlist.php">Wishlist</a>
                    <a href="return.php">Return & Refund</a>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>