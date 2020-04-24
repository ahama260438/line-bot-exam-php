<?php



require "vendor/autoload.php";

$access_token = 'ocxZ1IXHMxHsw3esiam8sNGLMLAEOWIe5NQfTCFQS8kf6r+UujCJJ7Grra56/NWf852W+F/v6cxggiB1uwVi3xV96aXAaeGAQuh1BQX8W4GiwLxWOD53cVVp11KPRPR6MnVfRoSyVzyW4h31/WGUsAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a1ec203a5f1566e4e7214ecaabfba015';

$pushID = 'U7874b0de9080eeeb89ddf840ee3ed5fe';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







