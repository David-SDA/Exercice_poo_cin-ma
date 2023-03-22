<?php
    class Casting{
        private Acteur $_acteurCasting;
        private Film $_filmCasting;
        private Role $_roleCasting;

        /* Méthode __construct de la classe */
        public function __construct(Acteur $acteurCasting, Film $filmCasting, Role $roleCasting){
            $this->_acteurCasting = $acteurCasting;
            $this->_filmCasting = $filmCasting;
            $this->_roleCasting = $roleCasting;
            $this->_acteurCasting->setCastingActeur($this);
            $this->_filmCasting->setCastingFilm($this);
            $this->_roleCasting->setCastingRole($this);
        }

        /* Getter et Setter de l'acteur qui a incarné ce rôle dans le film */
        public function getActeurCasting() : Acteur{
            return $this->_acteurCasting;
        }
        public function setActeurCasting(Acteur $acteurCasting){
            $this->_acteurCasting = $acteurCasting;
        }

        /* Getter et Setter du film dans lequel l'acteur a incarné ce rôle */
        public function getFilmCasting() : Film{
            return $this->_filmCasting;
        }
        public function setFilmCasting(Film $filmCasting){
            $this->_filmCasting = $filmCasting;
        }

        /* Getter et Setter du rôle qui a été incarné par l'acteur dans le film */
        public function getRoleCasting() : Role{
            return $this->_roleCasting;
        }
        public function setRoleCasting(Role $roleCasting){
            $this->_roleCasting = $roleCasting;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return "Dans le film " . $this->_filmCasting->getTitre() . ", " . $this->_roleCasting->getNomRole() . "a été incarné par " . $this->_acteurCasting->getPrenom() . " " . $this->_acteurCasting->getNom() . "<br>";
        }
    }
?>