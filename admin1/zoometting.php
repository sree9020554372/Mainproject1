
<?php
require_once '../vendor/autoload.php';
 
use \Firebase\JWT\JWT;
use GuzzleHttp\Client;
 
define('ZOOM_API_KEY', 'API_KEY_HERE');
define('ZOOM_SECRET_KEY', 'API_SECRET_HERE');


function getZoomAccessToken() {
    $key = ZOOM_SECRET_KEY;
    $payload = array(
        "iss" => ZOOM_API_KEY,
        'exp' => time() + 3600,
    );
    return JWT::encode($payload, $key);    
}



function createZoomMeeting() {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.zoom.us',
    ]);
 
    $response = $client->request('POST', '/v2/users/me/meetings', [
        "headers" => [
            "Authorization" => "Bearer " . getZoomAccessToken()
        ],
        'json' => [
            "topic" => "Let's Learn WordPress",
            "type" => 2,
            "start_time" => "2021-01-30T20:30:00",
            "duration" => "30", // 30 mins
            "password" => "123456"
        ],
    ]);
 
    $data = json_decode($response->getBody());
    echo "Join URL: ". $data->join_url;
    echo "<br>";
    echo "Meeting Password: ". $data->password;
}
 
createZoomMeeting();



function updateZoomMeeting($meeting_id) {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.zoom.us',
    ]);
 
    $response = $client->request('PATCH', '/v2/meetings/'.$meeting_id, [
        "headers" => [
            "Authorization" => "Bearer " . getZoomAccessToken()
        ],
        'json' => [
            "topic" => "Let's Learn Laravel",
            "type" => 2,
            "start_time" => "2021-07-20T10:30:00",
            "duration" => "45", // 45 mins
            "password" => "123456"
        ],
    ]);
    if (204 == $response->getStatusCode()) {
        echo "Meeting is updated successfully.";
    }
}
 
updateZoomMeeting('MEETING_ID');




function list_meetings($next_page_token = '') {
    $client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
  
    $arr_request = [
        "headers" => [
            "Authorization" => "Bearer ". getZoomAccessToken()
        ]
    ];
 
    if (!empty($next_page_token)) {
        $arr_request['query'] = ["next_page_token" => $next_page_token];
    }
 
    $response = $client->request('GET', '/v2/users/me/meetings', $arr_request);
     
    $data = json_decode($response->getBody());
 
    if ( !empty($data) ) {
        foreach ( $data->meetings as $d ) {
            $topic = $d->topic;
            $join_url = $d->join_url;
            echo "<h3>Topic: $topic</h3>";
            echo "Join URL: $join_url";
        }
 
        if ( !empty($data->next_page_token) ) {
            list_meetings($data->next_page_token);
        }
    }
}
 
list_meetings();


$client = new GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);
  
$response = $client->request('GET', '/v2/past_meetings/MEETING_ID/participants', [
    "headers" => [
        "Authorization" => "Bearer ". getZoomAccessToken()
    ]
]);
  
$data = json_decode($response->getBody());
if ( !empty($data) ) {
    foreach ( $data->participants as $p ) {
        $name = $p->name;
        $email = $p->user_email;
        echo "Name: $name";
        echo "Email: $email";
    }
}



function deleteZoomMeeting($meeting_id) {
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.zoom.us',
    ]);
 
    $response = $client->request("DELETE", "/v2/meetings/$meeting_id", [
        "headers" => [
            "Authorization" => "Bearer " . getZoomAccessToken()
        ]
    ]);
 
    if (204 == $response->getStatusCode()) {
        echo "Meeting deleted.";
    }
}
 
deleteZoomMeeting('MEETING_ID_HERE');

?>