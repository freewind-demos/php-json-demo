<?php

$array = array('aaa' => 111, 'bbb' => 222);
print_r($array);

print("\n\n");

$json = json_encode($array, JSON_PRETTY_PRINT);
print($json);

print("\n\n");

$decoded = json_decode($json);
print_r($decoded);

?>
