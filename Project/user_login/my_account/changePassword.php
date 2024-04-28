<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die ('Connection error' . $conn->connect_error);
    }else {
        $currentPassword = $_GET ['currentPassword'];
        $newPassword = $_GET['newPassword'];

        $stmt_update = $conn->prepare("UPDATE user_information SET Password = ? WHERE Password = ?");
        $stmt_update->bind_param("ss",$newPassword, $currentPassword);

        if ($stmt_update->execute()) {
            header('Content-Type: application/json');
            echo json_encode(array("success" => true));
        }else {

        }
        $stmt_update->close();
    }

    $conn->close();
?>