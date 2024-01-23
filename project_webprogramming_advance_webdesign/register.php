<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "e_commerce_system";

$conn = mysqli_connect ($servername, $username, $password, $database_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function validatePassword($password)
{
    $errors = [];
    if (strlen($password) < 8) {
        $errors[] = "Password length must be at least 8 characters.";
    }

    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Password should contain at least one lowercase letter.";
    }

    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password should contain at least one uppercase letter.";
    }

    if (!preg_match('/\d/', $password)) {
        $errors[] = "Password should contain at least one number.";
    }

    if (!preg_match('/[^a-zA-Z\d]/', $password)) {
        $errors[] = "Password should contain at least one special character.";
    }
    return $errors;
}

function verify($username, $password, $email)
{
    $errors = []; 

    if (empty($username) || empty($password) || empty($email)) {
        $errors[] = "Please fill in all fields.";
    }

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $errors[] = "Username can only contain letters and numbers.";
    }

    if ($password !== $_POST["repeatpassword"]) {
        $errors[] = "Password and Repeat Password do not match.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    return $errors; 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $passwordErrors = validatePassword($password);
    $inputErrors = verify($username, $password, $email);
    $errors = array_merge($passwordErrors, $inputErrors);

    if (empty($errors)) {
        $checkExistingUser = "SELECT username FROM register WHERE username = ?";
        $checkStmt = $conn->prepare($checkExistingUser);
        $checkStmt->bind_param("s", $username);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $errors[] = "Username already exists. Please choose a different username.";
            $_SESSION['errors'] = $errors;
            header('Location: register.php');
            exit();
        }

        $checkStmt->close();

        $insert = "INSERT INTO register(UserName, password, email) VALUES (?, ?, ?, ?)";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
        $stm = $conn->prepare($insert);
        $stm->bind_param("ssss", $username, $hashedPassword, $email, $contactnumber);

        if ($stm->execute()) {
            echo "<script>alert('Register Successful!'); window.location.href = 'userlogin.php'</script>";
            exit();
        }

        $stm->close();
    } else {
        $_SESSION['errors'] = $errors;
        header('Location: register.php');
        exit();
    }

    $conn->close();
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header('Location: register.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
    body{
    background-color: rgba(121, 122, 214, 0.534);
    }

    .signup{
    margin-top: 10px;
    position: absolute;
    background: #f1f7fe;
    border-radius: 20px;
    padding: 20px;
    width: 50%;
    left: 25%;
    text-align: center;
    outline: solid 2px rgb(161, 104, 161);
    }

    .signuptext{
    background: #3e4684;
    padding: 5px;
    margin-bottom: 20px;
    color: white;
    font-family: cursive;
    }

    .signuptext h3{
    margin: 0px;
    }

    .signup .username{
    background: white;
    box-shadow: 0 0 2px #f1f7fe;
    margin-top: 10px;
    border-radius: 20px;
    color: black;
    padding: 10px;
    text-align: left;
    outline: solid 1px;
    }

    .signup .username input{
    outline: none;
    border: none;
    }

    .signup .email{
    background: white;
    box-shadow: 0 0 2px #f1f7fe;
    margin-top: 10px;
    border-radius: 20px;
    color: black;
    padding: 10px;
    text-align: left;
    outline: solid 1px;
    }

    .signup .email input{
    outline: none;
    border: none;
    }

    .signup .password{
    background: white;
    box-shadow: 0 0 2px #f1f7fe;
    margin-top: 10px;
    border-radius: 20px;
    color: black;
    padding: 10px;
    text-align: left;
    outline: solid 1px;
    }

    .signup .password input{
    outline: none;
    border: none;
    }

    .signup .signupbutton{
    margin-top: 30px;
    margin-bottom: 70px;
    padding: 10px;
    background: #3e4684;
    color: white;
    border: none;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 600;
    width: 200px;
    font-family: sans-serif;
    }

    button{
    cursor: pointer;
    }

    button:hover{
    opacity: 0.8;
    }

    .signother{
    text-align: center;
    }

    .signother img{
    width: 30px;
    height: 30px;
    }

    .footer{
    position: absolute;
    background-color: rgb(121, 122, 214);
    display: flex;
    padding: 20px;
    top: 115%;
    width: 100%;
    justify-content: space-between;
    }

    .category,.aboutstore,.customerinfo,.followus,.paymentmethod,.logistic{
    flex-direction: column;
    }

    .heading{
    color: black;
    text-decoration: underline;
    margin-bottom: 10px;
    }

    .category a,.aboutstore a,.customerinfo a,.followus a{
    text-decoration: none;
    color: black;
    font-size: 14px;
    }

    .paymentmethod img,.logistic img{
    width: 60px;
    height: 35px;
    background-color: white;
    margin-bottom: 5px;
    }
    </style>
</head>

<body>
    <div class="signup">
        <div class="signuptext">
            <h3>SIGN UP</h3>
        </div>
        
        <div class="username">
            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="username">
        </div>

        <div class="password">
            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="minimum 8 digits">
        </div>

        <div class="password">
            <label for="">Confirm Password</label><br>
            <input type="password" name="" placeholder="re-enter your password">
        </div>

        <div class="email">
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="username@gmail.com">
        </div>

        <a href="userlogin.php"><button class="signupbutton">Sign Up</button></a>

        <div class="signother">
            <p>Or Sign In With</p>
            <a href=""><img src="img/google.png"></a>
            <a href=""><img src="img/facebook.png"></a>
        </div>
    </div>

    <div class="footer">
        <div class="category">
            <h6 class="heading">Category</h6>
            <a href="">Men's Clothes</a><br>
            <a href="">Women's Clothes</a>
        </div>

        <div class="aboutstore">
            <h6 class="heading">About Store</h6>
            <a href="">Voucher</a><br>
            <a href="">Promotion</a>
        </div>

        <div class="customerinfo">
            <h6 class="heading">Customer Info</h6>
            <a href="">Wishlist</a><br>
            <a href="">Refund & Return</a><br>
            <a href="">Customer Service</a><br>
            <a href="">Contact Us</a>
        </div>

        <div class="followus">
            <h6 class="heading">Follow Us</h6>
            <a href="">Facebook</a><br>
            <a href="">Instagram</a><br>
            <a href="">X (Twitter)</a>
        </div>

        <div class="paymentmethod">
            <h6 class="heading">Payment Method</h6>
            <img src="img/fpx.png">
            <img src="img/visa.png">
            <img src="img/applepay.png"><br>
            <img src="img/tng.png">
            <img src="img/mastercard.png">
            <img src="img/maybank.png">
        </div>

        <div class="logistic">
            <h6 class="heading">Logistic</h6>
            <img src="img/ninja.png">
            <img src="img/jnt.png">
            <img src="img/poslaju.png"><br>
            <img src="img/fedex.png">
            <img src="img/dhl.png">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>