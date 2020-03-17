<?php

$string='PHP:training:at:ASPL';
$token=strtok($string,':');
echo '<pre>';
print_r($token);
$token = strtok(":");

echo "\n";
print_r($token);
echo "\n\n";
exit;

?>