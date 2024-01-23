<?php
include 'connectDB.php';
session_start();

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

        $insert = "INSERT INTO register(username, password, email) VALUES (?, ?, ?, ?)";
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