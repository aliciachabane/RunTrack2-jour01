<?php

$painchoco = 0;
$croissant = 0;
$brioche = 0;
$étudiant =  $_GET["nom"];

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

if ($étudiant = "Theo")
{$painchoco = 3; $brioche = 2; echo $croissant;}

if ($étudiant = "Walid")
{$painchoco = 7;
$croissant = 6;
echo $brioche;}

?>

</body>
</html>