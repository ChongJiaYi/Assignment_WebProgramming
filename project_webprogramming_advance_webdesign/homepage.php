<?php
include './header_footer/header.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    
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

        .form-control {
            width: 400px;
            background-color: #7286D3;
            border-radius: 20px 0 0 20px;
            /* Rounded left corners */
        }

        .d-block{
            width: auto;
            height: 660px;
        }

        #carousel-caption1{
            text-align: left;
        }

        #carousel-caption1 p{
            width:450px;
        }

        #carousel-caption2{
            text-align: right;
            color: #000000;
        }

        #carousel-caption2 p{
            margin-left: 400px;
        }

        .carousel-caption{
            justify-content: center;
            align-items: center;
            height: 70%;
        }

        .carousel-caption button, .card-body button{
            background-color: #313339;
            height: 40px;
            width: 100px;
            border: 0px;
            border-radius: 10px;
            font-family:'Slabo', serif;
            color: white;
        }

        .carousel-caption h5{
            font-size: 70px;
            font-family:'Slabo', serif;
        }


        .content_1{
            display: flex;
            padding-bottom: 50px;
        }

        .card{
            margin: 50px;
        }

        .card-img-top{
            width:auto;
            height:300px;
        }

        .voucher{
            display: flex;
            background-color: black;
            width: 100%;
            border-radius: 10px;
        }

        .col{
            text-align: center;
            margin-top: 20px;
            color: white;
        }

        .vertical_line{
            border: 1px solid rgba(255, 255, 255);
            height: 100px;
        }



        .flashsale_body{
            width: 100%;
            height: 500px;
            background-color: white;
            border-radius: 10px;
        }

        .flashsale_image img{
            width: auto;
            height: 400px;
            margin-top: 50px;
        }

        .flashsale_text{
            margin-top: 160px;
        }

        .flashsale_text h2 {
            padding-bottom:20px ;
            font-family: "Montserrat", sans-serif;
            color: #8584849d;
        }

        #flashsale_text{
            font-family: "Montserrat", sans-serif;
            font-size: 35px;
            padding-bottom: 20px;
            color: #000000;
        }

        .flashsale_countdown{
            margin-top: 100px;
        }

        .flashsale_countdown h5{
            color: rgb(250, 95, 95);
            font-family: "Montserrat", sans-serif;
            margin-bottom: 20px;
        }

        .flashsale_countdown h2{
            font-size: 40px;
            margin-bottom: 20px;
        }

        .flashsale_countdown button{
            background-color: #000000;
            height: 40px;
            width: 120px;
            border: 0px;
            font-family:'Slabo', serif;
            color: white;
            margin-top: 20px;
        }

        .flashsale_timer{
            display: flex;
        }

        .cd-item {
            flex-basis: 150px;
        }

        .cd-item span{
            font-size: 40px;
            margin-bottom: 20px;
            font-family: 'Kdam Thmor Pro', sans-serif;
        }

        .cd-item p{
            font-size: 15px;
        }

        /* mobile size*/
        @media only screen and (max-width: 600px){

            .d-block{
                width: auto;
                height: auto;
            }

            #carousel-caption1{
                text-align: left;
            }

            #carousel-caption1 p{
                font-size: 12px;
                width:150px;
            }

            #carousel-caption2{
                text-align: right;
                color: #000000;
            }

            #carousel-caption2 p{
                margin-left: 200px;
                font-size: 12px;
                width: 150px;
            }

            .carousel-caption{
                justify-content: center;
                align-items: center;
                height: 80%;
            }

            .carousel-caption button, .card-body button{
                height: 30px;
                width: 80px;
                font-size:12px;
            }

            .carousel-caption h5{
                font-size: 25px;
                font-family:'Slabo', serif;
            }

            

            .content_1{
                display: block;
                padding-bottom: 20px;
            }

            .card-img-top{
                width:auto;
                height:220px;
            }

            #voucher_hidden{
                display: none;
            }

            .flashsale_body{
                height: 700px;
            }

            .flashsale_text h2 {
                margin-left: 30px;
                font-size: 25px;
                margin-bottom: 10px;
            }

            .flashsale_image {
                text-align: center;
            }

            .flashsale_image img {
                width: auto;
                height: 300px; 
                margin-top: -280px;
                margin-left: 200px;
            }

            .flashsale_countdown {
                margin-top: 20px;
                text-align: center;
            }

            .flashsale_countdown h5 {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .flashsale_countdown h2 {
                font-size: 25px;
                margin-bottom: 10px;
            }

            .flashsale_countdown button {
                height: 30px;
                width: 100px;
                margin-top: 10px;
            }
        }
    </style>
  </head>

  <body>
    <div class="landing_page">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assignment_image/landingpage (1).jpg" class="d-block w-100" alt="landingpage1">
                    <div class="carousel-caption" id="carousel-caption1">
                        <h5>Hight Fashion</h5>
                        <p>We believe fit and fashion go hand to hand; our expertly-crafted garments make zero copromises. 
                            Let's find more good stuff together!
                        </p>
                        <a href="../project_webprogramming_advance_webdesign/productDetails_Women.html">
                            <button type="button">Shop Now</button>
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assignment_image/landingpage (3).jpg" class="d-block w-100" alt="landingpage3">
                    <div class="carousel-caption" id="carousel-caption2">
                        <h5>Winter Collection</h5>
                        <p>Combine the winter style we will have.Refresh your style with on-trend piesces from our clothing collection.</p>
                        <a href="../project_webprogramming_advance_webdesign/productDetails_Men.html">
                            <button type="button">Shop Now</button>
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
    </div>

    <!--Category-->
        <div class="home_page_category">
            <div class="content_1" >
                <div class="card text-center mb-3">
                    <img src="assignment_image/landingpage (6).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Women Fashion</h5>
                        <a href="../project_webprogramming_advance_webdesign/productDetails_Women.html">
                            <button type="button">View More</button>
                        </a>
                    </div>
                </div>

                <div class="card text-center mb-3">
                    <img src="assignment_image/landingpage (5).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Men Fashion</h5>
                        <a href="../project_webprogramming_advance_webdesign/productDetails_Men.html">
                            <button type="button">View More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <!--Voucher display-->
    <div class="voucher_display">
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

              <div class="col" id="voucher_hidden">
                  <h4>20% OFF</h4>
                  <p>ON ORDER OF RM200</p>
              </div>
            <div class="vertical_line" id="voucher_hidden"></div>

              <div class="col" id="voucher_hidden">
                  <h4>30% OFF</h4>
                  <p>ON ORDER OF RM350</p>
              </div>
          </div>
      </div>
    </div>

    <!--daily fresh-->
    <div class="flashsale_body spad">
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
                          <img src="assignment_image/flashsale_copy.jpg" alt="pink sweater">
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
                            <a href="../project_webprogramming_advance_webdesign/productDetails_Men.html">
                                <button type="button">Shop Now</button>
                            </a>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<?php
include './header_footer/footer.php';
?>