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
  // Retrieve data from the form
  $voucher_code = $_POST["voucher_code"];
  $voucher_type = $_POST["voucher_type"];
  $expired_date = $_POST["expired_date"];
  $quantity = $_POST["quantity"];
  $details = $_POST["details"];
  

  // Insert data into the database
  $query = "INSERT INTO voucher (voucher_code, voucher_type, expired_date, quantity, details) VALUES ('$voucher_code', '$voucher_type', '$expired_date', '$quantity', '$details')";

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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
    <style>
        
        body{
            background-color: rgb(253, 215, 239)
        }

        .header{
            height: 100px;
            width: 1380px;
            background-color: rgb(227, 198, 255);
        }

        .container,.container1{
            display: flex;
        }

        .searchbar{
            margin-top: 12px;
            margin-left: 150px;
         
            
        }

        .searchbar input[type="text"]{
            padding:6px;
            margin-top: 20px;
            margin-right:16px;
            border:none;
            font-size: 14px;
            border-radius: 5px;
            width:350px;
            background-color: rgb(121, 122, 214);
            text-align: center;
            
        }
       

        .searchicon{
            margin-left: 160px;
            margin-top: -28px;
        }

        .cameraicon{
            margin-left: 470px;
            margin-top: -24px;
        }

        .carticon{
            margin-left: 300px;
            margin-top: 20px;
            font-size: 45px;
        }

        .usericon{
            margin-left: 100px;
            margin-top: 20px;
            font-size: 45px;

        }

        .navbar{
            margin-top: -18px;
            margin-left: 400px;
            width: 400px;
        }

        .navbar a{
            padding:0;
            color: black;
            font-size: 10px;
            text-align: center;
            margin-left: -20px;
            display: block;
            text-decoration: none;
            
            
        }

        .voucher1{
            background-color: white;
            width: 500px;
            height: 215px;
            margin-left: 150px;
            margin-top: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .voucher2{
            background-color: white;
            width: 500px;
            height: 215px;
            margin-left: 50px;
            margin-top: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .vouchertitle{
            text-align: left;
        }

        .vouchertitle h1{
            margin-left: 150px;
            margin-top: 55px;
            font-size: 60px;
        }

        .discounticon{
            font-size: 120px;
            margin-left: 30px;
            margin-top: 20px;
        }

        .truckicon{
            font-size: 120px;
            margin-left: 30px;
            margin-top: 20px;
        }

        .discount{
            width: 400px;
            
        }

        .discount h1{
            font-size: 55px;
            margin-top: 20px;
            margin-left: 20px;
        }

        .discount p{
            margin-left: 20px;
            font-size: 16px;
        }

        .rect{
            width: 100px;
            height: 40px;
            border: solid black 1px;
            margin-left: 10px;
        }

        .rect p{
            font-size: 11px;
            margin-left: 17px;
            margin-top: 10px;
            text-align: left;
         
        }

        .expiring{
            color: gray;
        }

        .expiring p{
            font-size: 12px;
            margin-top: 8px;
        }

        .use{
            color: blue;
            font-size: 15px;
            margin-top: 5px;
            text-decoration: underline;
        }

        .use1{
            color: blue;
            font-size: 15px;
            margin-top: 5px;
            text-decoration: underline;
            margin-left: -40px;
        }

        .footer{
            background-color: rgb(121, 122, 214);
            height: 250px;
            width: 1380px;
            margin-top: 60px;
          
        }

        .category{
            margin-left: -100px;
            width: 350px;
            height: 100px;
            
           
            
        }

        .category p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
            
        
        }

        .category a{
            color: black;
            text-decoration: none;
            margin-top: 20px;
            font-size: 10px;
        }

        .aboutstore{
            margin-left: 50px;
            width: 350px;
            height: 100px;
            
        }

        .aboutstore p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
         
        }

        .aboutstore a{
            color: black;
            text-decoration: none;
            margin-top: 20px;
            font-size: 10px;
        }

        .customerinfo{
            margin-left: 50px;
            width: 350px;
            height: 200px;
        }

        .customerinfo p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
        }

        .customerinfo a{
            color:black;
            text-decoration: none;
            margin-top: 20px;
            font-size: 10px;
        }

        .paymentmethod{
            margin-left: 50px;
        }

        .paymentmethod p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;

        }

        .smallrect{
            width: 72px;
            height: 40px;
            background-color: white;
            margin-left: -10px;
            margin-top: 5px;
        }

        .smallrect1{
            width: 72px;
            height: 40px;
            background-color: white;
            margin-left: 5px;
            margin-top: 5px;
        }

        .smallrect img{
            width: 72px;
            height: 40px;
        }

        .smallrect1 img{
            width: 72px;
            height: 40px;
        }

        .logistic{
            margin-left: 50px;
        }

        .logistic p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
        }

        .followus{
            margin-left: 50px;
           
           
        }

        .followus p{
            margin-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
        }

        .followus a{
            color: black;
            text-decoration: none;
            margin-top: 10px;
            font-size: 10px;
            margin-left: 0px;
        }



             /*mobile size*/
     @media screen and (max-width:600px) {

.header{
    width: 100%;
}

.searchbar{

    margin-left: 5px;
 
    
}


.searchbar input[type="text"]{
 
    width:250px;

    
}

.searchicon{
    margin-left: 20px;

}

.cameraicon{
    margin-left: 230px;

}

.carticon{
    margin-left: 90px;
    font-size: 30px;
  
}

.usericon{
    margin-left: 20px;
    font-size: 30px;

}

.navbar{
    margin-left: 30px; 
    margin-top: 5px;

}

.vouchertitle h1{
    margin-left: 20px;
    margin-top: 30px;
    font-size: 30px;
}



.footer{
    width: 100%;

  
}

.category{
    margin-left: 0px;

    
}

.category p{
    font-size: 8px;
    

}

.category a{
    
    font-size: 9px;

}

.aboutstore{
    margin-left: 10px;
    
}


.aboutstore p{
    font-size: 8px;
 
}

.aboutstore a{
    font-size: 9px;
}

.customerinfo{
    margin-left: 10px;
}

.customerinfo p{
    font-size: 8px;
}

.customerinfo a{
    font-size: 9px;
}

.paymentmethod{
    margin-left: 10px;
}

.paymentmethod p{
    font-size: 8px;

}

.container1{
    display: flex;
    flex-direction: column;
}

.smallrect{
    width: 35px;
    height: 20px;
    margin-left: 10px;
  
    
}


.smallrect img{
    width: 35px;
    height: 20px;
   
}

.smallrect1{
    width: 35px;
    height: 20px;
    margin-left: 10px;

}

.smallrect1 img{
    width: 35px;
    height: 20px;
}

.logistic{
    margin-left: 10px;
}

.logistic p{
    font-size: 8px;
}

.followus{
    margin-left: 10px;
   
   
}

.followus p{
   
    font-size: 8px;
}

.followus a{
    font-size: 9px;
}

.voucher1{

            margin-left: 13px;
            width: 95%;
            height: 240px;
      
        }

        .voucher2{
            width: 95%;
            height: 240px;
            margin-left: 13px;
      
        }

        .rect{
            width: 80px;
            height: 54px;
 
        }

        .rect p{
            font-size: 9px;
        
         
        }





}

       /*Tablet size*/
    @media screen and (min-width:600px) and (max-width:800px){

.header{
    width: 100%;

}

.searchbar{

margin-left: 1px;

}

.searchicon{
    margin-left: 10px;

}

.cameraicon{
    margin-left: 320px;

}

.navbar{
    margin-left: 60px; 


}

.carticon{
    margin-left: 200px;
  
  
}


.usericon{
    margin-left: 20px;


}





.footer{
    width: 100%;

  
}


.category{
    margin-left: 0px;

    
}

.container1{
    display: flex;
    flex-direction: column;
}

.smallrect{
    width: 40px;
    height: 23px;
    margin-left: 10px;
  
    
}


.smallrect img{
    width: 40px;
    height: 23px;
   
}

.smallrect1{
    width: 40px;
    height: 23px;
    margin-left: 10px;

}

.smallrect1 img{
    width: 40px;
    height: 23px;
}

.voucher2{
           
            margin-left: 150px;
      
        }



 }




    </style>
  </head>
  <body>

 

    <div class="header">
        <div class="container">
            <div class="searchbar">
                <input type="text" class="searchbar" placeholder="Search">
                <div class="searchicon">
                    <i class="fa-solid fa-magnifying-glass" style="color: black;"></i>
                </div>

                <div class="cameraicon">
                    <i class="fa-solid fa-camera" style="color: black;"></i>
                </div>

            </div>

            <div class="carticon">
                <i class="fa-solid fa-cart-shopping" style="color: black;"></i>
            </div>

            <div class="usericon">
                <i class="fa-solid fa-circle-user" style="color: black;"></i>
            </div>
    
            </div>

            <div class="navbar">
                <a href="#myvoucher">My Voucher</a>
                <a href="#wishlist">Wishlist</a>
                <a href="#Product Recommended">Product Recommended</a>
                <a href="#Promotion">Promotion</a>
                <a href="#Customer Service">Customer Service</a>
    
            </div>

    </div>

            <div class="vouchertitle">

            <?php

            echo "<h1>My Voucher</h1>";
            ?>

            </div>

            <div class="container1">
                <div class="voucher1">
                    <div class="container">
                        <div class="discounticon">
                        <i class="fa-solid fa-tag"></i>
                        </div>

                        <div class="discount">
                            <h1>20% off</h1>
                            <p>Min spend RM200 capped at RM250</p>
                            <div class="container">
                                <div class="rect">
                                    <p>J&T Express</p>
                                </div>

                                <div class="rect">
                                    <p>Ninja Van</p>
                                </div>

                                <div class="rect">
                                    <p>New User</p>
                                </div>
                            </div>

                            <div class="expiring">
                                <p>Expiring: 10 hours left</p>
                            </div>
                        </div>

                        <div class="use1">
                            <p>USE</p>
                        </div>

                        

                    </div>

                </div>
           

                <div class="voucher2">
                    <div class="container">
                        <div class="discounticon">
                            <i class="fa-solid fa-tag"></i>
                        </div>

                        <div class="discount">
                            <h1>10% off</h1>
                            <p>Min spend RM 50 capped at RM 100</p>

                            <div class="container">
                                <div class="rect">
                                    <p>Post Laju</p>
                                </div>

                                <div class="rect">
                                    <p>Ninja Van</p>
                                </div>
                            </div>

                                <div class="expiring">
                                    <p>Expiring: 2 days 18 hours left</p>
                                
                                </div>

                            
                        </div>

                        <div class="use">
                            <p>USE</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container1">

            <?php

            //PHP code for generating vouchers dynamically
            for($i=1;$i<=2;$i++){
                echo '<div class="voucher' . $i . '">';
                echo '<div class="container">';
                echo '<div class="discounticon">';
                echo '<i class="fa-solid fa-tag"></i>';
                echo '</div>';
                echo '<div class="discount">';
                echo '<h1>15% off</h1>';
                echo '<p>Min spend RM 150 capped at RM 220</p>';
                echo '<div class="container">';
                echo '<div class="rect">';
                echo '<p>J&T Express</p>';
                echo '</div>';
                echo '<div class="rect">';
                echo '<p>Fed Express</p>';
                echo '</div>';
                echo '</div>';
                echo '<div class="expiring">';
                echo '<p>Expiring: 20 hours left</p>';
                echo '</div>';
                echo '</div>';
                echo '<div class="use">';
                echo '<p>USE</p>';
                echo '</div>';
                echo '</div>';
                echo ' </div>';



            }
            ?>
               
        </div>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="mb-3">
    <label for="voucherCode" class="form-label">Voucher Code:</label>
    <input type="text" class="form-control" name="voucher_code" id="voucher_code">
  </div>

  <div class="mb-3">
    <label for="voucherType" class="form-label">Voucher Type:</label>
    <input type="text" class="form-control" name="voucher_type" id="voucher_type">
  </div>

  <div class="mb-3">
    <label for="expiredDate" class="form-label">Expired Date:</label>
    <input type="date" class="form-control" name="expired_date" id="expired_date">
  </div>

  <div class="mb-3">
    <label for="quantity" class="form-label">Quantity:</label>
    <input type="number" class="form-control" name="quantity" id="quantity">
  </div>

  <div class="mb-3">
    <label for="details" class="form-label">Details:</label>
    <input type="text" class="form-control" name="details" id="details">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        <div class="footer">

        <div class="container">

            <div class="category">
                <p>Category</p>
                <a href="#menscloth">Men's Cloth</a><br>
                <a href="#womencloth">Women's Cloth</a>
            </div>

            <div class="aboutstore">
                <p>About Store</p>
                <a href="#voucher">Voucher</a><br>
                <a href="#promotion">Promotion</a>
            </div>

            <div class="customerinfo">
                <p>Customer Info</p>
                <a href="#wishlist">Wishlist</a><br>
                <a href="#refundandreturn">Refund & Return</a><br>
                <a href="#customerservice">Customer Service</a><br>
                <a href="#contactus">Contact Us</a>
            </div>

            <div class="paymentmethod">
                <p>Payment Method</p>
                <div class="container1">
                    <div class="smallrect">
                        <img src="Desktop/fpx.png">

                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/visa.png">
                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/applepay.png">

                    </div>

                </div>

                <div class="container1">
                    <div class="smallrect">
                        <img src="Desktop/touchandgo.png">

                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/Mastercard_logo.png">

                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/maybank.png">

                    </div>
                </div>
            </div>

            <div class="logistic">
                <p>Logistic</p>
                <div class="container1">
                    <div class="smallrect">
                        <img src="Desktop/ninjavan.png">

                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/JT_Express.png">


                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/poslaju.png">

                    </div>
                </div>

                <div class="container1">
                    <div class="smallrect">
                        <img src="Desktop/fedex.png">

                    </div>

                    <div class="smallrect1">
                        <img src="Desktop/dhl.jpeg">

                    </div>

                </div>


            </div>

            <div class="followus">
                <p>Follow Us</p>
                <a href="#facebook">Facebook</a>
                <a href="#instagram">Instagram</a>
                <a href="twitter">Twitter</a>

            </div>

         </div>

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