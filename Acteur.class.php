<?php
    class Acteur extends Personne{
        private array $_filmsParticipes = [];
        private array $_roles = [];

        /* Méthode __construct de la classe */
        public function __construct($nom, $prenom, $sexe, $dateNaissance){
            parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        }

        /* Getter et Setter des films auquel l'acteur a participe */
        public function getFilmsParticipes() : array{
            return $this->_filmsParticipes;
        }
        public function setFilmsParticipes(Film $filmParticipe){
            array_push($this->_filmsParticipes, $filmParticipe);
        }

        /* Getter et Setter des roles l'acteur a incarne */
        public function getRoles() : array{
            return $this->_roles;
        }
        public function setRoles(array $roles){
            array_push($this->_roles, $roles);
        }
    }
?>