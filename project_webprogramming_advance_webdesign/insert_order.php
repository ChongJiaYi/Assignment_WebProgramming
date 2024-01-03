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
  $order_id=$_POST["order_id"];
  $cart_id = $_POST["cart_id"];
  $customer_id = $_POST["customer_id"];
  $shipping_code = $_POST["shipping_code"];
  $total_amount = $_POST["total_amount"];
  

  // Insert data into the database
  $query = "INSERT INTO orders (order_id, cart_id, customer_id, shipping_code, total_amount) VALUES ('$order_id', '$cart_id', '$customer_id', '$shipping_code', '$total_amount')";

  if ($conn->query($query) === TRUE) {
      echo "Order inserted successfully";
  } else {
      echo "Error: " . $query . "<br>" . $conn->error;
  }


}

?>

