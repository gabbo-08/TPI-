<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo di Registrazione</title>
</head>
<body>
    <h2>Modulo di Registrazione</h2>
    <form action="process.php" method="POST">
        <!-- Campo Username -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <!-- Stato Civile -->
        <p>Stato civile:</p>
        <input type="radio" id="coniugato" name="stato_civile" value="Coniugato">
        <label for="coniugato">Coniugato</label><br>
        <input type="radio" id="non_coniugato" name="stato_civile" value="Non coniugato">
        <label for="non_coniugato">Non coniugato</label><br><br>

        <!-- Argomenti di Interesse -->
        <p>Argomenti di interesse:</p>
        <input type="checkbox" id="tecnologia" name="interessi[]" value="Tecnologia">
        <label for="tecnologia">Tecnologia</label><br>
        <input type="checkbox" id="motori" name="interessi[]" value="Motori">
        <label for="motori">Motori</label><br>
        <input type="checkbox" id="viaggi" name="interessi[]" value="Viaggi">
        <label for="viaggi">Viaggi</label><br><br>

        <!-- Dove hai saputo del nostro sito? -->
        <label for="fonte">Dove hai saputo del nostro sito?</label>
        <select id="fonte" name="fonte">
            <option value="">Seleziona un'opzione</option>
            <option value="Giornali">Giornali</option>
            <option value="TV">TV</option>
            <option value="Internet">Internet</option>
            <option value="Amici">Amici</option>
        </select><br><br>

        <!-- Pulsante di invio -->
        <button type="submit">Invia</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Estrazione dei dati dal modulo
    extract($_POST);

    // Verifica e stampa dei campi compilati
    if (isset($username) && !empty($username)) {
        echo "Username: " . htmlspecialchars($username) . "<br>";
    }

    if (isset($stato_civile) && !empty($stato_civile)) {
        echo "Stato civile: " . htmlspecialchars($stato_civile) . "<br>";
    }

    if (isset($interessi) && !empty($interessi)) {
        echo "Interessi: " . implode(", ", array_map('htmlspecialchars', $interessi)) . "<br>";
    }

    if (isset($fonte) && !empty($fonte)) {
        echo "Fonte: " . htmlspecialchars($fonte) . "<br>";
    }
}
?>