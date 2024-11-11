<?php
// Funzione che modifica i valori delle variabili
function miaFunzione($a, $b) {
    // Concateno "pino" con il valore di $b
    $a = "pino" . $b;
    $b = 5;
}

// Definisco $A e $B
$A = 3;
$B = 3;

// Chiamo la funzione corretta (miaFunzione)
miaFunzione($A, $B);

// $a non esiste fuori dalla funzione, uso $A + $B per evitare errore
echo $A + $B . "\n"; // Sommo i valori di $A e $B (variabili globali)

// Funzione che modifica i parametri passati per riferimento
function miaFunzione_2(&$r, $d) {
    // Modifico $d e $r
    $d = $d + 1;
    $r = $r - 10;
}

// Definisco un'altra funzione che gestisce il controllo con isset
function miaFunzione_3() {
    $a = null; // Inizializzo $a per evitare l'errore
    $b = -1; // Valore di default di $b

    // Controllo se $a è impostato (non nullo)
    if (isset($a)) {
        $b = $a + 1; // Se $a esiste, modifico $b
    }

    return $b; // Restituisco il valore di $b
}

// Stampo il risultato della funzione miaFunzione_3
echo "Il valore di miaFunzione_3 è: " . miaFunzione_3() . "\n";

// Funzione 4 che utilizza "global" per accedere a $a
function miaFunzione_4() {
    // Dichiaro $a come variabile globale
    global $a;
    
    // Modifico $a
    if (!isset($a)) {
        $a = 10; // Inizializzo $a se non esiste
    } else {
        $a += 5; // Se $a esiste, aggiungo 5
    }

    return $a;
}

// Uso la funzione 4 per modificare e stampare $a
echo "Il valore di miaFunzione_4 è: " . miaFunzione_4() . "\n";
echo "Il nuovo valore di \$a dopo miaFunzione_4 è: " . $a . "\n";

?>
