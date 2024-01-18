<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve product information from the database
$productCode = 1; // Set the product code you want to retrieve
$sql = "SELECT * FROM women_product WHERE women_code = $productCode";
$result = $conn->query($sql);

// Fetch product details
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = $row["product_name"];
        $productPrice = $row["price"];
        $productImage = $row["product_image"];
        $category = $row["category"];
    }
} else {
    echo "No product found";
}

$conn->close();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Description</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>

    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
         body{
          background-color:#FFF2F2;
        }


        .main_content{
            margin-top: 70px;
        }

        .image-container {
          position: relative;
          width: 100%;
          height: 100%;
          overflow: hidden;
        }

        .normal-image, .hover-image {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          transition: opacity 0.1s;
        }

        .hover-image,.image-container:hover .normal-image {
          opacity: 0;
        }

        .image-container:hover .hover-image {
          opacity: 1;
        }
          

        #size_color{
            display: flex;
            margin-left: 20px;
        }

        #cloth_size{
            margin-left: 20px;
        }

        #cloth_color{
          margin-left: 10px;
        }

        #button{
          width: 200px;
          height: 40px;
          background-color: #000000;
          border: 0px;
          border-radius: 0px;
        }

        .text-primary small{
            color:rgb(140, 140, 14);
        }

        #product_title{
          font-size: 40px;
          font-family: 'Times New Roman', Times, serif;
        }

        .fd-flex{
          justify-content: center;
        }

        .description{
            background-color:white;
            width: auto;
            height: 840px;
            margin: 50px;
            border-radius: 10px;
            padding-top: 30px;
        }

        .description h4{
          margin-left: 100px;
          font-family: "Montserrat", sans-serif;
          background-color: rgba(212, 212, 212, 0.349);
          width: 930px;
          height: 50px;
          padding-top: 10px;
          padding-left: 20px;
        }

        .description_title{
          color: grey;
        }

        .description_content{
          display: flex;
          margin-left: 100px;
          padding: 20px;
        }

        .description_content p,
        .notification p{
          padding: 10px;
          font-family: "Montserrat", sans-serif;
        }

        .description_text{
          margin-left: 50px;
        }

        .notification{
          margin-left: 100px;
          padding: 20px;
        }

        .input-group button{
            background-color: #000000;
            border: 0px;
            border-radius: 0px;
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


  <!--Main Content-->
  <div class="main_content">
  <form action="process_form.php" method="post" class="form-inline my-2 my-lg-0">
    <div class="row px-xl-5" style="margin: auto;">
        <div class="col-lg-4 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                      <div class="image-container">
                        <img class="w-100 h-100" src="./dress (3).jpg" alt="Image">
                        <img src="./dress_hover.jpg" alt="Hover Image" class="hover-image">
                      </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!--spacing-->
        <div class="col-lg-1 pb-5"></div>
    
        <!--Stars Rating-->
        <div class="col-lg-7 pb-5"> 
            <h3 class="font-weight-semi-bold" id="product_title">Women Sleeveless Strappy Summer Long Dress</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            <h2 class="font-weight-semi-bold">RM 50.00</h2>
            <p class="mb-4">Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy. Accus labore stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum diam et rebum kasd rebum.</p>
            <h6>Shipping Fee: Free Shipping</h6>
            <h6>Protection: Damage Protection</h6>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                <form id="size_color">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_size" name="size">
                        <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                        <label class="custom-control-label" for="size-1">XS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_size" name="size">
                        <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                        <label class="custom-control-label" for="size-2">S</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_size" name="size">
                        <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                        <label class="custom-control-label" for="size-3">M</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_size" name="size">
                        <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                        <label class="custom-control-label" for="size-4">L</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_size" name="size">
                        <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                        <label class="custom-control-label" for="size-5">XL</label>
                    </div>
                </form>
            </div>
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                <form id="size_color">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_color" name="color">
                        <label class="custom-control-label" for="color-1">Black</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_color" name="color">
                        <label class="custom-control-label" for="color-2">White</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_color" name="color">
                        <label class="custom-control-label" for="color-3">Red</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_color" name="color">
                        <label class="custom-control-label" for="color-4">Blue</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="cloth_radio" name="color">
                        <label class="custom-control-label" for="color-5">Green</label>
                    </div>
                </form>
            </div>
            <div class="d-flex align-items-center mb-4">
                <div class="input-group quantity " style="width: 130px;" >
                      <div class="input-group-btn">
                          <button class="btn btn-primary btn-minus" >
                          <i class="fa fa-minus"></i>
                          </button>
                      </div>
                      <input type="text" class="form-control text-center" value="1">
                      <div class="input-group-btn">
                          <button class="btn btn-primary btn-plus">
                              <i class="fa fa-plus"></i>
                          </button>
                      </div>
                </div>
            </div>  
            <a href="shopping_cart.html"><button class="btn btn-primary px-3" id="button"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button></a>
            <a href="checkOut.html"><button class="btn btn-primary px-3" id="button"><i class="fa fa-shopping-cart mr-1"></i> Buy Now</button></a>
        </div>

        <script>
        var productName = "<?php echo $productName; ?>";
        var productPrice = "<?php echo $productPrice; ?>";
        var productImage = "<?php echo $productImage; ?>";
        var category = "<?php echo $category; ?>";
    </script>

    </div>
  </div>
  </form>

  <!--Product Description-->
  <div class="description">
    <h4>Product Specification</h4>
      <div class="description_content">
          <div class="description_title">
            <p>Category</p>
            <p>Sleeve Length</p>
            <p>Ship From</p>
            <p>Occasion</p>
            <p>Material</p>
          </div>
          <div class="description_text">
            <p>Women</p>
            <p>Tank</p>
            <p>Malaysia</p>
            <p>Casual</p>
            <p>Linen</p>
          </div>
      </div>
      <br>
      <h4>Product Description</h4>
      <div class="notification">
          <p>~ Size may be 2cm/1 inch inaccuracy due to hand measure.</p>
          <p>~ Color may be little different due to monitor.</p>
          <p>~ The actual color may be slightly different from the pictures dues to different settings of devices.</p>
          <p>~ Thank for reading and understanding !</p>
      </div>
  </div>

  
  <!--Fotter-->
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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>