<?php
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<b>$i</b> ";
    } else {
        echo "$i ";
    }
    $i += 2;
}
echo "<br>";
$compteur = 5;
$nbWhile = 0;

while ($compteur < 5) {
    $nbWhile++;
}
echo "Nombre d'executions de while : $nbWhile<br>";

$compteur = 5;
$nbDoWhile = 0;

do {
    $nbDoWhile++;
} while ($compteur < 5);

echo "Nombre d'executions de do-while : $nbDoWhile <br>";

for ($i = 1; $i <= 20; $i++) {

    if ($i >= 16) {
        break;
    }

    if ($i % 3 == 0) {
        continue;
    }
    echo $i ;
}
?>
