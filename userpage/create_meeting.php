<?php

$zoom_api_key = "YOUR_ZOOM_API_KEY";
$zoom_api_secret = "YOUR_ZOOM_API_SECRET";
$meeting_topic = "Meeting Topic";
$meeting_date = "2023-04-15T10:00:00Z"; // Use ISO 8601 format for the meeting start time
$duration = 60; // Meeting duration in minutes

// Generate a random string for the meeting password
$meeting_password = bin2hex(random_bytes(4));

// Generate a signature to authenticate the API request
$time = time() * 1000 - 30000; // Subtract 30 seconds from the current time to account for clock skew
$data = base64_encode($zoom_api_key . $meeting_date . $time . $duration . $meeting_topic);
$hash = hash_hmac('sha256', $data, $zoom_api_secret, true);
$signature = $zoom_api_key . '.' . base64_encode($hash) . '.' . $time . '.' . $duration . '.' . $meeting_topic;

// Create the Zoom meeting using the Zoom API
$url = "https://api.zoom.us/v2/users/me/meetings";
$data = array(
    "topic" => $meeting_topic,
    "type" => 2,
    "start_time" => $meeting_date,
    "duration" => $duration,
    "password" => $meeting_password
);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\nAuthorization: Bearer $signature\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result);

// Print the meeting details
echo "Meeting created successfully!\n";
echo "Meeting ID: " . $response->id . "\n";
echo "Join URL: " . $response->join_url . "\n";
echo "Meeting Password: " . $meeting_password . "\n";

?>
