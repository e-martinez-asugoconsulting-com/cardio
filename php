<?php
// Endpoint URL
$endpoint = 'https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DMU0000008hWP';

// Get form data
$formData = http_build_query($_POST);

// Set up cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($ch);

// Close cURL
curl_close($ch);

// Send back Salesforce response
echo $response;
?>
