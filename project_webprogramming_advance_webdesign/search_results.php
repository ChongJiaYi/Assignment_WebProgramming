<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productDetailCode = $_POST['women_product_detail_code'];
    $womenCode = $_POST['women_code'];
    $colour = $_POST['colour'];
    $size = $_POST['size'];

    // Sanitize the input or use prepared statements to prevent SQL injection
    $productDetailCode = mysqli_real_escape_string($conn, $productDetailCode);
    $womenCode = mysqli_real_escape_string($conn, $womenCode);
    $colour = mysqli_real_escape_string($conn, $colour);
    $size = mysqli_real_escape_string($conn, $size);

    // Modify the SQL query based on your database structure
    $sql = "SELECT * FROM women_product_details WHERE women_product_detail_code = '$productDetailCode' AND women_code = '$womenCode' AND colour = '$colour' AND size = '$size'";

    // Execute the query and fetch results
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Process and display the results as needed
        while ($row = mysqli_fetch_assoc($result)) {
            // Display product details
            echo '<div class="product">';

            // Adjust column names based on your database structure
            echo 'Product Code: ' . $row['your_product_code_column'] . ' - ';
            echo 'Color: ' . $row['your_color_column'] . ' - ';
            echo 'Size: ' . $row['your_size_column'];

            echo '</div>';
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle query error
        echo 'Error executing query: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>