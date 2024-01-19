<?php

include("userProfileDB.php");

$pic_uploaded = false;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $birthdate = $_POST['birthdate'];

    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        if (!empty($image)) {
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/userprofile/photo/';
            $target_file = $target_dir . $image;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $picname = basename($image);
            $photo = time() . $picname;

            if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                ?>
                <script>
                    alert("Please upload a photo with the extension .jpg/.jpeg/.png");
                </script>
                <?php
            } elseif ($_FILES["image"]["size"] > 2000000) {
                ?>
                <script>
                    alert("Your photo exceeds the size limit of 2MB");
                </script>
                <?php
            } else {
                $pic_uploaded = move_uploaded_file($image_tmp, $target_file);
            }
        }
    }

    if ($pic_uploaded) {
        $insert_query = mysqli_query($conn, "INSERT INTO userprofile SET username='$username',fullname='$fullname',email='$email',phonenumber='$phonenumber',gender='$gender',birthdate='$birthdate',image='$image'");

        if ($insert_query) {
            ?>
            <script>
                alert("Upload successful");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Error inserting into database: <?php echo mysqli_error($conn); ?>");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Image not uploaded");
        </script>
        <?php
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

        body{
          background-color:#FFF2F2;
        }


    

        .header_profileIcon i{
          color: #8EA7E9;
          text-decoration: none;
          font-size: 35px;
          margin-top: 20px;
          margin-right: 30px;
        }

        
        .title{
          margin:50px;
        }

        .left_content1{
          margin-left: 30px;
          height: 450px;
          width: 280px;
          background-color:white;
        }

        .profile_icon i{
          font-size: 40px;
          margin-top: 20px;
          margin-left:25px;
          color: #8EA7E9;
        }

        .profile_icon p{
          margin-left: 15px;
          font-size: 20px;
          display:inline-block;
        }

      

        .select_bar a{
          display: block;
          font-size: 20px;
          color: black;
          text-decoration: none;
          text-align: center;
          padding: 15px;
        }
        .select_bar a:hover{
            background-color: #555;
            color: white;
        }

        .right_content1{
          display: flex;
          width: 100%;
          height: 500px;
          background-color: white;
          margin-left: 20px;
          margin-right: 30px;
        }

   

        .main_content{
          display: flex;
        }

        #top{
          margin-top: 80px;
        }

        .user_info{
          margin-top: 20px;
          margin-left: 60px;
          display: flex;
        }

        .form-control1{
          width: 400px;
          background-color: hsla(0, 0%, 70%, 0.635);
          
        }

        .label{
          width: 200px;
          font-size: 20px;
        }

        .vertical_line{
          border: 1px solid rgba(0, 0, 0, 0.422);
          height: 500px;
          margin-left: 50px;
        }

        .user_image{
          display: flex;
          flex-direction: column;
          align-items: center;
          margin-top: 150px;
          margin-left: 45px;
        }

        .user_image i{
          font-size: 100px;
          color: #8EA7E9;
        }

        .user_image button{
          margin-top: 20px;
          background-color: #7286D3;
        }

        .submitBtn{
          width: 120px;
          height: 53px;
          background-color: #7286D3;
          margin-top: 40px;
          margin-left: 550px;
          font-size: 20px;
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


    <div class="title">
      <h2>My Profile</h2>
      <p>Manage and protect your account</p>
    </div>

    <div class="main_content">
        <div class="left_content1">
            <div class="profile_icon">
                <i class="fa-solid fa-circle-user"></i>
                <p>User name</p>
                <hr>
            </div>

            <div class="select_bar">
              <a href="userProfile.html">My Profile</a>
              <a href="voucher.html">My Voucher</a>
              <a href="orderhistory.html">Order History</a>
              <a href="review.html">My Review</a>
              <a href="wishlist.html">Wishlist</a>
            </div>
        </div>


        <div class="right_content1">
            <form action="" method="post">
                <div class="user_info" id="top">
                  <div class="label">
                      <label class="col-form-label">Username </label>
                  </div>
                  <div class="text">
                    <input type="text" class="form-control1" name="username">
                  </div>
              </div>

              <div class="user_info">
                  <div class="label">
                      <label class="col-form-label">Name </label>
                  </div>
                  <div class="text">
                    <input type="text" class="form-control1" name="fullname">
                  </div>
              </div>

              <div class="user_info">
                  <div class="label">
                      <label class="col-form-label">Email </label>
                  </div>
                  <div class="text">
                    <input type="text" class="form-control1" name="email">
                  </div>
              </div>

              <div class="user_info">
                  <div class="label">
                      <label class="col-form-label">Phone number </label>
                  </div>
                  <div class="text">
                    <input type="text" class="form-control1" name="phonenumber">
                  </div>
              </div>

              <div class="user_info">
                  <div class="label">
                      <label class="form-check-label">Gender </label>
                  </div>
                  <div class="text">
                    <input type="checkbox" class="form-check-input" name="gender">
                    <label class="form-check-label" style="margin-right: 40px;">Female</label>
                    <input type="checkbox" class="form-check-input" name="gender">
                    <label class="form-check-label">Male</label>
                  </div>
              </div>

              <div class="user_info">
                  <div class="label">
                      <label class="col-form-label">Date of Birth </label>
                  </div>
                  <div class="text">
                    <input type="date" class="form-control1" name="birthdate">
                  </div>
              </div>

              <div class="user_info">
                  <div class="label">
                      <label class="col-form-label">Upload photo </label>
                  </div>
                  <div class="text">
                    <input type="file" class="form-control1" name="image">
                  </div>
              </div>

              <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success">


            </form>
            <div class="vertical_line"></div>
            <div class="user_image">
                <i class="fa-solid fa-circle-user"></i>
                <button type="button" >Change Image</button>
            </div>  
        </div>
    </div>
  
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