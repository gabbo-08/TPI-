<?php
$conteggio = 0.0;
$voto_tot = 0.0;

$mat = array( 
    "matematica" => rand(3,10),
    "italia" =>  rand(3,10), 
    "storia" =>  rand(3,10), 
    "inglese" =>  rand(3,10),
    "tpi" =>  rand(3,10), 
    "sre" =>  rand(3,10), 
    "religione" =>  rand(3,10)
); 

foreach ($mat as $m => $v) {
    echo $m . " = " . $v . "<br>"; 
    $conteggio += $v;
}
foreach ($mat as $m => $v) {
    if($v<6)
     echo "Debito in $m" . " => "."$v" . "<br>";
}
$voto_tot = $conteggio / count($mat);
$voto_tot = round($voto_tot, 2);

echo "La media dei voti è: " . $voto_tot;
?>