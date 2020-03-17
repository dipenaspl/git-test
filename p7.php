<?php

//echo preg_match('/[^a­z]t/','asd cbt sdf');
//echo preg_match('/c.t\ss.f/','asd cbt sdf');
//echo preg_match('/^cat|dog$/','cat this is test');
//echo preg_match('/^(cat|dog)$/','cat');

echo preg_match('/^(http:\/\/|https:\/\/|http:\/\/www\.|https:\/\/www\.)[a-z].[a-z]{2,3}$/','http://www.google.com',$p);
print_r($p);
echo "\n";
?>