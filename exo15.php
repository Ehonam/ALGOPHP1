<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>
<?php

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

    // mise en place des getters & setters
public function getNom()
    {
        return $this->nom;
    }
public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

public function getPrenom()
    {
        return $this->prenom;
    }
public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

public function getDate_naissance()
    {
        return $this->date_naissance;
    }
public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }
    
    // utilisation de la fonction getAge
    public function getAge() {
        $dateCourante = new DateTime();
        $intervalle = $this->date_naissance->diff($dateCourante);
        return $intervalle->y;
    }

}

    //instanciation des deux personnes
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
    
    //affichage des informations
echo $p1->prenom . " " . $p1->nom . " a " . $p1->getAge() . " ans<br>";
echo $p2->prenom . " " . $p2->nom . " a " . $p2->getAge() . " ans<br>";

?>
