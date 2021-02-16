<?php
$data = [
    'phone' => '923168656497', // Receivers phone
    'body' => 'Hello, tmr!', // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$token = 'yugm1lgoyndkt1ka';
$url = 'https://eu134.chat-api.com/instance225658/sendMessage?token='.$token;
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
echo $result;
echo "SUP";
?>