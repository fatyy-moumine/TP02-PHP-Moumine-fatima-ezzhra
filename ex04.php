<?php 
//Question1//
$v1=42;
$v2="42";
$v3=15.8;
$v4=true;
$v5=false;
$v6=null;
//Question2//
echo "<pre>".var_dump($v1)."</pre>";
echo "<pre>".var_dump($v2)."</pre>";
echo "<pre>".var_dump($v3)."</pre>";
echo "<pre>".var_dump($v4)."</pre>";
echo "<pre>".var_dump($v5)."</pre>";
echo "<pre>".var_dump($v6)."</pre>";

//Question3//
echo "<p>Conversion de '42' en entier :</p>";
var_dump((int)"42");

echo "<p>Conversion de 15.8 en entier :</p>";
var_dump((int)15.8);

echo "<p>Conversion de 42 en chaine :</p>";
var_dump((string)42);

//Question4//
echo "<p>affichage de 'true' avec echo:".true."</p>";
echo "<p>affichage de 'false' avec echo:".false."</p>";

echo "<p>affichage de 'true' avec var_dump():</p>";
var_dump(true);
echo "<p>affichage de 'false' avec var_dump():</p>";
var_dump(false);

//Question5//
// echo "convertion de 0 en booléen:".(bool)0 ."<br>";
// echo "convertion de ;0' en booléen:".(bool)"0" ."<br>";
// echo "convertion de 'PHP' en booléen:".(bool)"PHP";









?>

