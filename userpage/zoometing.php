<?php
// require './vendor/autoload.php';

// // use Firebase\JWT\JWT;

// // class JwtHandler
// // {
// //     protected $jwt_secrect;
// //     protected $token;
// //     protected $issuedAt;
// //     protected $expire;
// //     protected $jwt;

// //     public function __construct()
// //     {
// //         // set your default time-zone
// //         date_default_timezone_set('Asia/Kolkata');
// //         $this->issuedAt = time();

// //         // Token Validity (3600 second = 1hr)
// //         $this->expire = $this->issuedAt + 3600;

// //         // Set your secret or signature
// //         $this->jwt_secrect = "this_is_my_secrect";
// //     }

// //     public function jwtEncodeData($iss, $data)
// //     {

// //         $this->token = array(
// //             //Adding the identifier to the token (who issue the token)
// //             "iss" => $iss,
// //             "aud" => $iss,
// //             // Adding the current timestamp to the token, for identifying that when the token was issued.
// //             "iat" => $this->issuedAt,
// //             // Token expiration
// //             "exp" => $this->expire,
// //             // Payload
// //             "data" => $data
// //         );

// //         $this->jwt = JWT::encode($this->token, $this->jwt_secrect, 'HS256');
// //         return $this->jwt;
// //     }

// //     public function jwtDecodeData($jwt_token)
// //     {
// //         try {
// //             $decode = JWT::decode($jwt_token, $this->jwt_secrect, array('HS256'));
// //             return $decode->data;
// //         } catch (Exception $e) {
// //             return $e->getMessage();
// //         }
// //     }
// // }
// // require_once __DIR__ . '/vendor/autoload.php';


// // Get the meeting topic, date, and duration from the form
// // $topic = $_POST['topic'];
// // $date = $_POST['date'];
// // $duration = $_POST['duration'];

// // Set up the Zoom API request
// $zoom_api_key = 'gdr0HUpGRxGU934BDpUKzA';
// $zoom_api_secret = 'Kn8U8OOe4Xsfnt4O7KjVUdZk73hWUjBMW6qu';
// $zoom_api_url = 'https://api.zoom.us/v2/users/me/meetings';
// $request_headers = array();
// $request_headers[] = 'Authorization: Bearer ' . generate_jwt_token($zoom_api_key, $zoom_api_secret);
// $request_headers[] = 'Content-Type: application/json';

// $request_body = array(
//     'topic' => $topic,
//     'type' => 2,
//     'start_time' => $date,
//     'duration' => $duration,
// );

// // Send the API request and get the response
// $curl = curl_init($zoom_api_url);
// curl_setopt($curl, CURLOPT_HTTPHEADER, $request_headers);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($request_body));
// $response = curl_exec($curl);
// curl_close($curl);

// // Parse the response and insert the meeting details into the database
// $meeting = json_decode($response);
// // if (isset($meeting->id)) {
//     if(isset($_POST['Create Meeting']))
//     // Database connection details
//     // $servername = "localhost";
//     // $username = "username";
//     // $password = "password";
//     // $dbname = "database_name";

//     // Create database connection
//     // $conn = new mysqli($servername, $username, $password, $dbname);

//     // // Check connection
//     // if ($conn->connect_error) {
//     //     die("Connection failed: " . $conn->connect_error);
//     // }

//     $topic = $_POST['topic'];
//     $date = $_POST['date'];
//     $duration = $_POST['duration'];



//     // SQL query to insert meeting details into the database
//     $sql = "INSERT INTO tbl_zoom (meeting_topic, meeting_date, meeting_duration, zoom_meeting_id, zoom_join_url, zoom_password) 
//             VALUES ('$topic', '$date', '$duration', '$meeting->id', '$meeting->join_url', '$meeting->password')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Meeting created successfully. Meeting ID: " . $meeting->id;
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     // Close the database connection
//     $conn->close();

// // } else {
// //     echo 'Error creating meeting: ' . $meeting->message;
// // }



// // Function to generate JWT token for Zoom API authentication
// // function generate_jwt_token($api_key, $api_secret) {
// //     $payload = array(
// //         'iss' => $api_key,
// //         'exp' => time() + 3600,
// //     );
// //     return JWT::encode($payload, $api_secret, 'HS256');
// // }
// use Firebase\JWT\JWT;

// class JwtHandler
// {
//     protected $jwt_secrect;
//     protected $token;
//     protected $issuedAt;
//     protected $expire;
//     protected $jwt;

//     public function __construct()
//     {
//         // set your default time-zone
//         date_default_timezone_set('Asia/Kolkata');
//         $this->issuedAt = time();

//         // Token Validity (3600 second = 1hr)
//         $this->expire = $this->issuedAt + 3600;

//         // Set your secret or signature
//         $this->jwt_secrect = "this_is_my_secrect";
//     }

//     public function jwtEncodeData($iss, $data)
//     {

//         $this->token = array(
//             //Adding the identifier to the token (who issue the token)
//             "iss" => $iss,
//             "aud" => $iss,
//             // Adding the current timestamp to the token, for identifying that when the token was issued.
//             "iat" => $this->issuedAt,
//             // Token expiration
//             "exp" => $this->expire,
//             // Payload
//             "data" => $data
//         );

//         $this->jwt = JWT::encode($this->token, $this->jwt_secrect, 'HS256');
//         return $this->jwt;
//     }

//     public function jwtDecodeData($jwt_token)
//     {
//         try {
//             $decode = JWT::decode($jwt_token, $this->jwt_secrect, array('HS256'));
//             return $decode->data;
//         } catch (Exception $e) {
//             return $e->getMessage();
//         }
//     }
// }


?>



<!DOCTYPE html>
<html>
<head>
    <title>Create Zoom Meeting</title>
    <style>
        /* Add the CSS code here */
        /* Center the form */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Style the form labels */
label {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

/* Style the form input fields */
input[type=text],
input[type=datetime-local],
input[type=number] {
    padding: 0.5rem;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 1.2rem;
    margin-bottom: 1rem;
    width: 80%;
    max-width: 500px;
}

/* Style the form submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type=submit]:hover {
    background-color: #3e8e41;
}

    </style>
</head>
<body>
    <h1>Create Zoom Meeting</h1>
    <form action="#" method="post">
        <label for="topic">Meeting Topic:</label>
        <input type="text" id="topic" name="topic" required><br><br>
        <label for="date">Meeting Date and Time:</label>
        <input type="datetime-local" id="date" name="date" required><br><br>
        <label for="duration">Meeting Duration (minutes):</label>
        <input type="number" id="duration" name="duration" min="1" max="120" value="60" required><br><br>
        <input type="submit" value="Create Meeting">
    </form>
</body>
</html>
