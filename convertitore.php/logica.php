<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        /* Impostazioni generali */
* {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
    background: linear-gradient(135deg, #74ebd5, #ACB6E5);
}

/* Stile del titolo principale */
h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

/* Stile del risultato */
h3 {
    font-size: 24px;
    color: #555;
    margin: 15px 0;
}

/* Stile per il link di ritorno */
a {
    text-decoration: nome;
    color: #1e90ff;
    font-size: 18px;
    padding: 10px 15px;
    border: 2px solid #1e90ff;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

a:hover {
    background-color: #1e90ff;
    color: #fff;
}

    </style>
</head>
<body align='center'>
    <h1>RISULTATO</h1>
          <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $valore = $_POST['valore'];
                  $operazione = $_POST['operazione'];
                  $risultato = 0;
          
                  switch ($operazione) {
                      case "km":
                        echo "da  $valore km  a mi é: ";
                          $risultato = $valore / 1.6093; 
                          break;
                      case "mi":
                        echo "da $valore mi a km é: ";
                          $risultato = $valore * 1.6093; 
                          break;
                          exit;
                      }
                      echo "<h3>Il risultato è: " . number_format($risultato, 0) . "</h3><br><br>";
              } else {
                  echo "<h3>Nessun dato ricevuto.</h3>";
              }
              ?>   
    <a href="script.html">torna indietro</a>
</body>
</html>
