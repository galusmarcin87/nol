<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api-demo.ringpublishing.com/graphql/content/website/fdgdf",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\"query\":\"{\\r\\n\\t  story(id: \\\"yyy\\\") {\\r\\n\\t\\ttitle\\r\\n\\r\\n\\t\\t}\\r\\n\\t  }\",\"variables\":{}}",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Cookie: acc_segment=82"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
