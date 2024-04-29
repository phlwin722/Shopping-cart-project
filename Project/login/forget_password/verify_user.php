<?php 
$servername = "localhost";
$username = "root";
$dbpassword = ""; // Changed variable name to avoid conflict with form field
$dbname = "ecommerce";

// Create connection 
$con = new mysqli($servername, $username, $dbpassword, $dbname);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
} else {
    $secret_quest = $_GET['secret_quest'];
    $answer = $_GET['answer'];

    $sql = "SELECT Email FROM user_information WHERE Secret_question = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $secret_quest);
    $stmt->execute();
    $result = $stmt->get_result();

    // Prepare JSON response
    $response = array();

    if ($result->num_rows > 0) {
        $sqll = "SELECT Email FROM user_information WHERE Answer = ?";
        $stmt_answer = $con->prepare($sqll);
        $stmt_answer->bind_param("s", $answer);
        $stmt_answer->execute();
        $resultt = $stmt_answer->get_result();

        if ($resultt->num_rows > 0) {
            $response["success"] = true;
        }
    } else {
        $response["success"] = false;
    }

    // Output JSON response
    header('Content-Type: application/json');
    echo json_encode($response);

    $stmt->close();
}
$con->close();
?>
