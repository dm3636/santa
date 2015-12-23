<?php

include("simple_html_dom.php");

// Create DOM from URL or file
$html = file_get_html('http://www.gotlines.com/insults/');

echo '$html = ';
//var_dump($html);
/*
$items = $html->find('.line_box_text');

echo '$items = ';
print_r($items);


$jobs = array();
foreach($items as $item){
    $job = array();
    $job["title"] = $item->find('a')->plaintext;
    echo 'scum = ' . $item->find('a')->plaintext;
    $jobs[] = $job;
}

print_r($jobs);
*/
?>
