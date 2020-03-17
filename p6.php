<?php

$str = "age:30 weight:60kg";
//sscanf($str,"%s:%d %s:%d%s",$s1,$age,$s2,$weight,$s3);
//sscanf($str,"age:%d weight:%dkg",$age,$weight);
$arg = sscanf($str,"%s:%d %s:%d%s");
//var_dump($age,$weight);
print_r($arg);

?>