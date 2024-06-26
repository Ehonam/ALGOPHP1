<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php

$age = 32;
$sexe = "F";

function imposable($age, $sexe) {
   if (($sexe === 'F' AND $age >= 18 && $age <= 35) OR ($sexe === 'M' AND $age > 20)) {
       return "imposable";
   } else {
       return "non imposable";
   }
}

$statutImposition = imposable($age, $sexe);
echo "Age : $age<br>";
echo "Sexe : $sexe<br>";
echo "La personne est $statutImposition.";

?>
