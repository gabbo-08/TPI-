<?php

//gli array possono essere:
// Array associativo 
// Array numerico
/*$vet = array(1, "pippo", true);
echo $vet[1];

// Se vogliamo assegnare nella posizione 0 un valore basta mettere un uguale come intestazione
// $vet[0] = 15.3;

// Assegnare direttamente i valori nell'array tramite le quadre ([])
$vet2 = array(15, 3.6, "ciao", false); 

// Se voglio aggiungere una cosa all'interno dell'array 
$a = array(1, 2, 3, 4);
$a[4] = 10; 

// Ciclo for 
for ($i = 0; $i < count($vet); $i++) { 
    echo $vet[$i];
}
*/

$array1 = array(1, 2, 3, 4, 5, 6);
$array2 = array(2, 2, 4, 1, 1, 6);
$v3 = array(); 

echo "I numeri dentro gli array sono: ";

for ($i = 0; $i < count($array1); $i++) {
    for ($y = 0; $y < count($array2); $y++) { //! trova i numeri comuni nei due array
        if ($array1[$i] == $array2[$y]) {
            $trovato = false;     
            
           
            for ($c = 0; $c < count($v3); $c++) { 
                if ($v3[$c] == $array1[$i]) {    
                    $trovato = true;    //!vede se i numeri scritti si ripetono 
                    break; 
                }
            }
            
            
            if (!$trovato) {
                $v3[] = $array1[$i];           //! verifica se ci sono doppioni nel array 1 
                echo $array1[$i] . " ";
            }
        }
    }
}

?>
