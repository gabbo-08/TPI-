<!DOCTYPE html>
<html>
    <head>
        <META HTTP-EQUIV=”Refresh” CONTENT=1; url=google.com >
    </head>
<body align = 'center'>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['argomenti'])) {
    $argomento = $_POST['argomenti'];
    switch ($argomento) {
        case 'array':
            header("Location: array.html");
            exit;
        case 'elenco':
            header("Location: elenco.php");
            exit;
        case 'foreach':
            header("Location: foreach.php");
            exit;
        case 'funzioni':
            header("Location: funzioni.php");
            exit;
        case 'basi':
            header("Location: basi.php");
            exit;
        default:
            echo "Selezione non valida.";
            break;
    }
}
?>

</body>
</html>