<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php

class Personne {
    // création des attributs
    private $nom;
    private $prenom;
    private $date_naissance;
    private $age;

    // initialisation des valeurs
    public function __construct($nom, $prenom, $date_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
        $this->age = date_diff(new DateTime($date_naissance),new DateTime());
    }

  
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

public function getAge()
    {
        return $this->age;
    }
public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }


public function afficherPersonne() 
    {
        $result = "<h2>$this->prenom $this->nom a $this->age ans</h2>";
        foreach ($this->date_naissance as $date_naissance) 
        {
            $result .= $date_naissance->getPrenom()." (". $date_naissance->getNom() ." a ".$date_naissance->getAge() ." ans ".")<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom." ".$this->age;
    }


}

    //instanciation des deux personnes
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

    //affichage des informations
    echo $p1->afficherPersonne();
    echo $p2->afficherPersonne();


?>
