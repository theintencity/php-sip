<?php
require_once('PhpSIP.class.php');

try
{
  $api = new PhpSIP('192.168.5.10'); // IP we will bind to
  $api->setUsername('10000'); // authentication username
  $api->setPassword('secret'); // authentication password
  // $api->setProxy('some_ip_here'); 
  $api->addHeader('Event: resync');
  $api->setMethod('NOTIFY');
  $api->setFrom('sip:10000@sip.domain.com');
  $api->setUri('sip:10000@sip.domain.com');
  $res = $api->send();

  echo "response: $res\n";
  
} catch (Exception $e) {
  
  echo $e->getMessage()."\n";
}

?>
