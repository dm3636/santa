<?php

echo 'scum';
// Create DOM from URL or file
//$html = str_get_html('http://www.gotlines.com/insults/');
$html = file_get_html('https://davidwalsh.name/php-notifications');

// Find all insults
foreach($html->find('a') as $e)
    echo $e->href . '<br>';

?>
