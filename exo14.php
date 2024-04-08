<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
$dateNaissance = "22-04-1983";
$dateCourante = date("08-04-2024");
$diff = date_diff(date_create($dateNaissance), date_create($dateCourante));

$annees = $diff->format('%y'); // date au format jj-mm-aaaa ou dd-mm-yyyy en anglais
$mois = $diff->format('%m');
$jours = $diff->format('%d');

echo "Age de la personne : $annees ans $mois mois $jours jours";
?>
