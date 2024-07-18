<?php
 
 $str="la plateforme";
 $str2="vive";
 $str3="!";
 $str4=  . $str2 . $str . $str3  ;
 $val=6;
 $mybool="true";
 $mybool="false";
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
   
<h1>Hello</h1>
<p> bonjour <?=$str4;?></p>



<p> <?=$val+4;?><p><!--raccourci echo pour afficher mon php dans html-->
<p><?php echo($mybool);?></p><!--echo pour afficher mon php dans html-->






</body>
</html>