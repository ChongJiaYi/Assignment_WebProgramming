<?php

include './header_footer/adminPortal.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller Dashboard</title>

    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
  </head>
  <style>
    body{
        background-color:#FFF2F2;
    }

    .side_bar{
        height: auto;
        background-color: white;
    }

    .side_bar a{
        padding: 30px;
        text-align: center;
        display: block;
        text-decoration: none;
        font-size: 18px;
        color: black;
    }

    .side_bar a:hover{
        background-color: black;
        color: white;
    }

    .flex_item{
        display: flex;
    }

    .admin_record{
        display: flex;
        justify-content: space-between;
        background:white;
        width: 100%;
        height: 100px;
        margin-right:20px;
    }

    .content_1{
        font-family: "Montserrat", sans-serif;
        padding: 20px;
    }

    .content_2 i{
        font-size: 50px;
        padding: 20px;
    }

    .recentOrder{
        background:white;
        margin-top: 30px;
        width:100%;
        margin-right:20px;
        padding:20px;
    }

    .recentOrder h4{
        font-family: "Montserrat", sans-serif;
        font-size: 30px;
        padding: 15px 0px 15px 0px;
    }

  </style>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="side_bar">
                    <a href="  ">Dashboard</a>
                    <a href="  ">Profile</a>
                    <a href="  ">Inventory</a>
                    <a href="  ">Product Management</a>
                    <a href="  ">Message</a>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="flex_item">
                    <div class="admin_record">
                        <div class="content_1">
                            <p>Customer</p>
                            <h5>30</h5>
                        </div>
                        <div class="content_2">
                            <i class="fa-solid fa-person" style="color: #7286d3;"></i>
                        </div>
                    </div>

                    <div class="admin_record">
                        <div class="content_1">
                            <p>Product Sold</p>
                            <h5>20</h5>
                        </div>
                        <div class="content_2">
                            <i class="fa-solid fa-shop" style="color: #7286d3;"></i>
                        </div>
                    </div>

                    <div class="admin_record">
                        <div class="content_1">
                            <p>Revenue</p>
                            <h5>RM 2999</h5>
                        </div>
                        <div class="content_2">
                            <i class="fa-solid fa-dollar-sign" style="color: #7286d3;"></i>
                        </div>
                    </div>
                </div>

                <!--Order record table-->
                <div class="recentOrder">
                    <h4>Recente Order</h4>
                    <hr>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Order DateTime</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><!--retrieve data from database-->
                                <td>CID27363743984</td>
                                <td>2024-01-09</td>
                                <td>Order123456765</td>
                                <td>Cancel</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>