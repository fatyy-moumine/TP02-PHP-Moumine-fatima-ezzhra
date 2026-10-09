<?php 
//1//  
const TAUX_TVA=20;
const DEVISE="MAD";
//2//
$prix_unitaire_HT=60;
$quantité=3;
//3//
$totale_HT=$prix_unitaire_HT*$quantité;
$montant_TVA=$totale_HT*(TAUX_TVA/100);
$total_TTC=$totale_HT+$montant_TVA;
//4//
$montant_final=$total_TTC;
$montant_final+=15;


?>

<!DOCTYPE.html>
<html>
<head><meta charset="utf-8"></head>
<body>
    <p><?="le totale HT =".$totale_HT.DEVISE ?></p>
    <p><?="le montant de TVA  est :".$montant_TVA.DEVISE ?></p>
    <p><?="le totale TTC est :".$total_TTC.DEVISE ?></p>
    <p><?="le montant  final est :".$montant_final.DEVISE ?></p>
    




</body>


</html>





