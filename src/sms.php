<?php
//example of sending an sms using an API key / secret
require_once '../vendor/autoload.php';

//create client with api key and secret
$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('0d794717', '980ad9b9b6bca71c'));

//send message using simple api params
$message = $client->message()->send([
    'to' => '+23409057691023',
    'from' => '+2348139369008',
    'text' => 'Test message from the Nexmo PHP Client'
]);

//array access provides response data
echo "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL;

sleep(1);