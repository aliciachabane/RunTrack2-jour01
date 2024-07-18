<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma calculatrice</title>
    <link rel="stylesheet" href="calculatrice.css">

</head>
<body>

    <h1> Ma Calculatrice </h1>

<form action = "calculatrice.php" method= "post"
>
      <!-- je vais creer un bloc calculatrice-->

<div class = "calculatrice">
        <!-- nombre 1-->

    <div class = "bloc-nombre"> <!-- creation d'un bloc par nombre et style-->

        <div>
             <label for = "nombre1"> nombre 1</label>
             <input type = "number" name= "nombre1" id="nombre1">
        </div>
        <br>
        
        <!-- nombre 2-->
        <div> 
            <label for = "nombre2"> nombre 2</label>
            <input type = "number" name="nombre2" id="nombre2">
        </div>
        
        <br>

    </div>  
    
        <!-- creation de select pour pouvoir y inclure le mode de calcul-->
        
    <div class = "operateur"><br>
    <label for = "operateur"> choisir votre mode de calcul</label><br>
    
        <select name = "operateur">
                

           <option> addition </option>
           <option> soustraction</option>
           <option> multiplication </option>
           <option> division </option>
           <option> modulo </option>
        </select>   
    </div>
    <br>
    <br>
    


        <!-- je dois maintenant creer un bouton et un bloc div-->
    <div class = "bouton">

           <button type= "submit" name= "submit" value= "submit">calcul </button>
           <input type= "reset" name="reset" value= "Effacer">

    </div>
    <br>
    
    

    
</div>
</form>


<?php

$nombre1= $_POST["nombre1"] ?? 0;
$nombre2= $_POST ["nombre2"] ?? 0;
$operateur=$_POST ["operateur"] ?? ""; // Donne une valeur par défaut

// Affichage des valeurs pour le débogage
echo "Nombre 1: " . $nombre1 . "<br>";
echo "Nombre 2: " . $nombre2 . "<br>";
echo "Opérateur: " . $operateur . "<br>";

// Vérification des conditions d'erreur
if ($nombre1 <= 0 && $nombre2 <= 0) {
    echo "Erreur : Les deux nombres doivent être positifs.";
}
// Vérification des opérateurs et calculs
if ($operateur == "addition") {
    $resultat = $nombre1 + $nombre2;
   
    echo "$nombre1 + $nombre2 = $resultat";
} elseif ($operateur == "soustraction") {
   
    $resultat = $nombre1 - $nombre2;
    echo "$nombre1 - $nombre2 = $resultat";

} elseif ($operateur == "multiplication") {
    $resultat = $nombre1 * $nombre2;
    echo "$nombre1 * $nombre2 = $resultat";

} elseif ($operateur == "division") {
    if ($nombre2 != 0) {
        $resultat = $nombre1 / $nombre2;
        echo "$nombre1 / $nombre2 = $resultat";
    
} elseif ($operateur == "modulo") {
    
    $resultat = $nombre1 % $nombre2;
    echo "$nombre1 % $nombre2 = $resultat";
}
} else {
    echo "Erreur : Division par zéro";
}




?>


       



</body>
</html>

