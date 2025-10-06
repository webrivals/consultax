<?php
// Allow your JavaScript to access this file
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Feefo API URL
$url = "https://api.feefo.com/api-feefo/api/10/reviews/service?origin=www.consultax.co.uk&merchant_identifier=consultax-accountants-limited&since_period=YEAR";

// Fetch Feefo data from the server side (no CORS issue)
$response = @file_get_contents($url);

// If Feefo API fails
if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(["error" => "Failed to fetch Feefo data"]);
    exit;
}

// Output the raw JSON to the browser
echo $response;
?>
