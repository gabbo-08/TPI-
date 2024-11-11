<?php 
$persone = array(
    array("nome" => "mario", "età" => 59),
    array("nome" => "bob", "età" => 60),
    array("nome" => "antonio", "età" => 22)
);

foreach($persone as $x) 
if (in_array('bob', $x)) //in_array ("cosa cercare", "dove cercare")
print_r($x);
?>
