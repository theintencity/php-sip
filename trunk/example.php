<?php
require_once('PhpSIP.class.php');

$api = new PhpSIP('192.168.5.10'); // IP we will bind to
$api->setUsername('10000'); // authentication username
$api->setPassword('test'); // authentication password
// $api->setProxy('some_ip_here'); 
$api->addHeader('Event: resync');
$api->setMethod('NOTIFY');
$api->setFrom('10000@sip.domain.com');
$api->setUri('10000@sip.domain.com');

try
{
  $res = $api->send();
  echo "res1: $res\n";
  
} catch (Exception $e) {
  
  echo $e->getMessage()."\n";
}

?>
