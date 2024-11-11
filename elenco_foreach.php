<?php
//? var_dump() mostra sia il tipo che il contenuto di una variabile.
//! print_r() stampa solo il contenuto dell'array o dell'oggetto.
//. rand(1, 100) genera un numero casuale tra 1 e 100.
// <br> va a capo nella visualizzazione HTML.
echo "stampa in modo detagliato con tutti i tag";
echo "<br>"; // Va a capo.
echo "<br>"; // Va a capo.

$numeri = [1, 2, 3, 4, 5, "pipo"]; // Un array numerico misto (numeri interi e una stringa).
print_r($numeri); // Stampa l'array, mostrandone il contenuto in modo leggibile.

echo "<br>"; // Va a capo.
echo "stampa tutto in modo piu visibile ma con un ciclo";
echo "<br>"; // Va a capo.
echo "<br>"; // Va a capo.
for ($i = 0; $i < count($numeri); $i++) {
    // Il ciclo for itera attraverso tutti gli elementi dell'array.
    echo $numeri[$i] . "<br>"; // Stampa ogni elemento dell'array e va a capo dopo ogni stampa.
}

echo "<br>"; // Va a capo.
echo "stampa elementi dell array con una sola stringa molto piu semplice";
echo "<br>"; // Va a capo.
echo "<br>"; // Va a capo.

foreach ($numeri as $m) {
    // foreach è più semplice per iterare attraverso gli array.
    // Porta ogni elemento dell'array $numeri nella variabile $m ad ogni iterazione.
    // posso prendere pure l'indice dove sta lpavorando con l'aggiunta => $contenuto dei vari alementi che trovo all suo interno "associazione"
    echo $m . "<br>"; // Stampa ogni elemento dell'array e va a capo dopo ogni stampa.
}

for ($i = 0; $i < 10; $i++) {
    $ar[] = rand(1, 100);
}
echo "<h3> Elenco numerato</h3>";
echo "<ol>";
foreach ($ar as $t) {
    
        echo "<li>$t</li>";
}
echo "</ol>";
echo "<br>";
echo "<h3> elenco numeri pari </h3>";
echo "<ul>";
foreach ($ar as $t) {
    if ($t%2 == 0)
    echo "<li>$t</li>";
}
echo "</ul>";
echo "<h3> Elenco numerato con indice </h3>";
echo "<ul>";
foreach ($ar as $t => $n) {
    if ($t%2 == 0)

    echo "<li>".($t+1) ." =>"." $n  </li>";
}
echo "</ul>";
?>
