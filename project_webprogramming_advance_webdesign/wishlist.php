<?php
// Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="e_commerce_system";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch wishlist items
$customerId = "customer_id"; 
$sql = "SELECT * FROM wishlist WHERE customer_id = '$customerId'";
$result = $conn->query($sql);

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




        .wishlisttitle{
            text-align: left;
        }

        .wishlisttitle h1{
            margin-left: 70px;
            margin-top: 55px;
            font-size: 60px;
        }

        .rect{
            width: 1050px;
            height: 260px;
            background-color: white;
            margin-top: 50px;
            margin-left: 150px;
        }

        .orderdetail{
            margin-left: 90px;
            margin-top: 20px;
        }

        .colorpink{
            margin-left: 0px;
            color: grey;
        }

        .button{
            width: 150px;
            height: 40px;
            background-color: rgb(121, 122, 214);
            border:1px solid rgb(56, 35, 56) ;
            color: white;
        }

        .edit{
            margin-left: 0px;
            margin-top: 30px;
            
        }

        .edit a{
            color: gray;
            text-decoration: none;
        }

        .remove{
            margin-left: 60px;
            margin-top: 30px;
           
        }

        .remove a{
            color: gray;
            text-decoration: none;
        }

        .whiteblose{
            margin-left: 330px;
            margin-top: 20px;
        }


        .whiteblose img{
            height: 220px;
            width: 220px;
        }

        .sweater{
            margin-left: 260px;
            margin-top: 20px;
        }


        .sweater img{
            height: 220px;
            width: 220px;
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

            <div class="wishlisttitle">

            <h1>My Wishlist</h1>

            </div>

            <?php


             // Display wishlist items
             if ($result->num_rows > 0) {
             while ($row = $result->fetch_assoc()) {
              // Display each wishlist item based on your HTML structure
                echo '<div class="rect">';
                echo '<div class="container">';
                echo '<div class="orderdetail">';
                echo '<p>' . $row["list_code"] . '</p>';
                echo '<p>' . $row["women_product_details_code"] . '</p>'; // Replace with the actual column name for product details code
                echo '<div class="colorpink">';
                echo '<p>Quantity: ' . $row["quantity"] . '</p>'; // Replace with the actual column name for color
                echo '<p>Date: ' . $row["date"] . '</p>';
                echo '</div>';

                echo '<a href="shopping_cart.php"><button class="button">Add To Cart</button></a>';

                echo '<div class="container">';
                echo '<div class="edit">';
                echo '<a href="#edit">Edit</a>';
                echo '</div>';
                echo '<div class="remove">';
                echo '<a href="#remove">Remove</a>';
                echo '</div>';
                echo '</div>';
        
                echo '</div>';
        
                echo '<div class="whiteblose">';
                echo '<img src="./WhiteBlouse.jpg">'; // Replace with the actual column name for image path
                echo '</div>';
        
                echo '</div>';
                echo '</div>';
               }
             } else {
            echo '<p>No items in your wishlist</p>';
            }

           // Close database connection
            $conn->close();
            ?>

            <div class="rect">

                <div class="container">
                    <div class="orderdetail">
                        <p>#05140808KRNS17</p>
                        <p>Korean Style Women Long Sleeve Blouse</p>
                        <div class="colorpink">
                        <p>Color: Pink,L</p>
                        </div>

                        <a href="shopping_cart.php"><button class="button">Add To Cart</button></a>

                        <div class="container">

                        <div class="edit">
                            <a href="#edit">Edit</a>
                        </div>
                        <div class="remove">
                            <a href="#remove">Remove</a>
                        </div>

                        </div>
                    </div>

                    <div class="whiteblose">
                        <img src="./WhiteBlouse.jpg">
                    </div>
                </div>

            </div>


            <div class="rect">

                <div class="container">
                    <div class="orderdetail">
                        <p>#018576SYBH08628</p>
                        <p>Knitted Long Sleeve Loose Women Casual Outwear</p>
                        <div class="colorpink">
                        <p>Color:Khaki , Free Size</p>
                        </div>

                        <a href="shopping_cart.php"><button class="button">Add To Cart</button></a>

                        <div class="container">

                        <div class="edit">
                            <a href="#edit">Edit</a>
                        </div>
                        <div class="remove">
                            <a href="#remove">Remove</a>
                        </div>

                        </div>
                    </div>

                    <div class="sweater">
                        <img src="./SweaterCoffee.jpg">
                    </div>
                </div>

            </div>

            
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
  </body>
</html>