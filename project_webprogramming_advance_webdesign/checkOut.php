<?php
include './header_footer/header.html';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Out</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>

    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
         body{
          background-color:#FFF2F2;
        }

        .form-control {
            width: 400px;
            background-color: #7286D3;
            border-radius: 20px 0 0 20px;
        }

        .checkout{
          background-color: #F2E2E2;
          width: auto;
          height: auto;
          margin: 50px;
        }

        .checkout h1{
          font-family: "Montserrat", sans-serif;
          padding: 50px;
        }

        .address_letter{
          background-image: url(assignment_image/checkou_address.jpg);
          background-size: cover;
          height: 100px;
          margin-left: 20px;
          margin-right: 20px;
          display: flex;
          justify-content: space-between;
        }

        .name_phone{
          margin-top: 30px;
          margin-left: 60px
        }

        .address{
          margin-top: 30px ;
          margin-right: 100px;
        }

        .chekout_productOrdered{
          margin-top: 40px;
          margin-left: 10px;
          margin-right: 10px;
        }

        #productName{
          margin-left: 20px;
        }

        .shipping_fee{
          width: auto;
          height: auto;
        }
        
        .content{
          display: flex;
          justify-content: space-between;
          align-items: flex-start;
          padding: 30px;
        }

        .shipping_option{
          display: flex;
          padding-right: 40px;
        }

        .selectionshp, .shippingPrice, .shipping_option h5{
          margin-right: 50px;
        }

        .selectionshp p{
          font-size: 10px;
          color: grey;
        }

        .totalAmount{
          color: grey;
          text-align: end;
          padding: 30px;
          margin-right: 40px;
        }

        .totalAmount span{
          font-size: 40px;
          color: #000000;
          font-family: "Montserrat", sans-serif;
          margin-left: 30px;
        }

        .choose{
          display: flex;
          justify-content: space-between;
          padding: 20px;
        }

        .section1,.section2{
          display: flex;
        }

        .payment_selection img{
            width: 50px;
            height: 30px;
        }

        .section1 h5, .section2 h5{
          margin-right: 50px;
        }

        .section2 a{
          padding-right: 50px;
        }

        .calculationPart{
          display: flex;
          padding: 30px;
          padding-right: 80px;
          justify-content: right;
          align-items: center;
        }

        .amount_title{
          margin-right: 40px;
        }

        .amount_number{
          text-align: end;
        }

        .placeOrder{
          text-align: end;
          margin-right: 100px;
        }
      
        .placeOrder button{
          width: 300px;
          height: 50px;
          border-width: 1px;
          background-color: #000000;
          color: white;
          font-family:'Slabo', serif;
          font-size: 25px;
        }

        #message{
            background-color: white;
            max-width:300px;
            border-radius: 0px
        }

        #product_image{
            max-width: 80px;
        }

         /*mobile size*/
         @media only screen and (max-width: 600px){
            .checkout{
                background-color: #F2E2E2;
                width: auto;
                height: auto;
                margin: 20px;
            }

            .name_phone{
                margin-top: 15px;
                margin-left: 30px;
                margin-right: 30px;
            }

            .address{
                margin-top: 40px ;
                margin-right:10px;
            }

            .address_letter{
                height: 120px;
            }

            #product_image{
                max-width: 55px;
            }

            .py-2{
                margin-right: 25px;
                font-size: 12px;
            }

            #productName{
                margin-left: 0px;
                font-size:14px;
            }

            #message, .col-form-label{
                display: none;
            }

            .shipping_option{
                margin-right: 20px;
            }

            .payment_selection img{
                width: 30px;
                height: 15px;
            }

            .payment_selection button{
                margin-bottom: 10px;
            }

            .section1 h5{
                margin-right: 20px;
            }

            .section2 h5{
                margin-right: 20px;
                margin-left:10px;
            }

            .section2 a{
                padding-right: 20px;
            }
         }


    </style>
  </head>

  <body>
<!--address-->
<div class="checkout">
    <h1>Check Out</h1>
    <div class="address_letter">
        <div class="name_phone">
            <h6>Subing</h6>
            <h6>(+60) 1116993260</h6>
        </div>
        <div class="address">
            <h6>1234, Jalan ABC 2/1, Taman Kajang, 43000, Kajang, Selangor</h6>
        </div>
    </div>

    <!--product ordered-->
    <div class="chekout_productOrdered">
      <div class="container card-container">
          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2">PRODUCT</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 " >Unit Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 ">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2">Item Subtotal</div>
                    </th>
                  </tr>
                </thead>

                <!--Product 1-->
                <tbody> 
                  <tr>
                    <th scope="row" class="border-0">
                      <div class="p-2" id="product_content">
                        <img src="assignment_image/dress (3).jpg" alt="" id="product_image" class="img-fluid rounded shadow-sm">
                        <div class="align-middle">
                          <p id="productName" class="mb-0">Women Sleeveless Strappy Summer Long Dress</p>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle">RM 45.00</td>
                    <td class="border-0 align-middle">2</td>
                    <td class="border-0 align-middle">RM 90.00</td>
                  </tr>
                </tbody>
              </table>
          </div>
      </div>
    </div>

      <!--selection and shipping fee-->
      <div class="shipping_fee">
        <div class="content">
          <!--message box-->
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Messages</label>
            </div>
            <div class="col-auto">
              <input type="text" id="message" class="form-control">
            </div>
          </div>
          <!--shipping method-->
          <div class="shipping_option">
              <h5>Shipping Option:</h5>
              <div class="selectionshp">
                  <h5>J&T Express</h5>
                  <p>Receive by 08-08-2023</p>
                  <a href="#">CHANGE</a>
              </div>
              <div class="shippingPrice">
                <h6>RM 4.90</h6>
              </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="totalAmount">
          <p>Order Total: <span>RM 94.90</span></p>
      </div>
</div>

<!--adding voucher and payment method-->
<div class="checkout">
    <div class="choose">
        <div class="section1">
          <h5>Payment Method: </h5>
          <div class="payment_selection">
              <button><img src="assignment_image/tng_image.png"></button>
              <button><img src="assignment_image/fpx_image.png"></button>
              <button><img src="assignment_image/masterCard_image.png"></button>
              <button><img src="assignment_image/myBank_image.png"></button>
              <button><img src="assignment_image/applyPay_image.png"></button>
              <button><img src="assignment_image/visa_image.png"></button>
          </div>
        </div>
        <div class="section2">
            <h5>Store Voucher</h5>
            <a href="#">SELECT VOUCHER</a>
        </div>
    </div>
    <hr>
    <div class="calculationPart">
        <div class="amount_title">
            <p>Merchandise Subtotal: </p>
            <p>Shipping Fee: </p>
            <p>Voucher: </p>
            <p>Total Payment: </p>
        </div>
        <div class="amount_number">
            <p>RM 90.00</p>
            <p>RM 4.90</p>
            <p>RM 10.00</p>
            <h4>RM 84.90</h4>
        </div>
    </div>
</div>
<div class="placeOrder">
  <button type="submit">Place Order</button>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>