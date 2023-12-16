
    <style>
        .header{
          width: 100%;
          height: 90px;
          background-color: #E5E0FF;
          background-size: cover;
          display: flex;
          justify-content: end;
        }

        .search_bar{
          width: 100%;
          max-width: 500px;
          height: 35px;
          margin-top: 20px;
          margin-right: 50px;
          background-color:#7286D3;
          padding: 10px 20px;
          display: flex;
          align-items: center;
          border-radius:20px ;
        }

        .search_bar input{
          width:400px;
          background-color:#7286D3;
          border-radius: 20px;
          outline: 20px;
          border: 0px;
          font-size: 20px;
        }

        .search_bar button i{
          width: 20px;
        }

        .search_bar button{
          background-color: #7286D3;
          border-radius: 20px;
          border: 0px;
        }

        .header_nav{
            display: flex;
            margin-top: 60px;
            margin-left: -450px;
            margin-right:150px;
        }

        .header_nav a{
            text-decoration: none;
            color: #000000;
            padding-right: 10px;
            padding-top:5px;
            font-size: 12px;
        }

        .header_profileIcon{
            text-decoration: none;
        }

        .header_profileIcon i{
            color: #8EA7E9;
            text-decoration: none;
            font-size: 40px;
            margin-top: 25px;
            margin-right: 50px;
        }

    </style>
     <!--header-->
    <div class="header">
        <div class="search_bar">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
            </button>
            <input type="text" id="header_search" placeholder="search">
            <button type="submit">
                <i class="fa-solid fa-camera" style="color: #000000;"></i>
            </button>  
        </div> 

            <div class="header_nav">
            <a href="">My Profile</a>
            <a href="">My Voucher</a>
            <a href="">Order History</a>
            <a href="">My Review</a>
            <a href="">Wishlist</a>
            </div>

            <a href="" class="header_profileIcon">
                <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
                <i class="fa-solid fa-circle-user" style="color: #000000;"></i>
            </a>
    </div>

