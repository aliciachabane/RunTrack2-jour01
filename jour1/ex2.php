<?php

$choix = $_GET["choix"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
if ($choix == 1) {
    echo "dracaufeu";}
if ($choix == 2) {
    echo "tiplouf";}
if ($choix ==3) {
    echo "bulbizzare";}

?>

</body>
</html>