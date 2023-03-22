<?php
    class Personne{
        private string $_nom;
        private string $_prenom;
        private string $_sexe;
        private DateTime $_dateNaissance;
    
    /* Méthode __construct de la classe */
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    /* Getter et Setter pour le nom de la personne */
    public function getNom() : string {
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom = $nom;
    }

    /* Getter et Setter pour le prénom de la personne */
    public function getPrenom() : string{
        return $this->_prenom;
    }
    public function setPrenom(string $prenom){
        $this->_prenom = $prenom;
    }

    /* Getter et Setter pour le sexe de la personne */
    public function getSexe(): string{
        return $this->_sexe;
    }
    public function setSexe(string $sexe){
        $this->_sexe = $sexe;
    }

    /* Getter et Setter pour la date de naissance de la personne*/
    public function getDateNaissance(): DateTime{
        return $this->_dateNaissance;
    }
    public function setDateNaissance(string $dateNaissance){
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    /* Méthode __toString de la classe */
    public function __toString(){
        return $this->_prenom . " " . $this->_nom;
    }
}
?>