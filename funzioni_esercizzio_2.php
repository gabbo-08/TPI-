<!DOCTYPE html>
<html>
<head>
    <title>table</title>
</head>
<body>

<?php
function table( $r,  $c) {
    $table = "<table border='1'>"; 

    for ($i = 0; $i < $r; $i++) {
        $table .= "<tr>"; 

        for ($j = 0; $j < $c; $j++) {
            $table .= "<td> ($i,$j) </td>"; 
            
        }

        $table .= "</tr>"; 
    }

    $table .= "</table>";

    return $table;
    
    echo $table;
}
$table = table(4,7);




?>

</body>
</html>
