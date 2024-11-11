<!DOCTYPE html>
<html>
<head>
    <title>TAB 20X20 NUMERI CASUALI</title>
</head>
<body>

    <h1 align = "center ">Tabella 20x20 di numeri casuali</h1>

    <?php
    //? Generiamo un array di numeri casuali
    $numeri = [];
    for ($i = 0; $i < 400; $i++) {
        $numeri[] = rand(1, 100);
    }
    ?>
    
    <table border="1"  align="center">
        <?php

        //? Iniziamo la riga
        $counter = 0;
        foreach ($numeri as $n) {
            //? Aggiungiamo la cella <td> con il numero
            echo "<td>$n</td>";

            //? Se è l'ultimo elemento di una riga, chiudiamo il tag <tr>
            if ($counter % 4 == 3) {
                echo "</tr>";
            }
            //? Incrementiamo il contatore
            $counter++;
        }
        ?>
    </table>

</body>
</html>
