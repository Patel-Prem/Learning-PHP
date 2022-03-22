
<?php

echo "This is a Example of cURL";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.google.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_response = curl_exec($ch);

curl_close($ch);


echo '<textare cols="35" rows="15">'. $server_response .'</textarea>';

?>