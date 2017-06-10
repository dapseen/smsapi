<?php
/**
 * this is curl, it cant work on windows unless you have some additional extension,
 * it will definitely work on linux hosting Good luck man
 * Dont forget my cash oo
 */
$url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
        [
            'api_key' =>  '0d794717',
            'api_secret' => '980ad9b9b6bca71c',
            'to' => '23409057691023',
            'from' => '2348139369008',
            'text' => 'Hello from Nexmo'
        ]
    );

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

echo $response;