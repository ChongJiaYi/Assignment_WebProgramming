<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!--Icon-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <a href="">My Profile</a>
                <a href="">My Voucher</a>
                <a href="">Order History</a>
                <a href="">My Review</a>
                <a href="">Wishlist</a>
            </div>

            <div class="icons">
                <a href=""><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></a>
                <a href=""><i class="fa-regular fa-circle-user" style="color: #000000;"></i></a>
            </div>
        </div>

        <div class="menu">
            <a onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-bars" style="color: #000000;"></i></a>
            <div id="myDropdown" class="dropdown-content">
                <a href="">My Profile</a>
                <a href="">My Voucher</a>
                <a href="">Order History</a>
                <a href="">My Review</a>
                <a href="">Wishlist</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
