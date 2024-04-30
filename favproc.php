<?php
session_start();

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if place name and description are set
    if (isset($_POST['placeName']) && isset($_POST['placeDescription'])) {
        // Create place array
        $place = [
            'name' => $_POST['placeName'],
            'description' => $_POST['placeDescription']
        ];

        // Check if favorites session variable exists
        if (!isset($_SESSION['favorites'])) {
            $_SESSION['favorites'] = [];
        }

        // Add place to favorites
        $_SESSION['favorites'][] = $place;

        // Return success response
        echo json_encode(["success" => true]);
    } else {
        // Return error response if place name or description is not set
        http_response_code(400);
        echo json_encode(["error" => "Place name or description not provided"]);
    }
} else {
    // Return error response if request method is not POST
    http_response_code(405);
    echo json_encode(["error" => "Method Not Allowed"]);
}
?>