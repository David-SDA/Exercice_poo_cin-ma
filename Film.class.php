<?php
    class Film{
        private string $_titre;
        private DateTime $_dateSortie;
        private int $_duree;
        private Realisateur $_realisateur;
        private string $_synopsis;
        private Genre $_genreCinematographique;
        private array $_castingsFilm = [];

        /* Méthode __construct de la classe */
        public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, string $synopsis, Genre $genreCinematographique){
            $this->_titre = $titre;
            $this->_dateSortie = new DateTime($dateSortie);
            $this->_duree = $duree;
            $this->_realisateur = $realisateur;
            $this->_synopsis = $synopsis;
            $this->_genreCinematographique = $genreCinematographique;
            $this->_genreCinematographique->setFilmsGenre($this);
            $this->_realisateur->setFilmsRealises($this);
        }

        /* Getter et Setter du titre du film*/
        public function getTitre() : string{
            return $this->_titre;
        }
        public function setTitre(string $titre){
            $this->_titre = $titre;
        }

        /* Getter et Setter de la date de sortie du film */
        public function getDateSortie() : DateTime{
            return $this->_dateSortie;
        }
        public function setDateSortie(string $dateSortie){
            $this->_dateSortie = new DateTime ($dateSortie);
        }

        /* Getter et Setter de la durée du film */
        public function getDuree() : int{
            return $this->_duree;
        }
        public function setDuree(int $duree){
            $this->_duree = $duree;
        }

        /* Getter et Setter du réalisateur du film */
        public function getRealisateur() : Realisateur{
            return $this->_realisateur;
        }
        public function setRealisateur(Realisateur $realisateur){
            $this->_realisateur = $realisateur;
        }

        /* Getter et Setter du synopsis du film */
        public function getSynopsis() : string{
            return $this->_synopsis;
        }
        public function setSynopsis(string $synopsis){
            $this->_synopsis = $synopsis;
        }

        /* Getter et Setter du genre cinématographique du film */
        public function getGenreCinematograpique() : Genre{
            return $this->_genreCinematographique;
        }
        public function setGenreCinematographique(Genre $genreCinematographique){
            $this->_genreCinematographique = $genreCinematographique;
        }

        /* Getter et Setter des différents rôles incarnés par différents acteurs du film */
        public function getCastingFilm(){
            return $this->_castingsFilm;
        }
        public function setCastingFilm(Casting $castingFilm){
            array_push($this->_castingsFilm, $castingFilm);
        }

        /* Méthode pour lister les acteurs du film */
        public function listerCastingFilm(){
            $result = "Dans le film $this :<br>";
            foreach($this->_castingsFilm as $casting){
                $result .= "- " . $casting->getRoleCasting() . " a été incarné par " . $casting->getActeurCasting() . "<br>";
            }
            return $result;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_titre;
        }
    }
?>