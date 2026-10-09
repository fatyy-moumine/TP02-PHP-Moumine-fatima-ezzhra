<?php 
//Question1//
$moyenne=20;
//Question2//
if($moyenne<0 || $moyenne>20):
    echo"Note invalide";
//Question3//
elseif($moyenne<10):
    echo "Non validé ";
elseif($moyenne<12):
    echo"Passable ";
elseif($moyenne<14):
    echo"Assez bien ";

elseif($moyenne<16):
    echo"Bien ";

else:
    echo"Très bien";
endif;

//Question4//










?>