<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Page</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    
    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bevan&display=swap">

    <style>
        body{
            background-color:#FFF2F2;
        }

        .outline{
            border: 2px solid black;
        }

        .card-header{
            background-color:#7286D3;
            text-align:center;
        }

        .card-header p{
            padding-top: 20px;
            font-size:40px;
            font-family: 'Bevan', cursive;
            color: white;
            -webkit-text-stroke: 2px black;
            
        }

        .userIcon{
            font-size:100px;
            text-align: center;
        }

        .form-group{
            margin-bottom:5%;
            font-size:20px;
        }

        .btn{
            background-color:#7286D3;
        }

    </style>
    </head>

<body>
<?php
if (isset($_POST['login'])){

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="e_commerce_system";

        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $select = "select USERNAME, PASSWORD from admin where USERNAME= '".$_POST['username']."'";
        $result = $conn->query($select);
        if ($result == true){
            while($data = $result->fetch_assoc()){
                if($data['USERNAME'] == $_POST['username'] && $data['PASSWORD'] == $_POST['password']){
                    echo '  <div class="alert alert-success" role="alert">
                                <strong>Success!</strong> Your operation was successful.
                            </div>';

                            header('Location: product_management.php');
                }
            }
        }
        $conn->close();
}
?>






<div class="container mt-5">
    <div class="card mx-auto border-dark" style="max-width: 500px;">
        <div class="card-header ">
            <p>WELCOME</p>
        </div>
        <div class="card-body text-center">
            <div class="userIcon">
                <i class="fa-regular fa-circle-user" style="color: #000000;"></i>
            </div>
            <form action="" method="post" name="">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include './header_footer/footer.php';

?>