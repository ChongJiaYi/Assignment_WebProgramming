<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name="e_commerce_system";

// Create connection
$conn = new mysqli($servername, $username, $password,$database_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trackingCode = $_POST["tracking_code"];
    $orderID = $_POST["order_id"];
    $currentLocation = $_POST["current_location"];
    $statusDetails = $_POST["status_details"];

  

    $query = "INSERT INTO tracking (tracking_code, order_id, current_location,status_details) VALUES ('$trackingCode', '$orderID', '  $currentLocation', '$statusDetails')";
   
    if ($conn->query($query) === TRUE) {
        echo "Voucher inserted successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
  }
  ?>
  

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


        .tracking_heading{
          margin: 50px;
          width: auto;
          height: auto;
          
        }

        .tracking_heading h1{
          font-family: "Montserrat", sans-serif;
        }
        
        .progress{
          background-color: white;
          width: auto;
          height: auto;
          display: block;
          margin: 50px;
        }

        .progress_status{
          display: flex;
          justify-content: flex-end;
          margin: 20px;
        }

        .progress_status h6{
          padding-right: 50px;
        }


        .track{
          margin: 4em 0 8em;
        }


        #progress{
          list-style: none;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          align-items: center;
          gap: 1em;
          position: relative;
          text-align: center;
        }

        #progress li{
          width: 20%;
          position:relative;
        }

        #progress li::before{
          content:'\2713';
          position: absolute;
          align-items: left;
          background-color: #7286D3;
          width: 70px;
          height: 70px;
          font-size: 50px;
          color: white;
          border-radius: 50%;
          z-index: 11111;
          transform: translate(-80%); 
        }

        #progress li:last-child::before{
          content:'\2713';
          font-weight: bold;
          background-color: rgb(203, 210, 240);
        }

        #progress::before{
          content:'';
          position:absolute;
          top: 30px;
          width: 50%;
          margin-left: 100px;
          height: 10px;
          background-color: #7286D3;
          z-index: 111;
        }
  
        #progress::after{
          content: '';
          background-color: rgb(203, 210, 240);
          position: absolute;
          top: 30px;
          width: 75%;
          height: 10px;
          margin-left:100px ;
        }


        .track_text{
          display: flex;
        }

        .list{
          font-size: 15px;
          padding: 20px;
          width: 40%;
          text-align: center;
        }

        .extimated_time{
          padding: 20px 0 50px 80px;
          font-family: "Montserrat", sans-serif;
          font-weight: bold;
        }

        .buttons{
          display: flex;
          flex-direction: column;
          align-items: end;
          margin-right: 100px;
        }

        .buttons a{
          text-decoration: none;
          font-family:'Slabo', serif;
          font-size: 20px;
          color: white;
          text-align: center;
          align-items: center;
          padding-top: 10px;
        }

        .button{
          background-color: #000000;
          width: 200px;
          height: 50px;
          margin-bottom: 30px;
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
    <div class="tracking_heading">
        <h1>Tracking</h1>
        <p>CURRENT ORDER (1)</p>
    </div>

    <div class="progress">
        <div class="progress_status">
            <h6>Order ID: 20230808SCS13SVT</h6>
            <h6>YOUR PARCEL IS ON THE WAY</h6>
        </div>

        <div class="track">
            <ul id="progress" class="text-center">
              <li class="active"></li>
              <li class="active"></li>
              <li class="active"></li>
              <li class=" "></li>
            </ul>
        </div>

        <div class="track_text">
            <div class="list">
                <p>ORDER PLACED</p>
                <p>08-08-2023 20:30</p>
            </div>
            <div class="list">
                <p>PARCEL SHIPPING OUT</p>
                <p>13-08-2023 05:14</p>
            </div>
            <div class="list">
                <p>TO RECEIVE</p>
                <p></p>
            </div>
            <div class="list">
              <p>TO RATE</p>
              <p></p>
            </div>
        </div>



    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- Your form fields go here -->
    <label for="trackingCode">Tracking Code:</label>
    <input type="text" id="trackingCode" name="tracking_code" required>

    <label for="orderID">Order ID:</label>
    <input type="text" id="orderID" name="order_id" required>

    <label for="currentLocation">Current Location:</label>
    <input type="text" id="current_location" name="current_location">

    <label for="statusDetails">Status Details:</label>
    <input type="text" id="status_details" name="status_details">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div id="resultMessage"></div>



        <div class="extimated_time">
            <p>Delivery attempt should be made by 18-08-2023</p>
        </div>
      </div>

    <!--button-->
    <div class="buttons">
        <a href="#" id="receive_button" class="button">ORDER RECEIVED</a>
        <a href="#" class="button">CONTACT SELLLER</a>
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