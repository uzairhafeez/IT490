<!DOCTYPE html>
<html>
<body>

<?php

require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$drugName = $_POST['drugName'];

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");

$request = array();

$request['type'] = "apiReq";

$request['drugName'] = "$drugName";


$response = $client->send_request($request);


//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);

//echo $argv[0]." END".PHP_EOL;
?>

</body>
</html>
