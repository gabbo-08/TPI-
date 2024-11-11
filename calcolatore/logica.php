<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body align = 'center'>
    <h1>RISULTATO</h1>
    
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
            echo "<h1>Errore: Divisione per zero non consentita.</h1>";
            exit;
        } else {
            $risultato = $numero1 / $numero2;
        }
        break;
    default:
        echo "<h3>Operazione non valida</h3>";
        exit;
}

echo "<h3>Il risultato è: $risultato</h3>"."<br><br>";

}
?>

<a href="calcolatore.php">torna indietro</a>
</body>
</html>