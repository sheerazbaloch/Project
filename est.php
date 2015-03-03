<?php

$client = new nusoap_client('https://api.ote.wildwestdomains.com/wswwdapi/wapi.asmx?wsdl', 'WSDL');


$error = $client->getError();
if ($error) {
    die("client construction error: {$error}\n");
}

$param = array('inputData' => 'sample data');
$answer = $client->call('testAssignment', array('parameters' => $param), '', '', false, true);

$error = $client->getError();
if ($error) {
    print_r($client->response);
    print_r($client->getDebug());
    die();
 }

this is main file

 ?> 