<?php

function bar($arg = '')
{
    echo "In bar(); argument was '$arg'.<br />\n";
}

$func = 'bar';
$func('test');  // This calls bar()

$original='Ty  ö ja eläkkeet';
$table=get_html_translation_table(HTML_ENTITIES);

echo "<pre>";
//print_r($table);

echo "\n";

$encoded=strtr($original,$table);
//echo htmlspecialchars_decode($encoded);

echo htmlspecialchars_decode($encoded);

echo "\n\n";


