<!DOCTYPE html>
<html>
<head>
    <title>Form Esercizio</title>
</head>
<body align = "center">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        extract($_POST);

        
        if (isset($username)) {
            echo "<P>Username: $username</P>";
        } 

        
        if (isset($stato_civile)) {
            echo "<p>Stato civile: $stato_civile</p>";
        } 

        
        if (isset($interesse) ) {
            echo "<p>Interessi selezionati: $interesse</p>";                    
        } 

        
        if (isset($conoscenza) ) {
            echo "<p>Come ci hai conosciuto: $conoscenza </p>";        
        } 
    }
    ?>


<h1>BENVENUTO</h1>
</body>
</html>
