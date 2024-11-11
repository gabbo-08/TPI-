<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my page</title>
</head>
<body>

<?php
function S($a = "ciao") {
// fa il return del tag  nel caso di $a
    return "<u>$a</u>";
}


echo S();
?>

</body>
</html>
