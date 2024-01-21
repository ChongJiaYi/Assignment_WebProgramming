
    
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!--Icon-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <!--FontFamily-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro:wght@400;700&display=swap">

    <link rel="stylesheet" href="homepage.css">
</head>
<style>
    body {
        background-color: #FFF2F2;
        margin: 0;
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

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./landingpage (1).jpg" class="d-block w-100" alt="landingpage1">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption1">
              <h5>Hight Fashion</h5>
              <p style="width: 450px;">We believe fit and fashion go hand to hand; our expertly-crafted garments make zero copromises. We
                are so glad you've find us. Let's find more good stuff together!
              </p>
              <button class="btn btn-primary" onclick="window.location.href = 'productDetails_Women.php'">Shop Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./landingpage (3).jpg" class="d-block w-100" alt="landingpage3">
            <div class="carousel-caption d-none d-md-block" id="carousel-caption2">
              <h5>Winter Collection</h5>
              <p style="width: 450px;">Combine the winter style we will have.Refresh your style with on-trend piesces from our clothing collection.</p>
              <a href="productDetails_Men.php">
              <button class="btn btn-primary" onclick="window.location.href = 'productDetails_Men.php'">Shop Now</button>
              </a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--Category-->
      <div class="content_1" style="justify-content: center; margin-bottom: 30px;">
        <div class="card text-center mb-3" style="width:40%; margin: 20px;">
          <img src="./landingpage (6).jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Women Fashion</h5>
            <button class="btn btn-primary" onclick="window.location.href = 'productDetails_Women.php'">Shop Now</button>
          </div>
        </div>

        <div class="card text-center mb-3" style="width:40%; margin: 20px;">
          <img src="./landingpage (5).jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Men Fashion</h5>
            <button class="btn btn-primary" onclick="window.location.href = 'productDetails_Men.php'">Shop Now</button>
          </div>
        </div>
      </div>

      <!--Voucher-->
      <div class="vouvher_information">
          <div class="voucher">
              <div class="col">
                  <h4>10% OFF</h4>
                  <p>ON ORDER OF RM50</p>
              </div>
              <div class="vertical_line"></div>

              <div class="col">
                  <h4>15% OFF</h4>
                  <p>ON ORDER OF RM100</p>
              </div>
              <div class="vertical_line"></div>

              <div class="col">
                  <h4>20% OFF</h4>
                  <p>ON ORDER OF RM200</p>
              </div>
            <div class="vertical_line"></div>

              <div class="col">
                  <h4>30% OFF</h4>
                  <p>ON ORDER OF RM350</p>
              </div>
          </div>
      </div>

      <!--daily fresh-->
      <div class="categories spad">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3">
                      <div class="flashsale_text">
                          <h2>Clothings Hot</h2>
                          <h2 id="flashsale_text">Collection</h2>
                          <h2>Accessories</h2>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="flashsale_image">
                          <img src="./flashsale_copy.jpg" alt="pink sweater">
                          <div class="flashsale_pricelabel">
                              <h5></h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-5">
                      <div class="flashsale_countdown">
                          <h5>DEAL OF THE MONTH</h5>
                          <h2>Winter Session Unisex Pink Sweater</h2>
                          <div class="flashsale_timer" id="timer">
                                <div class="cd-item" ><span id="days">00</span> <p>Days</p> </div>
                                <div class="cd-item" ><span id="hours">00</span> <p>Hours</p> </div>
                                <div class="cd-item" ><span id="minutes">00</span> <p>Minutes</p> </div>
                                <div class="cd-item" ><span id="seconds">00</span> <p>Seconds</p> </div>
                          </div>
                          <button class="btn btn-primary" onclick="window.location.href = 'productDetails_Men.php'">Shop Now</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

        <!--countdown timer-->
        <script>
          const countdown = new Date("March 1 , 2024 00:00:00").getTime();
          const x = setInterval(function(){
                const currentDateTime = new Date().getTime();
                const distance = countdown - currentDateTime;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML =addLeadingZero(days);
                document.getElementById("hours").innerHTML = addLeadingZero(hours);
                document.getElementById("minutes").innerHTML = addLeadingZero(minutes);
                document.getElementById("seconds").innerHTML = addLeadingZero(seconds);
          }, 1000);

            function addLeadingZero(number) {
                return number < 10 ? "0" + number : number;
              }
      </script>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
