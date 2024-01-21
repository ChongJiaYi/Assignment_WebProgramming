<?php

function generateRefundCode() {
    // Define the characters allowed in the refund code
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    // Set the length of the refund code
    $codeLength = 8;
    
    // Initialize an empty refund code
    $refundCode = '';

    // Generate a random refund code
    for ($i = 0; $i < $codeLength; $i++) {
        $refundCode .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $refundCode;
}

// Include the file with the getConnection() function
require 'connectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a function to generate refund codes
    $refundCode = generateRefundCode();
  
    // Change the field name to match your HTML form
    $orderId = $_POST["orderId"];
    $refundAmount = $_POST["refund_amount"];
    $reasonOfRefund = $_POST["reson_of_refund"];

    // Get the database connection 
    $conn = getConnection();  

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO refund (refund_code, order_id, refund_amount, reason_of_refund) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $refundCode, $orderId, $refundAmount, $reasonOfRefund);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Display a success message or redirect the user
    echo "<script>alert('Refund request submitted successfully!');</script>";
}

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


        .returntitle{
            text-align: left;
        }

        .returntitle h1{
            margin-left: 70px;
            margin-top: 55px;
            font-size: 60px;
        }

        .shoeimage{
            margin-left: 50px;
            margin-top: 30px;
        }

        .shoeimage img{
            width: 230px;
            height: 230px;
        }

        .productname{
            margin-left: 50px;
            width: 550px;
            margin-top: 20px;
            font-size: 20px;
        }

        .delivered{
            margin-left: 100px;
            width: 200px;
            margin-top: 20px;
            font-size: 20px;
            color: green;
        }

        .priceRM28{
            margin-left: 50px;
            width: 200px;
            margin-top: 90px;
            font-size: 25px;

        }

        .refundto{
            margin-left: 200px;
            width: 200px;
            margin-top:90px ;
            font-size: 25px;
        }

        .container1{
            display: flex;
            flex-direction: column;
        }

        .reason{
            margin-left: 175px;
            margin-top: 50px;
            color: rgb(68, 67, 67);
        }

        textarea{

            margin-left: 175px;
            background-color: rgb(196, 196, 196);
            border: solid 1px rgb(68, 67, 67);
            border-radius: 10px;
           

        }

        .message{
            width: 1050px;
            height: 200px;
        }

        label[for="photo"]{
            background-color:rgb(196, 196, 196); ;
            width: 250px;
            height: 250px;
            margin-top: 90px;
            margin-left: 200px;
            padding-top: 100px;
            padding-left: 90px;
        }

        label[for="video"]{
            background-color:rgb(196, 196, 196); ;
            width: 250px;
            height: 250px;
            margin-top: 90px;
            margin-left: 200px;
            padding-top: 100px;
            padding-left: 90px;
        }


        input[type="file"]{
            display: none;
        }

        input[type="submit"]{
            
            width: 220px;
            height: 70px;
            background-color: rgb(121, 122, 214);
            border:1px solid rgb(56, 35, 56) ;
            color: white;
            
        }

        .submit{
            margin-left: 200px;
            margin-top: 50px;
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

            <div class="returntitle">

            <h1>Request Return / Refund</h1>

            </div>

            <div class="container">
                <div class="shoeimage">
                    <img src="./WomenShoes.jpg">
                </div>

                <div class="container1">

                <div class="container">
                    <div class="productname">
                        <p>Women High Heels Shoes Casual Shoes Workplace Shoes</p>
                    </div>
                    <div class="delivered">
                        <p>Delivered</p>
                    </div>
                </div>

                <div class="container">
                    <div class="priceRM28">
                        <p>Price:</p>
                        <p>RM28</p>
                    </div>

                    <div class="refundto">
                        <p>Refund To:</p>
                        <p>E-wallet/Bank</p>
                    </div>
                </div>

                </div> 

            </div>

            <div class="reason">
                <h3>Reason</h3>
            </div>

            <<form id="returnForm" method="post" action="">
                <input type="hidden" name="order_id" value="your_order_id_here">

                <input type="text" name="refund_amount" placeholder="Enter refund amount" required>
                <textarea name="reson_of_refund" class="message"></textarea>

                <label for="photo">Add Photo</label>
                <input type="file" id="photo" name="photo" accept="image/*">

                <label for="video">Add Video</label>
                <input type="file" id="video" name="video" accept="video/*">

                <div class="submit">

                <input type="submit" id="submit" value="Submit">

                </div>

            </form>

            

            
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

        
    
    
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        document.getElementById("submit").addEventListener("click", function() {
            // Handle form submission here

            // Example: Display an alert for demonstration
            alert("Form submitted!");
        });
    </script>

  </body>
</html>