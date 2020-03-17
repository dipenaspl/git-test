<?php
$lines="Why not just make our *code* work for what it is supposed to?
In fact, it depends on the purpose of your <cap>app</cap> and on your target.
If you're developing a throwaway #app#, you won't obviously spend your time on quality.
But if it's something more serious, it will become mandatory.";

echo $contents=preg_replace(
    array('@\*(.*?)\*@i','@\#(.*?)\#@i','@<c[^>]*>(.*?)</c[^>]*>@i'),
    array('<b>$1</b>','<b>$1</b>','<aaa>$1</aaa>'),
        $lines
    );

//echo "\n";
?>