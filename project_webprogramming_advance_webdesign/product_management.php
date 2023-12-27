<?php

include './header_footer/adminPortal.php';

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

function getTableNames($category)
{
    $tableNames = array(
        'product' => $category . "_product",
        'details' => $category . "_product_details",
        'specification' => $category . "_product_specification",
        'description' => $category . "_product_description",
    );

    return $tableNames;
}

if (isset($_POST['add'])) {
    $filename = $_FILES['productImage']['name'];

    if (move_uploaded_file($_FILES["productImage"]["tmp_name"], "imageFile/" . $filename)) {

        $category = $_POST['category'];

        // Insert into product table
        $productCode = strtoupper(substr($category, 0, 1)) . $_POST['productName'];
        $tableNames = getTableNames($category);

        $query = "INSERT INTO " . $tableNames['product'] . " (" . strtoupper($category) . "_CODE, PRODUCT_NAME, PRICE, PRODUCT_IMAGE, CATEGORY) VALUES 
        ('" . $productCode . "', '" . $_POST['productName'] . "', " . $_POST['productPrice'] . ", '" . $filename . "', '" . $category . "')";

        if ($conn->query($query) === true) {
            // First insert successful, get the last inserted ID (primary key)
            $productDetailsCode = $conn->insert_id;

            // Insert into details, specification, and description tables
            $detailsQuery = "INSERT INTO " . $tableNames['details'] . " (" . strtoupper($category) . "_PRODUCT_DETAIL_CODE, " . strtoupper($category) . "_CODE, COLOUR, SIZE) VALUES 
            ('" . $productDetailsCode . "', '" . $productCode . "', '" . $_POST['productColour'] . "', '" . $_POST['productSize'] . "')";

            $specificationQuery = "INSERT INTO " . $tableNames['specification'] . " (" . strtoupper($category) . "_SPECIFICATION_CODE, " . strtoupper($category) . "_PRODUCT_DETAIL_CODE, SLEEVE_LENGTH, ORIGIN_COUNTRY, OCCASION, MATERIAL) VALUES 
            ('" . $conn->insert_id . "', '" . $productDetailsCode . "', '" . $_POST['sleeveLength'] . "', '" . $_POST['shipFrom'] . "', '" . $_POST['occasion'] . "', '" . $_POST['material'] . "')";

            $descriptionQuery = "INSERT INTO " . $tableNames['description'] . " (" . strtoupper($category) . "_DESCRIPTION_CODE, " . strtoupper($category) . "_PRODUCT_DETAIL_CODE, LONG_DESCRIPTION, DESCRIPTION_FIRST, DESCRIPTION_SECOND, DESCRIPTION_THIRD, DESCRIPTION_FOURTH) VALUES 
            ('" . $conn->insert_id . "', '" . $productDetailsCode . "', '" . $_POST['longDescription'] . "', '" . $_POST['description_1'] . "', '" . $_POST['description_2'] . "', '" . $_POST['description_3'] . "', '" . $_POST['description_4'] . "')";


            // Execute the queries
            if ($conn->query($detailsQuery) && $conn->query($specificationQuery) && $conn->query($descriptionQuery)) {
                echo '<script>alert("Product added successfully!");</script>';
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Fail to update image.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    
    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        body{
            background-color:#FFF2F2;
        }

        .side_bar{
            height: auto;
            background-color: white;
            margin-left: 30px 
        }

        #special{
            margin-top: 20px;
        }

        .side_bar a{
            padding: 30px;
            text-align: center;
            display: block;
            text-decoration: none;
            font-size: 18px;
            color: black;
        }

        .side_bar a:hover{
            background-color: black;
            color: white;
        }

        .col-lg-10 h4{
            font-family: "Montserrat", sans-serif;
            font-size: 30px ;
            padding: 15px 0px 30px 0px;
        }

        .product_management, .product_description{
            width: 100%;
            height: auto;
            background-color: white;
        }

        .product_management h6, .product_description h6{
            font-size: 20px;
            padding:30px 0px 0px 20px ;
        }

        .form{
            padding: 15px 30px 15px 30px;
        }

        .form-group{
            margin-bottom: 20px;
        }

        #productphoto{
            font-size: 20px;
            font-weight: bold;
        }

        #noticeword{
            color: grey;
        }

        .btn{
            font-size: 20px;
            background-color:black;
            color:white;
            float: right;
            margin-right:20px;
            font-family: "Montserrat", sans-serif;
        }

        .btn:hover {
            background-color: black;
            color: white;
        }



    </style>
    </head>

<body>
        <div class="container_2">
            <div class="row" style="margin:auto;">
                <div class="col-lg-2">
                    <div class="side_bar">
                        <a href=" ">Dashboard</a>
                        <a href=" ">Profile</a>
                        <a href=" ">Inventory</a>
                        <a href=" ">Product Management</a>
                        <a href=" ">Message</a>
                    </div>
                </div>
            <div class="col-lg-10">
                <h4>Add Product</h4>

                <div class="product_management">
                    <form action=" " method="" name="" class="form">
                        <h6>Basic Information</h6>
                        <hr>
                        <div class="form from form-group ">
                            <label for="" id="productphoto">Product Image:</label><br>
                            <label for="" id="noticeword">This is the main page of your product page.</label>
                                <input type="file" class="form-control" name="productImage" id="productImage">
                        </div>
                        <div class="form form-group row">
                            <label for=" " class="col-sm-2 col-form-label">Product Name:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="productName" name="productName">
                            </div>
                        </div>
                        <div class="form form-group row">
                            <label for=" " class="col-sm-2 col-form-label">Product Price:</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="productPrice" name="productPrice">
                            </div>
                        </div>
                        
                        <div class="form form-group row">
                            <label for=" " class="col-sm-2 col-form-label">Product Quantity:</label>
                            <div class="col-sm-2">
                                <input type="text"  class="form-control" id="productPrice" name="productPrice">
                            </div>
                            <label for=" " class="col-sm-2 col-form-label">Product Size:</label>
                            <div class="col-sm-2">
                                <input type="text"  class="form-control" id="productPrice" name="productPrice">
                            </div>
                            <label for=" " class="col-sm-2 col-form-label">Product Colour:</label>
                            <div class="col-sm-2">
                                <input type="text"  class="form-control" id="productPrice" name="productPrice">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="product_description">
                <form action="" class="form">
                <h6>Product Long Description</h6>
                <hr>
                    <div class="form">
                        <label for="" class="col-sm-2 col-form-label">Long Description: </label>
                        <textarea class="form-control" rows="4" id="" name="" ></textarea>
                    </div>
                <h6>Product Specification</h6>
                <hr>
                    <div class=" form form-group row">
                        <label for=" " class="col-sm-2 col-form-label">Category:</label>
                        <div class="col-sm-2">
                            <input type="text"  class="form-control" id="category" name="category">
                        </div>
                        <label for=" " class="col-sm-2 col-form-label">Sleeve Length:</label>
                        <div class="col-sm-2">
                            <input type="text"  class="form-control" id="sleeveLength" name="sleeveLength">
                        </div>
                        <label for=" " class="col-sm-2 col-form-label">Ship From:</label>
                        <div class="col-sm-2">
                            <input type="text"  class="form-control" id="shipFrom" name="shipFrom">
                        </div>
                    </div>

                    <div class=" form form-group row">
                        <label for=" " class="col-sm-2 col-form-label">Occasion:</label>
                        <div class="col-sm-2">
                            <input type="text"  class="form-control" id="occasion" name="occasion">
                        </div>
                        <label for=" " class="col-sm-2 col-form-label">Material:</label>
                        <div class="col-sm-2">
                            <input type="text"  class="form-control" id="material" name="material">
                        </div>
                    </div>
                    <h6>Description</h6>
                    <hr>
                    <div class=" form form-group row">
                        <label for=" " class="col-sm-2 col-form-label">Description 1:</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" id="description_1" name="description_1">
                        </div>
                    </div>
                    <div class=" form form-group row">
                        <label for=" " class="col-sm-2 col-form-label">Description 2:</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" id="description_2" name="description_2">
                        </div>
                    </div>
                    <div class=" form form-group row">
                        <label for=" " class="col-sm-2 col-form-label">Description 3:</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" id="description_3" name="description_3">
                        </div>
                    </div>
                    <div class=" form form-group row">
                        <label for=" " class="col-sm-2 col-form-label">Description 4:</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" id="description_4" name="description_4">
                        </div>
                    </div>
                </form>
            </div>
        </div>

            
        </div>
        <button type="submit" name="add" class="btn">Add Product</button>
</body>
</html>

<?php
include './header_footer/footer.php';
?>