<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

echo "<h2>Liste des étudiants</h2>";

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>Étudiant</th>
        <th>Note</th>
        <th>Résultat</th>
      </tr>";

foreach ($notes as $nom => $note) {
    if ($note >= 10) {
        $resultat = "Validé";
        $nbValides++;
    } else {
        $resultat = "Non validé";
    }

    echo "<tr>
            <td>$nom</td>
            <td>$note</td>
            <td>$resultat</td>
          </tr>";

    $somme += $note;

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

echo "</table>";
$moyenne = $somme / count($notes);
echo "<h3>Statistiques</h3>";
echo "Somme des notes : $somme <br>";
echo "Moyenne de la classe : $moyenne <br>";
echo "Nombre d'étudiants validés : $nbValides <br>";
echo "Meilleure note : $meilleureNote <br>";
echo "Étudiant ayant la meilleure note : $meilleurEtudiant";

?>
