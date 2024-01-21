<?php
    include "connectDB.php";
    $sql = "SELECT * FROM women_product";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Invalid" . $conn->error);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Women Cloth</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    
    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
    background-color:#FFF2F2;
}

.all_part{
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
}

.all_part_left{
    display: flex;
}

.Categories{
    margin-left: 60px;
    margin-top: 10px;
}

.Categories a{
    text-decoration: none;
    color: black;
}

.title{
    margin-left: 150px;
}

.title h3{
    font-family:'Slabo', serif;
    font-size: 50px;
}

.title p{
    color: gray;
    font-family:'Slabo', serif;
    margin-left: 10px;
}

.all_part_right{
    display: flex;
    margin-right: 60px;
    margin-top: 10px;
}

.all_part_right select{
    height: 50px;
}

.all_part_right p{
    width: 100px;
    margin-right: 10px;
    margin-top: 15px;
}

#product_image{
    width: auto;
    height: 350px;
}

.main_content{
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

  <!--Top Content-->
  <div class="all_part">
    <div class="all_part_left">
        <div class="Categories">
              <h4>Categories</h4>
              <a href="productDetails_Women.php">Female Cloth</a><br>
              <a href="productDetails_Men.php">Male Cloth</a>
        </div>

        <div class="title">
              <h3>Women Cloth</h3>
              <p>Showing results for Women's Cloth</p>
        </div>
    </div>

    <div class="all_part_right">
            <!-- Assuming 'search_results.php' is the PHP file to handle the form submission -->
            <p>Sort By</p>
            <select class="form-select" aria-label="Default select example" name="sorting_option">
                <option selected>Select</option>
                <option value="1">Lowest Price</option>
                <option value="2">Highest Sales</option>
            </select>

    </div>
</div>
<hr>
<br>

  <!--Main Content-->
  <div class="main_content">
        <div class="row px-xl-5" style="margin: auto;">
            <?php

            
            // Loop through the fetched data and generate HTML for each product
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <form action="" method="post">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" id="product_image" src="./<?php echo $row['PRODUCT_IMAGE']; ?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 style="height: 40px;"><?php echo $row['PRODUCT_NAME']; ?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6>RM<?php echo $row['PRICE']; ?></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                        
                                <a href="productDescription_Women_1.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="shopping_cart.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                <input type="hidden" name="product_id" value="<?php echo $row['WOMEN_CODE']; ?>">
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            }
            ?>
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