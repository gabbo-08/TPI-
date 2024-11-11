<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calcolatore</title>
</head>

<body align="center">
    <h2>Calcolatore</h2>
    <form method="POST">
        Numero 1: <input type="text" name="numero1" id="n1"><br><br>
        Numero 2: <input type="text" name="numero2" id="n2"><br><br>
        
        <select name="operazione" id="operazione">
            <option value="addizione">Addizione (+)</option>
            <option value="sottrazione">Sottrazione (-)</option>
            <option value="moltiplicazione">Moltiplicazione (x)</option>
            <option value="divisione">Divisione (:)</option>
        </select><br><br>

        <input type="submit" name="invia" value="Calcola"> <br><br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operazione = $_POST['operazione'];
        
        switch ($operazione) {
            case "addizione":
                $risultato = $numero1 + $numero2;
                break;
            case "sottrazione":
                $risultato = $numero1 - $numero2;
                break;
            case "moltiplicazione":
                $risultato = $numero1 * $numero2;
                break;
            case "divisione":
                if ($numero2 == 0) {
                    echo "Errore: Divisione per zero non consentita.";
                    exit;
                } else {
                    $risultato = $numero1 / $numero2;
                }
                break;
        }
        echo "<h1>Risultato: $risultato</h1>";
    }
?>
</body>
</html>
