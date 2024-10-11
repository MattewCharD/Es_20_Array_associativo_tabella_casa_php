<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
</head>
<body style="background-color: lightblue;">

<table style="border: 1px solid black; border-collapse: collapse ;"> 
    <tr> 
        <th style="border: 1px solid black; padding:10px;">Indirizzo</th> 
        <th style="border: 1px solid black; padding:10px;">Metri quadri</th> 
        <th style="border: 1px solid black; padding:10px;">Prezzo al metro quadro</th> 
        <th style="border: 1px solid black; padding:10px;">Prezzo totale</th>
    </tr>

<?php 

    $casa = array("indirizzo" => "Via della Colombina" , "metriq" => 120.45 ,"przMtrQ" => 2200.5 );
    $casa["przTot"] = $casa["metriq"] * $casa["przMtrQ"];
   
    $stampa ="<tr>";
    foreach ($casa as $val ) {
        $stampa=$stampa . "<td style='border: 1px solid black; padding:10px;'>".$val."</td>";
    }
    echo "$stampa";

?>


</table>
</body>
</html>