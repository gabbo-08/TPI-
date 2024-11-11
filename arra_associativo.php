<?php 
//array associativi 
// chiave = valore
//data set
$a = array (
    "nome" => "carlo",
     "età" => 39,
     "cognome" => "sole",
) ;

$A = ['nome' => 'carlo',
'eta' => 39, 
'cognome' => "sole"
];

echo $a ['cognome'];
echo  "<br>";

foreach($a as $x => $y) {
        echo $x . " = " . $y . "<br>";
}
 $V = ['nome' => 'carlo',
 2 => 39, 
'cognome' => "sole"
        ];
echo $V [ 'nome' ] . "<br>"; // anxhe se dichiaro la chiave senza apici lo trova ugualmente


// costante usere define () 
//la parole ciao a valore 3 


define ("ciao", 3);
echo 4 + ciao . "<br>"


?>