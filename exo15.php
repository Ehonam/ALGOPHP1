<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php

class Personne {
    // attributs
    public $nom;
    public $prenom;
    public $date_naissance;
// initialisation des différentes valeurs
    public function __construct($nom, $prenom, $date_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
    }
// creation getter
    public function getAge() {
        $dateCourante = new DateTime();
        $ecart = $this->date_naissance->diff($dateCourante);
        return $ecart->y;
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->prenom . " " . $p1->nom . " a " . $p1->getAge() . " ans<br>";
echo $p2->prenom . " " . $p2->nom . " a " . $p2->getAge() . " ans<br>";

?>
