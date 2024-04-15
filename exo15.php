
<?php
    //instanciation des deux personnes
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

class Personne {
    // création des attributs
    public $nom;
    public $prenom;
    public $date_naissance;
    // initialisation des valeurs
    public function __construct($nom, $prenom, $date_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
    }
    // utilisation de la fonction getAge
    public function getAge() {
        $dateCourante = new DateTime();
        $intervalle = $this->date_naissance->diff($dateCourante);
        return $intervalle->y;
    }
}
    //affichage des informations
echo $p1->prenom . " " . $p1->nom . " a " . $p1->getAge() . " ans<br>";
echo $p2->prenom . " " . $p2->nom . " a " . $p2->getAge() . " ans<br>";

?>
