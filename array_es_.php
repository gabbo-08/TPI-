<?php
$array = [1, 2, 3, 4, 5, ];  
$v3 = [];  //? Array per memorizzare i numeri pari già trovati
echo "array di numeri con solo numeri pari\r\n ";

 echo "array : [";
for ($i = 0; $i < count($array); $i++) {
    //! Verifica se l'elemento corrente è pari
    if ($array[$i] % 2 == 0) { 
        $trovato = false;  
        //! Ciclo per verificare se il numero è già presente in $v3
        for ($j = 0; $j < count($v3); $j++) {
            if ($v3[$j] == $array[$i]) {
                $trovato = true;  //! Se il numero è già in $v3, imposta $trovato a true
                break;  //? Esci dal ciclo
            }
        }

        //! Se il numero non è stato trovato in $v3, aggiungilo e stampalo
        
        if (!$trovato) {
            $v3[] = $array[$i];  //? Aggiungi il numero all'array $v3
            echo  $array[$i] . ",";  //? Stampa il numero pari
        }
    }
}
echo "]";
?>
