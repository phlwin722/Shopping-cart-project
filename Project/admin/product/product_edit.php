<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_code = $_POST['product_code'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    
    // File handling
    $target_dir = "product_image_list/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            echo json_encode(array("success" => false, "message" => "Sorry, your file is too large."));
        } else {
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo json_encode(array("success" => false, "message" => "Sorry, only JPG, JPEG, PNG files are allowed."));
            } else {
                // If everything is ok, try to upload file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // Prepare SQL statement
                    $stmt = $conn->prepare("UPDATE product_list SET Product_name=?, Quantity=?, Price=?, Category=?, Image=? WHERE Product_code=?");
                    $stmt->bind_param("ssssss", $product_name, $quantity, $price, $category, basename($target_file), $product_code);

                    // Execute the SQL statement
                    if ($stmt->execute()) {
                        echo json_encode(array("success" => true, "message" => "Product edited successfully."));
                    } else {
                        echo json_encode(array("success" => false, "message" => "Error updating product."));
                    }
                } else {
                    echo json_encode(array("success" => false, "message" => "Sorry, there was an error uploading your file."));
                }
            }
        }
    } else {
        echo json_encode(array("success" => false, "message" => "File is not an image."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}

$conn->close();
?>
